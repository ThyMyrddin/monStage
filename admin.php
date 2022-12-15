<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
    <title>admin</title>
    <style>
#filtre {
    position:absolute;
    left:200px;
    top: 150px;
    background-color:white ;
    width: 70%;
    padding: 20px;
    border: 1px solid white ;
    width:;
    
}
select{
    border:1PX solid GRAY;
    width:100%;
    height:30px;
    
}
input{
    border-radius:10px;
}
a img {
    position: absolute;
    right: 10px;
    bottom: 15px;
    position: fixed;
    width: 30px;
    height: 30px;
}
.butt{
    border:none;
   
    font-size:13px;
    font-weight:500;
    color:gray;
    margin-top:5px;
    
    height:40px;
    width:150px;
    float:right;

}



    </style>
</head>
<body>
    <a name='up'></a>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
       @font-face {
    font-family: Poppins-Regular;
    src: url('fonts/poppins/Poppins-Regular.ttf'); 
  }
  
  @font-face {
    font-family: Poppins-Bold;
    src: url('fonts/poppins/Poppins-Bold.ttf'); 
  }
  
  @font-face {
    font-family: Poppins-Medium;
    src: url('fonts/poppins/Poppins-Medium.ttf'); 
  }
  
  @font-face {
    font-family: Montserrat-Bold;
    src: url('fonts/montserrat/Montserrat-Bold.ttf'); 
  }

  nav{
    float:right;
    display:inline-block;
    width:100%;
    background-color:#ced4da;
    height:80px;
    border-radius:4px;
    padding-top: 30px;
  }
  .menu {
        
        text-align: center;
        font-size:13px;
        text-transform:uppercase;
        color:#495057;
        padding-bottom:20px;
        font-weight: bold;
        
    
}
.logo{
    width:10%;
   
    padding-top:5px;
    position: absolute;
    top:5px;
    left:5px;
   
  }
nav a
{
    text-decoration: none;
    text-transform: uppercase;
  
    
}
nav li
{
    float: right;
    display: inline-block;
    vertical-align: center;
    width: 155px;
    padding-left:1%;
   
}
nav a :hover{
  color:white;
}

</style>
<body>
    <nav>
        <img class="logo" src="img/logo-ensak.png">
        <ul >
                      <li><a href="index.html"><h2 class="menu">page d'acceuil</h2></a></li>
                      <li ><a href="acceuil.php"><h2 class="menu">Acceuil</h2></a></li>
                      <li><a href="partenaire.php"><h2 class="menu">Partenaire</h2></a></li>
                      <li ><a href="apropos.php"><h2 class="menu" >A propos de l'ENSA</h2></a></li>
                      <li><a href="esp.php"><h2 class="menu">Identification</h2></a></li>
                  </ul>
              </nav>    
</body>
</html>

    <article id="filtre">
        <div>
        <form action="" methode='GET'>
            <select name="filtre" size="">
            <option value=""></option>
            <option value="1">liste des stages et encadrants</option>
            <option value="2">liste des stages validés pour soutenance</option>
            <option value="3">liste des étudiants par enseignant</option>
            <option value="4">liste des étudiants sans encadrants</option>
            <option value="5">liste des étudiants sans rapport</option>
            <option value="6">liste des étudiants et leur notes</option>
        </select>
        <input type="submit" name="filtrer" value="Filtrer" class="butt">
        </form>
        </article>
        
        <?php 
if(isset($_GET['filtrer'])){
    $a=$_GET['filtre'];
    switch ($a) {
        case '1':
            header("location: admin.php#stageenc");
            break;
        case '2':
            header("location: admin.php#stgv");
            break;
        case '3':
            header("location: admin.php#etu");
            break;
        case '4':
            header("location: admin.php#senc");
            break;
        case '5':
            header("location: admin.php#srap");
            break;
        case '6':
            header("location: admin.php#notes");
            break;
    }}?>
        <a href="#up"><img src="img/up.png"></a>
    </div><br><br>
    <span><br><?php include "deconnexion1.php"; ?></span>
    <a name="stageenc"></a>
    <br><br><br><br><br>
    <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Stages et encadrants</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-responsive-xl">
                      <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Stage</th>
                          <th>Description du stage</th>
                          <th>Encadrant du stage</th>
                          <th>&nbsp;</th>
                        </tr>
                      </thead>
            <?php
            $link=mysqli_connect("localhost","root","","stage_ensak");
            $sql="select intitule,description,nomp,prenomp,loginp from stage,prof where stage.id_prof=prof.id_prof";
            $result=mysqli_query($link,$sql);
            while($row=mysqli_fetch_assoc($result)){ ?>
                <tbody>
                        <tr class="alert" role="alert">
                            <td>
                            </td>
                            <td><?php echo $row['intitulé']; ?> </td>
                            <td><?php echo $row['description']; ?> </td>
                          <td class="d-flex align-items-center">
                              
                              <div class="pl-3 email">
                                  <span><?php echo $row['nomp'].' '.$row['prenomp'];?></span>
                                  <span><?php echo $row['loginp'];?></span>
                              </div>
                          </td>
                          
                          
                          <td>
                        </td>
                        </tr>
                      </tbody>
            <?php } ?>
       </table>
                </div>
            </div>
        </div>
    </div>
</section>
        <br><br>
    <a name="stgv"></a><section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Stages validé</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-responsive-xl">
                      <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Stage</th>
                          <th>Description du stage</th>
                          <th>Encadrant du stage</th>
                          <th>&nbsp;</th>
                        </tr>
                      </thead>
            <?php
            $link=mysqli_connect("localhost","root","","stage_ensak");
            $sql1="select intitule,description,nomp,prenomp,loginp from stage,prof where stage.id_prof=prof.id_prof and validation='1'";
            $result1=mysqli_query($link,$sql1);
            while($row1=mysqli_fetch_assoc($result1)){ ?>
                <tbody>
                        <tr class="alert" role="alert">
                            <td>
                            </td>
                            <td><?php echo $row1['intitulé']; ?> </td>
                            <td><?php echo $row1['description']; ?> </td>
                          <td class="d-flex align-items-center">
                              
                              <div class="pl-3 email">
                                  <span><?php echo $row1['nomp'].' '.$row1['prenomp'];?></span>
                                  <span><?php echo $row1['loginp'];?></span>
                              </div>
                          </td>
                          
                          
                          <td>
                        </td>
                        </tr>
                      </tbody>
            <?php } ?>
       </table>
                </div>
            </div>
        </div>
    </div>
</section>
        
        <br><br>
    <a name="etu"></a><section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Etudiants et leur enseignant</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-responsive-xl">
                      <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Etudiant</th>
                          <th>Enseignant</th>
                         
                          <th>&nbsp;</th>
                        </tr>
                      </thead>
            <?php
            $link=mysqli_connect("localhost","root","","stage_ensak");
            $sql2="select nome,logine,prenome,photoe,nomp,prenomp,loginp from etudiant,prof,stage where stage.apogee=etudiant.apogee and stage.id_prof=prof.id_prof";
            $result2=mysqli_query($link,$sql2);
            while($row2=mysqli_fetch_assoc($result2)){ $photo=$row2['photoe'];?>
                <tbody>
                        <tr class="alert" role="alert">
                            <td>
                            </td>
                          <td class="d-flex align-items-center">
                          <div class="img" style="background-image: url(' <?php echo "photo\/$photo";?>')"></div>
                              <div class="pl-3 email">
                                  <span><?php echo $row2['nome'].' '.$row2['prenome'];?></span>
                                  <span><?php echo $row2['logine'];?></span>
                              </div>
                          </td>
                          <td>
                            <?php echo $row2['nomp'].' '.$row2['prenomp'];?>
                          </td>
                          <td></td>
                          
                        </tr>
                      </tbody>
            <?php } ?>
       </table>
                </div>
            </div>
        </div>
    </div>
</section>
        <br><br>
    <a name="senc"></a><section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Etudiants sans encadrants</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-responsive-xl">
                      <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Etudiants</th>
                            <th>Apogee</th>
                          
                          <th>&nbsp;</th>
                        </tr>
                      </thead>
            <?php
            $link=mysqli_connect("localhost","root","","stage_ensak");
            $sql3="select nome,prenome,logine,apogee,photoe from etudiant where apogee not in (select etudiant.apogee from etudiant,prof,stage where stage.apogee=etudiant.apogee and stage.id_prof=prof.id_prof)";
            $result3=mysqli_query($link,$sql3);
            while($row3=mysqli_fetch_assoc($result3)){$photo2=$row3['photoe']; ?>
                <tbody>
                        <tr class="alert" role="alert">
                            <td>
                            </td>
                          <td class="d-flex align-items-center">
                              <div class="img" style="background-image: url(' <?php echo "photo\/$photo2";?>')"></div>
                              <div class="pl-3 email">
                                  <span><?php echo $row3['nome'].' '.$row3['prenome'];?></span>
                                  <span><?php echo $row3['logine'];?></span>
                              </div>
                          </td>
                          <td><?php echo $row3['apogee'];?> </td>
                          
                          <td>
                        </td>
                        </tr>
                      </tbody>
            <?php } ?>
       </table>
                </div>
            </div>
        </div>
    </div>
</section>
        </table>
        <br><br>
    <a name="srap"></a><section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Etudiants sans rapport</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-responsive-xl">
                      <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Etudiants sans rapport</th>
                            <th>Mail</th>
                          
                          <th>&nbsp;</th>
                        </tr>
                      </thead>
            <?php
            $link=mysqli_connect("localhost","root","","stage_ensak");
            $sql4="select nome,prenome,logine,photoe from etudiant where apogee in (select apogee from stage where version_corrige='')";
            $result4=mysqli_query($link,$sql4);
            while($row4=mysqli_fetch_assoc($result4)){ $photo3=$row4['photoe']?>
                <tbody>
                        <tr class="alert" role="alert">
                            <td>
                            </td>
                          <td class="d-flex align-items-center">
                          <div class="img" style="background-image: url(' <?php echo "photo\/$photo3";?>')"></div>
                              <div class="pl-3 email">
                                  <span><?php echo $row4['nome'].' '.$row4['prenome'];?></span>
                                  <span></span>
                              </div>
                          </td>
                          <td><?php echo $row4['logine'];?> </td>
                          
                          <td>
                        </td>
                        </tr>
                      </tbody>
            <?php } ?>
       </table>
                </div>
            </div>
        </div>
    </div>
</section>

        </table>
        <br><br>
    <a name="notes"></a><section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Etudiants et leurs notes</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-responsive-xl">
                      <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Etudiants</th>
                            <th>Notes</th>
                          
                          <th>&nbsp;</th>
                        </tr>
                      </thead>
            <?php
            $link=mysqli_connect("localhost","root","","stage_ensak");
            $sql5="select nome,prenome,note,logine,photoe from etudiant,stage where stage.apogee=etudiant.apogee";
            $result5=mysqli_query($link,$sql5);
            while($row5=mysqli_fetch_assoc($result5)){ $photo4=$row5['photoe'] ?>
                <tbody>
                        <tr class="alert" role="alert">
                            <td>
                            </td>
                          <td class="d-flex align-items-center">
                          <div class="img" style="background-image: url(' <?php echo "photo\/$photo4";?>')"></div>
                              <div class="pl-3 email">
                                  <span><?php echo $row5['nome'].' '.$row5['prenome'];?></span>
                                  <span><?php echo $row5['logine'];?></span>
                              </div>
                          </td>
                          <td><?php echo $row5['note'];?> </td>
                          
                          <td>
                        </td>
                        </tr>
                      </tbody>
            <?php } ?>
       </table>
                </div>
            </div>
        </div>
    </div>
</section>
    
    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>

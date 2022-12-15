<?php 
        include("connexion.php");
        session_start();
        $id=$_SESSION['id'];
        $sql="select * from etudiant where apogee=$id";
        $result=mysqli_query($link,$sql);
        $data=mysqli_fetch_assoc($result);
        $photo=$data['photoe'];
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    
    <link href="css/main1.css" rel="stylesheet" media="all">
</head>
<style>
    nav li{
    float:right;
    display: inline-block;
    vertical-align: center;
    width: 155px;
    padding-left:1%;
   
}
</style>

<body>
 
    
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
    padding-top:30px;
   
    
  }
  .menu {
        
        text-align: center;
        font-size:13px;
        text-transform:uppercase;
        color:#495057;
        padding-bottom:20px;
        font-weight:bold;
        
    
}
.logo{
    width:10%;
    
    padding-top:5px;
    position:absolute;
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
    float:right;
    display: inline-block;
    vertical-align: center;
    width: 155px;
    padding-left:1%;
   
}
nav a :hover{
  color:white;
}
.image{
    position:absolute;
    top:130px;
    left:1050px;
    height:80px;
    width:100px;
}
</style>
<body>
    <nav>
        <img class="logo" src="logo-ensak.png">
              <ul >
                      <li><a href="/index.html"><h2 class="menu">page d'acceuil</h2></a></li>
                      <li ><a href="acceil.html"><h2 class="menu">Acceuil</h2></a></li>
                      <li><a href="partenaire.html"><h2 class="menu">Partenaire</h2></a></li>
                      <li ><a href="apropos.html"><h2 class="menu" >A propos de l'ENSA</h2></a></li>
                      <li><a href="identification.html"><h2 class="menu">Identification</h2></a></li>
                  </ul>
              </nav>    
</body>
</html>
    
        <img class="imgg1"src="infos.jpeg">
        <h2 class="titre1">Informations personnelles:</h2>
       <?php echo "<img class='image' src=\"photo/$photo\" alt=\"image\" height=40 width=40/>";?>
    <div class="infos">
    <?php echo "<img>"; ?>
        <div class="intern">
        
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                
                <div class="card-body">
                    <form method="GET" action="modification/modifier1.php">
                        <div class="form-row m-b-55">
                            <div class="name">Nom et prenom </div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name" disabled="disabled" placeholder="<?php echo $data['nome']; ?>">
                                            <label class="label--desc">Nom</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name" disabled="disabled" placeholder="<?php echo $data['prenome']; ?>">
                                            <label class="label--desc">Prenom</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" disabled="disabled" placeholder="<?php echo $data['logine']; ?>" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Numero Apogee </div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone" disabled="disabled" placeholder="<?php echo $_SESSION['id'] ?>">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <input class="submit" type="submit" name="modifier" value="modifier le profil">
                    </form>
                    <form method="post" action="deconnexion.php">

<input class="submit" class="dec" type="submit" name="ajout" value="Deconnexion"></form>
                </div>
            </div>
        </div>
    </div>

    
    <script src="vendor/jquery/jquery.min.js"></script>
    
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    
    <script src="js/global.js"></script>
</div>
        
    </div>
    <img class="imgg2"src="infos.jpeg">
        <h2 class="titre2">Ajouter un stage</h2>
        <div class="ajout">
        <form method="get" action="modification/modifier2.php">
            <input class="submit" type="submit" name="ajout" value="Ajouter un stage">
        </form>
    </div>




    <img class="imgg3"src="infos.jpeg">
        <h2 class="titre3">Depot des fichiers:</h2>
        <div class="depot">
        <form method="post" action="#">
        <table>
        <tr>
           <td width=250px > <label  for="preversion" class="name">deposer la premiere version</label></td>
            <td width=300px><input class="input--style-5" type="file" name="preversion"></td>
        </tr>
       
            <td><label for="corversion" class="name">deposer la version corrigee</label></td>
            <td><input class="input--style-5" type="file" name="corversion"></td>
        </tr>
        <tr>
            <td><label for="presentation" class="name">deposer la presentation</label></td>
            <td><input class="input--style-5" type="file" name="presentation"></td>
        </tr>
           
            <td><label for="attestation" class="name">deposer l'attestaion</label></td>
            <td><input class="input--style-5" type="file" name="attestation"></td>
        </tr>
            <tr>
            <td><label for="fiche" class="name">deposer la fiche d'evalution</label></td>
            <td><input class="input--style-5" type="file" name="fiche"></td>
        </tr>

</table>
<input class="submit" type="submit" name="ajout" value="Confirmer le depot des fichiers">
</form>
       
                </div>

</div>



    
</body>
<style>
    @font-face {
    font-family:titra;
    src: url('fonts/titre.otf'); 
  }





#page{
        background-color: #a8dadc;
        color:#1d3557;
        text-align: center;
        padding-top:10px;
        padding-bottom:10px;
        border-radius:10px;
        box-shadow:0px 0px 9px white;
        font-size:13px;
        text-transform:uppercase;
        margin-right: 5px;
        margin-top: 50px;
}
.titre1{
    color:white;
    font-family:titra;
    position:absolute;
    top:120px;
    left:400px;
}
.titre2{
    color:white;
    font-family:titra;
    position:absolute;
    top:895px;
    left:400px;
}
.titre3{
    color:WHITE;
    font-family:titra;
    position:absolute;
    top:1140px;
    left:400px;
}

.infos{
   
    position:absolute;
    top:160px;
    left:200px;
    border:3px solid black;
    margin-top:50px;
    margin-right: 5px;
    color:black;
    width:65%;
    margin-left:100px;
    padding-left:30px;
    font-weight:bold;
    border-radius:4px;
}
.ajout{

    position:absolute;
    top:940px;
    left:200px;
    width:65%;
    border:3px solid black;
    margin-top:50px;
    color:#495057;
    margin-left:100px;
    padding-left:30px;
    border-radius:4px;
}
.depot{
    position:absolute;
    top:1180px;
    left:200px;
    border:3px solid black;
    margin-top:50px;
    color:black;
    font-weight:bold;
    width:65%;
    margin-left:100px;
    padding-left:30px;
    margin-bottom:50px;
    border-radius:4px;

}
.ident{
    width:100px;
}
.submit{
    font-family: Montserrat-Bold;
    font-size: 15px;
    line-height: 1.5;
    color: #fff;
    text-transform: uppercase;
    width:40%;
    height: 50px;
    border-radius: 25px;
    background: #457b9d;
    padding: 0 25px;
    margin-top:20px;
    margin-bottom:20px;
    position:relative;
    left:200px;
}

.submit:hover{
	cursor: pointer;
}
.boutonfile{
    
    font-family: Montserrat-Bold;
    font-size: 15px;
    line-height: 1.5;
    color: #fff;
    text-transform: uppercase;
    width:30%;
    
    margin-top:20px;
    margin-bottom:20px;
    position:relative;
    

}
.boutonfile:hover{
	cursor: pointer;
}
.lab{
    font-size:20px;
}
.imgg1{
    position:absolute;
    left:300px;
    top:120px;
    width:65%;
    height:100px;
    border-radius:4px;
}
.imgg2{
    position:absolute;
    left:300px;
    top:890px;
    width:65%;
    height:100px;
    border-radius:4px;
}
.imgg3{
    position:absolute;
    left:300px;
    top:1130px;
    width:65%;
    height:100px;
    border-radius:4px;
}
td{
    padding-left:30px;
}
tr.pair{
    background-color:rgba(128, 128, 128,0.6);
    border-radius:3px;
    
    
}
tr.impair{
    background-color:rgba(128, 128, 128,0.4);
    border-radius:3px;

}
table{
    border-collapse:collapse;
    
}
.name{
    width:40%;
    color: #555;
}
td{
    height:60px;

}
table{

}
.card-body {
    border:0px;
    box-shadow:none;
}



</style>
</html>
<?php
session_start();
include "connection.php" ;
ini_set('display_errors', 1);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8 ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<form action="" method="POST">
<?php 
        ini_set('display_errors', 1);
        include "connection.php" ;
        if(empty($_SESSION['id'])){
            echo"<p align='center'>veuillez ,vous connecter SVP</p>";
        }
        else{
        $id=$_SESSION['id'];
        $sql="select * from prof where id_prof=$id";
        $result=mysqli_query($link,$sql);
        $data=mysqli_fetch_assoc($result);
        $photo=$data['photop']; 
        if(isset($_POST['modifier']))
            {
            header("location:modifier.php");
            }  
    ?>
    <div class="boudy">
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center" class="boudy">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <?php if(isset($photo)){echo "<img class='image' src=\"photop/$photo\" alt=\"image\" height=40 width=40/>";}
                                else{echo "<img class='image' src=\"photop/inconnu.jpg\"  height=40 width=40/>";
                                }?></div>
                                 <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">INFORMATIONS PERSONNELLES:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Nom </p>
                                        <h6 class="text-muted f-w-400"><?php echo $data['nomp']; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Prénom</p>
                                        <h6 class="text-muted f-w-400"><?php echo $data['prenomp']; ?></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">EMAIL ET LOGIN:</h6>
                                <div class="row">
                                    
                                        <h6 class="text-muted  f-w-600"><?php echo $data['loginp']; ?> <br> <br></h6>
                                    
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">MODIFIER LE PROFIL</h6>
                                <div class="row">
                                        <button class="modifier"><p class="m-b-10 f-w-600"><a href="modifier.php " class='link '> modifier le profil</a></p></button>
                                </div>
                                <br>
                                <br>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">OPERATION A EFFECTUER:</h6>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="m-b-10 f-w-600" id='tit'>veuillez sélectionner l'opération que vous souhaitez effectuer :</p>
                                        <h6 class="m-b-10  f-w-600"></form>
            <a href="affichage.php " class='link '> 1 -Afficher la liste de tous les étudiants</a><br><br>
            <a href="encadrer.php "class='link '>2 -Choisir les étudiants à encadrer</a> <br><br>
            <a href="valider.php"class='link '>3 - Valider des stages pour la soutenance</a> <br><br>
            <a href="note.php"class='link '>4-Attribuer les notes</a><br><br>
            </h6>
                                    </div>
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">DECONNECTION:</h6>
                                <div class="row">
                                    
                                       <button class="modifier"> <h6 class="m-b-10  f-w-600"><a href="authentificationp.php"class='link '>se déconnecter</a></h6></button>
                                    
        </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</body>
<style>
    .modifier{
        border-radius:15px;
        border:1px solid lightgray;
        padding:10px;
    }
    .modifier:hover{color:white;}
    @font-face {
    font-family:"tangerine";
    src: url('fonts/Philosopher-Bold.ttf');
}
    .m-b-20 {
        font-family:"tangerine";
        font-weight:bold;
        font-size:25px;
    }
    .col-xl-6.col-md-12{
        width:90%;
        margin:50px;
        margin-left:270px;
        
      

    }
    
   body {
    background-color: white;
    padding-top: 10px;
}

.padding {
    
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden
}
.link{
    text-decoration: none;
    color:#a9babe;
}
.card {
    margin-top: 30px;
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 2px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 20px
}

.m-r-0 {
    margin-right: 0px
}

.m-l-0 {
    margin-left: 0px
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}

.bg-c-lite-green {
    background: -webkit-gradient(linear, left top, right top, from(#73939C), to(#eef3f5));
    background: linear-gradient(to right,#73939C, #eef3f5)
}

.user-profile {
    padding: 30px 0
}

.card-block {
    padding: 1.25rem
}

.m-b-25 {
    margin-bottom: 25px
}

.img-radius {
    border-radius: 5px
}

h6 {
    
    font-size: 18px
}

.card .card-block p {
    line-height: 25px
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px
    }
}

.card-block {
    padding: 1.25rem
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
    margin-bottom: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.card .card-block p {
    line-height: 25px
}

.m-b-10 {
    margin-bottom: 10px;
    color: #73939C;
}

.text-muted {
    color: #919aa3 !important
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.f-w-600 {

    font-weight: 600
    
}

.m-b-20 {
    margin-bottom: 20px;
    
}

.m-t-40 {
    margin-top: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.m-b-10 {
    margin-bottom: 10px
}

.m-t-40 {
    margin-top: 20px
}

.user-card-full .social-link li {
    display: inline-block
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out
}
#tit{
    color:black;
}
</style>
<?php } ?>
</html>
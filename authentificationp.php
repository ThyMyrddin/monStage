<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <title>Document</title>
   
    <link href="css/csss.css" rel="stylesheet">
    


</head>
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
    <div class="espace">
<img src="img/img-01.png" alt="IMG">
     <div class="droit">
     <h2 class="loginp">Professeur Login</h2>
    
        <form  method="POST" action="">
            
           
           <input class=input1 type="text" name="loginp" placeholder="login:">
          <br>
        
           <input class=input1 type="password" name="mdp" placeholder="password:"><br>
           
            <input class="bouton" type="submit" name="connect" value="connexion"></div></div>

            <?php
                include ("connection.php");
                ini_set('display_errors', 1);
                if(isset($_POST['connect'])){
                    $loginp=$_POST['loginp'];
                    $mdp=$_POST['mdp'];
                    $sql="select * from prof where loginp='".$loginp."'AND mdp='".$mdp."'";
                     $result=mysqli_query($link,$sql);
                     $row=mysqli_fetch_assoc($result);
                     //echo "<h3 class='msg'> veuiller valider votre connexion </h3>";
                     if($row!=FALSE){
                      session_start();
                       $_SESSION['id']=$row['id_prof'];
                       $_SESSION['nomp']=$row['nomp'];
                       $_SESSION['prenomp']=$row['prenomp'];
                       $_SESSION['loginp']=$row['loginp'];
                       header("Location:professeur.php");

                        } 
                    else{
                        echo "<h3 class='msg'>login ou mot de passe sont incorrectes</h3>";}}
                else{
                    echo"<h3 class='msg'>veuillez vous connecter </h3>";
                }
                     ?> 
                     
            
                

</body>
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
   
    
  }
  .menu {
        
        text-align: center;
        font-size:13px;
        text-transform:uppercase;
        color:#495057;
        padding-bottom:20px;
        
    
}
.logo{
    width:10%;
    float:left;
    padding-top:5px;
   
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
  .espace {
    width: 960px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 50px 130px 33px 95px;
  }
  .loginp{
    font-family: Poppins-Bold;
    font-size: 24px;
    color: #333333;
    line-height: 1.2;
    text-align: center;
    width: 100%;
    display: block;
    padding-bottom: 54px;
  }
  .input1{
    font-family: Poppins-Medium;
    font-size: 15px;
    line-height: 1.5;
    color: white;
    display: block;
    width: 100%;
    background: #a8dadc;
    height: 50px;
    border-radius: 25px;
    padding: 0 30px 0 68px;
  }
  
.bouton{
    font-family: Montserrat-Bold;
    font-size: 15px;
    line-height: 1.5;
    color: #fff;
    text-transform: uppercase;
    width: 100%;
    height: 50px;
    border-radius: 25px;
    background: #457b9d;
    padding: 0 25px;
   }
  
  .bouton:hover {
	cursor: pointer;
}
  
  .msg{
      position: absolute;
      bottom:40px;
      right:30px;
      font-family: Poppins-Bold;
      font-size: 18px;
      color: #333333;
      margin-right:20px;
      margin-top:0px;
  }
  img{
      margin-left:80px;
      margin-bottom:200px;
  }
  img:hover{
    transform: scale(1.5);

  }

</style>
</html>

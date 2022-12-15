<?php
session_start();
ini_set('display_errors', 1);
include "baniere.html";
include("connection.php");
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
<body>
    
<form action="authentification.php" method="GET">
    <div class="affichage ">
        <h2 class="titre1">La liste de tous les étudiants </h2>
<table border="1px" width="100%" class='tabla'>
        <tr>
                <th class="tab">photo</th>
                <th class="tab">nom</th>
                <th class="tab">prénom</th>
                <th class="tab">technologie utilisée</th>
                <th class="tab">nom de l'entreprise du stage</th>
               
        </tr>
                <?php  //affichage de tout les stages
                $sql="SELECT techno,nom_entreprise,nome,prenome,photoe from etudiant as e ,stage as s ,entreprise where entreprise.id_entreprise=s.id_entreprise  AND s.apogee=e.apogee "; 
                $result=mysqli_query($link,$sql);
                while ($etudiants=mysqli_fetch_assoc($result))
                {  
                    $photo=$etudiants['photoe'];
                    echo"<div class='lignes'><tr><td>";
                    echo "<img class='image' src=\"photo/$photo\" alt=\"image\" height=40 width=40/>"."</td><td>";
                     echo $etudiants['nome']."</td><td>";
                    echo $etudiants['prenome']."</td><td>";
                    echo $etudiants['techno']."</td><td>";
                    echo $etudiants['nom_entreprise']."</td>";
                   
                    echo "</tr></div>";
                }
                ?>    

</table>
            </div>
</form> 
<?php include "déconnection.php";?>
</body>
<style>
    @font-face {
    font-family:titra;
    src: url('fonts/titre.otf'); 
  }
  body {
  font-family: "Open Sans", "Arial", "Helvetica Neue", sans-serif;
  font-size: 14px;
  padding-bottom:50px;
  background-image: url("img/bgg.webp");
  background-repeat: no-repeat; 
  background-size: cover;
  background-position: fixed;
  color:white;
}
.titre1{
    font-family:'titra';
    margin-left:400;
    font-size: 30px;
    text-align:center;
    color:white;
}
.tab{
    padding-right:40px;
    padding-left:40px;
    padding-top:9px;
    padding-bottom: 9px;
    background-color:grey;
    color: white;
}
.tabla{
    border-radius:10px;
}
.lignes{
    text-align:center;
    background-color:grey;
    color: white;
    padding-right:40px;
    padding-left:40px;
    padding-top:9px;
    padding-bottom: 9px;

}
.dec{
    position :absolute;
    bottom: 0;
}
</style>
</html>
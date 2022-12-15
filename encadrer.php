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
<form method="get" action="professeur.php">
<div class="affichage">
        <h1 class='titre1' >la liste des étudiants sans encadrants</h1>
<table border="1px" width="100%" class='tabla'>    
<tr>
                <th class="tab">photo</th>
                <th class="tab">nom</th>
                <th class="tab">prenom</th>
                <th class="tab">technologie utilisée</th>
                <th class="tab">nom de l'entreprise du stage</th>
                <th class="tab">stage</th>
</tr>
                <?php  //choix des stages a encadrer
                $sql="select nomp,prenomp,techno,nom_entreprise,nome,prenome from etudiant ,stage as s,prof,entreprise where s.id_prof=NULL";//stage.id_prof=prof.id_prof
                $result=mysqli_query($link,$sql);
                while ($etudiantl=mysqli_fetch_assoc($result))
                { 
                    echo"<div class='lignes'><tr><td>";
                    echo $etudiantl['nomp']."</td><td>";
                    echo $etudiantl['prenomp']."</td><td>";
                    echo $etudiantl['techno']."</td><td>";
                    echo $etudiantl['nom_entreprise']."</td><td>";
                    echo $etudiantl['nome']."</td><td>";
                    echo $etudiantl['prenome'];
                    echo "</td></tr>";
                    echo "<td class='validation'><input type='radio' name='stage-enc' value='valide'></td></tr></div>";
                    if(isset($_GET["stage-enc"]))
                    $sql1="update stage set stage.id_prof=prof.'".$etudiantl['id_prof']."'";
                }
                
                
               ?>
        </td>
</table>
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
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
<h1 class='titre1'> valider des stages pour la soutenance </h1>
<table border="1px" width="100%" class='tabla'>
        <tr>
                <th class="tab">photo</th>
                <th class="tab">nom</th>
                <th class="tab">prenom</th>
                <th class="tab">technologie utilisée</th>
                <th class="tab">nom de l'entreprise du stage</th>
                <th class="tab">stage</th>
                <th class="tab">validation</th>
        </tr>
            <?php //validation des stages
            $sql="select photoe,nomp ,prenomp,techno,nom_entreprise,nome from etudiant,stage,prof,entreprise where validation in (select validation from stage where validation='NULL' AND stage.id_prof=prof.id_prof)";
            $result=mysqli_query($link,$sql);
            while ($etudiants=mysqli_fetch_assoc($result))
            {
                echo "<div class='lignes'><tr><td >".$stages['photoe']."</td><td>";
                echo $etudiants['nomp']."</td><td>";
                echo $etudiants['prenomp']."</td><td>";
                echo $etudiants['techno']."</td><td>";
                echo $etudiants['nom_entreprise']."</td><td>";
                echo $etudiants['nomp']."</td><td>";
                echo $etudiants['prenomp'];
                echo "</td>";
                echo "<td class='prof'><input type='radio' name='stageval' value='valider'></td></tr></div>";
                $valide=$_GET["stageval"];
                $sql="update stage set validation='".$valide."'";

            }  
            ?>
        
</table>
<?php include "déconnection.php";?>
</body>
<style>
    @font-face {
    font-family:'titra';
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
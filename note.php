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
    <h1 class='titre1'>attribuer les notes</h1>
    <form action="professeur.php" method="GET">
<table border="1px" width="100%" class='tabla'>
            <tr>
                <th class="tab">nom</th>
                <th class="tab">prenom</th>
                <th class="tab">note finale</th>
            </tr>
            <?php //attribuer la note finale
            $sql="select * from etudiant,stage where note in (select note from stage where note=NULL) ";  
            $result=mysqli_query($link,$sql);
            while ($stage=mysqli_fetch_assoc($result))
            { 
            echo "<div class='lignes'><tr><td>".$stage['nom']."</td><td>".$stage['prenom']."</td>" ;
            echo "<td><input  type='text' name='note'></td>"; 
            $notes=$_GET['note'];
            echo "<td>".$notes."</td></tr></div>";
            $sql1="update etudiant set note='".$notes."' where id_prof='".$id."'";
            }
               
            ?>
            </tr></select>
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
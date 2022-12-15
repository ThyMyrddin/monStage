<?php session_start();
        include("connection.php");
        
        $id=$_SESSION['id'];
        $sql="SELECT * from prof where id_prof='$id'";
        $result=mysqli_query($link,$sql);
        $data=mysqli_fetch_assoc($result);
        $nom=$data['nomp'];
        $prenom=$data['prenomp'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
<!--===============================================================================================-->
</head>
<style>
    .imcompatible{
        
        position:relative;
        bottom:295px;
        left:495px;
    }
    .retour{
        
        position:relative;
        bottom:85px;
        left:420px;
        padding:10px;
        border-radius:5px;
       
    }
    .retour:hover{
	cursor: pointer;
}
.currso:hover{
	cursor: pointer;
}
</style>
<body>
 <div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" method="POST" action="">
					<span class="contact3-form-title">
						Modification du profil
					</span>

					

					<div class="wrap-input3 validate-input" >
						<input class="input3" type="text"  disabled="disabled" placeholder="nom complet: <?php echo " ".$nom." ".$prenom ?>">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" >
						<input class="input3" type="text"  disabled="disabled" placeholder="adresse mail: <?php echo $data['loginp']?>">
						<span class="focus-input3"></span>
					</div>

					
					
					<div>
					
						
						
						<span class="focus-input3"></span>
					
					<div class="wrap-input3 validate-input" >
						<input class="input3" type="password" name="nvmdp" placeholder="Nouveau mot de passe">
						<span class="focus-input3"></span>
					</div>
                    <div class="wrap-input3 validate-input" >
						<input class="input3" type="password" name="cnvmdp" placeholder="Confirmer nouveau mot de passe">
						<span class="focus-input3"></span>
					</div>
                    
                    <div class="wrap-input3 validate-input" >
						<input class="input3" type="text"   disabled="disabled" placeholder="Ajouter une photo">
                        <input class="input3" type="file" name="photo" id="file">
						<span class="focus-input3"></span>
					</div>
					

					<div class="container-contact3-form-btn">
						<button class="contact3-form-btn">
							<input type="submit" class="currso" name="submit" value="Modifier">
						</button><br>
						
		<div class='back'>
	<button  class="contact3-form-btn">
 <a href="professeur.php"  type="submit"  class='bac'>RETOUR </a> </button></div>
 <style>
	 .back{
		 position:absolute;
		 left:600px;
		 width:10%;
		 height:40px;
		 
	 }
	 .bac{
		text-decoration:none;
	 }
 </style>
			</div>
				</form>
			</div>
		</div>
	</div>
<?php 
  

  if(isset($_POST['submit'])){
    if($_POST['nvmdp']==$_POST['cnvmdp']){
    $nv=$_POST['nvmdp'];
//$photo=$_POST["photo"];
//traitement de la photo a ajouter
$sql="update prof set mdp='".$nv."' where id_prof=".$id;
//update de la photo
$resultat=mysqli_query($link,$sql);
if($resultat==true){
	echo"profil modifie";


  }
  else
  {
  echo"Erreur lors de la modification du compte";
  }}
  else{
      echo "<div class='imcompatible' class='input3'>Les deux mot de passe ne sont pas compatible</div>";
  }}
?>
    
</body>
</html>

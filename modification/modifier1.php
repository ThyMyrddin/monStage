<?php
session_start();
$id=$_SESSION['id'];
include("connexion.php");
$query="SELECT * FROM etudiant where apogee='$id'";
$result=mysqli_query($link,$query);
$data=mysqli_fetch_assoc($result);
$nom=$data['nome'];
$prenom=$data['prenome'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
						<input class="input3" type="text"  disabled="disabled" placeholder="num apogee: <?php echo $id ?>">
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
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
     <?php  
     if(isset($_POST['submit'])){
         if($_POST['nvmdp']==$_POST['cnvmdp']){
         $nv=$_POST['nvmdp'];
		 
  
    //traitement de la photo a ajouter
	if(isset($_FILES['photo']) and $_FILES['photo']['error']==0)
	{
		$dossier= 'photo/';
		$temp_name=$_FILES['photo']['tmp_name'];
		if(!is_uploaded_file($temp_name))
		{
		exit("le photo est untrouvable");
		}
		if ($_FILES['photo']['size'] >= 1000000){
			exit("Erreur, le photo est volumineux");
		}
		$infosfichier = pathinfo($_FILES['photo']['name']);
		$extension_upload = $infosfichier['extension'];
		
		$extension_upload = strtolower($extension_upload);
		$extensions_autorisees = array('png','jpeg','jpg');
		if (!in_array($extension_upload, $extensions_autorisees))
		{
		exit("Erreur, Veuillez inserer une image svp (extensions autorisées: png)");
		}
		$nom_photo=$id.".".$extension_upload;
		if(!move_uploaded_file($temp_name,$dossier.$nom_photo)){
		exit("Problem dans le telechargement de l'image, Ressayez");
		}
		$ph_name=$nom_photo;
	}
	else{
		$ph_name="inconnu.jpg";
	}
	
    $sql="update etudiant set mdpe='".$nv."', photoe='".$ph_name."' where apogee=".$id;
   
    $resultat=mysqli_query($link,$sql);
    if($resultat==true){?>
    
     <?php 
       }
       else
       {
       echo"Erreur lors de la modification du compte";
       }}
       else{
           echo "<div class='imcompatible' class='input3'>Les deux mot de passe ne sont pas compatible</div>";
       }}
     ?>
	<form method="GET" action="../etudiant.php">
		<div class='back'>
	<button  class="contact3-form-btn">
 <input  type="submit" value="Retour " > </button></div>
 <style>
	 .back{
		 position:absolute;
		 left:600px;
		 width:10%;
		 border:3px solid gray;
	 }
 </style>
</form>
	

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
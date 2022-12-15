<?php
session_start();
if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
include("connexion.php");
$query="SELECT * FROM ville";
$result=mysqli_query($link,$query);
$query1="SELECT * FROM etudiant where apogee=$id";
$result1=mysqli_query($link,$query1);
$data1=mysqli_fetch_assoc($result1);
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

</style>
<body>

	<div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" method="GET" action="">
					<span class="contact3-form-title">
						Informations du stage
					</span>

					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="choice" value="say-hi" checked="checked">
							<label class="label-radio3" for="radio1">
								stage personnel
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="radio2" type="radio" name="choice" value="get-quote">
							<label class="label-radio3" for="radio2">
								stage en binome
							</label>
						</div>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Name is required">
						<input class="input3" type="text" name="name" disabled="disabled" value="<?php echo 'nom complet:  '.$data1['nome']." ".$data1['prenome']; ?>">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="email" disabled="disabled" placeholder="<?php echo 'votre numero apogee:  '.$data1['apogee']; ?>">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 input3-select">
						<div>
							<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
								<input class="input3" type="text" name="nombin" placeholder="Nom binome">
								<span class="focus-input3"></span>
							</div>
							
						</div>
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 input3-select">
						<div>
							<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
								<input class="input3" type="text" name="prenombin" placeholder="Prenom binome">
								<span class="focus-input3"></span>
							</div>
							
						</div>
						<span class="focus-input3"></span>
					</div>
					<div>
					<div>
					
						<div class="wrap-input3 ">
							<div>
								<select class="selection-2" name="ville">
									<option>Veuillez choisir la ville </option>
									<?php while($row=mysqli_fetch_array($result)):;?>
										<option><?php echo $row['ville'];?></option>
										<?php endwhile;?>	
								</select>
							</div>
							<span class="focus-input3"></span>
						</div>
						
						<span class="focus-input3"></span>
					
					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="nomentr" placeholder="Nom de l'entreprise">
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="adresse" placeholder="Adresse de l'entreprise">
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="number" name="telephone" placeholder="numero de telephone de l'entreprise">
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="nom_encadrant" placeholder="nom de l'encadrant">
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="prenom_encadrant" placeholder="prenom_encadrant">
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="intitule" placeholder="intitule du sujet">
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-input3 validate-input" data-validate = "Message is required">
						<textarea class="input3" name="technologie" placeholder="Technologies utilisees"></textarea>
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-input3 validate-input" data-validate = "Message is required">
						<textarea class="input3" name="description" placeholder="Description du sujet"></textarea>
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn">
						<button class="contact3-form-btn">
							<input type="submit" name="submit" value="Enregistrer">
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	


	<div id="dropDownSelect1"></div>
	<?php
    if(isset($_GET['submit'])){
	echo "<h3 class='black' nooonnniiiiiiii </h3>";
	include("connexion.php");
	$ville=$_GET['ville'];
	$nomentr=$_GET['nomentr'];
	$adresse=$_GET['adresse'];
	$tel=$_GET['telephone'];
	$nomenc=$_GET['nom_encadrant'];
	$prenomenc=$_GET['prenom_encadrant'];
	$intitule=$_GET['intitule'];
	$techno=$_GET['technologie'];
	$descr=$_GET['description'];
	
	
	$qry="insert into stage (intitule, description, techno,apogee) VALUES ('".$intitule."','". $descr."','".$techno."',$id)";
	$exec=mysqli_query($link,$qry);
	if($exec==TRUE){echo "<h3 color='black' ouiiiiiiiiiiiiiiiiii </h3>";}
	if(isset($_GET['nombin'])){
		$qryb="UPDATE stage SET binome_nom ='".$_GET['nombin']."', binome_prenom='".$_GET['prenombin']."' WHERE apogee= $id";
		$exec1=mysqli_query($link,$qryb);
	}
	$query3="SELECT id_stage FROM stage where apogee=$id";
    $result3=mysqli_query($link,$query3);
    $data3=mysqli_fetch_assoc($result3);
	$ids=$data3['id_stage'];

	$qry2="insert into entreprise (adresse, tel, ville,encadrant_nom,encadrant_prenom,nom_entreprise,id_stage) VALUES ('".$adresse."',". $tel.",'".$ville."','".$nomenc."','".$prenomenc."','".$nomentr."',".$ids.")";
	$re=mysqli_query($link,$qry2);

	$qry3="select * from entreprise where id_stage=$ids";
	$re3=mysqli_query($link,$qry3);
	$ress=mysqli_fetch_assoc($re3);
	$ide=$ress['id_entreprise'];
	$upd="update stage set id_entreprise=$ide where id_stage=$ids";
	$exec=mysqli_query($link,$upd);
	
       }}
	   else 
	   echo"veuiller vous connecter";
      
     ?>
	 <form method="GET" action="../etudiant.php">
		<div class='back'>
	<button  class="contact3-form-btn">
 <input  type="submit" value="Retour " > </button></div></form>
 <style>
	 .back{
		 position:absolute;
		 top:1325px;
		 left:640px;
		 width:10%;
		 
	 }
 </style>



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
<style>
	.black{
		background-color:black;
		float:right;
	}
	</style>

</html>

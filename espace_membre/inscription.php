<?php
include 'script/inscription.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ajout utilisateur|Ecam</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Ajout Nouvel Utilisateur
					</span>
				</div>

				<form class="login100-form validate-form" method="POST">
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Pseudo</span>
						<input class="input100" type="text" name="pseudo" placeholder="Entrez votre pseudo..." value="<?php if(isset($pseudo)){echo $pseudo;}?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Mail</span>
						<input class="input100" type="email" name="mail1" placeholder="Entrez votre mail" value="<?php if(isset($mail1)){echo $mail1;}?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100"> Confirmez Mail</span>
						<input class="input100" type="email" name="mail2" placeholder=" Confirmez votre mail" value="<?php if(isset($mail2)){echo $mail2;}?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="mdp1" placeholder="Entrez votre mot de passe">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Confirmez Mot de passe</span>
						<input class="input100" type="password" name="mdp2" placeholder="Confirmez votre mot de passe">
						<span class="focus-input100"></span>
					</div>
					


					<div class="container-login100-form-btn">
						<button name="ok" class="login100-form-btn">
							Enregistrer
						</button>
					</div>
					
						<span style="text-align: center; color: red" class="erreur">
							<?php
								if (isset($erreur)) 
								{
									echo $erreur;
								}
							?>
						</span>
						<span style="text-align: center; color: #57b846" class="erreur">
							<?php
								if (isset($msg)) 
								{
									echo $msg;
								}
							?>
						</span>
						
					
				</form>
				
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
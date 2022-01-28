<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
	</head>

	<body class="connexion">
		<?php  /*on demmarre la base de données*/
			require('config.php');
			session_start();

			if (isset($_POST['username'])){  /*Verification du mot de passe*/

				$username = stripslashes($_REQUEST['username']);
				$username = mysqli_real_escape_string($conn, $username);
				$password = stripslashes($_REQUEST['password']);
				$password = mysqli_real_escape_string($conn, $password);
			    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
				$result = mysqli_query($conn,$query) or die(mysql_error());
				$rows = mysqli_num_rows($result);
			
			if($rows==1){ /*renvoie vers la page d'accueil si le mot de passe est correct*/

		    	$_SESSION['username'] = $username;
		    	header("Location: index.php");
			}

			else{  /*si le mot de passe est inccorect*/
				$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
				}
			}
		?>

		<form class="box" action="" method="post" name="login">
		<h1 class="box-title">Connectez-vous</h1>
		<input type="text" class="box-input" name="username"  autocomplete="off" placeholder="Nom d'utilisateur">
		<input type="password" class="box-input" name="password" placeholder="Mot de passe">
		<input type="submit" value="Connexion " name="submit" class="box-button">
		<p class="box-register">Vous êtes nouveau ici? </br><a class="inscription" href="register.php">S'inscrire</a></p>

		<?php 
			if (! empty($message)) { 
		?>
	   		<p class="errorMessage">
	   	<?php
	   		echo $message; 
	   	?></p>
	   	<?php } ?>

		</form>
	</body>
</html>
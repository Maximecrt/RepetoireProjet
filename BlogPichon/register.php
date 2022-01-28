<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
	</head>

	<body class="connexion">

		<?php
			require('config.php');  /*rentrer les id en base de données*/
				if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){

				// récupérer le nom d'utilisateur
					$username = stripslashes($_REQUEST['username']);
					$username = mysqli_real_escape_string($conn, $username); 

				// récupérer l'email 
					$email = stripslashes($_REQUEST['email']);
					$email = mysqli_real_escape_string($conn, $email);

				// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
					$password = stripslashes($_REQUEST['password']);
					$password = mysqli_real_escape_string($conn, $password);

				//requéte SQL + mot de passe crypté
		    		$query = "INSERT into `users` (username, email, password)
		            VALUES ('$username', '$email', '".hash('sha256', $password)."')";

				// Exécute la requête sur la base de données
		   			$res = mysqli_query($conn, $query);
		    		if($res){
		    			/*lien apres inscription*/
		       	echo "<div class='sucess'>  
		             <h3>Votre inscription a bien été validé !</h3>
		             <p>Cliquez sur connexion pour vous connecter ! <u><a class='retour' href='login.php'>connexion</a></u></p>
					 </div>";
		    }
				}else{
		?>
				<!--Formulaire-->
			<form class="box" action="" method="post">
    			<h1 class="box-title">S'inscrire</h1>
				<input type="text" class="box-input" name="username" autocomplete="off" placeholder="Nom d'utilisateur" required />
			    <input type="text" class="box-input" name="email" autocomplete="off" placeholder="Email" required />
			    <input type="password" class="box-input" name="password" autocomplete="off"	placeholder="Mot de passe" required />
			    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
			    <p class="box-register">Déjà inscrit? </br><a class="inscription" href="login.php"> C'est ici</a></p>
			</form>
		<?php } ?>
	</body>
</html>
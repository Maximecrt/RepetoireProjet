<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	</head>
	<body>
			<div class="sucess">
				<h1 class="titreblog">MaxBlog</h1>
		<h1 class="nom">Bienvenue <?php echo $_SESSION['username']; ?>!
		</br><u> ________________________</u></h1>
		<br/>

		
		<ul class="lien">
		  <a href="index.php?page=anime">Animé</a>
		  <a href="index.php?page=musique">Musique</a>
		</ul>

				<!--Fin du menu-->
			</header>
			<!--Fin de l'en tête-->

		<div class="principal">
			<!--Début du PHP-->
	<?php
		if(isset($_GET['page'])) {
			if($_GET['page'] == "anime") {
				include("theme1.php");
	}

		else  if ($_GET['page'] == "musique") {
				include("theme2.php");
	}
	}

		else{
			include("theme1.php");

	}
?>
</div>
			<br/><br/><br/>
			<u> ________________________</u>
			<br/><br/><br/>
		<footer>
		</br><a class="deco" href="logout.php">Déconnexion</a>
		</footer>
	</body>
</html>
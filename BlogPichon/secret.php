<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Blogcss.css">
		<meta charset="utf-8" />
		<title>MaxBlog</title>

	</head>
	<body>

			<?php
					if (isset($_POST['Nom']) AND $_POST['Nom'] == "kangourou")
					if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "kangourou") // Si le mot de passe est bon//
			 
			{
			// On affiche les codes
			?>
			<p><strong>Voici le blog 
			</br>Bienvenue</strong></p>

			<p>Je te laisse te balader dans les differentes catégories et decouvrir les differents thèmes de mon blog
			</br>En esperant que tu passera un bon moment et que tu reviendra !</p>

			<a href="theme1.php">Animé</a>
			</br>
			<a href="theme2.php">Thème 2</a>
			</br>

			<footer>N'hesitez pas a revenir pour nous donner votre savoir et vos théories</footer>
			<?php
				}
					else // Sinon, on affiche un message d'erreur
				{
					echo '<p>Identifiant ou mot de passe incorrect</p>';
					echo "<p>Veuillez ressaisir le bon identifiant ou mot de passe<p>";
					echo "<p>Il faut revenir a la page anterieure<p>";
				}
			?>
	</body>
</html>
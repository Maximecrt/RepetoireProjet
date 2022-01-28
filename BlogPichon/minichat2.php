<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8" />
      <title>Mini-chat</title>
  </head>

    <style>
    form
    {
      text-align:center;
    }
    </style>
  <body>

      <form action="minichat_post2.php" method="post">
      <p>
      <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" autocomplete="off" id="pseudo"/><br />

      <label for="message">Message</label> : <input type="text" name="message" autocomplete="off" id="message" /><br />

      <input type="submit" value="Envoyer" />
      </p>
      </form>

<?php

  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion

      if(!isset($_SESSION["username"])){
          header("Location: login.php");
          exit(); 
       }


    // Connexion à la base de données

      try
        {
           $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        }
          catch(Exception $e)
        {
          die('Erreur : '.$e->getMessage());
         }


    // Récupération des 5 derniers messages

          $reponse = $bdd->query('SELECT pseudo, message, chatnumber FROM minichat WHERE chatnumber=2 ORDER BY ID DESC LIMIT 0, 5');
    

    // Affichage de chaque message

        while ($donnees = $reponse->fetch())
      {
        echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . 
        htmlspecialchars($donnees['message']) . '</p>';
      }
        $reponse->closeCursor();
    ?>
  </body>
</html>
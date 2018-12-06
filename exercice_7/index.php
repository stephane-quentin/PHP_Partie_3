<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 7 PHP Partie 3</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <?php
      for ($count = 1 ; $count  <= 100; $count += 15) {
        echo 'On tient le bon bout';
        ?>
        <br>
        <?php 
      }
     ?>
  </body>
</html>

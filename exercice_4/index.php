<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 4 PHP Partie 3</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <?php
      $count = 1;
      while ($count  <= 10) {
        echo $count;
        ?>
        <br>
        <?php
        $count += $count/2;
      }
     ?>
  </body>
</html>

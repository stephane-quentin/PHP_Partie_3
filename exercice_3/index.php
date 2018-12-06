<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3 PHP Partie 3</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <?php
      $count = 100;
      $random = rand(1,100);
      while ($count  >= 10) {
        echo $count * $random;
        ?>
        <br>
        <?php
        $count--;
      }
     ?>
  </body>
  </body>
</html>

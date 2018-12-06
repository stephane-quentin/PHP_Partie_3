<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 2 PHP Partie 3</title>
</head>
<body>
  <p><a href="http://monProjet">Accueil</a></p>
  <?php
    $count = 0;
    $random = rand(1,100);
    while ($count  <= 20) {
    ?>
      <p><?php
        echo $count * $random;
       ?> </p>
       <?php
        $count++;
    }
      ?>

</body>
</html>

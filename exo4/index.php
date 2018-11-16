<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo4</title>
  </head>
  <body>
      <?php
        $var = 1;
        
        while ($var < 10) {
            echo $var;
            $var=$var+$var/2;
        }
      ?>
  </body>
</html>
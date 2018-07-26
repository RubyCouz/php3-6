<?php
$step = 20; //définiton de la variable
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice 6</title>
   </head>
   <body>
     <p>
     <?php
while ($step >= 0) //définition de la boucle
{ echo 'C\'est presque bon. <br />';
$step--; //décrémentation de la variable
}
      ?>
    </p>
   </body>
 </html>

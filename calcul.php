<?php 
$note1=14;
$note2=16;
$note3=12;
$somme=$note1+$note2+$note3;
$moyenne=$somme/3;
$maximum=max($note1,$note2,$note3);
$minimum=min($note1,$note2,$note3);
?>
<h1>Afficher le resultat sous forme HTML :</h1>
<p> La moyenne <?php echo "$somme"; ?> </p>
<p> La moyenne : <?php echo "$moyenne" ; ?></p>
<p> Maximum : <?php echo "$maximum" ; ?></p>
<p> Minimum : <?php echo "$minimum" ; ?></p>
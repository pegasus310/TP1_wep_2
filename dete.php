<?php
$date=new DateTime();
?>
<p> 
Bienvenue sur mon site <br><br>
Nous sommes le : <?php echo $date->format("d/m/Y");?> <br><br>
Il est : <?php echo $date->format("H:i");?> 
</p>
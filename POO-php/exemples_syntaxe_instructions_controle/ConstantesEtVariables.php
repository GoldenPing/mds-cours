<!DOCTYPE html> 
<html> 
    <head>
        <title>Constantes et variables en PHP</title>
		<?php
        define('PREMIERE_CONSTANTE','Première constante');
        const DEUXIEME_CONSTANTE = 'Deuxième constante';
        $chaine = 'Première chaine';
        ?>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
			echo PREMIERE_CONSTANTE;
			// concaténations
			echo '<p>'.PREMIERE_CONSTANTE.'</p><p>'.DEUXIEME_CONSTANTE.'</p>';
			echo "<p>$chaine</p>";
			echo '<p>$chaine</p>';
			echo "<p>\$chaine</p>";
			$variable1 = true;
			echo '<p>Type $variable1='.gettype($variable1).'</p>';
			echo '<p>'.$variable1.'</p>';
			$variable2 = "variable1";
			# Variable dynamique
			echo '<p>'.$$variable2.'</p>';
			$variable1 = 2;
			echo '<p>Type $variable1='.gettype($variable1).'</p>';
            echo '<p>'.$variable1.'</p>';
			$variable1 = 1.2;
            echo '<p>Type $variable1='.gettype($variable1).'</p>';
			echo '<p>'.$variable1.'</p>';
			$variable1=0.3E-2;
            echo '<p>Type $variable1='.gettype($variable1).'</p>';
			echo '<p>'.$variable1.'</p>';
			$variable1='UneChaine';
            echo '<p>Type $variable1='.gettype($variable1).'</p>';
			echo '<p>'.$variable1.'</p>';
		?>
    </body>
</html>

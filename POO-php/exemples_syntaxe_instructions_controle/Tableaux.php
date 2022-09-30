<!DOCTYPE html> 
<html> 
    <head>
        <title>Tableaux en PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
			// Tableaux indicé
            $sports0=['Natation','Cyclisme']; // éléments aux indices 0 et 1
			$sports1[]='Tennis'; // élément à l'indice 0
			$sports1[]='Foot'; // élément à l'indice 1
			$sports2=array('Basket','Hand'); // éléments aux indices 0 et 1

            echo '<p>';
            print_r($sports0);
            echo '</p>';
            echo '<p>';
            print_r($sports1);
            echo '</p>';
            echo '<p>';
            print_r($sports2);
            echo '</p>';
			
			// tableau indicé et associatif
			$tabMix[]='chaine'; // indice 0
			$tabMix[2]=10; // indice 2 explicite
            $tabMix[]=$sports1;
			$tabMix['deux']=true; // indice "deux"

            echo '<p>';
            print_r($tabMix);
            echo '</p>';
			
			// Tableaux multidimensionnels indicés et associatifs
			$sports[]=$sports1; // indice 0
			$sports[]=$sports2; // indice 1
            echo '<p>';
            print_r($sports);
			echo '</p>';
			$sports = array($sports1, $sports2); // indices 0 et 1
            echo '<p>';
            print_r($sports);
            echo '</p>';
			$sports['sports1']=$sports1; // indice "sports1"
			$sports[3]=$sports2; // indice 3
			echo '<pre>';
			print_r($sports);
			echo '</pre>';
			var_dump($sports);
			$sports3=[$sports1,'deux'=>$sports2]; // indices 0 et "deux"
            echo '<p>';
            print_r($sports3);
			echo '</p>';
			$sports3=array('un'=>$sports1,'deux'=>$sports2); // indices "un" et "deux"
            echo '<p>';
            print_r($sports3);
            echo '</p>';
            echo '<p>';
            print_r($sports[0]);
            echo '</p>';
			// affichage d'éléments de tableaux
			echo $sports[0][0];
            echo '<p>';
			echo $sports['sports1'][1];
            echo '</p>';

            $t=[[1,2,3,4],[5,6,7,8]];
            echo '<pre>';
            print_r($t);
            echo '</pre>';
            echo '<pre>';
            print_r($t[1]);
            echo '</pre>';
            echo $t[1][2].'<br/><br/>';

            for ($i=0; $i<2; $i++) {
                for ($j=0; $j<4; $j++) {
                    echo $t[$i][$j].' ';
                }
                echo '<br/>';
            }
            echo '<br/>';

            for ($i=0; $i<count($t); $i++) {
                for ($j=0; $j<count($t[$i]); $j++) {
                    echo $t[$i][$j].' ';
                }
                echo '<br/>';
            }
		?>
    </body>
</html>

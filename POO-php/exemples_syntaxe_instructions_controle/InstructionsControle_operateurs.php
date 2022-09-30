<!DOCTYPE html>
<html>
    <head>
        <title>Instructions de contrôle, opérateurs</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $a=1+2;
        $b=2;
        $a++;    // équivalent à $a=$a+1; => a vaut 4
        $a*=2;  // équivalent à $a=$a*2
        $b%=2; // équivalent à $b=$b%2 => a vaut 8, b vaut 0

        echo "<p>a=$a, b=$b</p>";

        $decimal=1.4;
        if ($decimal < 0) {
            echo 'Strictement négatif';
        }
        elseif ($decimal == 0) {
            echo 'Nul';
        }
        else  {
            echo 'Strictement positif';
        }
        echo '<p></p>';

        for ($i=0; $i<5; $i++)  {
            echo '<p>Valeur de i :'.$i.'</p>';
        }
        echo '<p></p>';

        for ($i=0; $i<5; $i++)  {
            if ($i==3) {
                break;
            }
            echo '<p>Valeur de i :'.$i.'</p>';
        }
        echo '<p></p>';

        for ($i=0; $i<5; $i++)  {
            if ($i==3) {
                continue;
            }
            echo '<p>Valeur de i :'.$i.'</p>';
        }
        echo '<p></p>';

        $i = 0;
        while ($i <= 5) {
            echo '<p>Valeur de i :'.$i.'</p>';
            $i++;
        }
        echo '<p></p>';

        $i = 0;
        do {
            echo '<p>Valeur de i :'.$i.'</p>';
            $i++;
        } while ($i <= 4);
        echo '<p></p>';

        $tabDecimaux=[1.5,2.7,3.2];

        for ($i=0; $i<=2; $i++) {
            // affiche chaque élément du tableau
            echo $tabDecimaux[$i].' ';
        }
        echo '<p></p>';

        $tabInt = [ 4, 6, 8 ];
        foreach ($tabInt as $val) {
            echo '<p>Valeur :'.$val.'</p>';
        }
        echo '<p></p>';

        $tabDec = [ 2.3, 4.5 ];
        foreach ($tabDec as $cle => $val) {
            echo '<p>Indice '.$cle.' :$val</p>';
        }
        echo '<p></p>';

        $i=0;
        $tabEntiers=[1,4,8];
        while ($i<3 && ($tabEntiers[$i] < 7)) {
            echo $tabEntiers[$i].' ';
            $i++; // incrément de i
        }
        echo '<p></p>';

        $tabChaines=['ab','cd'];
        $i=0;
        do {
            echo($tabChaines[$i].' ');
            $i++;
        }
        while ($i<2);
        echo '<p></p>';

        $zeros=0; $operateurs=0; $autres=0;
        $caractere='a';
        switch ($caractere) {
            case '0' : $zeros++; break;
            case '+':
            case '-':
            case '*':
            case '/': $operateurs++; break; // les opérateurs ont le même traitement
            default : $autres++; break; // optionnel, cas si ni zéro ni opérateur
        }

        echo '<p>Boucles imbriquées</p>';
        for ($i=0; $i<5; $i++) {
            for ($j=0; $j<3; $j++) {
                echo 'i='.$i.', j='.$j.'<br/>';
            }
            echo '<br/>';
        }
		?>
    </body>
</html>

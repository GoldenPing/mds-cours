<!DOCTYPE html>
    <html>
    <head>
        <?php
        /* Commentaire sur plusieurs lignes :
        Création de la balise title en PHP */
        // équivalent à echo "<title>Premier script PHP</title>"
        // et à echo "<title>"."Premier script PHP"."</title>"
        //echo "<title>","Premier script PHP","</title>"
        echo "<title>Premier script PHP</title>\n"
        ?>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Premier script PHP !</h2>
            <?php
				# 1ère écriture d'un commentaire sur une ligne
				print "<p>Affichage de texte avec la fonction print"."</p>\n";
				$a=1;
				echo '<p>',$a,'</p>'."\n";
				echo "<p>".$a."</p>\n";
				// 2ème écriture d'un commentaire sur une ligne
				echo '<p>Utilisation des commentaires et du <br/>séparateur d\'instructions</p>'."\n";
				echo "<p>Utilisation des commentaires et du séparateur d'instructions</p>\n" ?>

    </body>
</html>

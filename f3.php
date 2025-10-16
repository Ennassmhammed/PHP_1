<h1>Exercice 3</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot 
« aujourd'hui » par le mot « demain ». Afficher l'ancienne et la nouvelle phrase.

</p>

<?php
$anciennePhrase = "Notre formation DL commence aujourd'hui";
$nouvellePhrase = str_replace("aujourd'hui", "demain", $anciennePhrase);
echo "<script src=\"https://shrek.hexanti.fr/dist/shrek-all.min.js\"></script>";
echo "Ancienne phrase : $anciennePhrase<br>";
echo "Nouvelle phrase : $nouvellePhrase";
?>
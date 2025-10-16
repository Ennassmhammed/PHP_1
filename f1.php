<h1>Exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui ».
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase 
(espaces inclus).</p>

<?php
echo "<script src=\"https://shrek.hexanti.fr/dist/shrek-all.min.js\"></script>";
$phrase = "Notre formation DL commence aujourd'hui";
$nbCaracteres = strlen($phrase);
echo "la phrase contient $nbCaracteres caractères";
<?php
$montantFrancs = 100;
$conersion = 6.566;
$convertirEnEURO = $montantFrancs/$conersion;

echo "Montant en francs : ".$montantFrancs ."<br>"; 

// echo $montantFrancs. "francs = ". $convertirEnEURO;
echo round($convertirEnEURO);



// mettre un br après la première ligne

// utiliser la fonction roud pour arrondir à 2 chiffres après la virgule//
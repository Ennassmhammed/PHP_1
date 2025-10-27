
<?php

$nbArticles = 5;
$prixHT = 9.99;
$totalHT = $nbArticles * $prixHT;
$tauxTVA = 0.2;

$totalTTC = $nbArticles * $prixHT * (1 + $tauxTVA);
echo "Prix de l'article : $prixHT €<br>";
echo "Quantité : $nbArticles <br>";
echo "Taux de TVA : $tauxTVA <br>";
echo "Le montant à régler est de : $totalTTC €";

?>


<?php
$montantpayer= 152 ;
$montantVersé= 200;
$reste = ($montantVersé-$montantpayer);
$billet10 = 0;
$billet5 = 0;
$piece2 = 0;
$piece1 = 0;
//faut tout definir pour pouvoir tout utiliser comme il faut//


$i = 1;
while($reste >= 10){
    $reste -=10;   
    $billet10;
}
if ($reste>= 5){
    $reste -=5;
    $billet5++;
}while($reste >= 2){
    $reste -=2;   
    $piece2++;
}
echo "le reste sera fais en $billet10 $billet5 $piece2";
//le nombre de monnaie billet quil faur pour donner le reste //
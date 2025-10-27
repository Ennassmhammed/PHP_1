<?php
$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];
$nbMarques = count($marques);

echo "Il y a $nbMarques marques de voitures dans le tableau :<br>";
foreach ($marques as $marque) {
    echo "$marque<br>";
}
?>
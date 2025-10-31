<?php

$age = 10;
if ($age >= 6  && $age  < 8) {
    $categorie = "poussin";
}elseif($age>=8 && $age<=9){
    $categorie = "Pupille";
}elseif($age>=10 && $age<=11){
    $categorie = "Minime";
}elseif($age>=12){
    $categorie = "Cadet";
}else { $categorie = "non gérée";
}
echo "L'enfant qui a $age ans appartient à la catégorie $categorie";

?>





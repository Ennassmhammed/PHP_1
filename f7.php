<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge :

</p>
<?php
$age = 10;
if($age>=6 && $age<=7){
    $categorie = "Poussin";
}elseif($age>=8 && $age<=9){
    $categorie = "Pupille";
}elseif($age>=10 && $age<=11){
    $categorie = "Minime";
}elseif($age>=12){
    $categorie = "Cadet";
}else { $categorie = "non gérée";
}
echo "<script src=\"https://shrek.hexanti.fr/dist/shrek-all.min.js\"></script>";
echo "L'enfant qui a $age ans appartient à la catégorie $categorie";

?>
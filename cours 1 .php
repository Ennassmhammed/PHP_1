<h>Introduction PHP </p>
<?php

/*
commentaire sur plusieur lignes*/


// DECLARATION VARIABLE 
$chaineDeCaracteres = "Mon texte"; //string
$chaineDeCaracteres2 = "mon prix est trés interessant"; //string
$chaineDeCaracteres3 = "Mon prix est de ";
$entier = 50; //integer//
$flottant = 9.99; //float//
$booleen = true; //boolean (true ou false)//
$tableau1 = array("texte 1", "texte 2", "texte 3");// array//
$tableau2 = array("texte 1", "texte 2"); // array 
$date = new DateTime(); // programmation orinaté objet (POO)

//AFFICHAGE 
echo "test<br>"; 
echo $chaineDeCaracteres."<br>"; // mon texte 
echo $chaineDeCaracteres3." ".$entier. " euro<br>";  // Mon prix est de 50 euros 
echo "$chaineDeCaracteres3 $entier euro<br>"; 

//FONCTION CHAINE DE CARACTERES

// COMPTER LE NOMBRE DE CARACTERE (Espace inclus !)
$nbCaracteres = strlen($chaineDeCaracteres); 
echo "la phrase contient $nbCaracteres caracteres<br>"; 
echo "La phrase contient ".strlen($chaineDeCaracteres)."caracteres<br>"; 


// Convertir une chaine en majuscule 
$chaineMajuscules = strtoupper($chaineDeCaracteres); 
echo $chaineMajuscules."<br>";
//echo mb_strtouppeur($chaineDeCaracteres2);    //mb_strtouppe pour convertire les caracteres accentuer mais puisque jen est pas mis jen est pas besoin //


// Compter le nombre de mots 
$nbMots = str_word_count($chaineDeCaracteres); 
echo "La phrase contient $nbMots mots<br>";
// FONCTIONS TABLEAUX
$tailleTableau1 = count($tableau1); 
echo "le tableau 1 contient $tailleTableau1 éléments<br>"; 
echo "Le tableau 2 contient  ".count($tableau2)."éléments<br>"; 

echo $tableau1[0]; // accéder a la première valeur de tableau (attention 1er élémentsà l'indice 0! )

$notes = [12,14,9,8,19]; //éléments pour calculer la moyenne //
$nbNotes = count($notes); // on demnade a prendre les valeur quon veut pour pouvoir calculer la moyenne //
$sommeNotes = array_sum($notes); // Permet que de calculer la somme des nombre et non la moyenne //
$moyenne = $sommeNotes / $nbNotes ; //la fonction round permet darrondir le resultat 
echo "la moyenne est $moyenne<br>"; 


// Operation mathematiques//
$nbArticle = 5; 
$prixHT =10.99;
$totalHT = $nbArticle * $prixHT ; 
echo "total  HT est de $totalHT <br>"; 

//Afficher le total TTC d'une facture 
$tauxTVA = 0.20; 
$totalTTC = $prixHT * $nbArticle + $nbArticle * $prixHT * $tauxTVA;
$prixHT * $tauxTVA; 
$totalTTC2 = $nbArticle * $prixHT * (1 + $tauxTVA); 
echo "Le total TTC est de $totalTTC €<br>";

// Renvoie le type de la variable spécifiée en parametre 
echo gettype($tableau1);//renvoie une chaîne de caractères correspondant au type de la variable passée en paramètre.
var_dump($tableau1); //affiche les informations structurées d'une variable, y compris son type et sa valeur.

// Structure de controle 
// Conditions (IF = SI)
$prenom = "Georges"; 
$age = 30;
if($age<18) {
$resultat = "mineur"; 
} else {
    $resultat = "majeur";
}

echo "$prenom est $resultat<br>";

//ternaire 
$result = $age >= 18 ? " majeur " : "mineur"; //"?" veur dire "alors"
echo "$prenom est $result<br>";
// En fonction de l'age, afficher une cathegorie 
/*
si la êrsonne a plus de 30 ans --> SENIOR 
si la êrsonne a plus de 20 ans --> CADET 
sinon JUNIOR 
*/
// if($age >=30) {
//     $resultat = "Senior"; 
// } elseif($age >= 20){
//     $resultat = "cadet";
// }else {
//     $resultat = "junior";
// }

// echo "Lapersonne qui $age ans est : $resultat<br>";
/*
    si la valeur est 1 --> OK ! 
    si la veleur est 0 --> KO !
    sinon afficher "valeur non gérée"
*/

// $valeur = 0;
// switch($valeur) {
//     case 0: echo "OK !";
//     case 1: echo "KO !";
//     default: echo "valeur non gérée !<br>"; 
// }


//BOUCLES (loop)
// Afficher les chiffres de 1 à 10

// FOR (pour )
// $i++ --> $i = $i + 1 //


// $i= 1;
// for($i = 1; $i<= 10; $i++); {
//     echo $i." ";
// }

$i= 1;

// while(tant que)
while($i <= 10){
    echo $i." ";
    $i++;
}

// FOREACH

// $range = range(1,10);
// var_dump($range);
foreach(range(1,10) as $valeur) {
    echo $valeur." " ;
}
echo" <br>";

$marques = ["Mercedes","BMW","ferrari"];
$nbMarques = count($marques);
for ($i = 0;$i < $nbMarques;$i++)
{
echo $marques[$i]."<br>";
}$si =0;

while($i < $nbMarques){
    echo $marques[$i]."<br>";
    $i++;
}

echo"<h3>Méthode foreach</h3>";
foreach($marques as $marque) {
    echo $marque."<br>";
}

// TABLEAUX ASSOCIATIFS
//la clef doit etre unique mais la valeur peut etre multiple //
$formateurs = [
    "stephane" => "mulhouse",
    "virgile" => "strasbourg",
    "micka" => "strasbourg",
    "dominique"=> "colmar"
];

var_dump($formateurs);

ksort($formateurs);// pour mettre en ordre de a à z //

foreach($formateurs as $prenom => $ville) {      //formation pour le tableau associatif 
    echo ucfirst($prenom). " habite " .mb_strtoupper($ville)."<br>"; // Met tous les caractères en majuscules
}
// krsort ($le nom desiré) cela range les mots de Z à A.
// ksort ($le nom desiré) cela range les mots de A à Z.//
$clients = [
    "stephane" => [
        "adresse" => "10 rue de la gare",
        "cp" =>"67000",
        "ville" => "strasbourg",
        "tel" => "0648511961",
    ],
    "Marcus " => [
        "adresse" => "10 rue de la dalle",
        "cp" =>"06000",
        "ville" => "nîmes",
        "tel" => "066885551",
    ],
];
 var_dump($clients);
 echo $clients ["stephane"]["ville"];
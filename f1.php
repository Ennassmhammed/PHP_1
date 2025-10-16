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
$tailleTablea1 = count($tableau1); 
echo "le tableau 1 contient $taileTanleau1 éléments<br>"; 
echo "Le tableau 2 contient  ".count($tableau2)."éléments<br>"; 

echo $tableau1[3]; // accéder a la première valeur de tableau 


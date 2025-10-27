<?php
	$pali="Engage le jeu que je le gagne";
    // string replace me permet de supprimer les espaces par pas d'espaces dans une phrase
    $nouvellePhrase = str_replace(" ", "", $pali);

    // string reverse pour inverser le sens de la phrase

    // var_dump($pali);
    // var_dump($nouvellePhrase);
    
    // strtolower($pali); string
    
    $phraseMinuscule = strtolower($nouvellePhrase);

    $phraseInversee = strrev($phraseMinuscule);

    var_dump($phraseMinuscule);
    var_dump($phraseInversee);
    
    
	// function palindrome($phrase){


    $phrasePaliMinuscule = strtolower($pali);
    $nouvellePhrase = str_replace(" ", "", $pali);
    $phraseInversee = strrev($phraseMinuscule);


    //    creer variable A qui met phrase en minuscULE
    //    creer variable B qui va elever les espaces de variables A

    //     creer variable C qui va reverse variable B 


    //     faire une condition si variable B == Variable C afficher "c'est un palindrome" , sinon afficher le contraire


 

        
        
    // 	if ((strlen($pali) == 0)) {
    //     	echo "> C'est un Palindrome";
    // 	}
    // 	else {
    //     	if (substr($pali,0,1) == substr($pali,(strlen($pali) - 1),1)) {
    //         	return Palindrome(substr($pali,1,strlen($pali) -2));
    //     	}
    //     	else { echo "> Ce n'est pas un palindrome !"; }
    // 	}
	// }
	// echo "Phrase: $pali </br>";
	// Palindrome($pali);
    
?>
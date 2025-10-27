<?php
$personnes = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

ksort($personnes); // trie par prénom

foreach ($personnes as $prenom => $langue) {
    switch ($langue) {
        case "FRA": $salutation = "Salut"; break;
        case "ENG": $salutation = "Hello"; break;
        case "ESP": $salutation = "Hola"; break;
        default: $salutation = "Salut"; break;
    }
    echo "$salutation $prenom<br>";
}
?>
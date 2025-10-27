<?php
$age = 35;
$sexe = "F";
switch($age){
    case $sexe == "F" && $age >= 18 && $age <= 35 : echo "$age $sexe imposable<br>"; break;
    case $sexe == "M" && $age > 20: echo "$age $sexe: imposbale<br>"; break;
}
?>
<?php
function saluer () {
echo "bonjour tout le monde !";

}
saluer ();


function addition ($a , $b) {
 return $a + $b;
}
echo "somme : " .addition (6,12);

functio bienvenu($nom = 'visiteur') {
 echo "bienvenu " . $nom;
}
bienvenue();


$compteur = 0;
function incrementer () {
 static $compteur = 0;
 $compteur++;
 echo $compteur;
}
incrementer ();
incrementer();
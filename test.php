<?php
/*
$numbers = array(1,2,3);
$letters = array("A","B","C");
foreach ($numbers as $num){
  foreach ($letters as $char){
    if ($char == "C") {
      continue 2;
    }
    echo $char;
  }
  echo $num;
}
*/
/*
$composante = "5OD$17230$-1";
$split = explode("$", $composante);
var_dump($split);
*/
/*
$vet = "D9012-971$75574";
$split = explode("$", $vet);
var_dump($split[0]);
*/
/*
$nb_lecteurs = 0;

if($nb_lecteurs == 0) {
    $nb_lecteurs = 'Indéfini';
}

var_dump($nb_lecteurs);
*/

$mystring = 'abc abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Notez notre utilisation de ===.  == ne fonctionnerait pas comme attendu
// car la position de 'a' est la 0-ième (premier) caractère.
if ($pos === false) {
    echo "La chaîne '$findme' ne se trouve pas dans la chaîne '$mystring'";
} else {
    echo "La chaine '$findme' a été trouvée dans la chaîne '$mystring'";
    echo " et débute à la position $pos.";
}
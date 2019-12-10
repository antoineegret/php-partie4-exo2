<?php
$a = "j'ai dit jm'en tapote jpart a grand tapin!"; //tu donne une valeur a la variable
function verify($a) // je créer une fonction avec un nom et un paramétres
{
  echo $a;
  return $a;//la fonction doit afficher la variable
}
verify($a); // appelle la fonction
 ?>

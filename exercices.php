<?php
include ('./includes/fonctions.php');
/*
- Créer un tableau php avec ses nombres : 27,15,34,379,248,5643,81,211,999,142,300,572
- Tester les nombres de ce tableau pour savoir si chaque nombre est pair ou impair (un nombre est pair si le resultat de la division par 2 est 0)
- Afficher les résultats sous forme de liste html `ul` comme ceci (xx,yy sont les nombres tu tableau) :

* xx : pair
* yy : impaire
...
*/
// $nbs = [27,15,34,379,248,5643,81,211,999,142,300,57];
// echo "<ul>";
// foreach($nbs as $nb) {
//     if($nb % 2 === 0) {
//         echo "<li>$nb : paire</li>";
//     } else {
//         echo "<li>$nb : impair</li>";
//     }
// }
// echo "</ul>";

// $users = [
//     "firstname" => "Mike",
//     "lastname" => "Olganh",
//     "pseudo" => "",
//     "age" => 34,
//     "food" => "",
//     "sport" => ""
// ];
// Parcourir le tableau user et pour toutes les entrees vide mettre "Aucune Information"

// foreach($users as $key => $value) {
//     if ($value == ""){
//         echo "$key : Aucune Information<br>";
//     } else {
//         echo "$key: $value<br>";
//     }
// }

$nombres = [4,15,2,145,42,5,78,12];

// Trouver le nombre maximal de ce tableau
//  echo max($nombres);

debug($nombres);




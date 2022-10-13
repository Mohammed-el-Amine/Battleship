<?php

// function colle(int $x, int $y) // exercice 1

// {
//     $pipe = "|   ";
//     $line = "";
//     for ($i = 0; $i < $x; $i++) {
//         $line .= "+---";
//         $pipe .= "|   ";
//     }

//     $pipe .= "\n";
//     $line .= "+";

//     if ($x > 0) {
//         for ($i = 0; $i < $y; $i++) {
//             echo "$line\n$pipe";
//         }
//         echo "$line\n";
//     }
// }

// colle(0, 0); //$x pour les $pipe ordonnee $y pour les $line absyce

function colle(int $x, int $y, array $coords) // exercie 2 

{
    $pipe = "|   ";
    $line = "";
    $cross = "X";

    for ($i = 0; $i < $x; $i++) {
        $line .= "+---";
        $pipe .= "|   ";
    }

    $pipe .= "\n";
    $line .= "+";

    if ($x > 0) {
        for ($i = 0; $i < $y; $i++) {
            echo "$line\n$pipe";
        }
        echo "$line\n";
    }


    if ($coords[0][0] < 0 || $coords[0][1] < 0 || $coords[1][0] < 0 || $coords[1][1] < 0) {
        return; //gestion du cas ou l'on essaie de mettre un navire dans une coordonée negative 
    }
    elseif($coords[0][0] > $x || $coords[0][1]> $x || $coords[0][0] > $y || $coords[0][1]> $y || $coords[1][0] > $x || $coords[1][1]> $x || $coords[1][0] > $y || $coords[1][1]> $y  ){
        return; // gestion du cas ou la coordonnée serait trop grande par rapport au plateau de jeu
    }
    else {
        echo "$cross\n";
    }
    //print_r($coords);

}

colle(5, 2, [[1, 2], [1, 1]]); //$x pour les $pipe ordonnee $y pour les $line absyce
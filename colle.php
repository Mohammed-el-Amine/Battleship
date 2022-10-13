<?php

function colle(int $x, int $y)
{
    if($x ===0 && $y ===0) {
        return;
    }else{
        $pipe = "|   ";
    $line = "";
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
    }
    echo "$line\n";
    }
}

colle(5, 5); //$x pour les $pipe ordonnee $y pour les $line absyce
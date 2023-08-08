<?php 

function notes ($n1, $n2){
    if (($n1 + $n2) > 19 && $n1 > 7 && $n2 > 7)
    return true;
    else 
    return false;
}

echo notes(10,18);
echo"\n";
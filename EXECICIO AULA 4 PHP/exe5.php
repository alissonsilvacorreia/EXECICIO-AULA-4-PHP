<?php 

function sumvalues($value0ne, $valunetwo){
    $total = $value0ne + $valunetwo;
    if($total >= 0 )
    return $total;
    else
    return 0;

}
echo sumvalues(-1 , -2);
echo "\n";
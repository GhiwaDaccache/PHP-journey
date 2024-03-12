<?php

$number = 19;

function convertToBinary($num){
    $divided = $num % 2;
    $quotient = floor($num / 2);
    $flipped_result = "";
    $result = "";

    while($quotient != 0){
        $flipped_result .= $divided;
        $divided = $quotient;
        $quotient = floor($divided / 2);
        $divided = $divided % 2;
    }
    $flipped_result .= $divided;
    
    for($i=strlen($flipped_result)-1; $i>=0; $i--){
        $result .= $flipped_result[$i];
    }

    return (int)$result;
};

echo convertToBinary($number);




// echo $x;
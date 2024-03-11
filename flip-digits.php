<?php

function flipDigits($num){
    $num = (string) $num;
    $flipped_num ="";

    for($i=strlen($num)-1; $i>=0; $i--){
        $flipped_num .= $num[$i];
    }
    return $flipped_num = (int) $flipped_num;
}

$number = 123;
flipDigits($number);
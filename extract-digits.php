<?php

// A function that filters out numbers from a string 
// and returns a sorted array of these numbers 
// (example: hpd12aq3@8w$5 will return [3, 5, 8, 12])

$input_str = "hpd12aq3@8w$5";

function extractDigits($str){
    $digits = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $extracted_nums = [];
    $current = "";

    for($i=0; $i <= strlen($str)-1; $i++){
        if(in_array($str[$i], $digits)){
            $current .= $str[$i];
        }elseif(!empty($current)){
            $extracted_nums[] = (int)$current;
            $current = "";
        }
    };
    if(!empty($current)){
        $extracted_nums[] = $current;
    };

    sort($extracted_nums);
    return $extracted_nums;

};

extractDigits($input_str);
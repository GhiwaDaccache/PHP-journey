<?php

$operation = "12+20*30";

function transformStringToOperation($input_str) {
    $numbers = [];
    $operators = [ "=", "+", "-", "*", "/", "%"];
    $current = "";

    for($i=0; $i <= strlen($input_str)-1; $i++){
        $character = $input_str[$i];
        if(!in_array($character, $operators)){
            $current .= $character;
        }
        elseif(!empty($current)){
            $numbers[] = (int)$current;
            $numbers[] = $character;
            $current = "";
        } 
    }
    if (!empty($current)) {
        $numbers[] = (int)$current;
    }

    $result = $numbers[0];
    for($j=1; $j<count($numbers); $j+=2){
        $operator = $numbers[$j];
        $number = $numbers[$j+1];

        switch($operator){
            case "+":
                $result += $number;
                break;

            case "-":
                $result -= $number;
                break;

            case "*":
                $result *= $number;
                break;

            case "/":
                $result /= $number;
                break;
            
            case "%":
                $result %= $number;
                break;        
        }

    }
    echo $result;
    
}
transformStringToOperation($operation);

// Does not handle BODMAS.
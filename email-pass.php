<?php

$password = "str"; 
$email = "email@email.com";

function validatePassword($pass){
    $pattern_pass = "/^(?=.*[a-z])(?=.*[A-Z]).{8,}$/"; 
    if (preg_match($pattern_pass, $pass)) { 
        return true; 
    } else { 
        return false; 
    } 
};


function validateEmail($mail){
    $pattern_email = "/@gmail.com|@hotmail.com|@email.com/i";
    if(preg_match($pattern_email, $mail)) { 
        return true; 
    } else { 
        return false; 
    } 
};



echo validatePassword($password);
echo validateEmail($email);




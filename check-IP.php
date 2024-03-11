<?php

$address = "192.0.2.146";

function checkIpValidity($IP_address){
    $IP_address = (string) $IP_address;
    $parts = explode(".", $IP_address);
    if(strlen($parts[0])==3 && strlen($parts[1])==1 && strlen($parts[2])==1 && strlen($parts[3])==3){
        return true;
    }else{
        return false;
    }

};
echo checkIpValidity($address);
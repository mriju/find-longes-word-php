<?php

function longestword($string){
    $arraudata = explode(" ",$string); //explode() function breaks a string into an array
    $result = ""; // taken an empty variable
    foreach($arraudata as $value) //every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.
    {
        if(strlen($value) > strlen($result)) //strlen() function returns the length of a string
        {
            $result = $value; //with iteration every time it find the largest value when find bellow the larger one that time if condition return false
        }       
    }
    return $result; // return largest value
}
echo longestword('The quick brown fox jumped over the lazy dog');

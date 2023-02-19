<?php

function longestword($string){
    $arraudata = explode(" ",$string);
    $result = "";
    foreach($arraudata as $value)
    {
        if(strlen($value) > strlen($result))
        {
        $result = $value; 
        
        }
       
    }
    return $result;
}
echo longestword('The quick brown fox jumped over the lazy dog');

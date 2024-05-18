<?php

// String Manupulation .. vowel a,e,i,o,u

function string(){
    $string = array("Hello", "World", "PHP", "Programing");
    $arrayCount = count($string);
    //echo $arrayCount;
    for($i = 0; $i < $arrayCount; $i++){
        echo "Original String: $string[$i] ,";

        // Vowel Count...
        
        // methud 1
        // $vowel = substr_count($string[$i], "a")+
        //         substr_count($string[$i], "e")+
        //         substr_count($string[$i], "i")+
        //         substr_count($string[$i], "o")+
        //         substr_count($string[$i], "u");
        //     echo " Vowel : $vowel ";

        // methud 2
        $b = preg_match_all("/[aeiou]/", $string[$i]);
        echo "Vowel : $b";

        // string revers....
        $a = strrev($string[$i]);
        echo ", String Revers: $a <br>";       
    }
}

$stringFunction = string();


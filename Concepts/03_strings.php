<?php

    $stringOne = "Email: ";
    $stringTwo = "suchak0630@gmail.com";
    
    echo "String 1: $stringOne <br>";
    echo "String 1: $stringTwo <br>";

    // string concat
    echo $stringOne .$stringTwo ."<br>";

    echo "0th index: " .$stringTwo[0]. "<br>";  // get index value

    //string length 
    echo "String 1 size: " .strlen($stringOne). "<br>";

    // convert uppercase
    echo "String2 upper: " .strtoupper($stringTwo). "<br>";
    
    // convert lowercase
    echo "String2 lower: " .strtolower($stringTwo). "<br>";

    // replace specifc index value
    echo "Replace E with A: " .str_replace("E", "A", $stringOne). "<br>";

?>
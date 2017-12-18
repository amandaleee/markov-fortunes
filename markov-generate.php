<?php

require 'markov.php';

// echo "Hello world";

if (isset($_POST)) {
    $order  = 5;
    $length = 120; //this will get shorter after we manipulate it below

    $text = file_get_contents("text/fortunes.txt");

    if(isset($text)) {
        $markov_table = generate_markov_table($text, $order);
        $markov = generate_markov_text($length, $markov_table, $order);
    }

    //explode at the first space so we can be sure we start with a full word. 
    $markov_result_1 = explode(" ", $markov, 2); 

    //explode at the last space so we can be sure we end with a full word. 
    // reverse the string
    $markov_result_1_rev = strrev($markov_result_1[1]); 
    //explode at the first space [actually the last bc it's reveresed]
    $markov_result_2_rev = explode(" ", $markov_result_1_rev, 2);
    //reverse it again to set it right
    //also upcase the first character here
    $markov_result_2 = ucfirst(strrev($markov_result_2_rev[1])); 
   
     //add a period to the end of the fortune, if it's not already there. 
    if (strrpos($markov_result_2 , ".") !== 140) {
        $markov_result = $markov_result_2 . ".";
    } else {
        $markov_result = $markov_result_2; 
    }


}
echo $markov_result;
<?php
    $numArr = [];
    $minNum = 1;
    $maxNum = 1000;
    while ( count($numArr) < 15) {
        $randomNum = rand($minNum, $maxNum); 
        
        if (!in_array($randomNum, $numArr)) {
            $numArr[] = $randomNum;
        }
        echo "-$randomNum ";
    }   

?>
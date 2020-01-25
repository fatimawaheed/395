<?php

    $number = 9;

    
    switch($number){
        
        case ($number > 15):
            echo "$number is greater: 15";
        break;
        case ($number > 45):
            echo "$number is greater: 45";
        break;
        case ($number > 5):
            echo "$number is greater: 5";
        break;
        default:
        echo "$number is not greater";

    }

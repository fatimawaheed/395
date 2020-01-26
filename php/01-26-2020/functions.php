<?php



// get_numbers
// getNumbers

        // Signature
function getAllNumbers($start, $end = 0)
{ // function body
    for ($a = $start; $a <= $end; $a++) {
        echo $a . '<br>';
    }
}

// getAllNumbers(); // function calling
// function over loading
// function over riding
// getAllNumbers('15','15');
getAllNumbers(15);

getAllNumbers(14, 20);
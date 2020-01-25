<?php

$abc = array();

$class8 = array(
    'asasdasd' => array(
        'id' => 154,
        'name' => 'Saqib',
        'ph'    => '12123113',
        'hobies' => array(
            'cr' =>  'Cricket',
            'tt' => 'Table Tennis',
            'vd' => 'Video Games'
        )
    ),
    157 => array(
        'id' => 157,
        'name' => 'Saqib',
        'ph'    => '12123113',
        'hobies' => array(
            'cr' =>  'Cricket',
            'tt' => 'Table Tennis'
        )
    )

);
// echo count($class8);
// echo "<pre>";
// print_r();
$length = count($class8);
// for($a = 0; $a < $length; $a++){
//     echo "<pre>";
//    print_r($class8[key($class8)]);
// }


foreach($abc as $key => $va){
    echo "<pre>";
    print_r($class8[$key]);
}

// echo $class8[154]['hobies'];
// echo "<pre>";
// print_r($class8);
// var_dump($a);

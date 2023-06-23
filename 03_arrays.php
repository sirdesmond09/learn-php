<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

#two ways of creating simple arrays
$numbers = [1,2,3,4,5,6,7,78,9];
$fruits = array('apple', 'orange', 'pear');


// var_dump($numbers);

// to get a specific value

echo $fruits[1];


// associative arrays: think of it like a python dictionary

$hex = [
    'red' => '#f00',
    'green' => '#0f0',
];

// echo $hex['red'];

var_dump(json_encode($hex));
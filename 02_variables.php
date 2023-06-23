<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "desmond"; //string
$age = 40; // int
$has_kids = true; //bool
$cash_on_hand = 203.4; //float

// echo $name;
// echo $age;
// echo $has_kids;


// string interpolation

// echo $name . ' is' . $age . ' years old';
// echo "${name} is ${age} years old";

// constants are only for things you are not going to change. ever!
define('HOST', 'localrhost');

echo HOST;


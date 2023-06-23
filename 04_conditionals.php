<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to (value matches)
  === Identical to (value and type matches)
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

// if ($age >= 18) {
//     echo 'You are old enough to vote';
// } else {
//     echo 'sorry, you are not old enough to vote';
// }


$t = date('H'); //hour of the day

// if ($t < 12 ){
//     echo 'Good morning';
// } elseif ($t < 17) {
//     echo 'Good afternoon';
// } else {
//     echo 'Good evening';
// }

$posts = ['First Post'];

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No posts';
// }


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/
// $retVal = !empty($posts) ? $posts[0] : "No posts";
// $retVal = !empty($posts) ? $posts[0] : null;
$retVal =  $posts[0] ?? null;

// echo $retVal;



/* -------- Switch Statements ------- */


$fav_color = 'red';

switch (strtolower($fav_color)){
    case 'red':
        echo 'The color is red';
        break;
    case 'blue':
        echo 'The color is blue';
        break;
    default:
        echo 'Your color is not available';
    }
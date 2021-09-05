<?php

/** Some basic arithmetic operators are +, -, *, /, and %.
 * In this challenge you will be given three parameters, $num1, $num2, and an $operator.
 * Use the operator on number 1 and 2.
 */

function operator($num1, $num2, $operator)
{
    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;

        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
            break;
        default :
            $result = $num1 % $num2;
    }

    return $result;
}

echo "<pre>";
die(var_dump(operator(10,5,'-')));
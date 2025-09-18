<?php
require 'function.php';
start_page('calcul');
//end_page();
    $op1 = $_GET['op1'];
    $op2 = $_GET['op2'];
    $op = $_GET['action'];

    switch($op)
    {
        case '/' :
            echo $op1 / $op2;
            break;
        case '*' :
          echo $op1 * $op2;
          break;
        case '-' :
            echo $op1 - $op2;
            break;
        case '+' :
            echo $op1 + $op2;
            break;
        default :
            echo $op1 * $op2;
    }

?>
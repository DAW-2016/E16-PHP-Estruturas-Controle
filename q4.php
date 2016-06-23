<?php

/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 23/06/16
 * Time: 13:47
 */

    if($_GET['a'] & $_GET['b'] & $_GET['c']){

        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];

        $delta = ($b*$b)  - (4 * $a * $c);
        $delta = sqrt($delta);

        $x1 = ((-$b) + $delta) / (2 * $a);
        $x2 = ((-$b) - $delta) / (2 * $a);

        echo "x1 = $x1<br>";
        echo "x2 = $x2<br>";
    }
    else{
        echo "Números não informados corretamnte";
    }

?>
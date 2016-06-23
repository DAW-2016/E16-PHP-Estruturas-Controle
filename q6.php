<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 23/06/16
 * Time: 14:01
 */

if($_GET['x']){

    $x = $_GET['x'];

    $fibo = 1;
    $ant = 0;

    for($i = 1; $i <= $x; ++$i){



        for($j = 1; $j <= $fibo; ++$j){
            echo "*";
        }

        $aux = $fibo;
        $fibo  = $fibo + $ant;
        $ant = $aux;

        echo "<br>";
    }
}
else{
    echo "Valor não informado corretamente";
}
?>
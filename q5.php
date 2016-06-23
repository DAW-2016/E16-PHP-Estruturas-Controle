<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 23/06/16
 * Time: 13:55
 */

    if($_GET['x']){

        $x = $_GET['x'];

        $fat = 1;

        for($i = 1; $i <= $x; ++$i){

            echo $fat,"<br>";

            $fat = $fat * ($i+1);
        }
    }
    else{
        echo "Valor não informado corretamente";
    }
?>
<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 23/06/16
 * Time: 13:42
 */

    if($_GET['num']){

        $num = $_GET['num'];

        for($i = 0; $i < $num; ++$i){

            echo rand(100,1000),"<br>";
        }
    }
    else{
        echo "Valor não informado corretamente.";
    }

?>
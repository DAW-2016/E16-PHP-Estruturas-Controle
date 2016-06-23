<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 23/06/16
 * Time: 13:35
 */

    for ($i = 1; $i <= 1000; ++$i){

        for($j = 2; $j < ($i/2 + 1); $j++){

            if($i % $j == 0){
                echo "$i || n<br>";
                $j = 0;
                break;
            }
        }

        if($j != 0)
            echo "$i || s<br>" ;
    }
?>
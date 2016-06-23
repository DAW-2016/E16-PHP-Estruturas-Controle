<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 23/06/16
 * Time: 13:28
 */
    if($_GET['ano']){

        $ano = $_GET['ano'];

        if ( ( $ano % 4 == 0 && $ano % 100 != 0 ) || $ano % 400 == 0 ){
            echo "Ano bissexto";
        }
        else{
            echo "Ano não bissexto";
        }
    }
    else{
        echo "Ano não informado corretamente.";
    }
?>
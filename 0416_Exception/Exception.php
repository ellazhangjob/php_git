<?php
/**
 * Created by PhpStorm.
 * User: Sandy
 * Date: 4/16/2018
 * Time: 2:05 PM
 */
    $a = 10;

    class myDefinedException extends Exception {}

    try {
        if ($a == 10){
            throw new myDefinedException();
        }
    }

    catch(myDefinedException $my){
        echo "Here is my Defined Exception.";
    }






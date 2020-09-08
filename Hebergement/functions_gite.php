<?php 
    function debug($variable){
        echo '<pre>' .print_r($variable, true). '</pre>';
    }

    function str_random($length){
        $alphabet = "123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        // On ne veut que 60 caractère, on melange, on repète la variable $alphabet le nombre de $length (ici 60 fois)
        return substr(str_shuffle(str_repeat($alphabet, $length)),0, $length);
    }
?>
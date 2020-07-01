<?php

/**
 * Permet de sécuriser une chaine de caractère
 * @param $string
 * @return string 
 */
function str_secure($string){
    return trim(htmlspecialchars($string));
}

/**
 * Permet de rendre plus lisible le debug
 * @param $var
 */
function debug($var){
    echo '<pre>';
        var_dump($var);
    echo '</pre>';
}
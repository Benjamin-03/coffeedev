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
function getMessage ()
{
if(isset($_GET{'error'}) && isset($_GET{'message'}) ) 
{
    echo '<div class="alert alert-danger"> '.$_GET{'message'}.'</div>';
}elseif(isset($_GET {'success'}) && isset($_GET{'message'}))
{
    echo '<div class="alert alert-success"> '.$_GET{'message'}.'</div>';
}

} 
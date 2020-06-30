<?php

$maintenance = false;

if($maintenance){
    echo 'maintenance';
} else {

    include_once 'config/config.php';
    include_once 'classes/Autoloader.php';
    include_once 'functions/functions.php';
    
    Autoloader::register();
    include_once 'config/db.php';
    
    // definition de la page courante
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $page = trim(strtolower($_GET['page']));
    } else {
        $page = 'home';
    } 
    
    $_SESSION['lang'] = getUserLanguage();
    
    // array contenant toutes les pages
    $allPages = scandir('controllers/');
    
    if(in_array($page.'_controller.php', $allPages)){
    
        $lang = getPageLanguage($_SESSION['lang'], ['header', $page, 'footer']);
    
        // inclusion de la page
        include_once 'models/'.$page.'_model.php';
        include_once 'controllers/'.$page.'_controller.php';
        include_once 'views/'.$page.'_view.php';
        
    } else {
        echo 'Erreur 404';
    }
}

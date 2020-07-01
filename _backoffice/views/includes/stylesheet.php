<?php 

function registerStylesheet(){
    $manifest = file_get_contents("http://localhost/coffeedev/_backoffice/assets/js/manifest.json");
    $css = json_decode($manifest, JSON_FORCE_OBJECT);
    $css['theme.css'] = substr($css['theme.css'],7);

    $styles = [
        'main-theme-css' => '<link rel="stylesheet" href="http://localhost/coffedev/_backoffice/assets/css/'.$css['theme.css'].'">',
        'main-theme-sourcemap-css' => '<link rel="stylesheet" href="http://localhost/coffeedev/_backoffice/assets/css/'.$css['theme.css.map'].'">'
    ];
    
    foreach($styles as $style){
        echo $style;
    }
}

registerStylesheet();
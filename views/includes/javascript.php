<?php
function registerJavascript (){
    $_manifest=file_get_contents("http://localhost/coffeedev/assets/js/manifest.json");
        $js=json_decode($_manifest,JSON_FORCE_OBJECT);
        
        $scripts=[
            'main-theme-js'=>'<script type="text/javascript" src="http://localhost/coffeedev/assets/js/'.$js['theme.js'].'" defer></script>',
            'main-theme-sourcemap-js'=>'<script type="text/javascript" src="http://localhost/coffeedev/assets/js/'.$js['theme.js.map'].'" defer></script>'
        ];
        foreach($scripts as $script) {
            echo $script;
        }
    
}
registerJavascript();
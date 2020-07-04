<?php

if(isset($_POST['login'])) {
    if(!empty($_POST['mail']) && !empty($_POST['password'])){
        
        $mail = str_secure($_POST['mail']);
        $password = str_secure($_POST['password']);

        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
           displayError('connection', 'VTF');
        }

        if(Admin::getAdminFromEmail($mail))
        {
            $admin = Admin::getAdminFromEmail($mail);

            $_SESSION['connect_admin'] = 1;
            $_SESSION['firstname'] = $admin['firstname'];
    
            displaySuccess('dashboard', 'Bienvenue '.$_SESSION['firstname'].'');
        }

    } else {
        displayError('connection', 'Merci de remplir tous les champs');
    }
}
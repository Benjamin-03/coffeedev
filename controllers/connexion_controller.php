<?php

if(isset($_SESSION['connect_user'])){
    
}

if(isset($_POST['btn-connexion'])){
    if(!empty($_POST['email']) && !empty($_POST['pswd'])){
        
        $email = $_POST['email'];
        $mdp = $_POST['pswd'];

        if(verifyEmailExist($email) == 0){
            header('location: connexion?error=1&message=Tu n\'à pas de compte chez nous dommage');
            exit();

        } else {  
            $_SESSION['connect_user'] = 1;
            $_SESSION['secret'] = $log['secret'];

            header('location: account?success=1?&message=Heureux de te revoir, j\'espere que tu t\'es fait un café');
            exit();
        }


    } else {
        header('location: connexion?error=1&message=Tous les champs doivent être remplis!');
        exit();
    }
}
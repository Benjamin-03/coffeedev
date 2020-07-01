<?php
if (isset ($_POST['login'])) 
{
    if (!empty($_POST['mail'])&& !empty($_POST['password'])
     {
        $mail=$_POST['mail'];
        $password=$_POST['password'];
        header('location: dashboard?succes=1&message= Bienvenue jeune caféinomane');
        exit;
    }
    else
    {
        header('location: connection?error=1&message=Merci de remplir tout les champs');
        exit;
    }

}
<?php


/**
 * getEmail
 * 
 * @param $email 
 * @return int
 */
function verifyEmailExist($email)
{
    global $db;

    $req = $db->fetch('SELECT COUNT(*) as NbEmail FROM users WHERE email = ?', [$email], false);

    return $req;
}
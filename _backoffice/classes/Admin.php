<?php

class Admin {
    
    /**
     * id_admin
     *
     * @var mixed
     */
    private $id_admin;    
    /**
     * email
     *
     * @var mixed
     */
    private $email;    
    /**
     * firstname
     *
     * @var mixed
     */
    private $firstname;    
    /**
     * lastname
     *
     * @var mixed
     */
    private $lastname;

    public function __construct($id_admin)
    {
        global $db;

        $id_admin = str_secure($id_admin);

        $req = $db->fetch('SELECT * FROM admin WHERE id_admin = ?', [$id_admin], false);

        $data = $req;

        $this->id_admin = $id_admin;
        $this->email = $data['email'];
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
    }
    
    /**
     * getEmail
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * setEmail
     * Permet de changer l'email de l'administrateur par celui entrer en parametre
     *
     * @param  mixed $email
     * @return void
     */
    public function setEmail($email)
    {   
        $this->email = $email;
    } 
    
    /**
     * getFirstname
     *
     * @return void
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    /**
     * setFirstname
     *
     * @param  mixed $firstname
     * @return void
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    
    /**
     * getLastname
     *
     * @return void
     */
    public function getLastname()
    {
        return $this->firstname;
    }
    
    /**
     * setLastname
     *
     * @param  mixed $lastname
     * @return void
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    
    /**
     * getAdminFromEmail
     *
     * @param  mixed $email
     * @return array
     */
    public static function getAdminFromEmail($email)
    {
        global $db;

        $req = $db->fetch('SELECT * FROM admin WHERE email = ?', [$email], false);

        return $req;
    }

}

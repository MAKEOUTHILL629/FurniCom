<?php


class UserDAO
{
    private $id;
    private $role;
    private $genre;
    private $identityDocument;
    private $documentNumber;
    private $firtsName;
    private $lastName;
    private $address;
    private $email;
    private $password;
    private $active;
    private $createAt;
    private $updateAt;

    /**
     * UserDAO constructor.
     * @param $id
     * @param $role
     * @param $genre
     * @param $identityDocument
     * @param $documentNumber
     * @param $firtsName
     * @param $lastName
     * @param $address
     * @param $email
     * @param $password
     * @param $active
     * @param $createAt
     * @param $updateAt
     */
    public function __construct($id = "", $role = "", $genre = "", $identityDocument = "", $documentNumber = "", $firtsName = "", $lastName = "", $address = "", $email = "", $password = "", $active = "", $createAt = "", $updateAt = "")
    {
        $this->id = $id;
        $this->role = $role;
        $this->genre = $genre;
        $this->identityDocument = $identityDocument;
        $this->documentNumber = $documentNumber;
        $this->firtsName = $firtsName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->email = $email;
        $this->password = $password;
        $this->active = $active;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
    }


    public function create()
    {
        return "INSERT INTO users (fk_role, fk_genre, fk_identity_document, document_number, first_names, lastnames, address, email, password) 
                VALUES ('" . $this->role . "', '" . $this->genre . "', '" . $this->documentNumber . "', '" . $this->firtsName . "', '" . $this->lastName . "', '" . $this->address . "', '" . $this->email . "', '" . md5($this->password) . "')";
    }

    public function consultLastId(){
        return "SELECT last_insert_id()";
    }


    public function existEmail()
    {
        return "SELECT COUNT(id_user) FROM users WHERE email = '" . $this->email . "'";
    }

    public function existCodeOfActivation()
    {
        return "SELECT COUNT(id_user)
                FROM users
                WHERE idcliente = '" . $this->id . "' and codigo_activacion = '" . $this->codigo_activacion . "'";
    }

    public function setActive()
    {
        return "UPDATE users SET status = '1' WHERE users.id_user = '" . $this->id . "'";
    }

    public function setDisable()
    {
        return "UPDATE users SET status = '2' WHERE users.id_user = '" . $this->id . "'";
    }

    public function authenticate()
    {
        return "SELECT id_user, status
                FROM users
                WHERE email = '" . $this->email . "' AND password = '" . md5($this->password) . "'";
    }

    public function consultAll()
    {
        return "SELECT id_user,fk_role,fk_genre,fk_identity_document,document_number,first_names,lastnames,address,email,status,created_at,updated_at
                FROM users";
    }


    public function consultUser(){
        return "SELECT fk_role,fk_genre,fk_identity_document,document_number,first_names,lastnames,address,email,status,created_at,updated_at
                FROM users
                WHERE id_user = '" . $this -> id . "'";
    }

    public function consultStatus()
    {
        return "SELECT status
                FROM users
                WHERE id_user = " . $this->id;
    }

}
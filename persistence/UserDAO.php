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
    public function __construct( $id = "", $role = "", $genre= "", $identityDocument = "", $documentNumber= "", $firtsName= "", $lastName= "", $address= "", $email= "", $password= "", $active= "", $createAt= "", $updateAt= "")
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


}
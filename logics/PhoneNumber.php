<?php


require_once 'persistence/Connection.php';
require_once 'persistence/PhoneNumberDAO.php';

class PhoneNumber
{
    private $id;
    private $user;
    private $number;
    private $connection;
    private $phoneNumberDAO;

    /**
     * @param $id
     * @param $user
     * @param $number
     */
    public function __construct($id = "", $user = "", $number = "")
    {
        $this->id = $id;
        $this->user = $user;
        $this->number = $number;
        $this->connection = new Connection();
        $this->phoneNumberDAO = new PhoneNumberDAO($id, $user, $number);
    }

    public function create()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->phoneNumberDAO->create());
        $this->connection->close();
    }

    public function consultByUser($idUser)
    {
        $this->connection->openConnection();
        $this->connection->execute($this->phoneNumberDAO->consultByIdUser($idUser));
        $phones = array();
        while (($result = $this->connection->extract()) != null) {
            array_push($phones, new PhoneNumber($result[0], $result[1], $result[2]));
        }
        $this->connection->close();
        return $phones;
    }

    /**
     * @return mixed|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed|string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed|string
     */
    public function getNumber()
    {
        return $this->number;
    }



}
<?php

require_once 'persistence/Connection.php';
require_once 'persistence/RoleDAO.php';

class Role
{
    private $id;
    private $name;
    private $abbreviation;
    private $connection;
    private $roleDAO;

    /**
     * @param $id
     * @param $name
     * @param $abbreviation
     */
    public function __construct($id="", $name="", $abbreviation="")
    {
        $this->id = $id;
        $this->name = $name;
        $this->abbreviation = $abbreviation;
        $this->connection = new Connection();
        $this->roleDAO = new RoleDAO($id, $name, $abbreviation);
    }

    public function consult()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->roleDAO->consult());
        $result = $this->connection->extract();
        $this->name = $result[0];
        $this->abbreviation = $result[1];
        $this->connection->close();
    }

    public function consultAll()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->roleDAO->consultAll());
        $roles = array();
        while (($result = $this->connection->extract()) != null) {
            array_push($roles, new Role($result[0], $result[1], $result[2]));
        }
        $this->connection->close();
        return $roles;
    }


}
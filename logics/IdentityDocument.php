<?php

require_once 'persistence/Connection.php';
require_once 'persistence/IdentityDocumentDAO.php';

class IdentityDocument
{
    private $id;
    private $name;
    private $abbreviation;
    private $connection;
    private $identityDocumentDAO;

    /**
     * @param $id
     * @param $name
     * @param $abbreviation
     */
    public function __construct($id = "", $name = "", $abbreviation = "")
    {
        $this->id = $id;
        $this->name = $name;
        $this->abbreviation = $abbreviation;
        $this->connection = new Connection();
        $this->identityDocumentDAO = new IdentityDocumentDAO($id, $name, $abbreviation);
    }

    public function consult()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->identityDocumentDAO->consult());
        $result = $this->connection->extraer();
        $this->name = $result[0];
        $this->abbreviation = $result[1];
        $this->connection->close();
    }

    public function consultAll()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->identityDocumentDAO->consultAll());
        $identityDocuments = array();
        while (($result = $this->connection->extract()) != null) {
            array_push($identityDocuments, new IdentityDocument($result[0], $result[1], $result[2]));
        }
        $this->connection->close();
        return $identityDocuments;
    }


}
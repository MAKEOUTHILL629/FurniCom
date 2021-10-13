<?php

require_once 'persistence/Connection.php';
require_once 'persistence/GenresDAO.php';

class Genres
{
    private $id;
    private $name;
    private $abbreviation;
    private $connection;
    private $genresDAO;


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
        $this->genresDAO = new GenresDAO($id, $name, $abbreviation);
    }

    public function consult()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->genresDAO->consult());
        $result = $this->connection->extract();
        $this->name = $result[0];
        $this->abbreviation = $result[1];
        $this->connection->close();
    }

    public function consultAll()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->genresDAO->consultAll());
        $genres = array();
        while (($result = $this->connection->extract()) != null) {
            array_push($genres, new Genres($result[0], $result[1], $result[2]));
        }
        $this->connection->close();
        return $genres;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed|string
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }


}
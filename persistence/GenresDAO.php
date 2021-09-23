<?php


class GenresDAO
{
    private $id;
    private $name;
    private $abbreviation;

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
    }


    public function consult()
    {
        return "SELECT name,abbreviation
                FROM genres
                WHERE id_genre = " . $this->id;
    }

    public function consultAll()
    {
        return "SELECT id_genre, name,abbreviation
                FROM genres
                ORDER BY name ASC";
    }

}
<?php


class RoleDAO
{
    private $id;
    private $name;
    private $abbreviation;

    /**
     * @param $id
     * @param $name
     * @param $abbreviation
     */
    public function __construct($id, $name, $abbreviation)
    {
        $this->id = $id;
        $this->name = $name;
        $this->abbreviation = $abbreviation;
    }


    public function consult()
    {
        return "SELECT name,abbreviation
                FROM roles
                WHERE id_role = " . $this->id;
    }

    public function consultAll()
    {
        return "SELECT id_role, name,abbreviation
                FROM roles
                ORDER BY name ASC";
    }


}
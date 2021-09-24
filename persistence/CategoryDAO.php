<?php


class CategoryDAO
{
    private $id;
    private $name;
    private $createdAt;
    private $updatedAt;

    /**
     * @param $id
     * @param $name
     * @param $createdAt
     * @param $updatedAt
     */
    public function __construct($id, $name, $createdAt, $updatedAt)
    {
        $this->id = $id;
        $this->name = $name;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function consult()
    {
        return "SELECT name,created_at,updated_at FROM categories
                WHERE id_category = " . $this->id;
    }

    public function consultAll()
    {
        return "select id_category, name,created_at,updated_at
                from categories
                order by name asc";
    }


}
<?php
require_once 'persistence/Connection.php';
require_once 'persistence/CategoryDAO.php';

class Category
{
    private $id;
    private $name;
    private $createAt;
    private $updateAt;
    private $connection;
    private $categoryDAO;

    /**
     * @param $id
     * @param $name
     * @param $createAt
     * @param $updateAt
     */
    public function __construct($id = "", $name = "", $createAt = "", $updateAt = "")
    {
        $this->id = $id;
        $this->name = $name;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
        $this->connection = new Connection();
        $this->categoryDAO = new CategoryDAO($id, $name, $createAt, $updateAt);
    }


    public function consult()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->categoryDAO->consult());
        $result = $this->connection->extract();
        $this->name = $result[0];
        $this->connection->close();
    }

    public function consultAll()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->categoryDAO->consultAll());
        $categories = array();
        while (($result = $this->connection->extract()) != null) {
            array_push($categories, new Category($result[0], $result[1], $result[2], $result[3]));
        }
        $this->connection->close();
        return $categories;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * @return mixed
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }


}
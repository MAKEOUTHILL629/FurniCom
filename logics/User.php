<?php
require_once 'persistence/UserDAO.php';
require_once 'persistence/Connection.php';

class User
{
    private $id;
    private $role;
    private $genre;
    private $identityDocument;
    private $documentNumber;
    private $firstNames;
    private $lastNames;
    private $address;
    private $email;
    private $password;
    private $status;
    private $createAt;
    private $updateAt;
    private $connection;
    private $userDAO;

    /**
     * @param $id
     * @param $role
     * @param $genre
     * @param $identityDocument
     * @param $documentNumber
     * @param $firstNames
     * @param $lastNames
     * @param $address
     * @param $email
     * @param $password
     * @param $status
     * @param $createAt
     * @param $updateAt
     */
    public function __construct($id = "", $role = "", $genre = "", $identityDocument = "", $documentNumber = "", $firstNames = "", $lastNames = "", $address = "", $email = "", $password = "", $status = "", $createAt = "", $updateAt = "")
    {
        $this->id = $id;
        $this->role = $role;
        $this->genre = $genre;
        $this->identityDocument = $identityDocument;
        $this->documentNumber = $documentNumber;
        $this->firstNames = $firstNames;
        $this->lastNames = $lastNames;
        $this->address = $address;
        $this->email = $email;
        $this->password = $password;
        $this->status = $status;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
        $this->connection = new Connection();
        $this->userDAO = new UserDAO($id, $role, $genre, $identityDocument, $documentNumber, $firstNames, $lastNames, $address, $email, $password, $status, $createAt, $updateAt);
    }

    public function create()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->userDAO->create());
        $this->connection->execute($this->userDAO->consultLastId());
        $result = $this->connection->extract();
        $this->connection->close();
        return $result[0];
    }

    public function existEmail()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->userDAO->existEmail());
        $result = $this->connection->extract();
        $this->connection->close();
        return ($result[0] == 0) ? false : true;
    }

    public function existCodeOfActivation()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->userDAO->existCodeOfActivation());
        $result = $this->connection->extract();
        $this->connection->close();
        return ($result[0] == 0) ? false : true;
    }


    public function authenticate()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->userDAO->authenticate());
        if ($this->connection->countRow() == 0) {
            $this->connection->close();
            return false;
        } else {
            $result = $this->connection->extract();
            $this->id = $result[0];
            $this->status = $result[1];
            $this->connection->close();
            return true;
        }
    }

    public function setEnable()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->userDAO->setActive());
        $this->connection->close();
    }

    public function setDisable()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->userDAO->setDisable());
        $this->connection->close();
    }

    public function consultUser()
    {

        $this->connection->openConnection();
        $this->connection->execute($this->userDAO->consultUser());
        $result = $this->connection->extraer();
        $role = new Role($result[0]);
        $role->consult();
        $genre = new Genres($result[1]);
        $genre->consult();
        $identityDocument = new IdentityDocument($result[2]);
        $identityDocument->consult();
        $this->role = $role;
        $this->genre = $genre;
        $this->identityDocument = $identityDocument;
        $this->documentNumber = $result[3];
        $this->firstNames = $result[4];
        $this->lastNames = $result[5];
        $this->email = $result[6];
        $this->status = $result[7];
        $this->createAt = $result[8];
        $this->updateAt = $result[9];

    }

    public function consultAll()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->userDAO->consultAll());
        $users = array();
        while (($result = $this->connection->extract()) != null) {
            $role = new Role($result[1]);
            $role->consult();
            $genre = new Genres($result[2]);
            $genre->consult();
            $identityDocument = new IdentityDocument($result[3]);
            $identityDocument->consult();

            array_push($users, new User($result[0], $role, $genre, $identityDocument, $result[4], $result[5], $result[6], $result[7], $result[8], $result[9], $result[10], $result[11], $result[12]));
        }
        $this->connection->close();
        return $users;
    }

    public function consultStatus()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->userDAO->consultStatus());
        $result = $this->connection->extract();
        $this->status = $result[0];
    }

    public function consultNumberPhones(){
        $phoneNumbers = new PhoneNumber();
        return $phoneNumbers->consultByUser($this->id);
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
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @return mixed
     */
    public function getIdentityDocument()
    {
        return $this->identityDocument;
    }

    /**
     * @return mixed
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * @return mixed
     */
    public function getFirstNames()
    {
        return $this->firstNames;
    }

    /**
     * @return mixed
     */
    public function getLastNames()
    {
        return $this->lastNames;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
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
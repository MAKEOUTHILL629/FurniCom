<?php


class PhoneNumberDAO
{
    private $id;
    private $user;
    private $number;

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
    }

    public function create()
    {
        return "INSERT INTO phone_numbers (fk_user, number) VALUES ('" . $this->user . "', '" . $this->number . "')";
    }

    public function consultByIdUser($idUser)
    {
        return "SELECT id_phone_number,fk_user,number FROM phone_numbers
                WHERE fk_user = " . $idUser;
    }

    public function consult()
    {
        return "SELECT id_phone_number,fk_user,number FROM phone_numbers
                WHERE id_phone_number = " . $this->id;
    }
}
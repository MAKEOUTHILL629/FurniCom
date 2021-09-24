<?php


class IdentityDocumentDAO
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
                FROM identity_documents
                WHERE id_identity_document = " . $this->id;
    }

    public function consultAll()
    {
        return "SELECT id_identity_document, name,abbreviation
                FROM identity_documents
                ORDER BY name ASC";
    }

}
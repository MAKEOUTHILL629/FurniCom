<?php


class Connection
{
    private $mysqli;
    private $result;

    private function openConnection()
    {
        $this->mysqli = new mysqli();

        $this->mysqli->set_charset("utf-8");
    }

    public function close()
    {
        $this->mysqli->close();
    }

    public function execute($sentence)
    {
        $this->result = $this->mysqli->query($sentence);
    }

    public function extract()
    {
        return $this->result->fetch_row();
    }

    public function countRow()
    {
        return ($this->result != null) ? $this->result->num_rows : 0;
    }

}
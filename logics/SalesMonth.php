<?php
require_once 'persistence/Connection.php';
require_once 'persistence/SalesMonthDAO.php';

class SalesMonth
{
    private $month;
    private $sales;
    private $connection;
    private $salesMonthDAO;

    /**
     * @param $month
     * @param $sales
     */
    public function __construct($month = "", $sales = "")
    {
        $this->month = $month;
        $this->sales = $sales;
        $this->connection = new Connection();
        $this->salesMonthDAO = new SalesMonthDAO($month, $sales);
    }

    public function salesByMonth()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->salesMonthDAO->salesByMonth());
        $salesByMonths = array();
        while (($result = $this->connection->extract()) != null) {


            array_push($salesByMonths, new SalesMonth($result[0], $result[1]));
        }
        $this->connection->close();
        return $salesByMonths;
    }

    /**
     * @return mixed|string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @return mixed|string
     */
    public function getSales()
    {
        return $this->sales;
    }


}
<?php

class SalesMonthDAO
{
    private $month;
    private $sales;

    /**
     * @param $month
     * @param $sales
     */
    public function __construct($month, $sales)
    {
        $this->month = $month;
        $this->sales = $sales;
    }

    public function salesByMonth()
    {
        return "SELECT MONTHNAME(created_at), SUM(total_purchase) FROM orders WHERE payment = 1 GROUP BY 1";
    }


}
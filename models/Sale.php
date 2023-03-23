<?php

require_once 'models/Transaction.php';

class Sale extends Transaction
{
    public function addSale($id_transaction, $selling_price)
    {
        $sql = "INSERT INTO sale (id_transaction, selling_price) VALUES (?, ?);";
        $this->executerRequete($sql, array($id_transaction, $selling_price));
    }

    public function getAllSales()
    {
        $sql = "SELECT * FROM sale ";
        $results = $this->executerRequete($sql);
        $sales = $results->fetchAll();
        return $sales;
    }

    public function getOneSale($id_transaction)
    {
        $sql = "SELECT id_transaction, id FROM sale WHERE id_transaction = ? ";
        $result = $this->executerRequete($sql, $id_transaction);
        $sale = $result->fetch();
        return $sale;
    }
}

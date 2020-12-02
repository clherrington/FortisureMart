<?php
class Product {
    public function __construct($db)
    {
        $this->conn = $db;
    }

    function prodRead(){
        $query = "SELECT * from products";

        //Prepares query statement
        $stmt = $this->conn->prepare($query);

        //execute query
        $stmt->execute();

        //return values
        return $stmt;
    }
}


?>
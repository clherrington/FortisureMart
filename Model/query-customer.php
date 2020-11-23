<?php
class customer
{
    public function __construct($db){
        $this->conn = $db;
}

    public function addCustomer($data)
    {
        
        //vars
        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $address = $data['address'];
        $city = $data['city'];
        $state = $data['state'];
        $postalCode = $data['postalCode'];
        $country = $data['country'];
        $email = $data['email'];
        $phone = $data['phone'];
        $comments = $data['comments'];
        //vars

        $query = "INSERT into customers
            (contactLastName, contactFirstName, phone, addressline1, city, state, postalCode, country, email, comments)
        VALUES ('$lastName', '$firstName', '$phone', '$address', '$city', '$state', '$postalCode', '$country', '$email', '$comments');";
        
        //prepare query statement
        $results = $this->conn->prepare($query);

        //execute statement
        $results->execute();

        //grabs the last id created
        return $this->conn->lastInsertId();

    }
}
?>

<?php

class customermodel {
    private $db = array();
    public function __construct() {
        $this->db = new Database();
    }
    public function getEmail($email){
        $query = "SELECT * FROM tbl_customer  WHERE customer_email = '$email'";
        return $this->db->select($query);
    }
    public function insertCustomer($customer){
        $query = "INSERT INTO tbl_customer(customer_name, customer_phone, customer_email, customer_password, customer_address,customer_ward, customer_district, customer_city)
        VALUES('" . $customer['fullname'] . "',
        '" . $customer['phone'] . "',
        '" . $customer['email'] . "',
        '" . $customer['password'] . "',
        '" . $customer['address'] . "',
        '" . $customer['ward'] . "',
        '" . $customer['district'] . "',
        '" . $customer['city'] . "' )";
       return  $this->db->insert($query);
    } 
    public function getloginUser($email, $password){
        $query = "SELECT * FROM tbl_customer WHERE customer_email = '$email' AND customer_password = '$password' LIMIT 1";
        return $this->db->select($query);
    }
    public function loginUser($email, $password){
        $query = "SELECT * FROM tbl_customer WHERE customer_email = '$email' AND customer_password = '$password' LIMIT 1";
        return $this->db->select($query);
    }
    public function getAccountById($id){
        $query = "SELECT * FROM tbl_customer WHERE customer_id = '$id'";
        return $this->db->select($query);
    }
    public function updateCustomer($data, $id){
        $query = "UPDATE tbl_customer SET customer_name = '" . $data['fullname'] . "',
        customer_phone = '" . $data['phone'] . "',
        customer_email = '" . $data['email'] . "',
        customer_address = '" . $data['address'] . "',
        customer_ward = '" . $data['ward'] . "',
        customer_district = '" . $data['district'] . "',
        customer_city = '" . $data['city'] . "'
        WHERE customer_id = '$id'";
        return $this->db->update($query);
    }
    public function updateCustomerAndPass($data, $id, $password){
        $query = "UPDATE tbl_customer SET customer_name = '" . $data['fullname'] . "',
        customer_phone = '" . $data['phone'] . "',
        customer_password = '$password',
        customer_email = '" . $data['email'] . "',
        customer_address = '" . $data['address'] . "',
        customer_ward = '" . $data['ward'] . "',
        customer_district = '" . $data['district'] . "',
        customer_city = '" . $data['city'] . "'
        WHERE customer_id = '$id'";
        return $this->db->update($query);
    }
}
?> 
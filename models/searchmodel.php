<?php

class searchmodel {
    private $db = array();
    public function __construct() {
        $this->db = new Database();
    }
    public function getProductBySearch($result_product){
        $query = "SELECT * FROM tbl_product  WHERE productName LIKE '%$result_product%' OR productMovement LIKE '%$result_product%' OR productStrap LIKE '%$result_product%' OR productSize LIKE '%$result_product%'";
        return $this->db->select($query);
    }
    public function suggestionProducts($result_product){
        $query = " SELECT * FROM tbl_product  WHERE productName NOT IN('$result_product') ORDER BY RAND() LIMIT 4";
        return $this->db->select($query);
    }

}
?> 
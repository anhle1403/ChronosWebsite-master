<?php
 
class productsmodel {
    private $db = array();
    public function __construct() {
        $this->db = new Database();
    } 
    public function showProducts($start,$product_per_page){
        $query = " SELECT * FROM tbl_product ORDER BY productId desc LIMIT $start,$product_per_page ";
        return $this->db->select($query);
    }
    public function getTotalProduct(){
        $query = " SELECT * FROM tbl_product ";
        return $this->db->select($query);
    }
    public function detailProducts($id){
        $query = " SELECT * FROM tbl_product  WHERE productId = '$id'";
        return $this->db->select($query);
    }
    public function relatedProducts($id){
        $query = " SELECT * FROM tbl_product  WHERE productId NOT IN('$id') ORDER BY RAND() LIMIT 4";
        return $this->db->select($query);
    }
}
?> 
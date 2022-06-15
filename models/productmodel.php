<?php
 
class productmodel {
    private $db = array();
    public function __construct() {
        $this->db = new Database();
    }
    public function insertProduct($product){
        $query = "INSERT INTO tbl_product(productName,productPrice,productDesc,productMovement,productStrap,productSize,productImage,productImageDetail,productDetail1,productDetail2)
        VALUES('" . $product['productName'] . "',
        '" . $product['productPrice'] . "',
        '" . $product['productDesc'] . "',
        '" . $product['productMovement'] . "',
        '" . $product['productStrap'] . "',
        '" . $product['productSize'] . "',
        '" . $product['productImage2'] . "',
        '" . $product['productImageDetail2'] . "',
        '" . $product['productDetail1'] . "',
        '" . $product['productDetail2'] . "')";
       return  $this->db->insert($query);
    } 
    public function showProduct($start,$product_per_page){
        $query = " SELECT * FROM tbl_product order by productId LIMIT $start,$product_per_page";
        return $this->db->select($query);
    } 
    public function getTotalProduct(){
        $query = "SELECT * FROM tbl_product";
        return $this->db->select($query);
    }
    public function deleteProduct($id){
        $query = "DELETE FROM tbl_product WHERE productId = '$id'";
        return $this->db->delete($query);
    }
    public function getProductById($id){
        $query = " SELECT * FROM tbl_product WHERE productId = '$id' ";
        return $this->db->select($query);
    }
    public function updateProduct($id,$product,$encodedImage,$encodedImageDetail){
        $query = "UPDATE tbl_product SET productName = '" . $product['productName'] . "',
        productPrice = '" . $product['productPrice'] . "',
        productDesc = '" . $product['productDesc'] . "',
        productMovement = '" . $product['productMovement'] . "',
        productStrap = '" . $product['productStrap'] . "',
        productSize = '" . $product['productSize'] . "',
        productImage = '$encodedImage',
        productImageDetail = '$encodedImageDetail',
        productDetail1 = '" . $product['productDetail1'] . "',
        productDetail2 = '" . $product['productDetail2'] . "'
        WHERE productId = '$id'";
        return $this->db->update($query);
    }
    public function updateProductNoImage($id,$product){
        $query = "UPDATE tbl_product SET productName = '" . $product['productName'] . "',
        productPrice = '" . $product['productPrice'] . "',
        productDesc = '" . $product['productDesc'] . "',
        productMovement = '" . $product['productMovement'] . "',
        productStrap = '" . $product['productStrap'] . "',
        productSize = '" . $product['productSize'] . "',
        productDetail1 = '" . $product['productDetail1'] . "',
        productDetail2 = '" . $product['productDetail2'] . "'
        WHERE productId = '$id'";
        return $this->db->update($query);
    }
}
?>  
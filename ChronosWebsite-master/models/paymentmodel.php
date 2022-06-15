<?php

class paymentmodel {
    private $db = array();
    public function __construct() {
        $this->db = new Database();
    }
    public function insertPaymentMethod($payment_number,$payment_proceed){
        $query = " INSERT INTO tbl_payment(paymentNumber, paymentMethod) VALUES ('$payment_number','$payment_proceed')";
        return $this->db->insert($query);
    }
    public function shippingOrder($payment_number){
        $query = " SELECT ord.address, ord.ward, ord.district, ord.city, ords.grandTotal FROM tbl_order_detail ord 
        INNER JOIN tbl_payment pay ON pay.paymentNumber = ord.orderNumber 
        INNER JOIN tbl_order ords ON ords.orderNumber = ord.orderNumber 
        WHERE pay.paymentNumber = '$payment_number' LIMIT 1";
        return $this->db->select($query);
    }
    public function productOrder($payment_number){
        $query = " SELECT pro.productStrap, pro.productMovement, pro.productSize, pro.productName, pro.productPrice, ord.productQuantity FROM tbl_order_detail ord 
        INNER JOIN tbl_payment pay ON pay.paymentNumber = ord.orderNumber 
        INNER JOIN tbl_product pro ON pro.productId = ord.productId
         WHERE pay.paymentNumber = '$payment_number'";
        return $this->db->select($query);
    }
    
}
?> 
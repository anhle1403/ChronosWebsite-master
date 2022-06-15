<?php

class ordermodel {
    private $db = array();
    public function __construct() {
        $this->db = new Database();
    } 
    public function insertOrder($orderNumber, $orderStatus, $orderDate, $grand_total){
        $query = " INSERT INTO tbl_order(orderNumber, orderDate, grandTotal, orderStatus) VALUES ('$orderNumber','$orderDate','$grand_total','$orderStatus')";
        return $this->db->insert($query);
    }
    public function inserOrderDetail($data_order_detail){
        $query = " INSERT INTO tbl_order_detail(orderNumber, productId, productQuantity, name, email, phone, city, district, ward, address) VALUES (
            '" . $data_order_detail['orderNumber'] . "',
            '" . $data_order_detail['productId'] . "',
            '" . $data_order_detail['productQuantity'] . "',
            '" . $data_order_detail['name'] . "',
            '" . $data_order_detail['email'] . "',
            '" . $data_order_detail['phone'] . "',
            '" . $data_order_detail['city'] . "',
            '" . $data_order_detail['district'] . "',
            '" . $data_order_detail['ward'] . "',
            '" . $data_order_detail['address'] . "')";
        return $this->db->insert($query);
    }
    public function getInformation($orderNumber){
        $query = " SELECT ord.name, ord.phone, ord.email, ord.address, ord.ward, ord.district, ord.city FROM tbl_order_detail ord INNER JOIN tbl_order ords ON ords.orderNumber = ord.orderNumber WHERE ord.orderNumber = '$orderNumber'";
        return $this->db->select($query);
    }
    public function getProduct($orderNumber){
        $query = " SELECT * FROM tbl_product pro INNER JOIN  tbl_order_detail ord ON pro.productId = ord.productId WHERE ord.orderNumber = '$orderNumber'";
        return $this->db->select($query);
    }
    public function selectOrder($start,$product_per_page){
        $query = " SELECT * FROM tbl_order ORDER BY orderId DESC LIMIT $start,$product_per_page";
        return $this->db->select($query);
    }
    public function getTotalOrder(){
        $query = " SELECT * FROM tbl_order ";
        return $this->db->select($query);
    }
    public function getOrderById($orderNumber){
        $query = " SELECT * FROM tbl_order_detail, tbl_product WHERE tbl_product.productId = tbl_order_detail.productId AND  tbl_order_detail.orderNumber = '$orderNumber'";
        return $this->db->select($query);
    }
    public function getInfoById($orderNumber){
        $query = " SELECT * FROM tbl_order_detail WHERE tbl_order_detail.orderNumber = '$orderNumber' LIMIT 1";
        return $this->db->select($query);
    }
    public function orderConfirm($orderNumber, $order_status){
        $query = " UPDATE tbl_order SET orderStatus = '$order_status' WHERE orderNumber = '$orderNumber'";
        return $this->db->update($query);
    }
    public function getOrderStatus($orderNumber){
        $query = " SELECT orderStatus FROM tbl_order WHERE orderNumber = '$orderNumber'";
        return $this->db->select($query);
    }
    public function getInfoUser($id){
        $query = " SELECT * FROM tbl_customer WHERE customer_id = '$id' LIMIT 1";
        return $this->db->select($query);
    }
}

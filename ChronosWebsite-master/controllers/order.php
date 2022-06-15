<?php
class order extends Dcontroller{

    public function __construct(){
        session::check();
        $data = array();
        parent::__construct();
    }
    public function index(){
        $this->order();
    }

    public function order(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }
        $product_per_page = 10;
        $start = ($page-1) * $product_per_page;
        $data = [
            'product_per_page' => $product_per_page,
            'page' => $page
        ];
        $order_model = $this->load->model('ordermodel');
        $data['all_order'] = $order_model->selectOrder($start,$product_per_page);
        $data['total_order'] = $order_model->getTotalOrder();
        $this->load->view('admin/listorder', $data);
    }
    public function orderDetail($orderNumber){
        $order_model = $this->load->model('ordermodel');
        $data['order_number'] = $orderNumber;
        $data['order_status'] = $order_model->getOrderStatus($orderNumber);
        $data['order_detail'] = $order_model->getOrderById($orderNumber);
        if($data['order_detail'] == false){
            return $this->load->view('404');
        }
        $data['order_info'] = $order_model->getInfoById($orderNumber);
        $this->load->view('admin/orderdetail', $data);
    }
    public function orderConfirm($orderNumber){
        if(isset($_POST['confirm_order'])){
        $order_model = $this->load->model('ordermodel');
        $order_status = 1;
        $result = $order_model->orderConfirm($orderNumber, $order_status);

        if($result){
            $mess['mess'] = "Order confirmation successful";
            header('Location:'.BASE_URL."/order?mess=".serialize($mess));
        }
        else{
            $mess['mess'] = "Order confirmation failed";
            header('Location:'.BASE_URL."/order?mess=".serialize($mess));
        }
    }
    else if(isset($_POST['back'])){
        header('Location:'.BASE_URL."/order");
    }
}
}

?>
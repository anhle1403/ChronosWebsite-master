<?php
class payment extends Dcontroller{

    public function __construct(){
        session::init();
        $data = array();
        parent::__construct();
    }
    public function index(){
        $this->proceedPayment();
    }

    public function proceedPayment(){
        if(!isset($_POST['payment_method'])){
            return $this->load->view('404');
        }
        if(empty($_POST['payment_proceed']) || empty($_POST['payment_number'])){
            return $this->load->view('404');
        }
        $payment_proceed = $_POST['payment_proceed'];
        $payment_number = $_POST['payment_number'];

        $payment_model = $this->load->model('paymentmodel');
        $payment_model->insertPaymentMethod($payment_number,$payment_proceed);
        $data['product_order'] = $payment_model->productOrder($payment_number);
        $data['shipping_order'] = $payment_model->shippingOrder($payment_number);
        $this->load->view('confirm', $data);
    }

}

?>
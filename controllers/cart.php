<?php
class cart extends Dcontroller{

    private $valid;
    public function __construct(){
        $data = array();
        $mess = array();
        $this->valid = new validate();
        parent::__construct();
    }
    public function index(){
        $this->viewcart();
    }

    public function viewcart(){
        session::init();
        if(session::get('customer') == true){
            $id = session::get('customer_id');
                $order_model = $this->load->model('ordermodel');
                $data['info_user'] = $order_model->getInfoUser($id);
                $this->load->view('cart', $data);
            
        }
        else{
        $this->load->view('cart');
        }
    }
    public function addToCart(){
        session::init();
        if(isset($_SESSION["existProduct"])){
            $i = 0;
            foreach($_SESSION["existProduct"] as $key => $value){
                if($_SESSION["existProduct"][$key]['productId'] == $_POST['productId']){
                    $i++;
                    $_SESSION["existProduct"][$key]['productQuantity'] = $_POST['productQuantity'] + $_SESSION["existProduct"][$key]['productQuantity'];
                }
            } 

            if($i == 0){
                $item = array(
                    'productId' => $_POST["productId"],
                    'productName' => $_POST["productName"],
                    'productPrice' => $_POST["productPrice"],
                    'productMovement' => $_POST["productMovement"],
                    'productStrap' => $_POST["productStrap"],
                    'productSize' => $_POST["productSize"],
                    'productImage' => $_POST["productImage"],
                    'productQuantity' => $_POST["productQuantity"]
                );
                $_SESSION["existProduct"][] = $item;
            }
        } 
        else{
            $item = array(
                'productId' => $_POST["productId"],
                'productName' => $_POST["productName"],
                'productPrice' => $_POST["productPrice"],
                'productMovement' => $_POST["productMovement"],
                'productStrap' => $_POST["productStrap"],
                'productSize' => $_POST["productSize"],
                'productImage' => $_POST["productImage"],
                'productQuantity' => $_POST["productQuantity"]
            );
            $_SESSION["existProduct"][] = $item;
        }
        if(isset($_POST["buynow"])){
            header("Location:" .BASE_URL. '/cart');
        }
        else if(isset($_POST["addtocart"])){
            $id['product_id'] = $_POST["productId"];
            header("Location:" .BASE_URL. '/products/productDetail/'.$id['product_id']);
        }
        
    }
    public function updateCart(){
        session::init();
        if(isset($_POST['delete_product'])){
            if(isset($_SESSION["existProduct"])){
                foreach($_SESSION["existProduct"] as $key => $value){
                    if($_SESSION["existProduct"][$key]['productId'] == $_POST['delete_product']){
                        unset($_SESSION["existProduct"][$key]);
                    }
                }
                header("Location:".BASE_URL. '/cart');
            }
            else{
                header("Location:".BASE_URL. '/index');
            }
        }
        else {
            foreach($_POST['product_quantity'] as $productbyId => $new_quantity) {
            foreach($_SESSION["existProduct"] as $key => $value){
                if($value['productId'] == $productbyId && $new_quantity >= 1){
                    $_SESSION["existProduct"][$key]['productQuantity'] = $new_quantity;
                }
                else if(($value['productId'] == $productbyId) && $new_quantity <= 0)
                {
                    unset($_SESSION["existProduct"][$key]);
                }
                
                
            }
            header("Location:".BASE_URL. '/cart');
        }}

    }
    public function orderProduct(){
        session::init();
        if(isset($_POST['order_now'])){
            $order_model = $this->load->model('ordermodel');

            if(session::get('customer') == true){
                $id = session::get('customer_id');
                $data['info_user'] = $order_model->getInfoUser($id);
            }
            if(session::get('customer') == false){
                header("Location:" . BASE_URL . "/user/signin");
            }

        if(empty($_SESSION["existProduct"])){
            $data['error_message'] = "Product does not exist, please add product to cart";
            return  $this->load->view('cart', $data); 
        } 
        $name = $this->valid->validation($_POST['name']);
        $email = $this->valid->validation($_POST['email']);
        $phone = $this->valid->validation($_POST['phone']);
        $city = $_POST['city'];
        $district = $_POST['district'];
        $ward = $_POST['ward'];
        $address = $this->valid->validation($_POST['address']);
        $orderNumber = strtoupper(substr(md5(rand()), 0, 15));
        $orderStatus = 0;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $orderDate = date('H:i:s') . ' ' . date('Y-m-d');
        $total_price = 0;


        if(session::get("existProduct") == true){
            foreach(session::get("existProduct") as $key => $value){
                $productId = $value['productId'];
                $productQuantity = $value['productQuantity'];
                $productPrice = $value['productPrice'];
                $total_price += $productPrice * $productQuantity;
                $data_order_detail = [
                    'orderNumber' => $orderNumber,
                    'productId' => $productId,
                    'productQuantity' => $productQuantity,
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'city' => $city,
                    'district' => $district,
                    'ward' => $ward,
                    'address' => $address
                ];
                if (method::checkEmptyValue($data_order_detail)){
                    $data['error_message'] = "The information you entered is missing, please fill it in completely";
                    return  $this->load->view('cart', $data); 
                }
                if(method::validateEmail($email)){
                    $data['error_message'] = "Invalid email, please re-enter";
                    return  $this->load->view('cart', $data); 
                }
                if(method::validatePhone($phone)){
                    $data['error_message'] = "Invalid phone, please re-enter";
                    return  $this->load->view('cart', $data); 
                }
                $order_model->inserOrderDetail($data_order_detail);
            }
            unset($_SESSION["existProduct"]);
        }
        $grand_total = $total_price + 100;
        $data = [
            'total_price' => $total_price,
            'orderNumber' => $orderNumber,
            'grand_total' => $grand_total
        ];
        $order_model->insertOrder($orderNumber, $orderStatus, $orderDate, $grand_total);
        $data['get_information'] = $order_model->getInformation($orderNumber);
        $data['get_product'] = $order_model->getProduct($orderNumber);
        $this->load->view('payment', $data);
    }
    else{
        $this->load->view('cart');
    }
    }
}

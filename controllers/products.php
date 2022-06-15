<?php
class products extends Dcontroller{

    public function __construct(){
        session::init();
        $data = array();
        parent::__construct();
    }
    public function index(){
        $this->viewproduct();
    }

    public function viewproduct(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }
        $product_per_page = 15;
        $start = ($page-1) * $product_per_page;
        $data = [
            'product_per_page' => $product_per_page,
            'page' => $page
        ];
        $show_product = $this->load->model('productsmodel');
        $data['get_product'] = $show_product->showProducts($start,$product_per_page);
        $data['total_product'] = $show_product->getTotalProduct();
        $this->load->view('product', $data);
    }
    public function productDetail($id){
        $detail_product = $this->load->model('productsmodel');
        $data['detail_product'] = $detail_product->detailProducts($id);
        if($data['detail_product'] == false){
            return $this->load->view('404');
        }
        $data['related_product'] = $detail_product->relatedProducts($id);
        $this->load->view('detail', $data);
    }

}

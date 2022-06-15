<?php
class search extends Dcontroller{
    private $avoid;
    public function __construct(){
        session::init();
        $data = array();
        $this->avoid = new validate();
        parent::__construct();
    }
    public function index(){
        $this->search();
    }
    public function search(){
        $this->load->view('search');
    }
    public function viewsearch(){
        if(isset($_GET['search_result'])){
            $result_product = $this->avoid->avoidXss($_GET['search_result']);
        }

        $searchmodel = $this->load->model('searchmodel');
        $data['result'] = $result_product;
        $data['resultProductBySearch'] = $searchmodel->getProductBySearch($result_product);
        $data['suggestionProduct'] = $searchmodel->suggestionProducts($result_product);
        $this->load->view('search', $data);
    }



}

?>
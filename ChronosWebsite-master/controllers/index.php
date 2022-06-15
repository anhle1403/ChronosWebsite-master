<?php
class index extends Dcontroller{

    public function __construct(){
        session::init();
        $data = array();
        parent::__construct();
    }
    public function index(){
        $this->homepage();
    }

    public function homepage(){
        
        $this->load->view('index');
    }
    public function notfound(){
        $this->load->view('404');
    }

}

?>
<?php
class admin extends Dcontroller
{
    private $valid;
    public function __construct()
    {
        $data = array();
        $this->valid = new validate();
        parent::__construct();
    }
    public function index()
    {

        $this->login();
    }

    public function login()
    {
        session::init();
        if(session::get('login') == true){
            header("Location:" . BASE_URL . "/product");
        }

        else if(!isset($_POST['submit'])){
            $data['error_message'] = "";
            return  $this->load->view('admin/login', $data); 
    }

        else {

        $user_admin = $this->valid->validation($_POST['userAdmin']);
        $pass_admin = $this->valid->validation(md5($_POST['passAdmin']));

        if(empty($user_admin) || empty($pass_admin)){
            $data['error_message'] = "Please do not leave your account or password blank";
            return  $this->load->view('admin/login', $data); 
        }
        if(method::validateName($user_admin)){
            $data['error_message'] = "Invalid username";
            return  $this->load->view('admin/login', $data); 
        }
        if(method::validatePassword($pass_admin)){
            $data['error_message'] = "Invalid password";
            return  $this->load->view('admin/login', $data); 
        }

        $admin_model = $this->load->model('adminmodel');
        $login = $admin_model->login($user_admin, $pass_admin);
        if ($login != false) {
            $result = $admin_model->getLogin($user_admin, $pass_admin);
            $value = $result->fetch_assoc();
            session::init();
            session::set('login', true);
            session::set('adminId', $value['adminId']);
            session::set('adminUser', $value['adminUser']);
            session::set('adminName', $value['adminName']);

            header("Location:" . BASE_URL . "/product");
        } else {
            $data['error_message'] = "Wrong account or password";
            $this->load->view('admin/login', $data);
        }   
        }
    }

    public function logoutAdmin()
    {
        session::init();
        session::destroy();
        header("Location:" . BASE_URL . "/admin");
    }
}

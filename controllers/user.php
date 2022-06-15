<?php
class user extends Dcontroller
{
    private $valid;
    public function __construct()
    {
        session::init();
        $data = array();
        $this->valid = new validate();
        parent::__construct();
    }
    public function index()
    {
        $this->signin();
    }
    public function signin()
    {
        if (session::get('customer') == true) {
            header("Location:" . BASE_URL . "/index");
        }
        if (isset($_POST['submit'])) {

            $email = $this->valid->validation($_POST['email']);
            $password = $this->valid->validation(md5($_POST['password']));


            if (empty($email) || empty($password)) {
                $data['error_message'] = "The information you entered is missing, please fill it in completely";
                return $this->load->view('user/signin', $data);
            }
            if (method::validateEmail($email)) { // kiểm tra email
                $data['error_message'] = 'Invalid email';
                return $this->load->view('user/signin', $data);
            }
            if (method::validatePassUser($_POST['password'])) { // kiểm tra password
                $data['error_message'] = 'Password must be at least 8 characters or more, including 1 uppercase letter, one lowercase letter and one number';
                return $this->load->view('user/signin', $data);
            }
            if (isset($_POST['remember'])) {
                setcookie('email', $email, time() + 36000);
                setcookie('password', $_POST['password'], time() + 36000);
            }
            if (!isset($_POST['remember'])) {
                setcookie('email', $email, time() - 36000);
                setcookie('password', $_POST['password'], time() - 36000);
            }
            $customer_model = $this->load->model('customermodel');
            $result = $customer_model->getloginUser($email, $password);
            if ($result != false) {
                $login_user = $customer_model->loginUser($email, $password);
                $value = $login_user->fetch_assoc();
                session::init();
                session::set('customer', true);
                session::set('customer_id', $value['customer_id']);
                session::set('customer_name', $value['customer_name']);
                session::set('customer_phone', $value['customer_phone']);
                session::set('customer_email', $value['customer_email']);

                header("Location:" . BASE_URL . "/index");
            } else {
                $data['error_message'] = "Your email address or password is incorrect. Please try again or reset your password ..";
                return $this->load->view('user/signin', $data);
            }
        }
        $this->load->view('user/signin');
    }
    public function signup()
    {
        if (isset($_POST['submit'])) {
            $data['register']['fullname'] = $this->valid->validation($_POST['fullname']);
            $data['register']['email'] = $this->valid->validation($_POST['email']);
            $data['register']['phone'] = $this->valid->validation($_POST['phone']);
            $data['register']['ward'] = $_POST['ward'];
            $data['register']['district'] = $_POST['district'];
            $data['register']['city'] = $_POST['city'];
            $data['register']['address'] = $this->valid->validation($_POST['address']);
            $data['register']['password'] = $this->valid->validation(md5($_POST['password']));
            $confirm = isset($_POST['confirm']);

            if (method::checkEmptyValue($data['register'])) { // kiểm tra xem input có trống ko
                $data['error_message'] = 'The information you entered is missing, please fill it in completely';
                return $this->load->view('user/signup', $data);
            }
            if (empty($confirm)) { // kiểm tra xem người dùng có chọn checkbox hay ko
                $data['error_message'] = 'Tick the box, please!';
                return $this->load->view('user/signup', $data);
            }
            if (method::validateEmail($data['register']['email'])) { // kiểm tra email
                $data['error_message'] = 'Invalid email, please re-enter';
                return $this->load->view('user/signup', $data);
            }
            if (method::validatePhone($data['register']['phone'])) { // kiểm tra phone
                $data['error_message'] = 'Invalid phone, please re-enter';
                return $this->load->view('user/signup', $data);
            }
            if (method::validatePassUser($_POST['password'])) { // kiểm tra password
                $data['error_message'] = 'Password must be at least 8 characters or more, including 1 uppercase letter, one lowercase letter and one number';
                return $this->load->view('user/signup', $data);
            }
            $customer_model = $this->load->model('customermodel');
            $getEmail = $customer_model->getEmail($data['register']['email']);

            if (!empty($getEmail)) {
                $data['error_message'] = 'Email already exists, please re-enter';
                return $this->load->view('user/signup', $data);
            }

            $result = $customer_model->insertCustomer($data['register']);
            if ($result) {
                $data['success_message'] = "Register successfully!";
                return $this->load->view('user/signup', $data);
            } else {
                $data['error_message'] = "Register failed";
                return $this->load->view('user/signup', $data);
            }
        }
        $this->load->view('user/signup');
    }
    public function logout()
    {
        session::init();
        session::destroy();
        header("Location:" . BASE_URL . "/user/signin");
    }
    
    public function getAccountById($id)
    {
        if (session::get('customer') == false) {
            header("Location:" . BASE_URL . "/user/signin");
        }

        $customer_model = $this->load->model('customermodel');
        $data['getAccountById'] = $customer_model->getAccountById($id);

        if ($data['getAccountById'] == false) {
            return $this->load->view('404');
        }
        if (isset($_POST['submit'])) {
            $data['update']['fullname'] = $this->valid->validation($_POST['fullname']);
            $data['update']['email'] = $this->valid->validation($_POST['email']);
            $data['update']['phone'] = $this->valid->validation($_POST['phone']);
            $data['update']['ward'] = $_POST['ward'];
            $data['update']['district'] = $_POST['district'];
            $data['update']['city'] = $_POST['city'];
            $data['update']['address'] = $this->valid->validation($_POST['address']);
            $password = $this->valid->validation(md5($_POST['password']));

            if (method::checkEmptyValue($data['update'])) { // kiểm tra xem input có trống ko
                $data['error_message'] = 'The information you entered is missing, please fill it in completely';
                return $this->load->view('user/account', $data);
            }
            if (method::validateEmail($data['update']['email'])) { // kiểm tra email
                $data['error_message'] = 'Invalid email, please re-enter';
                return $this->load->view('user/account', $data);
            }
            if (method::validatePhone($data['update']['phone'])) { // kiểm tra phone
                $data['error_message'] = 'Invalid phone, please re-enter';
                return $this->load->view('user/account', $data);
            }
            if (!empty($_POST['password'])) {
                if (method::validatePassUser($_POST['password'])) { // kiểm tra password
                    $data['error_message'] = 'Password must be at least 8 characters or more, including 1 uppercase letter, one lowercase letter and one number';
                    return $this->load->view('user/account', $data);
                }
            }


            if (!empty($_POST['password'])) {
                $update_customer = $customer_model->updateCustomerAndPass($data['update'], $id, $password);
            } else {
                $update_customer = $customer_model->updateCustomer($data['update'], $id);
            }

            if ($update_customer) {
                $data['getAccountById'] = $customer_model->getAccountById($id);
                $data['error_message'] = "Update success";
                return $this->load->view('user/account', $data);
            } else {
                $data['error_message'] = "Update failed";
                return $this->load->view('user/account', $data);
            }
        }
        $this->load->view('user/account', $data);
    }
    public function forgotpassword()
    {
        $this->load->view('user/forgotpassword');
    }
}

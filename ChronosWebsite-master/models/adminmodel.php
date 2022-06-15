
<?php
 
class adminmodel {
    private $db = array();
    public function __construct() {
        $this->db = new Database();
    }
    public function login($user_admin, $pass_admin){
        $query = "SELECT * FROM tbl_admin  WHERE adminUser = '$user_admin' AND adminPass = '$pass_admin' LIMIT 1";
        return $this->db->select($query);
    }

    public function getLogin($user_admin, $pass_admin){
        $query = "SELECT * FROM tbl_admin  WHERE adminUser = '$user_admin' AND adminPass = '$pass_admin' LIMIT 1";
        return $this->db->select($query);
    }

}
?> 
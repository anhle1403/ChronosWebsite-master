<?php

class validate{
 
 public function validation($data){ //w3schools
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
 public function avoidXss($data) // format tránh XSS
 {
     $data = trim($data);
     $data = strip_tags($data);
     $data = addslashes($data);
     return $data;
 }
 public function is_valid_email($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
 }

}
 
?>

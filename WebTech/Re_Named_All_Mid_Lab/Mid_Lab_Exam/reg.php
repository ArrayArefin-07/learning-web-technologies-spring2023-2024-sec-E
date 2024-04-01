<?php

require_once('registrationCheck.php');

if(isset($_REQUEST['submit'])){

   $error_message = '';
   $success_message = '';
   $first_name = $_REQUEST['first_name'];
   $email = $_REQUEST['email'];
   $lastname = $_REQUEST['lastname'];
   $password = $_REQUEST['password'];
   $c_password = $_REQUEST['c_password'];

   if(isset($_REQUEST['gender'])){
       $gender = $_REQUEST['gender'];
   }else{
       $gender = '';
   }

   $date_of_birth = $_REQUEST['date_of_birth'];

   if($first_name == ''){
       $error_message .= "You have to fill First Name.! <br>";
   }elseif (firstname_validation($first_name) === false) {
       $error_message .= "Your Name Format Invalid.! <br>";
   }
   if($lastname == ''){
    $error_message .= "You have to fill last Name! <br>";
}elseif (lastname_validation($lastname) === false) {
    $error_message .= "Your last Name Format Invalid.! <br>";
}
   if($email == ''){
       $error_message .= "You must have to fill Email! <br>";
   }elseif (email_validation($email) === false) {
       $error_message .= "Your Email Format Invalid.! <br>";
   }
  
   if($password == ''){
       $error_message .= "You must have to fill Password! <br>";
   }elseif (password_validation($password) === false) {
       $error_message .= "Your Password Format Wrong ! <br>";
   }elseif ($c_password !== $password) {
       $error_message .= "Your Password Doesn't Match! <br>";
   }
   if($gender == ''){
       $error_message .= "Your must have to fill your Gender! <br>";
   }
   if ($date_of_birth == '') {
       $error_message .= "You must have to fill your Date of Birth! <br>";
   }
}
?>
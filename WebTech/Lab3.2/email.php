<?php
$email = trim($_REQUEST['email']);

if ($email == "") {
    echo "Email Cannot be empty";
} else{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "$email is a valid Email";
    }else{
        echo "$email is not Valid";
    }
}
?>
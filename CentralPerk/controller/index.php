<?php
require('../model/database.php');
require('../model/account_db.php');

//form value is 'action'
$action = filter_input(INPUT_POST, 'action');

if($action == 'register') {
    $fName = filter_input(INPUT_POST, 'fName');
    $lName = filter_input(INPUT_POST, 'lName');
    $zip = filter_input(INPUT_POST, 'zip', FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');

//check if email already exists
if (existing_email($email)->rowCount() >= 1) {
    $error_message = "Email already exists. Please Enter a Different Email";
    $email = '';
    include('register.php');
}
else {
    add_user($fName, $lName, $zip, $email);
    add_account($email, $password);
    header('Location: ../index.php');
}

}

?>
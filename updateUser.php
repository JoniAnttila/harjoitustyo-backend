<?php
require_once 'inc/functions.php';
require_once 'inc/headers.php';

$input = json_decode(file_get_contents('php://input'));
$id = filter_var($input->id,FILTER_SANITIZE_STRING);
$fname = filter_var($input->fname,FILTER_SANITIZE_STRING);
$lname = filter_var($input->lname,FILTER_SANITIZE_STRING);
$email = filter_var($input->email,FILTER_SANITIZE_STRING);
$getPassword = filter_var($input->password,FILTER_SANITIZE_STRING);
$password = password_hash($getPassword,PASSWORD_DEFAULT);

try{
    $db=opendb(); 

    $sql = "Update user SET fname = $fname, lname = $lname, email = $email, password = $password where id = $id";

    jsonFactory($db, $sql); 

} catch (PDOException $pdoex) {
    returnError($pdoex);  
}
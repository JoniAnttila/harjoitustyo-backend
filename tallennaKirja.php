<?php
require_once 'inc/functions.php';
require_once 'inc/headers.php';

$input = json_decode(file_get_contents('php://input'));
$nimi = filter_var($input->nimi,FILTER_SANITIZE_STRING);
$hinta = filter_var($input->hinta,FILTER_SANITIZE_STRING);
$kuvaus = filter_var($input->kuvaus,FILTER_SANITIZE_STRING);

try {
    $db = openDb();
    $query = $db->prepare("insert into kirja(description, amount) values (:description, :amount)");
    
    $query->execute();

    header('HTTP/1.1 200 OK');
    $data = array('id' => $db->lastInsertID(),'description' => $description, 'amount' => $amount);
    echo json_encode($data);
} 
catch (PDOException $pdoex) {
    returnError($pdoex);
}
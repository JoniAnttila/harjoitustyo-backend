<?php
require_once 'inc/functions.php';
require_once 'inc/headers.php';

$input = json_decode(file_get_contents('php://input'));
$nimi = filter_var($input->nimi,FILTER_SANITIZE_STRING);
$hinta = filter_var($input->hinta,FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$kuvaus = filter_var($input->kuvaus,FILTER_SANITIZE_STRING);

try{
    $db=opendb(); 

    $sql = "insert into kirja(kirjaNimi, hinta, kuvaus)
    values ('$nimi', '$hinta', '$kuvaus')";

    jsonFactory($db, $sql);
} catch (PDOException $pdoex) {
    returnError($pdoex);  
}
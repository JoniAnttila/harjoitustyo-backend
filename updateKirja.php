<?php
require_once 'inc/functions.php';
require_once 'inc/headers.php';

$input = json_decode(file_get_contents('php://input'));
$id = filter_var($input->id,FILTER_SANITIZE_NUMBER_INT);
$nimi = filter_var($input->nimi,FILTER_SANITIZE_STRING);
$hinta = filter_var($input->hinta,FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$kuvaus = filter_var($input->kuvaus,FILTER_SANITIZE_STRING);

try {
    $db = openDb();
    $query = $db->prepare('UPDATE kirja SET kirjaNimi = :nimi, hinta = :hinta, kuvaus = :kuvaus WHERE kirjaNro=(:id)');
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->bindValue(':nimi',$nimi,PDO::PARAM_STR);
    $query->bindValue(':hinta',$hinta,PDO::PARAM_STR);
    $query->bindValue(':kuvaus',$kuvaus,PDO::PARAM_STR);
    $query->execute();

    header('HTTP/1.1 200 OK');
    $data = array('id' => $id);
    echo json_encode($data);
} 
catch (PDOException $pdoex) {
    returnError($pdoex);
}
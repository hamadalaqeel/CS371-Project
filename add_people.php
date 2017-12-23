<?php

include 'include/dbconfig.php';

$id = $_POST["id"];
$email = $_POST["email"];
$name= $_POST["name"];
$position = $_POST["position"];
$image = $_POST["image"];
$response_code = '-1';

$sql = "INSERT INTO committees (id,email,name,position,image) VALUES ('$id','$email','$name','$position','$image');";
$result = $conn->query($sql);


if ($result === TRUE) {
    $response_code = "1";
} else {
    $response_code = "0";
}



header('Content-Type: text/xml');
echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');
echo ('<response>');
echo '<code>' . $response_code . '</code>';
echo '<id>' . $id . '</id>';
echo '<email>' . $email . '</email>';
echo '<name>' . $lastname . '</name>';
echo '<position>' . $role . '</position>';
echo '<image>' . $birthdate . '</image>';
echo ('</response>');
?>

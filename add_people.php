<?php

include 'include/dbconfig.php';

$email = $_POST["email"];
$id = $_POST["id"];
$name = $_POST["name"];
$position = $_POST["position"];
$image = $_POST["image"];
$response_code = '-1';

$sql = "INSERT INTO committees (email,id,name,position,image) VALUES ('$email','$id','$name','$position','$image');";
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
echo '<email>' . $email . '</email>';
echo '<id>' . $id . '</id>';
echo '<name>' . $name . '</name>';
echo '<position>' . $position . '</poition>';
echo '<image>' . $image . '</image>';
echo ('</response>');
?>

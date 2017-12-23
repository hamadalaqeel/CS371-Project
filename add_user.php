<?php

include 'include/dbconfig.php';

$email = $_POST["email"];
$password = $_POST["password"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$role = $_POST["role"];
$birthdate = $_POST["birthdate"];
$joindate = date();
$address = $_POST["address"];
$mobile = $_POST["mobile"];
$city = $_POST["city"];
$country = $_POST["country"];
$personalhomepage = $_POST["personalhomepage"];
$response_code = '-1';

$sql = "INSERT INTO users (email,password,first_name,last_name,role, birth_date,join_date,address,mobile,city,counrty,personal_home_page) VALUES ('$email','$password','$firstname','$lastname','$role','$birthdate','$joindate','$address',$mobile,'$city','$country','$personalhomepage');";
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
echo '<password>' . $password . '</password>';
echo '<firstname>' . $firstname . '</firstname>';
echo '<lastname>' . $lastname . '</lastname>';
echo '<role>' . $role . '</role>';
echo '<birthdate>' . $birthdate . '</birthdate>';
echo '<mobile>' . $mobile . '</mobile>';
echo '<city>' . $city . '</city>';
echo '<country>' . $country . '</country>';
echo '<personalhomepage>' . $personalhomepage . '</personalhomepage>';
echo ('</response>');
?>

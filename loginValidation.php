<?php

$email = $_POST['email'];

if (isset($_POST['email'])) {
    header('Content-Type: text/xml');
    echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');
    echo ('<response>');


    include 'include/dbconfig.php';

    $sql = "SELECT * FROM users WHERE email='$email'";

    $result = $conn->query($sql);

    $row = $result->num_rows;


    if ($row == 1) {
        echo '<type> ' . $email . ' </type>';
        echo '<message>* ' . $email . ' is registered in our database, please change the email </message>';
        echo '<code>1</code>';
    } else {
        echo '<type> UserName </type>';
        echo '<message>*' . $email . ' is available </message>';
        echo '<code>2</code>';
    }

    echo ('</response>');
}
?>
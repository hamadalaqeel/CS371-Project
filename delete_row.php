<?php
//getting the email of the user.
if (isset($_GET['email'])) {
    $email = $_GET['email'];

//Setting up the database and deleting the user from the database.
include 'include/dbconfig.php';
$conn->query("SET NAMES utf8");
$sql = "DELETE FROM users WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error deleting record: " . $conn->error;
}
}
else if(isset($_GET['id'])){
     $id = $_GET['id'];

//Setting up the database and deleting the user from the database.
include 'include/dbconfig.php';
$conn->query("SET NAMES utf8");
$sql = "DELETE FROM news WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error deleting record: " . $conn->error;
}
    
}
else if(isset($_GET['name_of_conf'])){
     $id = $_GET['name_of_conf'];

//Setting up the database and deleting the user from the database.
include 'include/dbconfig.php';
$conn->query("SET NAMES utf8");
$sql = "DELETE FROM conference WHERE name_of_conf='$id'";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error deleting record: " . $conn->error;
}
    
}
?>
      


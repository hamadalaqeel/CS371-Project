<?php
//getting the email of the user.
if (isset($_GET['id'])) {
    $id = $_GET['id'];

//Setting up the database and deleting the user from the database.
include 'include/dbconfig.php';
$conn->query("SET NAMES utf8");
$sql = "DELETE FROM committees WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error deleting record: " . $conn->error;
}
    
}
?>
      
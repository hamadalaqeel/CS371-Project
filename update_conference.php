<?php

if (isset($_POST['name_of_conf'])) {

    //getting the email of the user.
    if (isset($_POST['column'])) {
        $column = $_POST['column'];
    }

    if (isset($_POST['editval'])) {
        $editval = $_POST['editval'];
    }

    if (isset($_POST['name_of_conf'])) {
        $name_of_conf = $_POST['name_of_conf'];
    }

    //Setting up the database and deleting the user from the database.
    include 'include/dbconfig.php';
    //    $conn->query("SET NAMES utf8");
    $sql = "UPDATE `conference` SET `$column` = '$editval' WHERE `conference`.`name_of_conf` = '$name_of_conf'";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success">
  <strong>Success!</strong> The conference  "' . $name_of_conf . '" edited ? successfully.
                         </div>';
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else if (isset($_POST['name_of_conf'])) {
    
    if (isset($_POST['column'])) {
        $column = $_POST['column'];
    }

    if (isset($_POST['editval'])) {
        $editval = $_POST['editval'];
    }

    if (isset($_POST['name_of_conf'])) {
        $name_of_conf = $_POST['name_of_conf'];
    }

    //Setting up the database and deleting the user from the database.
    include 'include/dbconfig.php';
    //    $conn->query("SET NAMES utf8");
    $sql = "UPDATE `conference` SET `$column` = '$editval' WHERE `conference`.`name_of_conf` = '$name_of_conf'";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success">
  <strong>Success!</strong> The conference "' . $name_of_conf . '" edited ? successfully.
                         </div>';
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

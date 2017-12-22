<?php

/*

DELETE.PHP

Deletes a specific entry from the 'people' table

*/



// connect to the database

include 'include/dbconfig.php';



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// get id value

$id = $_GET['id'];



// delete the entry
$sql = "DELETE FROM committees WHERE id=$id";

$result = $conn->query($sql);



// redirect back to the view page

header("Location: people_table.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: people_table.php");

}



?>

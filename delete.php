<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database

include('include/dbconfig.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['title']) && is_numeric($_GET['title']))

{

// get id value

$title = $_GET['title'];



// delete the entry

$result = mysql_query("DELETE FROM news WHERE title=$title")

or die(mysql_error());



// redirect back to the view page

header("Location: view.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: view.php");

}



?>

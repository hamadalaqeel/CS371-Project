<?php
// connect to the database
include('include/dbconfig.php');

if (isset($_GET['name_of_conf']) )
{

$name_of_conf = $_GET['name_of_conf'];

// delete the entry
$sql = "DELETE FROM conference WHERE name_of_conf=$name_of_conf";
echo $sql;
$result = $conn->query($sql);

// redirect back to the view page


}

else

// if id isn't set, or isn't valid, redirect back to view page

{



}



?>
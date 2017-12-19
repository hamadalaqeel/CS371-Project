<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACM Admin - Users</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="CSS1//custom.css">
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 
      <?php
      
      //The NAVBAR 
      include 'navbar.php';

// connect to the database

// get results from database
    $sql= "SELECT * FROM users";

    $result = $conn->query($sql);





// Display data in table.

/* A user has:
 * 1- Email 
 * 2- Password 
 * 3- First name 
 * 4- Last name 
 * 5- Role 
 * 6- Birth day
 * 7- Join date 
 * 8- Address 
 * 9- Mobile 
 * 10- City 
 * 11- Personal home page
 */

echo "<div class='container'>";
echo '<br>';
echo "<h3 style='text-align:center'>Registered Users:</h3>";  
echo'<p><a href="news_single.php?<?PHP echo $feed;?>" class="btn btn-info pull-right" '
. ' align="middle">Add User</a></p>';
echo "<table class='table table-bordered'>";


//MetaData
echo "<br>";
echo "<br>";
echo "<tr> "
. "<th>Email</th>"
. "<th>Password</th>"
. "<th>First Name</th>"
. "<th>Last name</th>"
. "<th>Role</th>"
. "<th>Birthdate</th>"
. "<th>Address</th>"
. "<th>Mobile</th>"
. "<th>City</th>"
. "<th>Country</th>"             
. "<th>Personal Home Page</th> <th></th> <th></th></tr>";



// Loop through results of database query, displaying them in the table

while($row =  $result->fetch_assoc()) {



// Echo out the contents of each row into a table

echo "<tr>";
//Echo The information of each user.
echo '<td>' . $row['email'] . '</td>';
echo '<td>' . $row['password'] . '</td>';
echo '<td>' . $row['first_name'] . '</td>';
echo '<td>' . $row['last_name'] . '</td>';
echo '<td>' . $row['role'] . '</td>';
echo '<td>' . $row['birth_date'] . '</td>';
echo '<td>' . $row['address'] . '</td>';
echo '<td>' . $row['mobile'] . '</td>';
echo '<td>' . $row['city'] . '</td>';
echo '<td>' . $row['counrty'] . '</td>';
echo '<td>' . $row['personal_home_page'] . '</td>';
    
//$email = $row[email];
//$sql= "DELETE * FROM users WHERE $email=row[email]";

//The ability to delete and modifiy each user.
$email = 'email='.$row['email'];
?>

<td><a href="update_users.php?id=<?php echo $row['person_id']; ?>">Edit</a></td>
<td><a href="delete_users.php?<?PHP echo $email;?>" class="btn btn-danger">Delete</a></td>

<?php
echo "</tr>";

}



// close table>

echo "</table>";
echo "</div>";    

?>



<!-- THE FOOTER -->
      <?php
      include 'footer.php';
      ?>
      <!-- THE END OF THE FOOTER -->

    <!-- END wrapper -->
   

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>

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
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script>
		function showEdit(editableObj) {
			$(editableObj).css("background","#FFF");
		} 
		
		function saveToDatabase(editableObj,column,email) {
			$(editableObj).css("background","#FFF url(img/loaderIcon.gif) no-repeat right");
			$.ajax({
				url: "update_users.php",
				type: "POST",
				data:'column='+column+'&editval='+editableObj.innerHTML+'&email='+email,
				success: function(data){
					$(editableObj).css("background","#EFF0F4");
				}        
		   });
		}
		</script>
  </head>
  <body>
 
      <?php
      
      //The NAVBAR 
      include 'navbar.php';
      
   //   $column ='email';
  //    $email ='mmm@mmm.com';
 //     $editval ='newemail.com';        

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
echo "<table class='table table-bordered'>";


//MetaData

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
. "<th>Personal Home Page</th>"
. "<th></th>"
. "<th> <a href='signup.php' class='btn btn-primary'> Add </a> </th>"
."</tr>";



// Loop through results of database query, displaying them in the table

while($row =  $result->fetch_assoc()) {



// Echo out the contents of each row into a table
    //Echo The information of each user.

?>
       <script>
      //MAKING THE CURRENT PAGE ELEMENT ACTIVE IN THE NAVBAR
      document.getElementById("users").classList.add("active");
     </script>
<tr>

<td contenteditable="true" onBlur="saveToDatabase(this,'email','<?php echo $row["email"]; ?>')" onClick="showEdit(this);"><?php echo $row["email"]; ?></td>
<td contenteditable="true" onBlur="saveToDatabase(this,'password','<?php echo $row["email"]; ?>')" onClick="showEdit(this);"><?php echo $row["password"]; ?></td>
<td contenteditable="true" onBlur="saveToDatabase(this,'first_name','<?php echo $row["email"]; ?>')" onClick="showEdit(this);"><?php echo $row["first_name"]; ?></td>
<td contenteditable="true" onBlur="saveToDatabase(this,'last_name','<?php echo $row["email"]; ?>')" onClick="showEdit(this);"><?php echo $row["last_name"]; ?></td>
<td contenteditable="true" onBlur="saveToDatabase(this,'role','<?php echo $row["email"]; ?>')" onClick="showEdit(this);"><?php echo $row["role"]; ?></td>
<td contenteditable="true" onBlur="saveToDatabase(this,'birth_date','<?php echo $row["email"]; ?>')" onClick="showEdit(this);"><?php echo $row["birth_date"]; ?></td>
<td contenteditable="true" onBlur="saveToDatabase(this,'address','<?php echo $row["email"]; ?>')" onClick="showEdit(this);"><?php echo $row["address"]; ?></td>
<td contenteditable="true" onBlur="saveToDatabase(this,'mobile','<?php echo $row["email"]; ?>')" onClick="showEdit(this);"><?php echo $row["mobile"]; ?></td>
<td contenteditable="true" onBlur="saveToDatabase(this,'city','<?php echo $row["email"]; ?>')" onClick="showEdit(this);"><?php echo $row["city"]; ?></td>
<td contenteditable="true" onBlur="saveToDatabase(this,'counrty','<?php echo $row["email"]; ?>')" onClick="showEdit(this);"><?php echo $row["counrty"]; ?></td>
<td contenteditable="true" onBlur="saveToDatabase(this,'personal_home_page','<?php echo $row["email"]; ?>')" onClick="showEdit(this);"><?php echo $row["personal_home_page"]; ?></td>


<!--

<td>' . $row['password'] . '</td>';
<td>' . $row['first_name'] . '</td>';
<td>' . $row['last_name'] . '</td>';
<td>' . $row['role'] . '</td>';
<td>' . $row['birth_date'] . '</td>';
<td>' . $row['address'] . '</td>';
<td>' . $row['mobile'] . '</td>';
<td>' . $row['city'] . '</td>';
<td>' . $row['counrty'] . '</td>';
<td>' . $row['personal_home_page'] . '</td>'; -->
<?php
    
//$email = $row[email];
//$sql= "DELETE * FROM users WHERE $email=row[email]";

//The ability to delete and modifiy each user.
$email = 'email='.$row['email'];
?>


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

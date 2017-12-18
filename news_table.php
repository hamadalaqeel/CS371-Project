<html>

<head>

<title>Edit News</title>

    
    <link type="text/css" rel="stylesheet" href="../CS371-Project/CSS1/custom.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

</head>

<body>



<?php





// connect to the database

include 'include.dbconfig.php';
include 'navbar.php';



// get results from database
    $sql= "SELECT * FROM news";

    $result = $conn->query($sql);





// display data in table



echo "<div class='container'>";
echo "<h2 style='text-align:center'>All News</h2>";    
echo "<table class='table table-bordered'>";

echo "<tr> <th>Title</th> <th>Date</th> <th></th> <th></th></tr>";



// loop through results of database query, displaying them in the table

while($row =  $result->fetch_assoc()) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['title'] . '</td>';

echo '<td>' . $row['date'] . '</td>';



echo '<td><a href="edit.php?title=' . $row['title'] . '">Edit</a></td>';

echo '<td><a href="delete.php?title=' . $row['title'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";
echo "</div>";    

?>

<p style="text-align:center;"><a href="new.php">Add news</a></p>

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

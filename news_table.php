
<html>
    <head>

        <title>Edit News</title>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../CS371-Project/CSS1/custom.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>

    <body>
        <!-- Fixed navbar -->
        <?php
        include "include/dbconfig.php";
        include "navbar.php";
        
        //get all data 
       $sql = "SELECT * FROM news";
                                    
        //echo $sql;
                                    
        $result = $conn->query($sql);
            
        
        //Create table
        echo "<div class='container'>";
        echo "<h2 style='text-align:center'> All News</h2>";
        echo "<tabel class='table'>";
        echo "<tr> <th>Title</th> <th>Short Description</th> <th>Date</th> <th></th> <th></th></tr>";
        
        //Getting data and filling it inside table
        while($row = $result->fetch_assoc()){ 
        
        echo "<tr>";
        echo '<td>'.$row['title'].'</td>';    
        echo '<td>'.$row['short_desc'].'</td>'; 
        echo '<td>'.$row['date'].'</td>'; 
        //echo '<td><a href="edit.php?title='.$row['title'].'">Edit</a></td>';  
        //echo '<td><a href="delete.php?title='.$row['title'].'">Delete</a></td>';      
        echo "</tr>";
            
        }
        echo "</table>";
        echo "</div>";
        ?>

        <p><a href="new.php"></a></p>
        
       <!-- <div class="container">
          <h2>Basic Table</h2>
          <p>The </p>            
          <table class="table">
            <thead>
              <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
              </tr>
              <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
              </tr>
            </tbody>
          </table>
        </div>
       -->

            


        <?php
        include 'footer.php';
        ?>
        <script src="js/scripts.min.js"></script>
        <script src="js/main.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="../CS371-Project/js/signup.js"></script>


    </body>
</html>

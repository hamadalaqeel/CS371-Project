      <?php 
      
             //getting the email of the user.
              if (isset($_POST['column'])){
              $column = $_POST['column']; }
              
              if (isset($_POST['editval'])){
              $editval = $_POST['editval']; }
              
              if (isset($_POST['email'])){
              $email = $_POST['email']; }
          
        //Setting up the database and deleting the user from the database.
                    include 'include/dbconfig.php';
                //    $conn->query("SET NAMES utf8");
                     $sql = "UPDATE `users` SET `$column` = '$editval' WHERE `users`.`email` = '$email'";
                   
                   if ($conn->query($sql) === TRUE) {
                    echo '<div class="alert alert-success">
  <strong>Success!</strong> The user with email "'.$email.'" was ? successfully. 
                         </div>';
                                                    } else {
                  echo "Error deleting record: " . $conn->error;
              }
      
      


?>


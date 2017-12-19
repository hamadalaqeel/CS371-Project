<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACM - News</title>
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

      <!-- The NAVBAR -->
      <?php
      include 'navbar.php';
      ?>
     <script>
      //MAKING THE CURRENT PAGE ELEMENT ACTIVE IN THE NAVBAR
     //document.getElementById("news").classList.add("active");
     </script>
      <!-- End of NAVBAR -->
      <?php 
      
             //getting the email of the user.
              if (isset($_GET['email'])){
              $email = $_GET['email']; }
          
        //Setting up the database and deleting the user from the database.
                    include 'include/dbconfig.php';
                    $conn->query("SET NAMES utf8");
                    $sql = "DELETE FROM users WHERE email='$email'";

                   if ($conn->query($sql) === TRUE) {
                    echo '<div class="alert alert-success">
  <strong>Success!</strong> The user with email "'.$email.'" was deleted successfully. 
                         </div>';
                                                    } else {
                  echo "Error deleting record: " . $conn->error;
              }
      
      



// THE FOOTER 
   
      include 'footer.php';
      ?>
      <!-- THE END OF THE FOOTER -->

    <!-- END wrapper -->
   

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>

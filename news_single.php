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
      document.getElementById("news").classList.add("active");
     </script>
      <!-- End of NAVBAR -->
      <?php 
      
             //getting the titel of the news feed passed by the user.
              if (isset($_GET['title'])){
              $title = $_GET['title']; }
            
              
        //Setting up the database and query to get the news feed. 
                     include 'include/dbconfig.php';
        $conn->query("SET NAMES utf8");
       $sql = ("SELECT * FROM news where title='$title'");   
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
      
      ?>

      
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row" >
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h1 id="title" class="mb0" ondblclick="changeValue()"> <?php echo $row["title"];?></h1>
            </div>
          </div>
        </div>
      </section>

      
      
<section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row probootstrap-gutter0">
                <div class="col-md-4" id="probootstrap-sidebar">
                  <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                   
                    <ul class="probootstrap-side-menu">
                      
            <li id="photos"  >                 <a  href="#photos">        Photos       </a>        </li>
          
                  <p>This was posted on: <?php echo $row["date"];?></p>
            <li id="contact" class="active"> <a  href="Contact.php">     Contact Us!</a>        </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  
        
                  <img class="img-thumbnail" src="<?php echo $row["pic1"];?>"></img>
                  <p><?php echo $row["long_desc"];?></p>
            
                  <h2>Photos:</h2>
                  
                      <?php if ($row["pic2"]!=null){?>
                             <img id="loopImg" class="img-thumbnail" src="<?php echo $row["pic2"];?>"></img> 
                      <?php }?>
                             <br>
                             
                                <?php if ($row["pic3"]!=null){?>
                             <img id="loopImg" class="img-thumbnail" src="<?php echo $row["pic3"];?>"></img> 
                      <?php }?>
                             <br>
                             
                                 <?php if ($row["pic4"]!=null){?>
                             <img id="loopImg" class="img-thumbnail" src="<?php echo $row["pic4"];?>"></img> 
                      <?php }?>
                             
                      
                  
            
              

                </div>
              </div>
            </div>
             
          </div>
        </div>
   
      </section>
  
      <!-- THE FOOTER -->
      <?php
      include 'footer.php';
      ?>
      <!-- THE END OF THE FOOTER -->

    <!-- END wrapper -->
   

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
<!--

<script>
   function changeValue(){

                  document.getElementById("title").innerHTML="Put the new title here: ";
                  var input1 = document.createElement("input");
                  input1.id = "titleInput";
	          input1.placeholder = "Title of News";
                  document.getElementById("title").appendChild(input1);
                  
    <PUT HERE PHP
           $updatedTitle = $_GET['input1'];
           echo $updatedTitle;
           $sql = (" UPDATE news SET title='r' WHERE title='$title' ");
                   
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

?>
   }
    
</script>
-->
    
  </body>
</html>
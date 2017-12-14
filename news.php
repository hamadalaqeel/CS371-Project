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
       include 'include/dbconfig.php';
        $conn->query("SET NAMES utf8");
        $sql = ("SELECT * FROM news");
        $result = $conn->query($sql);
        $count = 0; 
    // Shows the latest feed:
    $row = $result->fetch_assoc()  
      ?>
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>News</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <div class="text-uppercase probootstrap-uppercase">Featured News</div>
                  <h3> <?php echo $row["title"]; ?>  </h3>
                  <p><?php echo $row["short_desc"]; ?></p>
                  <p>
                    <span class="probootstrap-date"><i class="icon-calendar"></i><?php echo $row["date"]; ?></span>
                 <!--   <span class="probootstrap-location"><i class="icon-user2"></i>By Admin</span> -->
                  </p>
                  <p><a href="#" class="btn btn-info">Learn More</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(<?php echo $row["pic1"];?>)">
                <!--  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="probootstrap-section">
        <div class="container">
               <div class="row">
            <?php                            
             if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {                    
      
            ?>
       
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
           <a href="#" class="probootstrap-featured-news-box">
           <figure class="probootstrap-media"><img id="loopImg"src="<?php echo $row["pic1"];?>" alt="ConferencePic" class="img-responsive"></figure>
           <div class="probootstrap-text">
           <h3> <?php echo $row["title"];?> </h3>
           <p><?php echo $row["short_desc"];?></p>
           <span class="probootstrap-date"><i class="icon-calendar"></i><?php echo $row["date"];?></span>
           
                <!--  <span class="probootstrap-location"><i class="icon-user2"></i>By Admin</span> -->
                </div>
              </a>
            </div>
           
        <div class="clearfix visible-sm-block visible-xs-block"></div>
        <div class="clearfix visible-md-block"></div>
          
  <?php           
         $count++;
         if($count%3==0){
          
                        echo '</div>';
                        echo '</div>';
  
                        echo '<div class="container">';   
                        echo '<div class="row">';     
                 
                        
                          }
             }
             }
            ?>
    



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


    
  </body>
</html>
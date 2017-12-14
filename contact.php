<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact ACM</title>
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
      document.getElementById("contact").classList.add("active");
     </script>
      <!-- End of NAVBAR -->
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Contact Us</h1>
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
                    <h3>Pages</h3>
                    <ul class="probootstrap-side-menu">
                      
            <li id="news"  >                 <a  href="news.php">        News       </a>        </li>
            <li id="conferences">            <a  href="conferences.php"> Conferences</a>        </li>
            <li id="people">                 <a  href="people.php">      People     </a>        </li>
            <li id="contact" class="active"> <a  href="Contact.php">     Contact Us!</a>        </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  <h2>Get In Touch</h2>
                  <p>Contact us using the form below.</p>
                  <form action="#" method="post" class="probootstrap-form">
                    <div class="form-group">
                      <label for="name">Full Name</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
                    </div>
                  </form>
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

    </div>
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
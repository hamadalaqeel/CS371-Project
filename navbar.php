<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="../CS371-Project/css/styles-merged.css">
        <link rel="stylesheet" href="../CS371-Project/css/style.min.css">
        <link type="text/css" rel="stylesheet" href="../CS371-Project/custom.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <!--[if lt IE 9]>
          <script src="js/vendor/html5shiv.min.js"></script>
          <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
        include "include/dbconfig.php";
        session_start();
        ?>



        <div class="probootstrap-search" id="probootstrap-search">
            <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
            <form action="#">
                <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
            </form>
        </div>


        <!-- Fixed navbar -->

        <div class="probootstrap-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
                        <!--- Information of PSU -->
                        <span><i class="icon-location2" class=""></i>Rafha Street, Riyadh, Saudi Arabia</span>
                        <span><i class="icon-phone2"></i>+966 11 4548489</span>
                        <span><i class="icon-mail"></i>psu-acm@psu.edu.sa</span>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
                        <ul>
                            <!-- Social Accounts of PSU-->
                            <li><a href="https://twitter.com/PSU_RUH"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/PrinceSultanUniversity/"><i class="icon-facebook2"></i></a></li>
                            <li><a href="https://www.instagram.com/psu_ruh/"><i class="icon-instagram2"></i></a></li>
                            <li><a href="https://www.youtube.com/user/PSUofficial"><i class="icon-youtube"></i></a></li>
                            <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
                        </ul>
                    </div>

                </div>

                <!-- LOGOS -->
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a  href="index.php" > 
                            <img id="logoPicLeft" alt="ACL Chapter Logo" src="img/ACMChapterLogo.png" > 
                            <img id="logoPic2"alt="ACL Chapter Logo" src="img/PSUlogo2.png">
                            <img id="logoPicRight" alt="ACL Chapter Logo" src="img/ACMChapterLogo.png" > </a>
                    </div>

                </div>

            </div>
        </div>

        <?php
        if (isset($_SESSION["email"])) {
            
        }

        if (!isset($_POST["email"]) || !isset($_POST["password"])) {
            
        } else {

            $email = $_POST["email"];
            $password = $_POST["password"];

            $sql = "select * from users where email = '" . $email . "' and password = '" . $password . "'";

            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();

                $_SESSION["email"] = $row["email"];
                $_SESSION["firstname"] = $row["first_name"];
                $_SESSION["lastname"] = $row["last_name"];
                $_SESSION["role"] = $row["role"];
            } else {
                echo "<script type='text/javascript' src='../CS371-Project/js/loginValidation.js'></script>";
            }
        }
        ?>

 <!-- <script>$(document).ready(function () { $("#error_emailPassword").alert("* You have to enter your email!");} });</script>
 Collect the nav links, forms, and other content for toggling -->
        <nav id="Nav" class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="index.php">ACM</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">

                    <!-- NAVBAR LIST ELEMENTS -->
                    <ul class="nav navbar-nav">

                        <li id="news"  >        <a href="news.php">        News       </a>        </li>
                        <li id="conferences">   <a  href="conferences.php"> Conferences</a>        </li>
                        <li id="people">        <a  href="people.php">      People     </a>        </li>
                        <li id="contact">          <a  href="Contact.php">     Contact us</a>        </li>

                        <?php
                        if (isset($_SESSION["email"])) {

                            $role = $_SESSION["role"];
                           if ($role == "admin") {
                                echo '<li > <a> <font color="red">EDIT:</font></a></li > ';
                                echo '<li id=\"users\">  <a  href="users.php">   <font color="red">USERS</font></a>   </li>';
                                echo '<li id=\"edit_news\" >  <a  href="edit_news.php"> <font color="red">NEWS</font></a>   </li>';
                                echo '<li id=\"people_table\" >  <a  href="people_table.php">  <font color="red">PEOPLE</font></a>   </li>';
                                echo '<li id=\"edit_news\" >  <a  href=\"add_news.php\">  <font color="red">CONFERENCES</font></a>   </li>';
                            }else if ($role == "director"){
                                echo' <li >  <font color="#0099cc">EDIT:</font></li > ';
                                echo '<li id=\"edit_news\" >  <a  href=\"add_news.php\"> <font color="red">NEWS</font></a>   </li>';
                                echo '<li id=\"edit_news\" >  <a  href=\"add_news.php\">  <font color="red">CONFERENCES</font></a>   </li>';
                            }
                        }
                        ?>
                    </ul>
                    <!-- NAVBAR LOGIN  AND SIGN UP Section-->
                    <ul class="nav navbar-nav navbar-right">
<?php
if (isset($_SESSION["email"])) {
    
    echo '<li id="WelcomeMessage"><span>Welcome <b id="Wm"><u>' . $_SESSION["firstname"] . '.</b></u></span></li>';
    echo '<li id="ButtSO"><a href="logout.php"><button id="ButtonSO" type="button" class="btn btn-success" href="logout.php">Sign out</button></a></li>';
} else {
    echo "  <li><a href=\"signup.php\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>\n";
    echo "         \n";
    echo "          <li class=\"dropdown\">\n";
    echo "              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>Login</b> <span class=\"caret\"></span></a>\n";
    echo "              <ul id=\"login-dp\" class=\"dropdown-menu\">\n";
    echo "                  <li>\n";
    echo "                      <div class=\"row\">\n";
    echo "                          <div class=\"col-md-12\">\n";
    echo "                              Login:\n";
    echo "                              <form class=\"form\" role=\"form\" method=\"post\" action=\"" . $_SERVER["PHP_SELF"] . "\" accept-charset=\"UTF-8\" id=\"login-nav\">\n";
    echo "                                  <div class=\"form-group\">\n";
    echo "                                      <label class=\"sr-only\" for=\"exampleInputEmail2\">Email address</label>\n";
    echo "                                      <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Email address\" required>\n";
    echo "                                  </div>\n";
    echo "                                  <div class=\"form-group\">\n";
    echo "                                      <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>\n";
    echo "                                      <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Password\" required>\n";
    echo "                                      <div class=\"help-block text-right\"><a href=\"\">Forget the password ?</a></div>\n";
    echo "                                  </div>\n";
    echo "                                  <div class=\"form-group\">\n";
    echo"                                       <p id='mugren'></p>";
    echo "                                      <button id=\"loginSubmit\" type=\"submit\" class=\"btn btn-info btn-block\">Sign in</button>\n";
    echo "                                  </div>\n";
    echo "                                  <div class=\"checkbox\">\n";
    echo "                                      <label>\n";
    echo "                                          <input type=\"checkbox\"> Remember Me\n";
    echo "                                      </label>\n";
    echo "                                  </div>\n";
    echo "                              </form>\n";
    echo "                          </div>\n";
    echo "                          <div class=\"bottom text-center\">\n";
    echo "                              New here ? <a href=\"signup.php\"><b>Join Us</b></a>\n";
    echo "                          </div>\n";
    echo "                      </div>\n";
    echo "                  </li>\n";
    echo "              </ul>\n";
    echo "          </li>";
}
?>


                    </ul>

                </div>
            </div>
        </nav>

        <!-- /.container-fluid -->
        <!-- END wrapper -->


    </body>
</html>

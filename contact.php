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
                                        <li id="people">                 <a  href="people.php">      People     </a>        </li>
                                        <li id="contact" class="active"> <a  href="Contact.php">     Contact Us!</a>        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                                <h2>Get In Touch</h2>
                                <p>Contact us using the form below.</p>
                                
                                <form  name="contactform" method="post" action="send_form_email.php">
                                    <table  style="width:100%;">
                                        <tr>
                                            <td valign="top">
                                                <label for="first_name">First Name :</label>
                                            </td>
                                            <td valign="top">
                                                <input  type="text" name="first_name" maxlength="50" size="30">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top">
                                                <label for="last_name">Last Name :</label>
                                            </td>
                                            <td valign="top">
                                                <input  type="text" name="last_name" maxlength="50" size="30">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top">
                                                <label for="email">Email :</label>
                                            </td>
                                            <td valign="top">
                                                <input  type="text" name="email" maxlength="80" size="30">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top">
                                                <label for="telephone">Phone:</label>
                                            </td>
                                            <td valign="top">
                                                <input  type="text" name="telephone" maxlength="30" size="30">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top">
                                                <label for="comments">Message :</label>
                                            </td>
                                            <td valign="top">
                                                <textarea  name="comments" maxlength="1000" cols="35" rows="6"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align:center">
                                                <input type="submit" value="Submit">   
                                            </td>
                                        </tr>
                                    </table>
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
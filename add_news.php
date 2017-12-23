
<html>
    <head>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ACM Admin - Edit News</title>
        <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="css/styles-merged.css">
        <link rel="stylesheet" href="css/style.min.css">
        <link rel="stylesheet" href="custom.css">
        <!--[if lt IE 9]>
          <script src="js/vendor/html5shiv.min.js"></script>
          <script src="js/vendor/respond.min.js"></script>
        <![endif]-->



    </head>
    <body>
        <?php
        //The NAVBAR 
        include 'navbar.php';
?>


        <div class="signUpForm">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <p class="form-title" id="FT">
                            Add News</p>
                        <form id="ADD_NEWS" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                            <div class="form-group">
                                <input id="id" name="id"  type="number" placeholder="ID" >
                               
                            </div> 

                            <div class="form-group">
                                <input id="title" name="title"  type="text"  placeholder="Title">
                                
                            </div>
                            <div class="form-group">
                                <input  id="short_desc" name="short_desc"  type="text" placeholder="Short Description">
                                
                            </div>
                            <div class="form-group">
                             <textarea rows="6" cols="140" name="long_desc" form="ADD_NEWS" placeholder="Long Description"></textarea>
                            </div>
                           
                            <div id="date" class="form-group-sm" >
                                <label id="date">Date:</label>
                                <input type="date" name="date" id="date" class="form-control">
                   
                            </div>
                             <label id="date">Photos:</label>

                            <div class="form-group">
                                <input id="pic1" name="pic1"  type="file" placeholder="pic1">
                            </div>
                           <div class="form-group">
                                <input id="pic1" name="pic2"  type="file" placeholder="pic1">
                            </div>
                            <div class="form-group">
                                <input id="pic1" name="pic3"  type="file" placeholder="pic1">
                            </div>
                            <div class="form-group">
                                <input id="pic1" name="pic4"  type="file" placeholder="pic1">
                            </div>



                             <input id="submit" type="submit" value="Publish News"  class="btn btn-info btn-sm" />
                           
                   
                        </form>

                    </div>
                </div>

            </div>
        </div>
 <br>
        <?php

        if (isset($_POST["id"]) == true && $_POST["id"]!='' && $_POST["title"]!='' && $_POST["short_desc"]!=''
                && $_POST["long_desc"]!='' ) {
            $id = $_POST["id"];
            $title = $_POST["title"];
            $short_desc = $_POST["short_desc"];
            $long_desc = $_POST["long_desc"];
            $date = $_POST["date"];
            $pic1=$_POST["pic1"];
            $pic2=$_POST["pic1"];
            $pic3=$_POST["pic1"];
            $pic4=$_POST["pic1"];
            $sql = "INSERT INTO news (id,title,short_desc,long_desc,date,pic1,pic2,pic3,pic4) VALUES ('$id','$title','$short_desc','$long_desc','$date','$pic1','$pic2','$pic3','$pic4');";
            $result = $conn->query($sql);
            ?>
               
 <script type='text/javascript'>alert("News Posted Succesfully!");
</script>

        <?php

        }
     

     


   //the Footer
  
  
    include 'footer.php';
    ?>
    <!-- THE END OF THE FOOTER -->

    <!-- END wrapper -->




  

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>




</body>

</html>



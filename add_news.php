
<html>
    <head>

        <title>Add News</title>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../CS371-Project/CSS1/custom.css">
        

    </head>

    <body>
        <!-- Fixed navbar -->
        <?php
        include "navbar.php";
        ?>

       <?php 
        //create new record form
        function renderForm($title, $short_desc, $long_desc, $date, $pic1, $pic2, $pic3, $pic4, $error){
            
        
        
        ?>
        
        <?php 
        //if there's an error then display 
        
        if($error !=''){
            
            echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
        }
        ?>
        
        <form action="" method="post">
        <div class="form-group">
        <label for="title"><strong>Title: *</strong></label>
        <input type="text" name="title" class="form-control" value="<?php echo $title;?> ">
            </div>
        <div class="form-group"> 
        <label for="shortDesc"><strong>Short Description: *</strong></label>    
        <textarea class="form-control" id="shotDesc" rows="5" name="shortDesc"><?php echo $short_desc; ?></textarea>
            </div>
        <div class="form-group"> 
        <label for="shortDesc"><strong>Long Description: *</strong></label>      
        <textarea class="form-control" id="longDesc" rows="8" name="longDesc" ><?php echo $long_desc; ?></textarea>
            </div>
        <div class="form-group"> 
        <label for="shortDesc"><strong>Date: *</strong></label>      
        <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">   
        </div>
        <div class="form-group">
            <label for="image1"><strong>First Image: </strong></label>
            <input type="file" name="image1" value="<?php echo $pic1; ?>">
            </div>
            <div class="form-group">
            <label for="image2"><strong>Second Image: </strong></label>
            <input type="file" name="image2" value="<?php echo $pic2; ?>">
            </div>   
            <div class="form-group">
            <label for="image3"><strong>Third Image: </strong></label>
            <input type="file" name="image3" value="<?php echo $pic3; ?>">
            </div>   
            <div class="form-group">
            <label for="image4"><strong>Fourth Image: </strong></label>
            <input type="file" name="image4" value="<?php echo $pic4; ?>">
            </div>   
            <button type="submit" name="submit" class="btn btn-default">Submit</button>
            <p>* Required</p>
        </form>
        
        <?php
                    } //close renderForm 
        
        include "include/dbconfig.php";
        
        //checking if form has been sumbited
        if(isset($_POST['submit'])){
            
            //get form data, and make sure the its valid
            $title = mysql_real_escape_string(htmlspecialchars($_POST['title']));
            $shortDesc = mysql_real_escape_string(htmlspecialchars($_POST['shortDesc']));
            $longDesc = mysql_real_escape_string(htmlspecialchars($_POST['longDesc']));
            $date = mysql_real_escape_string(htmlspecialchars($_POST['date']));
            $image1 = mysql_real_escape_string(htmlspecialchars($_POST['image1']));
            $image2 = mysql_real_escape_string(htmlspecialchars($_POST['image2']));
            $image3 = mysql_real_escape_string(htmlspecialchars($_POST['image3']));
            $image4 = mysql_real_escape_string(htmlspecialchars($_POST['image4']));
            
            //check if fields are entered
        if( $title=='' || $shortDesc=='' || $longDesc=='' || $date=='' || $image1=='' || $image2=='' || $image3=='' || $image4=='' ){
            //display error
            $error = 'ERROR! Please fill in all the fields';
            //if theres a filed blank display it
            renderForm($title, $short_desc, $long_desc, $date, $pic1, $pic2, $pic3, $pic4, $error);
        }    
            else {
                //save to DB
                mysql_query("INSERT news SET title='$title', short_desc='$shortDesc', long_desc='$longDesc',
                            date='$date',pic1='$pic1',pic2='$pic2',pic3='$pic3',pic4='$pic4'");
                
                //after saving redirect to news table
                header("Location:news_table.php");
                
            }
            //else{
                //if form not submitted, display the form
                renderForm('','','','','','','','','');
            //}
        }   
        ?>

        <?php
        include 'footer.php';
        ?>
        <script src="js/scripts.min.js"></script>
        <script src="js/main.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="../CS371-Project/js/signup.js"></script>


    </body>
</html>

<?php





// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($title, $date, $shot_desc,$long_desc,$pic1,$pic2,$pic3 ,$error){

?>



<html>

<head>

<title>Edit News</title>

</head>

<body>

<?php
    include 'navbar.php';

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">



<div>

<p><strong>Title:</strong> <?php echo $Title; ?></p>

<strong>Title: *</strong> <input type="text" name="title" value="<?php echo $title; ?>"/><br/>

<strong>Date: *</strong> <input type="text" name="date" value="<?php echo $date; ?>"/><br/>

<strong>Short Description: *</strong> <textarea rows="4" maxlength="200" placeholder="200 characters only" id="shortD">
                                            <?php echo $shot_desc; ?></textarea> 
    
<strong>Long Description: *</strong> <textarea rows="8" maxlength="1500" placeholder="1500 characters only" id="longD">
                                            <?php echo $long_desc; ?></textarea>  
    
<strong>First Image: </strong> <input id="image1" type="image" alt="Login" src="<?php echo $pic1; ?>">   
<strong>Second Image: </strong> <input id="image2" type="image" alt="Login" src="<?php echo $pic2; ?>">   
<strong>Third Image: </strong> <input id="image3" type="image" alt="Login" src="<?php echo $pic3; ?>">   
<strong>Fourth Image: </strong> <input id="image4" type="image" alt="Login" src="<?php echo $pic4; ?>">       

<p>* Required</p>

<input type="submit" name="submit" value="Submit">

</div>

</form>

    !-- THE FOOTER -->
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

<?php

}







// connect to the database

include('include/dbconfig.php');



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['title']))

{

// get form data, making sure it is valid

$id = $_POST['title'];



$title = mysql_real_escape_string(htmlspecialchars($_POST['title']));
$shortDesc = mysql_real_escape_string(htmlspecialchars($_POST['shortD']));
$longDesc = mysql_real_escape_string(htmlspecialchars($_POST['longD']));    
    


// check that firstname/lastname fields are both filled in

if ($title == '' || $shortDesc == ''|| $longDesc == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($title, $date, $shot_desc,$long_desc,$pic1,$pic2,$pic3 ,$error);

}

else

{

// save the data to the database

mysql_query("UPDATE news SET title='$title', date='$date',short_desc='$shot_desc',
                    long_desc='$long_desc',pic1='$pic1',pic2='$pic2',pic3='$pic3',pic4='$pic4'  WHERE id='$id'")

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: view.php");

}

}

else{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['title']) && is_numeric($_GET['title']) && $_GET['title'] > 0)

{

// query db

$id = $_GET['title'];

$result = mysql_query("SELECT * FROM news WHERE title=$title")

or die(mysql_error());

$row = mysql_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db

//$firstname = $row['firstname'];

//$lastname = $row['lastname'];
$title = $row['title'];
$date = $row['date'];
$shortD = $row['short_desc'];
$longD = $row['long_desc'];
$pic1 = $row['pic1'];
$pic2 = $row['pic2'];
$pic3 = $row['pic3'];
$pic4 = $row['pic4'];

    


// show form

renderForm($title, $date, $shot_desc,$long_desc,$pic1,$pic2,$pic3 , '');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>

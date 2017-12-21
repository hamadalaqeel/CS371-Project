
<html>
    <head>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ACM Admin - add News</title>
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

        //   $column ='email';
        //    $email ='mmm@mmm.com';
        //     $editval ='newemail.com';        
// connect to the database
// get results from database
        $sql = "SELECT * FROM news";

        $result = $conn->query($sql);




// Display data in table.

        /* A user has:
         * 1- Email 
         * 2- Password 
         * 3- First name 
         * 4- Last name 
         * 5- Role 
         * 6- Birth day
         * 7- Join date 
         * 8- Address 
         * 9- Mobile 
         * 10- City 
         * 11- Personal home page
         */

        echo "<div class='container-fliud'>";
        echo "<div id='alerts'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
        echo '<br>';
        echo "<h3 id='newsTitle'>News:</h3>";
        echo "<button id='saveButton' class='btn btn-warning' onclick='addRowRequest()'>Save New</button>";
        echo"<span id='adding_error'></span>";
        echo '<div class="table-responsive">';
        echo "<table id='myTable' class='table table-striped table-bordered table-hover table-condensed table-responsive'>";

//. "<th> <a href='signup.php' class='btn btn-primary'> Add </a> </th>"
//MetaData
        echo '<thead>';
        echo "<tr> "
        . "<th id='id'>id</th>"
        . "<th id='title'>title</th>"
        . "<th id='short_desc'>short_desc</th>"
        . "<th id='long desc'>long desc</th>"
        . "<th id='date'>date</th>"
        . "<th id='pic1'>pic1</th>"
        . "<th id='pic2'>pic2</th>"
        . "<th id='pic3'>pic3</th>"
        . "<th id='pic4'>pic4</th>"
        . "<th id='Add_News'><button id='addUser'class='btn btn-primary' onclick='createRow()'>Add News</button> </th>"
        . "</tr>"
        . "</thead>";



// Loop through results of database query, displaying them in the table

        while ($row = $result->fetch_assoc()) {

// Echo out the contents of each row into a table
            //Echo The information of each user.
          
                echo "<tr> ";
            //<script> document.getElementById("#fileUpload").innerHTML= this.value;</script>  
            ?>
            <script>
                //MAKING THE CURRENT PAGE ELEMENT ACTIVE IN THE NAVBAR
                          document.getElementById("edit_news").classList.add("active");

            </script>




        <td id="id"><input  id="id" contenteditable="true" onBlur="saveToDatabase(this, 'id', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="number" value="<?php echo $row["id"]; ?>"></td>
        <td id="title"><input id="title" contenteditable="true" onBlur="saveToDatabase(this, 'title', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="text" value="<?php echo $row["title"]; ?>"></td>
        <td id="short_desc"><input id="short_desc" contenteditable="true" onBlur="saveToDatabase(this, 'short_desc', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="text" value="<?php echo $row["short_desc"]; ?>"></td>
        <td id="long_desc"><input id="long_desc" contenteditable="true" onBlur="saveToDatabase(this, 'long_desc', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="text" value="<?php echo $row["long_desc"]; ?>"></td>
        <td id="date"><input id="date" contenteditable="true" onBlur="saveToDatabase(this, 'date', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="date" value="<?php echo $row["date"]; ?>"></td>
        <td id="pic1"><input id="pic1" contenteditable="true" onBlur="saveToDatabase(this, 'pic1', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="file" value="<?php echo $row["pic1"];?>" ></td>
        <td id="pic2" ><input id="pic2" contenteditable="true" onBlur="saveToDatabase(this, 'pic2', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="file" value="<?php echo $row["pic2"]; ?>"></td>
        <td id="pic3" ><input id="pic3" contenteditable="true" onBlur="saveToDatabase(this, 'pic3', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="file" value="<?php echo $row["pic3"]; ?>"></td>
        <td id="pic4"><input id="pic4" contenteditable="true" onBlur="saveToDatabase(this, 'pic4', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="file" value="<?php echo $row["pic4"]; ?>"></td>

            <script>

        $(document).ready(function () {
                $("#id").width(50);
                $("#title").css('width','10%');
                $("#short_desc").css('width','17%');
                $("#long_desc").css('width','40%');
                $("#date").css('width','5%');
                $("#pic1").css('width','5%');
                $("#pic2").css('width','5%');
                $("#pic3").css('width','5%');
                $("#pic4").css('width','5%');
                $("#addUser").css('width','5%');


            });
                    </script>

        <!--
        
        <td>' . $row['password'] . '</td>';
        <td>' . $row['first_name'] . '</td>';
        <td>' . $row['last_name'] . '</td>';
        <td>' . $row['role'] . '</td>';
        <td>' . $row['birth_date'] . '</td>';
        <td>' . $row['address'] . '</td>';
        <td>' . $row['mobile'] . '</td>';
        <td>' . $row['city'] . '</td>';
        <td>' . $row['counrty'] . '</td>';
        <td>' . $row['personal_home_page'] . '</td>'; -->
        <?php
//$email = $row[email];
//$sql= "DELETE * FROM users WHERE $email=row[email]";
//The ability to delete and modifiy each user.
        $id = $row['id'];
        ?>


        <td id='Add_News'><button id='Add_News' onclick="deleteAlert('<?PHP echo $id; ?>', this)"  class="btn btn-danger">Delete New</button></td>

        <?php
        echo "</tr>";
    }



// close table>

    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    ?>



    <!-- THE FOOTER -->
    <?php
    include 'footer.php';
    ?>
    <!-- THE END OF THE FOOTER -->

    <!-- END wrapper -->




    <script>
        function showEdit(editableObj) {
            $(editableObj).css("background", "#FFF");
        }

        function saveToDatabase(editableObj, column, id) {
            $(editableObj).css("background", "#FFF url(img/loaderIcon.gif) no-repeat right");
            $.ajax({
                url: "update_users.php",
                type: "POST",
                data: 'column=' + column + '&editval=' + editableObj.value + '&id=' + id,
                success: function (data) {
                    $(editableObj).css("background", "#EFF0F4");
                    $(editableObj).css("border", "3px solid lightgreen");
                }
            });
        }
    </script>

    <script>
        function createRow() {
        $('#addUser').attr('disabled', true);
    
            
        var table = document.getElementById("myTable");
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
            row.innerHTML = "<td><input type='email' id='email' placeholder='Email'></input></td><td><input type='password' id='password' placeholder='password'></input></td><td><input type='text' id='firstname' placeholder='firstname'></input></td><td><input type='text' id='lastname' placeholder='lastname'></input></td><td><select class='form-control' id='role' name='role'><option disable> Select a role ...</option><option value='admin'> admin </option><option value='director'>director</option><option value='member'> member</option></select></td><td><input type='date' id='birthdate' ></input></td><td><input type='text' id='address' placeholder='address'></input></td><td><input type='text' id='mobile' placeholder='mobile'></input></td><td><input type='text' id='city' placeholder='city'></input></td><td><input type='text' id='country' placeholder='country'></input></td><td><input type='text' id='personalhomepage' placeholder='Personal homepage'></input></td>";
            row.style.fontSize = "0.28em";
        }

    </script>
    <script>

        function deleteAlert(id, r) {
            $(document).ready(function () {
                $(this).click(function () {
                    $(this).load("delete_users.php?id=" + id);
                });

                document.getElementById("alerts").innerHTML += "<div class=\"alert alert-danger alert-dismissable\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>" + id + " successfully removed!</strong></div>";
                var i = r.parentNode.parentNode.rowIndex;
                document.getElementById("myTable").deleteRow(i);

            });

        }
       
    </script>

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>

    <script> $(document).ready(function () {
                $("#myTable").css('font-size','0.6em');
                $("#saveUser").css('width','0.2em');
                
            });
            </script>

</body>

</html>

</html>

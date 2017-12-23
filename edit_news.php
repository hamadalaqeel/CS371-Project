
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
        echo "<div class='container-fluid'>";
        echo "<div class='row-fluid'>";
        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
        echo '<br>';
        echo "<h3 style='text-align:center' id='newsTitle'>News:</h3>";
       // echo "<button id='saveButton' class='btn btn-warning' onclick='addRowRequest()'>Save New</button>";
   
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
        . "<th  ><button class='btn btn-primary' ><a href='add_news.php' style='color:inherit'>Add News</a></button> </th>"
        . "</tr>"
        . "</thead>";



// Loop through results of database query, displaying them in the table

        while ($row = $result->fetch_assoc()) {

// Echo out the contents of each row into a table
            //Echo The information of each user.
          
                echo "<tr style='height:100px'> ";
            //<script> document.getElementById("#fileUpload").innerHTML= this.value;</script>  
            ?>
            <script>
                //MAKING THE CURRENT PAGE ELEMENT ACTIVE IN THE NAVBAR
                          document.getElementById("edit_news").classList.add("active");

            </script>


        <td ><input  style="height:100px;width: 25px;" contenteditable="true" onBlur="saveToDatabase(this, 'id', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="number" value="<?php echo $row["id"]; ?>"></td>
        <td ><textarea rows="8" cols="8" contenteditable="true" onBlur="saveToDatabase(this, 'title', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" ><?php echo $row["title"]; ?></textarea></td>
        <td ><textarea rows="8" cols="15" contenteditable="true" onBlur="saveToDatabase(this, 'short_desc', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" ><?php echo $row["short_desc"]; ?></textarea></td>
        <td ><textarea rows="8" cols="30" contenteditable="true" onBlur="saveToDatabase(this, 'long_desc', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" ><?php echo $row["long_desc"]; ?></textarea></td>
        <td ><input  contenteditable="true" onBlur="saveToDatabase(this, 'date', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="date" value="<?php echo $row["date"]; ?>"></td>
        <td ><input style="height:100px;width: 100px;" contenteditable="true" onBlur="saveToDatabase(this, 'pic1', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="file" value="<?php echo $row["pic1"];?>" ></div></td>
        <td id="pic2" ><input style="height:100px;width: 100px;" contenteditable="true" onBlur="saveToDatabase(this, 'pic2', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="file" value="<?php echo $row["pic2"]; ?>"></td>
        <td id="pic3" ><input style="height:100px;width: 100px;" contenteditable="true" onBlur="saveToDatabase(this, 'pic3', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="file" value="<?php echo $row["pic3"]; ?>"></td>
        <td id="pic4"><input style="height:100px;width: 100px;" contenteditable="true" onBlur="saveToDatabase(this, 'pic4', '<?php echo $row["id"]; ?>')" onClick="showEdit(this);" type="file" value="<?php echo $row["pic4"]; ?>"></td>

       


        <?php

       $id = $row['id'];
        ?>


        <td ><button onclick="deleteAlert('<?PHP echo $id; ?>', this)"  class="btn btn-danger">Delete News</button></td>
        
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
            row.innerHTML = "<td><input type='number' id='id' placeholder='ID'></input></td><td><input type='text' id='title' placeholder='title'></input></td><td><input type='text' id='short_desc' placeholder='short description'></input></td><td><input type='text' id='long_desc' placeholder='long description'><textarea rows='8' cols='8'></textarea></input></td><td><input type='date' id='date' ></input></td><td><input type='file' id='pic1' ></input></td><td><input type='file' id='pic2' ></input></td><td><input type='file' id='pic3' ></input></td><td><input type='file' id='pic4' ></input></td>";
            row.style.fontSize = "0.80em";
        }
                                            //id title short_desc long desc date pic1 pic2 pic3 pic4
    </script>
    <script>

        function deleteAlert(id, r) {
            $(document).ready(function () {
                $(this).click(function () {
                    $(this).load("delete_row.php?id=" + id);
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
                $("#myTable").css('font-size','0.8em');
                
                $("#id").css('width','0.1em');
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

</body>

</html>

</html>

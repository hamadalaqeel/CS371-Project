<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ACM - Edit Members</title>
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
        $sql = "SELECT * FROM conference ORDER BY start_date";

        $result = $conn->query($sql);




// Display data in table.

        /* PSU-ACM MEMBER has:
        1-id
        2-Email
        3-name
        4-poistion
        5-personal image (ACM logo by default)
         */

        echo "<div class='container-fliud'>";
        echo "<div id='alerts'>";
        echo "</div>";
        echo "</div>";
         echo "<div class='container-fluid'>";
        echo "<div class='row-fluid'>";
        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
        echo '<br>';
        echo "<h3 style='text-align:center'>Conferences:</h3>";
        echo "<button id='saveButton' class='btn btn-warning' onclick='addRowRequest()'>Save Conference</button>";
        echo '<br>';
        echo '<br>';
        echo"<span id='adding_error'></span>";
        echo '<div class="table-responsive">';
        echo "<table id='myTable' class='table table-striped table-bordered table-hover table-condensed table-responsive'>";


        echo '<thead>';
        echo "<tr> "
        . "<th>Name_Of_Conf</th>"
        . "<th>Location</th>"
        . "<th>Start_date</th>"
        . "<th>End_date</th>"
        . "<th>Picture</th>"
        . "<th>Description</th>"
        . "<th>Publisher</th>"        
        . "<th><button id='addConference'class='btn btn-primary' onclick='createRow()'>Add Conference</button> </th>"
        . "</tr>"
        . "</thead>";



// Loop through results of database query, displaying them in the table

        while ($row = $result->fetch_assoc()) {


// Echo out the contents of each row into a table
            //Echo The information of each user.
           

            ?>
            <script>
                //MAKING THE CURRENT PAGE ELEMENT ACTIVE IN THE NAVBAR
                document.getElementById("edit_conferences").classList.add("active");
            </script>

                         
        <td><input  contenteditable="true"  onClick="showEdit(this);" style=";width: 90px;" type="text" onBlur="saveToDatabase(this, 'name_of_conf', '<?php echo $row["name_of_conf"]; ?>')" value="<?php echo $row["name_of_conf"]; ?>"></td>
        <td contenteditable="true" ><input style=";width: 150px;" type="text" onBlur="saveToDatabase(this, 'location', '<?php echo $row["name_of_conf"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["location"]; ?>"></td>
        <td contenteditable="true" ><input type="date" onBlur="saveToDatabase(this, 'start_date', '<?php echo $row["name_of_conf"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["start_date"]; ?>"></td>
        <td contenteditable="true" ><input   type="date" onBlur="saveToDatabase(this, 'end_date', '<?php echo $row["name_of_conf"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["end_date"]; ?>"></td>
        <td contenteditable="true" ><input style=";width: 80px;" type="file" onBlur="saveToDatabase(this, 'picture_about_conf', '<?php echo $row["name_of_conf"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["picture_about_conf"]; ?>"></td>
        <td contenteditable="true" ><input style=";width: 300px;" type="text" onBlur="saveToDatabase(this, 'description', '<?php echo $row["name_of_conf"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["description"]; ?>"></td>
        <td contenteditable="true" ><input style=";width: 100px;" type="text" onBlur="saveToDatabase(this, 'publisher', '<?php echo $row["name_of_conf"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["publisher"]; ?>"></td>


            <?php $name_of_conf = $row["name_of_conf"]; ?>

        <td ><button id="deleteButton" onclick="deleteAlert('<?PHP echo $name_of_conf; ?>',this)"  class="btn btn-danger">Delete</button></td>

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

        function saveToDatabase(editableObj, column, name_of_conf) {
            $(editableObj).css("background", "#FFF url(img/loaderIcon.gif) no-repeat right");
            $.ajax({
                url: "update_conference.php",
                type: "POST",
                data: 'column=' + column + '&editval=' + editableObj.value + '&name_of_conf=' + name_of_conf,
                success: function (data) {
                    $(editableObj).css("background", "#EFF0F4");
                    $(editableObj).css("border", "3px solid lightgreen");
                document.getElementById("alerts").innerHTML = "<div class=\"alert alert-info alert-dismissable\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>" + column + " of "+ name_of_conf+" successfully modified!</strong></div>";

                }
            });
        }
    </script>

    <script>
        function createRow() {
        $('#addPeople').attr('disabled', true);


        var table = document.getElementById("myTable");
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
            row.innerHTML = "<td><input type='number' id='id' placeholder='ID'></input></td><td><input type='text' id='email' placeholder='Email'></input></td><td><input type='text' id='name' placeholder='Name'></input></td><td><input type='text' id='position' placeholder='Position'></input></td><td><input type='file' id='image' ></input></td>";
            row.style.fontSize = "0.8em";

        }
                $("#myTable").css('font-size','0.8em');

    </script>
  <script>

       function deleteAlert(name_of_conf, r) {
            $(document).ready(function () {
                $(this).click(function () {
                    $(this).load("delete_conference.php?name_of_conf="+name_of_conf);
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
    

    <script src="add_people.js"></script>
    
  
</body>

</html>

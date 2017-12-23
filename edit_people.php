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
        $sql = "SELECT * FROM committees ORDER BY id";

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
        echo "<h3 style='text-align:center'>PSU-ACM Members:</h3>";
        echo "<button id='saveButton' class='btn btn-warning' onclick='addRowRequest()'>Save Member</button>";
        echo '<br>';
        echo '<br>';
        echo"<span id='adding_error'></span>";
        echo '<div class="table-responsive">';
        echo "<table id='PeopleTable' class='table table-striped table-bordered table-hover table-condensed table-responsive'>";

//. "<th> <a href='signup.php' class='btn btn-primary'> Add </a> </th>"
//MetaData
        echo '<thead>';
        echo "<tr> "
        . "<th>ID</th>"
        . "<th>Email</th>"
        . "<th>Name</th>"
        . "<th>Position</th>"
        . "<th>Image</th>"
        . "<th><button id='addPeople'class='btn btn-primary' onclick='createRow()'>Add Member</button> </th>"
        . "</tr>"
        . "</thead>";



// Loop through results of database query, displaying them in the table

        while ($row = $result->fetch_assoc()) {

            $id = $row["id"];

// Echo out the contents of each row into a table
            //Echo The information of each user.
           

            ?>
            <script>
                //MAKING THE CURRENT PAGE ELEMENT ACTIVE IN THE NAVBAR
                document.getElementById("edit_people").classList.add("active");
            </script>


        <td><input  contenteditable="true"  onClick="showEdit(this);" style=";width: 90px;" type="text" onBlur="saveToDatabase(this, 'id', '<?php echo $row["email"]; ?>')" value="<?php echo $row["id"]; ?>"></td>
        <td contenteditable="true" ><input style=";width: 250px;" type="text" onBlur="saveToDatabase(this, 'email', '<?php echo $row["email"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["email"]; ?>"></td>
        <td contenteditable="true" ><input style=";width: 250px;" type="text" onBlur="saveToDatabase(this, 'name', '<?php echo $row["email"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["name"]; ?>"></td>
        <td contenteditable="true" ><input style=";width: 220px;" type="text" onBlur="saveToDatabase(this, 'position', '<?php echo $row["email"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["position"]; ?>"></td>
        <td contenteditable="true" ><input style=";width: 300px;" type="file" onBlur="saveToDatabase(this, 'image', '<?php echo $row["email"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["image"]; ?>"></td>



        <td ><button id="deleteButton" onclick="deleteAlert('<?PHP echo $id; ?>',this)"  class="btn btn-danger">Delete User</button></td>

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

        function saveToDatabase(editableObj, column, email) {
            $(editableObj).css("background", "#FFF url(img/loaderIcon.gif) no-repeat right");
            $.ajax({
                url: "update_people.php",
                type: "POST",
                data: 'column=' + column + '&editval=' + editableObj.value + '&email=' + email,
                success: function (data) {
                    $(editableObj).css("background", "#EFF0F4");
                    $(editableObj).css("border", "3px solid lightgreen");

                document.getElementById("alerts").innerHTML = "<div class=\"alert alert-info alert-dismissable\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>" + column + " of "+ email+" successfully modified!</strong></div>";

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

        function deleteAlert(id, r) {
            $(document).ready(function () {
                $(this).click(function () {
                    $(this).load("delete_people.php?id="+id);
                });

                document.getElementById("alerts").innerHTML += "<div class=\"alert alert-danger alert-dismissable\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>" + email + " successfully removed!</strong></div>";
                var i = r.parentNode.parentNode.rowIndex;
                document.getElementById("PeopleTable").deleteRow(i);

            });

        }



    </script>
<script>

        function deleteAlert(id, r) {
            $(document).ready(function () {
                $(this).click(function () {
                    $(this).load("delete_people.php?id="+id);
                });
                document.getElementById("alerts").innerHTML += "<div class=\"alert alert-danger alert-dismissable\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>" + id + " successfully removed!</strong></div>";
                var i = r.parentNode.parentNode.rowIndex;
                document.getElementById("PeopleTable").deleteRow(i);

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

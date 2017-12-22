<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ACM Admin - Users</title>
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
        $sql = "SELECT * FROM users";

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
        echo "<h3 style='text-align:center'>Registered Users:</h3>";
        echo "<button id='saveButton' class='btn btn-warning' onclick='addRowRequest()'>Save user</button>";
        echo"<span id='adding_error'></span>";
        echo '<div class="table-responsive">';
        echo "<table id='myTable' class='table table-striped table-bordered table-hover table-condensed table-responsive'>";

//. "<th> <a href='signup.php' class='btn btn-primary'> Add </a> </th>"
//MetaData
        echo '<thead>';
        echo "<tr> "
        . "<th>Email</th>"
        . "<th>Password</th>"
        . "<th>First Name</th>"
        . "<th>Last name</th>"
        . "<th>Role</th>"
        . "<th>Birthdate</th>"
        . "<th>Address</th>"
        . "<th>Mobile</th>"
        . "<th>City</th>"
        . "<th>Country</th>"
        . "<th>Personal Home Page</th>"
        . "<th><button id='addUser'class='btn btn-primary' onclick='createRow()'>Add User</button> </th>"
        . "</tr>"
        . "</thead>";



// Loop through results of database query, displaying them in the table

        while ($row = $result->fetch_assoc()) {

            $role = $row["role"];

// Echo out the contents of each row into a table
            //Echo The information of each user.
            if ($role == 'member') {
                echo '<tr class="success">';
            } else if ($role == 'director') {
                echo '<tr class="info">';
            } else if ($role == 'admin') {
                echo '<tr class="danger">';
            } else {
                echo "<tr>";
            }
                    $email = $row['email'];

            ?>
            <script>
                //MAKING THE CURRENT PAGE ELEMENT ACTIVE IN THE NAVBAR
                document.getElementById("users").classList.add("active");
            </script>
            

        <td><input  contenteditable="true"  onClick="showEdit(this);" style=";width: 90px;" type="text" onBlur="saveToDatabase(this, 'email', '<?php echo $row["email"]; ?>')" value="<?php echo $row["email"]; ?>"></td>
        <td contenteditable="true" onClick="showEdit(this);"><input style=";width: 60px;" onBlur="saveToDatabase(this, 'password', '<?php echo $row["email"]; ?>')"  type="password" value="<?php echo $row["password"]; ?>"></td>
        <td contenteditable="true" ><input style=";width: 80px;" type="text" onBlur="saveToDatabase(this, 'first_name', '<?php echo $row["email"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["first_name"]; ?>"></td>
        <td contenteditable="true" ><input style=";width: 80px;" type="text" onBlur="saveToDatabase(this, 'last_name', '<?php echo $row["email"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["last_name"]; ?>"></td>
        <td contenteditable="true" ><select style=";width: 80px;" type="text" onBlur="saveToDatabase(this, 'role', '<?php echo $row["email"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["role"]; ?>"><option value="<?php echo $row["role"]; ?>" selected disabled> <?php echo $row["role"]; ?></option><option value='admin'> admin </option><option value='director'>director</option><option value='member'> member</option></select></td>
        <td contenteditable="true" ><input style=";width: 110px;" type="date" onBlur="saveToDatabase(this, 'birth_date', '<?php echo $row["email"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["birth_date"]; ?>"></td>
        <td contenteditable="true" ><input style=";width: 70px;" type="text" onBlur="saveToDatabase(this, 'address', '<?php echo $row["email"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["address"]; ?>"></td>
        <td contenteditable="true" ><input style=";width: 86px;" type="text" onBlur="saveToDatabase(this, 'mobile', '<?php echo $row["email"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["mobile"]; ?>"></td>
        <td contenteditable="true" ><select style=";width: 80px;" type="text" onBlur="saveToDatabase(this, 'city', '<?php echo $row["email"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["city"]; ?>"><option value="<?php echo $row["city"]; ?>" selected disabled> <?php echo $row["city"]; ?></option><option value="Riyadh">Riyadh</option><option value="Jeddah">Jeddah</option><option value="Dammam">Dammam</option><option value="Yanbu">Yanbu</option></select></td>
        <td contenteditable="true" ><select style=";width: 80px;" type="text" onBlur="saveToDatabase(this, 'counrty', '<?php echo $row["email"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["counrty"]; ?>"><option value="<?php echo $row["counrty"]; ?>" selected disabled> <?php echo $row["counrty"]; ?></option><option value="Saudi Arabia">Saudi Arabia</option><option value="Jordan">Jordan</option><option value="Yamen">Yamen</option></select></td>
        <td contenteditable="true" ><input style=";width: 60px;" type="text" onBlur="saveToDatabase(this, 'personal_home_page', '<?php echo $row["email"]; ?>')" onClick="showEdit(this);" value="<?php echo $row["personal_home_page"]; ?>"></td>

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



        <td ><button id="deleteButton" onclick="deleteAlert('<?PHP echo $email; ?>',this)"  class="btn btn-danger">Delete User</button></td>

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
                url: "update_users.php",
                type: "POST",
                data: 'column=' + column + '&editval=' + editableObj.value + '&email=' + email,
                success: function (data) {
                    $(editableObj).css("background", "#EFF0F4");
                    $(editableObj).css("border", "3px solid lightgreen");
                    
                document.getElementById("alerts").innerHTML += "<div class=\"alert alert-info alert-dismissable\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>" + column + " of "+ email+" successfully modified!</strong></div>";
               
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
            row.innerHTML = "<td><input type='email' id='email' placeholder='Email'></input></td><td><input type='password' id='password' placeholder='password'></input></td><td><input type='text' id='firstname' placeholder='firstname'></input></td><td><input type='text' id='lastname' placeholder='lastname'></input></td><td><select class='form-control' id='role' name='role'><option disable> Select a role ...</option><option value='admin'> admin </option><option value='director'>director</option><option value='member'> member</option></select></td><td><input type='date' id='birthdate' ></input></td><td><input type='text' id='address' placeholder='address'></input></td><td><input type='text' id='mobile' placeholder='mobile'></input></td><td><select value='city' class='selectpicker' name='city' id='city'><option value='None'>City</option> <option value='Riyadh'>Riyadh</option>  <option value='Jeddah'>Jeddah</option><option value='Dammam'>Dammam</option><option value='Yanbu'>Yanbu</option></select></td><td><select value='country' class='selectpicker' name='country' id='country'> <option value='None'>Country</option> <option value='Saudi Arabia'>Saudi Arabia</option><option value='Jordan'>Jordan</option><option value='Yamen'>Yamen</option></select></td><td><input type='text' id='personalhomepage' placeholder='Personal homepage'></input></td>";
            row.style.fontSize = "0.58em";
            
        }
                $("#myTable").css('font-size','0.7em');

    </script>
    <script>

        function deleteAlert(email, r) {
            $(document).ready(function () {
                $(this).click(function () {
                    $(this).load("delete_row.php?email="+email);
                });

                document.getElementById("alerts").innerHTML += "<div class=\"alert alert-danger alert-dismissable\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>" + email + " successfully removed!</strong></div>";
                var i = r.parentNode.parentNode.rowIndex;
                document.getElementById("myTable").deleteRow(i);

            });

        }


    </script>

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>

    <script src="../CS371-Project/addUser.js"></script>

</body>

</html>

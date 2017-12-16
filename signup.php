
<html>
    <head>

        <title>Sign up for ACM</title>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../CS371-Project/CSS1/custom.css">
        

    </head>

    <body>
        <!-- Fixed navbar -->
        <?php
        include "navbar.php";
        ?>

        <div class="signUpForm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p class="form-title" id="FT">
                            Sign Up</p>
                        <form class="login" id="SUF">

                            <div class="form-group">
                                <input id="email" name="email"  type="text" data-validation="required" placeholder="Email" >
                                <span id="error_email" class="text-danger"></span>
                            </div> 
                            <div class="form-group">
                                <input id="password" name="password"  type="password" data-validation="required" placeholder="Password">
                                <span id="error_password" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <input id="myName" name="myName"  type="text" data-validation="required" placeholder="Firstname">
                                <span id="error_name" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <input id="lastname" name="lastname"  type="text" data-validation="required" placeholder="lastname">
                                <span id="error_lastname" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <select value="Role" class="selectpicker" name="role" id="role" class="form-control" required>
                                    <option value="0">Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="student">Student</option>
                                    <option value="Role">Role</option>
                                </select>
                                <span id="error_role" class="text-danger"></span>
                            </div>
                            <div id="dateOfbirthDiv" class="form-group-sm" >
                                <label id="dateOfbirth">Date of birth:</label>
                                <input type="date" name="dob" id="dob" class="form-control">
                                <span id="error_dob" class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <input id="address" name="address"  type="text" placeholder="Address">
                                <span id="error_name" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <input id="phone" name="phone"  type="text"  placeholder="Phone Number">
                                <span id="error_phone" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <select value="country" class="selectpicker" name="country" id="country">
                                    <option value="None">Country</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Yamen">Yamen</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select value="city" class="selectpicker" name="city" id="city">
                                    <option value="None">City</option>
                                    <option value="Riyadh">Riyadh</option>
                                    <option value="Jeddah">Jeddah</option>
                                    <option value="Dammam">Dammam</option>
                                    <option value="Yanbu">Yanbu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input id="presonalHomepage" name="presonalHomepage"  type="text" placeholder="Presonal Homepage">
                            </div>



                            <input id="submit" type="submit" value="Sign Up" class="btn btn-info btn-sm" />

                            <div class="remember-forgot">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label id="RF">
                                                <input type="checkbox">Remember Me<br>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 forgot-pass-content">
                                        <a id="RF" href="javascription:void(0)" class="forgot-pass">Forgot Password</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>


        <?php
        include 'footer.php';
        ?>
        <script src="js/scripts.min.js"></script>
        <script src="js/main.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="../CS371-Project/js/signup.js"></script>


    </body>
</html>

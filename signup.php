<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign up Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/signup.css">
    <script src="js/signup.js"> 
    </head>
    <body>
        
        <div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Enter Your Details Here
			</div>
			<div class="panel-body">
				<form name="myform">
					<div class="form-group">
						<label for="myName">First Name *</label>
						<input id="myName" name="myName" class="form-control" type="text" data-validation="required">
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="lastname">Last Name *</label>
						<input id="lastname" name="lastname" class="form-control" type="text" data-validation="email">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="age">Age *</label>
						<input id="age" name="age"  class="form-control" type="number" min="1" >
						<span id="error_age" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="dob">Date Of Birth *</label>
						<input type="date" name="dob" id="dob" class="form-control">
						<span id="error_dob" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="gender">Gender</label>
						<select name="gender" id="gender" class="form-control">
							<option selected>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="phone">Phone Number *</label>
						<input type="text" id="phone" name="phone" class="form-control" >
						<span id="error_phone" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="disc">Discription</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
					
					<button id="submit" type="submit" value="submit" class="btn btn-primary center">Submit</button>
			
				</form>

			</div>
		</div>
	</div>
</div>
        
    </body>
</html>

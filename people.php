<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACM - People</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 <?php
      include "navbar.html";
      ?>
            
      <section class="probootstrap-section probootstrap-section-colored" >
        <div class="container" class="bg-info text-white" >
          <div class="row" >
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>People</h1>
            </div>
          </div>
        </div>
      </section>
<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "SoftwareDesign";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  $conn->query("SET NAMES utf8");
  $sql = ("SELECT * FROM teachers");
  $result = $conn->query($sql);
  $count = 0;


?>
      


      
      
      <section class="probootstrap-section">
        <div class="container">
        	
          <div class="row col-md-12 col-sm-12">
          	<?php
        	echo '<h3>'. (mysqli_fetch_assoc($result))['t_department'].'</h3>';
        	?>
          </div>

          <div class="row">

<?php
  
  foreach ($result as $row) {
?>

            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="<?php echo $row['t_image'];?>" alt="" class="img-responsive">
                </figure>
                <div class="text">
                  <h3 id="name"><?php echo $row['t_name'];?></h3>
                  <p><?php echo $row['t_position'];?></p>
                  <p id="info<?php echo $row['t_id'];?>">
                  </p>
                  <ul class="probootstrap-footer-social">
                    <li>
                    	<button class="b" style="color:#1E90FF" title="<?php echo $row['t_email'];?>" onclick="displayEmail(title,<?php echo $row['t_id'];?>)">
                    		<i class="icon-email">	
                    		</i>
                    	</button>
                    </li>
                    <li>
                    	<button class="b" title="<?php echo $row['t_name_AR'];?>" onclick="displayArabicName(title,<?php echo $row['t_id'];?>)">
                    		<span style="color:	#2E8B57;font-size: 14px; position: relative;bottom: 4px;">
                    		 ع
                    		</span>
                    	</button>
                    </li>
                    <li>
                    	<button class="b" style="color:#CD5C5C;" title="<?php echo $row['t_phone'];?>" onclick="displayPhone(title,<?php echo $row['t_id'];?>)">
                    		<i class="icon-phone">
                    		</i>
                    	</button>
                    </li> 
                  </ul>
                </div>
              </div>
            </div>
<?php
$count++;
if($count%2==0){
echo '<div class="clearfix visible-sm-block visible-xs-block">';
echo '</div>';
}
if($count%4==0){
  echo '</div>';
  echo '<div class="row">';
}
} 
?>



            <div class="clearfix visible-sm-block visible-xs-block"></div>




          </div>

        </div>
      </section>
      
      <?php
          include "footer.html";
          ?>

    </div>
    <!-- END wrapper -->
    
    <script>
      var checkEmail = [];
      var checkName = [];
      var checkPhone = [];
    function displayEmail(email,id){
      if(checkEmail[id] == 0 || checkEmail[id] == null ){
        checkEmail[id] = 1;
      document.getElementById("info"+id+"").innerHTML = email;
      }
    else{
      checkEmail[id] = 0;
      checkName[id] = 0;
      checkPhone[id] = 0;
      document.getElementById("info"+id+"").innerHTML = "";
    }
    }
    function displayArabicName(name,id){
      if(checkName[id] == 0 || checkName[id] == null ){
        checkName[id] = 1;
      document.getElementById("info"+id+"").innerHTML = name;
      }
    else{
      checkEmail[id] = 0;
      checkName[id] = 0;
      checkPhone[id] = 0;
      document.getElementById("info"+id+"").innerHTML = "";
    }
    }
    function displayPhone(phone,id){
      if(checkPhone[id] == 0 || checkPhone[id] == null ){
        checkPhone[id] = 1;
      document.getElementById("info"+id+"").innerHTML = phone;
    }
    else{
      checkEmail[id] = 0;
      checkName[id] = 0;
      checkPhone[id] = 0;
      document.getElementById("info"+id+"").innerHTML = "";
    }
  }
    </script>
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
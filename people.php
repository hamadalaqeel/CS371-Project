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
    <link rel="stylesheet" href="CSS1//custom.css">
    <ling rel="stylesheet" href="CSS1/people.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <!-- The NAVBAR -->
      <?php
      include 'navbar.php';
      ?>
     <script>
      //MAKING THE CURRENT PAGE ELEMENT ACTIVE IN THE NAVBAR
      document.getElementById("people").classList.add("active");
     </script>
      <!-- End of NAVBAR -->


<?php

      include 'include/dbconfig.php';

  $conn->query("SET NAMES utf8");
  $sql = ("SELECT * FROM committees WHERE id IN (1,2,3,4,5,6)");
  $result = $conn->query($sql);
  $count = 0;


?>





      <section class="probootstrap-section">
        <div class="container">


          <h2 class='topic'>PSU-ACM OFFICERS</h2>
          <div class="row">

<?php

  foreach ($result as $row) {
?>

            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="<?php echo $row['image'];?>" alt="" class="img-responsive">
                </figure>
                <div class="text">
                  <h3 id="name"><?php echo $row['name'];?></h3>
                  <p><?php echo $row['position'];?></p>
                               <p id="info<?php echo $row['id'];?>">
                  </p>
                  
 	<button class="b" style="color:#1E90FF" title="<?php echo $row['email'];?>" onclick="displayEmail(title,<?php echo $row['id'];?>)">
                    		<i class="icon-email">	
                    		</i>
                    	</button>
                     	<button class="b" style="color:#CD5C5C;" title="<?php echo $row['id'];?>" onclick="displayPhone(title,<?php echo $row['id'];?>)">
                    		<i class="glyphicon glyphicon-barcode">
                    		</i>
                    	</button>
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

            <?php
            $conn->query("SET NAMES utf8");
            $sql = ("SELECT * FROM `committees` WHERE position LIKE '%Committee%' ORDER BY position");
            $result = $conn->query($sql);
            $count = 0;


             ?>
            

        <div class="container">
 <h2 class='topic'>PSU-ACM Committees' Members</h2>

          <div class="row">

<?php

  foreach ($result as $row) {
?>

            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="<?php echo $row['image'];?>" alt="" class="img-responsive">
                </figure>
                <div class="text">
                  <h3 id="name"><?php echo $row['name'];?></h3>
                  <p><?php echo $row['position'];?></p>
                   <p id="info<?php echo $row['id'];?>">
                  </p>
                  
 	<button class="b" style="color:#1E90FF" title="<?php echo $row['email'];?>" onclick="displayEmail(title,<?php echo $row['id'];?>)">
                    		<i class="icon-email">	
                    		</i>
                    	</button>
                     	<button class="b" style="color:#CD5C5C;" title="<?php echo $row['id'];?>" onclick="displayPhone(title,<?php echo $row['id'];?>)">
                    		<i class="glyphicon glyphicon-barcode">
                    		</i>
                    	</button>

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
          include "footer.php";
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

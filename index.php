<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!-- notification message -->
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
        crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="dashboard.css">
    <script src="https://kit.fontawesome.com/9ad9a54963.js"
            crossorigin="anonymous"></script>
</head>
<body>

<nav class="navigation" >
         
          <div class="topnav">
          <a class="active" href="index.php">HOME</a>
          <a href="order.php">PLACE ORDER</a>
          <a href="payments.php">PAY</a>
          <a href="map.php">MAPS</a>
          <a href="refer.php">REFER & SURVEY</a>
          
           </div>
          <div class="profile-icon-menu">
        <a class="icons" href="profile.php"><i class="far fa-user-circle fa-4x"></i></a><br>
        <?php  if (isset($_SESSION['username'])) : ?>
            <p class="headeruser"> <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p> <a href="index.php?logout='1'" style="color: white;">logout</a> </p>
            
        <?php endif ?>
        </div>
        </nav>


</nav>
<div class="stylecontent">
<div class="about-us">
 <h1>About us</h1>
 <p> Do you ever need to throw away unnecessary electronics, old furniture or clothes, but without the convenience of bringing it by yourself to a collection center? Would you like to order waste pick up the same way you order Uber or Lyft? First the app let you to choose what type of waste you want to get rid of, the size of this waste and location. The website will have fixed price charges as per the size of waste and send your query to the waste company.
    </p>
</div>
</div>
<footer >
    <h1 class="contact-head">contact us</h1>
    <ul class="">
        <a  href="sms:+254792919411">send sms</a></li>
        <a href="mailto:clanoptimism@gmail.com">Email </a>
    </ul>
    <div  class="">
      <a class="bg" href="https://www.facebook.com/profile.php?id=100009118189563"><i class="fab fa-facebook"></i></a>
      <a class="bg" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
      
      <a class="bg" href="https://twitter.com/" ><i class="fab fa-twitter-square"></i></a>
      </div>
      

    <p> Clan Optimism All right Reserved. ©2021 Nairobi, KENYA</p>
</footer>
	

  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    




</body>
</html>
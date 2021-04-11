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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="map.css">
    
        <script src="https://kit.fontawesome.com/9ad9a54963.js"
        crossorigin="anonymous"></script>
    <title>Maps</title>
</head>
<body >
    
<nav class="navigation" >
         
          <div class="topnav">
          <a href="index.php">HOME</a>
          <a href="order.php">PLACE ORDER</a>
          <a href="payments.php">PAY</a>
          <a class="active" href="map.php">MAPS</a>
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
<div class="stylecontent">
<div class="maps">
<div class="dumps">
<p>wish to deliver your waste at your own cost to our nearest dumps?</p>
<h1>Dumps Stations</h1>
  <ul>Ruiru town</ul>
  <ul>Westlands</ul>
  <ul>Kisumu </ul>
  <ul>Bomet town</ul>
  <ul>Machakos town</ul>
  <ul>Busia town</ul>
</div>
<div class="mapouter">
    <div id="map" class="gmap_canvas">
        <iframe width="100%" height="100%" frameborder="0" id="gmap_canvas" src="https://maps.google.com/maps?q=23.793630%2C%2090.406998&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div>

</div>
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
</body>
</html>
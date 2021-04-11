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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="refer.css">
    <script src="https://kit.fontawesome.com/9ad9a54963.js"
            crossorigin="anonymous"></script>
    <title>REFER</title>
</head>
<body >
<nav class="navigation" >
         
         <div class="topnav">
         <a href="index.php">HOME</a>
         <a href="order.php">PLACE ORDER</a>
         <a href="payments.php">PAY</a>
         <a href="map.php">MAPS</a>
         <a class="active" href="refer.php">REFER & SURVEY</a>
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
 <div class="contents">
    <div class="icons">
    <a  href=""><i class="far fa-user-circle fa-4x"></i></a><br>
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p class="headeruser"> <strong><?php echo $_SESSION['username']; ?></strong></p>
    	
    <?php endif ?>
    </div>
    <p class="friends">refer to friends</p>
    <div class="icons" >
      <a class="bg" href="http://www.facebook.com/sharer.php?u=https://wastemanagementke.000webhostapp.com/customers&t=hey am using WASTE MANAGEMENT WEB APP i love it.Check it out>"><i class="fab fa-facebook"></i></a>
      <a class="bg" href="whatsapp://send?text=hey am using WASTE MANAGEMENT WEB APP i love it.Check it out & url=https://wastemanagementke.000webhostapp.com/customers"><i class="fab fa-whatsapp"></i></a>
      <a class="bg" href="http://twitter.com/share?text=hey am using WASTE MANAGEMENT WEB APP i love it.Check it out&url=https://wastemanagementke.000webhostapp.com/customers" ><i class="fab fa-twitter-square"></i></a>
    </div>
    <div>
      <h1>Take Survey</h1>
      
      <form method="post" action="survey.php" class="sign-up" >
        
       <label ><b>What's your Experience So far with our website?</b></label><br>
  	   <textarea placeholder="What's your Experience So far with our website?" type="text" name="Experience_with_website" required></textarea><br>
       <label ><b>What's your Experience So far with our Services?</b></label><br>
  	   <textarea placeholder="What's your Experience So far with our Services?" type="text" name="Experience_with_services" required></textarea><br>
       <label ><b>What area of Service do you want us to improve on?</b></label><br>
  	   <textarea placeholder="What area of Service do you want us to improve on?" type="text" name="Area_to_improve" required></textarea><br>
        
        
        <button type="submit" class="login-b" >send</button>
        


    </form>


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
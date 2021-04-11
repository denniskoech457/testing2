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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>services payment</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
        crossorigin="anonymous">
<link rel="stylesheet"type="text/css" href="payment.css"/>
<script src="https://kit.fontawesome.com/9ad9a54963.js"
            crossorigin="anonymous"></script>

</head>

<body>

<nav class="navigation" >
         
         <div class="topnav">
         <a href="index.php">HOME</a>
         <a href="order.php">PLACE ORDER</a>
         <a class="active" href="payments.php">PAY</a>
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
 <div class="stylecontent">
	<div class="contents">
	
	
	
	<strong>Pay</strong>
	
	
	
	
	
	
	</button>
	
	<a href="#"><p id="para"><strong>Pay History</strong></p></a>
	<br />
	<br />
	<h3><strong>Amount To Pay</strong></h3>
	<form post="#" get="#">
	
	Ksh.<input  type="number" name="cash"placeholder="Enter amount in figures"required min="1500"max="300000"/><br /><br />
	<strong>Payment Option</strong>
	<br />
	<br />
	<select>
	<option class="pay"><strong>Paypal</strong></option>
	<option class="pesa"><strong>M-pesa</strong></option>
	</select>
	<br />
	<br />
	<button class="button2">
	<strong>Pay</strong>
	
	
	
	
	
	
	</button>
	
		</form>
		<br />
	<br />
	<br />
	<br />
	<br />
	<br />

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

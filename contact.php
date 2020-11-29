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
<html>	
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link href="css/style_prof.css" rel='stylesheet' type='text/css' />
<link href="css1.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <br>
<div class="content" style="width:100%; background-color:#333; opacity:0.9;">
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
  	<div style="width:50%; float:right;"><gcse:search></gcse:search></div>
<div style="width:50%">
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="color:white;">Logged in as, <strong><?php echo $_SESSION['username']; ?></strong></p>
    </div>	<script>
  (function() {
    var cx = '013219758872234400472:ngql8mwf_wy';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

</div><br><br>
<div class="hero-image" style="width:100%;">
	<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

  <div class="hero-text" style="width:100%;">
    <h1 style="font-size:50px;width:100%;">KIDS CLUB</h1>
    <p>LEARN-PLAY-GROW</p>
</div>
</div>
<div class="topnav" id="myTopnav">
<div class="container" style="width:100%;">
    <div class="topnav" style="width:100%;">
      <a href="index.php" class="links">Home</a>
	  <div class="dropdown">
   <a class="links" style="text-align:center;">Services<i class="fa fa-caret-down"></i></a>
    <div class="dropdown-content">
      <a href="1.php" class="active">Health</a>
      <a href="2.php">Games</a>
      <a href="3.php">Education</a>
	  <a href="4.php">Art</a>
    </div>
  </div> 
	  <a class="fa fa-user-circle-o links af" href="profile.php">Profile</a>
	  <a href="contact.php" class="links">Contact Us</a>
	  <a href="index.php?logout='1'" style="color: red; float:right;">logout</a>
	  <a href="javascript:void(0);" class="icon links" onclick="myFunction()"><i class="fa fa-bars"></i></a>
	  <?php endif ?>
    </div>
	</div>
	</div>
	<br>
<div style="border:5px solid; background-color:#333; opacity:0.9; color:white; text-align:center;">
<h1>Contact Our </h1> 
    <h2>Developers</h2>
    <h5>Shivani Anil Nevgi</h5>
    <h5>Email: shivaninevgi15.sn@gmail.com<h5>
    <h5>Sitesh Maruti Sawant</h5>
    <h5>Email: sawantsitesh21.ss@gmail.com<h5>
    <h5>Pratiksha Atmaram Sharma</h5>
    <h5>Email: sharmapratiksha446@gmail.com<h5>
   
</div>
        

 
</body>
</html>
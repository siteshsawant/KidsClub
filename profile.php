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
	  <a href="index.php?logout='1'" style="color: red; float:right;">logout</a>
	  <a href="javascript:void(0);" class="icon links" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
	</div>
	</div>
	<br>

        
		<div class="center-container">
		
			<div class="w3ls_banner_info">
	
<?php
require 'as.php';
$us=$_SESSION['username'];
$user_check_query = "SELECT * FROM user WHERE username='$us'";
  $result = mysqli_query($conn, $user_check_query);
  $row = mysqli_fetch_assoc($result)
?>
 <?php endif ?>
			<div class="profile">
	<div class="wrap">
		<div class="profile-main">
			<div class="profile-pic wthree">
				<img src="log.jpg" alt="" >
				<h3><?php echo "  ".$row['firstname']."  "; ?><?php echo "  ".$row['lastname']."  "; ?></h3>
                <div class="w3ls-agile-left">
				
				<ul class="address">
									<li style="border:2px solid;">
										<ul class="address-text">
											<li  class="x"><h3><b>Username :</b></h3></li>
											<li  class="y"><h5><?php echo "  ".$row['username']."  "; ?></h5></li>
											<li> <span class="w3"></span></li>
										</ul>
									</li>
									
									<li>
										<ul class="address-text">
											<li class="x"><h3><b>E-MAIL :</b></h3></li>
											<li class="y"><h5> <?php echo "  ".$row['email']."  "; ?></h5></li>
											<li> <span class="w3"></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li class="x"><h3><b>First Name :</b></h3></li>
											<li class="y"><h5> <?php echo "  ".$row['firstname']."  "; ?></h5></li>
											<li> <span class="w3"></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li class="x"><h3><b>Last Name :</b></h3></li>
											<li class="y"><h5> <?php echo "  ".$row['lastname']."  "; ?></h5></li>
											<li> <span class="w3"></span></li>
										</ul>
									</li>
									
									
				</ul>
<div class="clear"></div>
			</div>
			
			</div>
			
			<div class="profile-ser">
	<h4 >MY Interest</h4>
	<div class="awards-agileinfo  w3ls-section">
		<div class="awardsw3-agileits banner-agileinfo">
			<div class="container">
				<div class="w3ls_banner_bottom_grids">
					<div class=" w3ls_about_guage">
						<div class="demo">
						
							  <div class="demo-1" data-percent="70"></div>
							  <h4>Games</h4>
						</div>
					</div>
					<div class=" w3ls_about_guage">
					<div class="demo">
					
						  <div class="demo-1" data-percent="75"></div>
						  <h4>Art</h4>
					</div>
					</div>
					<div class=" w3ls_about_guage">
					<div class="demo">
					
						  <div class="demo-1" data-percent="85"></div>
						  <h4>Edution</h4>
					</div>
					</div>
					<div class="clear"> </div>
				</div> 
			</div>
		</div>
		
	</div>
	<!-- //Awards-->

			</div>
		</div>
	</div>
</div>
			
		</div>
	</div>
	<!-- //main -->

<script  src="js/jquery.min.v3.js"></script>
		<script src="js/jquery.circlechart.js"></script>
<script>
$('.demo-1').percentcircle();

$('.demo-2').percentcircle({
animate : false,
diameter : 100,
guage: 3,
coverBg: '#000',
bgColor: '#ff0000',
fillColor: '#000',
percentSize: '50px',
percentWeight: 'normal'
});
		
			
	</script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	

 
</body>
</html>
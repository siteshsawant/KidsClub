<html>
<head>
<title>KIDS CLUB--LOGIN PAGE</title>
<link rel="stylesheet" type="text/css" href="css1.css">
<link rel="stylesheet" type="text/css" href="css/ind.css">
<link rel="stylesheet" type="text/css" href="css/form.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Quick Register Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
</head>
<body>
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
<div class="content">
  	<?php  if (!isset($_SESSION['username'])) : ?>
    	<marquee direction="Right"<strong><?php echo "You must log in first"; ?></strong></marquee>
    <?php endif ?>
</div>
<br>
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

<script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//vdo.ai/core/w3layouts/vdo.ai.js");
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
   <br>
   <div style="border:3px solid;text-align:center; background-color:white;opacity:0.9;">
       <a href="about.php" style="text-align:center;">Visiters Page</a>
   </div>
   <br>
    <div class="main2" style="background-color:#333; opacity:0.9;">
        <div class="signupform" style="width:100%">
	<div class="container">
		<div class="agile_info">
			<div class="w3_info">
				<h2>Register Here</h2>
                            <form action="action.php" method="post">
						    <div class="left">
							<label>Username</label>
							<div class="input-group">
								<span><i class="fa fa-user-o" aria-hidden="true"></i></span>
								<input type="text" placeholder="User Name" required="" name="username">
							</div>
						</div>
						<div class="left margin">
							<label>Email Address</label>
							<div class="input-group">
								<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
								<input type="text" placeholder="Email" required="" name="email"> 
							</div>
						</div>
						<div class="left">
							<label>First Name</label>
							<div class="input-group">
								<span><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="text" placeholder="First Name" required="" name="firstname"> 
							</div>
						</div>
						<div class="left margin">
							<label>Last Name</label>
							<div class="input-group">
								<span><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="text" placeholder="Last Name" required="" name="lastname"> 
							</div>
						</div>
						
						<div class="left">
							<label>Password</label>
							<div class="input-group">
								<span><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="Password" placeholder="Password1" required="" name="password">
							</div>
						</div>
						<div class="left margin">
						    <label>Confirm Password</label>
							<div class="input-group">
								<span><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="Password" placeholder="Password2" required="" name="password2">
							</div>
							</div>
							<div class="clear"></div> 
							<button class="btn btn-danger btn-block" type="submit" name="reg_user">Register Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button >                
					</form>
			</div>
			<div class="w3l_form">
				<div class="left_grid_info">
					<h3>Already Registered?</h3>
					<a href="#" class="btn" onclick="document.getElementById('id01').style.display='block'">Login <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="clear"></div>
			</div>
			
		</div>
	</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="action.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="log.jpg" alt="Avatar" class="avatar">
    </div>
<div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <button class="btn btn-danger" type="submit" name="login_user">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="content" style="font-size:13px;"> 
 Visit our <span style="text-decoration: underline;">Kids Club</span> for <span style="text-decoration: underline;">Playing</span>, 
 <span style="text-decoration: underline;">Learning</span> and <span style="text-decoration: underline;">Adventure</span>. This site contains <span style="text-decoration: underline;">Numbers of games, Learning Videos, Art & craft videos, as well as Meal helper.</span>. </div>

</body>
</html>
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
</div><!DOCTYPE html><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css1.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
    color:white;
}

/* Center website */
.main {
    max-width: 100%;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    height:500px;
    display: none; /* Hide all elements by default */
}
.content img{
height:300px;
border-radius: 50%;
border:5px solid;
color:blue;
text-align:center;
}
/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color:rgba(51, 51, 51, 0.6);
    padding: 10px;
}
/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>

<body>
   <div class="content" style="width:100%">
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
  	<div style="width:40%; float:right;"><gcse:search></gcse:search></div>
<div style="width:50%">
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
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

</div>
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
      <a href="1.php">Health</a>
      <a href="2.php" class="active">Games</a>
      <a href="3.php">Education</a>
	  <a href="4.php">Art</a>
    </div>
  </div> 
	  <a class="fa fa-user-circle-o links af" href="profile.php">Profile</a> 
	  <a href="contact.php" class="links">Contact Us</a>
	  <a href="index.php?logout='1'" style="color: red; float:right;">logout</a>
    <?php endif ?>
	  <a href="javascript:void(0);" class="icon links" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
	</div>
	</div>

<div class="main">
      
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('classic')"> Classic</button>
  <button class="btn" onclick="filterSelection('kids')"> Kids</button>
  <button class="btn" onclick="filterSelection('puzzle')"> Puzzle</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column puzzle">
    <div class="content">
       <a href="Games/2048-master/index.html"><img src="Games/2048-master/2048.png" alt="" style="width:100%"></a>
      <h4>Puzzle Game</h4>
    </div>
  </div>
  <div class="column classic">
    <div class="content">
    <a href="Games/snake.html"><img src="Games/snake.jpg" alt="" style="width:100%"></a>
      <h4>Snake Game</h4>
    </div>
  </div>
  <div class="column classic">
    <div class="content">
    <a href="Games/ball.html"><img src="Games/bricks1.png" alt="" style="width:100%"></a>
      <h4>Brick-Breaker</h4>
    </div>
  </div>
  
  <div class="column kids">
    <div class="content">
      <a href="Games/clumsybird/clumsybird.html"><img src="Games/clumsybird/clumsybird.png" alt="" style="width:100%"></a>
      <h4>Clumsy-Bird</h4>
    </div>
  </div>
  <div class="column ">
    <div class="content">
    <img src="/w3images/cars2.jpg" alt="Car" style="width:100%">
      <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column ">
    <div class="content">
    <img src="/w3images/cars3.jpg" alt="Car" style="width:100%">
      <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column">
    <div class="content">
      <img src="/w3images/people1.jpg" alt="Car" style="width:100%">
      <h4>Girl</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="/w3images/people2.jpg" alt="Car" style="width:100%">
      <h4>Man</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="/w3images/people3.jpg" alt="Car" style="width:100%">
      <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</div>
<div class="content" style="font-size:13px;"> 
 Visit our <span style="text-decoration: underline;">Kids Club</span> for <span style="text-decoration: underline;">Playing</span>, 
 <span style="text-decoration: underline;">Learning</span> and <span style="text-decoration: underline;">Adventure</span>. This site contains <span style="text-decoration: underline;">Numbers of games, Learning Videos, Art & craft videos, as well as Meal helper.</span>. </div>

</body>


</html>

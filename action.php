<?php
session_start();
$sn = "localhost";
$un = "id7306016_sitesh";
$pass = "sawant";
$db = "id7306016_userdata";
// Create connection
$conn = mysqli_connect($sn, $un, $pass, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['login_user'])){
  $usernames = $_POST['uname'];
  $passwords = $_POST['psw'];

  if (empty($usernames)) {
  	echo "Username is required";
  }
  if (empty($passwords)) {
  	echo "Password is required";
  }

 
  	$passwordss = md5($passwords);
  	$query = "SELECT * FROM user WHERE username='$usernames' AND password='$passwordss'";
  	$results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $usernames;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		echo "Wrong username/password combination";
  	}
  
}
if (isset($_POST['reg_user'])) {
$username=$_POST['username'];
$email=$_POST['email'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$password2=$_POST['password2'];

if (empty($username)) { array_push($errors, "Username is required"); }
if (empty($email)) { array_push($errors, "Email is required"); }
if (empty($firstname)) { array_push($errors, "Password is required"); }
if (empty($lastname)) { array_push($errors, "Password is required"); }
if (empty($password)) { array_push($errors, "Password is required"); }
if ($password != $password2) {array_push($errors, "The two passwords do not match");}



$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  if ($result) { // if user exists
    if ($result['username'] === $username) {
      echo "Username already exists";
    }

    if ($user['email'] === $email) {
  echo "email already exists";
    }
  }

  // Finally, register user if there are no errors in the form

  	$password1 = md5($password);//encrypt the password before saving in the database

$sql = "INSERT INTO user (username,email,firstname,lastname,password)
VALUES ('$_POST[username]','$_POST[email]','$_POST[firstname]','$_POST[lastname]','$password1')";
mysqli_query($conn, $sql);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  
}

mysqli_close($conn);
?>
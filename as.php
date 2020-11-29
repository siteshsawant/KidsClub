<?php
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
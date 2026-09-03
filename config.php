<?php
// Reads Railway's auto-injected MySQL vars first, falls back to local XAMPP defaults.
$host = getenv('MYSQLHOST') ?: 'localhost';
$user = getenv('MYSQLUSER') ?: 'root';
$pass = getenv('MYSQLPASSWORD') ?: '';
$db   = getenv('MYSQLDATABASE') ?: 'yatra_vargani';
$port = getenv('MYSQLPORT') ?: 3306;

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if(!$conn){
  die("Database Connection Failed: " . mysqli_connect_error());
}
?>
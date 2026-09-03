<?php
session_start();
include 'config.php';

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($conn,"SELECT * FROM users 
  WHERE username='$username' AND password='$password'");

  if(mysqli_num_rows($result) > 0){
    $_SESSION['user'] = $username;
    header("Location: dashboard.php");
  } else {
    echo "Invalid Login!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>

<h2>Admin Login</h2>

<form method="post">
Username: <input type="text" name="username" required><br><br>
Password: <input type="password" name="password" required><br><br>
<button type="submit" name="login">Login</button>
</form>

</body>
</html>
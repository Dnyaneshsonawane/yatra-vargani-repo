<?php
include 'config.php';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $amount = $_POST['amount'];

  mysqli_query($conn,"INSERT INTO vargani(name,phone,amount)
  VALUES('$name','$phone','$amount')");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Vargani</title>
</head>
<body>

<h2>Add Vargani</h2>

<form method="post">
Name: <input type="text" name="name" required><br><br>
Phone: <input type="text" name="phone" required><br><br>
Amount: <input type="number" name="amount" required><br><br>
<button type="submit" name="submit">Save</button>
</form>

<br>
<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>
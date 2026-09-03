<?php
include 'config.php';

if(isset($_POST['submit'])){
  $title = $_POST['reason'];
  $amount = $_POST['amount'];

  mysqli_query($conn,"INSERT INTO expenses(title,amount)
  VALUES('$title','$amount')");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Expense</title>
</head>
<body>

<h2>Add Expense</h2>

<form method="post">
Reason: <input type="text" name="reason" required><br><br>
Amount: <input type="number" name="amount" required><br><br>
<button type="submit" name="submit">Save</button>
</form>

<br>
<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>
<?php
include "config.php";
$result = mysqli_query($conn,"SELECT * FROM expenses ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Expense List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="font-family:Arial;">

<h2 style="text-align:center;">Expense List</h2>

<table border="1" cellpadding="10" cellspacing="0" style="margin:auto;">
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Amount</th>
    <th>Date</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td>₹ <?php echo $row['amount']; ?></td>
    <td><?php echo $row['date']; ?></td>
</tr>
<?php } ?>

</table>

<br>
<div style="text-align:center;">
    <a href="dashboard.php">Back to Dashboard</a>
</div>

</body>
</html>
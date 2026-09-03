<?php
include "config.php";
$result = mysqli_query($conn,"SELECT * FROM vargani ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vargani List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="font-family:Arial;">

<h2 style="text-align:center;">Vargani List</h2>

<table border="1" cellpadding="10" cellspacing="0" style="margin:auto;">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Amount</th>
    <th>Date</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
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
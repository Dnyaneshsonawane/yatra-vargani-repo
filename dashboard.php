<?php
include "config.php";

$total_vargani = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(amount) as total FROM vargani"))['total'];
$total_expense = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(amount) as total FROM expenses"))['total'];

$balance = $total_vargani - $total_expense;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Temple Vargani Dashboard</title>
    <style>
        body{
            margin:0;
            font-family: 'Segoe UI', sans-serif;
            background: url('https://www.bing.com/th/id/OIP.xUy2hf5ZItHS4FmkMTeOOQHaEo?w=254&h=180&c=8&rs=1&qlt=90&o=6&cb=defcachec1&dpr=1.3&pid=3.1&rm=2') no-repeat center center fixed;


 
            background-size: cover;
        }

        .overlay{
            background: rgba(0,0,0,0.6);
            min-height:100vh;
            padding-bottom:40px;
        }

        .header{
            text-align:center;
            padding:20px;
            color:white;
            font-size:28px;
            font-weight:bold;
        }

        .cards{
            display:flex;
            justify-content:space-around;
            margin-top:30px;
        }

        .card{
            width:250px;
            padding:25px;
            border-radius:15px;
            color:white;
            text-align:center;
            box-shadow:0 8px 20px rgba(0,0,0,0.5);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-10px);
        }

        .green{ background: linear-gradient(45deg,#11998e,#38ef7d); }
        .red{ background: linear-gradient(45deg,#ff416c,#ff4b2b); }
        .blue{ background: linear-gradient(45deg,#396afc,#2948ff); }

        .buttons{
            text-align:center;
            margin-top:40px;
        }

        .btn{
            padding:12px 22px;
            border-radius:30px;
            text-decoration:none;
            color:white;
            margin:8px;
            display:inline-block;
            font-weight:bold;
            transition:0.3s;
        }

        .btn:hover{
            opacity:0.8;
            transform:scale(1.05);
        }

        .btn-green{ background:#27ae60; }
        .btn-red{ background:#e74c3c; }
        .btn-blue{ background:#3498db; }
        .btn-purple{ background:#8e44ad; }
        .btn-black{ background:#2c3e50; }

    </style>
</head>

<body>

<div class="overlay">

<div class="header">
    🛕 Temple Vargani Management
</div>

<div class="cards">

    <div class="card green">
        <h3>Total Vargani</h3>
        <h1>₹ <?php echo $total_vargani ? $total_vargani : 0; ?></h1>
    </div>

    <div class="card red">
        <h3>Total Expense</h3>
        <h1>₹ <?php echo $total_expense ? $total_expense : 0; ?></h1>
    </div>

    <div class="card blue">
        <h3>Balance</h3>
        <h1>₹ <?php echo $balance ? $balance : 0; ?></h1>
    </div>

</div>

<div class="buttons">
    <a href="add_vargani.php" class="btn btn-green">Add Vargani</a>
    <a href="add_expense.php" class="btn btn-red">Add Expense</a>
    <a href="view_vargani.php" class="btn btn-blue">View Vargani</a>
    <a href="view_expense.php" class="btn btn-purple">View Expense</a>
    <a href="logout.php" class="btn btn-black">Logout</a>
</div>

</div>

</body>
</html>

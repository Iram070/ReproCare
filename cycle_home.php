<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>FemVita | Cycle Home</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #f6c1cc, #d8a7b1);
        }

        .container {
            background: #f8f3ef;
            width: 380px;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        h1 {
            margin-bottom: 5px;
            color: #2f2f2f;
        }

        p {
            color: #555;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .btn {
            display: block;
            text-decoration: none;
            background: #2f2f2f;
            color: white;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 15px;
        }

        .btn:hover {
            opacity: 0.85;
        }

        .logout {
            background: #b76e79;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>ReproCare</h1>
    <p>Welcome to your cycle tracking dashboard</p>

    <a href="cycle_tracking.php" class="btn">Track My Cycle</a>
    <a href="logout.php" class="btn logout">Logout</a>
</div>

</body>
</html>
<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

// Get the last period info from GET parameters (passed from calendar.php)
$last_period = isset($_GET['last_period_date']) ? $_GET['last_period_date'] : '';
$cycle_length = isset($_GET['cycle_length']) ? $_GET['cycle_length'] : '';
$period_duration = isset($_GET['period_duration']) ? $_GET['period_duration'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ReproCare | General Health Tips</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f6c1cc, #d8a7b1);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .tips-container {
            background: #f2f2f2;
            width: 90%;
            max-width: 950px;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
        }

        h1 {
            margin-bottom: 40px;
            color: #2f2f2f;
            font-size: 28px;
        }

        .tips-sections {
            display: flex;
            justify-content: space-around;
            gap: 40px;
            flex-wrap: wrap;
        }

        .tip-box a {
            text-decoration: none;
            color: black;
        }

        .tip-box {
            text-align: center;
            transition: transform 0.3s;
        }

        .tip-box:hover {
            transform: scale(1.05);
        }

        .tip-box img {
            width: 170px;
            height: 170px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .tip-box h3 {
            font-size: 20px;
            margin: 0;
            letter-spacing: 1px;
        }

        .back-btn {
            margin-top: 40px;
            padding: 10px 25px;
            background: #2f2f2f;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .back-btn:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>

<div class="tips-container">

    <h1>GENERAL HEALTH TIPS</h1>

    <div class="tips-sections">

        <!-- EXERCISE BUTTON -->
        <div class="tip-box">
            <a href="exercise.php">
                <img src="images/exercise.jpg?v=3" alt="Exercise">
                <h3>EXERCISE</h3>
            </a>
        </div>

        <!-- DIET BUTTON -->
        <div class="tip-box">
            <a href="diet.php">
                <img src="images/diet.jpg?v=3" alt="Diet">
                <h3>DIET</h3>
            </a>
        </div>

        <!-- HYGIENE BUTTON -->
        <div class="tip-box">
            <a href="hygiene.php">
                <img src="images/hygiene.jpg?v=3" alt="Hygiene">
                <h3>HYGIENE</h3>
            </a>
        </div>

    </div>

    <!-- Back Button that remembers user cycle info -->
    <button class="back-btn"
    onclick="location.href='calendar.php?last_period_date=<?= $last_period ?>&cycle_length=<?= $cycle_length ?>&period_duration=<?= $period_duration ?>'">
    Back to Calendar
</button>

</div>

</body>
</html>
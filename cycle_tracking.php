<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ReproCare | Cycle Tracking</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f6c1cc, #d8a7b1);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: #f2f2f2;
            width: 420px;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
        }

        h1 {
            margin-bottom: 10px;
            color: #2f2f2f;
        }

        .subtitle {
            color: #555;
            margin-bottom: 25px;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-top: 15px;
            font-size: 14px;
            color: #2f2f2f;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 6px;
            border: 1px solid #000;
            font-size: 14px;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            background: #2f2f2f;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>My Cycle Tracking</h1>
        <p class="subtitle">Track and understand your menstrual cycle</p>

        <!-- ONLY CHANGE: action + correct input names -->
       <form action="save_cycle.php" method="POST">

<label>Last Period Date</label>
<input type="date" name="last_period_date" required>

<label>Cycle Length</label>
<input type="number" name="cycle_length" required>

<label>Period Duration</label>
<input type="number" name="period_duration" required>

<label>Flow Type</label>
<select name="flow_type">
<option value="mild">Mild</option>
<option value="moderate">Moderate</option>
<option value="heavy">Heavy</option>
</select>

<label>Pain Level</label>
<select name="pain_level">
<option value="low">Low</option>
<option value="medium">Medium</option>
<option value="high">High</option>
</select>

<button type="submit">Track Period</button>

</form>
    </div>

</body>
</html>
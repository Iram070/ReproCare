<?php
$resultMessage = "";
$lineColor = "";
$showButtons = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $totalSelected = 0;

    foreach (['cycle','flow','symptoms','lifestyle'] as $group) {
        if (!empty($_POST[$group])) {
            $totalSelected += count($_POST[$group]);
        }
    }

    if ($totalSelected == 0) {
        $resultMessage = "Please select at least one option.";
        $lineColor = "#ff4d4d";
    } 
    elseif ($totalSelected <= 3) {
        $resultMessage = "Your cycle appears mildly irregular.";
        $lineColor = "#28a745";
        $showButtons = true;
    } 
    elseif ($totalSelected <= 7) {
        $resultMessage = "Your cycle shows moderate irregularity.";
        $lineColor = "#ffc107";
        $showButtons = true;
    } 
    else {
        $resultMessage = "Your cycle indicates high risk. Please consult a doctor.";
        $lineColor = "#dc3545";
        $showButtons = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Irregular Cycle Check</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #fbc2eb, #fcd1d1);
    margin: 0;
    padding: 20px;
}

h2 {
    text-align: center;
}

.container {
    max-width: 1100px;
    margin: auto;
}

.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 30px;
}

.card {
    background: #fff8dc;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

label {
    display: block;
    margin: 8px 0;
    font-size: 14px;
}

.submit-btn {
    display: block;
    margin: 30px auto;
    padding: 12px 30px;
    border-radius: 25px;
    border: none;
    background: #000;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

.submit-btn:hover {
    background: #444;
    transform: scale(1.05);
}

/* RESULT BOX */

.result-box {
    background: white;
    margin: 40px auto;
    padding: 25px;
    border-radius: 15px;
    max-width: 600px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    animation: fadeIn 0.6s ease-in-out;
}

.line {
    height: 6px;
    width: 0%;
    margin-bottom: 15px;
    border-radius: 10px;
    animation: growLine 1s forwards;
}

@keyframes growLine {
    from { width: 0%; }
    to { width: 100%; }
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.risk-buttons button {
    margin: 8px;
    padding: 10px 20px;
    border-radius: 20px;
    border: none;
    cursor: pointer;
    background: #333;
    color: white;
    transition: 0.3s;
}

.risk-buttons button:hover {
    background: #555;
    transform: scale(1.05);
}

</style>
</head>
<body>

<div class="container">

<h2>WHY YOUR CYCLE SEEMS IRREGULAR</h2>

<form method="POST">

<div class="grid">

<div class="card">
<h3>1. Cycle Changes</h3>
<label><input type="checkbox" name="cycle[]"> Different dates every month</label>
<label><input type="checkbox" name="cycle[]"> Skip periods sometimes</label>
<label><input type="checkbox" name="cycle[]"> Longer than 35 days</label>
<label><input type="checkbox" name="cycle[]"> Shorter than 21 days</label>
</div>

<div class="card">
<h3>2. Bleeding Flow</h3>
<label><input type="checkbox" name="flow[]"> Very heavy bleeding</label>
<label><input type="checkbox" name="flow[]"> Very light bleeding</label>
<label><input type="checkbox" name="flow[]"> Lasts more than 7 days</label>
<label><input type="checkbox" name="flow[]"> Spotting between periods</label>
</div>

<div class="card">
<h3>3. Symptoms</h3>
<label><input type="checkbox" name="symptoms[]"> Severe cramps</label>
<label><input type="checkbox" name="symptoms[]"> Mood swings</label>
<label><input type="checkbox" name="symptoms[]"> Acne before periods</label>
<label><input type="checkbox" name="symptoms[]"> Extreme fatigue</label>
</div>

<div class="card">
<h3>4. Lifestyle Factors</h3>
<label><input type="checkbox" name="lifestyle[]"> High stress</label>
<label><input type="checkbox" name="lifestyle[]"> Irregular sleep</label>
<label><input type="checkbox" name="lifestyle[]"> Lack of exercise</label>
<label><input type="checkbox" name="lifestyle[]"> Poor diet habits</label>
</div>

</div>

<button type="submit" class="submit-btn">SUBMIT</button>
</form>

<?php if (!empty($resultMessage)) { ?>
<div class="result-box">
    <div class="line" style="background: <?php echo $lineColor; ?>;"></div>
    <h3><?php echo $resultMessage; ?></h3>

    <?php if ($showButtons) { ?>
    <div class="risk-buttons">
        <button onclick="window.location.href='mild.php'">MILD</button>
        <button onclick="window.location.href='moderate.php'">MODERATE</button>
        <button onclick="window.location.href='highrisk.php'">HIGH RISK</button>
    </div>
    <?php } ?>
</div>
<?php } ?>

</div>

</body>
</html>
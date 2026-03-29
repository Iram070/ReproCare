<?php  
session_start();
include("db.php");

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

/* ========================
   STEP 1: GET PARAMETERS
======================== */
$last_period = isset($_GET['last_period_date']) && $_GET['last_period_date'] != '' ? $_GET['last_period_date'] : null;
$cycle_length = isset($_GET['cycle_length']) && $_GET['cycle_length'] != '' ? $_GET['cycle_length'] : null;
$period_duration = isset($_GET['period_duration']) && $_GET['period_duration'] != '' ? $_GET['period_duration'] : null;

if(!$last_period || !$cycle_length || !$period_duration){
    // Fetch latest from DB if any GET param missing
   $query = "SELECT * FROM cycle_data 
WHERE user_id='$user_id'
ORDER BY id DESC
LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $last_period = $row['last_period_date'];
        $cycle_length = $row['cycle_length'];
        $period_duration = $row['period_duration'];
    }else{
        // fallback default values
        $last_period = date('Y-m-d');
        $cycle_length = 28;
        $period_duration = 5;
    }
}

$start = strtotime($last_period);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ReproCare | Your Cycle Calendar</title>

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

.calendar-container {
    background: #f2f2f2;
    width: 90%;
    max-width: 900px;
    padding: 30px;
    border-radius: 14px;
}

h1 {
    text-align: center;
    margin-bottom: 25px;
    color: #2f2f2f;
}

.calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 12px;
}

.day {
    padding: 14px 10px;
    border-radius: 10px;
    text-align: center;
    font-size: 14px;
    color: #2f2f2f;
    background: #ffffff;
}

.period { background: #e75480; color: white; }
.pre-period { background: #f7b7a3; }
.post-period { background: #d6b3e6; }
.ovulation { background: #9fd9c5; }

.save-section {
    text-align: center;
    margin-top: 30px;
}

.save-btn {
    padding: 12px 26px;
    background: #2f2f2f;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    cursor: pointer;
}

.save-msg {
    margin-top: 12px;
    display: none;
    font-weight: bold;
}

.legend {
    display: flex;
    justify-content: center;
    gap: 18px;
    margin-top: 25px;
    flex-wrap: wrap;
    font-size: 13px;
}

.legend span {
    display: flex;
    align-items: center;
    gap: 6px;
}

.dot {
    width: 14px;
    height: 14px;
    border-radius: 50%;
}

.status-section {
    display: flex;
    justify-content: space-between;
    margin-top: 35px;
    text-align: center;
}

.status-box {
    width: 48%;
}

.status-btn {
    padding: 10px 18px;
    background: #444;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}
</style>
</head>

<body>

<div class="calendar-container">
<h1>Your Cycle Calendar</h1>

<div class="calendar-grid">

<?php
for($i=0; $i<$cycle_length; $i++){
    $current_day = strtotime("+$i days", $start);
    $date_format = date("d M", $current_day);

    $class = "";

    // PERIOD DAYS
    if($i < $period_duration){
        $class = "period";
    }
    // OVULATION (middle 5 days)
    elseif($i >= ($cycle_length/2 - 2) && $i <= ($cycle_length/2 + 2)){
        $class = "ovulation";
    }
    // PRE PERIOD (3 days before next cycle)
    elseif($i >= $cycle_length - 3){
        $class = "pre-period";
    }
    // POST PERIOD (3 days after period)
    elseif($i >= $period_duration && $i <= $period_duration + 3){
        $class = "post-period";
    }

    echo "<div class='day $class'>$date_format</div>";
}
?>

</div>

<div class="save-section">
<button class="save-btn" id="saveBtn">Save My Cycle</button>
<div class="save-msg" id="saveMsg">
✅ Your cycle information is saved
</div>
</div>

<div class="status-section">
<div class="status-box">
<h3>Your cycle seems regular</h3>
<a href="general_tips.php">
<button class="status-btn">Explore General Health Tips</button>
</a>
</div>

<div class="status-box">
<h3>Your cycle seems irregular</h3>
<a href="irregular_form.php">
<button class="status-btn">Explore Care & Support Tips</button>
</a>
</div>
</div>

<div class="legend">
<span><div class="dot" style="background:#e75480"></div> Period</span>
<span><div class="dot" style="background:#f7b7a3"></div> Pre-Period</span>
<span><div class="dot" style="background:#d6b3e6"></div> Post-Period</span>
<span><div class="dot" style="background:#9fd9c5"></div> Ovulation</span>
</div>

</div>

<script>
document.getElementById("saveBtn").addEventListener("click", function () {
    document.getElementById("saveMsg").style.display = "block";
});
</script>

</body>
</html>
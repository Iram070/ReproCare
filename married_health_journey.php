<?php
session_start();

$conn = new mysqli("localhost", "root", "", "reprocare");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$labels = [];
$data   = [];
$message = "";

/* ================= SAVE DATA ================= */
if(isset($_POST['save_cycle'])){

    $last_period  = $_POST['lastPeriod'];
    $cycle_length = $_POST['cycleLength'];

    if(!empty($last_period) && !empty($cycle_length)){

        $user_id = 1;

        $stmt = $conn->prepare("INSERT INTO married_record (user_id, last_period_date, cycle_length) VALUES (?, ?, ?)");

        if(!$stmt){
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("isi", $user_id, $last_period, $cycle_length);
        $stmt->execute();

        $message = "Cycle data saved successfully 💗";
    }
}

/* ================= FETCH GRAPH DATA ================= */
$labels = [];
$data   = [];

$result = $conn->query("SELECT last_period_date, cycle_length FROM married_record ORDER BY last_period_date ASC");

if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $labels[] = date("M Y", strtotime($row['last_period_date'])); // Month + Year
        $data[]   = intval($row['cycle_length']); // ensure numeric
    }
}

if(empty($labels)){
    $labels = ['No Data'];
    $data   = [0];
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ReproCare - Married Health Journey</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background: linear-gradient(-45deg,#ffe6f2,#ffd6eb,#ffcce5,#ffe6f7);
    background-size:400% 400%;
    animation: gradientBG 12s ease infinite;
}
@keyframes gradientBG{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}
.wrapper{
    display:flex;
    justify-content:center;
    padding:40px 20px;
}
.container{
    width:100%;
    max-width:1000px;
    background:#fff0f6;
    border-radius:20px;
    padding:50px;
    box-shadow:0 15px 40px rgba(255,105,180,0.15);
}
h1{ color:#cc0066; }
.section{ margin-top:40px; }
.card{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(255,105,180,0.1);
    margin-top:15px;
}
input{
    padding:10px;
    margin:10px 10px 10px 0;
    border-radius:8px;
    border:1px solid #ccc;
}
button{
    padding:10px 20px;
    border:none;
    background:#ff80bf;
    color:white;
    border-radius:20px;
    cursor:pointer;
    transition:0.3s;
    font-weight:600;
}
button:hover{
    background:#ff4da6;
}
.result{
    margin-top:15px;
    font-weight:600;
    color:#b30059;
}
.safe-box{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(255,105,180,0.1);
    margin-top:15px;
    line-height:1.7;
}
.navigation-buttons{
    margin-top:40px;
    display:flex;
    justify-content:space-between;
}
.nav-btn{
    padding:12px 28px;
    border:none;
    border-radius:30px;
    font-weight:600;
    cursor:pointer;
    font-size:14px;
}
.back-btn{
    background:#f8c8dc;
    color:#b30059;
}
.next-btn{
    background:#ff80bf;
    color:white;
}
.footer{
    text-align:center;
    margin-top:40px;
    font-style:italic;
    color:#cc0066;
}
</style>
</head>

<body>

<div class="wrapper">
<div class="container">

<h1>Welcome to ReproCare 💗</h1>

<?php if($message != ""){ ?>
<div class="result"><?php echo $message; ?></div>
<?php } ?>

<!-- ================= CYCLE TRACKER ================= -->
<div class="section">
<h2>📅 Cycle Tracker</h2>
<div class="card">

<form method="POST">
<label>Last Period Date:</label><br>
<input type="date" name="lastPeriod" required><br>

<label>Average Cycle Length (days):</label><br>
<input type="number" name="cycleLength" required><br>

<button type="submit" name="save_cycle">Save & Update Graph</button>
</form>

</div>
</div>

<!-- ================= GRAPH ================= -->
<div class="section">
<h2>📊 Monthly Cycle Trend</h2>
<div class="card">
<canvas id="cycleChart"></canvas>
</div>
</div>

<!-- ================= SAFE DAYS ================= -->
<div class="section">
<h2>🌼 Safe Days & Fertile Window</h2>
<div class="safe-box">
<p>
Ovulation usually occurs <b>around 14 days before the next expected period</b>.
The fertile window includes the <b>5 days before ovulation plus ovulation day</b>.
</p>
<p>
Days 1–5 → Menstrual phase<br>
Days 6–11 → Lower fertility<br>
Days 12–16 → Fertile window<br>
Days 17–28 → Luteal phase
</p>
</div>
</div>

<!-- ================= NAVIGATION ================= -->
<div class="navigation-buttons">
<button class="nav-btn back-btn" onclick="location.href='married_dashboard.php'">← Back</button>
<button class="nav-btn next-btn" onclick="location.href='birth_control_options.php'">Next →</button>
</div>

<div class="footer">
Every woman’s cycle is unique. If cycles remain irregular or painful, consult a healthcare professional.
</div>

</div>
</div>

<script>
const ctx = document.getElementById('cycleChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
            label: 'Cycle Length (Days)',
            data: <?php echo json_encode($data); ?>,
            borderColor: '#ff4da6',
            backgroundColor: 'rgba(255,105,180,0.2)',
            tension: 0.4,
            fill: true
        }]
    },
    options: { responsive: true }
});
</script>

</body>
</html>
<?php
session_start();
include("db.php"); // Database connection

// --- Step 1: Check if user is logged in ---
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// --- Step 2: Fetch user info ---
$user_query = "SELECT * FROM users WHERE user_id='$user_id' LIMIT 1";
$user_result = mysqli_query($conn, $user_query);

if(!$user_result || mysqli_num_rows($user_result) == 0){
    die("<h2 style='text-align:center;margin-top:50px;'>User not found.</h2>");
}

$user = mysqli_fetch_assoc($user_result);
$name = $user['name'] ?? "User";

// --- Step 3: Fetch latest cycle data using cycle_id ---
$cycle_query = "SELECT * FROM cycle_data WHERE user_id='$user_id' ORDER BY cycle_id DESC LIMIT 1";
$cycle_result = mysqli_query($conn, $cycle_query);

if(!$cycle_result || mysqli_num_rows($cycle_result) == 0){
    die("<h2 style='text-align:center;margin-top:50px;'>No cycle data found. Please track your cycle first.</h2>");
}

$cycle = mysqli_fetch_assoc($cycle_result);

// --- Step 4: Prepare data for display ---
$last_period = date("d M Y", strtotime($cycle['last_period_date']));
$cycle_length = $cycle['cycle_length'] . " Days";
$period_duration = $cycle['period_duration'] . " Days";
$flow = ucfirst($cycle['flow_type']);
$pain = ucfirst($cycle['pain_level']);
$symptoms = $cycle['symptoms'] ?? "None";
$is_irregular = ucfirst($cycle['is_irregular']);
$risk_level = ucfirst($cycle['risk_level']);
$date = date("d M Y"); // Today

// --- Step 5: Risk color logic ---
switch(strtolower($cycle['risk_level'])){
    case "normal":
        $color = "#4CAF50";
        $message = "Your cycle appears stable. Maintain a healthy lifestyle.";
        break;
    case "moderate":
        $color = "#ff9800";
        $message = "Your menstrual cycle may require attention. Monitor closely.";
        break;
    case "high risk":
        $color = "#f44336";
        $message = "Your menstrual cycle indicates high-risk symptoms. Please consult a doctor.";
        break;
    default:
        $color = "#4CAF50";
        $message = "Your cycle appears stable. Maintain a healthy lifestyle.";
        break;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ReproCare Health Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin:0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ffe6f0, #ffd9ec);
            padding:20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        .card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 25px 30px;
            margin: 20px 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
        }
        h1 {
            color: #cc0066;
            font-size: 32px;
            margin-bottom: 20px;
        }
        h3 {
            color: #663344;
            margin-bottom: 12px;
        }
        p {
            margin: 6px 0;
            font-weight: bold;
            color: #333;
        }
        .risk {
            background: <?php echo $color; ?>;
            color: white;
        }
        ul {
            list-style: none;
            padding:0;
            margin: 0;
        }
        ul li {
            margin:8px 0;
            font-weight: bold;
        }
        .btn-group {
            margin-top: 15px;
        }
        .btn-group a button {
            background:#cc0066;
            color:white;
            border:none;
            padding:12px 25px;
            border-radius:25px;
            font-weight:bold;
            margin:5px;
            cursor:pointer;
            transition:0.3s;
        }
        .btn-group a button:hover {
            background:#b30055;
            transform: scale(1.05);
        }
        @media(max-width:768px){
            .card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>🌸 ReproCare Health Report</h1>

        <div class="card">
            <h3>User Information</h3>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Report Date:</strong> <?php echo $date; ?></p>
        </div>

        <div class="card">
            <h3>Cycle Information</h3>
            <p><strong>Last Period Date:</strong> <?php echo $last_period; ?></p>
            <p><strong>Cycle Length:</strong> <?php echo $cycle_length; ?></p>
            <p><strong>Period Duration:</strong> <?php echo $period_duration; ?></p>
            <p><strong>Flow Type:</strong> <?php echo $flow; ?></p>
            <p><strong>Pain Level:</strong> <?php echo $pain; ?></p>
            <p><strong>Irregular Cycle:</strong> <?php echo $is_irregular; ?></p>
            <p><strong>Symptoms:</strong> <?php echo $symptoms; ?></p>
        </div>

        <div class="card risk">
            <h3><?php echo $risk_level; ?></h3>
            <p><?php echo $message; ?></p>
        </div>

        <div class="card">
            <h3>Recommendations</h3>
            <ul>
                <?php
                if(strtolower($risk_level) == "high risk"){
                    echo "<li>Consult a gynecologist immediately</li>";
                    echo "<li>Avoid heavy physical stress</li>";
                    echo "<li>Track symptoms daily</li>";
                } elseif(strtolower($risk_level) == "moderate"){
                    echo "<li>Maintain balanced diet</li>";
                    echo "<li>Exercise 30 minutes daily</li>";
                    echo "<li>Track next cycle carefully</li>";
                } else{
                    echo "<li>Maintain balanced diet</li>";
                    echo "<li>Sleep 7–8 hours</li>";
                    echo "<li>Continue regular tracking</li>";
                }
                ?>
            </ul>
        </div>

        <div class="card btn-group">
            <a href="generate_pdf.php"><button>Download PDF</button></a>
            <a href="consult_doctor.php"><button>Consult Doctor</button></a>
        </div>
    </div>
</body>
</html>
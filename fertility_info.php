<?php

$lmp = $_POST['lmp'] ?? null;
$cycle_length = $_POST['cycle_length'] ?? null;
$period_days = $_POST['period_duration'] ?? 5;

$today = date("Y-m-d");

if($lmp && $cycle_length){

    $cycle_length = intval($cycle_length);
    $period_days = intval($period_days);

    // Days difference
    $days_passed = floor((strtotime($today) - strtotime($lmp)) / 86400);

    // Handle future date error
    if($days_passed < 0){
        $days_passed = 0;
    }

    // Reset cycle automatically
    $current_day = ($days_passed % $cycle_length) + 1;

    // Ovulation day (14 days before next period)
    $ovulation_day = $cycle_length - 14;

    $ovulation_timestamp = strtotime($lmp . " +" . ($ovulation_day - 1) . " days");
    $ovulation_date = date("F d, Y", $ovulation_timestamp);

    // Fertile window
    $fertile_start_day = $ovulation_day - 5;
    $fertile_start = date("F d, Y", strtotime($lmp . " +" . ($fertile_start_day - 1) . " days"));
    $fertile_end = $ovulation_date;

    // Best days
    $best_days = date("F d", strtotime("-2 days", $ovulation_timestamp)) .
                 " & " . date("F d", $ovulation_timestamp);

    // Safe days
    $safe_start = date("F d", strtotime("+2 days", $ovulation_timestamp));
    $safe_end = date("F d, Y", strtotime($lmp . " +" . ($cycle_length - 1) . " days"));

    $luteal_days = 14;
    $follicular_days = max(1, $fertile_start_day - $period_days);

    // Phase detection
    if($current_day <= $period_days){
        $phase="Menstrual";
        $tips="Focus on rest, hydration, and iron-rich foods.";
    }
    elseif($current_day < $fertile_start_day){
        $phase="Follicular";
        $tips="Energy rising. Maintain balanced diet and exercise.";
    }
    elseif($current_day >= $fertile_start_day && $current_day < $ovulation_day){
        $phase="Fertile Window";
        $tips="Have intercourse every 1–2 days for better chances.";
    }
    elseif($current_day == $ovulation_day){
        $phase="Ovulation Day";
        $tips="Highest fertility today. Try to conceive and stay relaxed.";
    }
    else{
        $phase="Luteal";
        $tips="Lower fertility. Focus on sleep and stress management.";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
<title>FemVita - Fertility Insights</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body{
margin:0;
font-family:'Segoe UI';
background:linear-gradient(135deg,#ffdde1,#ee9ca7);
overflow-x:hidden;
}

.container{
max-width:1000px;
margin:50px auto;
padding:35px;
background:rgba(255,255,255,0.25);
backdrop-filter:blur(15px);
border-radius:25px;
box-shadow:0 10px 40px rgba(0,0,0,0.2);
animation:fadeIn 1s;
}

@keyframes fadeIn{
from{opacity:0;transform:translateY(30px);}
to{opacity:1;}
}

h2{
text-align:center;
color:#c2185b;
}

.timeline{
display:flex;
height:40px;
border-radius:30px;
overflow:hidden;
margin-top:25px;
}

.segment{
display:flex;
align-items:center;
justify-content:center;
font-size:12px;
color:white;
transition:0.3s;
}

.menstrual{background:#ff6b6b;}
.follicular{background:#ffb6c1;}
.fertile{background:#ff69b4;}
.ovulation{background:#d63384;}
.luteal{background:#c8a2c8;}

.segment.active{
box-shadow:0 0 15px white inset;
font-weight:bold;
}

.card{
background:rgba(255,255,255,0.4);
padding:20px;
border-radius:15px;
margin-top:20px;
}

.title{
font-weight:bold;
color:#c2185b;
margin-top:15px;
}

.highlight{
font-size:20px;
font-weight:bold;
text-align:center;
color:#d63384;
}

.disclaimer{
font-size:13px;
margin-top:20px;
color:#555;
}

/* Navigation Buttons */
.nav-buttons{
display:flex;
justify-content:space-between;
margin-top:30px;
}

button{
padding:12px 30px;
border:none;
border-radius:25px;
cursor:pointer;
font-size:15px;
transition:0.3s;
}

.back-btn{
background:transparent;
border:2px solid #d63384;
color:#d63384;
}

.back-btn:hover{
background:#d63384;
color:white;
}

.next-btn{
background:#d63384;
color:white;
}

.next-btn:hover{
background:#ad2167;
}

</style>
</head>

<body>

<div class="container">

<h2>Fertility Insights 🌸</h2>

<?php if($lmp): ?>

<div class="highlight">
Today is Cycle Day <?php echo $current_day; ?> — <?php echo $phase; ?>
</div>

<div class="timeline">

<div class="segment menstrual <?php if($phase=="Menstrual") echo "active"; ?>" 
style="flex:<?php echo $period_days; ?>">Period</div>

<div class="segment follicular <?php if($phase=="Follicular") echo "active"; ?>" 
style="flex:<?php echo $follicular_days; ?>">Follicular</div>

<div class="segment fertile <?php if($phase=="Fertile Window") echo "active"; ?>" 
style="flex:5;">Fertile</div>

<div class="segment ovulation <?php if($phase=="Ovulation Day") echo "active"; ?>" 
style="flex:1;">Ovulation</div>

<div class="segment luteal <?php if($phase=="Luteal") echo "active"; ?>" 
style="flex:<?php echo $luteal_days; ?>">Luteal</div>

</div>

<div class="card">

<div class="title">Estimated Ovulation Date</div>
<?php echo $ovulation_date; ?>

<div class="title">Fertility Window</div>
<?php echo $fertile_start . " to " . $fertile_end; ?>

<div class="title">Best Days to Conceive</div>
<?php echo $best_days; ?>

<div class="title">Safe Days</div>
<?php echo $safe_start . " to " . $safe_end; ?>

<div class="title">What Happens During Ovulation</div>
An egg is released and survives 12–24 hours. Sperm can live up to 5 days.

<div class="title">Intercourse Frequency</div>
Every 1–2 days during fertile window improves chances.

<div class="title">Personalized Tip</div>
<?php echo $tips; ?>

<div class="disclaimer">
Important: This tool provides estimates only. Ovulation may vary. 
Consult a healthcare professional for medical advice.
</div>

</div>

<!-- Navigation Buttons -->
<div class="nav-buttons">

<button class="back-btn" onclick="history.back();">
⬅ Back
</button>

<form method="post" action="planning_exercise.php">
<input type="hidden" name="lmp" value="<?php echo $lmp; ?>">
<input type="hidden" name="cycle_length" value="<?php echo $cycle_length; ?>">
<input type="hidden" name="period_duration" value="<?php echo $period_days; ?>">
<button type="submit" class="next-btn">
Next ➡ Exercise Guide
</button>
</form>

</div>

<?php else: ?>

<div class="card">
Please enter your cycle details first.
</div>

<?php endif; ?>

</div>

</body>
</html>
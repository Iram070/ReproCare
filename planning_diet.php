<?php
// -------- SAMPLE LOGIC (Replace with DB later) --------
$cycle_length = 28;
$last_period = "2026-02-01";

$ovulation_day = $cycle_length - 14;
$ovulation_date = date('Y-m-d', strtotime($last_period . " +$ovulation_day days"));
$fertile_start = date('Y-m-d', strtotime($ovulation_date . " -5 days"));
$fertile_end   = date('Y-m-d', strtotime($ovulation_date . " +1 day"));

$today = date('Y-m-d');
$cycle_day = floor((strtotime($today) - strtotime($last_period)) / 86400) + 1;

if($cycle_day >= $ovulation_day-5 && $cycle_day <= $ovulation_day+1){
    $phase = "Fertile Phase";
    $tip = "Increase antioxidants, healthy fats, hydration and light meals to support ovulation.";
} elseif($cycle_day < $ovulation_day-5){
    $phase = "Follicular Phase";
    $tip = "Focus on iron-rich foods, protein, leafy greens and balanced carbs for egg development.";
} else {
    $phase = "Luteal Phase";
    $tip = "Add magnesium, complex carbohydrates and warm nourishing foods to support implantation.";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>FemVita - Planning Diet</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,#ffdde1,#ffb6c1,#ffc0cb);
    overflow-x:hidden;
}

/* Floating Circles */
body::before, body::after{
    content:"";
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,0.3);
    animation:float 8s infinite alternate;
}
body::before{width:300px;height:300px;top:-120px;left:-80px;}
body::after{width:250px;height:250px;bottom:-100px;right:-80px;}

@keyframes float{
    from{transform:translateY(0);}
    to{transform:translateY(40px);}
}

.container{
    width:90%;
    max-width:1200px;
    margin:60px auto;
    padding:40px;
    border-radius:25px;
    background:rgba(255,255,255,0.25);
    backdrop-filter:blur(18px);
    box-shadow:0 8px 32px rgba(0,0,0,0.15);
    animation:fadeIn 1s ease-in-out;
}

@keyframes fadeIn{
    from{opacity:0;transform:translateY(40px);}
    to{opacity:1;transform:translateY(0);}
}

h2{
    text-align:center;
    color:#d63384;
}

.info-box{
    text-align:center;
    margin-bottom:25px;
    color:#555;
    line-height:1.6;
}

/* Timeline */
.timeline{
    height:20px;
    border-radius:20px;
    margin:25px 0;
    background:linear-gradient(to right,
        #a2d2ff 0% 40%,
        #ffafcc 40% 65%,
        #cdb4db 65% 100%);
}

/* Grid */
.grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
}

/* White Info Cards */
.card{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 6px 18px rgba(214,51,132,0.15);
    transition:0.4s;
}

.card:hover{
    transform:translateY(-6px);
    box-shadow:0 12px 25px rgba(214,51,132,0.25);
}

.card h4{
    color:#c2185b;
    font-size:18px;
    margin-bottom:10px;
}

.card p{
    font-size:14px;
    color:#555;
    line-height:1.6;
}

/* Buttons */
.buttons{
    display:flex;
    justify-content:space-between;
    margin-top:40px;
}

button{
    padding:12px 30px;
    background:#d63384;
    color:white;
    border:none;
    border-radius:25px;
    cursor:pointer;
}

button:hover{
    background:#ad2167;
}

/* Responsive */
@media(max-width:900px){
    .grid{grid-template-columns:repeat(2,1fr);}
}
@media(max-width:500px){
    .grid{grid-template-columns:1fr;}
}

</style>
</head>
<body>

<div class="container">

<h2>Diet Planning for Conception</h2>

<div class="info-box">
<strong>Estimated Ovulation:</strong> <?php echo $ovulation_date; ?><br>
<strong>Fertility Window:</strong> <?php echo $fertile_start." to ".$fertile_end; ?><br>
<strong>Current Phase:</strong> <?php echo $phase; ?><br><br>
<em><?php echo $tip; ?></em>
</div>

<div class="timeline"></div>

<div class="grid">

<div class="card">
<h4>Protein-Rich Foods</h4>
<p>Include eggs, lentils, paneer, chicken or tofu. Protein supports hormone balance and improves egg quality.</p>
</div>

<div class="card">
<h4>Healthy Fats</h4>
<p>Add avocado, nuts, seeds and olive oil. Healthy fats regulate ovulation and improve reproductive hormone function.</p>
</div>

<div class="card">
<h4>Folic Acid</h4>
<p>Consume spinach, broccoli, citrus fruits and fortified grains. Folic acid is essential for early fetal development.</p>
</div>

<div class="card">
<h4>Iron & Blood Health</h4>
<p>Eat leafy greens, beetroot, dates and lean meats. Iron supports ovulation and prevents deficiency.</p>
</div>

<div class="card">
<h4>Complex Carbohydrates</h4>
<p>Choose brown rice, oats and whole wheat. Stable blood sugar helps regulate fertility hormones.</p>
</div>

<div class="card">
<h4>Antioxidant Foods</h4>
<p>Berries, nuts and dark chocolate protect egg cells from oxidative stress and improve reproductive health.</p>
</div>

<div class="card">
<h4>Hydration</h4>
<p>Drink 2–3 liters of water daily. Proper hydration supports cervical mucus and reproductive function.</p>
</div>

<div class="card">
<h4>Foods to Limit</h4>
<p>Avoid excess caffeine, alcohol, processed foods and refined sugars as they may negatively impact fertility.</p>
</div>

</div>

<div class="buttons">
<button onclick="location.href='fertility_info.php'">⬅ Back</button>
<button onclick="location.href='couple_health.php'">Next ➡</button>
</div>

</div>

</body>
</html>
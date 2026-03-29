<?php
session_start();
$conn = mysqli_connect("localhost","root","","reprocare");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $user_id = $_SESSION['user_id'] ?? 1;

    $exercise = intval($_POST['exercise']);
    $sleep = intval($_POST['sleep']);
    $smoking = intval($_POST['smoking']);
    $alcohol = intval($_POST['alcohol']);
    $energy = intval($_POST['energy']);
    $libido = intval($_POST['libido']);

    $score = $exercise + $sleep + $smoking + $alcohol;

    $risk_values = 0;
    $risks_text = "";

    if(isset($_POST['risk'])){
        foreach($_POST['risk'] as $risk){
            $risk_values += intval($risk);
        }
        $risks_text = implode(",", $_POST['risk']);
    }

    $score += $risk_values;

    if($energy > 6) $score += 2;
    if($libido > 6) $score += 2;

    if($score >= 12){
        $risk_level = "Mild";
    }
    elseif($score >= 6){
        $risk_level = "Moderate";
    }
    else{
        $risk_level = "High";
    }

    $sql = "INSERT INTO male_fertility_data 
    (user_id,exercise,sleep,smoking,alcohol,energy,libido,risks,total_score,risk_level)
    VALUES 
    ('$user_id','$exercise','$sleep','$smoking','$alcohol','$energy','$libido','$risks_text','$score','$risk_level')";

    mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fertility & Sperm Health Tracker | FemVita</title>

<style>
body{
    margin:0;
    font-family:'Segoe UI', sans-serif;
    background:linear-gradient(135deg,#e3f2fd,#bbdefb,#e1f5fe);
    overflow-x:hidden;
}

body::before{
    content:"";
    position:absolute;
    width:420px;
    height:420px;
    background:rgba(255,255,255,0.35);
    border-radius:50%;
    filter:blur(120px);
    top:-120px;
    right:-120px;
    animation:float 7s infinite alternate ease-in-out;
}

@keyframes float{
    from{transform:translateY(0);}
    to{transform:translateY(50px);}
}

.container{
    width:92%;
    max-width:1100px;
    margin:50px auto;
    padding:45px;
    border-radius:30px;
    background:rgba(255,255,255,0.35);
    backdrop-filter:blur(18px);
    box-shadow:0 15px 40px rgba(0,0,0,0.08);
    animation:fadeIn 1s ease;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(30px);}
    to{opacity:1; transform:translateY(0);}
}

h1{
    text-align:center;
    color:#0d47a1;
    margin-bottom:35px;
    font-size:30px;
    font-weight:700;
}

.grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:25px;
    margin-bottom:30px;
}

.card{
    background:rgba(255,255,255,0.65);
    padding:25px;
    border-radius:18px;
    box-shadow:0 8px 20px rgba(0,0,0,0.05);
}

.card h3{
    color:#1565c0;
    font-size:19px;
    font-weight:700;
    margin-bottom:15px;
}

label{
    display:block;
    margin:8px 0;
    font-size:16px;
    font-weight:600;
    color:#263238;
}

select{
    width:100%;
    padding:8px;
    border-radius:10px;
    border:1px solid #ccc;
    font-size:15px;
}

input[type="range"]{
    width:100%;
}

.btn{
    padding:14px 40px;
    border:none;
    border-radius:30px;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    background:#1565c0;
    color:white;
    transition:0.3s;
    text-decoration:none;
    display:inline-block;
}

.btn:hover{
    background:#0d47a1;
    transform:scale(1.05);
}

.button-row{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
    flex-wrap:wrap;
}

.result{
    margin-top:35px;
    padding:30px;
    border-radius:20px;
    background:rgba(255,255,255,0.85);
    text-align:center;
    display:none;
}

.result h2{
    font-size:24px;
    font-weight:700;
}

.risk-btn{
    display:inline-block;
    padding:12px 35px;
    margin:15px;
    border-radius:30px;
    color:white;
    font-weight:600;
    text-decoration:none;
}

.mild{ background:#4caf50; }
.moderate{ background:#ff9800; }
.high{ background:#e53935; }

@media(max-width:900px){
    .grid{
        grid-template-columns:1fr;
    }
}

.back-btn-top{
    display:inline-block;
    padding:10px 25px;
    border-radius:25px;
    background:#0d47a1;
    color:white;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
    margin-top:15px;
    text-align:center;
}

.back-btn-top:hover{
    background:#1565c0;
    transform:scale(1.05);
}
</style>
</head>
<body>

<div class="container">
<h1>💙 Fertility & Sperm Health Tracker 💙</h1>

<form id="fertilityForm">

<div class="grid">

<div class="card">
<h3>🏃 Lifestyle Habits</h3>

<label>Exercise Frequency</label>
<select name="exercise" required>
<option value="">Select</option>
<option value="0">None</option>
<option value="1">1–2 times/week</option>
<option value="2">3–5 times/week</option>
<option value="3">Daily</option>
</select>

<label>Sleep Duration</label>
<select name="sleep" required>
<option value="">Select</option>
<option value="0"><5 hrs</option>
<option value="1">5–6 hrs</option>
<option value="2">7–8 hrs</option>
<option value="3">8+ hrs</option>
</select>

<label>Smoking</label>
<select name="smoking" required>
<option value="">Select</option>
<option value="3">Non-smoker</option>
<option value="1">Occasional</option>
<option value="0">Regular</option>
</select>

<label>Alcohol</label>
<select name="alcohol" required>
<option value="">Select</option>
<option value="3">None</option>
<option value="2">Social</option>
<option value="0">Frequent</option>
</select>
</div>

<div class="card">
<h3>⚠ Risk & Health Factors</h3>
<label><input type="checkbox" name="risk[]" value="-2"> High Stress</label>
<label><input type="checkbox" name="risk[]" value="-2"> Obesity</label>
<label><input type="checkbox" name="risk[]" value="-2"> Diabetes</label>
<label><input type="checkbox" name="risk[]" value="-2"> Thyroid Issues</label>
<label><input type="checkbox" name="risk[]" value="-2"> Hormonal Imbalance</label>
<label><input type="checkbox" name="risk[]" value="-2"> Excess Heat Exposure</label>
<label><input type="checkbox" name="risk[]" value="-2"> Poor Diet</label>
<label><input type="checkbox" name="risk[]" value="-2"> Lack of Physical Activity</label>
<label><input type="checkbox" name="risk[]" value="-2"> History of Infections</label>
<label><input type="checkbox" name="risk[]" value="-2"> Long-term Medication Use</label>
</div>

<div class="card">
<h3>⚡ Energy Level (1–10)</h3>
<input type="range" name="energy" min="1" max="10" value="5">
</div>

<div class="card">
<h3>🔥 Libido Level (1–10)</h3>
<input type="range" name="libido" min="1" max="10" value="5">
</div>

</div>

<!-- Button Row -->
<div class="button-row">
<a href="male_help.php" class="btn">More Info</a>
<button type="button" class="btn" onclick="calculateScore()">Check Fertility Risk</button>
<a href="consult_doctor.php" class="btn">Doctor Consult</a>
</div>

<div style="text-align:center;">
    <a href="male_dashboard.php" class="back-btn-top">⬅ Back</a>
</div>

</form>

<div class="result" id="resultBox"></div>

</div>

<script>
function calculateScore(){

let form=document.forms["fertilityForm"];

if(form["exercise"].value==="" || 
   form["sleep"].value==="" || 
   form["smoking"].value==="" || 
   form["alcohol"].value===""){
   alert("Please select all required lifestyle options.");
   return;
}

let score=0;

score+=parseInt(form["exercise"].value);
score+=parseInt(form["sleep"].value);
score+=parseInt(form["smoking"].value);
score+=parseInt(form["alcohol"].value);

let risks=document.querySelectorAll('input[name="risk[]"]:checked');
risks.forEach(r=>score+=parseInt(r.value));

let energy=parseInt(form["energy"].value);
let libido=parseInt(form["libido"].value);

score+=(energy>6?2:0);
score+=(libido>6?2:0);

let result=document.getElementById("resultBox");
result.style.display="block";

if(score>=12){
result.innerHTML=`
<h2 style="color:#4caf50;">🟢 Mild Risk 🟢</h2>
<p>Your lifestyle generally supports reproductive health.</p>
<a href="mild_male.php" class="risk-btn mild">View Mild Plan</a>
`;
}
else if(score>=6){
result.innerHTML=`
<h2 style="color:#ff9800;">🟡 Moderate Risk 🟡</h2>
<p>Some lifestyle factors may impact sperm health. Improvement is recommended.</p>
<a href="moderate_male.php" class="risk-btn moderate">View Moderate Plan</a>
`;
}
else{
result.innerHTML=`
<h2 style="color:#e53935;">🔴 High Risk 🔴</h2>
<p>Multiple risk factors detected.</p>
<a href="highrisk_male.php" class="risk-btn high">View High Plan</a>
`;
}

}
</script>

</body>
</html>
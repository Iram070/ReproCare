<!DOCTYPE html>
<html>
<head>
<title>FemVita - Pregnancy Exercise</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<style>

*{
    box-sizing:border-box;
}

body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#ffd6e8,#fcbad3,#f8a5c2);
    min-height:100vh;
    padding:60px 0;
    overflow-x:hidden;
}

body::before, body::after{
    content:"";
    position:fixed;
    border-radius:50%;
    background:rgba(255,255,255,0.35);
    animation:float 8s infinite alternate ease-in-out;
    z-index:-1;
}

body::before{
    width:320px;
    height:320px;
    top:-120px;
    left:-100px;
}

body::after{
    width:250px;
    height:250px;
    bottom:-120px;
    right:-100px;
}

@keyframes float{
    from{transform:translateY(0);}
    to{transform:translateY(40px);}
}

.main-container{
    width:95%;
    max-width:1100px;
    margin:auto;
    background:rgba(255,255,255,0.6);
    backdrop-filter:blur(15px);
    padding:50px;
    border-radius:25px;
    box-shadow:0 20px 50px rgba(214,51,132,0.25);
    animation:fadeIn 1s ease;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(40px);}
    to{opacity:1; transform:translateY(0);}
}

h1{
    text-align:center;
    font-family:'Playfair Display',serif;
    font-size:38px;
    color:#b3125d;
    margin-bottom:25px;
}

.note{
    background:white;
    border:2px solid black;
    border-radius:20px;
    padding:20px;
    margin-bottom:45px;
    text-align:center;
}

.note p{
    font-size:15px;
    color:#444;
    line-height:1.6;
}

.grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
    margin-bottom:40px;
}

.card{
    background:white;
    border:2px solid black;
    border-radius:20px;
    padding:25px;
    text-align:center;
    transition:0.3s;
}

.card:hover{
    transform:translateY(-6px);
    box-shadow:0 12px 25px rgba(214,51,132,0.25);
}

/* Icons Bigger */
.card img{
    width:120px;
    height:auto;
    margin-bottom:15px;
}

.card h3{
    color:#d63384;
    margin-bottom:10px;
}

.card p{
    font-size:14px;
    color:#444;
    line-height:1.6;
}

/* Third Trimester Note */
.trimester-note{
    background:#fff0f6;
    border:2px solid #d63384;
    border-radius:20px;
    padding:20px;
    text-align:center;
    font-weight:600;
    color:#7a1c4b;
    margin-bottom:30px;
}

.buttons{
    text-align:center;
    margin-top:30px;
}

button{
    padding:12px 28px;
    border:none;
    border-radius:25px;
    font-size:15px;
    cursor:pointer;
    margin:10px;
    transition:0.3s;
}

.back{
    background:white;
    color:#d63384;
    border:2px solid #d63384;
}

.back:hover{
    background:#ffe3ef;
}

.consult{
    background:#b388eb;
    color:white;
}

.consult:hover{
    background:#9c6ade;
    transform:translateY(-3px);
}

.next{
    background:#d63384;
    color:white;
}

.next:hover{
    background:#ad2167;
    transform:translateY(-3px);
}

@media(max-width:900px){
    .grid{
        grid-template-columns:1fr;
    }
}

</style>
</head>

<body>

<div class="main-container">

<h1>Safe Exercises During Pregnancy</h1>

<div class="note">
<p><strong>Important Note:</strong> Always consult your doctor before beginning any exercise routine. Avoid high-impact movements and stop immediately if you feel dizziness, bleeding, chest pain, or contractions.</p>
</div>

<div class="grid">

  <div class="card">
    <img src="images/walking_prenatal.png" alt="Walking">
    <h3>Prenatal Walking</h3>
    <p>Improves circulation, reduces swelling, boosts mood, and helps maintain a healthy pregnancy weight safely.</p>
  </div>

  <div class="card">
    <img src="images/yoga_prenatal.png" alt="Prenatal Yoga">
    <h3>Prenatal Yoga</h3>
    <p>Enhances flexibility, reduces stress, improves posture, and prepares the body and mind for childbirth.</p>
  </div>

  <div class="card">
    <img src="images/pelvic_floor_kegal.png" alt="Kegel">
    <h3>Kegel Exercises</h3>
    <p>Strengthens pelvic floor muscles to support the uterus and bladder, helping during labor and recovery.</p>
  </div>

  <div class="card">
    <img src="images/swimming_prenatal.png" alt="Swimming">
    <h3>Swimming</h3>
    <p>Low-impact full-body exercise that improves cardiovascular health and reduces swelling.</p>
  </div>

  <div class="card">
    <img src="images/butterfly_prenatal.png" alt="Stretching">
    <h3>Gentle Stretching</h3>
    <p>Reduces muscle tension, improves flexibility, and helps relieve back pain.</p>
  </div>

  <div class="card">
    <img src="images/light_cardio_pregnancy.png" alt="Aerobics">
    <h3>Low-Impact Aerobics</h3>
    <p>Boosts heart health and endurance safely without straining joints.</p>
  </div>

  <div class="card">
    <img src="images/brigde_pose.png" alt="Cycling">
    <h3>Stationary Cycling</h3>
    <p>Safe cardiovascular exercise that strengthens leg muscles and improves stamina.</p>
  </div>

  <div class="card">
    <img src="images/pelvic_tilt_pose.png" alt="Pilates">
    <h3>Prenatal Pilates</h3>
    <p>Strengthens core muscles, improves posture, and reduces back pain during pregnancy.</p>
  </div>

  <div class="card">
    <img src="images/breathing_exercise.png" alt="Breathing">
    <h3>Deep Breathing & Relaxation</h3>
    <p>Helps reduce stress, improve oxygen flow, and prepare for labor.</p>
  </div>

</div>

<!-- Third Trimester Note Added Below Cards -->
<div class="trimester-note">
⚠ Third Trimester Note: Continue exercises slowly and gently. Avoid high-impact movements and lying flat on your back. Stop immediately if you feel discomfort and consult your doctor.
</div>

<div class="buttons">
<button class="back" onclick="location.href='pregnant_diet.php'">⬅ Back</button>
<button class="consult" onclick="location.href='consult_doctor.php'">👩‍⚕ Consult Doctor</button>
<button class="next" onclick="location.href='lifestyle.php'">Next ➡</button>
</div>

</div>

</body>
</html>
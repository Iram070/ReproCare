<!DOCTYPE html>
<html>
<head>
<title>FemVita - Planning Exercises</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

/* ===== FEMVITA PINK BACKGROUND ===== */
body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background: linear-gradient(135deg,#ffdde1,#ffb6c1,#ffc0cb);
    overflow-x:hidden;
}

/* Floating Decorative Circles */
body::before, body::after{
    content:"";
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,0.35);
    animation:float 8s infinite ease-in-out alternate;
}

body::before{
    width:300px;
    height:300px;
    top:-120px;
    left:-80px;
}

body::after{
    width:250px;
    height:250px;
    bottom:-100px;
    right:-80px;
}

@keyframes float{
    from{transform:translateY(0);}
    to{transform:translateY(40px);}
}

/* ===== MAIN GLASS CONTAINER ===== */
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
    from{opacity:0; transform:translateY(40px);}
    to{opacity:1; transform:translateY(0);}
}

h2{
    text-align:center;
    color:#d63384;
    margin-bottom:10px;
    font-size:30px;
}

.description{
    text-align:center;
    color:#555;
    margin-bottom:40px;
    font-size:16px;
}

/* ===== GRID LAYOUT ===== */
.exercise-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
}

/* ===== WHITE CARDS ===== */
.card{
    padding:25px;
    border-radius:20px;
    text-align:center;
    background:white;
    box-shadow:0 6px 18px rgba(214,51,132,0.15);
    transition:0.4s;
}

.card:hover{
    transform:translateY(-8px);
    box-shadow:0 12px 25px rgba(214,51,132,0.25);
}

/* Round Icon - Bigger */
.icon-wrapper{
    width:120px;
    height:120px;
    margin:0 auto 20px auto;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#ffe6f0;
    box-shadow:0 4px 12px rgba(214,51,132,0.15);
}

.icon-wrapper img{
    width:75px;
}

/* Exercise Name - Bigger */
.card h4{
    margin:10px 0 10px;
    color:#c2185b;
    font-weight:700;
    font-size:21px;
}

/* Benefit Text */
.card p{
    font-size:15px;
    color:#555;
}

/* ===== BUTTONS ===== */
.buttons{
    display:flex;
    justify-content:space-between;
    margin-top:50px;
}

button{
    padding:12px 32px;
    background:#d63384;
    color:white;
    border:none;
    border-radius:25px;
    cursor:pointer;
    font-size:16px;
    transition:0.3s;
}

button:hover{
    background:#ad2167;
}

/* ===== RESPONSIVE ===== */
@media(max-width:900px){
    .exercise-grid{
        grid-template-columns:repeat(2,1fr);
    }
}

@media(max-width:500px){
    .exercise-grid{
        grid-template-columns:1fr;
    }
}

</style>
</head>

<body>

<div class="container">

<h2>Planning Exercises for Conception</h2>
<p class="description">
Gentle movements to support hormonal balance and improve fertility naturally.
</p>

<div class="exercise-grid">

<div class="card">
    <div class="icon-wrapper">
        <img src="images/stretch.png">
    </div>
    <h4>Stretch</h4>
    <p>Improves blood circulation and reduces stress.</p>
</div>

<div class="card">
    <div class="icon-wrapper">
        <img src="images/yoga.png">
    </div>
    <h4>Yoga</h4>
    <p>Balances hormones and increases pelvic flexibility.</p>
</div>

<div class="card">
    <div class="icon-wrapper">
        <img src="images/pelvic.png">
    </div>
    <h4>Pelvic</h4>
    <p>Strengthens pelvic floor for reproductive support.</p>
</div>

<div class="card">
    <div class="icon-wrapper">
        <img src="images/butterfly.png">
    </div>
    <h4>Butterfly</h4>
    <p>Enhances blood flow to reproductive organs.</p>
</div>

<div class="card">
    <div class="icon-wrapper">
        <img src="images/bridge.png">
    </div>
    <h4>Bridge</h4>
    <p>Supports uterine health and core strength.</p>
</div>

<div class="card">
    <div class="icon-wrapper">
        <img src="images/catcow.png">
    </div>
    <h4>Cat-Cow</h4>
    <p>Improves spinal flexibility and circulation.</p>
</div>

<div class="card">
    <div class="icon-wrapper">
        <img src="images/swim.png">
    </div>
    <h4>Swim</h4>
    <p>Low-impact exercise that supports overall health.</p>
</div>

<div class="card">
    <div class="icon-wrapper">
        <img src="images/meditate.png">
    </div>
    <h4>Meditate</h4>
    <p>Reduces stress hormones and supports fertility balance.</p>
</div>

</div>

<div class="buttons">
    <button onclick="location.href='fertility_info.php'">⬅ Back</button>
    <button onclick="location.href='planning_diet.php'">Next ➡</button>
</div>

</div>

</body>
</html>
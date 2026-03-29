<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FemVita - High Risk Male Exercise</title>

<style>

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,#cfe9f7,#e3f2fd,#d4ecff);
    overflow-x:hidden;
}

/* Floating background circles */
.bg-circle{
    position:fixed;
    border-radius:50%;
    background:rgba(255,255,255,0.25);
    animation:float 8s infinite alternate ease-in-out;
}
.bg1{width:200px;height:200px;top:10%;left:5%;}
.bg2{width:120px;height:120px;bottom:15%;right:10%;animation-delay:2s;}

@keyframes float{
    from{transform:translateY(0);}
    to{transform:translateY(-20px);}
}

/* Glass container */
.container{
    max-width:1300px;
    margin:60px auto;
    padding:40px;
    border-radius:30px;
    backdrop-filter:blur(18px);
    background:rgba(255,255,255,0.25);
    box-shadow:0 8px 32px rgba(0,0,0,0.1);
    animation:fadeIn 1.5s ease-in-out;
    position:relative;
}

@keyframes fadeIn{
    from{opacity:0;transform:translateY(40px);}
    to{opacity:1;transform:translateY(0);}
}

h1{
    text-align:center;
    color:#2b5d88;
    margin-bottom:40px;
}

/* Layout */
.layout{
    display:flex;
    align-items:center;
    gap:60px;
    position:relative;
}

/* Center circle */
.main-circle{
    width:320px;
    height:320px;
    border-radius:50%;
    background:radial-gradient(circle,#f3dcdc,#e8c9c9);
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    font-weight:600;
    color:#444;
}

/* Cards */
.cards{
    flex:1;
    display:flex;
    flex-direction:column;
    gap:30px;
}

.card{
    padding:20px 30px;
    border-radius:50px;
    background:rgba(173,216,230,0.7);
    backdrop-filter:blur(10px);
    box-shadow:0 4px 15px rgba(0,0,0,0.08);
    position:relative;
    transition:0.3s ease;
}

.card:hover{
    transform:translateX(10px);
}

.card h3{
    margin:0 0 8px;
    color:#0f4c75;
}

.card p{
    margin:0;
    font-size:14px;
    color:#333;
}

/* Connecting Lines */
.connector{
    position:absolute;
    left:-60px;
    top:50%;
    width:60px;
    height:2px;
    background:linear-gradient(90deg,#999,#4facfe);
    animation:glow 2s infinite alternate;
}

@keyframes glow{
    from{opacity:0.5;}
    to{opacity:1;}
}

/* Connector Dot */
.dot{
    position:absolute;
    left:-68px;
    top:calc(50% - 5px);
    width:10px;
    height:10px;
    background:#f3dcdc;
    border-radius:50%;
    box-shadow:0 0 8px rgba(0,0,0,0.2);
    animation:pulse 2s infinite;
}

@keyframes pulse{
    0%{transform:scale(1);}
    50%{transform:scale(1.3);}
    100%{transform:scale(1);}
}

/* Buttons */
.button-group{
    margin-top:50px;
    display:flex;
    justify-content:space-between;
}

.btn{
    padding:12px 30px;
    border-radius:30px;
    text-decoration:none;
    color:white;
    font-size:16px;
    transition:0.3s;
}

.back-btn{
    background:linear-gradient(45deg,#7bb6e6,#5da9e9);
}

.next-btn{
    background:linear-gradient(45deg,#4facfe,#00c6ff);
}

.btn:hover{
    transform:scale(1.08);
    box-shadow:0 6px 15px rgba(0,0,0,0.2);
}

/* Responsive */
@media(max-width:900px){
    .layout{
        flex-direction:column;
    }
    .connector,.dot{
        display:none;
    }
}

</style>
</head>

<body>

<div class="bg-circle bg1"></div>
<div class="bg-circle bg2"></div>

<div class="container">

<h1>FemVita – High Risk Male Exercise Plan</h1>

<div class="layout">

<div class="main-circle">
Improve Male Fertility<br>Through Proper Exercise
</div>

<div class="cards">

<div class="card">
<div class="connector"></div>
<div class="dot"></div>
<h3>Moderate Strength Training</h3>
<p>Engage in light to moderate weight training 3–4 times weekly. Avoid excessive heavy lifting which may increase cortisol and reduce testosterone.</p>
</div>

<div class="card">
<div class="connector"></div>
<div class="dot"></div>
<h3>Cardio for Blood Flow</h3>
<p>30 minutes of brisk walking, jogging, cycling or swimming improves blood circulation and supports reproductive organ health.</p>
</div>

<div class="card">
<div class="connector"></div>
<div class="dot"></div>
<h3>Maintain Healthy Weight</h3>
<p>Regular exercise helps reduce abdominal fat which improves hormonal balance and sperm production quality.</p>
</div>

<div class="card">
<div class="connector"></div>
<div class="dot"></div>
<h3>Avoid Overtraining</h3>
<p>Excessive intense workouts can lower testosterone and increase oxidative stress. Ensure proper recovery days.</p>
</div>

<div class="card">
<div class="connector"></div>
<div class="dot"></div>
<h3>Stretch & Relaxation</h3>
<p>Include yoga or stretching sessions to reduce stress hormones and improve overall fertility-supporting hormone balance.</p>
</div>

</div>

</div>

<div class="button-group">
<a href="highrisk_male.php" class="btn back-btn">Back</a>
<a href="highrisk_male_lifestyle.php" class="btn next-btn">Next</a>
</div>

</div>

</body>
</html>
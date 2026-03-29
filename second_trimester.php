   <!DOCTYPE html>
<html>
<head>
<title>FemVita - Second Trimester</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500&display=swap');

*{
    box-sizing:border-box;
}

body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#ffd6e8,#fcbad3,#f8a5c2);
    min-height:100vh;
    overflow-x:hidden;
    padding:60px 0;
}

/* Floating Decorative Circles */
body::before, body::after{
    content:"";
    position:fixed;
    border-radius:50%;
    background:rgba(255,255,255,0.35);
    animation:floatBg 8s infinite alternate ease-in-out;
    z-index:-1;
}

body::before{
    width:300px;
    height:300px;
    top:-120px;
    left:-100px;
}

body::after{
    width:250px;
    height:250px;
    bottom:-120px;
    right:-100px;
}

@keyframes floatBg{
    from{transform:translateY(0);}
    to{transform:translateY(40px);}
}

/* Main Glass Container */
.main-container{
    width:95%;
    max-width:1000px;
    margin:auto;
    background:rgba(255,255,255,0.6);
    backdrop-filter:blur(15px);
    padding:45px;
    border-radius:25px;
    box-shadow:0 20px 50px rgba(214,51,132,0.25);
    animation:fadeIn 1s ease;
}

@keyframes fadeIn{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* Title */
h1{
    text-align:center;
    font-family:'Playfair Display',serif;
    font-size:40px;
    color:#b3125d;
    margin-bottom:40px;
}

/* Section Containers */
.section{
    background:white;
    border:2px solid black;
    border-radius:20px;
    padding:25px;
    margin-bottom:30px;
    transition:0.3s;
}

.section:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(214,51,132,0.25);
}

.section h3{
    color:#d63384;
    margin-bottom:15px;
}

.section p, .section li{
    font-size:15px;
    line-height:1.7;
    color:#444;
}

/* Buttons */
.buttons{
    text-align:center;
    margin-top:40px;
}

button{
    padding:12px 28px;
    border:none;
    border-radius:25px;
    font-size:15px;
    cursor:pointer;
    margin:10px;
    transition:0.3s;
    font-family:'Poppins',sans-serif;
}

/* Back */
.back{
    background:white;
    color:#d63384;
    border:2px solid #d63384;
}

.back:hover{
    background:#ffe3ef;
}

/* Consult */
.consult{
    background:#b388eb;
    color:white;
    box-shadow:0 5px 15px rgba(179,136,235,0.3);
}

.consult:hover{
    background:#9c6ade;
    transform:translateY(-3px);
}

/* Next */
.next{
    background:#d63384;
    color:white;
}

.next:hover{
    background:#ad2167;
    transform:translateY(-3px);
}

/* Responsive */
@media(max-width:768px){
    h1{
        font-size:28px;
    }
}

</style>
</head>

<body>

<div class="main-container">

<h1>Second Trimester (Week 14 – 27)</h1>

<!-- Overview -->
<div class="section">
<h3>Overview</h3>
<p>
The second trimester is often called the most comfortable stage of pregnancy.
Between weeks 14 and 27, many early symptoms reduce and energy levels improve,
while your baby continues rapid growth and development.
</p>
</div>

<!-- Baby Development -->
<div class="section">
<h3>Baby Development</h3>
<ul>
<li><strong>Weeks 14–17:</strong> Baby begins moving, facial expressions develop, and bones start hardening.</li>
<li><strong>Weeks 18–22:</strong> You may feel baby’s first kicks (quickening). Hearing develops and organs mature.</li>
<li><strong>Weeks 23–27:</strong> Baby gains weight, lungs continue developing, and sleep cycles begin.</li>
</ul>
</div>

<!-- Physical Changes -->
<div class="section">
<h3>Physical Changes in Mother</h3>
<ul>
<li>Visible baby bump growth</li>
<li>Reduced nausea</li>
<li>Increased appetite</li>
<li>Back pain or leg cramps</li>
<li>Stretch marks may appear</li>
</ul>
</div>

<!-- Medical Monitoring -->
<div class="section">
<h3>Medical Monitoring & Tests</h3>
<ul>
<li>Anomaly scan (detailed ultrasound)</li>
<li>Blood sugar screening (gestational diabetes test)</li>
<li>Routine blood pressure monitoring</li>
<li>Weight and fetal growth tracking</li>
</ul>
</div>

<!-- Warning Signs -->
<div class="section">
<h3>Warning Signs (Seek Medical Help)</h3>
<ul>
<li>Severe abdominal pain</li>
<li>Vaginal bleeding or fluid leakage</li>
<li>Persistent headaches</li>
<li>Sudden swelling in hands or face</li>
<li>Reduced baby movements after week 24</li>
</ul>
</div>

<div class="buttons">
<button class="back" onclick="location.href='planning_trimester.php'">⬅ Back</button>
<button class="consult" onclick="location.href='consult_doctor.php'">👩‍⚕ Consult Doctor</button>
<button class="next" onclick="location.href='third_trimester.php'">Next ➡</button>
</div>

</div>

</body>
</html>
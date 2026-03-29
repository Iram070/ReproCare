<!DOCTYPE html>
<html>
<head>
<title>FemVita - Third Trimester</title>
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

<h1>Third Trimester (Week 28 – 40)</h1>

<!-- Overview -->
<div class="section">
<h3>Overview</h3>
<p>
The third trimester is the final stage of pregnancy. From weeks 28 to 40,
your baby grows rapidly and prepares for birth while your body gets ready for labor and delivery.
</p>
</div>

<!-- Baby Development -->
<div class="section">
<h3>Baby Development</h3>
<ul>
<li><strong>Weeks 28–31:</strong> Baby gains body fat, eyes open and close, and brain development accelerates.</li>
<li><strong>Weeks 32–35:</strong> Lungs continue maturing, bones fully develop, and baby increases in weight.</li>
<li><strong>Weeks 36–40:</strong> Baby moves into head-down position, organs are fully developed, and is ready for birth.</li>
</ul>
</div>

<!-- Physical Changes -->
<div class="section">
<h3>Physical Changes in Mother</h3>
<ul>
<li>Increased back pain</li>
<li>Shortness of breath</li>
<li>Frequent urination</li>
<li>Swelling in feet and ankles</li>
<li>Braxton Hicks contractions</li>
</ul>
</div>

<!-- Medical Monitoring -->
<div class="section">
<h3>Medical Monitoring & Tests</h3>
<ul>
<li>Regular prenatal checkups</li>
<li>Blood pressure monitoring</li>
<li>Fetal heart rate checks</li>
<li>Position assessment of baby</li>
<li>Discussion about delivery plan</li>
</ul>
</div>

<!-- Warning Signs -->
<div class="section">
<h3>Warning Signs (Seek Medical Help)</h3>
<ul>
<li>Severe abdominal pain</li>
<li>Heavy bleeding</li>
<li>Sudden severe swelling</li>
<li>Decreased baby movements</li>
<li>Regular painful contractions before 37 weeks</li>
</ul>
</div>

<div class="buttons">
<button class="back" onclick="location.href='second_trimester.php'">⬅ Back</button>
<button class="consult" onclick="location.href='consult_doctor.php'">👩‍⚕ Consult Doctor</button>
<button class="next" onclick="location.href='pregnant_diet.php'">Next ➡</button>
</div>

</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>ReproCare - Married Journey</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
    margin:0;
    font-family:'Segoe UI', sans-serif;
    background: linear-gradient(135deg,#f8bbd0,#fce4ec);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

/* Main Container */

.container{
    background:#fff5f9;
    width:90%;
    max-width:920px;
    padding:45px;
    border-radius:30px;
    border:2px solid #f06292;
    box-shadow:0 20px 60px rgba(233,30,99,0.15);
    text-align:center;
    animation:fadeIn 0.8s ease;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(30px);}
    to{opacity:1; transform:translateY(0);}
}

h2{
    color:#ad1457;
    margin-bottom:10px;
    font-weight:700;
}

.subtitle{
    color:#444;
    margin-bottom:40px;
    font-size:16px;
    font-weight:600;
}

/* Cards Section */

.card-container{
    display:flex;
    justify-content:center;
    gap:50px;
    flex-wrap:wrap;
}

.card{
    background:linear-gradient(135deg,#ffffff,#ffe4ec);
    width:260px;
    padding:35px;
    border-radius:25px;
    cursor:pointer;
    transition:0.4s;
    box-shadow:0 10px 25px rgba(233,30,99,0.08);
    position:relative;
    overflow:hidden;
    border:1px solid #f8bbd0;
}

.card:hover{
    transform:translateY(-12px) scale(1.06);
    box-shadow:0 18px 40px rgba(233,30,99,0.25);
}

/* Glow Animation */

.card::before{
    content:"";
    position:absolute;
    width:200%;
    height:200%;
    background: radial-gradient(circle, rgba(255,105,180,0.15), transparent 70%);
    top:-50%;
    left:-50%;
    animation:rotateGlow 7s linear infinite;
}

@keyframes rotateGlow{
    0%{transform:rotate(0deg);}
    100%{transform:rotate(360deg);}
}

.card img{
    width:120px;
    height:120px;
    object-fit:contain;
    margin-bottom:18px;
}

.card h3{
    margin:12px 0 8px 0;
    color:#c2185b;
    font-weight:700;
}

.card p{
    font-size:14px;
    color:#555;
    font-weight:500;
}

/* Back Button */

.back-container{
    margin-top:50px;
    text-align:center;
}

.back-btn{
    padding:12px 35px;
    border:none;
    border-radius:30px;
    font-weight:700;
    cursor:pointer;
    font-size:14px;
    background:#eeeeee;
    color:#444;
    transition:0.3s;
}

.back-btn:hover{
    background:#dddddd;
}

</style>
</head>

<body>

<div class="container">

    <h2>ReproCare</h2>
    <div class="subtitle">
        Your health journey after marriage begins here.
        Understand safe intimacy, hormonal balance, emotional wellness, and reproductive care.
    </div>

    <div class="card-container">

        <!-- Early Married -->
        <div class="card" onclick="openEarlyMarried()">
            <img src="images/icon_couple.png" alt="Early Married">
            <h3>Early Married</h3>
            <p>
                Support for newly married couples focusing on safe intimacy,
                protection, and emotional well-being.
            </p>
        </div>

        <!-- Planning to Conceive -->
        <div class="card" onclick="openPlanning()">
            <img src="images/icon_newborn.png" alt="Planning to Conceive">
            <h3>Planning to Conceive</h3>
            <p>
                Understand ovulation, track fertile days,
                and prepare your body for a healthy pregnancy journey.
            </p>
        </div>

    </div>

    <!-- Center Back Button -->
    <div class="back-container">
        <button class="back-btn" onclick="goBack()">⬅ Back</button>
    </div>

</div>

<script>

function goBack(){
    window.location.href = "select_role.php";
}

function openEarlyMarried(){
    window.location.href = "married_health_journey.php";
}

function openPlanning(){
    window.location.href = "planning_conceive.php";
}

</script>

</body>
</html>
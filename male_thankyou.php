<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thank You</title>

<style>

/* ===== Animated Romantic Gradient Background ===== */
body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    overflow:hidden;
    background:linear-gradient(-45deg,#e3f2fd,#bbdefb,#90caf9,#64b5f6);
    background-size:400% 400%;
    animation:gradientMove 12s ease infinite;
    position:relative;
}

@keyframes gradientMove{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

/* ===== Floating Decorative Circles ===== */
.circle{
    position:absolute;
    border-radius:50%;
    filter:blur(120px);
    opacity:0.5;
    animation:float 10s infinite alternate ease-in-out;
    z-index:0;
}

.circle1{
    width:450px;
    height:450px;
    background:#42a5f5;
    top:-150px;
    left:-150px;
}

.circle2{
    width:500px;
    height:500px;
    background:#1e88e5;
    bottom:-150px;
    right:-150px;
}

@keyframes float{
    from{transform:translateY(0);}
    to{transform:translateY(60px);}
}

/* ===== Glass Blur Card ===== */
.card{
    width:90%;
    max-width:650px;
    padding:55px;
    border-radius:35px;
    background:rgba(255,255,255,0.25);
    backdrop-filter:blur(20px);
    border:1px solid rgba(255,255,255,0.4);
    box-shadow:
        0 0 40px rgba(66,165,245,0.6),
        0 20px 60px rgba(0,0,0,0.2);
    text-align:center;
    position:relative;
    z-index:2;
    animation:fadeInScale 1.2s ease forwards;
    opacity:0;
}

/* Smooth Entry Animation */
@keyframes fadeInScale{
    from{opacity:0; transform:translateY(40px) scale(0.95);}
    to{opacity:1; transform:translateY(0) scale(1);}
}

h1{
    color:#0d47a1;
    margin-bottom:20px;
    font-size:30px;
}

p{
    color:#263238;
    font-size:16px;
    line-height:1.8;
    margin-bottom:30px;
}

/* Buttons */
.button-group{
    display:flex;
    justify-content:center;
    gap:25px;
    flex-wrap:wrap;
}

.btn{
    padding:14px 40px;
    border-radius:30px;
    background:#1565c0;
    color:white;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
}

.btn:hover{
    background:#0d47a1;
    transform:scale(1.05);
    box-shadow:0 8px 20px rgba(13,71,161,0.5);
}

@media(max-width:600px){
    .card{padding:35px;}
    h1{font-size:24px;}
}

</style>
</head>
<body>

<!-- Floating Background -->
<div class="circle circle1"></div>
<div class="circle circle2"></div>

<!-- Glass Card -->
<div class="card">

<h1>💙 Thank You for Visiting 💙</h1>

<p>
We sincerely appreciate your effort in learning about fertility,
conception, and building a healthy future together.
Your commitment shows responsibility, love, and strength.
</p>

<p>
Pregnancy is not only physical — it is emotional.
Support, care, patience, and understanding
make the journey truly beautiful.
</p>

<div class="button-group">
<a href="select_role.php" class="btn">⬅ Back</a>
<a href="love.php" class="btn">❤️ Support Your Partner ❤️</a>
</div>

</div>

</body>
</html>
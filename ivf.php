<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Conception Solutions</title>

<style>

/* ===== Soft Romantic Blue Gradient ===== */
body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,#e3f2fd,#c5dff8,#90caf9);
    overflow-x:hidden;
    position:relative;
}

/* Floating Decorative Circles */
body::before,
body::after{
    content:"";
    position:absolute;
    border-radius:50%;
    filter:blur(120px);
    opacity:0.4;
    animation:float 12s infinite alternate ease-in-out;
}

body::before{
    width:400px;
    height:400px;
    background:#64b5f6;
    top:-150px;
    left:-150px;
}

body::after{
    width:450px;
    height:450px;
    background:#42a5f5;
    bottom:-150px;
    right:-150px;
}

@keyframes float{
    from{transform:translateY(0);}
    to{transform:translateY(60px);}
}

/* Container */
.container{
    width:90%;
    max-width:900px;
    margin:80px auto;
    text-align:center;
}

/* Headline */
h1{
    font-size:30px;
    color:#0d47a1;
    margin-bottom:50px;
}

/* Glass Card Style */
.card{
    position:relative;
    padding:35px;
    margin:40px 0;
    border-radius:30px;
    background:rgba(255,255,255,0.25);
    backdrop-filter:blur(18px);
    border:2px solid rgba(13,71,161,0.5);
    box-shadow:0 15px 35px rgba(0,0,0,0.1);
    text-align:left;
    animation:fadeUp 1s ease forwards;
    opacity:0;
}

/* Fade In */
@keyframes fadeUp{
    from{opacity:0; transform:translateY(50px);}
    to{opacity:1; transform:translateY(0);}
}

.card:nth-child(2){animation-delay:0.3s;}
.card:nth-child(3){animation-delay:0.6s;}
.card:nth-child(4){animation-delay:0.9s;}

.card h2{
    color:#0d47a1;
    margin-bottom:15px;
}

.card p{
    margin:8px 0;
    color:#263238;
    font-size:15px;
    line-height:1.6;
}

.risk{
    margin-top:15px;
    font-weight:bold;
    color:#b71c1c;
}

/* ===== Bottom Buttons ===== */
.bottom-buttons{
    margin-top:50px;
    display:flex;
    justify-content:center;
    gap:40px;
    flex-wrap:wrap;
}

.nav-btn{
    padding:14px 45px;
    border-radius:30px;
    background:#1565c0;
    color:white;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
}

.nav-btn:hover{
    background:#0d47a1;
    transform:scale(1.05);
}

@media(max-width:600px){
    h1{font-size:22px;}
    .card{padding:25px;}
}

</style>
</head>
<body>

<div class="container">

<h1>💙 Facing Difficulties in Conception ?? Here’s the Solution 💙</h1>

<div class="card">
<h2>1️⃣ Timed Intercourse & Ovulation Tracking</h2>
<p>• Identify fertile window using ovulation kits or cycle tracking.</p>
<p>• Best time is 24–36 hours after LH surge detection.</p>
<p>• Intercourse every alternate day during fertile period.</p>
<p>• Maintain emotional comfort and reduce stress.</p>
<p>• Combine with healthy diet and sleep routine.</p>
<p class="risk">Risk: Incorrect timing may reduce chances of natural conception.</p>
</div>

<div class="card">
<h2>2️⃣ IUI (Intrauterine Insemination)</h2>
<p>• Washed and concentrated sperm placed directly into uterus.</p>
<p>• Bypasses cervical mucus barriers.</p>
<p>• Helpful in mild male infertility cases.</p>
<p>• Quick and painless outpatient procedure.</p>
<p>• Often combined with ovulation stimulation.</p>
<p class="risk">Risk: Lower success rate compared to IVF in severe infertility cases.</p>
</div>

<div class="card">
<h2>3️⃣ IVF / ICSI Advanced Fertility Treatment</h2>
<p>• Egg and sperm combined in laboratory environment.</p>
<p>• ICSI injects single sperm directly into egg.</p>
<p>• Used in severe male factor infertility.</p>
<p>• Embryo transferred into uterus after development.</p>
<p>• High success rate when monitored properly.</p>
<p class="risk">Risk: Expensive procedure and not 100% guaranteed success.</p>
</div>

<div class="bottom-buttons">
<a href="male_slide4.php" class="nav-btn">⬅ Back</a>
<a href="male_thankyou.php" class="nav-btn">Next →</a>
<a href="consult_doctor.php" class="nav-btn">Doctor consult</a>
</div>

</div>

</body>
</html>
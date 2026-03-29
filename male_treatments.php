<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Male Fertility Treatments</title>

<style>

/* ===== Romantic Blue Gradient Background ===== */
body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,#e3f2fd,#bbdefb,#90caf9);
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
    animation:float 10s infinite alternate ease-in-out;
}

body::before{
    width:420px;
    height:420px;
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
    width:92%;
    max-width:1300px;
    margin:80px auto;
    text-align:center;
}

h1{
    color:#0d47a1;
    font-size:32px;
    margin-bottom:50px;
}

/* Grid */
.grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:30px;
}

/* Glass Card */
.card{
    position:relative;
    padding:30px;
    border-radius:45px;
    background:rgba(255,255,255,0.25);
    backdrop-filter:blur(18px);
    border:3px solid rgba(13,71,161,0.6);
    box-shadow:0 10px 30px rgba(0,0,0,0.1);
    transition:0.4s;
    overflow:hidden;
    cursor:pointer;
    animation:fadeUp 0.8s ease forwards;
    opacity:0;
}

/* Glowing Border */
.card::before{
    content:"";
    position:absolute;
    inset:-3px;
    border-radius:50px;
    padding:3px;
    background:linear-gradient(45deg,#42a5f5,#0d47a1,#64b5f6,#1565c0);
    background-size:300% 300%;
    animation:glowMove 6s linear infinite;
    -webkit-mask:
      linear-gradient(#fff 0 0) content-box,
      linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
            mask-composite: exclude;
}

@keyframes glowMove{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

/* Ripple */
.card span.ripple{
    position:absolute;
    border-radius:50%;
    transform:scale(0);
    animation:ripple 0.6s linear;
    background:rgba(255,255,255,0.6);
}
@keyframes ripple{
    to{transform:scale(4);opacity:0;}
}

/* Fade animation */
@keyframes fadeUp{
    from{opacity:0; transform:translateY(40px);}
    to{opacity:1; transform:translateY(0);}
}

.card:nth-child(1){animation-delay:0.1s;}
.card:nth-child(2){animation-delay:0.2s;}
.card:nth-child(3){animation-delay:0.3s;}
.card:nth-child(4){animation-delay:0.4s;}
.card:nth-child(5){animation-delay:0.5s;}
.card:nth-child(6){animation-delay:0.6s;}
.card:nth-child(7){animation-delay:0.7s;}
.card:nth-child(8){animation-delay:0.8s;}

.card:hover{
    transform:translateY(-10px) scale(1.03);
    box-shadow:0 20px 40px rgba(0,0,0,0.15);
}

.card h3{
    color:#0d47a1;
    margin-bottom:12px;
}

.card ul{
    text-align:left;
    font-size:14px;
    color:#263238;
    padding-left:18px;
}

.card ul li{
    margin-bottom:6px;
}

/* ===== Bottom Navigation Buttons ===== */
.bottom-buttons{
    margin-top:60px;
    display:flex;
    justify-content:center;
    gap:40px;
    flex-wrap:wrap;
}

.nav-btn{
    padding:14px 50px;
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

@media(max-width:1100px){
    .grid{grid-template-columns:repeat(2,1fr);}
}
@media(max-width:600px){
    .grid{grid-template-columns:1fr;}
}

</style>
</head>
<body>

<div class="container">
<h1>💙 Medical Treatments for Male Fertility Problems 💙</h1>

<div class="grid">

<div class="card">
<h3>Low Sperm Count</h3>
<ul>
<li>Hormone therapy (FSH, hCG injections).</li>
<li>Clomiphene citrate to boost testosterone.</li>
<li>Antioxidant supplementation.</li>
<li>Treat underlying diseases.</li>
<li>IVF/ICSI for severe cases.</li>
</ul>
</div>

<div class="card">
<h3>Poor Sperm Motility</h3>
<ul>
<li>Antioxidant medications.</li>
<li>Treat genital infections.</li>
<li>Hormone balancing therapy.</li>
<li>Lifestyle correction programs.</li>
<li>ICSI if motility very low.</li>
</ul>
</div>

<div class="card">
<h3>Abnormal Sperm Shape</h3>
<ul>
<li>Antioxidant therapy.</li>
<li>Varicocele surgical repair.</li>
<li>Hormone correction.</li>
<li>Avoid toxins & heat exposure.</li>
<li>IVF with ICSI method.</li>
</ul>
</div>

<div class="card">
<h3>Varicocele</h3>
<ul>
<li>Microsurgical varicocelectomy.</li>
<li>Improves sperm quality.</li>
<li>Reduces testicular heat.</li>
<li>Follow-up semen analysis.</li>
<li>IVF if needed.</li>
</ul>
</div>

<div class="card">
<h3>Erectile Dysfunction</h3>
<ul>
<li>PDE5 inhibitors (Sildenafil).</li>
<li>Testosterone therapy if low.</li>
<li>Psychological counseling.</li>
<li>Penile injections.</li>
<li>Vacuum erection devices.</li>
</ul>
</div>

<div class="card">
<h3>Hormonal Imbalance</h3>
<ul>
<li>Testosterone replacement therapy.</li>
<li>Thyroid treatment.</li>
<li>Medications for prolactin.</li>
<li>Endocrinologist supervision.</li>
<li>Regular hormone testing.</li>
</ul>
</div>

<div class="card">
<h3>Infections</h3>
<ul>
<li>Antibiotic treatment.</li>
<li>Anti-inflammatory drugs.</li>
<li>Treat both partners.</li>
<li>Repeat semen analysis.</li>
<li>Surgery if blockage occurs.</li>
</ul>
</div>

<div class="card">
<h3>Unhealthy Lifestyle</h3>
<ul>
<li>Medical weight reduction.</li>
<li>Stop smoking program.</li>
<li>Alcohol control plan.</li>
<li>Nutrition therapy.</li>
<li>Fertility supplements.</li>
</ul>
</div>

</div>

<div class="bottom-buttons">
<a href="male_slide4.php" class="nav-btn">⬅ Back</a>
<a href="ivf.php" class="nav-btn">Next →</a>
</div>

</div>

<script>
document.querySelectorAll('.card').forEach(card=>{
  card.addEventListener('click',function(e){
    const ripple=document.createElement("span");
    ripple.classList.add("ripple");
    const rect=this.getBoundingClientRect();
    ripple.style.left=e.clientX-rect.left+"px";
    ripple.style.top=e.clientY-rect.top+"px";
    this.appendChild(ripple);
    setTimeout(()=>{ripple.remove();},600);
  });
});
</script>

</body>
</html>
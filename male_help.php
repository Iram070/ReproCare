<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Male Fertility Problems</title>

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
    margin:60px auto;
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

/* ===== Glass Card ===== */
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

/* Glowing Animated Border */
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

/* Ripple Effect */
.card span.ripple{
    position:absolute;
    border-radius:50%;
    transform:scale(0);
    animation:ripple 0.6s linear;
    background:rgba(255,255,255,0.6);
}

@keyframes ripple{
    to{
        transform:scale(4);
        opacity:0;
    }
}

/* Fade Up */
@keyframes fadeUp{
    from{opacity:0; transform:translateY(40px);}
    to{opacity:1; transform:translateY(0);}
}

/* Stagger animation */
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

/* Text */
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

/* Next Button */
.next-btn{
    margin-top:60px;
    display:inline-block;
    padding:14px 50px;
    border-radius:30px;
    background:#1565c0;
    color:white;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
}

.next-btn:hover{
    background:#0d47a1;
    transform:scale(1.05);
}

/* Responsive */
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
<h1>💙 Common Male Fertility Problems 💙</h1>

<div class="grid">

<div class="card">
<h3>Low Sperm Count</h3>
<ul>
<li>Reduced sperm in semen.</li>
<li>Lower fertilization chance.</li>
<li>Linked to obesity & smoking.</li>
<li>Hormonal imbalance cause.</li>
<li>Detected via semen test.</li>
</ul>
</div>

<div class="card">
<h3>Poor Sperm Motility</h3>
<ul>
<li>Sperm swim poorly.</li>
<li>Cannot reach egg.</li>
<li>Oxidative stress cause.</li>
<li>Infections affect movement.</li>
<li>Improves with antioxidants.</li>
</ul>
</div>

<div class="card">
<h3>Abnormal Shape</h3>
<ul>
<li>Irregular sperm structure.</li>
<li>Egg penetration reduced.</li>
<li>Heat damages sperm.</li>
<li>Toxin exposure cause.</li>
<li>Morphology test diagnosis.</li>
</ul>
</div>

<div class="card">
<h3>Varicocele</h3>
<ul>
<li>Enlarged scrotal veins.</li>
<li>Increases testicular heat.</li>
<li>Reduces sperm quality.</li>
<li>Common infertility cause.</li>
<li>Surgery may improve.</li>
</ul>
</div>

<div class="card">
<h3>Erectile Dysfunction</h3>
<ul>
<li>Difficulty maintaining erection.</li>
<li>Prevents proper intercourse.</li>
<li>Diabetes related.</li>
<li>Stress worsens issue.</li>
<li>Treatable medically.</li>
</ul>
</div>

<div class="card">
<h3>Hormonal Imbalance</h3>
<ul>
<li>Low testosterone levels.</li>
<li>Thyroid disorders affect.</li>
<li>Low libido symptom.</li>
<li>Impacts sperm production.</li>
<li>Blood tests confirm.</li>
</ul>
</div>

<div class="card">
<h3>Infections</h3>
<ul>
<li>STIs damage sperm.</li>
<li>Cause inflammation.</li>
<li>Block sperm ducts.</li>
<li>Pain or discharge signs.</li>
<li>Antibiotics treatable.</li>
</ul>
</div>

<div class="card">
<h3>Unhealthy Lifestyle</h3>
<ul>
<li>Smoking lowers quality.</li>
<li>Alcohol reduces hormones.</li>
<li>Obesity disrupts fertility.</li>
<li>Poor diet impacts sperm.</li>
<li>Healthy habits improve.</li>
</ul>
</div>

</div>

<a href="male_treatments.php" class="next-btn">Next →</a>

</div>

<script>
/* Ripple Effect JS */
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
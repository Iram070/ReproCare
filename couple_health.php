<!DOCTYPE html>
<html>
<head>
<title>FemVita - Couple Health & Hormone Balance</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,#ffdde1,#ffb6c1,#ffc0cb);
    overflow-x:hidden;
}

/* Floating Background Circles */
body::before, body::after{
    content:"";
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,0.35);
    animation:float 8s infinite alternate;
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

/* Main Container */
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
    margin-bottom:15px;
}

.description{
    text-align:center;
    color:#555;
    margin-bottom:40px;
    line-height:1.6;
}

/* Grid */
.grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
}

/* White Cards */
.card{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 6px 18px rgba(214,51,132,0.15);
    transition:0.4s;
}

.card:hover{
    transform:translateY(-6px);
    box-shadow:0 12px 25px rgba(214,51,132,0.25);
}

.card h4{
    color:#c2185b;
    font-size:18px;
    margin-bottom:10px;
}

.card p{
    font-size:14px;
    color:#555;
    line-height:1.6;
}

/* Buttons Section */
.buttons{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-top:50px;
    gap:15px;
    flex-wrap:wrap;
}

button{
    padding:12px 30px;
    border:none;
    border-radius:25px;
    cursor:pointer;
    font-size:15px;
    transition:0.3s;
}

/* Back & Next */
.nav-btn{
    background:#d63384;
    color:white;
}

.nav-btn:hover{
    background:#ad2167;
}

/* Doctor Button Highlight */
.doctor-btn{
    background:#ff69b4;
    color:white;
    font-weight:600;
}

.doctor-btn:hover{
    background:#e055a1;
    box-shadow:0 0 15px rgba(255,105,180,0.6);
}

/* Responsive */
@media(max-width:900px){
    .grid{
        grid-template-columns:repeat(2,1fr);
    }
}

@media(max-width:500px){
    .grid{
        grid-template-columns:1fr;
    }
}

</style>
</head>
<body>

<div class="container">

<h2>Couple Health & Hormone Balance</h2>

<p class="description">
Preparing for pregnancy is a shared journey. Supporting both partners' physical, emotional and hormonal health improves conception chances.
</p>

<div class="grid">

<div class="card">
<h4>Hormone Balance</h4>
<p>Balanced estrogen and progesterone are essential for ovulation and implantation. Maintain regular sleep, proper nutrition and stress control.</p>
</div>

<div class="card">
<h4>Thyroid Health</h4>
<p>Thyroid imbalance may affect ovulation and menstrual cycles. Consider checking TSH levels before planning pregnancy.</p>
</div>

<div class="card">
<h4>Healthy Weight</h4>
<p>Both underweight and overweight conditions can disturb hormone levels. Maintaining a healthy BMI supports fertility.</p>
</div>

<div class="card">
<h4>Stress Management</h4>
<p>High stress increases cortisol which may delay ovulation. Practice meditation, yoga and relaxation techniques regularly.</p>
</div>

<div class="card">
<h4>Male Fertility Health</h4>
<p>Sperm quality improves with balanced diet, zinc-rich foods, regular exercise and avoiding smoking or excessive alcohol.</p>
</div>

<div class="card">
<h4>Quality Sleep</h4>
<p>7–8 hours of restful sleep helps regulate reproductive hormones and improves overall fertility health.</p>
</div>

<div class="card">
<h4>Avoid Harmful Toxins</h4>
<p>Reduce exposure to smoking, alcohol, highly processed foods and plastics containing BPA to protect reproductive health.</p>
</div>

<div class="card">
<h4>Emotional Bonding</h4>
<p>A strong emotional connection lowers stress hormones and strengthens relationship health during conception planning.</p>
</div>

</div>

<div class="buttons">
<button class="nav-btn" onclick="location.href='planning_diet.php'">⬅ Back</button>

<button class="doctor-btn" onclick="location.href='consult_doctor.php'">
👩‍⚕ Consult Doctor
</button>

<button class="nav-btn" onclick="location.href='readiness_check.php'">Next ➡</button>
</div>

</div>

</body>
</html>
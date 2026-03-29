<!DOCTYPE html>
<html>
<head>
<title>FemVita - Female Fertility Support</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,#ffdde1,#ee9ca7);
    overflow-x:hidden;
}

/* Floating Background */
body::before, body::after{
    content:"";
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,0.25);
    animation:float 8s infinite alternate ease-in-out;
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

/* Container */
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
    border:2px solid black; /* ADDED */
}
@keyframes fadeIn{
    from{opacity:0; transform:translateY(40px);}
    to{opacity:1; transform:translateY(0);}
}

h2{
    text-align:center;
    color:#d63384;
    margin-bottom:10px;
}
.description{
    text-align:center;
    color:#555;
    margin-bottom:40px;
}

/* Grid */
.grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
    margin-bottom:40px;
}
.card{
    background:white;
    padding:20px;
    border-radius:20px;
    box-shadow:0 6px 18px rgba(214,51,132,0.15);
    transition:0.3s;
    border:2px solid black; /* ADDED */
}
.card:hover{
    transform:translateY(-6px);
}
.card h4{
    color:#c2185b;
    margin-bottom:10px;
}
.card p{
    font-size:14px;
    color:#444;
    line-height:1.6;
}

/* Full Sections */
.full-section{
    background:white;
    padding:25px;
    border-radius:20px;
    margin-bottom:30px;
    box-shadow:0 6px 18px rgba(214,51,132,0.15);
    border:2px solid black; /* ADDED */
}
.full-section h3{
    color:#c2185b;
    margin-bottom:10px;
}

/* Buttons */
.buttons{
    display:flex;
    justify-content:space-between;
    gap:15px;
    margin-top:30px;
    flex-wrap:wrap;
}

.nav-btn{
    padding:12px 28px;
    border:none;
    border-radius:25px;
    cursor:pointer;
    font-size:15px;
    transition:0.3s;
}

/* Back & Next Pink */
.pink-btn{
    background:#d63384;
    color:white;
}
.pink-btn:hover{
    background:#ad2167;
}

/* Consult Button Soft Purple */
.consult-btn{
    background:#b388eb;
    color:white;
}
.consult-btn:hover{
    background:#9c6ade;
}

/* Responsive */
@media(max-width:992px){
    .grid{
        grid-template-columns:repeat(2,1fr);
    }
}
@media(max-width:600px){
    .grid{
        grid-template-columns:1fr;
    }
}

</style>
</head>
<body>

<div class="container">

<h2>Female Fertility Support</h2>
<p class="description">
If you are facing difficulty conceiving, understanding the causes and solutions can help you take the right steps confidently.
</p>

<!-- Causes -->
<div class="grid">
<div class="card">
<h4>Hormonal Imbalance</h4>
<p>Irregular ovulation due to PCOS, thyroid disorders, or prolactin imbalance may affect conception.</p>
</div>
<div class="card">
<h4>Irregular Periods</h4>
<p>Unpredictable cycles make ovulation tracking difficult and reduce chances of timely conception.</p>
</div>
<div class="card">
<h4>Blocked Fallopian Tubes</h4>
<p>Tubal damage or blockage can prevent sperm from reaching the egg.</p>
</div>
<div class="card">
<h4>Endometriosis</h4>
<p>This condition may interfere with egg quality and implantation process.</p>
</div>
</div>

<!-- Symptoms -->
<div class="grid">
<div class="card">
<h4>Missed or Late Periods</h4>
<p>Frequent irregular cycles may indicate ovulation issues.</p>
</div>
<div class="card">
<h4>Severe Menstrual Pain</h4>
<p>Could signal endometriosis or underlying reproductive conditions.</p>
</div>
<div class="card">
<h4>Excess Hair / Acne</h4>
<p>Often linked with PCOS and hormonal imbalance.</p>
</div>
<div class="card">
<h4>Unexplained Weight Changes</h4>
<p>Sudden gain or loss may affect ovulation patterns.</p>
</div>
</div>

<!-- Treatments -->
<div class="grid">
<div class="card">
<h4>Ovulation Induction</h4>
<p>Medications help stimulate ovulation under medical supervision.</p>
</div>
<div class="card">
<h4>Hormone Therapy</h4>
<p>Balancing thyroid or reproductive hormones improves fertility chances.</p>
</div>
<div class="card">
<h4>Lifestyle Changes</h4>
<p>Healthy weight, stress management, and balanced diet improve outcomes.</p>
</div>
<div class="card">
<h4>IUI / IVF</h4>
<p>Advanced reproductive techniques recommended in specific cases.</p>
</div>
</div>

<!-- Precautions -->
<div class="full-section">
<h3>Precautions & Care</h3>
<p>
Maintain a healthy BMI, avoid smoking and alcohol, track ovulation carefully,
manage stress, sleep properly, and take prenatal vitamins with folic acid.
</p>
</div>

<!-- Emotional Support -->
<div class="full-section">
<h3>Emotional & Mental Well-being</h3>
<p>
Fertility challenges can be emotionally overwhelming. Seek partner support,
practice relaxation techniques, and consider professional counseling if needed.
</p>
</div>

<!-- When to See Doctor -->
<div class="full-section">
<h3>When to Consult a Doctor</h3>
<p>
If under 35 and trying for 12 months without success, or over 35 and trying for 6 months,
seek evaluation from a fertility specialist.
</p>
</div>

<!-- Navigation Buttons -->
<div class="buttons">
<button class="nav-btn pink-btn" onclick="location.href='fertility_info.php'">⬅ Back</button>
<button class="nav-btn consult-btn" onclick="location.href='consult_doctor.php'">Consult Doctor</button>
<button class="nav-btn pink-btn" onclick="location.href='planning_thankyou.php'">Next ➡</button>
</div>

</div>

</body>
</html>
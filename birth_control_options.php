<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>FemVita - Birth Control Options</title>

<style>

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:#f4c2d7;
}

.container{
    max-width:1200px;
    margin:auto;
    padding:80px 40px;
}

/* Headline */
h1{
    text-align:center;
    color:#880e4f;
    font-size:42px;
    font-weight:800;
    margin-bottom:70px;
}

/* 2 + 2 Layout */
.grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:50px;
}

/* Cards */
.card{
    background:white;
    padding:40px 50px;
    border-radius:25px;
    border:4px solid #880e4f;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
    min-height:420px;
    transition:all 0.4s ease;
    animation:fadeUp 0.8s ease forwards;
}

/* Animation */
@keyframes fadeUp{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.card:hover{
    transform:translateY(-8px) scale(1.02);
}

/* Card Titles */
.card h2{
    margin-top:0;
    font-size:24px;
    color:#ad1457;
    margin-bottom:18px;
}

/* Text */
.card p{
    font-size:15px;
    line-height:1.8;
    margin:8px 0;
    text-align:justify;
}

/* Buttons (All Same Color) */
button{
    padding:14px 45px;
    border-radius:30px;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
    background:#880e4f;
    color:white;
    border:none;
    transition:0.3s ease;
}

button:hover{
    background:#ad1457;
    transform:scale(1.05);
}

/* Bottom Section */
.bottom-section{
    text-align:center;
    margin-top:70px;
}

/* Navigation */
.navigation{
    display:flex;
    justify-content:space-between;
    margin-top:40px;
}

/* Responsive */
@media(max-width:900px){
    .grid{
        grid-template-columns:1fr;
    }
}

</style>
</head>

<body>

<div class="container">

<h1>Birth Control Options</h1>

<div class="grid">

<!-- Pills -->
<div class="card">
<h2>Birth Control Pills</h2>

<p><b>Pharmacological Mechanism:</b> Oral contraceptives suppress ovulation by regulating hormonal activity within the hypothalamic-pituitary-ovarian axis while simultaneously thickening cervical mucus to inhibit sperm penetration.</p>

<p><b>Clinical Effectiveness:</b> Up to 99% effective with strict adherence; approximately 91% with typical usage.</p>

<p><b>Therapeutic Advantages:</b></p>
<p>• Regulation of irregular menstrual cycles</p>
<p>• Reduction of menstrual cramps and heavy bleeding</p>
<p>• Improvement in acne and hormonal imbalance symptoms</p>
<p>• Decreased long-term risk of ovarian and endometrial malignancies</p>

<p><b>Potential Side Effects:</b> Mild nausea, breast tenderness, headache, and temporary mood changes during early adaptation.</p>

</div>

<!-- Condom -->
<div class="card">
<h2>Barrier Contraception (Condom)</h2>

<p><b>Functional Principle:</b> Acts as a mechanical barrier preventing sperm from entering the reproductive tract, thereby reducing fertilization probability.</p>

<p><b>Effectiveness Rate:</b> Approximately 85–98% depending on correct and consistent usage.</p>

<p><b>Primary Benefits:</b></p>
<p>• Protection against sexually transmitted infections (STIs)</p>
<p>• Non-hormonal contraceptive solution</p>
<p>• Easily accessible and cost-effective</p>
<p>• No systemic physiological side effects</p>

<p><b>Limitations:</b> Incorrect application, improper storage, or material sensitivity may reduce reliability.</p>

</div>

<!-- Copper T -->
<div class="card">
<h2>Intrauterine Device – Copper T</h2>

<p><b>Mechanism of Action:</b> Releases copper ions within the uterine cavity, creating a spermicidal environment that impairs sperm motility and fertilization capability.</p>

<p><b>Duration of Efficacy:</b> Provides long-acting reversible contraception for 5–10 years.</p>

<p><b>Clinical Advantages:</b></p>
<p>• Over 99% effectiveness rate</p>
<p>• Hormone-free contraceptive alternative</p>
<p>• No daily compliance required</p>
<p>• Rapid return to fertility upon removal</p>

<p><b>Possible Considerations:</b> Initial menstrual cycles may present with increased bleeding or intensified cramping.</p>

</div>

<!-- Natural -->
<div class="card">
<h2>Fertility Awareness & Natural Methods</h2>

<p><b>Scientific Basis:</b> Involves identification of ovulatory windows through basal body temperature monitoring, cervical mucus evaluation, and structured cycle tracking.</p>

<p><b>Effectiveness Estimate:</b> Ranges between 75–88% depending on cycle regularity and monitoring precision.</p>

<p><b>Advantages:</b></p>
<p>• Completely non-pharmacological</p>
<p>• Encourages reproductive health awareness</p>
<p>• No systemic or hormonal side effects</p>
<p>• Suitable for individuals preferring natural approaches</p>

<p><b>Limitations:</b> Reduced reliability in irregular menstrual cycles or hormonal imbalance conditions.</p>

</div>

</div>

<!-- Consult Button -->
<div class="bottom-section">
<button onclick="location.href='consult_doctor.php'">Consult Doctor</button>
</div>

<!-- Navigation -->
<div class="navigation">
<button onclick="location.href='married_health_journey.php'">← Back</button>
<button onclick="location.href='intimate_hygiene.php'">Next →</button>
</div>

</div>

</body>
</html>
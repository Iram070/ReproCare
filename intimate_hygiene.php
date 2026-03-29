<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>FemVita - Intimate Hygiene</title>

<style>

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:#f8c8d8; /* light pink */
    overflow-x:hidden;
}

/* Subtle Wave Background */
body::before{
    content:"";
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:radial-gradient(circle at 20% 30%, rgba(255,255,255,0.4) 0%, transparent 40%),
               radial-gradient(circle at 80% 70%, rgba(255,255,255,0.3) 0%, transparent 40%);
    z-index:-2;
}

/* Subtle Heart Pattern */
body::after{
    content:"♥ ♥ ♥ ♥ ♥ ♥ ♥ ♥ ♥ ♥";
    position:fixed;
    top:20%;
    left:5%;
    font-size:120px;
    color:rgba(255,255,255,0.08);
    transform:rotate(-25deg);
    z-index:-1;
    pointer-events:none;
}

.container{
    width:90%;
    max-width:900px;
    margin:60px auto;
}

/* Headline */
h1{
    text-align:center;
    color:#5c1f2b;
    font-size:40px;
    font-weight:800;
    margin-bottom:60px;
}

/* Card Base */
.card{
    padding:40px;
    border-radius:25px;
    margin-bottom:40px;
    box-shadow:6px 6px 0px #3b0f16;
    transition:0.4s ease;
    animation:fadeUp 0.8s ease forwards;
}

@keyframes fadeUp{
    from{
        opacity:0;
        transform:translateY(30px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.card:hover{
    transform:translateY(-6px);
}

/* Card Colors */
.card1{
    background:#b5838d;
    color:#2d0b12;
}

.card2{
    background:#f1e8da;
    color:#3a2a2a;
}

.card3{
    background:#c97b84;
    color:#2b0a12;
}

.card4{
    background:#f1e8da;
    color:#3a2a2a;
}

/* Text */
.card h2{
    margin-top:0;
    font-size:24px;
    margin-bottom:15px;
}

.card p{
    font-size:15px;
    line-height:1.8;
    margin:8px 0;
}

/* Back Button */
.back-btn{
    display:block;
    width:200px;
    margin:50px auto 0;
    padding:14px;
    border-radius:30px;
    background:#5c1f2b;
    color:white;
    text-align:center;
    font-weight:600;
    text-decoration:none;
    transition:0.3s ease;
}

.back-btn:hover{
    background:#7a2c3a;
    transform:scale(1.05);
}

</style>
</head>

<body>

<div class="container">

<h1>Intimate Hygiene & Reproductive Wellness</h1>

<div class="card card1">
<h2>Daily Intimate Hygiene</h2>
<p>• Clean external genital area with lukewarm water daily.</p>
<p>• Avoid harsh soaps and scented products.</p>
<p>• Choose breathable cotton undergarments.</p>
<p>• Maintain dryness to prevent infection.</p>
<p>• Practice proper menstrual hygiene.</p>
</div>

<div class="card card2">
<h2>Infection Prevention</h2>
<p>• Avoid tight synthetic clothing.</p>
<p>• Change sanitary products every 4–6 hours.</p>
<p>• Wipe front to back after toilet use.</p>
<p>• Stay hydrated to reduce UTI risk.</p>
<p>• Seek medical advice for unusual discharge.</p>
</div>

<div class="card card3">
<h2>Hygiene During Pregnancy</h2>
<p>• Hormonal changes may increase discharge.</p>
<p>• Avoid self-medication.</p>
<p>• Use mild cleansers only if advised.</p>
<p>• Consult doctor for irritation or odor.</p>
<p>• Maintain balanced nutrition.</p>
</div>

<div class="card card4">
<h2>Emotional & Intimate Wellness</h2>
<p>• Healthy communication strengthens intimacy.</p>
<p>• Stress management supports hormonal balance.</p>
<p>• Address pain during intercourse early.</p>
<p>• Emotional well-being supports reproductive health.</p>
<p>• Consult doctor if discomfort persists.</p>
</div>

<a href="birth_control_options.php" class="back-btn">← Back</a>

</div>

</body>
</html>
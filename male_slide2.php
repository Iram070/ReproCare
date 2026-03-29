<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Male Hormonal Education | FemVita</title>

<style>

body{
    margin:0;
    font-family:'Segoe UI', sans-serif;
    background: linear-gradient(135deg,#e3f2fd,#bbdefb,#e1f5fe);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    overflow:hidden;
}

/* Main Glass Container */
.container{
    width:95%;
    max-width:1100px;
    padding:40px;
    background:rgba(255,255,255,0.30);
    backdrop-filter:blur(18px);
    -webkit-backdrop-filter:blur(18px);
    border-radius:30px;
    box-shadow:0 15px 40px rgba(0,0,0,0.08);
    animation:fadeIn 1s ease;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(30px);}
    to{opacity:1; transform:translateY(0);}
}

h1{
    text-align:center;
    color:#0d47a1;
    margin-bottom:30px;
}

/* Cards Grid */
.cards{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
}

/* Individual Card */
.card{
    background:rgba(255,255,255,0.45);
    padding:20px;
    border-radius:18px;
    box-shadow:0 8px 20px rgba(0,0,0,0.05);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-6px);
}

.card h3{
    color:#1565c0;
    margin-bottom:10px;
    font-size:16px;
}

.card p{
    font-size:14px;
    line-height:1.6;
    color:#263238;
}

/* Buttons */
.button-section{
    margin-top:30px;
    text-align:center;
}

.btn{
    padding:12px 35px;
    border:none;
    border-radius:30px;
    font-size:14px;
    cursor:pointer;
    text-decoration:none;
    color:white;
    margin:10px;
    transition:0.3s;
    display:inline-block;
}

.back-btn{
    background:#607d8b;
}

.back-btn:hover{
    background:#455a64;
    transform:scale(1.05);
}

.next-btn{
    background:#1565c0;
}

.next-btn:hover{
    background:#0d47a1;
    transform:scale(1.05);
}

/* Responsive */
@media(max-width:900px){
    .cards{
        grid-template-columns:1fr;
    }
}

</style>
</head>
<body>

<div class="container">

<h1>💙 Male Hormonal Education 💙</h1>

<div class="cards">

    <!-- Row 1 -->
    <div class="card">
        <h3>1️⃣ What is Testosterone?</h3>
        <p>
        Testosterone is the primary male hormone responsible for muscle growth,
        bone strength, voice deepening, facial hair development, and sperm production.
        It plays a key role in physical energy and reproductive health.
        </p>
    </div>

    <div class="card">
        <h3>2️⃣ Puberty & Hormonal Changes</h3>
        <p>
        During puberty, testosterone levels increase naturally. This leads to
        height growth, muscle development, emotional changes, and sexual maturity.
        These changes are a normal part of development.
        </p>
    </div>

    <div class="card">
        <h3>3️⃣ Hormone Balance Importance</h3>
        <p>
        Balanced hormones support stable mood, healthy libido, mental clarity,
        and overall vitality. Low hormone levels may cause fatigue,
        mood changes, or reduced strength.
        </p>
    </div>

    <!-- Row 2 -->
    <div class="card">
        <h3>4️⃣ Sleep & Hormones</h3>
        <p>
        Quality sleep is essential for maintaining healthy testosterone levels.
        Poor sleep patterns can reduce hormone production and affect mood,
        concentration, and physical performance.
        </p>
    </div>

    <div class="card">
        <h3>5️⃣ Exercise & Nutrition</h3>
        <p>
        Regular physical activity and a balanced diet rich in protein,
        healthy fats, and essential minerals help maintain strong hormone balance
        and support reproductive health.
        </p>
    </div>

    <div class="card">
        <h3>6️⃣ Stress & Lifestyle Impact</h3>
        <p>
        Chronic stress, smoking, alcohol, and unhealthy habits can negatively
        affect hormone levels. Managing stress and maintaining a healthy
        lifestyle helps preserve long-term hormonal health.
        </p>
    </div>

</div>

<div class="button-section">
    <a href="male_dashboard" class="btn back-btn">⬅ Back</a>
    <a href="male_slide3.php" class="btn next-btn">Next ➜</a>
</div>

</div>

</body>
</html>
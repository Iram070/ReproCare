<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Postpartum Details | FemVita</title>

<style>

/* ===== BODY BACKGROUND ===== */
body{
    margin:0;
    padding:0;
    font-family:'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #f8caca, #f4b6c2, #f2a7b8);
    overflow-x:hidden;
}

/* ===== FLOATING BACKGROUND CIRCLES ===== */
body::before,
body::after{
    content:"";
    position:fixed;
    width:400px;
    height:400px;
    background:rgba(255,255,255,0.15);
    border-radius:50%;
    filter:blur(80px);
    z-index:-1;
    animation: float 8s ease-in-out infinite alternate;
}

body::before{
    top:-100px;
    left:-100px;
}

body::after{
    bottom:-120px;
    right:-120px;
}

@keyframes float{
    from{ transform:translateY(0px);}
    to{ transform:translateY(40px);}
}

/* ===== HEADER ===== */
.header-section{
    text-align:center;
    padding:70px 20px 40px 20px;
    animation: fadeIn 1.5s ease;
}

.header-section h1{
    font-size:36px;
    color:#7a2e3a;
    margin-bottom:20px;
}

.header-section p{
    max-width:850px;
    margin:auto;
    font-size:17px;
    color:#5c2a32;
    line-height:1.8;
}

/* ===== CARDS GRID ===== */
.cards-container{
    width:90%;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:30px;
    padding:30px 0 70px 0;
}

/* ===== GLASS CARD ===== */
.card{
    background:rgba(255,255,255,0.25);
    backdrop-filter:blur(15px);
    -webkit-backdrop-filter:blur(15px);
    border-radius:25px;
    padding:28px;
    color:#4a1f27;
    box-shadow:0 8px 32px rgba(0,0,0,0.1);
    border:1px solid rgba(255,255,255,0.3);
    transition:0.4s;
    animation: fadeUp 1.2s ease forwards;
}

.card:hover{
    transform:translateY(-10px) scale(1.02);
}

.card h2{
    margin-top:0;
    font-size:20px;
    color:#7a2e3a;
}

.card p{
    font-size:14px;
    line-height:1.7;
}

/* ===== BUTTONS ===== */
.button-section{
    text-align:center;
    padding-bottom:70px;
}

.btn{
    padding:13px 35px;
    margin:10px;
    border:none;
    border-radius:30px;
    font-size:15px;
    cursor:pointer;
    text-decoration:none;
    color:white;
    transition:0.3s;
}

.back-btn{
    background:#c06c84;
}

.back-btn:hover{
    background:#a85b73;
}

.next-btn{
    background:#8e4f6a;
}

.next-btn:hover{
    background:#753f57;
}

/* ===== ANIMATIONS ===== */
@keyframes fadeIn{
    from{opacity:0; transform:translateY(-20px);}
    to{opacity:1; transform:translateY(0);}
}

@keyframes fadeUp{
    from{opacity:0; transform:translateY(40px);}
    to{opacity:1; transform:translateY(0);}
}

/* ===== RESPONSIVE ===== */
@media(max-width:1000px){
    .cards-container{
        grid-template-columns:repeat(2, 1fr);
    }
}

@media(max-width:600px){
    .cards-container{
        grid-template-columns:1fr;
    }
}

</style>
</head>
<body>

<!-- HEADER -->
<div class="header-section">
    <h1>Postpartum Care & Recovery Guide</h1>
    <p>
    The postpartum period is the healing phase after childbirth where a mother’s body
    gradually returns to its pre-pregnancy state. Physical recovery, emotional balance,
    hygiene care, nutrition, and medical follow-ups are essential for safe healing and
    overall well-being.
    </p>
</div>

<!-- CARDS -->
<div class="cards-container">

    <div class="card">
        <h2>1️⃣ Physical Recovery</h2>
        <p>
        After delivery, the uterus slowly shrinks back to normal size.
        Vaginal bleeding (lochia) may continue for several weeks.
        Mild cramps, back pain, and fatigue are common.
        C-section healing may take 4–6 weeks. Avoid heavy lifting
        and allow gradual recovery.
        </p>
    </div>

    <div class="card">
        <h2>2️⃣ Personal Hygiene Care</h2>
        <p>
        Change sanitary pads regularly and clean gently with warm water.
        Avoid scented products. Keep C-section wounds dry.
        Wear loose cotton clothes. Seek medical care if you notice
        foul odor, swelling, or unusual discharge.
        </p>
    </div>

    <div class="card">
        <h2>3️⃣ Nutrition After Delivery</h2>
        <p>
        Eat iron-rich foods, protein, calcium, fruits, and vegetables.
        Drink 8–10 glasses of water daily. Proper nutrition
        supports faster healing and improves breast milk quality.
        </p>
    </div>

    <div class="card">
        <h2>4️⃣ Breastfeeding Care</h2>
        <p>
        Begin breastfeeding early if possible. Ensure proper latch
        to prevent soreness. Feed every 2–3 hours.
        Keep nipples clean and consult a lactation expert if needed.
        </p>
    </div>

    <div class="card">
        <h2>5️⃣ Emotional & Mental Health</h2>
        <p>
        Mood swings and baby blues are common due to hormonal changes.
        Seek support from family. If sadness lasts more than 2 weeks,
        consult a healthcare professional for guidance.
        </p>
    </div>

    <div class="card">
        <h2>6️⃣ Rest & Sleep</h2>
        <p>
        Sleep when your baby sleeps. Take short naps.
        Avoid overexertion and accept help from loved ones.
        Rest improves both physical and emotional recovery.
        </p>
    </div>

    <div class="card">
        <h2>7️⃣ Gentle Exercise</h2>
        <p>
        Light walking and stretching improve circulation.
        Pelvic floor exercises strengthen muscles.
        Avoid intense workouts until your doctor approves.
        </p>
    </div>

    <div class="card">
        <h2>8️⃣ Postnatal Checkups</h2>
        <p>
        Attend follow-up visits to monitor healing and blood pressure.
        Track baby’s growth and vaccination schedule.
        Regular checkups ensure safety for mother and baby.
        </p>
    </div>

    <div class="card">
        <h2>9️⃣ Warning Signs</h2>
        <p>
        Seek immediate help if you experience heavy bleeding,
        high fever, severe pain, chest pain, foul discharge,
        or harmful thoughts. Early care prevents complications.
        </p>
    </div>

</div>

<!-- BUTTONS -->
<div class="button-section">
    <a href="postpartum.php" class="btn back-btn">⬅ Back</a>
    <a href="thank_you.php" class="btn next-btn">Next ➜</a>
</div>

</body>
</html>
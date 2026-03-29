<!DOCTYPE html>
<html>
<head>
<title>FemVita - Pregnancy Lifestyle</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<style>

*{ box-sizing:border-box; }

body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#ffd6e8,#fcbad3,#f8a5c2);
    min-height:100vh;
    padding:60px 0;
    overflow-x:hidden;
}

body::before, body::after{
    content:"";
    position:fixed;
    border-radius:50%;
    background:rgba(255,255,255,0.35);
    animation:float 8s infinite alternate ease-in-out;
    z-index:-1;
}

body::before{
    width:300px;
    height:300px;
    top:-100px;
    left:-100px;
}

body::after{
    width:250px;
    height:250px;
    bottom:-100px;
    right:-100px;
}

@keyframes float{
    from{transform:translateY(0);}
    to{transform:translateY(40px);}
}

.main-container{
    width:95%;
    max-width:1200px;
    margin:auto;
    background:rgba(255,255,255,0.6);
    backdrop-filter:blur(15px);
    padding:50px;
    border-radius:25px;
    box-shadow:0 20px 50px rgba(214,51,132,0.25);
    animation:fadeIn 1s ease;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(40px);}
    to{opacity:1; transform:translateY(0);}
}

h1{
    text-align:center;
    font-family:'Playfair Display',serif;
    font-size:36px;
    color:#b3125d;
    margin-bottom:40px;
}

.lifestyle-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.life-card{
    background:#f6cfc2;
    border-radius:30px;
    padding:25px;
    min-height:250px;
    transition:0.3s;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
}

.life-card:hover{
    transform:translateY(-8px);
}

.life-card h3{
    color:#8b1e3f;
    margin-bottom:12px;
    font-size:17px;
}

.life-card p{
    font-size:14px;
    line-height:1.7;
    color:#5a3b3b;
}

.tip-note{
    margin-top:40px;
    background:#fff0f6;
    border:2px solid #d63384;
    border-radius:25px;
    padding:20px;
    text-align:center;
    font-weight:500;
    color:#7a1c4b;
}

.buttons{
    text-align:center;
    margin-top:40px;
}

button{
    padding:12px 30px;
    border:none;
    border-radius:25px;
    font-size:15px;
    cursor:pointer;
    margin:10px;
    transition:0.3s;
}

.back{
    background:white;
    color:#d63384;
    border:2px solid #d63384;
}

.back:hover{
    background:#ffe3ef;
}

.next{
    background:#d63384;
    color:white;
}

.next:hover{
    background:#ad2167;
    transform:translateY(-3px);
}

@media(max-width:900px){
    .lifestyle-grid{
        grid-template-columns:1fr;
    }
}

</style>
</head>

<body>

<div class="main-container">

<h1>Healthy Lifestyle During Pregnancy</h1>

<div class="lifestyle-grid">

<div class="life-card">
<h3>🥗 Balanced Nutrition</h3>
<p>Eat a variety of fruits, vegetables, whole grains, lean protein, and dairy products. Include iron, calcium, and folic acid-rich foods. Avoid raw meat, unpasteurized dairy, and highly processed foods to support healthy fetal growth.</p>
</div>

<div class="life-card">
<h3>💧 Stay Hydrated</h3>
<p>Drink 8–10 glasses of water daily to maintain amniotic fluid levels and prevent dehydration. Proper hydration helps reduce swelling, constipation, and fatigue during pregnancy.</p>
</div>

<div class="life-card">
<h3>💤 Proper Sleep & Rest</h3>
<p>Aim for 7–9 hours of quality sleep each night. Sleep on your left side to improve blood flow to the baby. Use pillows for support and take short naps if you feel tired.</p>
</div>

<div class="life-card">
<h3>🧘‍♀️ Light Physical Activity</h3>
<p>Engage in safe exercises like walking, prenatal yoga, stretching, and breathing exercises. Regular movement improves circulation, reduces back pain, and prepares the body for labor.</p>
</div>

<div class="life-card">
<h3>🩺 Regular Medical Checkups</h3>
<p>Attend all prenatal visits to monitor baby’s growth and maternal health. Take prescribed supplements regularly and consult your doctor if you notice unusual symptoms.</p>
</div>

<div class="life-card">
<h3>🧠 Mental & Emotional Well-being</h3>
<p>Hormonal changes may cause mood swings. Practice relaxation techniques, listen to calming music, and maintain emotional support from family and friends for a positive mindset.</p>
</div>

<div class="life-card">
<h3>👕 Comfortable Clothing & Hygiene</h3>
<p>Wear loose, breathable clothes and comfortable footwear. Maintain good hygiene and take warm showers. Proper comfort reduces skin irritation and swelling.</p>
</div>

<div class="life-card">
<h3>🚫 Avoid Harmful Substances</h3>
<p>Avoid smoking, alcohol, and self-medication. Limit caffeine intake and stay away from second-hand smoke to protect baby’s development.</p>
</div>

<div class="life-card">
<h3>🧍‍♀️ Good Posture & Daily Movements</h3>
<p>Maintain correct posture while sitting and standing. Avoid heavy lifting and long hours of standing. Bend your knees when picking up objects to protect your back.</p>
</div>

</div>

<div class="tip-note">
💡 Tip: A balanced lifestyle during pregnancy promotes both physical and emotional well-being. Listen to your body, take adequate rest, and always follow your doctor’s advice for a safe and healthy journey.
</div>

<div class="buttons">
<button class="back" onclick="location.href='pregnant.php'">⬅ Back</button>
<button class="next" onclick="location.href='postpartum.php'">Next ➡</button>
</div>

</div>

</body>
</html>
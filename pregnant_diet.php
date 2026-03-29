<!DOCTYPE html>
<html>
<head>
<title>FemVita - Trimester Diet Guide</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500&display=swap');

*{
    box-sizing:border-box;
}

body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#ffd6e8,#fcbad3,#f8a5c2);
    min-height:100vh;
    padding:60px 0;
    overflow-x:hidden;
}

/* Floating Circles */
body::before, body::after{
    content:"";
    position:fixed;
    border-radius:50%;
    background:rgba(255,255,255,0.35);
    animation:floatBg 8s infinite alternate ease-in-out;
    z-index:-1;
}

body::before{
    width:300px;
    height:300px;
    top:-100px;
    left:-80px;
}

body::after{
    width:250px;
    height:250px;
    bottom:-100px;
    right:-80px;
}

@keyframes floatBg{
    from{transform:translateY(0);}
    to{transform:translateY(40px);}
}

/* Main Container */
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
    color:#b3125d;
    margin-bottom:40px;
}

.trimester-heading{
    text-align:center;
    font-family:'Playfair Display',serif;
    font-size:32px;
    color:#c2185b;
    margin:70px 0 40px 0;
}

/* Grid */
.grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
    margin-bottom:40px;
}

/* Cards */
.card{
    background:white;
    border:2px solid black;
    border-radius:20px;
    padding:20px;
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(214,51,132,0.25);
}

.card h3{
    color:#d63384;
    margin-bottom:10px;
}

.card p{
    font-size:14px;
    line-height:1.6;
    color:#444;
}

/* Buttons */
.buttons{
    text-align:center;
    margin-top:40px;
}

button{
    padding:12px 28px;
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

.consult{
    background:#b388eb;
    color:white;
}

.consult:hover{
    background:#9c6ade;
}

.next{
    background:#d63384;
    color:white;
}

.next:hover{
    background:#ad2167;
}

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

<div class="main-container">

<h1>Complete Pregnancy Diet Guide</h1>

<!-- FIRST TRIMESTER -->
<div class="trimester-heading">First Trimester (Week 1 – 12)</div>

<div class="grid">
<div class="card"><h3>Folic Acid</h3><p>Essential to prevent neural tube defects. Include spinach, broccoli, citrus fruits, and fortified grains.</p></div>
<div class="card"><h3>Vitamin B6</h3><p>Helps reduce nausea and morning sickness. Found in bananas, nuts, and whole grains.</p></div>
<div class="card"><h3>Iron</h3><p>Supports increased blood production and prevents fatigue. Include beans and lean meats.</p></div>
<div class="card"><h3>Hydration</h3><p>Drink 8–10 glasses of water daily to manage nausea and maintain amniotic fluid.</p></div>

<div class="card"><h3>Small Frequent Meals</h3><p>Eat small portions every 2–3 hours to control nausea and maintain energy.</p></div>
<div class="card"><h3>Protein Intake</h3><p>Supports early tissue growth. Include eggs, lentils, tofu, and dairy.</p></div>
<div class="card"><h3>Healthy Snacks</h3><p>Choose nuts, yogurt, and fruit instead of processed foods.</p></div>
<div class="card"><h3>Avoid Harmful Foods</h3><p>Avoid raw meat, alcohol, excessive caffeine, and unpasteurized dairy.</p></div>
</div>

<!-- SECOND TRIMESTER -->
<div class="trimester-heading">Second Trimester (Week 13 – 27)</div>

<div class="grid">
<div class="card"><h3>Calcium</h3><p>Essential for bone and teeth development. Include milk, cheese, and leafy greens.</p></div>
<div class="card"><h3>Vitamin D</h3><p>Helps calcium absorption and strengthens immunity.</p></div>
<div class="card"><h3>Omega-3</h3><p>Supports brain development. Include walnuts, flaxseeds, and fish.</p></div>
<div class="card"><h3>Fiber</h3><p>Prevents constipation. Eat fruits, vegetables, and whole grains.</p></div>

<div class="card"><h3>Magnesium</h3><p>Supports muscle and nerve function and reduces cramps.</p></div>
<div class="card"><h3>Iron Increase</h3><p>Baby growth increases iron demand; continue iron-rich foods.</p></div>
<div class="card"><h3>Balanced Calories</h3><p>Add 300–350 healthy calories daily to support baby growth.</p></div>
<div class="card"><h3>Protein Boost</h3><p>Include more legumes, dairy, and lean meat for rapid fetal development.</p></div>
</div>

<!-- THIRD TRIMESTER -->
<div class="trimester-heading">Third Trimester (Week 28 – 40)</div>

<div class="grid">
<div class="card"><h3>High Protein</h3><p>Supports rapid weight gain of baby and muscle development.</p></div>
<div class="card"><h3>Iron & Calcium</h3><p>Important for final bone strengthening and blood supply.</p></div>
<div class="card"><h3>Healthy Fats</h3><p>Include omega-3 to support brain and eye development.</p></div>
<div class="card"><h3>Complex Carbs</h3><p>Maintain steady energy levels and prevent fatigue.</p></div>

<div class="card"><h3>Hydration</h3><p>Prevents swelling and supports circulation.</p></div>
<div class="card"><h3>Smaller Meals</h3><p>Large uterus may reduce stomach space—eat smaller portions frequently.</p></div>
<div class="card"><h3>Reduce Salt</h3><p>Helps prevent excessive swelling and high blood pressure.</p></div>
<div class="card"><h3>Energy Foods</h3><p>Prepare body for labor with nutrient-dense meals.</p></div>
</div>

<div class="buttons">
<button class="back" onclick="location.href='third_trimester.php'">⬅ Back</button>
<button class="consult" onclick="location.href='consult_doctor.php'">👩‍⚕ Consult Doctor</button>
<button class="next" onclick="location.href='pregnant_exercise.php'">Next ➡</button>
</div>

</div>

</body>
</html>
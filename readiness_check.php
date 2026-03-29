<!DOCTYPE html>
<html>
<head>
<title>FemVita - Readiness Check</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

/* ===== BODY BACKGROUND ===== */
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #ffdde1, #ee9ca7);
    overflow-x: hidden;
}

/* Floating Decorative Circles */
body::before, body::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.25);
    animation: float 8s infinite ease-in-out alternate;
}

body::before {
    width: 300px;
    height: 300px;
    top: -100px;
    left: -100px;
}

body::after {
    width: 250px;
    height: 250px;
    bottom: -80px;
    right: -80px;
}

@keyframes float {
    from { transform: translateY(0px); }
    to { transform: translateY(30px); }
}

/* ===== CONTAINER ===== */
.container {
    width: 90%;
    max-width: 900px;
    margin: 50px auto;
    padding: 30px;
    border-radius: 20px;
    background: rgba(255,255,255,0.25);
    backdrop-filter: blur(15px);
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
    animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

h2 {
    text-align: center;
    color: #d63384;
}

/* ===== ACCORDION ===== */
.accordion {
    margin-top: 20px;
}

.accordion-header {
    padding: 15px;
    background: rgba(255,255,255,0.6);
    cursor: pointer;
    border-radius: 10px;
    margin-bottom: 5px;
    font-weight: bold;
}

.accordion-content {
    display: none;
    padding: 15px;
    background: rgba(255,255,255,0.4);
    border-radius: 10px;
    margin-bottom: 10px;
}

label {
    display: block;
    margin-bottom: 8px;
}

/* ===== BUTTON ===== */
button {
    padding: 12px 25px;
    background: #d63384;
    color: white;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-size: 16px;
    transition: 0.3s;
}

button:hover {
    background: #ad2167;
}

/* Center Main Button */
.calculate-btn {
    display: block;
    margin: 20px auto;
}

/* ===== RESULT SECTION ===== */
.result-section {
    margin-top: 40px;
    text-align: center;
}

/* Circle Wrapper */
.progress-wrapper {
    position: relative;
    display: inline-block;
}

/* Background Circle */
.progress-bg {
    fill: none;
    stroke: rgba(255,255,255,0.3);
    stroke-width: 15;
}

/* Animated Circle */
.progress-circle {
    fill: none;
    stroke: url(#gradient);
    stroke-width: 15;
    stroke-linecap: round;
    stroke-dasharray: 534;
    stroke-dashoffset: 534;
    transform: rotate(-90deg);
    transform-origin: center;
    transition: stroke-dashoffset 1.5s ease;
}

/* Percentage Text */
.progress-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 28px;
    font-weight: bold;
    color: #d63384;
}

/* Result Message */
.result-message {
    margin-top: 20px;
    font-size: 18px;
    font-weight: 500;
}

/* Navigation Buttons */
.nav-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 40px;
}

</style>
</head>

<body>

<div class="container">

<h2>Pregnancy Readiness Self-Assessment</h2>

<div class="accordion">

<div class="accordion-header">🏥 Medical Readiness</div>
<div class="accordion-content">
<label><input type="checkbox" class="check"> Visited gynecologist</label>
<label><input type="checkbox" class="check"> Blood tests done</label>
<label><input type="checkbox" class="check"> Thyroid checked</label>
<label><input type="checkbox" class="check"> Vaccinations updated</label>
</div>

<div class="accordion-header">🍎 Nutrition & Lifestyle</div>
<div class="accordion-content">
<label><input type="checkbox" class="check"> Taking folic acid</label>
<label><input type="checkbox" class="check"> Balanced diet</label>
<label><input type="checkbox" class="check"> Regular exercise</label>
<label><input type="checkbox" class="check"> Avoid smoking/alcohol</label>
</div>

<div class="accordion-header">🧠 Mental & Emotional Health</div>
<div class="accordion-content">
<label><input type="checkbox" class="check"> Stress managed</label>
<label><input type="checkbox" class="check"> Good sleep routine</label>
<label><input type="checkbox" class="check"> Emotional support</label>
<label><input type="checkbox" class="check"> Positive mindset</label>
</div>

<div class="accordion-header">📅 Cycle Awareness</div>
<div class="accordion-content">
<label><input type="checkbox" class="check"> Tracking cycle</label>
<label><input type="checkbox" class="check"> Know fertile window</label>
<label><input type="checkbox" class="check"> Regular periods</label>
<label><input type="checkbox" class="check"> Ovulation awareness</label>
</div>

</div>

<button class="calculate-btn" onclick="calculateScore()">Calculate Readiness</button>

<div class="result-section">
    <div class="progress-wrapper">
        <svg width="200" height="200">
            <circle class="progress-bg" cx="100" cy="100" r="85"></circle>
            <circle class="progress-circle" cx="100" cy="100" r="85"></circle>
        </svg>
        <div class="progress-text">
            <span id="scoreValue">0%</span>
        </div>
    </div>

    <div id="resultMessage" class="result-message"></div>
</div>

<!-- Navigation Buttons -->
<div class="nav-buttons">
    <button onclick="location.href='fertility_info.php'">⬅ Back</button>
    <button onclick="location.href='female_fertility_support.php'">Next ➡</button>
</div>

</div>

<!-- SVG Gradient -->
<svg width="0" height="0">
  <defs>
    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="#ff9a9e"/>
      <stop offset="100%" stop-color="#fad0c4"/>
    </linearGradient>
  </defs>
</svg>

<script>

/* Accordion Toggle */
document.querySelectorAll(".accordion-header").forEach(header => {
    header.addEventListener("click", function() {
        const content = this.nextElementSibling;
        content.style.display =
            content.style.display === "block" ? "none" : "block";
    });
});

/* Score Calculation */
function calculateScore() {

    const checkboxes = document.querySelectorAll(".check");
    const total = checkboxes.length;

    let count = 0;
    checkboxes.forEach(box => {
        if (box.checked) count++;
    });

    let percentage = Math.round((count / total) * 100);

    const circle = document.querySelector(".progress-circle");
    const scoreText = document.getElementById("scoreValue");
    const resultMessage = document.getElementById("resultMessage");

    const radius = 85;
    const circumference = 2 * Math.PI * radius;

    circle.style.strokeDasharray = circumference;

    let offset = circumference - (percentage / 100) * circumference;
    circle.style.strokeDashoffset = offset;

    scoreText.innerText = percentage + "%";

    if (percentage >= 80) {
        resultMessage.innerHTML = "💚 You are fully ready to conceive!";
    }
    else if (percentage >= 50) {
        resultMessage.innerHTML = "💛 You are moderately ready. Improve few areas.";
    }
    else {
        resultMessage.innerHTML = "❤️ You need preparation before planning pregnancy.";
    }
}

</script>

</body>
</html>
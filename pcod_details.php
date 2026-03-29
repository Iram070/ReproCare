<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PCOD & PCOS Details | FemVita</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<style>

body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to right, #fce4ec, #f8bbd0);
}

/* Main container */
.main-container {
    width: 95%;
    max-width: 1200px;
    margin: 30px auto;
    padding: 20px;
}

/* 3 column layout */
.grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

/* Card design */
.card {
    padding: 18px 22px;
    border-radius: 15px;
    box-shadow: 0 5px 12px rgba(0,0,0,0.08);
    animation: fadeUp 0.6s ease forwards;
    transition: 0.3s ease;
}

/* Soft light backgrounds */
.card:nth-child(1) { background: #fff5f7; }
.card:nth-child(2) { background: #f9f3ff; }
.card:nth-child(3) { background: #fff8f0; }
.card:nth-child(4) { background: #f3fff9; }
.card:nth-child(5) { background: #f0f7ff; }
.card:nth-child(6) { background: #fff0f6; }

/* Hover effect */
.card:hover {
    transform: translateY(-5px);
}

/* Heading */
.card h3 {
    margin-top: 0;
    font-weight: 600;
    color: #c2185b;
    font-size: 18px;
}

/* List */
.card ul {
    padding-left: 18px;
    margin: 0;
}

.card li {
    font-weight: 500;
    color: #333;
    font-size: 14px;
    line-height: 1.6;
}

/* Bottom note */
.note {
    margin-top: 25px;
    padding: 15px;
    background: #ffffff;
    border-radius: 12px;
    text-align: center;
    font-weight: 500;
    color: #444;
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
}

/* Back Button */
.button-section {
    text-align: center;
    margin-top: 25px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #c2185b;
    color: white;
    text-decoration: none;
    border-radius: 25px;
    transition: 0.3s ease;
    font-weight: 500;
}

.btn:hover {
    background-color: #a3154f;
    transform: scale(1.05);
}

/* Animation */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 900px) {
    .grid-container {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .grid-container {
        grid-template-columns: 1fr;
    }
}

</style>
</head>

<body>

<div class="main-container">

    <div class="grid-container">

        <div class="card">
            <h3>Common Symptoms</h3>
            <ul>
                <li>Irregular periods</li>
                <li>Heavy bleeding</li>
                <li>Missed periods</li>
                <li>Weight gain</li>
                <li>Acne</li>
                <li>Hair thinning</li>
                <li>Excess facial hair</li>
                <li>Mood swings</li>
                <li>Difficulty getting pregnant</li>
            </ul>
        </div>

        <div class="card">
            <h3>Causes</h3>
            <ul>
                <li>Hormonal imbalance</li>
                <li>High insulin levels</li>
                <li>Stress</li>
                <li>Poor lifestyle</li>
                <li>Lack of exercise</li>
            </ul>
        </div>

        <div class="card">
            <h3>Diagnosis</h3>
            <ul>
                <li>Pelvic ultrasound</li>
                <li>Hormone profile test</li>
                <li>Thyroid function test</li>
                <li>Blood sugar test</li>
                <li>CBC blood test</li>
            </ul>
        </div>

        <div class="card">
            <h3>Treatment Options</h3>
            <ul>
                <li>Lifestyle modification</li>
                <li>Regular exercise</li>
                <li>Balanced diet</li>
                <li>Weight management</li>
                <li>Insulin-regulating medicines</li>
                <li>Doctor consultation</li>
            </ul>
        </div>

        <div class="card">
            <h3>Lifestyle Tips</h3>
            <ul>
                <li>Eat high-fiber foods</li>
                <li>Reduce sugar intake</li>
                <li>Drink plenty of water</li>
                <li>Practice yoga</li>
                <li>Maintain regular sleep cycle</li>
                <li>Avoid junk food</li>
            </ul>
        </div>

        <div class="card">
            <h3>Risk Factors</h3>
            <ul>
                <li>Obesity</li>
                <li>Family history</li>
                <li>Unhealthy diet</li>
                <li>Sedentary lifestyle</li>
                <li>Insulin resistance</li>
            </ul>
        </div>

    </div>

    <div class="note">
        PCOD and PCOS cannot always be permanently cured, but symptoms can be effectively managed with proper medical guidance and lifestyle changes.
    </div>

    <div class="button-section">
        <a href="highrisk.php" class="btn">← Back to High Risk</a>
    </div>

</div>

</body>
</html>
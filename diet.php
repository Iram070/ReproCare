<!DOCTYPE html>
<html>
<head>
<title>Nutrition & Diet Care</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #ffe6f0, #f8e1f4);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Container */
.container {
    width: 92%;
    max-width: 900px;
}

/* Title */
h2 {
    text-align: center;
    color: #b01257;
    font-size: 24px;
    margin-bottom: 20px;
    font-weight: 700;
}

/* Card */
.card {
    display: flex;
    align-items: center;
    padding: 14px 22px;
    margin-bottom: 16px;
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.65);
    backdrop-filter: blur(10px);
    box-shadow: 0 10px 25px rgba(176, 18, 87, 0.18);
    opacity: 0;
}

/* Left animation */
.card.left {
    animation: slideLeft 0.8s ease forwards;
}

/* Right animation */
.card.right {
    flex-direction: row-reverse;
    animation: slideRight 0.8s ease forwards;
}

/* Animations */
@keyframes slideLeft {
    from {
        transform: translateX(-60px);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes slideRight {
    from {
        transform: translateX(60px);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

/* Icon */
.card img {
    width: 55px;
    height: 55px;
}

/* Content spacing */
.content {
    margin-left: 18px;
}

.card.right .content {
    margin-right: 18px;
    margin-left: 0;
    text-align: right;
}

/* Heading */
.content h3 {
    margin: 0 0 6px 0;
    color: #b01257;
    font-size: 18.5px;
    font-weight: 800;
}

/* Paragraph */
.content p {
    margin: 0;
    font-size: 15px;
    color: #2c2c2c;
    line-height: 1.6;
    font-weight: 700;
}

/* Back Button */
.back-btn {
    display: block;
    width: 160px;
    margin: 25px auto 0 auto;
    text-align: center;
    padding: 10px;
    background: #e91e63;
    color: white;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    transition: 0.3s ease;
}

.back-btn:hover {
    background: #c2185b;
    transform: scale(1.05);
}

</style>
</head>

<body>

<div class="container">

<h2>Nutrition & Diet Care</h2>

<div class="card left">
    <img src="images/balanced.png">
    <div class="content">
        <h3>Balanced Nutrition</h3>
        <p>Include vegetables, fruits and whole grains to support hormone balance and digestive health.</p>
    </div>
</div>

<div class="card right">
    <img src="images/avoid.png">
    <div class="content">
        <h3>Limit Sugar & Processed Food</h3>
        <p>Avoid excessive sugar and junk food to reduce inflammation and hormonal imbalance.</p>
    </div>
</div>

<div class="card left">
    <img src="images/fats.png">
    <div class="content">
        <h3>Healthy Fats</h3>
        <p>Consume nuts, seeds and natural oils to assist in hormone production and energy stability.</p>
    </div>
</div>

<div class="card right">
    <img src="images/water.png">
    <div class="content">
        <h3>Stay Hydrated</h3>
        <p>Drink 6–8 glasses of water daily to prevent bloating and maintain metabolic balance.</p>
    </div>
</div>

<div class="card left">
    <img src="images/iron.png">
    <div class="content">
        <h3>Iron Intake</h3>
        <p>Add iron-rich foods such as leafy greens and lentils to prevent fatigue during menstruation.</p>
    </div>
</div>

<div class="card right">
    <img src="images/protein.png">
    <div class="content">
        <h3>Protein Support</h3>
        <p>Include protein sources like eggs, dairy and pulses for muscle recovery and energy.</p>
    </div>
</div>

<!-- ✅ BACK BUTTON GOES TO GENERAL HEALTH TIPS -->
<a href="general_tips.php" class="back-btn">← Back</a>

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Planning to Conceive | FemVita</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

/* Background */
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #ffdde1, #ee9ca7);
    overflow-x: hidden;
}

/* Decorative Background Circles */
body::before, body::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.15);
    z-index: 0;
}

body::before {
    width: 300px;
    height: 300px;
    top: -80px;
    left: -80px;
}

body::after {
    width: 400px;
    height: 400px;
    bottom: -120px;
    right: -120px;
}

/* Hero Section */
.hero {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 100px 10%;
    min-height: 100vh;
    position: relative;
    z-index: 1;
    animation: fadeIn 1.5s ease-in-out;
}

/* Glass Card */
.hero-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    backdrop-filter: blur(15px);
    background: rgba(255, 255, 255, 0.25);
    border-radius: 30px;
    padding: 60px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.2);
}

/* Text Section */
.hero-text {
    width: 50%;
}

.hero-text h1 {
    font-size: 40px;
    color: #c2185b;
    margin-bottom: 20px;
}

.hero-text p {
    font-size: 18px;
    color: #333;
    line-height: 1.7;
    margin-bottom: 35px;
}

/* Button */
.start-btn {
    padding: 15px 35px;
    background: linear-gradient(to right, #e91e63, #c2185b);
    color: white;
    border: none;
    border-radius: 50px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s ease;
}

.start-btn:hover {
    transform: scale(1.08);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

/* Image Section */
.hero-image {
    width: 45%;
    text-align: center;
}

/* ROUND IMAGE STYLE */
.hero-image img {
    width: 350px;
    height: 350px;
    object-fit: cover;
    border-radius: 50%;          /* Makes image round */
    border: 8px solid rgba(255,255,255,0.6);
    box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    animation: float 4s ease-in-out infinite;
}

/* Floating Animation */
@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
}

/* Fade In */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {

    .hero-content {
        flex-direction: column;
        text-align: center;
        padding: 40px;
    }

    .hero-text,
    .hero-image {
        width: 100%;
    }

    .hero-image img {
        margin-top: 40px;
        width: 250px;
        height: 250px;
    }
}

</style>
</head>

<body>

<div class="hero">

    <div class="hero-content">

        <div class="hero-text">
            <h1>Planning to Conceive? Start Your Journey with Confidence.</h1>

            <p>
                Welcome to FemVita’s Pregnancy Planning Guide.
                Understand your cycle, track ovulation, improve your health,
                and prepare your body for a safe and happy pregnancy.
            </p>

            <button class="start-btn" onclick="location.href='fertility_insights.php'">
                Check Fertility Insights
            </button>
        </div>

        <div class="hero-image">
            <!-- Correct Path -->
            <img src="/femvita/images/baby.png" alt="Baby Planning">
        </div>

    </div>

</div>

</body>
</html>
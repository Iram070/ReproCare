<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FemVita | Exercise Tips</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f6c1cc, #d8a7b1);
            padding: 15px; /* reduced outer space */
        }

        .container {
            background: #f2f2f2;
            padding: 25px; /* reduced inner space */
            border-radius: 15px;
            max-width: 1200px;
            margin: auto;
            text-align: center;
        }

        h1 {
            margin-bottom: 8px;
            font-size: 24px;
        }

        .intro {
            margin-bottom: 15px;
            font-size: 14px;
        }

        .exercise-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px; /* tighter gap */
            margin-top: 15px;
        }

        .exercise-card {
            background: white;
            padding: 18px; /* slightly compact */
            border-radius: 12px;
            transition: 0.3s;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        .exercise-card:hover {
            transform: scale(1.04);
        }

        /* Keep icons big but balanced */
        .exercise-card img {
            width: 125px;
            height: 125px;
            margin-bottom: 8px;
        }

        .exercise-card h3 {
            margin: 6px 0;
            font-size: 18px;
            font-weight: bold;
        }

        .exercise-card p {
            font-size: 13px;
            margin: 0;
        }

        .note {
            margin-top: 15px;
            font-size: 14px;
            font-weight: bold;
        }

        .back-btn {
            margin-top: 18px;
            padding: 10px 22px;
            font-size: 15px;
            background: #2f2f2f;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .back-btn:hover {
            opacity: 0.9;
        }

    </style>
</head>

<body>

<div class="container">

    <h1>EXERCISES TO KEEP PERIODS HEALTHY</h1>

    <p class="intro">
        Regular physical activity helps regulate hormones, reduce cramps and improve circulation.
    </p>

    <div class="exercise-grid">

        <div class="exercise-card">
            <img src="images/walking.png" alt="Walking">
            <h3>WALKING</h3>
            <p>Improves blood circulation.</p>
        </div>

        <div class="exercise-card">
            <img src="images/yoga.png" alt="Yoga">
            <h3>YOGA</h3>
            <p>Helps regulate hormones.</p>
        </div>

        <div class="exercise-card">
            <img src="images/stretching.png" alt="Stretching">
            <h3>STRETCHING</h3>
            <p>Relieves muscle tension.</p>
        </div>

        <div class="exercise-card">
            <img src="images/cycling.png" alt="Cycling">
            <h3>CYCLING</h3>
            <p>Boosts stamina.</p>
        </div>

        <div class="exercise-card">
            <img src="images/breathing.png" alt="Breathing">
            <h3>BREATHING</h3>
            <p>Reduces stress.</p>
        </div>

        <div class="exercise-card">
            <img src="images/cardio.png" alt="Cardio">
            <h3>LIGHT CARDIO</h3>
            <p>Maintains cycle balance.</p>
        </div>

    </div>

    <p class="note">
        ⚠ AVOID HEAVY WORKOUTS DURING HEAVY FLOW DAYS.
    </p>

    <button class="back-btn" onclick="location.href='general_tips.php'">
        Back
    </button>

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Male Fertility Exercise Tips - FemVita</title>
    <style>
        /* --- Body & Theme --- */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #c2e0ff, #e6f0fa);
            overflow-x: hidden;
            position: relative;
            color: #0f2a5a;
        }

        /* --- Floating Background Circles --- */
        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            animation: float 20s linear infinite;
            z-index: 0;
        }
        .circle:nth-child(1){width:150px;height:150px;top:10%;left:5%;animation-duration:25s;}
        .circle:nth-child(2){width:100px;height:100px;top:30%;left:80%;animation-duration:30s;}
        .circle:nth-child(3){width:200px;height:200px;top:70%;left:20%;animation-duration:35s;}
        .circle:nth-child(4){width:120px;height:120px;top:50%;left:60%;animation-duration:28s;}

        @keyframes float {
            0%{transform: translateY(0px);}
            50%{transform: translateY(-50px);}
            100%{transform: translateY(0px);}
        }

        /* --- Container & Headline --- */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
            z-index: 1;
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 40px;
            color: #0f2a5a;
        }

        /* --- Cards Grid --- */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        /* --- Glass Blur Card --- */
        .card {
            background: rgba(255, 255, 255, 0.25);
            border-radius: 15px;
            padding: 25px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s, opacity 0.5s;
            opacity: 0;
        }
        .card.fade-in {
            opacity: 1;
        }
        .card:hover {
            transform: translateY(-8px);
        }

        .card h2 {
            font-size: 20px;
            margin-bottom: 12px;
            color: #0f2a5a;
        }

        .card ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        /* --- Buttons --- */
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        .buttons a {
            background: #1a3d7c;
            color: #fff;
            padding: 12px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }
        .buttons a:hover {
            background: #0f2a5a;
        }
    </style>
</head>
<body>

    <!-- Floating Circles -->
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>

    <div class="container">
        <h1>Exercise & Gym Tips for Male Fertility</h1>

        <div class="cards">
            <!-- Card 1: Moderate Cardio -->
            <div class="card">
                <h2>Moderate Cardio</h2>
                <ul>
                    <li>30 mins, 3–4 times/week</li>
                    <li>Running, brisk walking, cycling</li>
                    <li>Improves blood flow & hormonal balance</li>
                </ul>
            </div>

            <!-- Card 2: Strength Training -->
            <div class="card">
                <h2>Strength Training</h2>
                <ul>
                    <li>2–3 sessions/week</li>
                    <li>Squats, deadlifts, bench press, rows</li>
                    <li>Supports testosterone production</li>
                </ul>
            </div>

            <!-- Card 3: Core Work -->
            <div class="card">
                <h2>Core Workouts</h2>
                <ul>
                    <li>Planks, Russian twists, leg raises</li>
                    <li>Improves posture & overall strength</li>
                </ul>
            </div>

            <!-- Card 4: Stretching & Mobility -->
            <div class="card">
                <h2>Stretching & Mobility</h2>
                <ul>
                    <li>Dynamic warm-ups before workouts</li>
                    <li>Yoga or Pilates 1–2 times/week</li>
                    <li>Reduces stress and improves flexibility</li>
                </ul>
            </div>

            <!-- Card 5: High-Intensity Interval Training -->
            <div class="card">
                <h2>HIIT (Optional)</h2>
                <ul>
                    <li>20 mins, 1–2 times/week</li>
                    <li>Short bursts of intense effort</li>
                    <li>Boosts metabolism, avoid overtraining</li>
                </ul>
            </div>

            <!-- Card 6: Recovery & Rest -->
            <div class="card">
                <h2>Recovery & Rest</h2>
                <ul>
                    <li>At least 7–8 hours of sleep/night</li>
                    <li>Rest days between intense workouts</li>
                    <li>Reduces oxidative stress on sperm</li>
                </ul>
            </div>

            <!-- Card 7: Hydration During Workouts -->
            <div class="card">
                <h2>Hydration</h2>
                <ul>
                    <li>Drink water before, during, after workouts</li>
                    <li>Avoid excessive energy drinks</li>
                    <li>Supports nutrient transport & recovery</li>
                </ul>
            </div>

            <!-- Card 8: Lifestyle & Consistency -->
            <div class="card">
                <h2>Lifestyle & Consistency</h2>
                <ul>
                    <li>Exercise regularly, avoid long sedentary periods</li>
                    <li>Manage stress with meditation or light activity</li>
                    <li>Combine gym with diet for maximum fertility support</li>
                </ul>
            </div>
        </div>

        <div class="buttons">
            <a href="male_diet_page.php">Back</a>
            <a href="male_fertility_lifetime.php">Next</a>
        </div>
    </div>

    <script>
        // Fade-in animation on scroll
        const cards = document.querySelectorAll('.card');
        window.addEventListener('scroll', () => {
            cards.forEach(card => {
                const rect = card.getBoundingClientRect();
                if(rect.top < window.innerHeight - 50){
                    card.classList.add('fade-in');
                }
            });
        });

        // Trigger on load for initial cards
        window.addEventListener('load', () => {
            cards.forEach(card => card.classList.add('fade-in'));
        });
    </script>

</body>
</html>
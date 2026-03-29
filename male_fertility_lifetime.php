<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Male Fertility Lifestyle Tips - FemVita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #c2e0ff, #e6f0fa);
            overflow-x: hidden;
            position: relative;
            color: #0f2a5a;
        }
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
        .container { max-width: 1200px; margin: 0 auto; padding: 40px 20px; position: relative; z-index: 1; }
        h1 { text-align: center; font-size: 2.5em; margin-bottom: 40px; color: #0f2a5a; }
        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
        .card {
            background: rgba(255, 255, 255, 0.25);
            border-radius: 15px;
            padding: 25px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s, opacity 0.5s;
            opacity: 0;
        }
        .card.fade-in { opacity: 1; }
        .card:hover { transform: translateY(-8px); }
        .card h2 { font-size: 20px; margin-bottom: 12px; color: #0f2a5a; }
        .card ul { list-style-type: disc; padding-left: 20px; }
        .buttons { display: flex; justify-content: flex-end; margin-top: 40px; }
        .buttons a {
            background: #1a3d7c;
            color: #fff;
            padding: 12px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }
        .buttons a:hover { background: #0f2a5a; }
    </style>
</head>
<body>

    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>

    <div class="container">
        <h1>Healthy Lifestyle Tips for Male Fertility</h1>

        <div class="cards">
            <!-- Card 1: Sleep -->
            <div class="card">
                <h2>Prioritize Sleep</h2>
                <ul>
                    <li>7–9 hours of quality sleep every night</li>
                    <li>Maintain consistent sleep schedule</li>
                    <li>Supports testosterone & sperm production</li>
                </ul>
            </div>
            <!-- Card 2: Stress Management -->
            <div class="card">
                <h2>Manage Stress</h2>
                <ul>
                    <li>Meditation, deep breathing, yoga</li>
                    <li>Reduces cortisol, improves sperm health</li>
                    <li>Take regular breaks and downtime</li>
                </ul>
            </div>
            <!-- Card 3: No Smoking & Alcohol -->
            <div class="card">
                <h2>No Smoking & Moderate Alcohol</h2>
                <ul>
                    <li>Smoking significantly reduces sperm quality</li>
                    <li>Limit alcohol to maintain hormonal balance</li>
                </ul>
            </div>
            <!-- Card 4: Maintain Healthy Weight -->
            <div class="card">
                <h2>Maintain Healthy Weight</h2>
                <ul>
                    <li>BMI in 20–25 range is ideal</li>
                    <li>Combine diet + exercise for long-term control</li>
                    <li>Reduces oxidative stress on sperm</li>
                </ul>
            </div>
            <!-- Card 5: Stay Active -->
            <div class="card">
                <h2>Stay Physically Active</h2>
                <ul>
                    <li>Regular movement & exercise</li>
                    <li>Reduces sedentary impact on fertility</li>
                    <li>Include light activity daily</li>
                </ul>
            </div>
            <!-- Card 6: Limit Environmental Toxins -->
            <div class="card">
                <h2>Limit Exposure to Toxins</h2>
                <ul>
                    <li>Avoid pesticides, plastics, heavy metals</li>
                    <li>Use natural cleaning & personal care products</li>
                    <li>Wear protective gear in high-risk environments</li>
                </ul>
            </div>
            <!-- Card 7: Mental Wellbeing -->
            <div class="card">
                <h2>Mental Wellbeing</h2>
                <ul>
                    <li>Seek therapy if feeling anxious or depressed</li>
                    <li>Social support & hobbies improve hormone balance</li>
                </ul>
            </div>
            <!-- Card 8: Consistent Healthy Habits -->
            <div class="card">
                <h2>Consistent Healthy Habits</h2>
                <ul>
                    <li>Combine diet, exercise, sleep, and stress control</li>
                    <li>Track progress and maintain routine</li>
                    <li>Small daily improvements compound fertility benefits</li>
                </ul>
            </div>
        </div>

        <div class="buttons">
            <a href="male_thankyou.php">Next</a>
        </div>
    </div>

    <script>
        const cards = document.querySelectorAll('.card');
        window.addEventListener('scroll', () => {
            cards.forEach(card => {
                const rect = card.getBoundingClientRect();
                if(rect.top < window.innerHeight - 50){
                    card.classList.add('fade-in');
                }
            });
        });
        window.addEventListener('load', () => {
            cards.forEach(card => card.classList.add('fade-in'));
        });
    </script>

</body>
</html>
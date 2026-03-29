<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Male Fertility Diet Tips - FemVita</title>
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
        <h1>Male Fertility Diet Tips</h1>

        <div class="cards">
            <!-- Card 1 -->
            <div class="card">
                <h2>Zinc</h2>
                <ul>
                    <li>Oysters, pumpkin seeds, beef, lentils</li>
                    <li>Supports sperm count and motility</li>
                </ul>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <h2>Selenium</h2>
                <ul>
                    <li>Brazil nuts, eggs, fish</li>
                    <li>Protects sperm from oxidative stress</li>
                </ul>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <h2>Vitamin C & E</h2>
                <ul>
                    <li>Citrus, strawberries, bell peppers, almonds</li>
                    <li>Antioxidants that protect sperm DNA</li>
                </ul>
            </div>

            <!-- Card 4 -->
            <div class="card">
                <h2>Folate (B9)</h2>
                <ul>
                    <li>Spinach, broccoli, beans, fortified cereals</li>
                    <li>Supports sperm DNA integrity</li>
                </ul>
            </div>

            <!-- Card 5 -->
            <div class="card">
                <h2>Omega-3 Fatty Acids</h2>
                <ul>
                    <li>Salmon, sardines, chia seeds, walnuts</li>
                    <li>Improves sperm morphology & count</li>
                </ul>
            </div>

            <!-- Card 6 -->
            <div class="card">
                <h2>Coenzyme Q10</h2>
                <ul>
                    <li>Fatty fish, organ meats, whole grains</li>
                    <li>Supports sperm energy & motility</li>
                </ul>
            </div>

            <!-- Card 7 -->
            <div class="card">
                <h2>Hydration & Meals</h2>
                <ul>
                    <li>Drink 2–3 liters water daily</li>
                    <li>Eat regular meals; avoid skipping</li>
                    <li>Focus on variety & balance</li>
                </ul>
            </div>

            <!-- Card 8 -->
            <div class="card">
                <h2>Healthy Lifestyle</h2>
                <ul>
                    <li>Maintain healthy weight (BMI 20–25)</li>
                    <li>Limit alcohol, caffeine & processed foods</li>
                    <li>Include antioxidant-rich foods daily</li>
                </ul>
            </div>
        </div>

        <div class="buttons">
            <a href="male_slide4.php">Back</a>
            <a href="males_exercise_tips.php">Next</a>
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
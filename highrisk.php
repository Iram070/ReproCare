<!DOCTYPE html>
<html>
<head>
    <title>High Risk - FemVita</title>
    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f8d7da;
        }

        h1 {
            text-align: center;
            padding-top: 30px;
            color: #7a2c2c;
        }

        /* Urgent Line */
        .urgent-line {
            text-align: center;
            color: #b30000;
            font-weight: 600;
            margin-top: 8px;
            margin-bottom: 30px;
            font-size: 16px;
            animation: fadeIn 1s ease-in-out;
        }

        /* Cards Row */
        .container-row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .card {
            background: #fff8e7;
            width: 230px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .card-title {
            background: #7a2c2c;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            display: inline-block;
            margin-bottom: 10px;
        }

        ul {
            padding-left: 18px;
        }

        li {
            margin-bottom: 8px;
        }

        /* Disclaimer */
        .disclaimer {
            background: #fcecec;
            margin: 20px auto;
            width: 80%;
            padding: 20px;
            border-radius: 10px;
            font-size: 14px;
        }

        /* Button Section */
        .button-section {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 40px;
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            margin: 10px 15px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
            animation: slideUp 0.8s ease-in-out;
        }

        .consult-btn {
            background: #c94c4c;
        }

        .learn-btn {
            background: linear-gradient(45deg, #4e73df, #8e44ad);
        }

        .btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        }

        /* Animations */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

    </style>
</head>

<body>

    <h1>HIGH RISK MENSTRUAL CONDITION</h1>

    <p class="urgent-line">
        ⚠ This condition may require immediate medical attention.
    </p>

    <div class="container-row">

        <div class="card">
            <div class="card-title">Symptoms</div>
            <ul>
                <li>Heavy bleeding</li>
                <li>Severe cramps</li>
                <li>Bleeding more than 7 days</li>
                <li>Fatigue & weakness</li>
                <li>Large blood clots</li>
            </ul>
        </div>

        <div class="card">
            <div class="card-title">Possible Causes</div>
            <ul>
                <li>Hormonal imbalance</li>
                <li>PCOD</li>
                <li>PCOS</li>
                <li>Thyroid disorder</li>
                <li>High stress levels</li>
            </ul>
        </div>

        <div class="card">
            <div class="card-title">Medical Tests</div>
            <ul>
                <li>Pelvic ultrasound</li>
                <li>Hormone profile test</li>
                <li>Thyroid function test</li>
                <li>CBC blood test</li>
            </ul>
        </div>

        <div class="card">
            <div class="card-title">Immediate Action</div>
            <ul>
                <li>Consult gynecologist</li>
                <li>Avoid self-medication</li>
                <li>Track symptoms</li>
                <li>Stay hydrated</li>
            </ul>
        </div>

    </div>

    <div class="disclaimer">
        <b>Notice:</b> Your symptoms may indicate abnormal or heavy menstrual bleeding.
        Persistent pain, prolonged flow, or excessive bleeding requires medical evaluation.
        Timely consultation is recommended.
        <br><br>
        <b>Disclaimer:</b> This information is for educational purposes only and is not a substitute for professional medical advice.
    </div>

    <div class="button-section">
        <a href="consult_doctor.php" class="btn consult-btn">Consult Doctor</a>
        <a href="pcod_pcos.php" class="btn learn-btn">Learn About PCOD / PCOS</a>
    </div>

</body>
</html>
<?php
// consult_doctor.php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Consult a Gynecologist - FemVita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            margin:0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ffe6f0, #ffd9ec);
            text-align:center;
            padding:20px;
        }

        h1{
            margin-top:40px;
            color:#cc0066;
            font-size:34px;
            font-weight:bold;
        }

        .description{
            width:80%;
            margin:20px auto 40px;
            color:#663344;
            font-size:18px;
            font-weight:bold;
        }

        .card{
            background: linear-gradient(145deg, #fff0f5, #ffe6f0);
            border-radius:20px;
            padding:30px;
            max-width:450px;
            margin:20px auto;
            box-shadow:0 8px 20px rgba(204,0,102,0.2);
        }

        .book-btn{
            width:100%;
            padding:20px;
            background:#ff66a3;
            color:white;
            border:none;
            border-radius:15px;
            font-size:18px;
            font-weight:bold;
            cursor:pointer;
            transition:0.3s;
            box-shadow:0 5px 15px rgba(204,0,102,0.2);
        }

        .book-btn:hover{
            background:#e05590;
            transform: scale(1.05);
            box-shadow:0 8px 25px rgba(204,0,102,0.3);
        }

        .info-box{
            width:75%;
            margin:20px auto;
            background: linear-gradient(145deg, #fff0f5, #ffe6f0);
            padding:20px;
            border-radius:15px;
            font-size:16px;
            font-weight:bold;
            color:#663344;
            box-shadow:0 4px 15px rgba(0,0,0,0.05);
        }

        .button-section{
            margin-top:30px;
            margin-bottom:50px;
        }

        .report-btn, .back-btn{
            padding:12px 25px;
            border:none;
            border-radius:25px;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
            margin:8px;
            transition:0.3s;
        }

        .report-btn{
            background:#ff4d94;
            color:white;
        }

        .report-btn:hover{
            background:#e60073;
            transform: scale(1.05);
        }

        .back-btn{
            background:#cc6699;
            color:white;
        }

        .back-btn:hover{
            background:#b35986;
            transform: scale(1.05);
        }

        @media(max-width:768px){
            .card, .info-box{
                width:90%;
            }
        }

    </style>
</head>

<body>

    <h1>🌸 CONSULT A GYNECOLOGIST</h1>

    <p class="description">
        If you need a gynecologist consultation, you can book an appointment directly via Practo. 
        Click the button below to be redirected to the official booking page.
    </p>

    <div class="card">
        <a href="https://www.practo.com/mumbai/lady-gynecologist-obstetrician" target="_blank">
            <button class="book-btn">📅 Book Your Appointment</button>
        </a>
    </div>

    <div class="info-box">
        ReproCare does not handle appointments directly. You will be redirected to Practo’s official platform.
    </div>

    <div class="info-box">
        🔒 Your privacy matters. ReproCare does not collect or store medical information during redirection.
    </div>

    <div class="button-section">
        <a href="dashboard.php">

        <a href="select_role.php">
            <button class="back-btn">← Back</button>
        </a>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thank You | ReproCare</title>

<style>

body{
    margin:0;
    padding:0;
    font-family:'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #f8caca, #f4b6c2, #f2a7b8);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    overflow:hidden;
}

/* Floating decorative circles */
body::before,
body::after{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    background:rgba(255,255,255,0.15);
    border-radius:50%;
    filter:blur(80px);
    animation: float 8s ease-in-out infinite alternate;
}

body::before{
    top:-100px;
    left:-100px;
}

body::after{
    bottom:-100px;
    right:-100px;
}

@keyframes float{
    from{transform:translateY(0);}
    to{transform:translateY(40px);}
}

/* Glass Card */
.card{
    background:rgba(255,255,255,0.25);
    backdrop-filter:blur(15px);
    -webkit-backdrop-filter:blur(15px);
    padding:55px 45px;
    border-radius:30px;
    width:480px;
    text-align:center;
    box-shadow:0 8px 32px rgba(0,0,0,0.1);
    border:1px solid rgba(255,255,255,0.3);
    animation: fadeIn 1.5s ease;
}

.card h1{
    font-size:30px;
    color:#7a2e3a;
    margin-bottom:20px;
}

.card p{
    font-size:16px;
    color:#5c2a32;
    line-height:1.8;
}

/* Back Button */
.btn{
    margin-top:30px;
    padding:12px 35px;
    border:none;
    border-radius:30px;
    font-size:15px;
    cursor:pointer;
    text-decoration:none;
    color:white;
    background:#8e4f6a;
    transition:0.3s;
    display:inline-block;
}

.btn:hover{
    background:#753f57;
    transform:scale(1.05);
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(30px);}
    to{opacity:1; transform:translateY(0);}
}

</style>
</head>
<body>

<div class="card">
    <h1>💗 Thank You for Visiting ReproCare 💗</h1>

    <p>
    Thank you for trusting    ReproCare during your motherhood journey.
    Your health and well-being are important to us.
    </p>

    <p>
    Take care of yourself, stay strong, and remember —
    you deserve love, rest, and support every step of the way.
    </p>

    <p>
    Wishing you happiness, strength, and wellness always 💕
    </p>

    <a href="select_role.php" class="btn">Back</a>
</div>

</body>
</html>
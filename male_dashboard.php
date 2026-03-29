<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Male Health Support | FemVita</title>

<style>

/* ===== SOFT ROMANTIC BLUE GRADIENT ===== */
body{
    margin:0;
    padding:0;
    font-family:'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #e3f2fd, #bbdefb, #e1f5fe);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    overflow:hidden;
    position:relative;
}

/* ===== FLOATING DECORATIVE BLUR CIRCLES ===== */
body::before,
body::after{
    content:"";
    position:absolute;
    width:420px;
    height:420px;
    border-radius:50%;
    background:rgba(255,255,255,0.35);
    filter:blur(100px);
    animation: float 9s ease-in-out infinite alternate;
    z-index:0;
}

body::before{
    top:-150px;
    left:-150px;
}

body::after{
    bottom:-150px;
    right:-150px;
}

@keyframes float{
    from{ transform:translateY(0); }
    to{ transform:translateY(50px); }
}

/* ===== GLASS BLUR CARD ===== */
.card{
    background: rgba(255,255,255,0.30);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    width:680px;
    padding:65px 55px;
    border-radius:35px;
    box-shadow:0 20px 50px rgba(0,0,0,0.08);
    text-align:center;
    animation: fadeIn 1.3s ease;
    position:relative;
    z-index:1;
}

/* ===== FADE IN ANIMATION ===== */
@keyframes fadeIn{
    from{ opacity:0; transform:translateY(40px); }
    to{ opacity:1; transform:translateY(0); }
}

/* ===== TEXT STYLING ===== */
.card h1{
    font-size:34px;
    color:#0d47a1;
    margin-bottom:25px;
}

.card p{
    font-size:16px;
    line-height:1.9;
    color:#0a3d62;
    margin-bottom:18px;
}

/* ===== BUTTONS ===== */
.button-section{
    margin-top:35px;
}

.btn{
    padding:13px 38px;
    border:none;
    border-radius:30px;
    font-size:14px;
    cursor:pointer;
    text-decoration:none;
    color:white;
    margin:10px;
    transition:0.3s;
    display:inline-block;
}

.back-btn{
    background:#607d8b;
}

.back-btn:hover{
    background:#455a64;
    transform:scale(1.05);
}

.next-btn{
    background:#1565c0;
}

.next-btn:hover{
    background:#0d47a1;
    transform:scale(1.05);
}

/* ===== RESPONSIVE ===== */
@media(max-width:750px){
    .card{
        width:90%;
        padding:45px 25px;
    }
}

</style>
</head>

<body>

<div class="card">

    <h1>💙 Welcome to Male Health Support 💙</h1>

    <p>
    Male health is essential for overall well-being and future family planning.
    Physical fitness, balanced hormones, and emotional stability all contribute
    to strong reproductive health and lifelong vitality.
    </p>

    <p>
    Healthy lifestyle habits such as proper nutrition, regular exercise,
    quality sleep, and stress management significantly improve overall wellness.
    Taking responsibility for your health today supports a stronger tomorrow.
    </p>

    <p>
    Strong health supports strong families.
    </p>

    <div class="button-section">
        <a href="select_role.php" class="btn back-btn">⬅ Back</a>
        <a href="male_slide2.php" class="btn next-btn">Next ➜</a>
    </div>

</div>

</body>
</html>
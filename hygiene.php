<!DOCTYPE html>
<html>
<head>
<title>Period Hygiene Routine</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,#ffe6f2,#f8d9ec);
}

/* TITLE */
.page-title{
    text-align:center;
    margin-top:30px;
}

.page-title h1{
    font-size:32px;
    color:#b01257;
    margin-bottom:5px;
}

.page-title p{
    font-size:18px;
    color:#e91e63;
}

/* GRID */
.grid-wrapper{
    width:95%;
    max-width:1300px;
    margin:40px auto;
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
}

/* CARD */
.card{
    background:white;
    border-radius:20px;
    padding:25px 20px;
    text-align:center;
    box-shadow:0 6px 18px rgba(233,30,99,0.12);
    transition:0.3s ease;
    animation:fadeUp 0.6s ease forwards;
    opacity:0;
}

.card:hover{
    transform:translateY(-6px);
}

/* ROUND ICON BACKGROUND */
.icon-circle{
    width:90px;
    height:90px;
    margin:0 auto 15px auto;
    background:#fff0f6;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
}

.icon-circle img{
    width:60px;
    height:60px;
}

/* TEXT (NORMAL NOT BOLD) */
.card p{
    font-size:15px;
    line-height:1.6;
    color:#333;
    font-weight:400;
}

/* ANIMATION */
@keyframes fadeUp{
    from{
        transform:translateY(20px);
        opacity:0;
    }
    to{
        transform:translateY(0);
        opacity:1;
    }
}

/* RESPONSIVE */
@media(max-width:1100px){
    .grid-wrapper{
        grid-template-columns:repeat(3,1fr);
    }
}

@media(max-width:850px){
    .grid-wrapper{
        grid-template-columns:repeat(2,1fr);
    }
}

@media(max-width:550px){
    .grid-wrapper{
        grid-template-columns:1fr;
    }
}

/* BACK BUTTON */
.back-btn{
    display:block;
    width:150px;
    margin:30px auto 50px auto;
    text-align:center;
    padding:10px;
    background:#e91e63;
    color:white;
    text-decoration:none;
    border-radius:20px;
    font-size:14px;
}

.back-btn:hover{
    background:#c2185b;
}

</style>
</head>

<body>

<div class="page-title">
    <h1>PERIOD HYGIENE ROUTINE</h1>
    <p>Stay Clean • Stay Healthy • Stay Confident</p>
</div>

<div class="grid-wrapper">

<div class="card">
    <div class="icon-circle">
        <img src="images/pad_change.png">
    </div>
    <p>Change your sanitary pad or tampon every 4–6 hours to maintain proper hygiene and prevent infection.</p>
</div>

<div class="card">
    <div class="icon-circle">
        <img src="images/hand_wash.png">
    </div>
    <p>Ensure that your hands are properly washed both before and after changing your pad or tampon.</p>
</div>

<div class="card">
    <div class="icon-circle">
        <img src="images/cotton_underwear.png">
    </div>
    <p>Wear clean, breathable cotton underwear to promote comfort and proper air circulation.</p>
</div>

<div class="card">
    <div class="icon-circle">
        <img src="images/water_drop.png">
    </div>
    <p>Gently cleanse the intimate area with clean water to maintain natural balance and prevent irritation.</p>
</div>

<div class="card">
    <div class="icon-circle">
        <img src="images/shower.png">
    </div>
    <p>Take a daily shower to maintain overall cleanliness and lasting freshness during your period.</p>
</div>

<div class="card">
    <div class="icon-circle">
        <img src="images/towel.png">
    </div>
    <p>Keep the intimate area clean, dry, and free from excess moisture to reduce the risk of infection.</p>
</div>

<div class="card">
    <div class="icon-circle">
        <img src="images/dustbin.png">
    </div>
    <p>Dispose of used sanitary pads properly by wrapping them securely before placing them in a waste bin.</p>
</div>

<div class="card">
    <div class="icon-circle">
        <img src="images/no_perfume.png">
    </div>
    <p>Avoid using scented or fragranced products in the intimate area to prevent irritation.</p>
</div>

</div>

<a href="general_tips.php" class="back-btn">Back</a>

</body>
</html>
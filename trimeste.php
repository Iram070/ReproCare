<!DOCTYPE html>
<html>
<head>
<title>FemVita - Pregnancy Trimester Guide</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500&display=swap');

*{
    box-sizing:border-box;
}

body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#ffd6e8,#fcbad3,#f8a5c2);
    min-height:100vh;
    overflow-x:hidden;   /* allow vertical scroll */
    padding:60px 0;
}

/* Floating Decorative Circles */
body::before, body::after{
    content:"";
    position:fixed;
    border-radius:50%;
    background:rgba(255,255,255,0.35);
    animation:floatBg 8s infinite alternate ease-in-out;
    z-index:-1;
}

body::before{
    width:300px;
    height:300px;
    top:-120px;
    left:-100px;
}

body::after{
    width:250px;
    height:250px;
    bottom:-120px;
    right:-100px;
}

@keyframes floatBg{
    from{transform:translateY(0);}
    to{transform:translateY(40px);}
}

/* Container */
.container{
    width:95%;
    max-width:1000px;
    margin:auto;
    background:rgba(255,255,255,0.6);
    backdrop-filter:blur(15px);
    padding:45px;
    border-radius:25px;
    box-shadow:0 20px 50px rgba(214,51,132,0.25);
    animation:fadeIn 1s ease;
}

/* Entry Animation */
@keyframes fadeIn{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* Title */
h1{
    text-align:center;
    font-family:'Playfair Display',serif;
    font-size:44px;
    margin-bottom:45px;
    color:#b3125d;
}

/* Grid */
.grid{
    display:grid;
    grid-template-columns:1fr 1fr 1fr;
    text-align:center;
}

/* Header */
.header{
    background:rgba(255,255,255,0.85);
    padding:18px;
    font-weight:600;
    font-size:18px;
    border:1px solid rgba(214,51,132,0.2);
}

/* Cells */
.cell{
    padding:22px;
    border:1px solid rgba(214,51,132,0.15);
    background:white;
    font-size:17px;
    transition:0.3s;
}

/* Hover */
.cell:hover{
    background:#ffe6f1;
    transform:scale(1.05);
    box-shadow:0 8px 20px rgba(214,51,132,0.25);
}

/* Trimester Style */
.trimester{
    font-size:34px;
    font-weight:600;
    background:#fff5fa;
    color:#c2185b;
}

/* Buttons */
.buttons{
    margin-top:45px;
    text-align:center;
}

button{
    padding:13px 32px;
    border:none;
    border-radius:30px;
    font-size:15px;
    cursor:pointer;
    margin:10px;
    transition:0.3s;
    font-family:'Poppins',sans-serif;
}

.back{
    background:white;
    color:#d63384;
    box-shadow:0 5px 15px rgba(214,51,132,0.2);
}

.back:hover{
    background:#ffe3ef;
    transform:translateY(-3px);
}

.next{
    background:#d63384;
    color:white;
    box-shadow:0 5px 15px rgba(214,51,132,0.3);
}

.next:hover{
    background:#ad2167;
    transform:translateY(-3px);
}

/* Responsive */
@media(max-width:768px){
    .grid{
        grid-template-columns:1fr;
    }
    h1{
        font-size:30px;
    }
}

</style>
</head>

<body>

<div class="container">

<h1>Pregnancy Week By Week</h1>

<div class="grid">

<div class="header">Trimester</div>
<div class="header">Month</div>
<div class="header">Week</div>

<div class="cell trimester">1st</div>
<div class="cell">One</div>
<div class="cell">1–4</div>

<div class="cell trimester"></div>
<div class="cell">Two</div>
<div class="cell">5–8</div>

<div class="cell trimester"></div>
<div class="cell">Three</div>
<div class="cell">9–13</div>

<div class="cell trimester">2nd</div>
<div class="cell">Four</div>
<div class="cell">14–17</div>

<div class="cell trimester"></div>
<div class="cell">Five</div>
<div class="cell">18–22</div>

<div class="cell trimester"></div>
<div class="cell">Six</div>
<div class="cell">23–27</div>

<div class="cell trimester">3rd</div>
<div class="cell">Seven</div>
<div class="cell">28–31</div>

<div class="cell trimester"></div>
<div class="cell">Eight</div>
<div class="cell">32–35</div>

<div class="cell trimester"></div>
<div class="cell">Nine</div>
<div class="cell">36–40</div>

</div>

<div class="buttons">
<button class="back" onclick="location.href='pregnant.php'">⬅ Back</button>
<button class="next" onclick="location.href='planning_trimester.php'">Next ➡</button>
</div>

</div>

</body>
</html>
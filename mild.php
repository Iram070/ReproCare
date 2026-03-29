<!DOCTYPE html>
<html>
<head>
<title>Mild Period Flow</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
    margin:0;
    font-family: Arial, sans-serif;
    background:#ffd6e5;
    text-align:center;
    color:#000;
    animation:fadePage 0.8s ease-in-out;
}

/* TITLE */
.title-box{
    display:inline-block;
    margin-top:40px;
    padding:20px 40px;
    background:#ffffff;
    border-radius:15px;
    font-size:28px;
    font-weight:bold;
    border:2px solid #000;
    animation:slideDown 0.8s ease;
}

/* LINES */
.line-vertical{
    width:2px;
    height:40px;
    background:#000;
    margin:0 auto;
}

.line-horizontal{
    width:60%;
    height:2px;
    background:#000;
    margin:0 auto;
}

/* CONTAINER */
.container{
    max-width:1100px;
    margin:30px auto;
}

/* CARDS */
.cards{
    display:flex;
    justify-content:center;
    gap:30px;
    flex-wrap:wrap;
    margin-top:20px;
}

.card{
    width:300px;
    padding:20px;
    border-radius:20px;
    text-align:left;
    background:#ffffff;
    border:2px solid #000;
    transition:0.4s;
    opacity:0;
    animation:slideUp 0.8s ease forwards;
}

.card:nth-child(1){ animation-delay:0.2s; }
.card:nth-child(2){ animation-delay:0.4s; }
.card:nth-child(3){ animation-delay:0.6s; }

.card:hover{
    transform:translateY(-10px);
}

.card h3{
    text-align:center;
    margin-bottom:15px;
}

.card ol{
    padding-left:18px;
    font-size:14px;
}

/* NOTE */
.note{
    max-width:800px;
    margin:40px auto 20px auto;
    font-size:15px;
    line-height:1.6;
}

/* BACK BUTTON */
.back-container{
    background:#ffffff;
    width:220px;
    margin:40px auto 70px auto;
    padding:15px 0;
    border-radius:25px;
    border:2px solid #000;
    cursor:pointer;
    transition:0.3s;
}

.back-container:hover{
    background:#000;
    color:#fff;
    transform:scale(1.08);
}

.back{
    font-size:24px;
    font-weight:bold;
}

/* ANIMATIONS */

@keyframes fadePage{
    from{opacity:0;}
    to{opacity:1;}
}

@keyframes slideDown{
    from{opacity:0; transform:translateY(-30px);}
    to{opacity:1; transform:translateY(0);}
}

@keyframes slideUp{
    from{opacity:0; transform:translateY(40px);}
    to{opacity:1; transform:translateY(0);}
}

/* RESPONSIVE */
@media(max-width:900px){
    .cards{
        flex-direction:column;
        align-items:center;
    }

    .line-horizontal{
        width:80%;
    }

    .card{
        width:90%;
    }
}

</style>
</head>
<body>

<div class="title-box">
    Mild Period Flow
</div>

<div class="line-vertical"></div>
<div class="line-horizontal"></div>

<div class="container">

<div class="cards">

<div class="card">
<h3>DIET</h3>
<ol>
<li>Include iron-rich foods like spinach, dates, and beetroot.</li>
<li>Add protein sources such as eggs, dal, paneer, and nuts.</li>
<li>Eat fresh fruits and vegetables daily.</li>
<li>Drink 7–8 glasses of water.</li>
<li>Reduce junk food and sugar intake.</li>
</ol>
</div>

<div class="card">
<h3>EXERCISE</h3>
<ol>
<li>Walk for 20–30 minutes daily.</li>
<li>Practice gentle yoga.</li>
<li>Do stretching exercises.</li>
<li>Avoid excessive workouts.</li>
<li>Maintain a regular routine.</li>
</ol>
</div>

<div class="card">
<h3>LIFESTYLE</h3>
<ol>
<li>Sleep at least 7–8 hours.</li>
<li>Manage stress levels.</li>
<li>Maintain healthy weight.</li>
<li>Track your menstrual cycle.</li>
<li>Consult doctor if needed.</li>
</ol>
</div>

</div>

<div class="note">
Mild menstrual symptoms are common and usually manageable. Follow the recommended steps for relief. If symptoms persist or worsen, please consult a gynaecologist.</div>

<!-- BACK BUTTON -->
<div class="back-container" onclick="window.location.href='irregular_form.php'">
    <div class="back">Back</div>
</div>

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ReproCare | Love & Emotional Support</title>

<style>

/* ===== Luxury Pink Animated Gradient ===== */
body{
    margin:0;
    font-family:'Georgia', serif;
    background:linear-gradient(-45deg,#fde2e4,#f8c8dc,#f9d5e5,#fbcfe8);
    background-size:400% 400%;
    animation:gradientMove 18s ease infinite;
    overflow-x:hidden;
    position:relative;
}

@keyframes gradientMove{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

/* ===== Floating Decorative Blurs ===== */
.blur-circle{
    position:absolute;
    border-radius:50%;
    filter:blur(130px);
    opacity:0.4;
    animation:float 14s infinite alternate ease-in-out;
}

.blur1{
    width:450px;
    height:450px;
    background:#f8bbd0;
    top:-150px;
    left:-150px;
}

.blur2{
    width:500px;
    height:500px;
    background:#f48fb1;
    bottom:-150px;
    right:-150px;
}

@keyframes float{
    from{transform:translateY(0);}
    to{transform:translateY(70px);}
}

/* ===== Floating Heart Particles ===== */
.heart{
    position:absolute;
    color:#ec407a;
    font-size:20px;
    animation:floatHeart 8s linear infinite;
    opacity:0.6;
}

@keyframes floatHeart{
    0%{transform:translateY(100vh) scale(0.8); opacity:0;}
    30%{opacity:0.8;}
    100%{transform:translateY(-10vh) scale(1.2); opacity:0;}
}

/* ===== Main Container ===== */
.container{
    width:90%;
    max-width:1100px;
    margin:80px auto;
    position:relative;
    z-index:2;
}

h1{
    text-align:center;
    color:#ad1457;
    margin-bottom:60px;
    font-size:32px;
}

/* ===== Rectangular Glass Cards ===== */
.card{
    width:60%;
    padding:35px 45px;
    margin:40px 0;
    border-radius:20px;
    background:rgba(255,255,255,0.55);
    backdrop-filter:blur(20px);
    box-shadow:0 15px 40px rgba(244,143,177,0.3);
    border:1px solid rgba(255,255,255,0.7);
    animation:pageFlip 1s ease forwards;
    opacity:0;
    transform-origin:left;
    line-height:1.9;
}

/* Alternate Layout */
.card.left{ margin-right:auto; }
.card.right{ margin-left:auto; }

/* Page Flip Animation */
@keyframes pageFlip{
    from{
        opacity:0;
        transform:rotateY(20deg) translateY(40px);
    }
    to{
        opacity:1;
        transform:rotateY(0deg) translateY(0);
    }
}

.card:nth-child(2){animation-delay:0.2s;}
.card:nth-child(3){animation-delay:0.4s;}
.card:nth-child(4){animation-delay:0.6s;}
.card:nth-child(5){animation-delay:0.8s;}
.card:nth-child(6){animation-delay:1s;}

.card h2{
    color:#c2185b;
    margin-bottom:15px;
}

.card p{
    color:#444;
    font-size:16px;
}

/* ===== Premium Button ===== */
.next-btn{
    display:block;
    width:fit-content;
    margin:60px auto;
    padding:15px 50px;
    border-radius:40px;
    background:#ec407a;
    color:white;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
}

.next-btn:hover{
    background:#c2185b;
    transform:scale(1.07);
    box-shadow:0 10px 30px rgba(194,24,91,0.4);
}

@media(max-width:900px){
    .card{width:85%;}
}

</style>
</head>
<body>

<!-- Decorative Blur Background -->
<div class="blur-circle blur1"></div>
<div class="blur-circle blur2"></div>

<!-- Floating Hearts -->
<div class="heart" style="left:10%; animation-delay:0s;">❤</div>
<div class="heart" style="left:25%; animation-delay:2s;">❤</div>
<div class="heart" style="left:50%; animation-delay:4s;">❤</div>
<div class="heart" style="left:70%; animation-delay:1s;">❤</div>
<div class="heart" style="left:85%; animation-delay:3s;">❤</div>

<div class="container">

<h1>ReproCare –💗 Support Your Partner with Love & Strength during pregnancy 💗</h1>

<div class="card left">
<h2>Emotional Stability & Reassurance</h2>
<p>Pregnancy brings emotional changes that require patience and understanding. Offer reassurance, listen attentively, and create a safe emotional space where she feels valued and respected.</p>
</div>

<div class="card right">
<h2>Physical Care & Shared Responsibility</h2>
<p>Support her with daily responsibilities, attend medical appointments together, and ensure proper nutrition and rest. Shared involvement strengthens partnership and trust.</p>
</div>

<div class="card left">
<h2>Healthy Communication</h2>
<p>Maintain open conversations about fears, expectations, and future plans. Calm communication prevents misunderstandings and strengthens emotional bonding.</p>
</div>

<div class="card right">
<h2>Mental Well-Being</h2>
<p>Be attentive to signs of stress or anxiety. Encourage relaxation, positivity, and seek professional guidance if emotional challenges arise.</p>
</div>

<div class="card left">
<h2>Love, Respect & Presence</h2>
<p>Small gestures, appreciation, and emotional availability create a secure environment. Your consistent presence reassures her throughout the pregnancy journey.</p>
</div>

<a href="select_role.php" class="next-btn"> 💗Continue with ReproCare Journey 💗</a>

</div>

</body>
</html>
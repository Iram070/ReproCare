<!DOCTYPE html>
<html>
<head>
<title>ReproCare | Welcome</title>

<style>

/* ===== BODY ===== */

body{
margin:0;
font-family:'Poppins',sans-serif;
height:100vh;
display:flex;
justify-content:center;
align-items:center;

background:linear-gradient(270deg,#ffd1dc,#ffc0cb,#ffe4e1,#ffd1dc);
background-size:600% 600%;
animation:bgMove 12s ease infinite;

overflow:hidden;
}

@keyframes bgMove{

0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}

}

/* ===== FLOATING HEARTS ===== */

.heart{
position:absolute;
font-size:22px;
color:#ff6f91;
opacity:0.7;
animation:floatHeart linear infinite;
}

@keyframes floatHeart{

0%{
transform:translateY(100vh);
opacity:0;
}

50%{
opacity:1;
}

100%{
transform:translateY(-10vh);
opacity:0;
}

}

/* ===== FLOATING BLOBS ===== */

.blob{
position:absolute;
border-radius:50%;
filter:blur(60px);
opacity:0.5;
animation:blobMove 10s ease-in-out infinite;
}

.blob1{
width:220px;
height:220px;
background:#ff9bb3;
top:10%;
left:15%;
}

.blob2{
width:200px;
height:200px;
background:#ffc1cc;
bottom:10%;
right:20%;
animation-delay:3s;
}

@keyframes blobMove{

0%,100%{transform:translateY(0px)}
50%{transform:translateY(-30px)}

}

/* ===== CARD ===== */

.card{

background:rgba(255,255,255,0.25);
backdrop-filter:blur(20px);

padding:55px 40px;

width:800px;

border-radius:28px;

text-align:center;

border:1px solid rgba(255,255,255,0.4);

box-shadow:
0 25px 45px rgba(0,0,0,0.2),
0 0 30px rgba(255,111,145,0.25);

animation:fadeUp 1.5s ease;

position:relative;
z-index:2;

}

@keyframes fadeUp{

from{
opacity:0;
transform:translateY(40px);
}

to{
opacity:1;
transform:translateY(0);
}

}

/* ===== LOGO ===== */

.logo-container{

width:140px;
height:140px;

margin:auto;

border-radius:50%;

background:white;

display:flex;
justify-content:center;
align-items:center;

box-shadow:0 15px 30px rgba(0,0,0,0.15);

animation:floatLogo 3s ease-in-out infinite;

}

.logo-container img{
width:80px;
}

@keyframes floatLogo{

0%{transform:translateY(0)}
50%{transform:translateY(-12px)}
100%{transform:translateY(0)}

}

/* ===== TITLE ===== */

h1{

font-size:40px;
margin:20px 0;

color:#4a2f3a;

}

/* ===== DESCRIPTION ===== */

p{

color:#5c3a45;
font-size:16px;
line-height:1.8;

margin-bottom:35px;

}

/* ===== BUTTONS ===== */

.btn-container{
display:flex;
justify-content:center;
gap:18px;
flex-wrap:wrap;
}

.btn{

background:#ff6f91;

color:white;

padding:14px 32px;

border-radius:12px;

font-size:16px;

text-decoration:none;

transition:0.3s;

box-shadow:0 6px 15px rgba(0,0,0,0.2);

}

.btn:hover{

background:#ff4f70;

transform:translateY(-3px) scale(1.05);

box-shadow:0 10px 25px rgba(0,0,0,0.3);

}

</style>

</head>

<body>

<!-- Floating Hearts -->

<script>

for(let i=0;i<20;i++){

let heart=document.createElement("div");
heart.className="heart";
heart.innerHTML="❤";

heart.style.left=Math.random()*100+"%";
heart.style.animationDuration=(5+Math.random()*5)+"s";
heart.style.fontSize=(15+Math.random()*15)+"px";

document.body.appendChild(heart);

}

</script>

<!-- Floating Blobs -->

<div class="blob blob1"></div>
<div class="blob blob2"></div>

<!-- CARD -->

<div class="card">

<div class="logo-container">
<img src="images/logo1.png">
</div>

<h1>ReproCare</h1>

<p>
ReproCare is a comprehensive reproductive health information system that provides guidance on menstrual cycles, fertility planning, pregnancy care, and male fertility. 
It promotes reproductive health awareness and supports informed decision-making through a structured and user-friendly platform.
</p>

<div class="btn-container">

<a href="login.php" class="btn">Get Started</a>

<a href="about_us.php" class="btn">About Us</a>

<a href="help.php" class="btn">Help</a>

</div>

</div>

</body>
</html>
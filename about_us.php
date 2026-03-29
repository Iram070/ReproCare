<!DOCTYPE html>
<html>
<head>
<title>About ReproCare</title>

<style>

/* ===== BODY ===== */

body{
margin:0;
font-family:'Poppins',sans-serif;
background:linear-gradient(270deg,#ffd1dc,#ffe4e1,#ffc0cb,#ffd1dc);
background-size:600% 600%;
animation:bgMove 12s ease infinite;
display:flex;
justify-content:center;
align-items:center;
min-height:100vh;
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
z-index:0;
}

@keyframes floatHeart{

0%{
transform:translateY(100vh) scale(0.7);
opacity:0;
}

50%{
opacity:1;
}

100%{
transform:translateY(-10vh) scale(1.3);
opacity:0;
}

}

/* ===== GLASS CONTAINER ===== */

.card{

background:rgba(255,255,255,0.25);
backdrop-filter:blur(20px);
-webkit-backdrop-filter:blur(20px);

padding:45px;
width:90%;
max-width:1200px;

border-radius:25px;

border:1px solid rgba(255,255,255,0.4);

box-shadow:
0 25px 45px rgba(0,0,0,0.2),
0 0 30px rgba(255,111,145,0.25);

text-align:center;
position:relative;
z-index:2;

}

/* ===== TEXT ===== */

h1{
color:#4a2f3a;
}

.intro{
color:#5c3a45;
line-height:1.7;
margin-bottom:30px;
}

/* ===== TEAM GRID ===== */

.team{

display:grid;
grid-template-columns:repeat(4,1fr);
gap:30px;

}

/* ===== MEMBER CARD ===== */

.member{

background:rgba(255,255,255,0.9);
padding:22px;
border-radius:18px;

box-shadow:0 10px 25px rgba(0,0,0,0.15);

display:flex;
flex-direction:column;
align-items:center;

height:350px;

transition:0.4s;

}

.member:hover{

transform:translateY(-12px) rotateX(6deg) rotateY(-6deg);

box-shadow:0 30px 50px rgba(0,0,0,0.25);

}

/* ===== PROFILE IMAGE ===== */

.profile{

width:120px;
height:120px;
border-radius:50%;
object-fit:cover;

border:4px solid #ff6f91;

margin-bottom:12px;

}

/* ===== NAME ===== */

.member h3{

margin:5px 0;
color:#ff6f91;

}

/* ===== ROLE ===== */

.role{

background:#ffe4ec;
color:#ff4f70;

padding:6px 14px;

border-radius:10px;

font-size:13px;
font-weight:600;

margin-bottom:10px;

}

/* ===== DESCRIPTION ===== */

.member p{

font-size:13px;
color:#555;
line-height:1.5;

flex-grow:1;

}

/* ===== BUTTON ===== */

.btn{

margin-top:30px;

display:inline-block;

background:#ff6f91;
color:white;

padding:12px 30px;

border-radius:12px;

text-decoration:none;

transition:0.3s;

}

.btn:hover{

background:#ff4f70;
transform:scale(1.08);

}

</style>

</head>

<body>

<!-- Random Floating Hearts -->

<script>

for(let i=0;i<20;i++){

let heart=document.createElement("div");
heart.className="heart";
heart.innerHTML="❤️";

heart.style.left=Math.random()*100+"%";
heart.style.animationDuration=(5+Math.random()*5)+"s";
heart.style.fontSize=(15+Math.random()*15)+"px";

document.body.appendChild(heart);

}

</script>

<div class="card">

<h1>About ReproCare</h1>

<p class="intro">
ReproCare is a reproductive health information system designed to provide guidance about menstrual cycles, fertility awareness, pregnancy care, and male fertility. The platform helps users gain knowledge and make informed decisions about reproductive health.
</p>

<h2>Our Team</h2>

<div class="team">

<!-- Iram -->

<div class="member">

<img src="images/iram.jpg" class="profile">

<h3>Iram Shaikh</h3>

<div class="role">
Full Stack Developer & Project Lead
</div>

<p>
Played a major role in building the ReproCare platform by leading development and implementing core features. Responsible for frontend design, backend logic, and database management.
</p>
</div>


<!-- Arpita -->

<div class="member">

<img src="images/arpita.jpg" class="profile">

<h3>Arpita Nawale</h3>

<div class="role">
Project Manager & Frontend Developer
</div>

<p>
Responsible for managing the project, guiding team members, and designing and developing the complete frontend.
</p>

</div>


<!-- Ashfa -->

<div class="member">

<img src="images/ashfa.jpg" class="profile">

<h3>Ashfa Shaikh</h3>

<div class="role">
Documentation Lead
</div>

<p>
Responsible for preparing and organizing the project documentation and compiling the black book.
</p>

</div>


<!-- Anisha -->

<div class="member">

<img src="images/anisha.jpg" class="profile">

<h3>Anisha Gupta</h3>

<div class="role">
Research & Project Support
</div>

<p>
Responsible for providing ideas and suggestions for the project.
</p>

</div>

</div>

<a href="index.php" class="btn">Back to Home</a>

</div>

</body>
</html>
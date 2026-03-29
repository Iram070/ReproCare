<!DOCTYPE html>
<html>
<head>
<title>FemVita - Pregnancy Journey</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

*{
    box-sizing:border-box;
}

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#ffd6e8,#ffc2dd,#f8b6d2);
    overflow:hidden;
}

/* Floating Decorative Circles */
body::before, body::after{
    content:"";
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,0.35);
    animation:float 8s infinite alternate ease-in-out;
    z-index:0;
}

body::before{
    width:280px;
    height:280px;
    top:-100px;
    left:-100px;
}

body::after{
    width:240px;
    height:240px;
    bottom:-100px;
    right:-100px;
}

@keyframes float{
    from{transform:translateY(0);}
    to{transform:translateY(35px);}
}

/* Main Centered Card */
.main{
    position:relative;
    z-index:1;
    width:90%;
    max-width:1100px;
    height:75vh;
    display:flex;
    border-radius:30px;
    overflow:hidden;
    box-shadow:0 25px 50px rgba(214,51,132,0.3);
    animation:fadeIn 1.2s ease;
}

/* Smooth Entry */
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

/* Left Image Section */
.left{
    flex:1;
    background:url('images/pregnant.png') no-repeat center center;
    background-size:contain;
    background-color:#ffe3ef;
    display:flex;
    align-items:center;
    justify-content:center;
}

/* Right Glass Section */
.right{
    flex:1;
    background:rgba(255,255,255,0.30);
    backdrop-filter:blur(20px);
    padding:60px;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

/* Heading */
h2{
    color:#d63384;
    font-size:34px;
    font-weight:700;
    margin-bottom:20px;
}

/* Description */
p{
    color:#444;
    line-height:1.9;
    font-size:17px;
    font-weight:500;
    margin-bottom:45px;
}

/* Buttons */
.buttons{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.btn{
    padding:13px 32px;
    border:none;
    border-radius:25px;
    font-size:15px;
    cursor:pointer;
    transition:0.3s;
}

/* Back Button */
.soft{
    background:white;
    color:#d63384;
}

.soft:hover{
    background:#ffe3ef;
    transform:translateY(-3px);
}

/* Next Button */
.pink{
    background:#d63384;
    color:white;
}

.pink:hover{
    background:#ad2167;
    transform:translateY(-3px);
    box-shadow:0 8px 20px rgba(214,51,132,0.3);
}

/* Responsive */
@media(max-width:900px){
    .main{
        flex-direction:column;
        height:auto;
    }

    .left{
        height:300px;
        background-size:contain;
    }
}

</style>
</head>

<body>

<div class="main">

<div class="left"></div>

<div class="right">

<h2>💕 Welcome to Your Beautiful Pregnancy Journey 💕</h2>

<p>
Pregnancy is a powerful, emotional, and life-changing experience. 
Your body is nurturing new life — something truly extraordinary. 
FemVita is here to guide you with trusted information, gentle care tips, 
and emotional support through every trimester. 
You are strong, capable, and never alone in this journey.
</p>

<div class="buttons">

<button class="btn soft" onclick="location.href='select_role.php'">
⬅ Back
</button>

<button class="btn pink" onclick="location.href='trimeste.php'">
Next ➡
</button>

</div>

</div>

</div>

</body>
</html>
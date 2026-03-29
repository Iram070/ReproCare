<!DOCTYPE html>
<html>
<head>
<title>FemVita - Thank You</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#ffd6e8,#ffc2dd,#f8b6d2);
    overflow:hidden;
}

/* Floating Romantic Circles */
body::before, body::after{
    content:"";
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,0.35);
    animation:float 7s infinite alternate ease-in-out;
}

body::before{
    width:280px;
    height:280px;
    top:-100px;
    left:-100px;
}

body::after{
    width:230px;
    height:230px;
    bottom:-100px;
    right:-80px;
}

@keyframes float{
    from{transform:translateY(0);}
    to{transform:translateY(35px);}
}

/* Glass Pink Card */
.container{
    width:90%;
    max-width:520px;
    padding:45px;
    text-align:center;
    border-radius:30px;
    background:rgba(255,255,255,0.30);
    backdrop-filter:blur(18px);
    box-shadow:0 15px 35px rgba(214,51,132,0.25);
    border:2px solid rgba(255,255,255,0.6);
    animation:fadeIn 1s ease;
}

/* Smooth Fade In */
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

/* Bigger Image (Width Increased Only) */
.icon img{
    width:240px;      /* Increased breadth */
    height:auto;      /* Keeps original height ratio */
    max-width:100%;
    margin-bottom:25px;
}

/* Heading */
h2{
    color:#d63384;
    margin-bottom:15px;
}

/* Description */
p{
    color:#5a5a5a;
    line-height:1.7;
    margin-bottom:35px;
    font-size:15px;
}

/* Back Button */
.back-btn{
    padding:12px 30px;
    background:#d63384;
    color:white;
    border:none;
    border-radius:25px;
    font-size:15px;
    cursor:pointer;
    transition:0.3s;
}

.back-btn:hover{
    background:#ad2167;
    transform:translateY(-3px);
    box-shadow:0 8px 20px rgba(214,51,132,0.3);
}

</style>
</head>

<body>

<div class="container">

<div class="icon">
<img src="images/thankyou.png" alt="Thank You">
</div>



<p>
We hope this information was truly helpful for you.  
May your pregnancy journey be filled with hope, strength, and beautiful moments.  
Every step you take is meaningful and powerful.  
Wishing you all the very best ahead 🌸
</p>

<button class="back-btn" onclick="location.href='select_role.php'">
⬅ Back to Home
</button>

</div>

</body>
</html>
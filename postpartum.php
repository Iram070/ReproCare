<!DOCTYPE html>
<html>
<head>
<title>Postpartum Care</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#ffd6e8,#fcbad3,#f8a5c2);
    min-height:100vh;
    overflow-x:hidden;
    padding:80px 8%;
    display:flex;
    align-items:center;
    justify-content:center;
}

/* Floating Background */
body::before, body::after{
    content:"";
    position:fixed;
    border-radius:50%;
    background:rgba(255,255,255,0.35);
    animation:float 8s infinite alternate ease-in-out;
    z-index:-1;
}

body::before{
    width:420px;
    height:420px;
    top:-160px;
    left:-160px;
}

body::after{
    width:320px;
    height:320px;
    bottom:-140px;
    right:-140px;
}

@keyframes float{
    from{transform:translateY(0);}
    to{transform:translateY(50px);}
}

/* Layout */
.split-section{
    display:flex;
    align-items:center;
    gap:100px;
    max-width:1300px;
    width:100%;
}

/* Image */
.image-side img{
    width:520px;
    height:520px;
    border-radius:50%;
    object-fit:cover;
    box-shadow:0 35px 80px rgba(214,51,132,0.45);
    animation:floatImage 5s infinite alternate ease-in-out;
}

@keyframes floatImage{
    from{transform:translateY(0);}
    to{transform:translateY(-25px);}
}

/* Content */
.content-side{
    max-width:600px;
}

.content-side h1{
    font-family:'Playfair Display',serif;
    font-size:50px;
    color:#b3125d;
    margin-bottom:30px;
}

.content-side p{
    font-size:19px;
    line-height:2;
    color:#5a3b3b;
    margin-bottom:40px;
}

/* Next Button */
.next-btn{
    display:inline-block;
    padding:14px 40px;
    background:linear-gradient(45deg,#ff4f9a,#d63384);
    color:white;
    font-size:16px;
    text-decoration:none;
    border-radius:40px;
    box-shadow:0 10px 30px rgba(214,51,132,0.4);
    transition:all 0.3s ease;
}

.next-btn:hover{
    transform:translateY(-5px);
    box-shadow:0 15px 40px rgba(214,51,132,0.6);
}

/* Responsive */
@media(max-width:900px){
    .split-section{
        flex-direction:column;
        text-align:center;
        gap:50px;
    }

    .image-side img{
        width:320px;
        height:320px;
    }

    .content-side h1{
        font-size:34px;
    }
}

</style>
</head>

<body>

<div class="split-section">

    <!-- Left Image -->
    <div class="image-side">
        <img src="images/postartum.png" alt="Postpartum Care">
    </div>

    <!-- Right Content -->
    <div class="content-side">
        <h1>Postpartum Care & Recovery</h1>
        <p>
            The postpartum period begins immediately after childbirth and is a vital time 
            for healing and emotional adjustment. A mother's body gradually recovers 
            while adapting to nurturing a newborn.
            <br><br>
            Proper rest, nutritious meals, hydration, and emotional support are essential 
            for a smooth recovery.
        </p>

        <!-- Next Button -->
        <a href="postpartum_details.php" class="next-btn">Next →</a>

    </div>

</div>

</body>
</html>
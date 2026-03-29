<!DOCTYPE html>
<html>
<head>
<title>Moderate Period Flow</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
    margin:0;
    font-family: Arial, sans-serif;
    background:#ffeaf3;
    text-align:center;
    padding:25px 15px;
    overflow-x:hidden;
}

/* Fade Animation */
@keyframes fadeUp{
    from{
        opacity:0;
        transform:translateY(30px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* Title */
.title{
    display:inline-block;
    background:#e88db1;
    padding:15px 70px;
    border-radius:40px;
    font-weight:bold;
    font-size:22px;
    margin-bottom:25px;
    color:white;
    animation:fadeUp 0.8s ease;
}

/* Top Line */
.main-line{
    width:85%;
    height:2px;
    background:black;
    margin:15px auto 50px auto;
    animation:fadeUp 1s ease;
}

/* Container Row */
.container{
    display:flex;
    justify-content:center;
    gap:25px;
    max-width:1200px;
    margin:0 auto;
}

/* Each Item */
.item{
    position:relative;
    flex:1;
    min-width:220px;
    animation:fadeUp 1.2s ease;
}

/* Shorter connector line */
.item::before{
    content:"";
    position:absolute;
    top:-55px;   /* LITTLE UP */
    left:50%;
    transform:translateX(-50%);
    width:2px;
    height:55px;  /* SHORTER */
    background:black;
}

/* Box */
.box{
    background:white;
    padding:22px;
    border-radius:25px;
    border:2px solid black;
    text-align:left;
    font-size:16px;
    line-height:1.8;
    transition:0.3s;
}

/* Hover animation */
.box:hover{
    transform:translateY(-5px);
    box-shadow:0 8px 20px rgba(0,0,0,0.15);
}

/* Header */
.box h3{
    text-align:center;
    padding:10px;
    border-radius:20px;
    margin-top:-35px;
    margin-bottom:18px;
    font-size:17px;
}

/* Header Colors */
.diet h3{ background:#bfe4ef; }
.exercise h3{ background:#cfcaf5; }
.lifestyle h3{ background:#c9e7dc; }
.causes h3{ background:#f6d6b8; }

/* Description */
.description{
    max-width:950px;
    margin:60px auto 25px auto;  /* LITTLE UP */
    font-size:17px;
    line-height:1.8;
    font-weight:bold;
    color:#333;
    animation:fadeUp 1.5s ease;
}

/* Back Button */
.back-btn{
    padding:14px 55px;
    border:none;
    border-radius:30px;
    background:black;
    color:white;
    cursor:pointer;
    font-size:18px;
    margin-bottom:20px;
    animation:fadeUp 1.8s ease;
    transition:0.3s;
}

.back-btn:hover{
    transform:scale(1.05);
}

/* Responsive */
@media(max-width:1024px){
    .container{
        flex-wrap:wrap;
        gap:20px;
    }
    .item{
        flex:45%;
    }
    .item::before{
        display:none;
    }
}

@media(max-width:600px){
    .container{
        flex-direction:column;
        align-items:center;
    }
    .item{
        width:100%;
    }
}

</style>
</head>

<body>

<div class="title">Moderate Period Flow</div>
<div class="main-line"></div>

<div class="container">

<div class="item">
<div class="box diet">
<h3>DIET</h3>
* Increase iron-rich foods.<br>
* Add vitamin C sources.<br>
* Eat balanced meals.<br>
* Stay hydrated.<br>
* Include leafy vegetables.<br>
* Limit caffeine intake.<br>
* Include whole grains.<br>
* Eat fresh fruits daily.<br>
* Avoid excessive sugar.
</div>
</div>

<div class="item">
<div class="box exercise">
<h3>EXERCISE</h3>
* Brisk walking 30 mins.<br>
* Light cardio weekly.<br>
* Yoga for balance.<br>
* Stretch for cramps.<br>
* Deep breathing.<br>
* Avoid extreme workouts.<br>
* Practice meditation.<br>
* Gentle cycling.<br>
* Maintain regular activity.
</div>
</div>

<div class="item">
<div class="box lifestyle">
<h3>LIFESTYLE</h3>
* Maintain sleep routine.<br>
* Reduce stress.<br>
* Track cycle.<br>
* Maintain healthy weight.<br>
* Avoid smoking.<br>
* Follow hygiene.<br>
* Stay hydrated daily.<br>
* Take adequate rest.<br>
* Maintain work-life balance.
</div>
</div>

<div class="item">
<div class="box causes">
<h3>COMMON CAUSES</h3>
* Stress & anxiety.<br>
* Hormonal imbalance.<br>
* Thyroid issues.<br>
* PCOS.<br>
* Sleep disturbances.<br>
* Weight changes.<br>
* Poor diet habits.<br>
* Lack of exercise.<br>
* Sudden lifestyle changes.
</div>
</div>

</div>

<div class="description">
A moderate menstrual flow is considered normal and healthy Maintaining proper hygiene, a balanced diet, regular exercise, and adequate rest can help support menstrual health. If the flow becomes unusually heavy, prolonged, or painful, medical consultation is advised.
</div>

<button class="back-btn" onclick="location.href='irregular_form.php'">Back</button>

</body>
</html>
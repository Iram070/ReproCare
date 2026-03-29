<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome to ReproCare</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
    margin:0;
    font-family:'Segoe UI', sans-serif;
    background: linear-gradient(135deg,#f8bbd0,#e1f5fe);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.container{
    background:#ffffff;
    width:90%;
    max-width:920px;
    padding:45px;
    border-radius:28px;
    box-shadow:0 20px 50px rgba(0,0,0,0.08);
    text-align:center;
    animation:fadeIn 0.8s ease;
    border:3px solid #000;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(25px);}
    to{opacity:1; transform:translateY(0);}
}

h2{
    font-size:28px;
    margin-bottom:6px;
}

.subtitle{
    color:#444;
    font-weight:500;
    margin-bottom:30px;
}

/* ROLE SECTION */

.role-container{
    display:flex;
    justify-content:center;
    gap:40px;
    margin-bottom:20px;
}

.role{
    width:180px;
    padding:25px;
    border-radius:20px;
    cursor:pointer;
    transition:0.3s;
    border:3px solid #000;
}

.role:hover{
    transform:scale(1.06);
    border-color:#e91e63;
}

.role img{
    width:90px;
    height:90px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:10px;
    box-shadow:0 6px 18px rgba(0,0,0,0.1);
}

.role p{
    font-weight:600;
    font-size:16px;
}

.female{ background:#fce4ec; }
.male{ background:#e3f2fd; }

/* FORM */

.form-section{
    display:none;
    margin-top:15px;
}

.form-section input{
    padding:10px;
    border-radius:8px;
    border:1px solid #ccc;
    width:200px;
    margin:6px;
}

.continue-btn{
    padding:10px 20px;
    background:#2d2d2d;
    color:#fff;
    border:none;
    border-radius:8px;
    cursor:pointer;
}

/* BOTTOM BUTTONS */

.bottom-buttons{
    display:flex;
    justify-content:space-between;
    margin-top:35px;
    gap:15px;
}

.bottom-buttons a{
    flex:1;
    text-decoration:none;
    padding:14px;
    border-radius:18px;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    font-weight:600;
    transition:0.3s;
    border:3px solid #000;
    color:#333;
}

.single-btn{ background:#f3e5f5; }
.married-btn{ background:#e8f5e9; }
.pregnant-btn{ background:#e3f2fd; }

.bottom-buttons img{
    width:45px;
    height:45px;
    border-radius:50%;
    object-fit:cover;
}

.bottom-buttons a:hover{
    transform:translateY(-6px);
    box-shadow:0 8px 20px rgba(0,0,0,0.1);
}

.description{
    font-size:14px;
    margin-top:10px;
    color:#444;
}

.success{
    color:green;
    margin-top:8px;
    display:none;
    font-weight:600;
}

.back-btn{
    margin-top:25px;
}

.back-btn a{
    display:inline-block;
    padding:10px 25px;
    background:#ffffff;
    border:3px solid #000;
    border-radius:20px;
    font-weight:600;
    text-decoration:none;
    color:#333;
    transition:0.3s;
}

.back-btn a:hover{
    transform:translateY(-4px);
    box-shadow:0 8px 20px rgba(0,0,0,0.1);
}

</style>
</head>

<body>

<div class="container">

    <h2>🌸Welcome to ReproCare🌸</h2>
    <div class="subtitle">Select your role to continue</div>

    <div class="role-container">

        <div class="role female" onclick="selectRole('female')">
            <img src="images/icon_female.png">
            <p>Female</p>
        </div>

        <div class="role male" onclick="selectRole('male')">
            <img src="images/icon_male.png">
            <p>Male</p>
        </div>

    </div>

    <div class="form-section" id="formSection">
        <input type="text" id="name" placeholder="Enter Name">
        <input type="date" id="dob">
        <br>
        <button class="continue-btn" onclick="saveInfo()">Continue</button>
    </div>

    <div class="description" id="descriptionText"></div>
    <div class="success" id="successMsg">✔ Information Saved Successfully</div>

    <div class="bottom-buttons">

        <a href="cycle_tracking.php" class="single-btn">
            <img src="images/icon_single.png">
            Single
        </a>

        <a href="married_dashboard.php" class="married-btn">
            <img src="images/icon_married.png">
            Married
        </a>

        <a href="pregnant.php" class="pregnant-btn">
            <img src="images/icon_pregnant.png">
            Pregnant
        </a>

    </div>

    <!-- BACK BUTTON ADDED -->
    <div class="back-btn">
        <a href="index.php">← Back</a>
    </div>

</div>

<script>

let selectedRole = "";

function selectRole(role){
    selectedRole = role;
    document.getElementById("formSection").style.display="block";
    document.getElementById("successMsg").style.display="none";

    if(role === "female"){
        document.getElementById("descriptionText").innerHTML =
        "This section supports menstrual health tracking, fertility insights, and pregnancy planning guidance.";
    } else {
        document.getElementById("descriptionText").innerHTML =
        "This section provides male reproductive health tracking and fertility support information.";
    }
}

function saveInfo(){
    let name = document.getElementById("name").value;
    let dob = document.getElementById("dob").value;

    if(name !== "" && dob !== ""){
        document.getElementById("successMsg").style.display="block";

        if(selectedRole === "male"){
            window.location.href = "male_dashboard.php";
        }
    } else {
        alert("Please fill all details.");
    }
}

</script>

</body>
</html>
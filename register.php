<?php
session_start();
include "db_connect.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = $_POST['password'];

    if(!empty($name) && !empty($email) && !empty($password)){

        $check = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn,$check);

        if(mysqli_num_rows($result) > 0){

            $error = "User already exists with this email.";

        }else{

            $hashed_password = password_hash($password,PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (name,email,password)
                    VALUES ('$name','$email','$hashed_password')";

            if(mysqli_query($conn,$sql)){

                $_SESSION['user_id'] = mysqli_insert_id($conn);

                header("Location: select_role.php");
                exit();

            }else{
                $error = "Registration failed.";
            }

        }

    }else{
        $error = "Please fill all fields.";
    }

}
?>

<!DOCTYPE html>
<html>
<head>

<title>ReproCare | Register</title>

<style>

/* ===== BODY ===== */

body{
margin:0;
font-family:'Segoe UI',sans-serif;
height:100vh;
display:flex;
justify-content:center;
align-items:center;

background:linear-gradient(270deg,#ffd1dc,#ffc0cb,#ffe4e1,#ffd1dc);
background-size:600% 600%;
animation:bgMove 12s ease infinite;
}

@keyframes bgMove{

0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}

}

/* ===== FLOATING HEARTS ===== */

.heart{
position:absolute;
font-size:20px;
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

/* ===== CONTAINER ===== */

.container{

background:rgba(255,255,255,0.25);
backdrop-filter:blur(18px);

padding:35px;
width:360px;

border-radius:18px;

box-shadow:
0 20px 40px rgba(0,0,0,0.2),
0 0 20px rgba(255,105,135,0.3);

text-align:center;

border:1px solid rgba(255,255,255,0.4);

}

/* ===== HEADINGS ===== */

h1{
color:#ff4f70;
margin-bottom:5px;
}

h2{
margin-top:0;
color:#333;
}

/* ===== INPUTS ===== */

input{
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:10px;

border-radius:8px;
border:1px solid #ddd;

outline:none;

transition:0.3s;
}

input:focus{
border-color:#ff6f91;
box-shadow:0 0 8px rgba(255,105,135,0.4);
}

/* ===== BUTTON ===== */

input[type="submit"]{

margin-top:15px;

background:#ff6f91;
color:white;

border:none;

cursor:pointer;

font-weight:bold;

transition:0.3s;

}

input[type="submit"]:hover{

background:#ff4f70;
transform:scale(1.05);

}

/* ===== ERROR ===== */

.error{
color:red;
margin-bottom:10px;
font-size:14px;
}

/* ===== LINK ===== */

.link{
margin-top:15px;
font-size:14px;
}

.link a{
color:#ff4f70;
text-decoration:none;
font-weight:bold;
}

.link a:hover{
text-decoration:underline;
}

</style>

</head>

<body>

<!-- Floating Hearts -->

<script>

for(let i=0;i<15;i++){

let heart=document.createElement("div");
heart.className="heart";
heart.innerHTML="❤";

heart.style.left=Math.random()*100+"%";
heart.style.animationDuration=(5+Math.random()*5)+"s";
heart.style.fontSize=(15+Math.random()*10)+"px";

document.body.appendChild(heart);

}

</script>

<div class="container">

<h1>ReproCare</h1>
<h2>Create Account</h2>

<?php
if($error != ""){
echo "<div class='error'>$error</div>";
}
?>

<form method="POST">

<label>Name</label>
<input type="text" name="name" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Password</label>
<input type="password" name="password" required>

<input type="submit" value="Register">

</form>

<div class="link">
Already have an account? <a href="login.php">Login</a>
</div>

</div>

</body>
</html>

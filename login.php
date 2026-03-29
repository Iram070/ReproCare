<?php
session_start();
include("db_connect.php");

$error = "";
$form_submitted = false;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['email'])) {

    $form_submitted = true;

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($email) && !empty($password)) {

        $stmt = $conn->prepare("SELECT user_id, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {

            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {

                $_SESSION['user_id'] = $user['user_id'];
                header("Location: select_role.php");
                exit();

            } else {
                $error = "Entered password is incorrect.";
            }

        } else {
            $error = "No account found with this email.";
        }

        $stmt->close();
    } else {
        $error = "Please fill all fields.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>ReproCare | Login</title>

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

/* ===== LOGIN CARD ===== */

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

/* ===== LABEL ===== */

label{
display:block;
text-align:left;
margin-top:10px;
font-size:14px;
}

/* ===== INPUT ===== */

input[type="email"],
input[type="password"]{

width:100%;
padding:12px;
margin-top:5px;

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

margin-top:20px;
width:100%;
padding:12px;

background:#ff6f91;
color:#fff;

border:none;
border-radius:8px;

font-size:16px;
cursor:pointer;

transition:0.3s;

}

input[type="submit"]:hover{

background:#ff4f70;
transform:scale(1.05);

}

/* ===== ERROR MESSAGE ===== */

.error-message{

margin-top:15px;
padding:10px;

background:#ffe6ea;
color:#d32f2f;

border-radius:8px;
font-size:14px;
font-weight:600;

}

/* ===== LINKS ===== */

.link{
margin-top:15px;
font-size:14px;
}

.link a{
text-decoration:none;
font-weight:bold;
color:#ff4f70;
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
<h2>Login</h2>

<?php if($form_submitted && $error != "") { ?>
<div class="error-message"><?php echo $error; ?></div>
<?php } ?>

<form action="login.php" method="post">

<label>Email</label>
<input type="email" name="email" placeholder="Enter your email" required>

<label>Password</label>
<input type="password" name="password" placeholder="Enter your password" required>

<input type="submit" value="Login">

</form>

<div class="link">
<a href="reset_password.php">Forgot password?</a>
</div>

<div class="link">
New user? <a href="register.php">Register here</a>
</div>

</div>

</body>
</html>
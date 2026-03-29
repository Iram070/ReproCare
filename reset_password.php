<?php
include("db_connect.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $new_password = trim($_POST['new_password']);

    if (!empty($email) && !empty($new_password)) {

        $stmt = $conn->prepare("SELECT user_id FROM users WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {

            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            $update = $conn->prepare("UPDATE users SET password=? WHERE email=?");
            $update->bind_param("ss", $hashed_password, $email);

            if ($update->execute()) {
                $message = "Password updated successfully. You can now login.";
            } else {
                $message = "Something went wrong.";
            }

            $update->close();

        } else {
            $message = "No account found with this email.";
        }

        $stmt->close();

    } else {
        $message = "Please fill all fields.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Reset Password | ReproCare</title>

<style>

/* ===== BODY ===== */

body{
margin:0;
font-family:'Segoe UI',sans-serif;

display:flex;
justify-content:center;
align-items:center;

height:100vh;

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

/* ===== HEADING ===== */

h2{
color:#ff4f70;
margin-bottom:15px;
}

/* ===== INPUT ===== */

input{

width:100%;
padding:12px;
margin-top:10px;

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

button{

margin-top:18px;
width:100%;

padding:12px;

background:#ff6f91;
color:white;

border:none;
border-radius:8px;

font-size:15px;

cursor:pointer;

transition:0.3s;

}

button:hover{

background:#ff4f70;
transform:scale(1.05);

}

/* ===== MESSAGE ===== */

.message{

margin-top:15px;
padding:10px;

border-radius:8px;

background:#ffe6ea;
color:#d32f2f;

font-size:14px;
font-weight:600;

}

.success{

background:#e8f5e9;
color:#2e7d32;

}

/* ===== LINK ===== */

a{

display:inline-block;
margin-top:15px;

text-decoration:none;

font-weight:bold;

color:#ff4f70;

}

a:hover{
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

<h2>Reset Password</h2>

<form method="POST">

<input type="email" name="email" placeholder="Enter your email" required>

<input type="password" name="new_password" placeholder="Enter new password" required>

<button type="submit">Update Password</button>

</form>

<?php if($message != "") { ?>
<div class="message <?php echo ($message == 'Password updated successfully. You can now login.') ? 'success' : ''; ?>">
<?php echo $message; ?>
</div>
<?php } ?>

<a href="login.php">Back to Login</a>

</div>

</body>
</html>

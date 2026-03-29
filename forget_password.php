<!DOCTYPE html>
<html>
<head>
<title>FemVita | Forgot Password</title>

<style>
body{
    margin:0;
    font-family:Arial, sans-serif;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(to right,#b76e79,#d8a7b1);
}
.container{
    background:#f8f3ef;
    padding:30px;
    width:350px;
    border-radius:10px;
    text-align:center;
}
input{
    width:100%;
    padding:10px;
    margin-top:15px;
    border-radius:5px;
    border:1px solid #ccc;
}
button{
    width:100%;
    padding:10px;
    margin-top:20px;
    background:#2f2f2f;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
}
a{
    display:block;
    margin-top:15px;
    text-decoration:none;
    color:black;
    font-weight:bold;
}
</style>
</head>

<body>

<div class="container">
    <h2>Forgot Password</h2>
    <p>Enter your registered email</p>

    <form action="reset_password.php" method="post">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Reset Password</button>
    </form>

    <a href="login.php">Back to Login</a>
</div>

</body>
</html>
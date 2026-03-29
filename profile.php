<?php
session_start();
include("db.php");

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Upload image
if(isset($_POST['upload'])){

    $file_name = $_FILES['profile_image']['name'];
    $tmp_name = $_FILES['profile_image']['tmp_name'];

    if($file_name != ""){

        $new_name = time() . "_" . $file_name;
        move_uploaded_file($tmp_name, "uploads/" . $new_name);

        mysqli_query($conn, 
        "UPDATE users SET profile_image='$new_name' WHERE user_id='$user_id'");
    }
}

// Fetch user data
$query = mysqli_query($conn, "SELECT * FROM users WHERE user_id='$user_id'");
$user = mysqli_fetch_assoc($query);

$name = $user['name'];
$email = $user['email'];
$image = $user['profile_image'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<style>
body{
    font-family:Poppins;
    background:#FFF5F8;
    padding:20px;
}
.card{
    background:white;
    padding:25px;
    border-radius:25px;
    box-shadow:0 10px 30px rgba(0,0,0,0.05);
    max-width:400px;
    margin:auto;
    text-align:center;
}
img{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
}
input[type=file]{
    margin-top:15px;
}
.btn{
    margin-top:10px;
    padding:8px 20px;
    background:#ff4d88;
    color:white;
    border:none;
    border-radius:20px;
}
</style>
</head>
<body>

<div class="card">

    <?php if($image != ""){ ?>
        <img src="uploads/<?php echo $image; ?>">
    <?php } else { ?>
    <?php } ?>

    <h2><?php echo htmlspecialchars($name); ?></h2>
    <p><?php echo htmlspecialchars($email); ?></p>
</div>

</body>
</html>
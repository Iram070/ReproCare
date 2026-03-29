<?php
session_start();
include("db.php");

if(!isset($_SESSION['user_email']))
{
    header("Location: login.php");
    exit();
}

$email = $_SESSION['user_email'];

$message = "";

if(isset($_POST['save']))
{
    if(isset($_POST['symptoms']))
    {
        $symptoms = $_POST['symptoms'];

        foreach($symptoms as $symptom)
        {
            $sql = "INSERT INTO symptoms (email, symptom)
                    VALUES ('$email', '$symptom')";
            mysqli_query($conn, $sql);
        }

        $message = "Symptoms saved successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>FemVita | Symptoms</title>

<style>

body{
    font-family: Arial;
    background: linear-gradient(135deg,#ffd1e8,#f8a1c4);
    text-align:center;
    padding-top:50px;
}

.box{
    background:white;
    width:420px;
    margin:auto;
    padding:30px;
    border-radius:15px;
}

h1{
    margin-bottom:20px;
}

.symptom{
    text-align:left;
    margin:8px 0;
}

button{
    margin-top:20px;
    padding:10px;
    width:100%;
    background:black;
    color:white;
    border:none;
    border-radius:6px;
}

.msg{
    color:green;
}

</style>

</head>
<body>

<div class="box">

<h1>Select Symptoms</h1>

<?php if($message!="") echo "<p class='msg'>$message</p>"; ?>

<form method="post">

<div class="symptom">
<input type="checkbox" name="symptoms[]" value="Cramps"> Cramps
</div>

<div class="symptom">
<input type="checkbox" name="symptoms[]" value="Headache"> Headache
</div>

<div class="symptom">
<input type="checkbox" name="symptoms[]" value="Mood swings"> Mood swings
</div>

<div class="symptom">
<input type="checkbox" name="symptoms[]" value="Bloating"> Bloating
</div>

<div class="symptom">
<input type="checkbox" name="symptoms[]" value="Fatigue"> Fatigue
</div>

<div class="symptom">
<input type="checkbox" name="symptoms[]" value="Back pain"> Back pain
</div>

<button type="submit" name="save">Save Symptoms</button>

</form>

</div>

</body>
</html>

<?php
session_start();
$conn = mysqli_connect("localhost","root","","femvita");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"]=="POST"){

    // Agar login system hai
    $user_id = $_SESSION['user_id']; // ensure login

    $exercise = intval($_POST['exercise']);
    $sleep = intval($_POST['sleep']);
    $smoking = intval($_POST['smoking']);
    $alcohol = intval($_POST['alcohol']);
    $energy = intval($_POST['energy']);
    $libido = intval($_POST['libido']);

    $score = 0;

    $score += $exercise + $sleep + $smoking + $alcohol;

    // Risk factors
    $risk_values = 0;
    $risks_text = "";

    if(isset($_POST['risk'])){
        foreach($_POST['risk'] as $risk){
            $risk_values += intval($risk);
        }
        $risks_text = implode(",", $_POST['risk']);
    }

    $score += $risk_values;

    if($energy > 6) $score += 2;
    if($libido > 6) $score += 2;

    // Risk Level
    if($score >= 12){
        $risk_level = "Mild";
    }
    elseif($score >= 6){
        $risk_level = "Moderate";
    }
    else{
        $risk_level = "High";
    }

    // Insert Query
    $sql = "INSERT INTO male_fertility_data 
    (user_id,exercise,sleep,smoking,alcohol,energy,libido,risks,total_score,risk_level)
    VALUES 
    ('$user_id','$exercise','$sleep','$smoking','$alcohol','$energy','$libido','$risks_text','$score','$risk_level')";

    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Data Saved Successfully!');
        window.location='male_dashboard.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
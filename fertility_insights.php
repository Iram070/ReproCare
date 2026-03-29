<!DOCTYPE html>
<html>
<head>
<title>FemVita - Fertile Window</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

/* ===== BODY BACKGROUND ===== */
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #ffdde1, #ee9ca7);
    overflow-x: hidden;
}

/* Floating Decorative Circles */
body::before, body::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.25);
    animation: float 8s infinite ease-in-out alternate;
}

body::before {
    width: 300px;
    height: 300px;
    top: -100px;
    left: -100px;
}

body::after {
    width: 250px;
    height: 250px;
    bottom: -80px;
    right: -80px;
}

@keyframes float {
    from { transform: translateY(0px); }
    to { transform: translateY(30px); }
}

/* ===== GLASS CONTAINER ===== */
.container {
    width: 90%;
    max-width: 600px;
    margin: 80px auto;
    padding: 40px;
    border-radius: 25px;
    background: rgba(255,255,255,0.25);
    backdrop-filter: blur(15px);
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
    animation: fadeIn 1s ease-in-out;
    transition: 0.4s;
}

.container:hover {
    box-shadow: 0 12px 40px rgba(0,0,0,0.25);
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}

h2 {
    text-align: center;
    color: #d63384;
    margin-bottom: 30px;
}

label {
    display: block;
    margin-top: 18px;
    font-weight: 500;
    color: #444;
}

input {
    width: 100%;
    padding: 12px;
    margin-top: 6px;
    border-radius: 12px;
    border: none;
    outline: none;
    font-size: 15px;
}

/* Button */
button {
    width: 100%;
    padding: 14px;
    margin-top: 30px;
    background: #d63384;
    color: white;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    font-size: 16px;
    transition: 0.3s;
}

button:hover {
    background: #ad2167;
    transform: translateY(-3px);
}

/* Back Button */
.back-btn {
    background: transparent;
    border: 2px solid #d63384;
    color: #d63384;
    margin-top: 15px;
}

.back-btn:hover {
    background: #d63384;
    color: white;
}

</style>
</head>

<body>

<div class="container">

<h2>Fertile Window Calculator </h2>

<form method="post" action="fertility_info.php">

    <label>First Day of Last Period:</label>
    <input type="date" name="lmp" required>

    <label>Average Cycle Length (days):</label>
    <input type="number" name="cycle_length" required>

    <label>Period Duration (days):</label>
    <input type="number" name="period_duration" required>

    <button type="submit">
        Calculate Fertility ➡
    </button>

</form>

<button class="back-btn" onclick="location.href='planning_conceive.php'">
    ⬅ Back to Planning
</button>

</div>

</body>
</html>
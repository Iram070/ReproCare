<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Understanding PCOD & PCOS | FemVita</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>

body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to right, #f8d7da, #f3c6cf);
}

/* Main Container */
.main-container {
    width: 90%;
    max-width: 1000px;
    margin: 50px auto;
    background: #ffffff;
    border-radius: 18px;
    padding: 35px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    animation: fadeIn 0.6s ease-in-out;
}

/* Heading */
h1 {
    text-align: center;
    color: #c2185b;
    font-size: 28px;
    margin-bottom: 10px;
}

/* Description */
.description {
    text-align: center;
    color: #222;
    font-size: 16px;
    margin-bottom: 30px;
}

/* Comparison Section */
.comparison {
    display: flex;
    gap: 40px;
    align-items: flex-start;
    margin-top: 20px;
}

/* Columns */
.column {
    flex: 1;
}

/* Section Title */
.section-title {
    font-size: 24px;
    font-weight: 600;
    color: #c2185b;
    text-align: center;
    margin-bottom: 15px;
}

/* List */
ul {
    padding-left: 20px;
}

li {
    color: #222;
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 8px;
}

/* Divider */
hr {
    border: none;
    height: 2px;
    background-color: #333;
    margin: 30px 0;
}

/* Buttons Section */
.button-group {
    text-align: center;
    margin-top: 40px;
}

.btn {
    display: inline-block;
    padding: 12px 22px;
    margin: 10px;
    background-color: #c2185b;
    color: white;
    text-decoration: none;
    border-radius: 30px;
    transition: 0.3s ease;
    font-weight: 500;
}

.btn:hover {
    background-color: #a3154f;
    transform: scale(1.05);
}

/* Animation */
@keyframes fadeIn {
    from {opacity: 0; transform: translateY(15px);}
    to {opacity: 1; transform: translateY(0);}
}

/* Responsive */
@media (max-width: 768px) {
    .comparison {
        flex-direction: column;
    }
}

</style>
</head>

<body>

<div class="main-container">

    <h1>Understanding PCOD & PCOS</h1>

    <p class="description">
        PCOD and PCOS are common hormonal conditions affecting women of reproductive age.
        Early awareness helps in better management and treatment.
    </p>

    <hr>

    <div class="comparison">

        <!-- PCOD -->
        <div class="column">
            <h3 class="section-title">PCOD</h3>
            <ul>
                <li>Polycystic Ovarian Disease</li>
                <li>Common and generally less severe</li>
                <li>Ovaries release immature or partially mature eggs</li>
                <li>Can often be managed with lifestyle changes</li>
                <li>Hormonal imbalance related</li>
                <li>Irregular periods may occur</li>
                <li>Mild to moderate weight gain</li>
                <li>Mild acne and hair growth</li>
            </ul>
        </div>

        <!-- PCOS -->
        <div class="column">
            <h3 class="section-title">PCOS</h3>
            <ul>
                <li>Polycystic Ovary Syndrome</li>
                <li>More complex hormonal disorder</li>
                <li>Ovaries produce excess male hormones</li>
                <li>Requires medical treatment + lifestyle modification</li>
                <li>Linked with insulin resistance</li>
                <li>Severe menstrual irregularities</li>
                <li>Significant weight gain</li>
                <li>Excess acne and unwanted hair growth</li>
            </ul>
        </div>

    </div>

    <!-- Buttons -->
    <div class="button-group">
                <a href="pcod_details.php" class="btn">View Detailed Information</a>
        <a href="dashboard.php" class="btn">Go to Dashboard</a>
    </div>

</div>

</body>
</html>
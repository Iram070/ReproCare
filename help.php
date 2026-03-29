<!DOCTYPE html>
<html>
<head>
<title>Help & Guide | ReproCare</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
    margin:0;
    font-family:'Segoe UI', sans-serif;
    background:linear-gradient(135deg,#ffd1dc,#fff1e0);
}

/* Main Container */

.container{
    width:90%;
    max-width:1000px;
    margin:40px auto;
}

/* Section Card */

.section{
    background:white;
    padding:30px;
    margin-bottom:30px;
    border-radius:20px;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
}

.section h2{
    color:#cc0066;
    margin-bottom:15px;
}

.section p{
    line-height:1.6;
    color:#444;
}

/* Video */

video{
    width:100%;
    border-radius:10px;
    margin-top:15px;
}

/* Button */

.btn{
    display:inline-block;
    background:#ff4d94;
    color:white;
    padding:12px 25px;
    border-radius:25px;
    text-decoration:none;
    margin-top:15px;
}

.btn:hover{
    background:#e60073;
}

/* Back Button */

.back{
    display:block;
    text-align:center;
    margin-top:20px;
}

</style>
</head>

<body>

<div class="container">

<!-- GROUP INTRODUCTION -->

<div class="section">

<h2>👩‍💻 Group Introduction</h2>

<p>
ReproCare is a health monitoring web application developed as an academic project 
to support reproductive health awareness and fertility tracking.

Our project team members contributed to different areas of the system development:

</p>

<p>

<strong>Iram Shaikh</strong> – Full Stack Developer | Project Lead | Backend Developer |Database Manager<br>
<strong>Arpita</strong> – Project Manager | Frontend Developer<br>
<strong>Ashfa</strong> – Documentation Lead | Quality Assurance<br>
<strong>Anisha</strong> – Research and Project Support

</p>

<p>

The goal of ReproCare is to provide a simple and user-friendly platform 
where users can track reproductive health information, monitor fertility 
patterns, and receive guidance for maintaining better health.

</p>

</div>


<!-- USER GUIDE -->

<div class="section">

<h2>📖 User Guide</h2>

<p>
The following screen recording demonstrates how to use the ReproCare web application.
Users can register, log in, track fertility data, view health reports, and access 
consultation resources.
</p>

<!-- SCREEN RECORDING VIDEO -->


<video controls width="100%">
    <source src="video/reprocare.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
<p>

<strong>User Guide Explanation:</strong><br><br>

1. The user first registers an account using the registration form.<br>
2. After successful registration, the user logs in to access the dashboard.<br>
3. The dashboard allows users to track fertility and reproductive health data.<br>
4. Users can enter lifestyle and health factors to calculate fertility risk.<br>
5. The system generates a health report based on the provided information.<br>
6. Users can also download the report and consult doctors if necessary.

</p>

</div>


<!-- BLACKBOOK -->

<div class="section">

<h2>📚 Project Blackbook</h2>

<p>
The project blackbook contains the complete documentation of FemVita including
system design, database structure, implementation details, and screenshots.
</p>

<a href="blackbook.pdf" target="_blank" class="btn">View Blackbook</a>
</div>


<div class="back">
<a href="index.php" class="btn">⬅ Back </a>
</div>

</div>

</body>
</html>
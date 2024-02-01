<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Roboto&display=swap" rel="stylesheet">
    
</head>

<body>
    <nav>
        <div class="logo">
            <a href="index.php">PSK PORT</a>
        </div>
        <ul class="menu">
            <li><a href="about.php">About</a></li>
            <li><a href="education.php">Education</a></li>
            <li><a href="skill.php">Skills</a></li>
            <li><a href="reward.php">Reward</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="hamburger-icon" onclick="myFunction(this)" id="hamIcon">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </nav>

    <ul class="mobile-menu" id="mobileMenu">
        <li><a href="about.php">About</a></li>
        <li><a href="education.php">Education</a></li>
        <li><a href="skill.php">Skills</a></li>
        <li><a href="reward.php">Reward</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>


    <script src="navbar.js"></script>
</body>

</html>
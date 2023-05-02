<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Socials</title>
    <link rel="stylesheet" href="social.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    
</head>
<body>

    <div class="navbar">
        <p class="firstname">Axel Moran Caballero</p>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="social.php">Social</a></li>
            <li><a href="admin.php">Admin</a></li>

        </ul>
    </div>

    <div class="container">
        <h1>Social</h1>
        <p>Feel free to check out my socials! <br>Find me on Facebook, LinkedIn and Youtube by clicking on the icons below</p>
    </div>

    <div class="image">
    <img src="socialmediaicons.jpg" alt="Social Media Icons" usemap="#social-map">
    <map name="social-map">
        <area shape="rect" coords="0,0,119,114" href="<?php echo file('socials.txt')[0]; ?>" alt="Facebook">
        <area shape="rect" coords="333,168,452,281" href="<?php echo file('socials.txt')[1]; ?>" alt="LinkedIn">
        <area shape="rect" coords="169,335,288,448" href="<?php echo file('socials.txt')[2]; ?>" alt="Youtube">
    </map>
</div>


    
</body>
</html>
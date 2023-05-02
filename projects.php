<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
    <link rel="stylesheet" href="projects.css">
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
    <div class="contacts">
        <h1 class="text">My Projects</h1>
        <p class="text">10 of my projects, I completed over the past 10 years.</p>
        <div class="contact-box">
           <ol class="center" type="I" start="10" reversed="reversed">
            
            <?php

                $fileName = file_get_contents("Projects (1).txt");

                //splits it into an array of lines, and outputs the contents as an ordered list
                $lines = explode("\n", $fileName);
                echo '<ol type="I" start="10" reversed="reversed">';
                foreach ($lines as $line) {
                    echo '<li>' . $line . '</li>';
                }
                echo '</ol>';
                
            ?>
           </ol>
        </div>

    </div>
    
</body>
</html>
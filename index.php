<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Axel Moran Caballero's personal website">
    <meta name="Keywords" content="HMTL, CSS, Concordia, SOEN-287, Assignment ">
    <title>Axel's Personal Website</title>
    <link rel="stylesheet" href="style.css">
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
    <div class="image">
        <img src="Axelpic.jpg" alt="An old picture of me" title="Young Axel">
    </div>

    <div class="content">
        
        <?php

        // Read the contents of the .txt file
        $content = file_get_contents("ProfessionalStatement.txt");

        // Output the contents to the XHTML tag on your personal website
        echo $content;
        
        ?>
    </div>

    <div class="bio">
        
        <h2>About Me</h2>
        
        <?php

        // Read the contents of the .txt file
        $bio = file_get_contents("bio.txt");

        // Output the contents to the XHTML tag on your personal website
        echo '<div class="bio">' . $bio . '</div>';

        ?>
    </div>
    
</body>
</html>
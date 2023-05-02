<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link rel="stylesheet" href="resume.css">
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
        <h1>RESUME</h1>
        <h3>2300 Rue Ward - 514-503-2046 - Montreal, QC</h3>
        <h4> amorancaballero@hotmail.com - LinkedIn Profile - Twitter/Blog/Portfolio</h4>

        <div class="resume-box">
            <dl class="resume-list">
                <dt>Education</dt>
                
                <?php
                $education = file_get_contents('education.txt');
                echo '<dd>' . $education . '</dd>';
            ?>    
                
                    
                
                    <dt>Professional and Technical Skills</dt>
                    <?php
                $skills = file_get_contents('skills.txt');
                echo '<dd>' . $skills . '</dd>';
            ?>
                
                    <dt>Awards and Recognition</dt>
                
                    <?php
                $awards = file_get_contents('awards.txt');
                $awards = str_replace("\n", '</li><li>', $awards);
                echo '<ol><li>' . $awards . '</li></ol>';
            ?>

                
                    <dt>Work Experience</dt>
                    <?php
                $work = file_get_contents('work.txt');
                $work = str_replace("\n", '</li><li>', $work);
                echo '<ol><li>' . $work . '</li></ol>';
            ?>
                
                <dt>References</dt>
                <?php
                $references = file_get_contents('references.txt');
                echo '<dd>' . $references . '</dd>';
            ?>
                
                
            </dl>
            

            <button>Download Full CV</button>


        </div>

    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Axel</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <script src="javascript.js">

    </script>
    
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
        <h1>Connect With Me</h1>
        <p>I am glad to respond to your queries and with any questions you may have. Feel free to reach out.</p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Send your request</h3>
                <form >

                    <div class="input-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" placeholder="Lebron James" id="name">
                        </div>
                        <div class="input-group">
                            <label>Phone</label>
                            <input type="text" placeholder="+1-514-666-6666" id="phone">
                        </div>
                        <div class="input-group">
                            <label>Email</label>
                            <input type="text" placeholder="lebronjames@outlook.ca" id="email">
                        </div>
                    </div>

                    <label>Message</label>
                    <textarea rows="7" placeholder="Leave me a message" id="message"></textarea>
                

                    <input id="submitMsg" type="button" value="Submit" onclick="submitContactMsg()">
            

                </form>

            </div>
            <div class="contact-right">
                <h3>Reach Me</h3>

                <table>
                    <tr>
                        <td>Email</td>
                        <td>contactme@example.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>+1-514-999-9999</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>#666, Lebron James Street</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
    
</body>
</html>
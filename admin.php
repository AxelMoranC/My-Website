<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <script>
        function processLogin(){
            console.log("processLogin() called!");
            // Get the username and password input fields
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

             // fetch the contents of the text file
            fetch('login.txt')
                .then(function(response) {
                    return response.text();
                    })
            .then(function(data) {
            // split the contents into an array of lines
            var lines = data.trim().split('\n');

            // get the username and password from the lines
            var correctUsername = lines[0];
            var correctPassword = lines[1];

            // check if the username and password are correct
            if (username === correctUsername && password === correctPassword) {
                // set session keys for valid user login
                sessionStorage.setItem("username", username);
                sessionStorage.setItem("password", password);
                sessionStorage.setItem("loginTime", new Date());
                sessionStorage.setItem("userAgent", navigator.userAgent);

                // redirect to the administrative website
                window.location.href = "logout.html";
            } else {
                alert("Incorrect username or password!");
            }
        })
        .catch(function(error) {
            console.error(error);
        });
}
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
            <h1>ADMIN</h1>
            <form>


                <div class="login">
                    
                    <div class="username">
                        <label></label>
                        <input type="text" id="username" placeholder="username">
                    </div>
                    <div class="password">
                        <label></label>
                        <input type="text" id="password" placeholder="password">

                    </div>

                </div>

                <input id="submitlogin"  type="button" value="Login" onclick="processLogin()">
             

            </form>
        </div>
    
</body>
</html>
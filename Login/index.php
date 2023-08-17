<!DOCTYPE html>
<html>
    <head>
    <title>Login - Oneirois</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/Home/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Home/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Home/favicon/favicon-16x16.png">
    <link rel="manifest" href="/Home/favicon/site.webmanifest">
    <script src="main.js"></script>
</head>
<body>
    <form method="post" action="main.php">
            <div class="form-div">
                <h1>Login</h1>
                <label>Registration No.</label>
                <input type="number" name="regno" id="regno" required>
                <label>Password</label>
                <input type="password" name="password" id="pass" required>
                <button type="submit" onclick="validateform()">Submit</button>
                <p>New user?<a href="http://localhost:3000/Registration/index.php">Register</a></p>
            </div>
    </form>
    </body>
</html>
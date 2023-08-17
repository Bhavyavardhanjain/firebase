<!DOCTYPE html>
<html>
    <head>
        <title>Registeration - Onerois</title>
        <link href="style.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/Home/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/Home/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/Home/favicon/favicon-16x16.png">
        <link rel="manifest" href="/Home/favicon/site.webmanifest">
        <script src="main.js"></script>
    </head>

    <body>
        <form method="post" action="main.php" name="form">
            <h1>Registration</h1>
            <div class="form-div">
                <label>Name</label>
                <input type="text" name="name" id="name" required>
                <label>Registration No.</label>
                <input type="number" name="regno" id="regno" required>
                <label>Year</label>
                <select name="year" id="year" required>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                </select>
                <label>Course</label>
                <input type="text" name="course" id="course" required>
                <label>Branch</label>
                <input type="text" name="branch" id="branch" required>
                <label>Outlook Email Id</label>
                <input type="email" name="email" id="email" required>
                <label>Phone No.</label>
                <input type="tel" name="phoneno" id="phoneno" required>
                <label>Password</label>
                <input type="password" name="pass" id="password" required>
                <button type="submit" value="submit" onclick="validateform()">Submit</button>
                <p>Already have a account?<a href="http://localhost:3000/Login/index.php">Login</a></p>
            </div>
        </form>
    </body>
</html>
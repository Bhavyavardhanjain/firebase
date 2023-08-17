<!DOCTYPE html>
<html>
    <head>
        <title>Update Account - Onerois</title>
        <link href="style.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/Home/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/Home/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/Home/favicon/favicon-16x16.png">
        <link rel="manifest" href="/Home/favicon/site.webmanifest">
        <script src="/Registration/main.js"></script>
    </head>
    <body>
        <?php
        $connect=mysqli_connect("localhost","root","root","fest_management");
        $query="select reg_no from login order by id DESC limit 1";
        $x=mysqli_query($connect,$query);
        $y=mysqli_fetch_row($x);
        foreach($y as $i=>$i_r){
            $query1="select * from registration where reg_no=$i_r";
            $x1=mysqli_query($connect,$query1);
            $y1=mysqli_fetch_all($x1);
            foreach($y1 as $i1=>$i1_r){
            }
        }
        ?>
        <form method="post" action="main.php" name="form">
            <h1>Update Account</h1>
            <div class="form-div">
                <label>Name</label>
                <input type="text" name="name" id="name" value="<?php echo $i1_r[0]?>" required>
                <label>Registration No.</label>
                <input type="number" name="regno" id="regno" value="<?php echo $i1_r[1]?>" required>
                <label>Year</label>
                <select name="year" id="year" required>
                    <option value="<?php echo $i1_r[2]?>"><?php echo $i1_r[2]?></option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                </select>
                <label>Course</label>
                <input type="text" name="course" id="course" value="<?php echo $i1_r[3]?>" required>
                <label>Branch</label>
                <input type="text" name="branch" id="branch" value="<?php echo $i1_r[4]?>" required>
                <label>Outlook Email Id</label>
                <input type="email" name="email" id="email" value="<?php echo $i1_r[5]?>" required>
                <label>Phone No.</label>
                <input type="tel" name="phoneno" id="phoneno" value="<?php echo $i1_r[6]?>" required>
                <label>Password</label>
                <input type="password" name="pass" id="password" value="<?php echo $i1_r[7]?>" required>
                <button type="submit" value="submit" onclick="validateform()">Update</button>
            </div>
            </div>
</form> 
    </body>
</html>
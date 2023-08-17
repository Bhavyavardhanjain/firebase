<?php
        error_reporting(0);
        $connect = mysqli_connect("localhost", "root", "root", "fest_management") or die(" Connection Failed");
        $name = $_POST["name"];
        $regno = $_POST["regno"];
        $year = $_POST["year"];
        $course = $_POST["course"];
        $branch = $_POST["branch"];
        $email = $_POST["email"];
        $phone_no = $_POST["phoneno"];
        $password = $_POST["pass"];
        $query="SELECT reg_no from registration where reg_no=$regno";
        $x=mysqli_query($connect,$query);
        $y=mysqli_fetch_row($x);
        foreach($y as $i=>$i_r){
            $par=$i_r;
        }
        if($par){
            $query1="update registration set name='$name',year='$year',course='$course',branch='$branch',email='$email',phone=$phone_no,password='$password' where reg_no=$regno";
            mysqli_query($connect,$query1);
            echo '<script>confirm("Updated Successfully");</script>';
            echo '<script>location.href="http://localhost:3000/Login/index.php"</script>';
        }
        ?>
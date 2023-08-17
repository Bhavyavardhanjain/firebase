<?php
session_start();
        error_reporting(0);
        $connect=mysqli_connect("localhost","root","root","fest_management") or die(" Connection Failed");
        $reg_no=$_POST["regno"];
        $password=$_POST["password"];
        $query="select reg_no,password from registration where reg_no=$reg_no and password='$password'";
        $x=mysqli_query($connect,$query);
        $y=mysqli_fetch_all($x);
        if($y){
            header("Location:http://localhost:3000/Register-events/index.php");
            $query1="insert into login (reg_no,password) values($reg_no,'$password')";
            mysqli_query($connect,$query1);
        }
        else{
            echo'<script>alert("Wrong username or password")</script>';
            echo'<script>location.href="http://localhost:3000/Login/index.php"</script>';
        }
        ?>
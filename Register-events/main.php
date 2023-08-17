<?php
    error_reporting(0);
    $connect=mysqli_connect("localhost","root","root","fest_management") or die(" Connection Failed");
    $query="select reg_no from login order by id DESC limit 1";
    $x=mysqli_query($connect,$query);
    $y=mysqli_fetch_row($x);
    foreach($y as $i=>$i_r){
        $par=$i_r;
    }
// /////////////////////////////////////////////////////////////////////////insert///////////////////////////////////////////////////////////////////////////////////////
if($_POST['action']=='submit'){
    if(!empty($_POST['event'])){
        foreach($_POST['event'] as $value){
            $query1="select ename from events where eid='$value'";
            $x1=mysqli_query($connect,$query1);
            $y1=mysqli_fetch_row($x1);
            foreach($y1 as $i1=>$i1_r){
                $par1=$i1_r;
            }
            $query2="insert into register_events values($par,'$par1','$value')";
            $q=mysqli_query($connect,$query2);
        }
        echo'<script>location.href="/End/end.html"</script>';
    }
    else if (empty($_POST['event'])){
        echo '<script>alert("Select atleast one")</script>';
        echo'<script>location.href="http://localhost:3000/Register-events/index.php"</script>';
    }
}
// ////////////////////////////////////////////////////////////////////////////delete////////////////////////////////////////////////////////////////////////////////////
else if($_POST['action'] == 'delete'){
    if(!empty($_POST['event'])){
        foreach($_POST['event'] as $value){
            $query3="delete from register_events where reg_no=$par and eid='$value'";
            mysqli_query($connect,$query3);
        }
        echo'<script>alert("Event deleted successfully")</script>';
        echo'<script>location.href="http://localhost:3000/Register-events/index.php"</script>';
    }
    else if (empty($_POST['event'])){
        echo '<script>alert("Select atleast one")</script>';
        echo'<script>location.href="http://localhost:3000/Register-events/index.php"</script>';
    }
}
// /////////////////////////////////////////////////////////////////////////Account delete///////////////////////////////////////////////////////////////////////////////
else if($_POST['action']=='deletea'){
    $query4="delete from register_events where reg_no=$par";
    mysqli_query($connect,$query4);
    $query5="delete from login where reg_no=$par";
    mysqli_query($connect,$query5);
    $query6="delete from registration where reg_no=$par";
    mysqli_query($connect,$query6);
    echo'<script>alert("Account deleted successfully")</script>';
    echo'<script>location.href="http://localhost:3000/Registration/index.php"</script>';
}
// ///////////////////////////////////////////////////////////////////////Update account/////////////////////////////////////////////////////////////////////////////////
else if($_POST['action']=='update'){
    echo'<script>location.href="http://localhost:3000/Update/index.php"</script>';
}
?>
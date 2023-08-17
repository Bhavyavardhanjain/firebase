<!DOCTYPE html>
<html>
    <head>
        <title>Event-Registration</title>
        <link href="styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="register">
            <?php
            error_reporting(0);
            $connect=mysqli_connect("localhost","root","root","fest_management") or die(" Connection Failed");
            $query="select reg_no from login order by id DESC limit 1";
            $x=mysqli_query($connect,$query);
            $y=mysqli_fetch_row($x);
            foreach($y as $i=>$i_r){
                $query1="select name from registration where reg_no=$i_r";
                $x1=mysqli_query($connect,$query1);
                $y1=mysqli_fetch_row($x1);
                foreach($y1 as $i1=>$i1_r){
                    $par=$i1_r;
                }
            }
            ?>
            <form method="post" action="main.php">
                <div class="form-div">
                    <h1>Event Registration</h1>
                    <label>Select events</label>
                    <div>
                        <input type="checkbox" name="event[]" value="e1">
                        <label>COSMOS</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e2">
                        <label>REQUIEM</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e3">
                        <label>DESTIVAL</label></label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e4">
                        <label>FOCUS</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e5">
                        <label>SCAPE G.O.A.T</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e6">
                        <label>POSTER PORTAL</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e7">
                        <label>AD-MAD</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e8">
                        <label>EK Zubaani</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e9">
                        <label>RANGMANCH</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e10">
                        <label>SHOWCASE</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e11">
                        <label>GROUND ZERO</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e12">
                        <label>NEXTAR</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e13">
                        <label>INFINITY AND BEYOND</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e14">
                        <label>GRAPEVINE BUZZ</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e15">
                        <label>MINDSWAY</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e16">
                        <label>HOMEBASE</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e17">
                        <label>THE HUNTER GAMES</label>
                    </div>
                    <div>
                        <input type="checkbox" name="event[]" value="e18">
                        <label>SAVE MOTHER COW</label>
                    </div>
                    <div class=bt>
                        <button type="submit" name="action" value="submit">Submit</button>
                        <button type="submit" name="action" value="delete">Delete</button>
                    </div>
                </div>
            </form>
            <div class=par-info>
                <h3>Name:<?php echo $par;?></h3>
                <h3>Registration No:<?php echo $i_r;?></h3>
                <form method="post" action="main.php" class="bt1">
                    <button type="submit" name="action" value="deletea">Delete Account</button>
                    <button type="submit" name="action" value="update">Update Account</button>
                </form>
            </div>
        </div>
        <table border="1" cellspacing="0">
            <tr><th>Events you have registered for</th></tr>
            <?php
            $query2="select ename from register_events where reg_no=$i_r";
            $x2=mysqli_query($connect,$query2);
            $y2=mysqli_fetch_all($x2);
            foreach($y2 as $i2=>$i2_r){
                foreach($i2_r as $ii2=>$ii2_r){
                    echo "<tr><td>$ii2_r</td></tr>";
                }
            }
            ?>
        </table>
    </body>
</html>
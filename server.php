<?php
    session_start();
    $con= mysqli_connect('localhost','id18095413_ksajdhhjlll','GE!i^LH64nP4<?y!');
    mysqli_select_db($con,'id18095413_tarek');
    if(isset($_POST['adlogin'])){
        $uname=$_POST['uname'];
        $pass=$_POST['password'];
        $uname=stripcslashes($uname);
        $pass=stripcslashes($pass);
        $uname=mysqli_real_escape_string($con,$uname);
        $pass=mysqli_real_escape_string($con,$pass);
        $result= mysqli_query($con,"select * from tadmin where uname='$uname' AND pass='$pass'");
        $num= mysqli_num_rows($result);
        if($num==0){
?>
            <script type="text/javascript">
            window.location.href = "adminlogin.php";
            alert("Wrong Username or Password!!");
            </script>
<?php
        }
        else{
            // $row=mysqli_fetch_assoc($result);
            $_SESSION['sobrulkarim6969']="sobrulkarim6969";
            header('location:adminpanel.php');
        }
    }
    if(isset($_POST['userregi'])){
        $name=$_POST['name'];
        $sid=$_POST['sid'];
        $bno=$_POST['bno'];
        $sem=$_POST['sem'];
        $phn=$_POST['phn'];
        $email=$_POST['email'];
        $tid=$_POST['tid'];
        $ptp=$_POST['ptp'];
        $ieid=$_POST['ieid'];
        $result= mysqli_query($con,"select * from user where sid='$sid'");
        $num= mysqli_num_rows($result);
        if($num==1){
?>
            <script type="text/javascript">
            window.location.href = "index.php";
            alert("Already registered with this Student ID!!");
            </script>
<?php
        }
        else{
            mysqli_query($con,"insert into user (uname,sid,bno,sem,phn,mail,pay,trid,ieeeid,stats,cmnt) values ('$name','$sid','$bno','$sem','$phn','$email','$ptp','$tid','$ieid','Not confirmed','None')");
?>
        <script type="text/javascript">
        window.location.href = "index.php";
        alert("Congratulations...Registration successful!!");
        </script>
<?php
        }
    }
    if(isset($_POST['updateadmininfo'])){
        $roc=$_POST['roc'];
        $email=$_POST['email'];
        $phn=$_POST['phn'];
        $head=$_POST['head'];
        $des=$_POST['des'];
        $pinfo=$_POST['pinfo'];
        mysqli_query($con,"UPDATE tadmin SET roc='$roc', emailadd = '$email', phn= '$phn', hline= '$head', descr= '$des', payinfo= '$pinfo' WHERE aid = 1");    
?>
        <script type="text/javascript">
        window.location.href = "adminpanel.php";
        alert("Admin Information updated!!");
        </script>
<?php
    }
    if(isset($_POST['manageuser'])){
    
        $name=$_POST['name'];
        $sid=$_POST['sid'];
        $bno=$_POST['bno'];
        $sem=$_POST['sem'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $trid=$_POST['trid'];
        $ptp=$_POST['ptp'];
        $ieeeid=$_POST['ieeeid'];
        $cmnt=$_POST['cmnt'];
        $stats=$_POST['stats'];


        mysqli_query($con,"UPDATE user SET uname= '$name', bno= '$bno', sem= '$sem', mail= '$email', phn= '$phone', pay= '$ptp', trid= '$trid', ieeeid= '$ieeeid', cmnt= '$cmnt', stats= '$stats' WHERE sid= '$sid'");    
?>
        <script type="text/javascript">
        window.location.href = "adminpanel.php";
        alert("User Information updated!!");
        </script>
<?php
    }
    if(isset($_POST['resetpass'])){
    
        $cuname=$_POST['cuname'];
        $cpass=$_POST['cpass'];
        $nuname=$_POST['nuname'];
        $npass=$_POST['npass'];

        $cuname=stripcslashes($cuname);
        $cpass=stripcslashes($cpass);
        $cuname=mysqli_real_escape_string($con,$cuname);
        $cpass=mysqli_real_escape_string($con,$cpass);

        $nuname=stripcslashes($nuname);
        $npass=stripcslashes($npass);
        $nuname=mysqli_real_escape_string($con,$nuname);
        $npass=mysqli_real_escape_string($con,$npass);

        $result= mysqli_query($con,"select * from tadmin where uname='$cuname' AND pass='$cpass'");
        $num= mysqli_num_rows($result);

        if($num==0){
?>
            <script type="text/javascript">
            window.location.href = "adminpanel.php";
            alert("Wrong Current Username or Password!!");
            </script>
<?php
        }
        else{
            mysqli_query($con,"UPDATE tadmin SET uname='$nuname', pass = '$npass'");
?>
            <script type="text/javascript">
            window.location.href = "adminpanel.php";
            alert("Successfully reset password!!");
            </script>
<?php
        }
    }
    if(isset($_POST['deleteuser'])){
        $sid=$_POST['sid'];
        mysqli_query($con,"DELETE FROM user WHERE sid='$sid'");    
?>
        <script type="text/javascript">
        window.location.href = "adminpanel.php";
        alert("User Deleted!!");
        </script>
<?php
    }
    if(isset($_POST['sendmsg'])){
    
        $email=$_POST['email'];
        $msg=$_POST['msg'];

        mysqli_query($con,"insert into msg (mmail,mtext) values ('$email','$msg')");
        if (!mysqli_query($con, "insert into msg (mmail,mtext) values ('$email','$msg')")) {
            echo "Error: " . mysqli_error($con);
        }
?>
        <script type="text/javascript">
        window.location.href = "index.php";
        alert("Message sent!!");
        </script>
<?php
    }
?>
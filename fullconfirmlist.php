<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
        border:1px solid black;
        }
        body{
            display: flex;
            justify-content: center;
        }
    </style>
    <title>Full Confirmed List</title>
</head>
<body>
<?php
    if(isset($_SESSION['sobrulkarim6969'])){
            
            $con= mysqli_connect('localhost','id18095413_ksajdhhjlll','GE!i^LH64nP4<?y!');
            mysqli_select_db($con,'id18095413_tarek');
            $result22= mysqli_query($con,"select * from user where stats='Confirmed' ORDER BY sid ASC");
?>
                <table>
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Batch No</th>
                        <th>Semester</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>IEEE ID</th>
                    </tr>
<?php
                    while($row3=mysqli_fetch_assoc($result22)){
?>
                    <tr>
                        <td><?php echo $row3['sid']; ?></td>
                        <td><?php echo $row3['uname']; ?></td>
                        <td><?php echo $row3['bno']; ?></td>
                        <td><?php echo $row3['sem']; ?></td>
                        <td><?php echo $row3['mail']; ?></td>
                        <td><?php echo $row3['phn']; ?></td>
                        <td><?php echo $row3['ieeeid']; ?></td>
                    </tr>
<?php

                    }
?>
    </table>
<?php
    }
    else{
?>
    <script type="text/javascript">
    window.location.href = "index.php";
    </script>
<?php
    }
?>
</body>
</html>
<?php
?>
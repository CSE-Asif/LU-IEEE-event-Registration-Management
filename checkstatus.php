<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminstyle.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <title>check status</title>
</head>
<body>
    <nav>
        <h2>IEEE Headline</h2>
    </nav>

    <div>
        <form method="POST"> 
            <label for="sid" class="form-label">Student ID:</label>
            <input type="number" class="form-control" id="sid" name="sid" required><br>

            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required><br>

            <button type="submit" name="checkbtn" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div>
        <?php 
            if(isset($_POST['checkbtn']))
            {
                
                $con= mysqli_connect('localhost','id18095413_ksajdhhjlll','GE!i^LH64nP4<?y!');
                mysqli_select_db($con,'id18095413_tarek');

                $sid=$_POST['sid'];
                $email=$_POST['email'];

                $sid=stripcslashes($sid);
                $email=stripcslashes($email);

                $sid=mysqli_real_escape_string($con,$sid);
                $email=mysqli_real_escape_string($con,$email);

                $result= mysqli_query($con,"select * from user where sid='$sid' AND mail='$email'");
                $row=mysqli_fetch_assoc($result);

                ?>


                <h2>Status: <?php echo $row['stats'] ; ?></h2>
                <h3>Name: <?php echo $row['uname'] ; ?></h3>
                <h3>Student ID: <?php echo $row['sid'] ; ?></h3>
                <h3>Batch No: <?php echo $row['bno'] ; ?></h3>
                <h3>Semester: <?php echo $row['sem'] ; ?></h3>
                <h3>Phone No: <?php echo $row['phn'] ; ?></h3>
                <h3>Email: <?php echo $row['mail'] ; ?></h3>
                <h3>IEEE ID: <?php echo $row['ieeeid'] ; ?></h3>
                <h3>Comment: <?php echo $row['cmnt'] ; ?></h3>
                
                

                <?php
            
            session_destroy();
            exit;
            }
        ?>
    </div>
    
</body>
</html>
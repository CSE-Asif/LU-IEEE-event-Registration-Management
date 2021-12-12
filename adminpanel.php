<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>
<?php
    if(isset($_POST['lob']))
    {
        session_destroy();
        header('Location:adminlogin.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin panel of IEEE</title>
</head>
<body>



<?php
    if(isset($_SESSION['sobrulkarim6969'])){
        $con= mysqli_connect('localhost','id18095413_ksajdhhjlll','GE!i^LH64nP4<?y!');
        mysqli_select_db($con,'id18095413_tarek');
        $sql1= mysqli_query($con,"select * from user");
        $sql2= mysqli_query($con,"select * from tadmin");
        $sql3= mysqli_query($con,"select * from msg");
        $row2=mysqli_fetch_assoc($sql2);
?>
    <nav>
        <h2>Admin panel of IEEE</h2>
        <ul>
            <li>
            <a href="fullconfirmlist.php">Full Confirmed List</a>
            </li>
            <li>
                <form method="post"><input class="btn2" type="submit" name="lob" value="Log Out"></form>
            </li>
        </ul>
    </nav>

    <div style="margin: 5px; width:100%; text-align: center; ">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
            Update Admin Info.
        </button>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal3">
            Messages
        </button>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
            Reset Password
        </button>

    </div>


    

    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        

        <form method="POST" action="server.php">
        <div class="modal-body">
            


            <br>
        <label for="cuname" style="width: 30%;" >Current Username:</label>
        <input type="text" id="cuname" name="cuname" style="width: 68%;" required><br>

        <label for="cpass" style="width: 30%;" >Current Password:</label>
        <input type="password" id="cpass" name="cpass" style="width: 68%;" required><br>

        <label for="nuname" style="width: 30%;" >New Username:</label>
        <input type="text" id="nuname" name="nuname"  style="width: 68%;" required><br>

        <label for="npass" style="width: 30%;" >New Password:</label>
        <input type="password" id="npass" name="npass" style="width: 68%;" required>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="resetpass" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        </div>
    </div>
    </div>







    <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">All messages</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<?php
            while($row3=mysqli_fetch_assoc($sql3)){
?>

              <div class="mb-3" style="background-color: #bfbfbf;">
                  <label><b><?php echo $row3['mid'] ?>.</b>By:<?php echo $row3['mmail'] ?></label><br><br>
                  <label>Message: <?php echo $row3['mtext'] ?></label>
              </div>
<?php
            }
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
























 
    
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Admin Info.</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        

        <form method="POST" action="server.php">
        <div class="modal-body">
            

        <lable for="roc" style="width: 70%; margin-right: 24px;">Registration: <?php echo $row2['roc']; ?></lable>
            <select id="roc" name="roc">
                <option value="<?php echo $row2['roc']; ?>">Select One</option>
                <option value="Open">Open</option>
                <option value="Closed">Closed</option>
            </select>

            <br>
        <label for="email" style="width: 20%;" >Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row2['emailadd']; ?>" style="width: 78%;"><br>

        <label for="phn" style="width: 20%;" >Phone:</label>
        <input type="number" id="phn" name="phn" value="<?php echo $row2['phn']; ?>" style="width: 78%;"><br>

        <label for="head" style="width: 20%;" >Headline:</label>
        <input type="text" id="head" name="head" value="<?php echo $row2['hline']; ?>" style="width: 78%;"><br><br>

        <label for="des" style="width: 20%;" >Description:</label>
        <textarea id="des" name="des" rows="4" cols="60" ><?php echo $row2['descr']; ?></textarea>
        
        <label for="pinfo" style="width: 30%;" >Payment Info:</label>
        <textarea id="pinfo" name="pinfo" rows="4" cols="60" ><?php echo $row2['payinfo']; ?></textarea>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="updateadmininfo" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        </div>
    </div>
    </div>



















    <div class="container">
        <br>
        <center><h3><u>Full Registration List</u></h3></center>
        <br>
        <table class="table table table-hover">
            <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Semester</th>
            <th>Email</th>
            <th>Phone</th>
            <th>IEEE ID</th>
            <th>Transection ID</th>
            <th>Manage</th>
            </tr>



<?php
                while($row1=mysqli_fetch_assoc($sql1)){
?>



                <tr>
                    <td><?php echo $row1['sid']; ?></td>
                    <td><?php echo $row1['uname']; ?></td>
                    <td><?php echo $row1['sem']; ?></td>
                    <td><?php echo $row1['mail']; ?></td>
                    <td><?php echo $row1['phn']; ?></td>
                    <td><?php echo $row1['ieeeid']; ?></td>
                    <td><?php echo $row1['trid']; ?></td>
                    <td> 
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nm<?php echo $row1['sid']; ?>">
                        Manage 
                      </button>
                    </td>





                      <div class="modal fade" id="nm<?php echo $row1['sid']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $row1['uname']; ?>(<?php echo $row1['stats']; ?>)</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>




                          <form method="POST" action="server.php">
                          <div class="modal-body" >
                                  

                                <div class="mb-3" style="background-color: #bfbfbf; padding: 5%;">

                                      <label for="sid" style="width: 30%;" >Student ID:</label>
                                      <input type="number" id="sid" name="sid" value="<?php echo $row1['sid']; ?>" style="width: 68%; " readonly>
                                      
                                      <br>


                                      <label for="name" style="width: 30%;" >Name:</label>
                                      <input type="text" id="name" name="name" value="<?php echo $row1['uname']; ?>" style="width: 68%;"><br>

                                      <lable for="bno" style="width: 70%; margin-right: 24px;">Batch No: <?php echo $row1['bno']; ?></lable>

                                      <select id="bno" name="bno">
                                        <option value="<?php echo $row1['bno']; ?>">Select One</option>
                                        <option value="1st">1st</option>
                                        <option value="2nd">2nd</option>
                                        <option value="3rd">3rd</option>
                                        <option value="5th">5th</option>
                                        <option value="6th">6th</option>
                                        <option value="7th">7th</option>
                                        <option value="8th">8th</option>
                                        <option value="9th">9th</option>
                                        <option value="10th">10th</option>
                                        <option value="11th">11th</option>
                                        <option value="12th">12th</option>
                                    </select>
                                        <br>

                                        <lable for="sem" style="width: 70%; margin-right: 24px;">Semester: <?php echo $row1['sem']; ?></lable>

                                            <select id="sem" name="sem">
                                            <option value="<?php echo $row1['sem']; ?>">Select One</option>
                                            <option value="1st">1st</option>
                                            <option value="2nd">2nd</option>
                                            <option value="3rd">3rd</option>
                                            <option value="5th">5th</option>
                                            <option value="6th">6th</option>
                                            <option value="7th">7th</option>
                                            <option value="8th">8th</option>
                                            <option value="9th">9th</option>
                                            <option value="10th">10th</option>
                                            <option value="11th">11th</option>
                                            <option value="12th">12th</option>
                                            </select>
                                            <br>

                                

                                      <label for="email" style="width: 30%;">Email:</label>
                                      <input type="text" id="email" name="email" value="<?php echo $row1['mail']; ?>" style="width: 68%;"><br>

                                      <label for="phone" style="width: 30%;">Phone:</label>
                                      <input type="number" id="phone" name="phone" value="<?php echo $row1['phn']; ?>" style="width: 68%;"><br>


                                      <lable for="ptp" style="width: 70%; margin-right: 24px;">Payment Type: <?php echo $row1['pay']; ?></lable>
                                    <select id="ptp" name="ptp">
                                        <option value="<?php echo $row1['pay']; ?>">Select One</option>
                                        <option value="Bkash">Bkash</option>
                                        <option value="Nagad">Nagad</option>
                                    </select>

                                       <br> 
                                      <label for="trid" style="width: 30%;">Transection ID:</label>
                                      <input type="text" id="trid" name="trid" value="<?php echo $row1['trid']; ?>" style="width: 68%;"><br>

                                      <label for="ieeeid" style="width: 30%;">IEEE ID:</label>
                                      <input type="text" id="ieeeid" name="ieeeid" value="<?php echo $row1['ieeeid']; ?>" style="width: 68%;"><br>

                                      <label for="cmnt" style="width: 30%;" >Comment:</label>
                                      <textarea id="cmnt" name="cmnt" rows="2" cols="55"  ><?php echo $row1['cmnt']; ?></textarea>


                                      <lable for="stats" style="width: 30%; margin-right: 10px;">Status: <?php echo $row1['stats']; ?></lable>
                                      <select id="stats" name="stats">
                                        <option value="<?php echo $row1['stats']; ?>">Select One</option>
                                        <option value="Not confirmed">Not confirmed</option>
                                        <option value="Confirmed">Confirmed</option>
                                    </select>
                                      


                                  </div>





                          </div>
                          <div class="modal-footer">
                            <button type="submit" name="manageuser" class="btn btn-primary">Save</button>
                            <button type="submit" name="deleteuser" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </form>

                        </div>
                      </div>
                    </div>









                    </td>






                </tr>
<?php
                    }
?>
        </table>
    </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

<?php
?>
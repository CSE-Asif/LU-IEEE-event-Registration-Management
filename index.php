<!DOCTYPE html>
<html>
<head>
    <title>Industrial Visit Registration</title>
    <link rel="stylesheet" href="tar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
</body>
    <div class="cotainer">
        <div class="header">
                <div class="amra2">

                </div>
                <h1 class="amra">Industrial visit of EEE-22th batch 2021</h1>
            
            <div class="discription">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="button-box1">
                <button class="btn1" type="button" name="regi" onclick="document.location='#l1'">Register Now</button>
                <button class="btn1" type="button" name="regi" onclick="document.location='checkstatus.php'">Check Status</button>
            </div>
        </div>
        <div class="mid">
            <form class="form1" id="l1" action="server.php" method="POST">
                <div class="input_field">
                    <label for="name">Name</label>
                    <input required type="text" name="name">
                </div>
                <div class="input_field">
                    <label for="name">Student ID</label>
                    <input required type="number" name="sid">
                </div>
                <div class="input_fields">
                    <label for="name">Batch No</label>
                    <select id="select-box" name="bno" required>
                        <option value="">Select One</option>
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
                </div>
                <div class="input_fields">
                    <label for="car">Semester</label>
                    <select id="select-box" name="sem" required>
                        <option value="">Select One</option>
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
                </div>
                <div class="input_field">
                    <label for="name">Phone</label>
                    <input required type="number" name="phn">
                </div>
                <div class="input_field">
                    <label for="name">Email</label>
                    <input required type="email" name="email">
                </div>
                <div class="input_fields">
                    <label for="name">Payment Type</label>
                    <select id="select-box" name="car" required>
                        <option value="">Select One</option>
                        <option value="saab">Bkash</option>
                        <option value="opel">Rocket</option>
                    </select>
                </div>
                <div class="input_field">
                    <label for="name">Transection ID</label>
                    <input required type="text" name="tid">
                </div>
                
                <div class="input_field">
                    <label for="name">IEEE-ID</label>
                    <input required type="number" name="ieid">
                </div>
                <div class="button-box2">
                    <button class="btn2" type="submit" name="userregi">Register</button>
                 </div>
            </form>
        </div>
        <div class="footer">
            <div class="footerup">
                <div class="footerleft">
                    <div class="footertitleleft">
                        <h1>Events</h1>
                    </div>
                    <div class="footermenu">
                        <ul>
                            <li><a href="#">Past event- 1</a></li>
                            <li><a href="#">Past event- 2</a></li>
                            <li><a href="#">Past event- 3</a></li>
                            <li><a href="#">Past event- 4</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footermid">
                    <img src="55.png">
                </div>
                <div class="footerright">
                    <div class="footertitleright">
                        <h1>Contact Us</h1>
                    </div>
                    <form method="POST" action="server.php">
                    <div class="input-fieldfooter">
                        <input required type="email" class="embox" placeholder="Email*" name="email">
                    </div>
                    <div class="input-fieldfooter">
                        <input required type="text" class="embox1" placeholder="message*"  name="msg">
                    </div>
                    <div class="button-boxf">
                        <button class="btnf" type="submit" name="sendmsg">Submit</button>
                     </div>
                    </form>
                </div>
            </div>
            <div class="footerdown">
                <p><a href="https://cse-asif.github.io/asif/" style="color:white;"> Copyright ©2021 kompani || All rights reserved.</a></p>
            </div>
        </div>
    </div>
</html>

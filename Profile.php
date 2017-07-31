<?php
session_start();
if ($_SESSION['User_Name'] == "") {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
} elseif ($_SESSION['Actor'] != "S") {
    header("Location: http://localhost/ELearning/InsufficientRights.php");
    exit();
} else {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>E-Learning</title>
            <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
            <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
            <!-- Custom Theme files -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="keywords" content="E-Learning,Online-Learning,learning,free, test"/>
            <script type="text/javascript" >
                addEventListener("load", function () {
                    setTimeout(hideURLbar, 0);
                }, false);
                function hideURLbar() {
                    window.scrollTo(0, 1);
                }
                function myFunction() {
                    var x = document.getElementById('myDIV');
                    if (x.style.display === 'none') {
                        x.style.display = 'block';
                    } else {
                        x.style.display = 'none';
                    }
                }
            </script>
            <script src="js/jquery-1.11.1.min.js"></script> 
            <script src="js/bootstrap.js"></script>
            <style>
                *,
                *:before,
                *:after {
                    box-sizing: border-box;
                }

                html {
                    overflow-y: scroll;
                }

                body {
                    background: #eee;
                    font-family: 'Titillium Web', sans-serif;

                }

                h1 {
                    text-align: center;
                    color: #ffffff;
                    font-weight: 300;
                    margin: 0 0 40px;
                }

                .button {
                    border: 0;
                    outline: none;
                    border-radius: 0;
                    padding: 15px 0;
                    font-size: 2rem;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: .1em;
                    background: #1ab188;
                    color: #ffffff;
                    -webkit-transition: all 0.5s ease;
                    transition: all 0.5s ease;
                    -webkit-appearance: none;
                }
                .button:hover, .button:focus {
                    background: #179b77;
                }

                .button-block {
                    display: block;
                    width: 100%;
                }

                .forgot {
                    margin-top: -20px;
                    text-align: right;
                }

                fieldset  {
                    display:inline-block;
                }

                .course_holder
                {
                    float:left;
                    width: 29%;
                    margin:2% 2%;
                    padding: 3%;
                    background: #fff;  
                    min-height:300px; 
                    border:1px solid #999;
                    border-radius:8px; 
                    box-shadow:0 0 10px #999; 
                    max-height: 500px;
                }

                .coursedesc
                {
                    height: 60px;
                    auto : hidden;
                    padding-top: 10px;
                    padding-bottom: 10px;
                }

                .img-holder
                {
                    height:100px;
                    width:150px;
                    auto:hidden;
                }

                .container
                {
                    width: 100%;
                    margin-top: 60px;
                }

                .title
                {
                    font-size: 24px;
                    color: #286090;
                    align-self: center;
                    font-weight: 300;
                    font-style: italic;
                    height: 60px;
                    auto: hidden;
                }

                .enrollment
                {
                    font-size: 24px;
                    color: #286090;
                    height:20px;

                }

                .form{
                    width: 60%;
                    margin: 10px auto;
                    background:rgba(19, 35, 47, 0.9);
                    padding: 2%;
                    font-size: 20px;
                    color: #eee;
                }

                input[type=text], select {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                }
                input,
                textarea {
                    font-size: 22px;
                    display: block;
                    width: 100%;
                    height: 100%;
                    padding: 5px 10px;
                    background: none;
                    background-image: none;
                    border: 1px solid #a0b3b0;
                    color: #ffffff;
                    border-radius: 0;
                    -webkit-transition: border-color .25s ease, box-shadow .25s ease;
                    transition: border-color .25s ease, box-shadow .25s ease;
                }
                input:focus,
                textarea:focus {
                    outline: 0;
                    border-color: #1ab188;
                }
                .dropdown
                {
                    color: #a0b3b0;
                    font-size: 22px;
                    font-weight: bold;
                    display: block;
                    width: 100%;
                    height: 100%;
                    padding: 5px 10px;
                    background: none;
                    background-image: none;
                    border: 1px solid #a0b3b0;
                }
                .op{
                    color:#fff;
                    background-color: rgba(19, 35, 47, 0.9);
                    font-weight: bold;
                }


                h3{
                    text-align: center;
                }
            </style>

        </head>
        <body style="font-family: Candara;">
            <!--banner-->
            <div class="banner">
                <!--header-->
                <div class="header">		

                    <div class="logo" >
                        <a class="navbar-brand" href="index.html" style="font-family: Broadway; text-align: center;">E-Learning</a>
                    </div>


                    <div class="clearfix"> </div>			
                </div>
                <!--//header-->

                <!-- Collect the nav links, forms, and other content for toggling -->


            </div>	



            <div class="header" style="height:75px;">
                <nav class="navbar navbar-default" style="width:47.5%;">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"> </span>
                            <span class="icon-bar"> </span>
                            <span class="icon-bar"> </span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-top: 0px; margin-top: 0px;">
                        <ul class="nav navbar-nav navbar-right wow fadeInLeft animated" data-wow-delay=".5s">
                            <li><a href="http://localhost/ELearning/StudentHomePage.php" class="active">Home</a></li>             
                            <li><a href="http://localhost/ELearning/AllCourses.php" >All Courses</a></li>
                            <li><a href="http://localhost/ELearning/EnrolledCourses.php">My Courses</a></li>
                            <li><a href="http://localhost/ELearning/sreports.php" >Results</a></li>
                            <li><a href="http://localhost/ELearning/sContact.php" >Contact</a></li>
                            <li><a href="http://localhost/ELearning/ViewFeedback.php" >Responses</a></li>
                        </ul>		
                    </div>	
                </nav>




                <div class="logon" onclick="myFunction()">
                    <div style=" float: left ; padding-left:45% ; height: 100%; padding-top: 10px; ">
                        <?php echo "<div class='profile'><img src=" . $_SESSION['Profile'] . " height=50px width=50px></img></div>"; ?>
                    </div>
                    <div style="float:left;color : #ffffff; padding-top: 20px; padding-left: 10px; font-size: 14px;">
                        <?php
                        //echo $_SESSION['FirstName'] . "'s Profile";
                        ?></div>
                    <div class="clearfix"></div>
                </div>
                <div id="myDIV">
                    <?php
                    echo "<div class='img_holder' style='float:left;width:20%'><img src=" . $_SESSION['Profile'] . " height=130px width=120px></img></div>";
                    echo "<div style='float:right;width:68%'><h4>" . $_SESSION['FirstName'] . "</h4>";
                    echo "<h6>" . $_SESSION['User_Name'] . "</h6>";
                    ?>
                    <div style="padding-bottom:10px;padding-top: 10px;"><a href="http://localhost/ELearning/Profile.php"><button type="submit" class="profilebutton" />Profile</button></a></div>

                    <div><a href="http://localhost/ELearning/Logout.php"><button type="submit" class="profilebutton" />Logout</button></a></div>
                </div>

            </div>


            <div class="course" style="padding: 0px 0px;">
                <div class="container">
                    <form method="post" action="esprofile.php" >
                        <div class="title"><h3>Edit Profile</h3></div>
                        <?php
                        include 'database.php';
                        $stid = $_SESSION['Sid'];
                        ?>
                        <div class="form">

                            <?php
                            $rs = mysql_query("select * from registration where id='$stid'", $cn);
                            $result = mysql_num_rows($rs);

                            while ($rows = mysql_fetch_array($rs)) {

                                $id = $rows['id'];
                                $firstname = $rows['First_Name'];
                                $lastname = $rows['Last_Name'];
                                $password = $rows['Password'];
                                $city = $rows['City'];
                                $email = $rows['Email_Id'];
                                $deg = $rows['Degree'];
                                $college = $rows['College'];
                                ?>
                                <input type="text" required autocomplete="off" id="id" name="id" value='<?php echo $id; ?>' style="display:none;"/>
                                <div>
                                    <label for="fname">Firstname</label>
                                    <input type="text" required autocomplete="off" id="fname" name="fname" value='<?php echo $firstname; ?>'/>
                                </div>
                                <div>
                                    <label for="lname">Lastname</label>
                                    <input type="text" required autocomplete="off" id="lname" name="lname" value='<?php echo $lastname; ?>'/>
                                </div>
                                <div>
                                    <label for="email">Email</label>
                                    <input type="text" required autocomplete="off" id="email" name="email" value='<?php echo $email; ?>'/>
                                </div>
                                <div>
                                    <label for="pwd">Password</label>
                                    <input type="text" required autocomplete="off" id="pwd" name="pwd" value='<?php echo $password; ?>'/>
                                </div>
                                <div>
                                    <label for="college">College</label>
                                    <input type="text" required autocomplete="off" id="colg" name="college" value='<?php echo $college; ?>'/>
                                </div>
                                <div>
                                    <label for="city">City</label>
                                    <input type="text" required autocomplete="off" id="city" name="city" value='<?php echo $city; ?>'/>
                                </div>
                                <div>
                                    <label for="degree">Degree</label>
                                    <select id="degree" class="dropdown" size="1" required name="degree">

                                        <?php
                                        $rst = mysql_query("select distinct degree from degree", $cn);

                                        while ($rw = mysql_fetch_array($rst)) {
                                            echo "<option value=$rw[0] class='op'";
                                            if ($deg == $rw[0])
                                                echo "selected";
                                            echo " >$rw[0]</option>";
                                        }
                                        ?></select> 
                                </div>
                                <div>
                                    <button type="submit" class="button button-block"/>Update</button>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </form>

                </div>
            </div>
            <div class="clearfix"> </div>



            <!--footer-->
            <div class="footer" >
                <div class="container">
                    <div class="col-md-3 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
                        <h4>Tip</h4>
                        <p>Complete the assignment's and tests within stipulated time.</p>
                    </div>
                    <div class="col-md-3 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
                        <h4>Features</h4>
                        <ul>
                            <li><a href="AllCourses.php">Free courses</a></li>
                            <li><a href="sreports.php">Test your knowledge</a></li>
                            <li><a href="StudyCourse.php">Learn at your comfort</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-left wow fadeInRight animated" data-wow-delay=".5s">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="esprofile.php">Profile</a></li>
                            <li><a href="SProfilepic.php">Profile Photo</a></li>
                            <li><a href="EnrolledCourses.php">My Courses</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 soci wow fadeInRight animated" data-wow-delay=".5s">
                        <h4>Follow Us</h4>
                        <ul>
                            <li><a href="#"><i class="f-1"> </i></a></li>
                            <li><a href="#"><i class="t-1"> </i></a></li>
                            <li><a href="#"><i class="g-1"> </i></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="copy animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                        <p>© 2016 . All Rights Reserved .  </p>
                    </div>
                </div>
            </div>
            <!--footer-->		
        </body>
    </html>





    <?php
}
?>



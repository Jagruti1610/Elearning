<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Cache-Control: no-cache, no-store, must-revalidate ");
header("Pragma: no-cache ");
header("Expires: 0");
error_reporting(1);
?><?php
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

                .op{
                    color:#fff;
                    background-color: rgba(19, 35, 47, 0.9);
                    font-weight: bold;
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
                
                
            </style>

        </head>
        <body style="font-family: Candara;">
            <!--banner-->
            <div class="banner">
                <!--header-->
                <div class="header">		

                    <div class="logo" >
                        <a class="navbar-brand" href="index.php" style="font-family: Broadway; text-align: center;">E-Learning</a>
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
                    <h3>Enrolled courses</h3>
                    <?php
                    include 'database.php';
                    $c = 0;
                    $sql1 = mysql_query("SELECT * FROM enrollment where Student_Id =". $_SESSION['Sid'] );
                    while ($row1 = mysql_fetch_array($sql1)) {
                        $sql = mysql_query("SELECT * FROM course where Id = $row1[2]");
                        $row = mysql_fetch_array($sql);    
                        $c++;
                        echo "<div class='course_holder'>";

                        echo "<div class='img_holder'><img src=" . $row['Url'] . " height=200px width=300px></img></div>";
                        echo "<center><h4 class='title'>NOC : <a href=http://localhost/ELearning/StudyCourse.php?Id=" . $row['Id'] . ">" . $row['Course_Name'] . "</a></h4></center>";
                        echo "<div class='coursedesc'><h4>Description : " . $row['Description'] . "</h4></div>";
                        
                        echo "</div>";
                        
                    }
                    if ($c == 0) {
                        echo "<h4>No enrollments yet</h4>";
                    }
                    ?>

                </div>
            </div>
            <div class="clearfix"> </div>
            
            <div class="course">
                <div class="container">
                    <h3>Available courses</h3>
                    <?php
                    include 'database.php';
                    $c = 0;
                    $d = date('Y-m-d');
                    $sql = mysql_query("SELECT * FROM course");
                    while ($row = mysql_fetch_array($sql)) {
                        echo "<div class='course_holder'>";

                        echo "<div class='img_holder'><img src=" . $row['Url'] . " height=200px width=300px></img></div>";
                        echo "<center><h4 class='title'>NOC : <a href=http://localhost/ELearning/DetailedCourseView.php?Id=" . $row['Id'] . ">" . $row['Course_Name'] . "</a></h4></center>";
                        echo "<div class='coursedesc'><h4>Description : " . $row['Description'] . "</h4></div>";
                        if ($d <= DATE($row['Enrollment_End']) && $d >= DATE($row['Enrollment_Start'])) {
                            echo "<br><div class='enrollment'><h4>Enrollment open.</h4></div>";
                        } elseif ($d <= DATE($row['Enrollment_Start'])) {
                            echo "<br><div class='enrollment'><h4>Enrollment not yet open.</h4></div>";
                        } else {
                            echo "<br><div class='enrollment'><h4>Enrollment closed.</h4></div>";
                        }
                        echo "</div>";
                        $c = $c + 1;
                       
                    }
                    if ($c == 0) {
                        echo "<h3>No course created yet</h3>";
                    }
                    ?>

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



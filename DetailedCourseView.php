<?php
session_start();
if (isset($_SESSION)) {
    if (!empty($_REQUEST)) {
        if ($_SESSION['Actor'] != "S") {
            header("Location: http://localhost/ELearning/InsufficientRights.php");
            exit();
        } elseif ($_SESSION['Actor'] == "S") {
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

                        body {
                            background: #eee;
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
                            width: 70%;
                            margin:2% 2%;
                            padding: 5%;
                            background: #fff;  
                            height: inherit;
                            border:1px solid #999;
                            border-radius:8px; 
                            box-shadow:0 0 10px #999; 

                        }

                        .coursedesc
                        {
                            height: 60px;
                            auto : hidden;
                            padding-top: 30px;
                            padding-bottom: 10px;
                        }

                        .img-holder
                        {
                            height:50%;
                            width:50%;
                            auto:hidden;

                        }

                        .container
                        {
                            width: 100%;
                            margin-top: 6%;
                            min-height: auto;
                        }

                        .title
                        {
                            font-size: 24px;
                            color: #286090;
                            align-self: center;
                            font-weight: 700;
                            padding-top: 20px;
                            auto: hidden;
                        }

                        .enrollment
                        {
                            font-size: 24px;
                            color: #286090;
                            height:20px;

                        }

                        .course
                        {
                            align-content: center;
                        }

                        .detail{
                            font-size: 20px;
                            text-align: center;
                            color: #204d74;
                            font-weight: 500;
                            margin: 0 0 40px;
                        }

                        .header{
                            height: 75px;
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

                        </div>
                        <div id="myDIV" style="background:#eee;">
                            <?php
                            echo "<div class='img_holder' style='float:left;width:20%'><img src=" . $_SESSION['Profile'] . " height=130px width=120px></img></div>";
                            echo "<div style='float:right;width:68%'><h4>" . $_SESSION['FirstName'] . "</h4>";
                            echo "<h6>" . $_SESSION['User_Name'] . "</h6>";
                            ?>
                            <div style="padding-bottom:10px;padding-top: 10px;"><a href="http://localhost/ELearning/Profile.php"><button type="submit" class="profilebutton" />Profile</button></a></div>

                            <div><a href="http://localhost/ELearning/Logout.php"><button type="submit" class="profilebutton" />Logout</button></a></div>
                        </div>

                    </div>


                    <div class="course">
                        <div class="container" style="padding-left:19%;">
                            <h3 style="padding-left:30%;">Detailed course view</h3>
                            <?php
                            include 'database.php';
                            $c = 0;
                            $d = date('Y-m-d');
                            $subid = $_REQUEST['Id'];

                            $sql = mysql_query("SELECT * FROM course where id = $subid");
                            while ($row = mysql_fetch_array($sql)) {
                                echo "<div class='course_holder'>";

                                echo "<div class='img_holder'><img src=" . $row['Url'] . " height=500px width=670px></img></div>";
                                echo "<div class=clearfix></div>";
                                echo "<div class=clearfix></div>";
                                echo "<center><h4 class='title'>NOC : <a href=http://localhost/ELearning/DetailedCourseView.php?Id=" . $row['Id'] . ">" . $row['Course_Name'] . "</a></h4></center>";
                                echo "<div class='coursedesc'><h4 class='detail'>Description : " . $row['Description'] . "</h4></div>";
                                $cid = $row['Id'];
                                $fid = $row['Faculty_Id'];
                                $stid = $_SESSION['Sid'];


                                $sql1 = mysql_query("SELECT * FROM faculty where id = $fid");
                                $row1 = mysql_fetch_array($sql1);
                                $des = $row['Enrollment_Start'];
                                $ds = strtotime($des);
                                $dss = date("j F Y", $ds);
                                $dee = $row['Enrollment_End'];
                                $de = strtotime($dee);
                                $dn = date("j F Y", $de);
                                echo "<div class='coursedesc'><h4 class='detail'>Enrollment starts from : $dss </h4></div>";
                                echo "<div class='coursedesc'><h4 class='detail'>Enrollment closes on : " . $dn . "</h4></div>";
                                $ces = $row['Course_Start'];
                                $cs = strtotime($ces);
                                $css = date("j F Y", $cs);
                                $cee = $row['Course_End'];
                                $ce = strtotime($cee);
                                $cn = date("j F Y", $ce);


                                echo "<div class='coursedesc'><h4 class='detail'>Teacher : " . $row1['First_Name'] . " " . $row1['Last_Name'] . "</h4></div>";

                                echo "<div class='coursedesc'><h4 class='detail'>Currently working as : " . $row1['Occupation'] . "</h4></div>";
                                echo "<div class='coursedesc'><h4 class='detail'>Experience : " . $row1['Experience'] . "</h4></div>";


                                if ($d <= DATE($row['Enrollment_End']) && $d >= DATE($row['Enrollment_Start'])) {
                                    echo "<br><div class='enrollment'><a href='http://localhost/ELearning/EnrollStudent.php?cid=$cid'><h4 class='detail'>Enroll now</h4></a></div>";
                                } elseif ($d <= DATE($row['Enrollment_Start'])) {
                                    echo "<br><div class='enrollment'><h4 class='detail'>Enrollment not yet open.</h4></div>";
                                } else {
                                    echo "<br><div class='enrollment'><h4 class='detail'>Enrollment closed.</h4></div>";
                                }


                                echo "</div>";
                                ?>
                            </div>
                        </div>
                        <div class="clearfix"> </div>



                        <!--footer-->
                        <div class="footer">
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
        }
    } else {
        header("Location: http://localhost/ELearning/AllCourses.php");
        exit();
    }
} else {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
}
?>



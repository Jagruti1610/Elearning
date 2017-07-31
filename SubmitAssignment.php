<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Cache-Control: no-cache, no-store, must-revalidate ");
header("Pragma: no-cache ");
header("Expires: 0");
error_reporting(1);
?>

<?php
session_start();
error_reporting(1);
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
                    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
                        .forgot {
                            margin-top: -20px;
                            text-align: right;
                        }

                        fieldset  {
                            display:inline-block;
                        }

                        .form {
                            background: #fff;
                            padding: 40px;
                            max-width: 600px;
                            margin: 40px auto;
                            border-radius: 4px;

                        }

                        .course_holder
                        {
                            float:left;
                            width: 90%;
                            margin:2% 2%;
                            padding: 5%;
                            background: #fff;  
                            height: auto;
                            border:1px solid #999;
                            border-radius:8px; 
                            box-shadow:0 0 10px #999; 
                            padding-left: 10%;
                            padding-right: 10%;
                        }

                        .coursedesc
                        {
                            height: 60px;

                            padding-top: 10px;
                            padding-bottom: 10px;
                            auto : hidden;
                        }

                        .img-holder
                        {
                            height:50%;
                            width:50%;
                            float: left;
                            padding: 2%;
                            auto:hidden;
                            padding-right: 0px;
                        }

                        .container
                        {
                            width: 100%;
                            height: auto;
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

                        .vertical-menu {
                            width: 200px; /* Set a width if you like */
                        }

                        .vertical-menu a {
                            background-color: #555; /* Grey background color */
                            color: #fff; /* Black text color */
                            display: block; /* Make the links appear below each other */
                            padding: 12px; /* Add some padding */
                            text-decoration: none; /* Remove underline from links */
                        }

                        .vertical-menu a:hover {
                            background-color: #ccc; /* Dark grey background on mouse-over */
                        }

                        .vertical-menu a.active {
                            background-color:#1ab188;/*#4CAF50;  Add a green color to the "active/current" link */
                            color: white;
                        }

                        .course{
                            padding-top: 0px;
                            margin-top: 0px;
                        }

                        .header{
                            height: auto;
                        }

                        .best{
                            padding: 2em 0;
                            background: #fff;
                        }

                        .title
                        {
                            font-size: 22px;
                            color: #286090;
                            align-self: center;
                            font-weight: 700;
                            margin: 0 0 40px;
                            text-align: center; 
                            auto: hidden;
                        }

                        body{
                            background: #fff;
                        }

                        h3{
                            padding-top: 0%;
                            padding-bottom: 0%;
                            font-size: 20px;
                            text-align: center;
                            margin-bottom: 0px;
                        }

                        .best h3{
                            margin: 0 0;
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

                        </div>
                        <!--//header-->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                    </div>	



                    <div class="header">
                        <nav class="navbar navbar-default">
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
                                    <li><a href="http://localhost/ELearning/StudentHomePage.php" >Home</a></li>             
                                    <li><a href="http://localhost/ELearning/AllCourses.php" >All Courses</a></li>
                                    <li><a href="http://localhost/ELearning/EnrolledCourses.php" class="active" >My Courses</a></li>
                                    <li><a href="http://localhost/ELearning/sreports.php" >Results</a></li>
                                    <li><a href="http://localhost/ELearning/cContact.php" >Contact</a></li>
                                </ul>		
                            </div>	
                        </nav>

                        <div class="logon" onclick="myFunction()">
                            <div style=" float: left ; padding-left:55% ; height: 100%; padding-top: 10px; ">
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
                    <div class="clearfix"></div>

                    <div class="best">
                       <!-- <center><h3>Study course</h3></center> -->
                        <div class="course" style="background:#fff; padding-left: 25%;padding-top: 0px;margin-top: 0px;padding-right: 25%;">


                            <?php
                            include 'database.php';
                            $c = 0;
                            $d = date('Y-m-d');
                            $subid = $_REQUEST['subid'];
                            $mod = $_REQUEST['mod'];
                            $sql = mysql_query("SELECT * FROM course where id = $subid");

                            while ($row = mysql_fetch_array($sql)) {
                                echo "<center><div class='course_holder' style='float:left;width=20%;padding:0px;padding-left:15%;'>";
                                $n = $row['No_Modules'];
                                echo "<div class='img_holder' style='float:left;'><img src=" . $row['Url'] . " height=98px width=150px></img></div>";
                                echo "<div style='margin-top:0px;padding-top:6%;float:left;'>";
                                echo "<h4 class='title'><a href=http://localhost/ELearning/ViewCourseNotes.php?cid=$subid&mod=$mod>" . $row['Course_Name'] . "</a></h4></div>";

                                echo "</div></center>";
                            }
                            ?>
                        </div>
                        <div class="clearfix"></div>



                        <div class="best">

                                    <!-- <center><h3>Study course</h3></center> -->


                            <?php
                            $c = 0;
                            $d = date('Y-m-d');
                            $subid = $_REQUEST['subid'];

                            $mod = $_REQUEST['mod'];


                            $sql = mysql_query("SELECT * FROM study_material where Subject_Id = $subid and Module_no=$mod");

                            $row = mysql_fetch_array($sql);
                            $id = $row['Id'];
                            $de = $row['End_Date'];
                            $ce = strtotime($de);
                            $cn = date("j F Y", $ce);

                            echo "<h3 style='text-align:center;'>Last date for submission of assignment is $cn</h3>";
                            echo "<h5 style='text-align:center;'>Assignment should be submitted in form of pdf only</h5>";

                            $as = $row['Assignment_Question'];
                            if ($as != "") {
                                ?>
                                <div class="course" style="background:#fff;padding-top: 0px;"></div>
                                <?php
                                echo "<div class=course_holder><h3 style='text-align:center;'>Assignment : Module $mod</h3><h4>$as</h4></div>";
                                ?>
                            </div>
                            <div class="clearfix"></div>

                            <div >
                                <?php
                                $stid = $_SESSION['Sid'];
                                $u = "http://localhost/ELearning/uploads/assignments/" . $stid . "-" . $subid . "-" . $mod . ".pdf";
                                $re = mysql_query("SELECT * from assignment a where a.url='$u'");
                                if ($ra = mysql_fetch_array($re)) {
                                    echo " <h3 style='text-align:center;'>Assignment has been submitted</h3><a href='$u?t=" . time() . "' target='_blank'> "
                                    . "<h5 style='text-align:center;'> Click here to view your assignment </h5>"
                                    . "</a>";
                                } else {
                                    echo "<h4 style='text-align:center;'>You have not yet submitted the assignment</h4>";
                                }
                                ?>
                            </div>


                        </div>
                        <div class="form">
                            <?php echo " <form action='http://localhost/ELearning/SubmitAssignmentdb.php?Subject=$subid&Mod=$mod&id=$id' method='post' enctype='multipart/form-data' >"; ?>
                            <?php
                            $d = date('Y-m-d');
                            if ($d <= $de) {
                                ?>
                                <div class="field-wrap" style="padding-top:0px;padding-bottom:20px;">
                                    <input type="file" name="pic" class="filechooser" style="float: left;width:70%"/>
                                    <button type="submit" name="btn-upload" class="button button-block" style="margin-top: 20px;">Upload</button>
                                <?php } ?>
                            </div>
                        </div>  

                    </form>
                    <?php
                } else {
                    echo '<h3>No assignments yet</h3>';
                }
                ?>

            </div>



            <!--footer-->
            <div class="footer">
                <div class="container">
                    <div class="col-md-3 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
                        <h4>Tip</h4>
                        <p>Submit assignment and attempt test in time.</p>
                    </div>
                    <div class="col-md-3 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
                        <h4>Features</h4>
                        <ul>
                            <li><a href="singlepage.html">Free courses</a></li>
                            <li><a href="singlepage.html">Test your knowledge</a></li>
                            <li><a href="singlepage.html">Learn at your comfort</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-left wow fadeInRight animated" data-wow-delay=".5s">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="">Register</a></li>
                            <li><a href="">Login</a></li>
                            <li><a href="">Courses</a></li>
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
    } else {
        header("Location: http://localhost/ELearning/StudyCourse.php");
        exit();
    }
} else {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
}
?>



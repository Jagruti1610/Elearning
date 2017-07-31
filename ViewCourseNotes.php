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
        if ($_SESSION['Sid'] == "") {
            header("Location: http://localhost/ELearning/InsufficientRights.php");
            exit();
        } elseif ($_SESSION['Sid'] != "") {
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

                        .course_holder
                        {
                            float:left;
                            width: 70%;
                            margin:2% 2%;
                            padding: 5%;
                            background: #fff;  
                            height: 100px;
                            border:1px solid #999;
                            border-radius:8px; 
                            box-shadow:0 0 10px #999; 

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
                                    <li><a href="http://localhost/ELearning/StudentHomePage.php">Home</a></li>             
                                    <li><a href="http://localhost/ELearning/AllCourses.php" >All Courses</a></li>
                                    <li><a href="http://localhost/ELearning/EnrolledCourses.php"  class="active">My Courses</a></li>
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
                    <div class="clearfix"></div>

                    <div class="best">
                       <!-- <center><h3>Study course</h3></center> -->
                        <div class="course" style="background:#fff; padding-left: 25%;padding-top: 0px;margin-top: 0px;">


                            <?php
                            include 'database.php';
                            $c = 0;
                            $d = date('Y-m-d');
                            $subid = $_REQUEST['cid'];
                             $stid= $_SESSION['Sid'];
                            $sql = mysql_query("SELECT c.Id, c.Course_Name, c.No_Modules, c.Url FROM course c join enrollment e on c.Id=e.Course_Id WHERE e.Student_Id=$stid and c.Id=$subid");

                            while ($row = mysql_fetch_array($sql)) {
                                echo "<center><div class='course_holder' style='float:left;width=20%;padding:0px;padding-left:15%;'>";
                                $n = $row['No_Modules'];
                                echo "<div class='img_holder' style='float:left;'><img src=" . $row['Url'] . " height=98px width=150px></img></div>";
                                echo "<div style='margin-top:0px;padding-top:6%;float:left;'>";
                                echo "<h4 class='title'><a href=http://localhost/ELearning/DetailedCourseView.php?Id=" . $row['Id'] . ">" . $row['Course_Name'] . "</a></h4></div>";

                                echo "</div></center>";
                            }
                            ?>
                        </div>
                        <div class="clearfix"></div>


                        <div class="best">
                           <!-- <center><h3>Study course</h3></center> -->
                            <div class="course" style="background:#fff; padding-left: 25%;padding-top: 0px;">

                                <?php
                                include 'database.php';
                                $c = 0;
                                $d = date('Y-m-d');
                                $subid = $_REQUEST['cid'];
                                $stid= $_SESSION['Sid'];
                                $sql = mysql_query("SELECT c.Id, c.Course_Name, c.No_Modules FROM course c join enrollment e on c.Id=e.Course_Id WHERE e.Student_Id=$stid and c.Id=$subid");
                                $row = mysql_fetch_array($sql);
                                $n = $row['No_Modules'];

                                $mod = $_REQUEST['mod'];
                                $sql = mysql_query("SELECT sm.Start_Date, sm.End_Date,sm.Url FROM study_material sm join enrollment e on e.Student_Id=$stid where e.Course_Id =$subid and sm.Module_No=$mod and Start_Date <= CURDATE()");

                                $row = mysql_fetch_array($sql);
                                $de = $row['End_Date'];
                                if ($row['End_Date'] != "") {
                                    if ($d >= $row['Start_Date'] && $d <= $de) {
                                        $ce = strtotime($de);
                                        $cn = date("j F Y", $ce);
                                        echo "<h4>Module to be completed on or before $cn</h4>";
                                    } elseif ($d > $de) {
                                        $ce = strtotime($de);
                                        $cn = date("j F Y", $ce);
                                        echo "<h4>Test and assignment submission dates were over on $cn</h4>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="clearfix"></div>

                            <div class="mpdf" style="min-height:auto;padding-top: 0px;margin-top: 0px;">
                                <div>
                                    <div class="vertical-menu" style="float:left;margin-left:0px;width:15%;padding-left: 3%;">
                                        <?php
                                        echo "<a ";
                                        if ($_REQUEST['mod'] == 0) {
                                            $url = "http://localhost/ELearning/uploads/notes/Rules.pdf?";
                                            echo "class='active'";
                                        }
                                        echo "href='http://localhost/ELearning/ViewCourseNotes.php?cid=$subid&mod=0&t=".time()."'>Home</a>";


                                        for ($i = 1; $i <= $n; $i++) {
                                            echo "<a ";
                                            if ($_REQUEST['mod'] == $i) {
                                                echo "class='active'";
                                                $url = $row['Url'];
                                                if (empty($url)) {

                                                    $url =  $url = "http://localhost/ELearning/uploads/notes/NotUploaded.pdf" ;
                                                } else {
                                                    $url = $row['Url'];
                                                }
                                            }

                                            echo "href='http://localhost/ELearning/ViewCourseNotes.php?cid=$subid&mod=$i&t=".time()."'> Module $i </a>";
                                        }

                                        $l = -5;
                                        if ($_REQUEST['mod'] == -5) {
                                            echo "<a class='active'";
                                            $url = $row['Url'];
                                            if (empty($url)) {
                                                $url =  $url = "http://localhost/ELearning/uploads/notes/NotUploaded.pdf" ;
                                            }
                                        }
                                        echo "<a href='http://localhost/ELearning/ViewCourseNotes.php?cid=$subid&mod=$l&t=".time()."'> Master_Test</a>";
                                        ?>

                                    </div>
                                </div>
                                <div id="pdf" style="float:right; margin-right: 2%; margin-top: 0px;">
                                    <?php
                                    echo "<object id='pdf_content' width='1000px' height='500px' type='application/pdf' trusted='yes' application='yes' title='Assembly' data='$url#zoom=100&scrollbar=1&toolbar=0&navpanes=0'>";
                                    echo "<p>System Error - This PDF cannot be displayed, please contact IT.</p></object>";
                                    ?>
                                </div>


                            </div>

                        </div>


                    </div>

                    <div class="opt" style="padding-left:25%;padding-right: 25%;padding-top: 30%;margin-top: 0px;padding-bottom: 30px;background: #fff;">
                        <?php
                        if ($url != 'http://localhost/ELearning/uploads/notes/NotUploaded.pdf') {

                            echo "<div style='padding-left:25%;float:left;'><a href='$url'><button class='profilebutton'>Print</button></a></div>";
                            $d = date('Y-m-d');

                            if ($d <= $de) {
                                $sq = mysql_query("SELECT * FROM mst_test where Subject_Id = $subid and Module=$mod");
                                $rw = mysql_fetch_array($sq);
                                $tid = $rw['Id'];
                                //echo "$subid $mod";
                                if ($mod == -5) {
                                    echo "<div style='float:right;padding-right:15%;'><a href='summaftest.php?subid=$subid&mod=$mod&testid=$tid'><button class='profilebutton'>Take test</button></a></div>";
                                } else {
                                    echo "<div style='float:right;padding-right:15%;'><a href='summatest.php?subid=$subid&mod=$mod&testid=$tid'><button class='profilebutton'>Take test</button></a></div>";
                                } 
                                echo "<div style='float:right;padding-right:5%;'><a href='SubmitAssignment.php?subid=$subid&mod=$mod'><button class='profilebutton'>Assignment</button></a></div>";
                            }
                        }
                        ?>
                        <div class="clearfix"> </div>
                    </div>



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
    } else {
        header("Location: http://localhost/ELearning/StudyCourse.php");
        exit();
    }
} else {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
}
?>



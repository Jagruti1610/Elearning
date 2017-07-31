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
                            padding-top: 10px;
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
                            min-height: 900px;
                            padding-left: 17%;
                        }

                        .title
                        {
                            font-size: 24px;
                            color: #286090;
                            align-self: center;
                            font-weight: 700;

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

                        h4{
                            font-size: 20px;
                            text-align: center;
                            color: #204d74;
                            font-weight: 500;
                            margin: 0 0 40px;
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
                            <div class="search-bar wow fadeInRight animated" data-wow-delay=".5s" style="float:right; margin-right: 20px;">
                                <form action="#" method="post">
                                    <input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Search';
                                            }">
                                    <input type="submit" value="">
                                </form>
                            </div>

                            <div class="clearfix"> </div>			
                        </div>
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
                                    <li><a href="http://localhost/ELearning/StudentHomePage.php" class="active">Home</a></li>             
                                    <li><a href="http://localhost/ELearning/AllCourses.php" >All Courses</a></li>
                                    <li><a href="http://localhost/ELearning/MyCourses.php">My Courses</a></li>
                                    <li><a href="http://localhost/ELearning/sreports.php" >Results</a></li>
                                    <li><a href="http://localhost/ELearning/Contact.php" >Contact</a></li>
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

                        </div>
                        <div id="myDIV">
                            <?php
                            echo "<div class='img_holder' style='float:left;width:20%'><img src=" . $_SESSION['Profile'] . " height=130px width=120px></img></div>";
                            echo "<div style='float:right;width:68%'><h4>" . $_SESSION['FirstName'] . "</h4>";
                            echo "<h6>" . $_SESSION['User_Name'] . "</h6>";
                            ?>
                            <div style="padding-bottom:10px;padding-top: 10px;"><a href="http://localhost/ELearning/Faculty/FacultyProfile.php"><button type="submit" class="profilebutton" />Profile</button></a></div>
                            <div><a href="http://localhost/ELearning/Logout.php"><button type="submit" class="profilebutton" />Logout</button></a></div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>


                    <div class="course">



                        <div class="clearfix"> </div>


                        <div class="container" style="min-height:200px;">
                            <?php
                            // if (!empty($_REQUEST)) {
                            include 'database.php';
                            $c = 0;
                            $cid = $_REQUEST["cid"];
                            $stid = $_SESSION['Sid'];
                            $d = date('Y-m-d');
                            //echo $cid . " " . $stid;

                            $rs = mysql_query("select * from enrollment where Course_Id='$cid' and Student_Id='$stid'", $cn);
                            // $qry = "INSERT INTO `enrollment` (`Course_Id`, `Student_Id` , 'DE') VALUES ('$cid','$stid', '$d')";

                            $conn = new mysqli("localhost", "root", "", "elearning");

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            if (mysql_num_rows($rs) < 1) {
                                $sql = "INSERT INTO `enrollment` (`Course_Id`, `Student_Id` , `DE`) VALUES ('$cid','$stid', '$d')";

                                if ($conn->query($sql) === TRUE) {
                                    echo "<h3>Successfully Enrolled</h3>";
                                } else {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                }
                            } else {
                                echo "<h3>Already enrolled</h3>";
                            }

                            $conn->close();
                            ?>
                        </div>  
                        <div class="clearfix"> </div>
                    </div>

                    <div class="clearfix"> </div>


                    <!--footer-->
                    <div class="footer">
                        <div class="container">
                            <div class="col-md-3 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
                                <h4>Snippet</h4>
                                <p>Some snippet content to be placed here.</p>
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
        header("Location: http://localhost/ELearning/AllCourses.php");
        exit();
    }
} else {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
}
?>



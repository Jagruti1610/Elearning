<?php
session_start();
if ($_SESSION['User_Name'] == "") {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
} if ($_SESSION['Sid'] == "") {
    header("Location: http://localhost/ELearning/InsufficientRights.php");
    exit();
} else {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>E-Learning</title>
            <<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
            <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
            <!-- Custom Theme files -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="keywords" content="E-Learning,Online-Learning,learning,free, test"/>
            <link rel="stylesheet" href="http://localhost/ELearning/css/jquery-ui.css">
            <link rel="stylesheet" href="http://localhost/ELearning/css/flexslider.css">
            <link href="css/style.css" type="text/css" rel="stylesheet" media="all">

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

                table {
                    font-size: 1em;
                }

                .ui-draggable, .ui-droppable {
                    background-position: top;
                }

                .form {
                    background: rgba(19, 35, 47, 0.9);
                    padding: 20px;
                    max-width: 60%;
                    margin: 20px auto;
                    margin-top: 0px;
                    padding-top: 0px;
                    border-radius: 4px;
                    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
                    padding-top: 0px;
                }

                h1 {
                    text-align: center;
                    color: #ffffff;
                    font-weight: 300;
                    margin: 0 0 40px;
                }

                label {
                    position: absolute;
                    -webkit-transform: translateY(-30px);
                    transform: translateY(-30px);
                    left: 13px;
                    float: left;
                    color: rgba(255, 255, 255, 0.5);
                    -webkit-transition: all 0.25s ease;
                    transition: all 0.25s ease;
                    -webkit-backface-visibility: hidden;
                    pointer-events: none;
                    font-size: 22px;
                }
                label .req {
                    margin: 2px;
                    color: #1ab188;
                }

                label.active {
                    left: 2px;
                    font-size: 14px;
                }
                label.active .req {
                    opacity: 0;
                }

                label.highlight {
                    color: #ffffff;
                }

                .textinput{
                    font-size: 22px;
                    display: block;
                    width: 100%;
                    height: 100%;
                    float: right;
                    padding: 5px 10px;
                    background: none;
                    background-image: none;
                    border: 1px solid #a0b3b0;
                    color: #ffffff;
                    border-radius: 0;
                    -webkit-transition: border-color .25s ease, box-shadow .25s ease;
                    transition: border-color .25s ease, box-shadow .25s ease;
                }

                .textinput:focus
                {
                    outline: 0;
                    border-color: #1ab188;
                }

                .field-wrap {
                    position: relative;
                    margin-bottom: 40px;
                    padding: 25px;
                }

                .header{
                    height: 75px;
                }

                .dropdown
                {
                    color: #a0b3b0;
                    font-size: 22px;
                    font-weight: bold;
                    display: block;
                    width: 100%;
                    float: right;
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

                .forgot {
                    margin-top: -20px;
                    text-align: right;
                }

                .navigation {
                    width: 250px;
                    padding: 0px;
                    padding-left: 10px;
                    padding-top: 20px;
                }

                .container{
                    padding-left: 20px;

                    width: 100%;
                }

                .navigation {
                    width: 100%;
                    padding: 0px;
                    padding-left: 10px;
                    padding-top: 20px;
                }

                .container{
                    padding-left: 20px;
                    padding-top: 0px;
                    margin-top: 0px;
                    width: 100%;
                }

                .mainmenu {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    background-color: #333;
                    font-size: 20px;
                }

                .mainmenu li {
                    float: left;
                    padding-left: 10%;
                }

                .mainmenu li a {
                    display: block;
                    color: white;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                }

                .mainmenu li a:hover {
                    background-color: #111;
                }
                /* when hovering over a .mainmenu item,
                  display the submenu inside it.
                  we're changing the submenu's max-height from 0 to 200px;
                */

                .sactive {
                    background-color: #666666;
                }

                .course{
                    padding-top: 0px;
                    margin-top: 0px;
                }

                .smenu{
                    width:100%; 
                    padding-left: 25%; 
                    padding-right: 25%;
                    padding-top: 0px;
                    margin-top: 0px;
                    padding-bottom: 4%;
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
                    <div style="padding-bottom:10px;padding-top: 10px;"><a href="http://localhost/ELearning/Faculty/FacultyProfile.php"><button type="submit" class="profilebutton" />Profile</button></a></div>

                    <div><a href="http://localhost/ELearning/Logout.php"><button type="submit" class="profilebutton" />Logout</button></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>


            <div class="best">
                <div class="container" style="padding-top:0px;margin-top: 0px;">
                    <center><h1 style="color: #002663; font-weight: 700;"></h1></center>
                    <div class="cbody">

                        <div class="course" style="background-color:#fff; padding-left: 40%;"> 
                            <?php
                            if (!empty($_REQUEST)) {
                                $sub = $_REQUEST['sub'];
                                $mod = $_REQUEST['mod'];
                                echo "<a href='http://localhost/ELearning/ViewCourseNotes.php?cid=$sub&mod=$mod'><h3>Successfully submitted.</h3></a>";
                            }
                            ?>


                        </div>
                    </div>
                </div>
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
<?php }
?>






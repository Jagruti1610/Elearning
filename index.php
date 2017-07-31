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
        <script type="application/x-javascript">
            addEventListen
            er("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
        </script>
        <!-- //Custom Theme files -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <!-- js -->
        <script src="js/jquery-1.11.1.min.js"></script> 
        <script src="js/bootstrap.js"></script>

        <!-- //js -->	

        <!--JS for animate-->

        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->

    </head>
    <body style="font-family: Candara;">
        <!--banner-->
        <div class="banner" style="min-height: 650px;	background:url(images/banner201.jpg)no-repeat 0px 0px;	background-size:cover; position: relative;">
            <!--header-->
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
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right wow fadeInLeft animated" data-wow-delay=".5s">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="Registration.php" >Student</a></li>
                            <li><a href="http://localhost/ELearning/Faculty/FacultyRegistrationForm.php" >Faculty</a></li>
                            <li><a href="CViewCourses.php" >Courses</a></li>
                            <li><a href="cContact.php" >Contact</a></li>
                        </ul>		
                    </div>	
                </nav>	
                <div class="logo">
                    <a class="navbar-brand" href="http://localhost/ELearning/index.php" style="font-family: Broadway;">E-Learning</a>
                </div>


                <div class="clearfix"> </div>			
            </div>
            <!--//header-->
            <div class="container">
                <div class="banner-info" style="padding: 10em 0 0;">
                    <section class="slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="banner-info1">
                                        <h1 style="color: #002663;">A Place Of Light,<br> <span> Of Liberty,and Learning</span></h1>
                                        <p></p>

                                    </div>
                                </li>
                                <li>
                                    <div class="banner-info1">
                                        <h1 style="color: #002663;">Our Task is <br> <span> Creation Of Future</span></h1>
                                        <p></p>

                                    </div>
                                </li>
                                <li>
                                    <div class="banner-info1">
                                        <h1 style="color: #002663;">Developing Your <br>  <span> Strong Points</span></h1>
                                        <p></p>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <!-- FlexSlider -->
                    <script defer="" src="js/jquery.flexslider.js"></script>
                    <script type="text/javascript">
            $(function () {

            });
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
                    </script>
                    <!-- FlexSlider -->
                </div>
            </div>
        </div>
        <!--//banner-->
        <!--students-->
        <div class="students">

            <div class="clearfix"></div>
        </div>
        <!--//students-->
        <!--best-->
        <div class="best">
            <div class="container">
                <div class="col-md-6 best-left wow fadeInLeft animated" data-wow-delay=".5s">
                    <h3>Latest News</h3>
                    <div class="bes-top">
                        <div class="bes-lft">
                            <div class="history-grid-image">
                                <img src="images/banner.jpg" class="img-responsive zoom-img" alt="" >
                            </div>
                        </div>
                        <div class="bes-rgt">
                            <h4><a href="#">New Course Launching</a></h4>
                            <h5>Monday, 10 March 2017</h5>
                            <p>New course Internetwork security to be launched from this week.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="bes-top1">
                        <div class="bes-lft">
                            <div class="history-grid-image">
                                <img src="images/banner5.jpg" class="img-responsive zoom-img" alt="">
                            </div>
                        </div>
                        <div class="bes-rgt">
                            <h4><a href="#">DSA Results are Out</a></h4>
                            <h5>Monday, 13 February 2017</h5>
                            <p>The rank list of DSA course is published check out yours</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- <div class="col-md-6 best-left wow fadeInRight animated" data-wow-delay=".5s">
                        <h3>Our Best Students</h3>
                        <p>Lorem ipsum dolor sit amet, consectetu er adipiscing elit, sed diam nonummy nibh eu ismod tincidunt ut laoreetd.</p>
                        <div class="bes-top">
                                <ul>
                                        <li><div class="history-grid-image">
                                        <img src="images/t1.jpg" class="img-responsive zoom-img" alt="">
                                </div>
                                        <h6><a href="singlepage.html">Sarah Nilson</a></h6>
                                        <h5>2016</h5></li>
                                        <li><div class="history-grid-image">
                                        <img src="images/t2.jpg" class="img-responsive zoom-img" alt="">
                                </div>
                                        <h6><a href="singlepage.html">JessicaMcQuay</a></h6>
                                        <h5>2015</h5></li>
                                        <li><div class="history-grid-image">
                                        <img src="images/t3.jpg" class="img-responsive zoom-img" alt="">
                                </div>
                                        <h6><a href="singlepage.html">Neil Johnson</a></h6>
                                        <h5>2014</h5></li>
                                </ul>
                        </div>
                </div> -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!--best-->
        <!--course-->
        <div class="course">
            <div class="container" style="padding-top: 3%;">

                <div class="col-md-4 course-left wow fadeInLeft animated" data-wow-delay=".5s">
                    <h3>Why Join Us</h3>
                    <div class="history-grid-image">
                        <img src="images/n2.jpg" class="img-responsive zoom-img" alt="">
                    </div>
                    <p>Learn at your pace. Strengthen your subject knowledge.</p>
                </div>

                <div class="col-md-4 course-left animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <h3>Enjoy Learning</h3>
                    <div class="history-grid-image">
                        <img src="images/t5b.jpg" class="img-responsive zoom-img" alt="">
                    </div>
                    <p> Grasp a better understanding of the subject with our modular teaching.</p>
                </div>

                <div class="col-md-4 course-left wow fadeInRight animated" data-wow-delay=".5s">
                    <h3><a href="CViewCourses.php">All Courses</a></h3>
                    <ul>
                        <?php
                        include 'database.php';
                        $sq = mysql_query("SELECT c.Course_Name, c.Id FROM course c join enrollment e on c.Id=e.Course_Id GROUP by e.Course_Id desc limit 6");
                        while ($r = mysql_fetch_array($sq)) {
                            echo "<li><a href='CDetailedCourseView.php?Id=$r[1]'><span></span>$r[0]</a></li>";
                        }
                        ?>

                    </ul>
                    <p>Click on All Courses link to view all the available courses.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--course-->
        <!--semst-->
        <div class="semst">
            <div class="container">
                <div class="col-md-7 semst-left wow fadeInLeft animated" data-wow-delay=".5s" style="width: 100%;padding-right: 0px;">
                    <h3>Most enrolled Courses</h3>
                    <ul>
                        <?php
                        $sql = mysql_query("SELECT c.Course_Name, c.Id , c.Url FROM course c join enrollment e on c.Id=e.Course_Id GROUP by e.Course_Id desc limit 3");
                        while ($rw = mysql_fetch_array($sql)) {
                            echo "<a href='http://localhost/ELearning/CDetailedCourseView.php?Id=$rw[1]'><li><div class='history-grid-image'>";
                            echo "<img src='$rw[2]' class='img-responsive zoom-img' alt='' height='200px' width='200px'></div>";
                            echo "<p>$rw[0]</p></li></a>";
                        }
                        ?>
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!--semst-->
        <!--footer-->
        <div class="footer">

            <div class="clearfix"></div>
            <div class="copy animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                <p>© 2017 . All Rights Reserved .  </p>
            </div>

        </div>
        <!--footer-->		
    </body>
</html>
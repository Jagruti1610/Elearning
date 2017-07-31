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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- js -->
<script src="js/bootstrap.js"> </script>
<!-- //js -->	
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
                    <style>
                        .header{
                            height:75px;
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
                                    <li><a href="http://localhost/ELearning/Results.php" >Results</a></li>
                                    <li><a href="http://localhost/ELearning/Faculty/Contact.php" >Contact</a></li>
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
	<!--//banner-->
<!--students-->
<div class="students" style="min-height: 400px;">
    <h3 style="padding-top: 170px;padding-left: 70px;"> Sorry an Error occurred. It may have been caused as the file you are trying to upload is not a supported format.</h3>
			<div class="clearfix"></div>
	</div>
<!--//students-->

<!--course-->
	
<!--course-->
<!--semst-->
	
<!--semst-->
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
					<li><a href="singlepage.html">Register</a></li>
					<li><a href="singlepage.html">Login</a></li>
					<li><a href="singlepage.html">Courses</a></li>
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


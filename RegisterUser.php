<?php
if (isset($_POST) && !empty($_POST)) {
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
            </script>
            <script src="js/jquery-1.11.1.min.js"></script> 
            <script src="js/bootstrap.js"></script>
            <style>
                .Login{
                    font-size: 24px;
                    color: #002663;
                    width: 100%;
                    padding-left: 25%;
                    padding-right: 25%;
                    padding-bottom: 15%;
                    padding-top: 15%;
                }
            </style>

        </head>
        <body style="font-family: Candara;">
            <!--banner-->
            <div class="banner">
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
                                <li><a href="AvailableCourses.php" >Courses</a></li>
                                <li><a href="contact.php" >Contact</a></li>
                            </ul>		
                        </div>	
                    </nav>	
                    <div class="logo">
                        <a class="navbar-brand" href="index.html" style="font-family: Broadway;">E-Learning</a>
                    </div>

                    <div class="search-bar wow fadeInRight animated" data-wow-delay=".5s">
                        <form action="#" method="post">
                            <input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Search';
                                        }">
                            <input type="submit" value="">
                        </form>
                    </div>
                    <div class="clearfix"> </div>			
                </div>
                <!--//header-->
            </div>	

            <div class="container">

                <?php
//include("header.php");

                $fname = $lname = $email = $degree = $city = $college = $pword = "";

                $fname = $_REQUEST["fname"];
                $lname = $_REQUEST["lname"];
                $email = $_REQUEST["email"];
                $degree = $_REQUEST["degree"];
                $city = $_REQUEST["city"];
                $college = $_REQUEST["college"];
                $pword = $_REQUEST["pword"];

                include("database.php");
                $rs = mysql_query("select * from Registration where Email_Id='$email'");
                if (mysql_num_rows($rs) > 0) {
                    echo "<br><br><br><div class=Login>Login Id Already Exists</div>";
                    exit;
                }
                $query = "insert into Registration(First_Name,Last_name,Email_Id,Password,City,Degree,College) values('$fname','$lname','$email','$pword','$city','$degree','$college')";
                $rs1 = mysql_query($query)or die("Could Not Perform the Query");
                echo "<br><br><br><div class='Login'>Your Login ID Created Sucessfully";
                echo "<br>Please Login using your Login ID to take start learning.";
                echo "<br><a href=index.php>Login</a></div>";
                ?>
            </div>
        </div>
        <!--footer-->
        <div class="footer">

            <div class="copy animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                <p>© 2016 . All Rights Reserved .  </p>
            </div>

        </div>
        <!--footer-->		
    </body>
    </html>
    <?php
} else {
    header("Location: http://localhost/ELearning/Registration.php");
    exit();
}
?>

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
        <style>
            h3{
                font-size: 1.8em;
                text-align: center;
                margin-bottom: 10px;
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
                            <li><a href="index.php" >Home</a></li>
                            <li><a href="Registration.php" >Student</a></li>
                            <li><a href="http://localhost/ELearning/Faculty/FacultyRegistrationForm.php" >Faculty</a></li>
                            <li><a href="CViewCourses.php" >Courses</a></li>
                            <li><a class="active" href="cContact.php" >Contact</a></li>
                        </ul>		
                    </div>	
                </nav>	
                <div class="logo">
                    <a class="navbar-brand" href="index.php" style="font-family: Broadway;">E-Learning</a>
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



        <div class="course">
            <div class="container" style="padding-top:5%;">
                <h3>Contact us at</h3><br>
                <h3>Phone No. +91 8956237410</h3>
                <h3>Phone No. +91 8956237415</h3></br>
                <h3>Address </h3>


            </div>
        </div>
        <div class="clearfix"> </div>



        <!--footer-->
        <div class="footer">
            
                <div class="copy animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <p>© 2016 . All Rights Reserved .  </p>
              
            </div>
        </div>
        <!--footer-->		
    </body>
</html>

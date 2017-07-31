<?php
if (!empty($_REQUEST)) {
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
                                <li><a class="active" href="CViewCourses.php.php" >Courses</a></li>
                                <li><a href="cContact.php" >Contact</a></li>
                            </ul>		
                        </div>	
                    </nav>	
                    <div class="logo">
                        <a class="navbar-brand" href="index.php" style="font-family: Broadway;">E-Learning</a>
                    </div>

                    
                    <div class="clearfix"> </div>			
                </div>
                <!--//header-->
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
                        echo "<center><h4 class='title'>NOC : <a href=http://localhost/ELearning/CDetailedCourseView.php?Id=" . $row['Id'] . ">" . $row['Course_Name'] . "</a></h4></center>";
                        echo "<div class='coursedesc'><h4 class='detail'>Description : " . $row['Description'] . "</h4></div>";
                        $cid = $row['Id'];
                        $fid = $row['Faculty_Id'];



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
                            echo "<br><div class='enrollment'><h4 class='detail'>Register now to enroll</h4></div>";
                        } elseif ($d <= DATE($row['Enrollment_Start'])) {
                            echo "<br><div class='enrollment'><h4 class='detail'>Enrollment not yet open.</h4></div>";
                        } else {
                            echo "<br><div class='enrollment'><h4 class='detail'>Enrollment closed.</h4></div>";
                        }


                        echo "</div>";
                    }
                    ?>
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
    <?php
} else {
    header("Location: http://localhost/ELearning/CViewCourses.php");
    exit();
}
?>
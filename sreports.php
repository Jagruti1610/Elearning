<?php
session_start();
if ($_SESSION['Sid'] == "") {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
} else {
    $fid = $_SESSION["Sid"];
    include_once 'database.php';
    $c = 0;
    $nm = 0;
    $sql = mysql_query("SELECT e.Course_Id,c.Course_Name,c.no_modules FROM course c join enrollment e on c.Id=e.Course_Id where e.Student_Id=10");
    ?>
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
                function openWin() {
                    var panel = document.getElementById("admin_content");
                    var myWindow = window.open('', '', 'width=700,height=500');
                    myWindow.document.write('<html><head><title>Events</title>');
                    myWindow.document.write('</head><body align="center" >');
                    myWindow.document.write(panel.innerHTML);
                    myWindow.document.write('</body></html>');
                    myWindow.document.close();
                    myWindow.document.close();
                    myWindow.focus();
                    myWindow.print();
                    myWindow.close();

                }
            </script>

            <style>
                .header{
                    height:75px;
                }

                table{
                    font-family: Candara;
                    font-size: 14px;        
                    border: 1px;
                    width: 100%;
                }

                h1{
                    font-size: 27pt;
                    font-weight: 700;
                    color: #002663;
                    text-align: center;
                }

                .table{
                    padding-top: 5%;
                    font-size: 30px;
                    width: 100%;
                    padding-left: 5%;
                    padding-right: 5%;
                }

                th{
                    font-size: 20px;
                    background-color: #d58512;
                    margin-top: 0;
                    margin-bottom: 0;
                    padding: 1%;
                    text-align: center;
                }

                td{
                    font-size: 18px;
                    background-color: antiquewhite;
                    margin-top: 0;
                    margin-bottom: 0;
                    padding: 1%;
                    text-align: center;
                }

                .printbtn{
                    background: #800000;
                    color: #fff;
                    border: 0;
                    padding: 9px 31px;
                    font-weight: bold;
                }

                .smenu{
                    width:100%; 
                    padding-left: 35%; 
                    padding-right: 35%;
                    padding-top: 0px;
                    margin-top: 0px;
                    padding-bottom: 4%;
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

                .form{
                    width: 100%;
                    padding-left: 30%;
                    padding-right: 30%;
                    font-size: 20px;
                }
                .dropdown
                {
                    font-size: 22px;
                    font-weight: bold;
                    display: block;
                    width: 100%;
                    float: right;
                    height: inherit;
                    padding: 5px 10px;
                    background: none;
                    background-image: none;
                    border: 1px solid #a0b3b0;
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
                            <li><a href="http://localhost/ELearning/StudentHomePage.php">Home</a></li>             
                            <li><a href="http://localhost/ELearning/AllCourses.php" >All Courses</a></li>
                            <li><a href="http://localhost/ELearning/EnrolledCourses.php">My Courses</a></li>
                            <li><a href="http://localhost/ELearning/sreports.php"  class="active">Results</a></li>
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
            <div class="course" style="background-color:#fff;"> 


                <div class="form">

                    <h1 style="padding:15px;">View Test Results</h1>

                    <form action="sreports.php" method="post" enctype="multipart/form-data">

                        <?php
                        if (empty($_REQUEST)) {
                            ?>

                            <div class="field-wrap">
                                <label>
                                    Course Title
                                </label>
                                <select name="Subject" class="dropdown">
                                    <?php
                                    while ($row = mysql_fetch_array($sql)) {
                                        $c = c + 1;
                                        echo "<option value='" . $row['Course_Id'] . "' class='op'>" . $row['Course_Name'] . "</option>";
                                        $nm = $row['no_modules'];
                                    }
                                    if ($c == 0) {
                                        echo "<option value='0' class='op'>No course created yet</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <?php
                        } else {
                            $s = $_REQUEST['Subject'];
                            ?>
                            <div class="field-wrap">
                                <label>
                                    Course Title 
                                </label>
                                <select name="Subject" class="dropdown">
                                    <?php
                                    while ($row = mysql_fetch_array($sql)) {
                                        $c = c + 1;
                                        echo "<option value='" . $row['Course_Id'] . "' class='op'";
                                        if ($row['Course_Id'] == $s)
                                            echo "selected";
                                        echo ">" . $row['Course_Name'] . "</option>";
                                        $nm = $row['no_modules'];
                                    }
                                    if ($c == 0) {
                                        echo "<option value='0' class='op'>No course created yet</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        <?php } ?>
                        <div class="field-wrap" style="padding-top:10px;padding-bottom:20px;">

                            <button type="submit" class="printbtn" style="margin-top: 20px;">Get Modules</button>
                        </div>  
                    </form>

                    <?php
                    if (!empty($_REQUEST)) {
                        $s = $_REQUEST['Subject'];
                        $sl = mysql_query("SELECT no_modules FROM course where Id=$s");
                        $rw = mysql_fetch_array($sl);
                        $nm = $rw[0];

                        echo "<form method='post' action='sreports.php?Subject=$s' >";
                        ?>

                        <div class="field-wrap">
                            <label>Module</label>

                            <select name="Module" class="dropdown">
                                <?php
                                for ($i = 1; $i <= $nm; $i++) {
                                    echo "<option value='" . $i . "' class='op'";
                                    if (isset($_REQUEST['Module'])) {
                                        if ($i == $_REQUEST['Module'])
                                            echo 'selected=selected';
                                    }
                                    echo ">Module - " . $i . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="field-wrap" style="padding-top:10px;padding-bottom:20px;">
                            <button type="submit" class="printbtn" style="margin-top: 20px;">Get Results</button>
                        </div>  
                        </form>



                    <?php } ?>
                </div>

                <?php
                if (!empty($_REQUEST['Module'])) {
                    ?>
                    <div class = "table">
                        <table>
                            <tr>
                                <th>NAME</th>
                                <th>SUBJECT</th>
                                <th>MODULE</th>
                                <th>TOTAL TEST MARKS</th>
                                <th>TEST SCORE</th>
                                <th>ASSIGNMENT SCORE OUT OF 10</th>
                                <th>TOTAL MARKS OBTAINED</th>
                                <th>OUT OFF</th>
                                <th>All attempts</th>
                            </tr>
                            <?php
                            $s = $_REQUEST['Subject'];
                            $mod = $_REQUEST['Module'];
                            $rst = mysql_query("SELECT re.id,re.First_Name ,c.Id,c.Course_Name,t.Module,t.Total_Questions,MAX(r.score),a.score FROM mst_result r join mst_test t on r.test_id=t.Id join registration re on r.login=re.id join course c on t.Subject_id=c.Id join assignment a on a.Course_id=c.Id where student_id=$fid and c.Id=$s and t.Module=$mod", $cn);
                            $result = mysql_num_rows($rst);
                            if ($result < 1) {
                                echo "No Data Found";
                            } else {
                                while ($rows = mysql_fetch_array($rst)) {
                                    $firstname = $rows['First_Name'];
                                    $coursename = $rows['Course_Name'];
                                    $module = $rows['Module'];
                                    $totalqs = $rows['Total_Questions'];
                                    $score = $rows['MAX(r.score)'];
                                    $scorea = $rows['score'];
                                    $tsc = $score + $scorea;
                                    $of = $totalqs + 10;
                                    if ($firstname != "" && $coursename != "" && $module != "" && $totalqs != "" && $score != "") {
                                        ?>
                                        <tr> 

                                            <td><?php echo $firstname; ?></td>
                                            <td><?php echo $coursename; ?></td>
                                            <td><?php echo $module; ?></td>
                                            <td><?php echo $totalqs; ?></td>
                                            <td><?php echo $score; ?></td>
                                            <td><?php echo $scorea; ?></td>
                                            <td><?php echo $tsc; ?></td>
                                            <td><?php echo $of; ?></td>
                                            <td>
                                                <?php
                                                echo "<a href='sAllAttemptResults.php?Stid=$rows[id]&mod=$module&cid=$rows[Id]&stn=$firstname&cname=$coursename' > All attempts </a>";
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                    } else {
                                        echo "No Data Found";
                                    }
                                }
                            }
                            ?> 
                        </table></div>
                    <div style="margin:20px auto;width:100px;">
                        <input type="button" value="Print" onclick="openWin()" class="printbtn" />
                    </div>
                    <?php
                }
                ?>


            </div> <!-- /form -->





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

        </body>
    </html>

    <?php
}
?>

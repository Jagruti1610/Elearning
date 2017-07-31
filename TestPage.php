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
                    <link href="css/mainstyle.css" type="text/css" rel="stylesheet" media="all">
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
                            margin-top: 6%;
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
                            height: 75px;
                        }

                        .best{
                            padding-top: 0px;
                            margin-top: 0px;
                        }


                        .title
                        {
                            font-size: 20px;
                            color: #286090;
                            align-self: center;
                            font-weight: 600;
                            margin: 0 0 40px;
                            text-align: center; 
                            auto: hidden;
                        }
                    </style>
                    <script type="text/javascript">
                        // set minutes
                        var mins = 1;

                        // calculate the seconds (don't change this! unless time progresses at a different speed for you...)
                        var secs = mins * 60;
                        function countdown() {
                            setTimeout('Decrement()', 1000);
                        }
                        function Decrement() {
                            if (document.getElementById) {
                                minutes = document.getElementById("minutes");
                                seconds = document.getElementById("seconds");
                                // if less than a minute remaining

                                if (seconds < 59) {
                                    seconds.value = secs;
                                } else {
                                    minutes.value = getminutes();
                                    seconds.value = getseconds();
                                }
                                secs--;
                                setTimeout('Decrement()', 1000);
                            }

                        }


                        function getminutes() {
                            // minutes is seconds divided by 60, rounded down
                            mins = Math.floor(secs / 60);
                            return mins;
                        }
                        function getseconds() {
                            // take mins remaining (as seconds) away from total seconds remaining
                            return secs - Math.round(mins * 60);
                        }
                    </script>
                </head>
                <body style="font-family: Candara;">

                    <div class="header">		
                        <div class="logo" >
                            <a class="navbar-brand" href="#" style="font-family: Broadway; text-align: center;">E-Learning</a>
                        </div>			
                    </div>



                    <div class="best">

                    </div>
                    <div class="clearfix"></div>

                    <div class="content">
                        <div id="timer">
                            This is only valid for the next <input id="minutes" type="text" style="width: 14px; border: none; background-color:none; font-size: 16px; font-weight: bold;"> minutes and <input id="seconds" type="text" style="width: 26px; border: none; background-color:none; font-size: 16px; font-weight: bold;"> seconds.
                        </div>
                        <script>
                            countdown();
                        </script>
                        <div class="course" style="background:#fff; padding-left: 25%;padding-top: 0px;margin-top: 0px;">


                            <?php
                            include 'database.php';
                            $c = 0;
                            $d = date('Y-m-d');
                            $subid = $_REQUEST['cid'];

                            $mod = $_REQUEST['mod'];

                            $sql = mysql_query("SELECT * FROM course where id = $subid");

                            while ($row = mysql_fetch_array($sql)) {
                                echo "<center><div class='course_holder' style='float:left;width=20%;padding:0px;padding-left:5%;'>";
                                $n = $row['No_Modules'];
                                echo "<div class='img_holder' style='float:left;'><img src=" . $row['Url'] . " height=98px width=150px></img></div>";
                                echo "<div style='margin-top:0px;padding-top:6%;float:left;'>";
                                echo "<h4 class='title'>" . $row['Course_Name'] . " : Module - " . $mod . " Test</h4></div>";

                                echo "</div></center>";
                            }
                            ?>
                        </div>
                        <div class="belowcontainer">


                            <div class="questionholder">
                                <div style="border-bottom: 1px solid #a6a6a6;padding-bottom: 7px;font-weight: bold;">Question 1</div>
                                <div style="margin: 10px 0px;">
                                    <?php
                                    $subid = $_REQUEST['cid'];
                                    $mod = $_REQUEST['mod'];
                                    echo "Subject $subid Module $mod";

                                    $sql1 = mysql_query("SELECT * FROM mst_test where Subject_id=$subid and Module=$mod");

                                    $row2 = mysql_fetch_array($sql1);
                                    $tid = $row2[0];
                                    echo "TEST id : $tid";
                                    $n = $row2['Total_Questions'];

                                    $sq = mysql_query("SELECT * FROM mst_question where test_id=$tid");
                                    //$rw = mysql_fetch_array($sq);
                                    ?>
                                </div>
                                <div>
                                    <?php
                                    //for ($i = 1; $i <= $n; $i++) {
                                    $i = 1;
                                    while ($i <= $n) {
                                        if ($rw = mysql_fetch_array($sq)) {
                                            echo $rw['que_desc'] . "<br>";
                                            echo "<input type='radio' name='ans' id='ans' value='" . $rw['ans1'] . "' >" . $rw['ans1'] . "<br>";
                                            echo "<input type='radio' name='ans' id='ans' value='" . $rw['ans2'] . "' >" . $rw['ans2'] . "<br>";
                                            echo "<input type='radio' name='ans' id='ans' value='" . $rw['ans3'] . "' >" . $rw['ans3'] . "<br>";
                                            echo "<input type='radio' name='ans' id='ans' value='" . $rw['ans4'] . "' >" . $rw['ans4'] . "<br>";
                                            $_SESSION['qid'] = $rw['que_id'];
                                            ?>

                                            <div style="margin-top:10px;">
                                                <button type="button" class="savenext-btn">Clear Response</button>
                                                <?php
                                                echo "<a href='SaveAns.php?tid=$tid&ans=$ans'><button type='button' class='savenext-btn' >Save & Next</button></a>";
                                                ?>
                                                <div class="clearfix"></div>
                                            </div>
                                            <?php
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="question-pallete">
                                <div style="padding-left:30%;"><button type="submit" class="profilebutton"/>Submit</button></div>
                                <div style="font-size: 12px;font-weight: bold;text-align: center;padding-bottom: 6px;
                                     border-bottom: 1px solid #808080;"><i class="fa fa-clock-o"></i>Time Left [mins:secs] : 13:30</div>
                                <div style="margin-top: 10px;">
                                    <button type="button" class="pallete-btn">1</button>
                                    <button type="button" class="pallete-btn" style="background-color:#009933;border:0;color:#fff;">2</button>
                                    <button type="button" class="pallete-btn" style="background-color:#009933;border:0;color:#fff;">3</button>
                                    <button type="button" class="pallete-btn">4</button>
                                    <button type="button" class="pallete-btn">5</button>
                                    <button type="button" class="pallete-btn" style="background-color:#009933;border:0;color:#fff;">6</button>
                                    <button type="button" class="pallete-btn">7</button>

                                    <button type="button" class="pallete-btn">12</button>
                                    <button type="button" class="pallete-btn" style="background-color:#cc3300;border:0;color:#fff;">1</button>

                                    <button type="button" class="pallete-btn">8</button>
                                    <button type="button" class="pallete-btn" style="background-color:#cc3300;border:0;color:#fff;">9</button>
                                    <button type="button" class="pallete-btn" style="background-color:#cc3300;border:0;color:#fff;">10</button>
                                    <button type="button" class="pallete-btn">11</button>
                                    <button type="button" class="pallete-btn" style="background-color:#cc3300;border:0;color:#fff;">12</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="clearfix"></div>


                        </div>

                        <div style="padding-left:45%;"></div>
                        <div class="clearfix"></div>
                    </div>


                    <!--footer-->		
                </body>
            </html>




            <?php
        }
    } else {
        header("Location: http://localhost/ELearning/ViewCourseNotes.php");
        exit();
    }
} else {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
}
?>



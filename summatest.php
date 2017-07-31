<?php
session_start();
error_reporting(1);
if (isset($_SESSION)) {

    if ($_SESSION['Actor'] != "S") {
        header("Location: http://localhost/ELearning/InsufficientRights.php");
        exit();
    } elseif ($_SESSION['Actor'] == "S") {
        ?>

        <?php
        include("database.php");
        extract($_POST);
        extract($_GET);
        extract($_SESSION);
        /* $rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
          if($_SESSION[qn]>mysql_num_rows($rs))
          {
          unset($_SESSION[qn]);
          exit;
          } */
        $ss = session_id();
        $sid = $_SESSION['Sid'];
        if (isset($subid) && isset($testid)) {
            $_SESSION[sid] = $subid;
            $_SESSION[tid] = $testid;
            header("location:summatest.php");
        }
        if (!isset($_SESSION[sid]) || !isset($_SESSION[tid])) {
            header("location: ViewCourseNotes.php");
        }
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

                    table{
                        width: 70%;
                        padding-left: 0px;
                        margin-left: 0px;
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


                <div class="belowcontainer">
                    <div style='color: #660033; text-align: center;font-size: 36px;
                         font-weight: bold;margin: 0px 0px 19px;'>Online Test</div>
                    <div class="best">
                        <div>
                            <?php
                            $query = "select * from mst_question";
                            $n = 1;
                            $ros = mysql_query("select total_questions from mst_test where id=$tid", $cn) or die(mysql_error());
                            while($loq= mysql_fetch_array($ros)){
                                $nt= $loq[0];
                            }
                            $rs = mysql_query("select * from mst_question where test_id=$tid limit $nt", $cn) or die(mysql_error());
                            $lq = mysql_num_rows($rs);
                            if (!isset($_SESSION[qn])) {
                                $_SESSION[qn] = 0;
                                mysql_query("delete from mst_useranswer where sess_id='" . session_id() . "'") or die(mysql_error());
                                $_SESSION[trueans] = 0;
                            } else {
                                if ($submit == 'Prev Question') {
                                    mysql_data_seek($rs, $_SESSION[qn]);
                                    $row = mysql_fetch_row($rs);
                                    if ($_SESSION[qn] > 0)
                                        $_SESSION[qn] = $_SESSION[qn] - 1;
                                } elseif ($submit == 'Next Question' && isset($ans)) {
                                    if ($_SESSION[qn] == $lq - 1) {
                                        mysql_data_seek($rs, $_SESSION[qn]);
                                        $row = mysql_fetch_row($rs);
                                        $ss = session_id();
                                        $rs = mysql_query("select * from mst_useranswer where sess_id='$ss' and test_id=$tid and que_des='$row[2]'", $cn) or die(mysql_error());
                                        $l = mysql_num_rows($rs);
                                        if ($l > 0) {
                                            mysql_query("UPDATE `mst_useranswer` SET `your_ans`='$ans' WHERE sess_id='$ss' and test_id=$tid  and que_des='$row[2]'") or die(mysql_error());
                                        } else {
                                            mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('" . session_id() . "', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
                                        }
                                    } elseif ($_SESSION[qn] < $lq - 1) {
                                        mysql_data_seek($rs, $_SESSION[qn]);
                                        $row = mysql_fetch_row($rs);

                                        $ss = session_id();
                                        $rs = mysql_query("select * from mst_useranswer where sess_id='$ss' and test_id=$tid and que_des='$row[2]'", $cn) or die(mysql_error());
                                        $l = mysql_num_rows($rs);
                                        if ($l > 0) {
                                            mysql_query("UPDATE `mst_useranswer` SET `your_ans`='$ans' WHERE sess_id='$ss' and test_id=$tid  and que_des='$row[2]'") or die(mysql_error());
                                        } else {
                                            mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('" . session_id() . "', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
                                        }


                                        $_SESSION[qn] = $_SESSION[qn] + 1;
                                    }
                                } else if ($submit == 'Next Question') {
                                    if ($_SESSION[qn] >= $lq - 1) {
                                        
                                    } else {
                                        mysql_data_seek($rs, $_SESSION[qn]);
                                        $row = mysql_fetch_row($rs);
                                        $_SESSION[qn] = $_SESSION[qn] + 1;
                                    }
                                } else if ($submit == 'Get Result' && isset($ans)) {

                                    mysql_data_seek($rs, $_SESSION[qn]);
                                    $row = mysql_fetch_row($rs);
                                    $rs = mysql_query("select * from mst_useranswer where sess_id='$ss' and test_id=$tid and que_des='$row[2]'", $cn) or die(mysql_error());
                                    $l = mysql_num_rows($rs);
                                    if ($l > 0) {
                                        mysql_query("UPDATE `mst_useranswer` SET `your_ans`='$ans' WHERE sess_id='$ss' and test_id=$tid  and que_des='$row[2]'") or die(mysql_error());
                                    } else {
                                        mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('" . session_id() . "', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
                                    }

                                    echo "<div style='color: #660033;text-align: center; font-size: 36px;font-weight: bold;margin: 0px 0px 19px;'> Result</div>";
                                    $_SESSION[qn] = $_SESSION[qn] + 1;

                                    $rs = mysql_query("select * from mst_useranswer where sess_id='$ss' and true_ans=your_ans", $cn) or die(mysql_error());
                                    $ra = mysql_num_rows($rs);

                                    echo "<Table align=center><tr class=tot><td>Total Question<td> $lq";

                                    $op = ($ra / $lq) * 100;
                                    $w = 100 - $op;
                                    $wq = $lq - $ra;

                                    echo "<tr class=tans><td>Correctly Answered<td>   $ra  </tr>";
                                    echo "<tr class=fans><td>Wrong Answers<td>  $wq  </tr>";

                                    echo "</table>";

                                    echo "</div>";
                                    echo "<div style=width:100%;height:40px;background:#f2f2f2;margin:15px 0px;>";
                                    echo "<div style=width:$op%;background:#009900;height:40px;float:left;color:#fff;text-align:center;>$op%</div>";
                                    echo "<div style=width:$w%;height:40px;float:left;background:#f00;></div>";
                                    echo "<div class='clearfix'></div>";
                                    echo " <center><a href='http://localhost/ELearning/StudentHomePage.php'><input type=button name=submite value='Exit' style='background: #669900; color: #fff;border: 0;padding: 5px 56px;margin: 32px 0px 15px;font-weight: bold;'></a></center>";
                                    echo "</div>";
                                    $d = date('Y-m-d');
                                    mysql_query("insert into mst_result(login,test_id,test_date,score) values('$sid',$tid,'$d',$ra)") or die(mysql_error());
                                    // echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
                                    
                                    
                                    unset($_SESSION[qn]);
                                    unset($_SESSION[sid]);
                                    unset($_SESSION[tid]);
                                    unset($_SESSION[trueans]);
                                    exit;
                                } else if ($submit == 'Get Result') {

                                    echo "<div style='font-size:24px;text-align:center;color:#000;'> Result</div>";
                                    $_SESSION[qn] = - 1;

                                    $rs = mysql_query("select * from mst_useranswer where sess_id='$ss' and true_ans=your_ans", $cn) or die(mysql_error());
                                    $ra = mysql_num_rows($rs);
                                    echo "<div style='font-size:17px;'>";
                                    echo "<Table align=center><tr class=tot><td>Total Question<td> $lq";


                                    $op = ($ra / $lq) * 100;
                                    $w = 100 - $op;
                                    $wq = $lq - $ra;

                                    echo "<tr class=tans><td>Correctly Answer<td>   $ra  </tr>";
                                    echo "<tr class=fans><td>Wrong Answer<td>  $wq  </tr>";
                                    echo "</table>";

                                    echo "</div>";
                                    echo "<div style=width:100%;height:40px;background:#f2f2f2;margin:15px 0px;>";
                                    echo "<div style=width:$op%;background:#009900;height:40px;float:left;color:#fff;text-align:center;>$op%</div>";
                                    echo "<div style=width:$w%;height:40px;float:left;background:#f00;></div>";
                                    echo "<div class='clearfix'></div>";
                                    echo " <center><a href='http://localhost/ELearning/StudentHomePage.php'><input type=button name=submite value='Exit' style='background: #669900; color: #fff;border: 0;padding: 5px 56px;margin: 32px 0px 15px;font-weight: bold;'></a></center>";
                                    echo "</div>";
                                    $d = date('Y-m-d');
                                    //echo "$sid ,$tid ,$d ,$ra";
                                    mysql_query("insert into mst_result(login,test_id,test_date,score) values('$sid',$tid,'$d',$ra)") or die(mysql_error());
                                    //echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
                                    unset($_SESSION[qn]);
                                    unset($_SESSION[sid]);
                                    unset($_SESSION[tid]);
                                    unset($_SESSION[trueans]);
                                    exit;
                                }
                            }
                            $rs = mysql_query("select * from mst_question where test_id=$tid", $cn) or die(mysql_error());
                            if ($_SESSION[qn] > mysql_num_rows($rs) - 1) {
                                unset($_SESSION[qn]);
                                echo "<h1 class=head1>Some Error  Occured</h1>";
                                session_destroy();
                                echo "Please <a href=index.php> Start Again</a>";

                                exit;
                            }
                            mysql_data_seek($rs, $_SESSION[qn]);
                            $row = mysql_fetch_row($rs);
                            echo "<form name=myfm method=post action=summatest.php>";
                            echo "<div>";
                            $n = $_SESSION[qn] + 1;
                            echo "<div style='border: 4px solid #0099ff;padding: 2%;
    background: #e6f5ff;font-size: 18px;'><div style='background: #636363;padding: 5px;
    color: #fff; font-weight: bold;'>Question " . $n . "</div>";
                            echo "<div style='margin:10px 0px;'>$row[2]</div>";
                            echo "<div><input type=radio name=ans value=1>$row[3]";
                            echo "<div><input type=radio name=ans value=2>$row[4]";
                            echo "<div><input type=radio name=ans value=3>$row[5]";
                            echo "<div><input type=radio name=ans value=4>$row[6]";

                            echo "<div style='margin: 15px 0px;'><input type=submit name=submit value='Prev Question' style='background: #09f;
    border: 0; color: #fff; padding: 4px 12px;margin-right: 1%;'>";
                            echo "<input type=submit name=submit value='Next Question' style='background: #09f;
    border: 0;color: #fff;padding: 4px 12px;margin-right: 1%;'></div>";

                            echo "<div><input type=submit name=submit value='Get Result' style='background: #669900;
    color: #fff;border: 0;padding: 5px 56px;margin: 32px 0px 15px;font-weight: bold;'></div></form>";
                            echo "</div>";
                            ?>
                        </div>                    
                        <div class="question-pallete" style="display:none;">
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
                        </div></div>
                </div>
            </body>
        </html>
        <?php
    } else {
        header("Location: http://localhost/ELearning/ErrorPage.php");
        exit();
    }
} else {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
}
?>



<?php

session_start();
error_reporting(1);
if (isset($_SESSION)) {
    if ($_SESSION['Actor'] != "S") {
        header("Location: http://localhost/ELearning/InsufficientRights.php");
        exit();
    } elseif ($_SESSION['Actor'] == "S") {

        if (isset($_REQUEST)) {
            $qid = $_SESSION['qid'];
            $ans = $_REQUEST['ans'];
            $sid=$_SESSION['Sid'];
            $id= $_SESSION['Id'];
            $tid = $_REQUEST['tid'];
            $yans= $_REQUEST['ans'];
            $sql = mysql_query("SELECT * FROM mst_question where que_id=$qid");
            $row = mysql_fetch_array($sql);
            $tans=$row['true_ans'];
            $sql2 = mysql_query("SELECT * FROM mst_useranswer where que_id=$qid and Student_id=$sid");
            $c=$tans+3;
            $ans=$row[$c];
            
            echo "Session id: $id, Student Id : $sid, Test Id : $tid, Question Id : $qid,ans : $ans,my ans ;  $yans";
            
           // if ($row2 = mysql_fetch_array($sql2)) {
                //echo "Tid $tid";
                //$query = "UPDATE mst_test SET Test_Name='$tname',Total_Questions='$nq' WHERE Id='$tid'";
            //    $rs1 = mysql_query($query)or die("Could Not Perform the Query");
            //    echo "<center><h3 style='color:#000;'>Successfully created</h3></center>";
            //} else {
               // mysql_query("INSERT INTO `mst_useranswer`(`sess_id`, `Student_id`, `test_id`, `que_id`, `true_ans`, `your_ans`) VALUES ($id,$sid,$tid,$qid,$ans,$yans)", $cn) or die("error");
             //   echo "<center><h3 style='color:#000;'>Successfully created</h3></center>";
            //}
        }
        else {
    header("Location: http://localhost/ELearning/TestPage.php");
    exit();
    }
    }
    else {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
    }
} else {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
}
?>



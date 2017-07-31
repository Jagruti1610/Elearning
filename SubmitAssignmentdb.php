<?php

session_start();
if (isset($_SESSION['Sid']) == "") {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
} else {
    if (isset($_REQUEST['btn-upload'])) {
        //$pic = rand(1000,100000)."-".$_FILES['pic']['name'];
        $pic_loc = $_FILES['pic']['tmp_name'];

        $folder = "uploads/assignments/";
        $fld = "http://localhost/ELearning/uploads/assignments/";
        $name = $_FILES["pic"]["name"];
        $ext = end((explode(".", $name))); # extra () to prevent notice

        $sid = $_REQUEST["Subject"];
        $mod = $_REQUEST["Mod"];
        $stid = $_SESSION["Sid"];
        $id = $_REQUEST["id"];
        include("database.php");

        $pic = $stid . "-" . $sid . "-" . $mod . "." . $ext;
        $url = $fld . $pic;
       
        //echo "Subject Id : " . $sid . "<br> Module " . $mod . "<br> Student Id" . $sid . "<br>  Url " . $url;
        $qu = "SELECT * FROM `assignment` where Course_id=$sid and Module = $mod and Student_id=$stid;";
        $rt = mysql_query($qu)or die("Could Not Perform the Query");

        //echo "Subject Id : " . $sid . "<br> Module " . $mod . "<br> Faculty Id" . $fid . "<br>  Url " . $pic;

 $maxsize = 2097152;
        if (($_FILES['pic']['size'] >= $maxsize) || ($_FILES["pic"]["size"] == 0)) {
            header("Location: http://localhost/ELearning/FileSizeError.php?sub=$sid&mod=$mod");
            exit();
            
        } else {
            if ($u = mysql_fetch_array($rt)) {
                if ($_FILES['pic']['type'] == "application/pdf") {

                    if (file_exists("$folder.$pic")) {
                        unlink("$folder.$pic");
                    }
                    if (move_uploaded_file($pic_loc, $folder . $pic)) {
                        // echo $url;
                        $query = "UPDATE assignment SET `Url`='$url' where Course_id=$sid and Module = $mod and Student_id=$stid;";
                        $rs1 = mysql_query($query)or die("Could Not Perform the Query");
                        header("Location: http://localhost/ELearning/SuccessfullSubmission.php?sub=$sid&mod=$mod");
                        exit();
                    } else {
                        header("Location: http://localhost/ELearning/FileError.php");
                        exit();
                    }
                } else {
                    header("Location: http://localhost/ELearning/FileError.php");
                    exit();
                }
            } else {
                if ($_FILES['pic']['type'] == "application/pdf") {
                    if (file_exists("$folder.$pic")) {
                        unlink("$folder.$pic");
                    }

                    if (move_uploaded_file($pic_loc, $folder . $pic)) {
                        $query = "INSERT INTO `assignment`(`Student_id`, `Course_id`, `Module`, `url`) VALUES ('$stid','$sid','$mod','$url')";
                        $rs1 = mysql_query($query)or die("Could Not Perform the Query");
                        header("Location: http://localhost/ELearning/SuccessfulCreation.php");
                        exit();
                    } else {
                        header("Location: http://localhost/ELearning/FileError.php");
                        exit();
                    }
                } else {
                    header("Location: http://localhost/ELearning/FileError.php");
                    exit();
                }
            }
        }
    } else {
        header("Location: http://localhost/ELearning/EnrolledCourses.php");
        exit();
    }
}
?>
<?php

session_start();
if (isset($_SESSION['Sid']) == "") {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
} else {
    if (isset($_REQUEST['btn-upload'])) {
        //$pic = rand(1000,100000)."-".$_FILES['pic']['name'];
        $pic_loc = $_FILES['pic']['tmp_name'];

        $folder = "images/Profile/Student/";
        $fld = "http://localhost/ELearning/images/Profile/Student/";
        $name = $_FILES["pic"]["name"];
        $ext = end((explode(".", $name))); # extra () to prevent notice

        $sid = $_SESSION["Sid"];

        include("database.php");

        $pic = $sid . "." . $ext;
        $url = $fld . $pic;

        echo $_FILES['pic']['type'];
        $maxsize = 2097152;
        if (($_FILES['pic']['size'] >= $maxsize) || ($_FILES["pic"]["size"] == 0)) {
            header("Location: http://localhost/ELearning/FileSizeErrorp.php?sub=$sid&mod=$mod");
            exit();
        } else {
            $qu = "Select * from registration where Id=$sid";
            $rt = mysql_query($qu)or die("Could Not Perform the Query");


            if ($u = mysql_fetch_array($rt)) {
                //echo "Subject Id : " . $sid . "<br> Module " . $mod . "<br> Faculty Id" . $fid . "<br>  Url " . $pic;

                if ($_FILES['pic']['type'] == "image/jpeg" || $_FILES['pic']['type'] == "image/png" || $_FILES['pic']['type'] == "image/gif") {
                    if (file_exists("$folder.$pic")) {
                        unlink("$folder.$pic");
                    }

                    if (move_uploaded_file($pic_loc, $folder . $pic)) {
                        $query = "UPDATE registration SET `Profile`='$url' where id=$sid";
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
            } else {
                if ($_FILES['pic']['type'] == "image/jpeg" || $_FILES['pic']['type'] == "image/png" || $_FILES['pic']['type'] == "image/gif") {

                    if (file_exists("$folder.$pic")) {
                        unlink("$folder.$pic");
                    }
                    if (move_uploaded_file($pic_loc, $folder . $pic)) {
                        $query = "INSERT INTO `registration`(`Profile`) VALUES` ('$url') where id= $sid";
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
        header("Location: http://localhost/ELearning/SProfilepic.php");
        exit();
    }
}
?>
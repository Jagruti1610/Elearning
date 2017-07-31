<?php
session_start();
if ($_SESSION['Sid'] == "") {
    header("Location: http://localhost/ELearning/ErrorPage.php");
    exit();
}
else if (!empty($_REQUEST))
    {
    include 'database.php';
    $id = $_REQUEST['id'];
    $firstname = $_REQUEST['fname'];
    $lastname = $_REQUEST['lname'];
    $password = $_REQUEST['pwd'];
    $city = $_REQUEST['city'];
    $email = $_REQUEST['email'];
    $degree = $_REQUEST['degree'];
    $college = $_REQUEST['college'];
    
    
    
    //$rs = mysql_query("select * from registration where id='$editid'", $cn);
      mysql_query("UPDATE `registration` SET `First_Name`='$firstname',Last_Name='$lastname',Password='$password',City='$city',Email_Id='$email',Degree='$degree',College='$college' WHERE id='$id'") or die(mysql_error());
     header("Location: http://localhost/ELearning/Profile.php");
    exit();
      
    }
    else {
    header("Location: http://localhost/ELearning/Profile.php");
    exit();
}

?>

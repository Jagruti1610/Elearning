<?php
include 'database.php';
if (!empty($_REQUEST)) {
    
    $email = $_REQUEST['Id'];
    
    $rs = mysql_query("select * from Registration where Email_Id='$email'");
    if (mysql_num_rows($rs) > 0) {
        ?>
        <font color = "red" ><strong>Email id already exists</strong> </font> 
        <?php
    } else {
        ?>
        <font color="green" ><strong>Email id available for use</strong></font>
        <?php
    }
} else {
     header("Location: http://localhost/ELearning/Registration.php");
    exit();
}
?>


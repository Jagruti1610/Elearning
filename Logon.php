<html>
    <body>
        <?php
        if (!isset($_SESSION)) {
            $lifetime = strtotime('+60 minutes', 0);

            session_set_cookie_params($lifetime);
            session_start();
            $id = session_id();
            include_once 'database.php';
            if (isset($_POST) && !empty($_POST)) {
                $email = $_POST["luname"];
                $pword = $_POST["lpword"];

                $rs = mysql_query("select * from Registration where Email_id='$email' and password='$pword' ", $cn);
                if (mysql_num_rows($rs) < 1) {
                    header("Location: http://localhost/ELearning/InvalidCredentials.php");
                    exit();
                } else {
                    $row = mysql_fetch_row($rs);
                    $_SESSION['Id']=$id;
                    $_SESSION['Sid'] = $row[0];
                    $_SESSION['User_Name'] = $email;
                    $_SESSION['Actor'] = "S";
                    $_SESSION['Profile'] = $row[8];
                    $_SESSION['FirstName'] = $row[1];
                
                    //echo $_SESSION['User_Id'] . " ". $_SESSION['User_Name'] . " ". $_SESSION['Actor'] . " ".$_SESSION['Profile']." ". $_SESSION['FirstName'] ;
                    header("Location: http://localhost/ELearning/StudentHomePage.php");
                    exit();
                }
            } else {
                header("Location: http://localhost/ELearning/Registration.php");
                exit();
            }
        } else {
            header("Location: http://localhost/ELearning/StudentHomePage.php");
            exit();
        }
        ?>
    </body>
</html>
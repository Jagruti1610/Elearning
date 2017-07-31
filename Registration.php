<?php
session_start();
error_reporting(1);
if ($_SESSION['User_Name'] != "" && $_SESSION['Actor'] == "S") {
    header("Location: http://localhost/ELearning/StudentHomePage.php");
    exit();
} else {
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

                reqObj = null;
                reqObjEmail = null;
                reqObjCity = null;
                nameOk = true;
                lnameOk = true;
                emailIdOk = false;
                passOk = false;
                cityOk = false;
                clgOk = false;
                function checkFName()
                {
                    var Fname = document.getElementById("fname").value;
                    var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";
                    var count = 0;
                    for (var i = 0; i < Fname.length; i++)
                    {
                        if (isNaN(Fname[i]) !== true || iChars.indexOf(Fname.charAt(i)) !== -1 || Fname.length <= 2)
                        {
                            document.getElementById("FnameError").innerHTML = "First name cannot have numeric values or special characters and should have atleast 3 characters.";
                            nameOk = false;
                            count = count + 1;
                            break;
                        } else
                        {
                            document.getElementById("FnameError").innerHTML = "";
                            nameOk = true;
                            count = 0;
                        }
                    }
                    if (count === 0)
                        nameOk = true;
                }

                function checkLName()
                {
                    var Fname = document.getElementById("lname").value;
                    var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";
                    var count = 0;
                    for (var i = 0; i < Fname.length; i++)
                    {
                        if (isNaN(Fname[i]) !== true || iChars.indexOf(Fname.charAt(i)) !== -1 || Fname.length <= 2)
                        {
                            document.getElementById("LnameError").innerHTML = "Last name cannot have numeric values or special characters and should have atleast 3 characters.";
                            lnameOk = false;
                            count = count + 1;
                            break;
                        } else
                        {
                            document.getElementById("LnameError").innerHTML = "";
                            lnameOk = true;
                            count = 0;
                        }
                    }
                    if (count === 0)
                        lnameOk = true;
                }

                function checkCity()
                {
                    var Fname = document.getElementById("city").value;
                    var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";
                    var count = 0;
                    for (var i = 0; i < Fname.length; i++)
                    {
                        if (isNaN(Fname[i]) !== true || iChars.indexOf(Fname.charAt(i)) !== -1 || Fname.length <= 2)
                        {
                            document.getElementById("CityError").innerHTML = "City name cannot have numeric values or special characters and should have atleast 3 characters.";
                            cityOk = false;
                            count = count + 1;
                            break;
                        } else
                        {
                            document.getElementById("CityError").innerHTML = "";
                            cityOk = true;
                            count = 0;
                        }
                    }
                    if (count === 0)
                        cityOk = true;
                }


                function checkCollege()
                {
                    var Fname = document.getElementById("college").value;
                    var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";
                    var count = 0;
                    for (var i = 0; i < Fname.length; i++)
                    {
                        if (isNaN(Fname[i]) !== true || iChars.indexOf(Fname.charAt(i)) !== -1 || Fname.length <= 2)
                        {
                            document.getElementById("CollegeError").innerHTML = "College name cannot have numeric values or special characters and should have atleast 3 characters.";
                            clgOk = false;
                            count = count + 1;
                            break;
                        } else
                        {
                            document.getElementById("CollegeError").innerHTML = "";
                            clgOk = true;
                            count = 0;
                        }
                    }
                    if (count === 0)
                        clg = true;
                }


                function checkPassword()
                {
                    var password = document.getElementById("pword").value;

                    var cpassword = document.getElementById("cpword").value;

                   if (password.length === 0 || cpassword.length === 0)
                {
                    document.getElementById("PasswordError").innerHTML = "Required";
                    document.getElementById("ConfirmPasswordError").innerHTML = "Required";
                    passOk = false;
                }
                else if (password.length < 6)
                {
                    document.getElementById("PasswordError").innerHTML = "Password should be atleast 6 characters in length";
                    passOk = false;
                }
                else if ((password).localeCompare(cpassword) !== 0)
                {
                    document.getElementById("PasswordError").innerHTML = "";
                    document.getElementById("ConfirmPasswordError").innerHTML = "Doesn't match with password";
                    passOk = false;
                }
                else
                {
                    document.getElementById("PasswordError").innerHTML = "";
                    document.getElementById("ConfirmPasswordError").innerHTML = "";
                    passOk = true;
                }
                }


                function checkEmailId()
                {
                    var flag = false;
                    var email = document.getElementById("email").value;
                    if (email.indexOf("@") === -1 || email.indexOf("@") > email.lastIndexOf(".") || email.indexOf(".") === -1)
                    {
                        document.getElementById("EmailIdError").innerHTML = "Invalid Email Address";
                        flag = false;
                        emailIdOk = false;
                    } else
                    {
                        document.getElementById("EmailIdError").innerHTML = "";
                        flag = true;
                    }
                    if (flag === true)
                    {
                        document.getElementById("EmailIdError").innerHTML = "Checking";
                        emailIdOk = false;
                        if (window.XMLHttpRequest)
                        {
                            reqObjEmail = new XMLHttpRequest();
                        } else
                        {
                            reqObjEmail = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        reqObjEmail.onreadystatechange = processEmail;
                        reqObjEmail.open("POST", "./EmailIdAvailabilityChecking.php?Id=" + document.getElementById("email").value, true);
                        reqObjEmail.send(null);
                    }
                }

                function processEmail()
                {
                    if (reqObjEmail.readyState === 4 && reqObjEmail.status === 200)
                    {
                        document.getElementById("EmailIdError").innerHTML = reqObjEmail.responseText;
                        if (reqObjEmail.responseText.includes("red"))
                        {
                            emailIdOk = false;
                        } else
                        {
                            emailIdOk = true;
                        }
                    } else
                        emailIdOk = false;
                }



                function allClear()
                {
                    var validity = true;
                    if (lnameOk === false || nameOk === false || passOk === false || emailIdOk === false || cityOk === false || clgOk === false)
                    {
                        document.getElementById("AllOkValue").innerHTML = "There are errors in the form. Please correct them before proceeding.";
                        validity = false;
                    } else if (lnameOk === true && nameOk === true && passOk === true && emailIdOk === true && cityOk === true && clgOk === false)
                    {
                        document.getElementById("AllOkValue").innerHTML = "";
                        validity = true;
                    }
                    return validity;
                }
            </script>
            <script src="js/jquery-1.11.1.min.js"></script> 
            <script src="js/bootstrap.js"></script>
            <style>
                *,
                *:before,
                *:after {
                    box-sizing: border-box;
                }

                html {
                    overflow-y: scroll;
                }

                body {
                    background: #c1bdba;
                    font-family: 'Titillium Web', sans-serif;
                }

                a {
                    text-decoration: none;
                    color: #1ab188;
                    -webkit-transition: .5s ease;
                    transition: .5s ease;
                }
                a:hover {
                    color: #179b77;
                }

                .form {
                    background: rgba(19, 35, 47, 0.9);
                    padding: 40px;
                    max-width: 600px;
                    margin: 40px auto;
                    border-radius: 4px;
                    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
                }

                .tab-group {
                    list-style: none;
                    padding: 0;
                    margin: 0 0 40px 0;
                }
                .tab-group:after {
                    content: "";
                    display: table;
                    clear: both;
                }
                .tab-group li a {
                    display: block;
                    text-decoration: none;
                    padding: 15px;
                    background: rgba(160, 179, 176, 0.25);
                    color: #a0b3b0;
                    font-size: 20px;
                    float: left;
                    width: 50%;
                    text-align: center;
                    cursor: pointer;
                    -webkit-transition: .5s ease;
                    transition: .5s ease;
                }
                .tab-group li a:hover {
                    background: #179b77;
                    color: #ffffff;
                }
                .tab-group .active a {
                    background: #1ab188;
                    color: #ffffff;
                }

                .tab-content > div:last-child {
                    display: none;
                }

                h1 {
                    text-align: center;
                    color: #ffffff;
                    font-weight: 300;
                    margin: 0 0 40px;
                }

                label {
                    position: absolute;
                    -webkit-transform: translateY(6px);
                    transform: translateY(6px);
                    left: 13px;
                    color: rgba(255, 255, 255, 0.5);
                    -webkit-transition: all 0.25s ease;
                    transition: all 0.25s ease;
                    -webkit-backface-visibility: hidden;
                    pointer-events: none;
                    font-size: 22px;
                }
                label .req {
                    margin: 2px;
                    color: #1ab188;
                }

                label.active {
                    -webkit-transform: translateY(50px);
                    transform: translateY(50px);
                    left: 2px;
                    font-size: 14px;
                }
                label.active .req {
                    opacity: 0;
                }

                label.highlight {
                    color: #ffffff;
                }

                input,
                textarea {
                    font-size: 22px;
                    display: block;
                    width: 100%;
                    height: 100%;
                    padding: 5px 10px;
                    background: none;
                    background-image: none;
                    border: 1px solid #a0b3b0;
                    color: #ffffff;
                    border-radius: 0;
                    -webkit-transition: border-color .25s ease, box-shadow .25s ease;
                    transition: border-color .25s ease, box-shadow .25s ease;
                }
                input:focus,
                textarea:focus {
                    outline: 0;
                    border-color: #1ab188;
                }

                textarea {
                    border: 2px solid #a0b3b0;
                    resize: vertical;
                }

                .field-wrap {
                    position: relative;
                    margin-bottom: 40px;
                }

                .top-row:after {
                    content: "";
                    display: table;
                    clear: both;
                }
                .top-row > div {
                    float: left;
                    width: 48%;
                    margin-right: 4%;
                }
                .top-row > div:last-child {
                    margin: 0;
                }
                .dropdown
                {
                    color: #a0b3b0;
                    font-size: 22px;
                    font-weight: bold;
                    display: block;
                    width: 100%;
                    height: 100%;
                    padding: 5px 10px;
                    background: none;
                    background-image: none;
                    border: 1px solid #a0b3b0;
                }

                .button {
                    border: 0;
                    outline: none;
                    border-radius: 0;
                    padding: 15px 0;
                    font-size: 2rem;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: .1em;
                    background: #1ab188;
                    color: #ffffff;
                    -webkit-transition: all 0.5s ease;
                    transition: all 0.5s ease;
                    -webkit-appearance: none;
                }
                .button:hover, .button:focus {
                    background: #179b77;
                }

                .button-block {
                    display: block;
                    width: 100%;
                }

                .op{
                    color:#fff;
                    background-color: rgba(19, 35, 47, 0.9);
                    font-weight: bold;
                }

                .forgot {
                    margin-top: -20px;
                    text-align: right;
                }

                .error{
                    color: red;
                    width: 100%;
                    padding-bottom: 2%;
                    -webkit-transform: translateY(40px);
                    transform: translateY(40px);
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
                                <li><a href="Registration.php" class="active">Student</a></li>
                                <li><a href="http://localhost/ELearning/Faculty/FacultyRegistrationForm.php" >Faculty</a></li>
                                <li><a href="http://localhost/ELearning/CViewCourses.php" >Courses</a></li>
                                <li><a href="http://localhost/ELearning/cContact.php" >Contact</a></li>
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

            <div class="container">


                <div class="form">

                    <ul class="tab-group">
                        <li class="tab active"><a href="#signup">Sign Up</a></li>
                        <li class="tab"><a href="#login">Log In</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="signup">   
                            <h1>Sign Up for Free</h1>

                            <form action="RegisterUser.php" method="post">


                                <div class="field-wrap">
                                    <label>
                                        First Name<span class="req">*</span>
                                    </label>
                                    <input type="text" required autocomplete="off" id="fname" name="fname" onblur="checkFName()"/>
                                    <div id='FnameError' class="error"></div>
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Last Name<span class="req">*</span>
                                    </label>
                                    <input type="text"required autocomplete="off" id="lname" name="lname" onblur="checkLName()"/>
                                    <div id='LnameError' class="error"></div>
                                </div>



                                <div class="field-wrap">
                                    <label>
                                        Email Address<span class="req">*</span>
                                    </label>
                                    <input type="email" required autocomplete="off" id="email" name="email" onblur="checkEmailId()"/>
                                    <div id='EmailIdError' class="error"></div>
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Set A Password<span class="req">*</span>
                                    </label>
                                    <input type="password" required autocomplete="off" id="pword" name="pword" onblur="checkPassword()"/>
                                    <div id='PasswordError' class="error"></div>
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Confirm Password<span class="req">*</span>
                                    </label>
                                    <input type="password" required autocomplete="off" id="cpword" name="cpword" onblur="checkPassword()" />
                                    <div id='ConfirmPasswordError' class="error"></div>
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Name of College<span class="req">*</span>
                                    </label>
                                    <input type="text" required autocomplete="off" id="college" name="college" onblur="checkCollege()"/>
                                    <div id='CollegeError' class="error"></div>
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        City<span class="req">*</span>
                                    </label>
                                    <input type="text" required autocomplete="off" id="city" name="city" onblur="checkCity()"/>
                                    <div id='CityError' class="error"></div>
                                </div>

                                <div class="field-wrap">
                                    <select id="degree" class="dropdown" size="1" required name="degree">
                                        <?php
                                        include 'database.php';
                                        $sql = mysql_query("Select * from degree");
                                        while ($rw = mysql_fetch_array($sql)) {
                                            echo "<option value='$rw[1]' class='op'>$rw[1]</option>";
                                        }
                                        ?>

                                    </select>
                                </div>

                                <div>
                                    <button type="submit" class="button button-block" onclick="return allClear();"/>Get Started</button>
                                    <div id='AllOkValue' class="error"></div>
                                </div>

                            </form>

                        </div>

                        <div id="login">   
                            <h1>Welcome Back!</h1>

                            <form action="Logon.php" method="post">

                                <div class="field-wrap">
                                    <label>
                                        Email Address<span class="req">*</span>
                                    </label>
                                    <input type="email" id="luname" name="luname" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Password<span class="req">*</span>
                                    </label>
                                    <input type="password" id="lpword" name="lpword" required autocomplete="off" />
                                </div>

                                <button type="submit" class="button button-block" />Log In</button>

                            </form>

                        </div>

                    </div> <!-- /form -->


                </div>
                <script src="js/jquery-1.12.0.js"></script>
                <script>
                                        $('.form').find('input, textarea').on('keyup blur focus', function (e) {

                                            var $this = $(this),
                                                    label = $this.prev('label');

                                            if (e.type === 'keyup') {
                                                if ($this.val() === '') {
                                                    label.removeClass('active highlight');
                                                } else {
                                                    label.addClass('active highlight');
                                                }
                                            } else if (e.type === 'blur') {
                                                if ($this.val() === '') {
                                                    label.removeClass('active highlight');
                                                } else {
                                                    label.removeClass('highlight');
                                                }
                                            } else if (e.type === 'focus') {

                                                if ($this.val() === '') {
                                                    label.removeClass('highlight');
                                                } else if ($this.val() !== '') {
                                                    label.addClass('highlight');
                                                }
                                            }

                                        });

                                        $('.tab a').on('click', function (e) {

                                            e.preventDefault();

                                            $(this).parent().addClass('active');
                                            $(this).parent().siblings().removeClass('active');

                                            target = $(this).attr('href');

                                            $('.tab-content > div').not(target).hide();

                                            $(target).fadeIn(600);

                                        });
                                        $('.tab a').on('click', function (e) {

                                            e.preventDefault();

                                            $(this).parent().addClass('active');
                                            $(this).parent().siblings().removeClass('active');

                                            target = $(this).attr('href');

                                            $('.tab-content > div').not(target).hide();

                                            $(target).fadeIn(600);

                                        });
                </script>
            </div>
            <!--footer-->
            <div class="footer">

                <div class="copy animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <p>© 2017 . All Rights Reserved .  </p>
                </div>

            </div>
            <!--footer-->		
        </body>
    </html>



<?php }
?>



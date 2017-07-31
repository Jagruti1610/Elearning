<!DOCTYPE html>
<html lang="en">

    <head>
	<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Form Validation Using jQuery and PHP | Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Form Validation Using jQuery and PHP" />
        <meta name="keywords" content="jQuery, HTML, PHP, Form Validation, Ajax Form Validation" />
        <meta name="author" content="DesignHuntR" />
        <link rel="stylesheet"  type="text/css" href="style.css" />
	
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
    </head>
    <body>

<?php

// If the form was submitted, scrub the input (server-side validation)
// see below in the html for the client-side validation using jQuery

$name = '';
$gender = '';
$address = '';
$email = '';
$username = '';
$password = '';
$output = '';

if($_POST) {
  // collect all input and trim to remove leading and trailing whitespaces
  $name = trim($_POST['name']);
  $gender = trim($_POST['gender']);
  $address = trim($_POST['address']);
  $email = trim($_POST['email']);
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  
  $errors = array();
  
  // Validate the input
  if (strlen($name) == 0)
    array_push($errors, "Please enter your name");

  if (!(strcmp($gender, "Male") || strcmp($gender, "Female") || strcmp($gender, "Other"))) 
    array_push($errors, "Please specify your gender");
  
  if (strlen($address) == 0) 
    array_push($errors, "Please specify your address");
    
  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    array_push($errors, "Please specify a valid email address");
    
  if (strlen($username) == 0)
    array_push($errors, "Please enter a valid username");
    
  if (strlen($password) < 5)
    array_push($errors, "Please enter a password. Passwords must contain at least 5 characters.");
    
  // If no errors were found, proceed with storing the user input
  if (count($errors) == 0) {
    array_push($errors, "No Errors! Form Sumbitted Successfully!.. Thanks!");
  }
  
  //Prepare errors for output
  $output = '';
  foreach($errors as $val) {
    $output .= "<div class='output'>$val</div>";
  }
  
}

?>
<body>
<h1>Form Validation Using jQuery and PHP | Demo</h1>


  <!--  The form that will be parsed by jQuery before submit  -->
  <div class="layout">
  <form action="./" method="post" id="register-form" novalidate="novalidate" >
  
    <div class="label">Name</div><input type="text" id="name" name="name" value="<? echo $name; ?>" /><br />
    <div class="label">Gender</div><select id="gender" name="gender" />
                                      <option value="Female">Female</option>
                                      <option value="Male">Male</option>
                                      <option value="Other">Other</option>
                                   </select><br />
    <div class="label">Address</div><input type="text" id="address" name="address" value="<? echo $address; ?>" /><br />
    <div class="label">Email</div><input type="text" id="email" name="email" value="<? echo $email; ?>" /><br />
    <div class="label">Username</div><input type="text" id="username" name="username" value="<? echo $username; ?>" /><br />
    <div class="label">Password</div><input type="password" id="password" name="password" /><br />
    <div style="margin-left:140px;"><input type="submit" name="submit" value="Submit" /></div>
    
  </form>
<?php echo $output; ?>
</div>

<!-- jQuery Form Validation code -->
  <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#register-form").validate({
    
        // Specify the validation rules
        rules: {
            name: "required",
            gender: "required",
            address: "required",
            email: {
                required: true,
                email: true
            },
            username: "required",
            password: {
                required: true,
                minlength: 5
            }
        },
        
        // Specify the validation error messages
        messages: {
            name: "Please enter your name",
            gender: "Please specify your gender",
            address: "Please enter your address",
            email: "Please enter a valid email address",
            username: "Please enter a valid username",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            }
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
  </body>
  </html>


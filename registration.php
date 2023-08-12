<?php
// Include config file to create connection
require_once "config.php";
// Define variables with empty values
$username = $password = $confirm_password = $name= $surname= "";
$username_err = $password_err = $confirm_password_err = $options= $phonenumber = "";
?>
<!DOCTYPE html>
<HTML> <HEAD> <TITLE>Registration</TITLE>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</HEAD>
<BODY class="is-preload">
<div id="wrapper">
    <div id="main">
        <div class="inner">
<h1>Please input your data to create account</h1>
<section>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
            <input type="text" name="name" placeholder="First Name" value="<?php echo $name; ?>" />
                </div>
                <div class="col-6 col-12-xsmall">
            <input type="text" name="surname" placeholder="Last Name" value="<?php echo $surname; ?>"/>
                </div>

<div class="col-6 col-12-xsmall">
    <input type="text" name="phonenumber" placeholder="Phone number (+7)" value="<?php echo $phonenumber; ?>"/>
</div>
<div class="col-6 col-12-xsmall">
    <input type="text" name="options" placeholder="Email or Instagram" value="<?php echo $options; ?>" />
</div>
<div class="col-6 col-12-xsmall">
    <input type="text" placeholder="Username" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
    <span class="invalid-feedback"><?php echo $username_err; ?></span>
</div>
<div class="col-12">
Password:<input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
</div>
<div class="col-12">
Confirm Password: <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
</div>
<div class="col-12">
<input type="submit" name="submit" value="submit" />
</div>

<div class="col-12">
<input type="reset" name="reset" value="reset" />
</div>

<div class="col-6 col-12-xsmall">
Already have an account? <a href="login.php">Log in here</a>
</div>
<h2><a href="index.php">HOME</a></h2>
</div>
</FORM>
</section>
</BODY>
<?php
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["name"]))){
        echo "Please enter your name.";
    } else{

    }
    if(empty(trim($_POST["surname"]))){
        echo "Please enter your surname.";
    } else{

    }
    if(empty(trim($_POST["options"]))){
        echo "Please enter your Email/Instagram handle.";
    } else{

    }
    if(empty(trim($_POST["phonenumber"]))){
        echo "Please enter your phonenumber.";
    } elseif(strlen(trim($_POST["phonenumber"])) < 10 && strlen(trim($_POST["phonenumber"])) < 11){
        echo "Please enter valid phonenumber.";
    } else{

    }
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                    echo "This username is already taken! Please enter another one.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have at least 6 characters.";
        echo "Password must have at least 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
        echo "Please confirm password";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
            echo "Passwords did not match!";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, name, surname, options, phonenumber) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $param_password, 
$name, $surname, $options, $phonenumber);
            
            // Set parameters
            $param_username = $username;
            // Creates a password hash
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
        // Set other parameters
        $name = trim($_POST["name"]);
        $surname =trim($_POST["surname"]);
        $options = trim($_POST["options"]);
        $phonenumber = trim($_POST["phonenumber"]);        
        // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?> </html>
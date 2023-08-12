<?php
// Include config file
require_once "config.php";
// Define variables and initialize with empty values
$planlevel = $planhours = $planstatus = $planname="";
?>
<!DOCTYPE html>
<HTML> <HEAD> <TITLE>Creating new study plan</TITLE>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</HEAD>
<BODY class="is-preload">
<h1>Create new study plan</h1>
<div id="wrapper">
    <div id="main">
        <div class="inner">
<h1>Please input details of new study plan</h1>
<div class="col-6 col-12-xsmall">
        <a href="admin.php" class="btn btn-danger ml-3">Back to Admin Page</a>
    </div> <br>
<section>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
            <input type="text" name="planname" placeholder="Name of the Plan" value="<?php echo $planname; ?>" />
                </div>
                <div class="col-6 col-12-xsmall">
            <input type="text" name="planlevel" placeholder="Level of the Plan" value="<?php echo $planlevel; ?>"/>
                </div>

<div class="col-6 col-12-xsmall">
    <input type="text" name="planhours" placeholder="Hours required to complete study plan" value="<?php echo $planhours; ?>"/>
</div>
<div class="col-6 col-12-xsmall">
    <input type="text" name="planstatus" placeholder="Approved or Not approved" value="<?php echo $planstatus; ?>" />
</div>
<div class="col-12">
<input type="submit" name="submit" value="submit" />
</div>

<div class="col-12">
<input type="reset" name="reset" value="reset" />
</div>

<div class="col-6 col-12-xsmall">
Want to see full list of study plans? <a href="splans.php">Go Here</a>
</div>
<h2><a href="index.php">HOME</a></h2>
</div>
</FORM>
</section>
</BODY>
<?php
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Prepare an insert statement
        $sql = "INSERT INTO splans (planname, planlevel, planhours, planstatus) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $planname, $planlevel, 
$planhours, $planstatus);
        // Set other parameters
        $planname = trim($_POST["planname"]);
        $planlevel =trim($_POST["planlevel"]);
        $planhours = trim($_POST["planhours"]);
        $planstatus = trim($_POST["planstatus"]);        
        // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: splans.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
?> </html>
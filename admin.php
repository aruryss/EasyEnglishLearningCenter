<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<BODY class="is-preload">
<div id="wrapper">
    <div id="main">
        <div class="inner">  <section>
        <h1 class="my-5">Hi, Admin. Welcome to ORange statistics!</h1>
    <div class="col-6 col-12-xsmall">
    <a href="reset-password.php" class="btn btn-warning">Reset Admin Password </a> 
    </div> <br>
    <div class="col-6 col-12-xsmall">
    <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
    </div> <br>
        <div class="col-6 col-12-xsmall">
    <a href="newsplans.php" class="btn btn-warning">Create a new study plan</a> 
    </div> <br>
    <div class="col-6 col-12-xsmall">
    <a href="splans.php" class="btn btn-warning">All study plans</a> 
    </div> <br>
    <div class="col-6 col-12-xsmall">
    <a href="studentcourse.php" class="btn btn-danger ml-3">All students attending courses</a>
    </div> <br>
    <h2><a href="index.php">HOME</a></h2>
</div> </div> </div> </section>
</body>
</html>
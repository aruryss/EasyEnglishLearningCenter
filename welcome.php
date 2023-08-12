<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$id =$_SESSION["id"];
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<BODY class="is-preload">
<div id="wrapper">
    <div id="main">
        <div class="inner">  <section>
        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>! Welcome to your Easy English account :)</h1>
    <div class="col-6 col-12-xsmall">
    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a> 
    </div>
    <div class="col-6 col-12-xsmall">
    <a href="logout.php" class="btn btn-danger ml-3">Sign out</a>
    </div> <hr />
    <h2>Courses you are currently attending</h2>
<div class="table-wrapper">
    <?php 
require_once "config.php";
$sql = "SELECT courses.courseid, users.name , users.surname,  splans.planname , splans.planlevel, splans.planhours
FROM (( courses INNER JOIN users ON users.id = courses.id) INNER JOIN splans ON splans.planid = courses.planid) WHERE users.id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Course ID</th><th>Student's Name</th><th>Course Name</th><th>Course Level</th><th>Required Hours</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["courseid"]. "</td><td>" . $row["name"]. " " . $row["surname"] . "</td><td> " . $row["planname"]. "</td><td>" . $row["planlevel"]. "</td><td>" . $row["planhours"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "You are not attending any courses";
}
$conn->close();
?>
</div>
<hr />
<h3>You need to <a href="">take an online test</a> in order to attend a lesson</h3>
<p>We need to know you level as for right now to create personalized study plan to support you throughout your language learning journey.</p>
<ul class="actions fit">
    <li><a href="courses.php" class="button primary fit">Book a Course</a></li>
    <li><a href="futurecourses.php" class="button primary fit">see upcoming courses</a></li>
</ul>
<hr />
<a href="index.php" class="button primary fit">Home</a>
</div> </div> </div> </section>
</body>
</html>
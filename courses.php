<!DOCTYPE HTML>
<?php
require_once "config.php";
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$con=mysqli_connect('localhost','root','','assel-eng');
$planid = "";
?> 
<html>
	<head>
		<title>Easy English with Assel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="images/orange.svg" alt="ORANGE English learning centre" /></span><span class="title">Easy English with Assel</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="welcome.php">Account</a></li>
							<li><a href="courses.php">Available courses</a></li>
							<li><a href="studyplans.php">Future courses</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1> Available courses </h1>
								<p>Hi, there! My name is Assel and I am founder of Easy English and a huge fan of my job! I am eager to help you pursue new horizon of English language and share my knowledge and tips! These are the courses we offer!</p>
								<h2> Let's find right course for you, <b> <?php echo htmlspecialchars($_SESSION["username"]) ?> </b></h2>
							</header>
							<div class="box alt"> <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
										<div class="row gtr-uniform">
											<div class="col-4" id="1"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span>
												<div class="row"><p>English 101</p></div>
												<div class="row"><form id="1"><div class="col-6 col-12-medium"><input type="submit" name="add1" value="Add English 101" /></div>
											</div> </div>
											<div class="col-4" id="2"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span>
												<div class="row"><p>English with Emily in Paris</p></div>
													<div class="row"><div class="col-6 col-12-medium"><input type="submit" name="add2" value="Add Emily in Paris" /></div>
											</div></div>
											<div class="col-4" id="3"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span>
												<div class="row"><p>Speaking Session</p></div>
													<div class="row"><div class="col-6 col-12-medium"><input type="submit" name="add3" value="Add Speaking session" /></div>
											</div></div>
											<div class="col-4" id="4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span>
												<div class="row"><p>IELTS Preparation</p></div>
													<div class="row"><div class="col-6 col-12-medium"><input type="submit" name="add4" value="Add IELTS Preparation" /></div>
											</div></div>
											<div class="col-4" id="5"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span>
												<div class="row"><p>SAT Reading section Preparation</p></div>
													<div class="row"><div class="col-6 col-12-medium"><input type="submit" name="add5" value="Add SAT reading" /></div>
											</div></div>
											<div class="col-4" id="6"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span>
												<div class="row"><p>some course</p></div>
													<div class="row"><div class="col-6 col-12-medium"><input type="submit" name="add6" value="Add some course" /></div>
											</div></div>
							</form></div>
														<section class="tiles">
								<article class="style3">
									<span class="image">
										<img src="images/pic07.jpg" alt="" />
									</span>
									<a href="futurecourses.php">
										<h2>Future courses</h2>
										<div class="content">
											<p>We are constantly updating our courses <br> Come and seen what's new!</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic08.jpg" alt="" />
									</span>
									<a href="reviews.php">
										<h2>Our clients</h2>
										<div class="content">
											<p>View feedback from our current and past students!</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="images/pic09.jpg" alt="" />
									</span>
									<a href="about.php">
										<h2>About us</h2>
										<div class="content">
											<p>Get to know our founder Assel and her journey!</p>
										</div>
									</a>
								</article>
									</a>
								</article>
							</section>
						</div>
						</div>
									<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<div class = "box alt">
								<h2>Get in touch</h2>
									<div class="fields">
										<div class="field half">
											Whatsapp: +7 707 722 2409 
										</div>
										<div class="field half">
											Instagram: easyenglish_assel							
										</div>
										<div class="field">
										Address: Office 211, BC Arnur, Abay 102, Semey, Kazakhstan
										</div>
									</div>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul> </div>
							</section>
							
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if (isset($_POST['add1'])) {
$planid = "1";
	} 	else if (isset($_POST['add2'])) {
$planid = "2";
	} 	else if (isset($_POST['add3'])) {
$planid = "3";
	} 	else if (isset($_POST['add4'])) {
$planid = "4";
	} 	else if (isset($_POST['add5'])) {
$planid = "5";
	} 	else if (isset($_POST['add6'])) {
$planid = "6";
	} 
else {
	}
       // Prepare an insert statement
        $sql = "INSERT INTO courses (id, planid) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $id, $splanid);
            $id =$_SESSION["id"];
            $splanid = $planid;
        // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                echo '<script>alert("You successfully booked a course! See you Account page!")</script>';
            } else{
                echo '<script>alert("Oops! Could not register you for the course.")</script>';
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    // Close connection
    mysqli_close($link);
?>
</html>
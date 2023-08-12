<!DOCTYPE HTML>
<?php
$con=mysqli_connect('localhost','root','','assel-eng'); 
if(!$con){
	echo mysqli_error($con);

}else{
	
}
?> 
<html>
	<head>
		<title>Easy English language learning centre</title>
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
							<li><a href="splans.php">Future courses</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1> Easy English with Assel is an English learnining centre that provides a varienty of <a href="courses.php">COURSES</a>.</h1>
								<p>Hi, there! My name is Assel and I am founder of ORange centre and a huge fan of my job! I am eager to help you pursue new horizon of English language and share my knowledge and tips!</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="aboutlevels.php">
										<h2>Beginner</h2>
										<div class="content">
											<p>If you are completely new to the language</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="aboutlevels.php">
										<h2>Elementary</h2>
										<div class="content">
											<p>If you know the basics and can use simple phrases</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="futurecourses.php">
										<h2>future courses</h2>
										<div class="content">
											<p>We are constantly updating our courses <br> Come and seen what's new!</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="aboutlevels.php">
										<h2>Pre-Intermediate</h2>
										<div class="content">
											<p>If you can understand the context and everyday conversations with some difficulties</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<a href="aboutlevels.php">
										<h2>Intermediate</h2>
										<div class="content">
											<p>If you can speak the language with difficulty and limited vocabulary</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<a href="aboutlevels.php">
										<h2>upper-intermediate</h2>
										<div class="content">
											<p>If you can use the language freely in your daily routine and be descriptive</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic07.jpg" alt="" />
									</span>
									<a href="tipsandtricks.php">
										<h2>tips and tricks</h2>
										<div class="content">
											<p>Some tips to learn English lanuage</p>
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
									<a href="aboutus.php">
										<h2>About ORange</h2>
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
									<li><a href="https://www.instagram.com/aseka_love_elt/" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://wa.me/77077222409?text=I'm%20interested%20in%20your%20English%20language%20courses" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
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
</html>
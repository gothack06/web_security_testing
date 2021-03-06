<?php
include('lock.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>KnowledgeHUB</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
						#banner{
				background-image: url('images/bkgd.jpg');
			}
			</style>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="website.php">Knowledge<span>HUB</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
                    <li><a href="website.php">Home</a></li>
					<li><a href="courses.php">Courses</a></li>
                    <li><a href="faculty.php">Faculty</a></li>
					<li><a href="books.php">Study Material</a></li>
					<li><a href='dashboard.php'><?php echo $login_session;?></a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<section id="banner">
				<div class="inner">
					<header>
						<h1>This is <span style="color:#258cd1">Study</span>PORTAL</h1>
						<p>An integrated online study forum<br />that provides its users with excellent study environment</p>
					</header>
					<a href="#main" class="button big scrolly">Learn More</a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<img src="images/web3.jpg" alt="" height="340px" width="340px"/>
										</div>
									</div>
									<div class="col col2">
										<h3>Great Courses</h3>
										<p>We keep in mind that our students get variety in options regarding the content they want to see, because in today's fast paced world just one or two courses are not enough.</p>
										<p>Students often get confused over what they really want to do. Well, here you can giveup on this tension and enjoy studying because here we provide our users with courses that are on top priority in today's market.</p>

									</div>
								</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style2">
						<div class="inner">
							<div class="flex flex-2">
								<div class="col col2">
									<h3>Excellent Faculty</h3>
									<p>We understand that every child is special and that the learning rate of each one of you is different. Thus, we bring you top class faculty from each field of intrest with excellent track record and high teaching experience.</p>
								</div>
								<div class="col col1 first">
									<div class="image round fit">
										<img src="images/web4.jpg" alt="" height="340px" width="340px"/>
									</div>
								</div>
							</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<header class="align-center">
								<h2>Benifits</h2>
							</header>
							<div class="flex flex-3">
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/web6.jpg" alt="" height="340px" width="340px"/>
									</div>
									<h3>Courses</h3>
									<p>Excellent and updated content.</p>
									<a href="courses.php" class="button">Learn More</a>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/web5.jpg" alt="" height="340px" width="340px"/>
									</div>
									<h3>Faculty</h3>
									<p>Best in every field.</p>
									<a href="faculty.php" class="button">Learn More</a>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/web7.jpg" alt="" height="340px" width="340px"/>
									</div>
									<h3>Study Material</h3>
									<p>One book that clears all doubts.</p>
									<a href="books.php" class="button">Learn More</a>
								</div>
							</div>
						</div>
					</section>

			</div>
			
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
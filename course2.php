<?php
include('lock.php');
?>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>StudyPORTAL | Courses</title>
        <link rel="stylesheet" type="text/css" href="courses.css" />
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<h1><a href="courses.php">Courses</a></h1>
				</div>
				<div id="menu">
					<ul>
						<li class="first"><a href="course1.php" >Course 1</a></li>
						<li><a href="course2.php" class="active">Course 2</a></li>
						<li><a href="course3.php">Course 3</a></li>
						<li><a href="course4.php">Course 4</a></li>
						<li class="last"><a href="course5.php">Course 5</a></li>
					</ul>					<br class="clearfix" />
				</div>
			</div>
			<div id="splash">
				<img src="images/courses1.jpg" width="930" height="230" alt="" />
			</div>
			<div id="page">
				<div id="content">
					<div class="post">
                        <h2>Course 2</h2><br/>
                        <h3>Below is the week by week content of the course</h3>

                    </div>
                    <main>
                            <p>Detailed introduction of the subject will be given. The purpose and aim of the project is explained to the student.</p>
                            <p>Several examples are highlighted to the students so that they understand the reach of the subject.</p>
                            <p>Practical knowledge is given to the students so that they can adhere to the applications of the subject in day to day life.</p>
                            <p>The course is wrapped up and proparly summarized so that the students retain the knowledge thet gained through this course.</p>
                          </main>
                          <br/>
                    <div class="post"></div>
					<iframe src="comment_c2.php" width="100%" height="80%"></iframe>
                        </div>
</div>
			</div>
		</div>
		<div id="footer">
                </div>
    <script src="course.js"></script>            
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>English Learning - English Learning Website </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
	?>
	<?php
		$query = "SELECT * FROM subject LIMIT 1";
		$result = mysqli_query($strconn,$query);
		/*if($result)
		{
			echo "Sucess";
		}
		else{
			echo "failed";
		}*/
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Skills</h1>
				</div>
			</div>
		</div>
	</header>
	<div id="courses">
		<section class="container">
			<h2>Available Courses</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="reading.php">
						<i class="fa fa-book fa-2x "></i>
						<div class="text">
							<h3>READING</h3>
							Here you can find activities  to practise your reading skills. Reading will help you to improve your understanding of the language and build your vocabulary.
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="writing.php">
						<i class="fa fa-edit fa-2x "></i>
						<div class="text">
							<h3>WRITING</h3>
							Here you can find  activities to practise your writing  skills. You can improve your writing by understanding model texts and how they're structured.
						</div>
					</a>
					</div>
				</div>
			
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="grammar.php">
						<i class="fa fa-cogs fa-2x "></i>
						<div class="text">
							<h3>GRAMMAR</h3>
							Practise your English grammar with clear grammar explanations and practice exercises to test your understanding. All learners, whatever their level, have questions and doubts about grammar as they're learning English and this guide helps to explain the verb tenses and grammar rules in a clear and simple way.
						</div>
					</a>
					</div>
				</div>
				
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="listening.php">
						<i class="fa fa-headphones fa-2x "></i>
						<div class="text">
							<h3>LISTENING</h3>
							Here you can find activities to practise your listening skills. Listening will help you to improve your understanding of the language and your pronunciation.
						</div>
					</a>
					</div>
				</div>

			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="speaking.php">
						<i class="fa fa-microphone fa-2x "></i>
						<div class="text">
							<h3>SPEAKING</h3>
							Here you can find activities to practise your speaking skills. You can improve your speaking by noticing the language we use in different situations and practising useful phrases.
						</div>
					</a>
					</div>
				</div>
				<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="../download/index.php">
						<i class="fa fa-cogs fa-2x "></i>
						<div class="text">
							<h3>Download Books</h3>
							IF you want get  some free E-Book.
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="Vocabulary.php">
						<i class="fa fa-edit fa-2x fa-spin"></i>
						<div class="text">
							<h3>Vocabulary</h3>
							Here you can find  activities to practise your Vocabulary  skills. You can improve your writing by understanding model texts and how they're structured.
						</div>
					</a>
					</div>
				</div>
				<?php
				while($row = mysqli_fetch_array($result))
				{
					echo '<div class="col-md-4">';
					echo '<div class="featured-box">';
					echo '<a href="new.php">';
					echo '<i class="fa fa-leaf fa-2x"></i>';
					echo '<div class="text">';
					echo '<h3>'.$row[0].'</h3>';
					echo $row[1];
					echo '</div>';
					echo '</a>';
					echo '</div>';
					echo '</div>';
				}
				?>
			</div>
		</section>
	</div>
	<?php
		include "footer.php";
	?>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>

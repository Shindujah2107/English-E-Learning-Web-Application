<html>
<head>
	<meta charset="utf-8">
	<title>English Learning - English Learning Website</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
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
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Reading Exercise</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
				<h1>Read the Text...</h1><br>
					<p><h2> Dictionary definitions</h2>
						<br>attend(v)<br>to officially go to a place, like a school, university or classYou must attend 80 per cent of classes to pass the course.<br><br>dormitorypluraldormitories(n)1.<br> a place where many people sleep2. US: a big building at a university where students live (UK: hall of residence) I know John. He lives in my dorm at university.<br><br>facultypluralfaculties (n)<br>all the teachers who work at a universityNorman Brown was in the English faculty for twenty years.<br><br>teaching assistant (n)<br>a person who works to help a university teacher in a classroomThe teaching assistant has the exams for you at the end of class.<br><br>tuition fee (n) <br>an amount of money that you pay to go to universityTuition fees are very high this year.<br><br>undergraduate(n)<br>A student at a college or university who is studying for a first degreeThey met when they were undergraduates at Cambridge University</p>


				

<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next question.</h1>
					<h3><label>1)It’s a small .................................... – we only have twelve teachers</label></h3>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">faculty</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">undergraduate</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">attend</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="d">teaching assistant</label>
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
						echo "<div class='alert alert-success' role='alert'>Correct Answer</div>";echo '<a href="b17.php" class="btn">Next>></a>';

			//echo 'true';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
			echo '<a href="b17.php" class="btn">Next>></a>';
		}
	}
?>
			</div>
			<div class="col-md-2 col-md-pull-9" style="margin-top:10px;">
				<?php include "sidebar.php"; ?>
			</div>
		</div>
	</div>

	<?php
		include "footer.php";
	?>
</body>
</html>
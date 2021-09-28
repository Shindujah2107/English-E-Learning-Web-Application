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
				<h1>Reading Text...</h1><br>
					<p><h2>Job adverts</h2>
					 Do you like cars? Are you friendly and do you like chatting with people? Would you like to make £200 a day selling cars? If you answered yes to the above questions, we’d like you to be on our team! (Driving licence required.)CompanyMotor Ground is a car sales company that buys and sells used cars.LocationChennai, India<br><hr>We’re looking for a marketing manager to manage an international team. Ability to speak English necessary. Salary is £50,000 a year.CompanyGroovy is a German clothes company that has shops in countries across Europe.Location Munich, Germany<br><hr>French teacher wanted to teach children between the ages of 3 and 12. Applicants must have teaching experience. £15 per hour.CompanyLinguaFun is a language school that offers modern language classes to students of all ages.Location Singapore<br><hr> Nurse needed in private hospital. Must be registered to work in the UK. £25,000 per year.CompanyPrivate hospital with 50 years’ experience providing high-quality health care.LocationLondon, UK</p>


				

<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next question.</h1>
					<h3><label>4)You don’t need to talk to people to sell cars for Motor Ground.</label></h3>
					<div class="radio">
		<label><input type="rad"<div class='alert alert-success' role='alert'>Correct Answer</div>";io" name="optradio" value="a">True</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">False</label>
	</div>
	
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="b")
		{
						echo "<div class='alert alert-success' role='alert'>Correct Answer</div>"; 
echo '<a href="b24.php" class="btn">Next>></a>';
			//echo 'true';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
			echo '<a href="b24.php" class="btn">Next>></a>';
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

	<html>
<head>
	<meta charset="utf-8">
	<title>English Learning - English Learning Website </title>
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
	<div class="container-fluid" style="margin-top:10px;margin-left:82px;margin-right:450px;">
<form method="post" action="">
	<h1>Answer the following question correct answer will lead you to next question.</h1>
<h1>Select the correct time to the phrases.</h1>
						<h3><label>3)Half past two in the afternoon</label></h3>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">3.00 pm</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">2.30 pm</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">6.00 pm</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">5.30 am</label>
	</div>

		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
</div>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="b")
		{
						echo "<div class='alert alert-success' role='alert'>Correct Answer</div>";echo '<a href="b4.php" class="btn">Next>></a>';

			//echo 'true';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
			echo '<a href="b4.php" class="btn">Next>></a>';
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

	
		
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
				<h1>Reading Summaries</h1><br>
					<p><h2>Professional profile summaries</h2> <br><b>Maria</b><br>I am an architect with 20 years’  experience of designing and developing spaces. I am a partner in the award-winning STG Architects Ltd, which is famous for its work on the Galroy Building in London. I enjoy working with people from all over the world and have international experience of working in Italy, Greece, Thailand, Australia and Brazil. I have a Master of Science from Sheffield University and a BA in Architecture from Hull University. I also speak Italian and Thai. When I am not working, I spend my time hiking, skiing and diving.<br><b>Emily</b><br>I am an experienced sales manager with 12 years’ experience of developing customer service teams. I am skilled in negotiation, team motivation and building successful sales teams. After ten years of working in sales and customer service at Halo Bank, I am now the sales office manager of a team of 120 at Southern General Plastics Ltd. I have an MBA from Stanford University and a degree in Business Studies from Cornell University. I am creative and hardworking and enjoy working with others</p>

				

<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next question.</h1>
					<h3><label>1)Maria’s company, STG Architects Ltd, is .................................... for working on the Galroy Building.</label></h3>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">Famous</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">World</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">Service</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="d">Free</label>
	</div>

		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
						echo "<div class='alert alert-success' role='alert'>Correct Answer</div>";echo '<a href="p13.php" class="btn">Next>></a>';

			//echo 'true';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
			echo '<a href="p13.php" class="btn">Next>></a>';
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
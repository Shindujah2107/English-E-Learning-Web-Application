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
				<h1>Reading invitation</h1><br>
					<p><h2>Choosing a conference venue</h2><br><b> The International Centre</b><br>Whether you are looking for a conference venue or a place to have your meetings and your training days, the International Centre is the perfect modern space for your event.<br>Offering free Wi-Fi, secure parking and all-day refreshments, the International Centre has 120 meeting rooms and a theatre for up to 1,000 people.<br>Conveniently located in the city centre, the International Centre is close to the shops and only a ten-minute walk to the train station. <br><b>The Grand West</b><br>The Grand West is a country house surrounded by rolling hills and beautiful scenery, only a 30-minute drive from the airport.<br>With 76 hotel rooms, 12 meeting rooms and a conference room that takes up to 200 people, the Grand West offers free Wi-Fi and a whiteboard in every room.<br> You can also make use of the gardens of the Grand West for team-building events and outdoor activities. Our indoor swimming pool, gym and 18-hole golf course will ensure that your event is relaxing and enjoyable for everyone</p>

				

<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next question.</h1>
					<h3><label>2)Select the words in the correct Room type group</label></h3>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">conference rooms</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">secure parking</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">golf course </label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="d">training day</label>
	</div>

		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
						echo "<div class='alert alert-success' role='alert'>Correct Answer</div>";
echo '<a href="p11.php" class="btn">Next>></a>';
			//echo 'true';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
			echo '<a href="p11.php" class="btn">Next>></a>';
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
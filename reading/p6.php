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
					<p><h2>An invitation to a job interview</h2> <br><b>To:</b> Grace Yang <br><b>Date: </b>6 September <br><b>Subject:</b> Invitation to job interview <br>Dear Grace, <br>Thank you for your application for the position of sales manager. <br>We would like to invite you for an interview at 10 a.m. on Monday 21 September at our offices at The Shard, 32 London Bridge Street, London. <br>You will meet with our head of sales, Susan Park, and the interview will last for about 45 minutes. During this time, you will have the opportunity to find out more about the position and learn more about our company. <br>Please bring your CV and references to the interview. You will also need to show a form of ID at reception to receive a visitor’s pass. Please ask for me as soon as you arrive. <br>If you have any questions or if you wish to reschedule, please call me on 555-1234 or email me by 12 September. <br>I look forward to meeting you.<br>Best regards,<br>Anna Green<br>Human Resources Assistant</p>

				

<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next question.</h1>
					<h3><label>2)When is   the job interview? </label></h3>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">6 September</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">12 September</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">21 September</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="d">22 September</label>
	</div>

		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="c")
		{
						echo "<div class='alert alert-success' role='alert'>Correct Answer</div>";echo '<a href="p7.php" class="btn">Next>></a>';

			//echo 'true';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
			echo '<a href="p7.php" class="btn">Next>></a>';
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
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
				<h1>Reading text...</h1><br>
					<p><h2> A poster for exam candidatesPoster </h2> FINAL EXAM INSTRUCTIONS<br>•Doors close 5 minutes before the exam begins.<br>•Show your student ID card to examiner when you enter the room.<br>•No phones, no books<br></p><hr><p>BEFORE THE EXAM<br>•Have your ID card ready.<br>•Listen to the instructions.<br>•Arrive 10 minutes before exam.<br></p><hr><p>IN THE EXAM<br>•Mobile phones switched off and put away.<br>•ID card visible on the desk.•No talking.<br>•No food or drinks in exam room.</p>


				

<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next question.</h1>
<h2>Click the sentence that has the same meaning.</h2>
					<h3><label>1)No talking</label></h3>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">You can talk</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">You can’t talk.</label>
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="b")
		{
						echo "<div class='alert alert-success' role='alert'>Correct Answer</div>";echo '<a href="b12.php" class="btn">Next>></a>';

			//echo 'true';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
			echo '<a href="b12.php" class="btn">Next>></a>';
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
<html>
<head>
	<meta charset="utf-8">
	<title>English Learning - English Learning Website </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>
	<?php
		include "nav.php";
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Lessons for writing</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid" style="margin-top:10px;margin-left:82px;margin-right:450px;">
<form method="post" action="">
	<h1>CAPITALIZATION RULES</h1>
<h2>English Capitalization Rules:</h2>
					<h4><li>Capitalize the First Word of a Sentence. ...</li></h4>
					<h4><li>Capitalize Names and Other Proper Nouns. ...</li></h4>
					<h4><li>Don't Capitalize After a Colon (Usually) ...</li></h4>
					<h4><li>Capitalize the First Word of a Quote (Sometimes) ...</li></h4>
					<h4><li>Capitalize Days, Months, and Holidays, But Not Seasons. ...</li></h4>
					<h4><li>Capitalize Most Words in Titles.</li></h4>
	</form>
</div>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
						echo '<a href="b2.php" class="btn">Next>></a>';

			
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
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

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
	<h1>WRITING A PARAGRAPH ABOUT CAUSE AND EFFECT</h1>
	<div><h2>Pre-writing</h2>
	<p>Decide whether to write about a cause or an effect or both. You can choose to discuss only the causes or only the effects of an event. Alternatively, you can discuss the causes AND effects of a certain event.

Make a list of causes or effects. Then narrow down that list to include only the most important causes or effects.</p>
	</div>
	<br>
	<div><h2>Writing</h2>
	<p>Write a draft explaining each cause or effect in the paragraph in as much detail as possible. Don't forget to use transitional words in your paragraph, such as: also, as a result, because, first and finally.

It is very important to include a clear topic sentence in your paragraph. This sentence should state the main idea of your paragraph.

Support your topic sentence with supporting details.</p>
	</div>
	<br>
	<div><h2>Post writing</h2>
	<p>Edit your paragraph.</p>
	</div>
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

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
				<h1>Read the menu...</h1><br>
					<p><h2>A restaurant menuTony’s Kitchen<br> reviewsChicken, Pizzas, Vegetarian</h2><h3>  17 Broad StreetOpening <br> at 11:30<br></h3>Meat and fishGrilled fish of the day £ 8.00  <br>Steak with chips or salad £12.00 <br>Sausage and roast tomato pasta £7.00 <br> Chicken salad with garlic yoghurt dressing £7.00 <br>VegetarianCheese and tomato pizza £7.00 <br>Mushroom omelette £7.00<br> Vegetable chilli £7.00 <br>Soup of the day with brown and white bread £4.00<br> Something sweetHomemade carrot cake £3.50 <br> Homemade banana cake £3.50 <br>Chocolate ice cream with chocolate sauce £3.50 <br>Fresh fruit salad with grapes, mango, melon and apple, served with cream or ice cream £3.50<br> DrinksCup of coffee £2.00 <br>Cup of tea £1.50 <br> Glass of wine, white or red £3.00<br> Beer £3.00 <br>Water, still or sparkling £1.00 </p>


				

<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next question.</h1>
					<h3><label>2)Soup is served with bread.</label></h3>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">True</label>
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
		if($radval=="a")
		{
						echo"<div class='alert alert-success' role='alert'>Correct Answer</div>";echo '<a href="b9.php" class="btn">Next>></a>';

			//echo 'true';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
			echo '<a href="b9.php" class="btn">Next>></a>';
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
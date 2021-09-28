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
	
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
	<?php
		include "nav.php";
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Listening</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
					<h1>Listening Activities</h1>

					
					
					<table>
  <tr>
    <th >Listening</th>
    
  </tr>
  <tr>
    <td> <a href="ex1.php">Rio de Janeiro 2016 Olympic Games</a></td>
    
  </tr>
  <tr>
    <td> <a href="ex1.php">Songs</a></td>
    
  </tr>
  <tr>
    <td> <a href="ex1.php">Daily English Lessing Lesson</a></td>
    
  </tr>
  <tr>
    <td> <a href="ex1.php">Atlantics Documentary</a></td>
   
  </tr>
  <tr>
    <td> <a href="ex1.php">Long Life Tips</a></td>
    
  </tr>
  <tr>
    <td> <a href="ex1.php">The History of Easter Day</a></td>
    
  </tr>
  <tr>
    <td> <a href="ex1.php">days Poem</a></td>
    
  </tr>
  <tr>
    <td> <a href="ex1.php">Months Poeam</a></td>
    
  </tr>
  <tr>
    <td> <a href="ex1.php">Making a Complaint</a></td>
    
  </tr>
  <tr>
    <td><a href="ex1.php">Elephant Documentary</a></td>
    
  </tr>
  
  <tr>
    <td><a href="ex1.php">Facts About Number</a></td>
    
  </tr>
  <tr>
    <td><a href="ex1.php">Shakespear Globel video Quiz</a></td>
    
  </tr>
  <tr>
    <td> <a href="ex1.php">Elephant Documentary</a></td>
    
  </tr>
  <tr>
    <td> <a href="ex1.php">Great Drepression Documentary</a></td>
    
  </tr>
  <tr>
    <td> <a href="ex1.php">Poems</a></td>
    
  </tr>
  <tr>
    <td> <a href="ex1.php">Comic-Half Invisible</a></td>
    
  </tr>
</table>

					
					
					

<form method="post" action="">


	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
						echo '<a href="chapter2.php" class="btn">Next>></a>';

			//echo 'true';
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

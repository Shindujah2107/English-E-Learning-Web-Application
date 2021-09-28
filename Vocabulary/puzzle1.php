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
	body {
    font-family: 'Lato', sans-serif;
    font-weight: normal;
	background-color: #c7d6d6;
}
	#cross{
	text-align: center;
	width:30px;
	height:30px;
	margin: 0;
	padding: 0;
	border-collapse: collapse;
	border: 1px solid white;
}
#buttons{
	width:30%;
	float: right;
}
tr{
	margin: 0;
	padding: 0;
	border-collapse: collapse;
}
td{
	height: 30px;
	width: 30px;
}
#leftBox{
	float: left;
}
#rightBox{
	float: left;
	clear:left;
}
.butt{
	height:50px;
	width: 107px;
}
#puzzel{
	text-align: center;
	margin: 0;
	padding: 0;
	border-collapse: collapse;
	border: 1px solid black;
}
.inputBox{
		width: 40px;
		height:40px;
		border: 1px solid black;
		text-align: center;
}
#hintsTable{
	width: 480px;
	float: left;
	clear: left;
}
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

<script>
//Globals
var currentTextInput;
var puzzelArrayData;
//Loads the Crossword
function initializeScreen(){
	var puzzelTable = document.getElementById("puzzel");
	puzzelArrayData = preparePuzzelArray();
	for ( var i = 0; i < puzzelArrayData.length ; i++ ) {
		var row = puzzelTable.insertRow(-1);
		var rowData = puzzelArrayData[i];
		for(var j = 0 ; j < rowData.length ; j++){
			var cell = row.insertCell(-1);
			if(rowData[j] != 0){
				var txtID = String('txt' + '_' + i + '_' + j);
				cell.innerHTML = '<input type="text" class="inputBox" maxlength="1" style="text-transform: lowercase" ' + 'id="' + txtID + '" onfocus="textInputFocus(' + "'" + txtID + "'"+ ')">';
			}else{
				cell.style.backgroundColor  = "black";
			}
		}
	}
	addHint();
}
//Adds the hint numbers
function addHint(){
	document.getElementById("txt_0_4").placeholder = "1";
	document.getElementById("txt_2_6").placeholder = "2";
	document.getElementById("txt_3_1").placeholder = "3";
	document.getElementById("txt_3_9").placeholder = "4";
	document.getElementById("txt_6_2").placeholder = "5";
	document.getElementById("txt_9_0").placeholder = "6";
}
//Stores ID of the selected cell into currentTextInput
function textInputFocus(txtID123){
	currentTextInput = txtID123;
}
//Returns Array
function preparePuzzelArray(){
var items = [	[0, 0, 0, 0, 'p', 0, 0, 0, 0, 0],
				[0, 0, 0, 0, 'u', 0, 0, 0, 0, 0 ],
				[0, 0, 0, 0, 'n', 0, 'b', 0, 0, 0],
				[0, 'h', 'y', 'd', 'e', 'r', 'a', 'b', 'a', 'd'],
				[0, 0, 0, 0, 0, 0, 'n', 0, 0, 'e'],
				[0, 0, 0, 0, 0, 0, 'g', 0, 0, 'l'],
				[0, 0, 'm', 'u', 'm', 'b', 'a', 'i', 0, 'h'],
				[0, 0, 0, 0, 0, 0, 'l', 0, 0, 'i'],
				[0, 0, 0, 0, 0, 0, 'o', 0, 0, 0],
				['k', 'a', 's', 'h', 'm', 'i','r', 0, 0, 0],
				[0, 0, 0, 0, 0, 0, 'e', 0, 0, 0]
			];
return items;
}
//Clear All Button
function clearAllClicked(){
	currentTextInput = '';
	var puzzelTable = document.getElementById("puzzel");
	puzzelTable.innerHTML = '';
    initializeScreen();
}
//Check button
function checkClicked(){
	for ( var i = 0; i < puzzelArrayData.length ; i++ ) {
		var rowData = puzzelArrayData[i];
		for(var j = 0 ; j < rowData.length ; j++){
			if(rowData[j] != 0){
				var selectedInputTextElement = document.getElementById('txt' + '_' + i + '_' + j);
				if(selectedInputTextElement.value != puzzelArrayData[i][j]){
					selectedInputTextElement.style.backgroundColor = 'red';
					
				}else{
					selectedInputTextElement.style.backgroundColor = 'white';
				}
			}
		}
	}
}
//Clue Button
function clueClicked(){
	if (currentTextInput != null){
		var temp1 = currentTextInput;
		var token = temp1.split("_");
		var row = token[1];
		var column = token[2];
		document.getElementById(temp1).value = puzzelArrayData[row][column];
		//checkClicked();
	}
}
//Solve Button
function solveClicked(){
	if (currentTextInput != null){
		var temp1 = currentTextInput;
		var token = temp1.split("_");
		var row = token[1];
		var column = token[2];
		
		// Print elements on top
		for(j = row; j >= 0; j--){
			if(puzzelArrayData[j][column] != 0){
				document.getElementById('txt' + '_' + j + '_' + column).value = puzzelArrayData[j][column];
				}else break;
		}
		// Print elements on right
		for(i = column; i< puzzelArrayData[row].length; i++){
			if(puzzelArrayData[row][i] != 0){
				document.getElementById('txt' + '_' + row + '_' + i).value = puzzelArrayData[row][i];
				}else break;
		}
		
		// Print elements below
		for(m = row; m< puzzelArrayData.length; m++){
			if(puzzelArrayData[m][column] != 0){
				document.getElementById('txt' + '_' + m + '_' + column).value = puzzelArrayData[m][column];
				}else break;
		}
		// Print elements on left
		for(k = column; k >= 0; k--){
			if(puzzelArrayData[row][k] != 0){
				document.getElementById('txt' + '_' + row + '_' + k).value = puzzelArrayData[row][k];
				}else break;
		}
		// Done!
		
	}
}
</script>
</head>
<body onload="initializeScreen()">
	<?php
		include "nav.php";
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Vocabulary</h1>
				</div>
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
					<h1>Crossword Puzzle</h1>
<p><b>In this section you will find activities to help you learn the meaning, pronunciation and spelling of new words. Learning vocabulary will help you improve your language level and communicate in English confidently and effectively. The pages are organised by topic and include interactive exercises to help you learn and remember the new words</b></p>
		<div id="leftBox">
<table id="puzzel">

</table>
</div>
<div id="rightBox">
<table>
	<tr><td><input class="butt"  type="submit" value="Clear All" onclick="clearAllClicked()"></td>
	<td><input class="butt"  type="submit" value="Check" onclick="checkClicked()"></td>
	<td><input class="butt"  type="submit" value="Solve" onclick="solveClicked()"></td>
	<td><input class="butt"  type="submit" value="Clue" onclick="clueClicked()"></td></tr>
</table>
</div>
<table id="hintsTable">
		<tr>
			<td><strong>Horizontal:</strong></td><td><strong>Vertical:</strong></td>
		</tr>
		<tr>
			<td>3. Cultural Hub (Hyderabad)</td><td>1. Education Hub (Pune)</td>
		</tr>
		<tr>
			<td>5. India's financial capital (Mumbai)</td><td>2. Information Technology Hub (Bangalore)</td>
		</tr>
		<tr>
			<td>6. Saffron region (Kashmir)</td><td>4. Capital of India (Delhi)</td>
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

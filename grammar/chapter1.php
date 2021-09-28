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
					<h1>Grammer</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
					<h1>Punctuation rules</h1>
<p><strong>Punctuation marks</strong> are symbols which</p>
<ol>
<li> organize the structure of written language, </li>
<li>and indicate intonation and pauses to be observed when reading aloud.</li>
</ol>
<p>Punctuation marks are also used to avoid ambiguity. For example, &quot;woman, without her man, is nothing&quot; has a different meaning from &quot;woman: without her, man is nothing&quot;</p>
<p>This is a summary of punctuation rules. </p>
<p>Read the punctuation rules and study the examples given. </p>
<h4>End punctuation marks:</h4>
<p>1. Full stop , or period (.) </p>
<ul>
<li>Used a full stop at the end of a sentence:<br />
She stood up and went away. She was furious. </li>
 <li>Used for abbreviations:<br />
Co. (Company)<br />
M.P. (Member of Parliament) <br />
</li>
</ul>
<p>2. Question marks (?) </p>
<ul>
<li>Question marks are used at the end of direct questions:<br />
Where do you live?<br />
Are you crazy?<br />
Did you do the homework? </li>
<li>Use a question mark at the end of tag questions:<br />
You will help me, won't you?<br />
He likes soccer, doesn't he? <br />
</li>
</ul>
<p>3. Exclamation marks (!)</p>
<ul>
<li>Used to indicate strong emotions:<br />
She's so beautiful!<br />
What a nice girl!<br />
How interesting!</li>
<li>Used after interjections:<br />
Oh! It's awful.<br />
Hi! What's up?</li>
</ul>
<h4>Commas (,) </h4>
<ul>
<li>Commas are used between items in a series or list. The last two items of the series usually do not need a comma between them. They are separated by &quot;and&quot;.<br />
I like spaghetti, fish, pizza and couscous.</li>
<li>Commas are also used between adjectives or adverbs:<br />
I'd like to have a big, black, German car.<br />
She speaks slowly, quietly and eloquently.</li>
<li>After the street address and city in an address:<br />
34 Hassan II Street, Rabat, Morocco.</li>
<li>Before or after direct speech:<br />
He said,&quot;I hate being treated like that.&quot;<br />
&quot;I'm sorry&quot;, she replied.</li>
<li> Before a coordinating conjunction (for, and, nor, but, or, yet, so)<br />
He woke up late, so he had to drive to work. </li>
</ul>
<h4>Semicolons (;) </h4>
<ul>
<li>Semicolons are used instead of a full stop or period to separate independent sentences:<br />
They woke up early; then they went jogging.</li>
<li>Use a semicolon to separate items in a series when those items contain punctuation such as a comma:<br />
They visited the Eiffel Tower, Paris; Big Ben, London; and the statue of liberty, New York </li>
</ul>
<h4>Colons (:) </h4>
<ul>
<li>Use a colon to introduce a list:<br />
He visited three cities last summer holiday: Madrid, Roma and Athens.</li>
<li>To introduce an idea or an explanation:<br />
He had one idea in mind: to see her as soon as possible. </li>
<li>To introduce direct speech or a quotation:<br />
The secretary whispered in his ear: &quot;Your wife is on the phone. &quot;<br />
</li>
</ul>
<h4>Dashes (--) </h4>
<ul>
<li>To introduce parenthetical information:<br />
I put on a blue jacket --the one my mother bought me-- and blue jeans.</li>
<li>To show an afterthought:<br />
I explained to him my point of view-- at least I tried!<br />
</li>
</ul>
<h4>Apostrophes (') </h4>
<ul>
<li>Use an apostrophe to indicate a missing letter or letters in a contraction.<br />
I'm fed up with his stories</li>
<li>Use an apostrophe plus the letter &quot;s&quot; to show possession.<br />
My brother's girlfriend is such a sweet girl.</li>
</ul>
<h4>Quotation marks (&quot;&quot;) </h4>
<ul>
<li>Quotation marks are used to quote speech, sentences or words.<br />
She said, &quot;I love you.&quot; </li>
</ul>

<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1) For each of the following, choose the sentence that ends with the correct punctuation mark. </label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">What is your teacher’s name?</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">What is your teacher’s name.</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">What is your teacher’s name!</label>
	</div>
	
	
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

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

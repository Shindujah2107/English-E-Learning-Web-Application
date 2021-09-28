<html>
<head>
	<meta charset="utf-8">
	<title>English Learning - English Learning Website </title>
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

	<script> 

	let audioIN = { audio: true }; 
	// audio is true, for recording 

	// Access the permission for use 
	// the microphone 
	navigator.mediaDevices.getUserMedia(audioIN) 

	// 'then()' method returns a Promise 
	.then(function (mediaStreamObj) { 

		// Connect the media stream to the 
		// first audio element 
		let audio = document.querySelector('audio'); 
		//returns the recorded audio via 'audio' tag 

		// 'srcObject' is a property which 
		// takes the media object 
		// This is supported in the newer browsers 
		if ("srcObject" in audio) { 
		audio.srcObject = mediaStreamObj; 
		} 
		else { // Old version 
		audio.src = window.URL 
			.createObjectURL(mediaStreamObj); 
		} 

		// It will play the audio 
		audio.onloadedmetadata = function (ev) { 

		// Play the audio in the 2nd audio 
		// element what is being recorded 
		audio.play(); 
		}; 

		// Start record 
		let start = document.getElementById('btnStart'); 

		// Stop record 
		let stop = document.getElementById('btnStop'); 

		// 2nd audio tag for play the audio 
		let playAudio = document.getElementById('adioPlay'); 

		// This is the main thing to recorde 
		// the audio 'MediaRecorder' API 
		let mediaRecorder = new MediaRecorder(mediaStreamObj); 
		// Pass the audio stream 

		// Start event 
		start.addEventListener('click', function (ev) { 
		mediaRecorder.start(); 
		// console.log(mediaRecorder.state); 
		}) 

		// Stop event 
		stop.addEventListener('click', function (ev) { 
		mediaRecorder.stop(); 
		// console.log(mediaRecorder.state); 
		}); 

		// If audio data available then push 
		// it to the chunk array 
		mediaRecorder.ondataavailable = function (ev) { 
		dataArray.push(ev.data); 
		} 

		// Chunk array to store the audio data 
		let dataArray = []; 

		// Convert the audio data in to blob 
		// after stopping the recording 
		mediaRecorder.onstop = function (ev) { 

		// blob of type mp3 
		let audioData = new Blob(dataArray, 
					{ 'type': 'audio/mp3;' }); 
			
		// After fill up the chunk 
		// array make it empty 
		dataArray = []; 

		// Creating audio url with reference 
		// of created blob named 'audioData' 
		let audioSrc = window.URL 
			.createObjectURL(audioData); 

		// Pass the audio url to the 2nd video tag 
		playAudio.src = audioSrc; 
		} 
	}) 

	// If any error occurs then handles the error 
	.catch(function (err) { 
		console.log(err.name, err.message); 
	}); 
</script> 
</head>
<body>
	<?php
		include "nav.php";
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>SPEAKING</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
					<h1>Introducing yourself and others</h1><br>
					<p>There is a range of ways to introduce yourself and people.<p>
                        <h2>Introducing yourself:</h2><br>
                        <p>Here are expressions to introduce yourself:<p>
					<ul>
						<li>My name is ...</li>
						<li>I'm ....</li>
						<li>Nice to meet you; I'm ...</li>
						<li>Pleased to meet you; I'm ...</li>
						<li>Let me introduce myself; I'm ...</li>
                        <li>I'd like to introduce myself; I'm ...</li>
                    </ul>
                    <h2>Introducing others:</h2><br>
                        <p>Here are expressions to introduce others:<p>
					<ul>
						<li>Jack, please meet Nicolas. </li>
						<li>Jack, have you met Nicolas?</li>
						<li>I'd like you to meet Liza.</li>
						<li>I'd like to introduce you to Betty.</li>
						<li>Leila, this is Barbara. Barbara this is Leila.</li>
                        
					</ul>
                    <h2>Useful responses when introducing yourself or other people:</h2><br>
                    <ul>
						<li>Nice to meet you.</li>
						<li>Pleased to meet you.</li>
						<li>Happy to meet you.</li>
						<li>How do you do?</li>
                    
                        
                    </ul>
					<br>
					<div style="text-align:left"> 
  <button onclick="playPause()">Play/Pause</button> 
  <button onclick="makeBig()">Big</button>
  <button onclick="makeSmall()">Small</button>
  <button onclick="makeNormal()">Normal</button>
  <br><br>
  <video id="video1" width="420">
    <source src="chap2.mp4" type="video/mp4">
    <source src="chap2.ogg" type="video/ogg">
    Your browser does not support HTML video.
  </video>
</div> 

<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 420; 
} 
</script>
<header> 
	<h2>Cosider the following situation,then you have to give your answers using microphones</h2>
	<h3>Hi! My name is Alex Litterman, the new manager.How to indroduce your self?</h3> 
</header> 
<!--button for 'start recording'--> 
<p> 
	<button id="btnStart" class="btn btn-primary">START RECORDING</button> 
			 
	<button id="btnStop" class="btn btn-primary" onclick="myFunction()">STOP RECORDING</button> 
	<!--button for 'stop recording'--> 
</p> 

<!--for record--> 
<audio controls></audio> 
<!--'controls' use for add 
	play, pause, and volume--> 

<!--for play the audio--> 
<audio id="adioPlay" controls></audio> 
<p id="demo"></p>

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "ANSWER";
}
</script>

<audio controls>
  <source src="rec2.ogg" type="audio/ogg">
  <source src="rec2.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
<br><br><br>
<a href="chap2-speaking.php" class="btn btn-block">NEXT CHAPTER</a>
			</div>
			
			<div class="col-md-2 col-md-pull-9" style="margin-top:10px;">
			
				<?php include "sidebar1.php"; ?>
			</div>
		</div>
		
	</div>
	


	<?php
		include "footer.php";
	?>
</body>
</html>

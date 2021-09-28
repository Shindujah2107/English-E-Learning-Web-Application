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
					<h1>Expressing Feelings</h1><br>
					<p>Sometimes you will need to express an emotion such as joy or sorrow to the person you're talking to. 
                        This page will list the different ways of expressing feelings in English.<p>
                        <h2>Asking about Feelings</h2><br>
                        <p>To ask about feelings you can use the following questions:<p>
					<ul>
						<li>How are you feeling today?</li>
						<li>You look sad / upset. Are you OK?</li>
						<li>You seem a little bit distracted. Are you alright?</li>
						<li>You seem kind of low today. What's wrong?</li>
						<li>You seem a little blue today. What's the matter?</li>
                        <li>What's wrong?</li>
                        <li>What's the matter?</li>
                        <li>Are you OK / alright?</li>
                        <li>Are you happy / angry...?</li>
                        <li>Is everything OK / alright...?</li>
                        
                    </ul>
                    <h2>Expressing Feelings</h2><br>
                        <p>To respond to a question about feelings you can uss the following expressions:<p>
					<ul>
						<li>I feel a little sad / happy / angry </li>
						<li>I am a little sad / happy / angry </li>
						<li>To be honest, I'm a little bit sad / happy / angry</li>
						<li>It's been a difficult day.</li>
						<li>The thing is that, I am angry / sad</li>
                        <li>I am mad at him / her</li>
					</ul>
					<br>
					<div style="text-align:left"> 
  <button onclick="playPause()">Play/Pause</button> 
  <button onclick="makeBig()">Big</button>
  <button onclick="makeSmall()">Small</button>
  <button onclick="makeNormal()">Normal</button>
  <br><br>
  <video id="video1" width="420">
    <source src="chap1.mp4" type="video/mp4">
    <source src="chap1.ogg" type="video/ogg">
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
	<h3>Let us say you are talking with your friend who just got out of the hospital,how to ask about his/her feelings?</h3> 
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

<h3><b>First you try to speak,then listen to it whether you speak correct or not</b></h3>
<audio controls>
  <source src="rec1.ogg" type="audio/ogg">
  <source src="rec1.mp3" type="audio/mpeg">
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

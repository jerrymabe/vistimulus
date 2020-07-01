<?php
session_start();
if(!isset($_SESSION['Name']))
{
    header('Location: xlnogtuin.html');
    exit();
}
?>
<html>
<head>
<link rel="stylesheet" href="css/activitypages.css">
<link rel="stylesheet" href="css/tryaa1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/dragdrop.js"></script>
<script>
function preventBack() { 
	window.history.forward(); 
}
setTimeout("preventBack()", 0); 
window.onunload = function () { null };
window.onbeforeunload = function() {
    return "Are you sure you want to leave?";
}
window.onload = function () {
	var seconds = 00, tens = 00, minutes = 00, hours = 00;
	var appendTens = document.getElementById("tens");
	var appendSeconds = document.getElementById("seconds");
	var appendMinutes = document.getElementById("minutes");
	var appendHours = document.getElementById("hours");
	var buttonStart = document.getElementById('button-start');
	var buttonStop = document.getElementById('button-stop');
	var buttonReset = document.getElementById('button-reset');
	var Interval;
	
	clearInterval(Interval);
	Interval = setInterval(startTimer, 10);

	buttonStart.onclick = function() { 
		clearInterval(Interval);
		Interval = setInterval(startTimer, 10);
	}
	buttonStop.onclick = function() {
       clearInterval(Interval);
	   window.alert("Congratulations you finished it in: " + appendHours.innerHTML + " hrs " + 
	   appendMinutes.innerHTML + " mins " + appendSeconds.innerHTML + " secs " + appendTens.innerHTML + " msecs");
	   var form_data = new FormData();
		var text = appendHours.innerHTML + " hrs " + appendMinutes.innerHTML + " mins " + appendSeconds.innerHTML + " secs " + appendTens.innerHTML + " msecs";
		form_data.append("TimeD1",text);
		form_data.append("label", "WEBUPLOAD");
		$.ajax({
			url: "data.php",
			data: form_data,
			type : 'POST',
			processData: false,
			contentType: false
		});
		$('#set4').attr('disabled','disabled');
	}
	buttonReset.onclick = function() {
		clearInterval(Interval);
		tens = "00";
		seconds = "00";
		minutes = "00";
		hours = "00";
		appendTens.innerHTML = tens;
		appendSeconds.innerHTML = seconds;
		appendMinutes.innerHTML = minutes;
		appendHours.innerHTML = hours;
	}
	function startTimer () {
		tens++;
		if(tens < 9){
			appendTens.innerHTML = "0" + tens;
		}
		if (tens > 9){
			appendTens.innerHTML = tens;
		} 
		if (tens > 99) {
			console.log("seconds");
			seconds++;
			appendSeconds.innerHTML = "0" + seconds;
			tens = 0;
			appendTens.innerHTML = "0" + 0;
		}
		if (seconds > 9){
			appendSeconds.innerHTML = seconds;
		}
		if(seconds > 59) {
			console.log("minutes");
			minutes++;
			appendMinutes.innerHTML = "0" + minutes;
			seconds = 0;
			appendSeconds.innerHTML = "0" + 0;
		}
		if (minutes > 9){
			appendMinutes.innerHTML = minutes;
		}
		if(minutes > 59) {
			console.log("hours");
			hours++;
			appendHours.innerHTML = "0" + hours;
			minutes = 0;
			appendMinutes.innerHTML = "0" + 0;
		}
		if (hours > 9){
			appendHours.innerHTML = hours;
		}
	}
}
</script>
</head>
<header class="header navbar display-3 navbar-overlay" style="padding-bottom:20px;padding-top:15px;font-size:25px;">
	<b><button class="button1"><span><i class="fa fa-twitter"></i><b>VISTIMULUS</b></span></button></b>
	<center> S1: Let's play a fun game! </center>
</header>
<body>
<div class="cont">
<div class="flex-container border border-primary">
  <div id="drag13" class="flex-child border border-primary" ondrop="drop(event)" ondragover="allowDrop(event)">
  </div>
  <div id="drag14" class="flex-child border border-primary" ondrop="drop(event)" ondragover="allowDrop(event)">
  </div>
  <div class="flex-container2">
	<div id="drag17" class="flex-child border border-primary" ondrop="drop(event)" ondragover="allowDrop(event)">
	</div>
	<div id="drag18" class="flex-child border border-primary" ondrop="drop(event)" ondragover="allowDrop(event)">
	</div>
  </div>
  <div class="flex-container3">
	<div id="drag21" class="flex-child border border-primary" ondrop="drop(event)" ondragover="allowDrop(event)">
	</div>
	<div id="drag22" class="flex-child border border-primary" ondrop="drop(event)" ondragover="allowDrop(event)">
	</div>
  </div>
</div>
<div class="flex-container border border-primary">
  <div id="drag15" class="flex-child border border-primary" ondrop="drop(event)" ondragover="allowDrop(event)">
  </div>
  <div id="drag16" class="flex-child border border-primary" ondrop="drop(event)" ondragover="allowDrop(event)">
  </div>
  <div class="flex-container2">
	<div id="drag19" class="flex-child border border-primary" ondrop="drop(event)" ondragover="allowDrop(event)">
	</div>
	<div id="drag20" class="flex-child border border-primary" ondrop="drop(event)" ondragover="allowDrop(event)">
	</div>
  </div>
  <div class="flex-container3">
	<div id="drag23" class="flex-child border border-primary" ondrop="drop(event)" ondragover="allowDrop(event)">
	</div>
	<div id="drag24" class="flex-child border border-primary" ondrop="drop(event)" ondragover="allowDrop(event)">
	</div>
  </div>
</div>
</div>
<div id="img_div1" ondrop="drop(event)" ondragover="allowDrop(event)">
	<img id="drag1" src="Images/Set_1_BP/9.png" draggable="true" ondragstart="drag(event)" width="125" height="125">
	<img id="drag2" src="Images/Set_1_BP/2.png" draggable="true" ondragstart="drag(event)" width="125" height="125">
</div>
<div id="img_div2" ondrop="drop(event)" ondragover="allowDrop(event)">
	<img id="drag3" src="Images/Set_1_BP/3.png" draggable="true" ondragstart="drag(event)" width="125" height="125">
	<img id="drag4" src="Images/Set_1_BP/8.png" draggable="true" ondragstart="drag(event)" width="125" height="125">
</div>
<div id="img_div3" ondrop="drop(event)" ondragover="allowDrop(event)">
	<img id="drag5" src="Images/Set_1_BP/5.png" draggable="true" ondragstart="drag(event)" width="125" height="125">
	<img id="drag6" src="Images/Set_1_BP/12.png" draggable="true" ondragstart="drag(event)" width="125" height="125">
</div>
<div id="img_div4" ondrop="drop(event)" ondragover="allowDrop(event)">
	<img id="drag7" src="Images/Set_1_BP/7.png" draggable="true" ondragstart="drag(event)" width="125" height="125">
	<img id="drag8" src="Images/Set_1_BP/4.png" draggable="true" ondragstart="drag(event)" width="125" height="125">
</div>
<div id="img_div5" ondrop="drop(event)" ondragover="allowDrop(event)">
	<img id="drag9" src="Images/Set_1_BP/10.png" draggable="true" ondragstart="drag(event)" width="125" height="125">
	<img id="drag10" src="Images/Set_1_BP/1.png" draggable="true" ondragstart="drag(event)" width="125" height="125">
</div>
<div id="img_div6" ondrop="drop(event)" ondragover="allowDrop(event)">
	<img id="drag11" src="Images/Set_1_BP/11.png" draggable="true" ondragstart="drag(event)" width="125" height="125">
	<img id="drag12" src="Images/Set_1_BP/6.png" draggable="true" ondragstart="drag(event)" width="125" height="125">
</div>
<footer class="jumbotron jumbotron-fluid" style="margin-top:4.4%; padding-bottom:0px; margin-bottom:0px; height:10px;">
<div class="setfour">
	<button class="btn btn-primary" id="set4" onclick="clickset1()">The four boxes are set</button>
</div>
	<div class="stopwatch" id="d_timer">
		<p style="margin-bottom:-2%;"><a href="uuhiid2rtfg.php" style="color: #eeeeee; text-decoration: none;">00</a><span id="hours">00</span>:<span id="minutes">00</span>:<span id="seconds">00</span><span id="tens" hidden>00</span></p>
		<button id="button-start" style="margin-left:-10%;" hidden>start</button>
		<button id="button-stop" hidden>stop</button>
		<button id="button-reset" hidden>reset</button>
	</div>
</footer>
</body>
</html>

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
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/tryaa.css">
<link rel="stylesheet" href="css/initialpages.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
function preventBack() { 
	window.history.forward(); 
}
setTimeout("preventBack()", 0); 
window.onunload = function () { null };
function toNextPage(){
	window.location = "pyrp1tye.php";
}
</script>
</head>
<body id="element-with-background-image">
<meta name="viewport" content="width=device-width">
<div class="navbar header navbar-overlay" id="navbar"><b>
	<font face="Raleway Thin">
	<button class="button1"><span><i class="fa fa-twitter"></i><b>VISTIMULUS</b></span></button>
	</font>
</b>INSTRUCTIONS</div>
<div class="color-overlay">
</div>
<div class="login-form element-inst">
1. First, you will have 2 sets of Practice activities during which you will be guided as to how to do the activity.<br><br>
2. Followed by 4 sets of activities for you to do on your own.<br><br>
3. The timer is automatic and will start as soon as the page opens.<br><br>
4. Once you think the first set of 4 cards are perfect, please click "The four boxes are set" button.<br><br>
5. Clicking the "The four boxes are set" button after all 12 cards are done will end the activity.<br><br>
6. You will not be allowed to go back to a previous page or activity.<br><br>
7. Once the activity is done, your guide will tell you how to move to the next one.
</div>
<div class="setfour">
	<button class="btn btn-primary" id="set4" onclick="toNextPage()">Go to Practice Activity</button>
</div>
</body>
</html>
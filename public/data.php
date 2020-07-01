<?php
$myFile = "ChildStimulusData.txt";
$fh = fopen($myFile, 'a');
if(isset($_POST['UserName']))
{
	$data = $_POST['UserName'];
	$text = "Name: ".$data.PHP_EOL;
}
else if(isset($_POST['TimeP1']))
{
	$data = $_POST['TimeP1'];
	$text = "Time for Practice1: ".$data.PHP_EOL;
}
else if(isset($_POST['TimeP2']))
{
	$data = $_POST['TimeP2'];
	$text = "Time for Practice2: ".$data.PHP_EOL;
}
else if(isset($_POST['TimeP3']))
{
	$data = $_POST['TimeP3'];
	$text = "Time for Practice3: ".$data.PHP_EOL;
}
else if(isset($_POST['TimeD1']))
{
	$data = $_POST['TimeD1'];
	$text = "Time for Set1: ".$data.PHP_EOL;
}
else if(isset($_POST['TimeD2']))
{
	$data = $_POST['TimeD2'];
	$text = "Time for Set2: ".$data.PHP_EOL;
}
else if(isset($_POST['TimeD3']))
{
	$data = $_POST['TimeD3'];
	$text = "Time for Set3: ".$data.PHP_EOL;
}
else if(isset($_POST['TimeD4']))
{
	$data = $_POST['TimeD4'];
	$text = "Time for Set4: ".$data.PHP_EOL;
}
fwrite($fh, $text);
fclose($fh);
?>
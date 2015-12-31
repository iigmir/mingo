<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Mingo to Grego</title>
</head>
<body>
<p>Year Translator</p>
<form action="mingo.php" method="get">
	<input type="radio" name="yearformat" value="m" checked> Mingo to Grego
	<input type="radio" name="yearformat" value="g"> Grego to Mingo
	<br>
	Year:<input type="text" name="year">
	<br>
	<input type="submit" value="Submit">
</form> 
<p>
<?php
/* Bugs wait to slove:
 * 0. Will denied connection after input something.
 */
$mingo=1911;
$phpyearformat=$_GET["yearformat"];
$phpyear=(int)$_GET["year"];
if (is_int($phpyear))
{
	if ($phpyearformat == "m")
	{
		$sum = $phpyear + $mingo;
		echo $sum;
	}
	elseif ($phpyearformat == "g")
	{
		$sum = $phpyear - $mingo;
		echo $sum;
	}
	else
	{
		echo "Please input a correct year such as 1995 or 38.";
	}
}
else
{
	echo "Error encounter. Please contract admin.";
}
?>
</p>
</body>

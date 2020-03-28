<!DOCTYPE html>
<html>
<head>
	<title>AriOPMF</title>
</head>
<body>
	<?php
	// programa sobre variaveis globais em PHP
	// programa dá um erro na função
	/*$num = 5000;
	
	function um()
	{
		$num += 5;
		echo $num ."<br>";
	}
	echo $num . "<br>";

	um();

	echo "\" e<br>";*/

	// programa aceita o numero 5 pelo global
	/*

	$num = 5000;
	function testa()
	{
		global $num;
		$num += 5;
		echo $num."<br>";
	}
	echo $num."<br>";
	testa();*/

	$num = 5000;
	function number()
	{
		echo $GLOBALS["num"]."<br>";
		$GLOBALS["num"]++;

	}
	number();
	echo $num;

	?>	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>AriOPMF</title>
</head>
<body>
	<p align=center>Isto é um teste estou aprendendo a escrever textos com aspas simples!</p>
	<?php
	// programa com varios recursos em PHP
	echo'<p align=center>Isto é um teste estou aprendendo a escrever textos com aspas simples!</p>';
	
	echo'Isto é um teste';
	echo "<br>";
	echo'<br>';
	echo'Coloquei uma quebra de linha!';
	echo"<br>";

	$palavra = "teste";
	echo "<br>";
	$frase = "Isto é uma $palavra";
	echo "<br>";
	echo $frase;
	echo"<br>";
	echo "<br>";

	echo" insere aspas no texto \", pula uma linha \n, retorno de carro \r, tabulação \t, simbolo de dolar\$, \\, \0nnn, \xnn  ";

	echo"<br>";

	define ("meunome","Ari");
	echo "<br>";
	define ("peso",80);
	echo "O meu nome é " . meunome;
	echo "<br>";
	echo "<br>";
	echo "O meu peso é " . peso . " Quilos! ";
	echo "<br>";



	?>	
</body>
</html>
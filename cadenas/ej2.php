<?php 
$st1="las principales ciudades de Italia son  Milán, Nápoles y Roma";
	$st2= substr($st1, -10);// muestra los últimos 10 caracteres de la palabra.
	$v=str_word_count($st1); // imprime el número de palabras de la frase
echo "<br> la frase tiene $v palabras";
	print "<br>Texto original: $st1"; 
	print "<br>texto substraido: $st2";
	?>
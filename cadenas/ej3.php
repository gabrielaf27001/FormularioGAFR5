<?php  
	$cad="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua";
	$cad2= substr($cad, 5, 10); // muestra el texto menos los 5 primeros y los últimos 10 caracteres 
	$v=str_word_count($cad); // imprime el número de palabras
echo "<br> la frase tiene $v palabras";
	print "<br>texto original: $cad<br>";
 print "texto substraido: $cad2"
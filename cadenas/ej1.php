
<?php  
	$cad="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua";
	$cad2= substr($cad, 3, -5); // muestra el texto menos los 3 primeros y los últimos 5 caracteres 
	$v=str_word_count($cad); // imprime el número de palabras de la frase
echo "<br> la frase tiene $v caracteres";
	print "<br>texto original: $cad<br>";
 print "texto substraido: $cad2"
	?>



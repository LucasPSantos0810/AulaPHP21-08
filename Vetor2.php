<?php

	//Criação do Array
	$carros [4] = "Clio";
	$carros [11] = "Versa";
	$carros [] = "Sandero";
	
	echo $carros[4]. "<br>"; //Resultado Clio
	echo $carros[5]. "<br>"; //Sem Resultado
	echo $carros[11]. "<br>"; //Resultado Versa
	echo $carros[12]. "<br>"; //Resultado Sandero
	
?>
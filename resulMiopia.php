<?php

	require('template/head.php');
	require('template/container.php');
	
	$e = $_GET["e"];
	$f = $_GET["f"];
	
	if($e == 1 & $f ==1){
			echo "<h2 align='center'>Há uma grande possibilidade de que você tenha miopia nos dois olhos, Consulte seu Oftalmologista para que as providências sejam tomadas</h2>";
			echo "<img src='img/emoji3.png' width='300px' height='300px' style='margin-left:28%'>";
	}
	else if($e == 1 & $f ==2){
			echo "<h2 align='center'>Há uma grande possibilidade de que você tenha miopia no olho direito, Consulte seu Oftalmologista para que as providências sejam tomadas</h2>";
			echo "<img src='img/emoji3.png' width='300px' height='300px' style='margin-left:28%'>";
	}
	else if($e == 1 & $f ==3){
			echo "<h2 align='center'>Há uma grande possibilidade de que você tenha miopia no olho direito e hipermetropia no esquerdo, Consulte seu Oftalmologista para que as providências sejam tomadas</h2>";
			echo "<img src='img/emoji3.png' width='300px' height='300px' style='margin-left:28%'>";	
	}
	else if($e == 2 & $f ==1){
			echo "<h2 align='center'>Há uma grande possibilidade de que você tenha miopia no olho direito, Consulte seu Oftalmologista para que as providências sejam tomadas</h2>";
			echo "<img src='img/emoji3.png' width='300px' height='300px' style='margin-left:28%'>";
	}
	else if($e == 2 & $f ==2){
			echo "<h2 align='center'>Você não possui nenhum tipo de problema nos olhinhos, mas por garantia consulte seu Oftalmologista para que as providências sejam tomadas</h2>";
			echo "<img src='img/emoji0.jpg' width='300px' height='300px' style='margin-left:28%'>";
	}
	else if($e == 2 & $f ==3){
			echo "<h2 align='center'>Há uma grande possibilidade de que você tenha hipermetropia no olho esquerdo, Consulte seu Oftalmologista para que as providências sejam tomadas</h2>";
			echo "<img src='img/emoji3.png' width='300px' height='300px' style='margin-left:28%'>";	
	}
	else if($e == 3 & $f ==1){
			echo "<h2 align='center'>Há uma grande possibilidade de que você tenha hipermetropia no olho direito e miopia no olho esquerdo, Consulte seu Oftalmologista para que as providências sejam tomadas</h2>";
			echo "<img src='img/emoji3.png' width='300px' height='300px' style='margin-left:28%'>";
	}
	else if($e == 3 & $f ==2){
			echo "<h2 align='center'>Há uma grande possibilidade de que você tenha hipermetropia no olho direito, Consulte seu Oftalmologista para que as providências sejam tomadas</h2>";
			echo "<img src='img/emoji3.png' width='300px' height='300px' style='margin-left:28%'>";
	}
	else if($e == 3 & $f ==3){
			echo "<h2 align='center'>Há uma grande possibilidade de que você tenha hipermetropia nos dois olhos, Consulte seu Oftalmologista para que as providências sejam tomadas</h2>";
			echo "<img src='img/emoji3.png' width='300px' height='300px' style='margin-left:28%'>";	
	}
?>
	<a href="index.php"><h5 style="margin-left:30%;">Clique aqui para voltar para a página inicial</h5></a>

<?php
	require('template/footer.php');	
?>
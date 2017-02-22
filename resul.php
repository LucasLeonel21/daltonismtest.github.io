<?php

	require('template/head.php');
	require('template/container.php');
	
	$e = $_GET["e"];

	switch ($e) {
		case 0:
			echo "<h2 align='center'>Não houve nenhum erro no teste! Parece que você não é daltônico, para resultados mais precisos, visite um oftalmologista. Obrigado pela visita, conheça nossos outros testes.</h2>";
			echo "<img src='img/emoji0.jpg' width='300px' height='300px' style='margin-left:28%'>";
			break;
		
		case 1: 
			echo "<h2 align='center'>Você errou 1 questão! Há possibilidade de daltonismo em você, consulte seu oftalmologista o para um melhor diagnóstico. Obrigado pela visita, conheça nossos outros testes.</h2>";
			echo "<img src='img/emoji1.png' width='300px' height='300px' style='margin-left:28%'>";
			break;

		case 2:
			echo "<h2 align='center'>Você errou 2 questões do teste!. Há muita chance de você ser portador de daltonismo. Recomendado uma consulta ao seu oftalmologista. Obrigado pela visita, conheça nossos outros testes.</h2>";
			echo "<img src='img/emoji3.png' width='300px' height='300px' style='margin-left:28%'>";
			break;
		
		case 3: 
			echo "<h2 align='center'>Você errou 3 questões do teste! Há uma grande chance de você ser daltônico, Recomendado uma consulta no oftalmologista urgentemente para a confirmação do diagnóstico. Obrigado pela visita, conheça nossos outros testes.</h2>";
			echo "<img src='img/emoji3.png' width='300px' height='300px' style='margin-left:28%'>";
			break;

		default:
			echo "O que voce está fazendo aqui? acho que eu falhei em certas circustâncias";
			break;
	}
?>
	<a href="index.php"><h5 style="margin-left:30%;">Clique aqui para voltar para a página inicial</h5></a>

<?php
	require('template/footer.php');	
?>
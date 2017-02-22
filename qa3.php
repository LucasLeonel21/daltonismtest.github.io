<?php

	require('template/head.php');
	require('template/container.php');
	$e = $_GET["e"];
	require('template/hearts2.php');
	$f = $e+1;
?>

		<img src="img/abacaxiAC.jpg" class="imgSnellen60" class="img-rounded"><br>
		
				<p style="margin-left: 25%;">Escolha a imagem que representa a imagem acima:</p>	

				<a href="qa4.php?e=<?php echo $f; ?>"><img src="img/cereja.jpg" class="imgFrutas"></a>
				<a href="qa4.php?e=<?php echo $e; ?>"><img src="img/abacaxi.jpg" width="250px" height="250px"></a>
				<a href="qa4.php?e=<?php echo $f; ?>"><img src="img/banana.jpg" class="imgFrutas"></a>
				<a href="qa4.php?e=<?php echo $f; ?>"><img src="img/maca.jpg" width="250px" height="250px"></a>

<?php

	require('template/footer.php');	
?>
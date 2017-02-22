<?php

	require('template/head.php');
	require('template/container.php');
	$e = $_GET['e'];
	require('template/hearts2.php');
	$f = $e+1;
?>
		<img src="img/macaB.jpg" class="imgSnellen20" class="img-rounded"><br>
		
				<p style="margin-left: 25%;">Escolha a imagem que representa a imagem acima:</p>	

				<a href="resulAcuidade.php?e=<?php echo $f; ?>"><img src="img/cereja.jpg" class="imgFrutas"></a>
				<a href="resulAcuidade.php?e=<?php echo $f; ?>"><img src="img/abacaxi.jpg" width="250px" height="250px"></a>
				<a href="resulAcuidade.php?e=<?php echo $f; ?>"><img src="img/morangoF.jpg" class="imgFrutas"></a>
				<a href="resulAcuidade.php?e=<?php echo $e; ?>"><img src="img/maca.jpg" width="250px" height="250px"></a>

<?php
	require('template/footer.php');	
?>
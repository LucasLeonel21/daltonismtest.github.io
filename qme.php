<?php

	require('template/head.php');
	require('template/container2.php');
	$e = $_GET["e"];
?>


		<img src="img/miopia.png" class="imgMiopia" class="img-rounded"><br>
		
				<img src="img/rostoE.gif" width="250px" height="250px" class="imgRosto" class="img-rounded">
				<p style="margin-left: 10%;">Feche este olhinho com a mão, qual o lado que o gato está com a cor mais forte?</p>	
				
				
		<a href="resulMiopia.php?e=<?php echo $e; ?>&f=1"><img src="img/esquerda.png" width="170px" height="170px" style="margin-left: 70px;"></a>
		<a href="resulMiopia.php?e=<?php echo $e; ?>&f=2"><img src="img/dois.jpg" width="170px" height="170px"></a>
		<a href="resulMiopia.php?e=<?php echo $e; ?>&f=3"><img src="img/direita.png" width="170px" height="170px"></a>


<?php

	require('template/footer.php');	
?>
<?php

	require('template/head.php');
	require('template/container.php');
	
	$e = $_GET['e'];

	require('template/hearts.php');

?>

		<img src="img/dog.png" class="img" class="img-rounded" style="margin-left: 140px;"><br>

			<p style="margin-left: 25%;">Escolha a imagem que representa a imagem acima:</p>	
			<?php 
			$f = $e+1;
			
			echo "<a href='qd6.php?e=$f'><img src='img/butterflyB.jpg' width='250px' height='250px' style='margin-left: 80px;'>";
			echo "<a href='qd6.php?e=$f'><img src='img/beaar.gif' width='250px' height='250px'>";
			echo "<a href='qd6.php?e=$e'><img src='img/doge.gif' width='250px' height='250px' style='margin-left: 80px;'>";
  			echo "<a href='qd6.php?e=$f'><img src='img/carroB.jpg' width='250px' height='250px'>";
  			
  			?>

<?php

	require('template/footer.php');	
?>
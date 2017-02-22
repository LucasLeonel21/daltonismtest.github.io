<div class="hearts">
	<?php
		
	
		if($e == 0){
			echo "<img src='img/coracaoE.png' width='50px' height='50px'> <img src='img/coracaoE.png' width='50px' height='50px'> <img src='img/coracaoE.png' width='50px' height='50px'>";
		}
		else if($e == 1){
			echo "<img src='img/coracaoE.png' width='50px' height='50px'><img src='img/coracaoE.png' width='50px' height='50px'><img src='img/coracao.png' width='50px' height='50px'>";
		}
		else if($e == 2){
			echo "<img src='img/coracaoE.png' width='50px' height='50px'><img src='img/coracao.png' width='50px' height='50px'><img src='img/coracao.png' width='50px' height='50px'>";
		}
		else if($e == 3){
			echo "<img src='img/coracao.png' width='50px' height='50px'><img src='img/coracao.png' width='50px' height='50px'><img src='img/coracao.png' width='50px' height='50px'>";
			header('Location: resulAcuidade.php?e='.$e);
		}

	?>
	
</div>
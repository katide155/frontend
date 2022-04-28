<?php
	if(!isset ($_GET['image'])){
		$image = "";
	}
	else{
		$image = $_GET['image'];
	}
?>
<section class="container clear">
	<h1> Nuotraukos pavadinimas </h1>
	<div class="imageBox">
		<img src="files/foto/<?php echo $image;?>.jpg" alt="img"/>
	</div>



	<div class="flex-container">
		<div class="flex-container-child">
		1
		</div>
		<div class="flex-container-child">
		2
		</div>
		<div class="flex-container-child">
		3
		</div>
		<div class="flex-container-child">
		4
		</div>	
		<div class="flex-container-child">
		5
		</div>
		<div class="flex-container-child">
		6
		</div>
		<div class="flex-container-child">
		7
		</div>
		<div class="flex-container-child">
		8
		</div>
		<div class="flex-container-child">
		9
		</div>
	</div>	
</section>

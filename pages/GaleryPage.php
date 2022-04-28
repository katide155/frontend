<?php

?>
<section class="container clear">
	<h1> Galerija </h1>
	
	<div class="cirkleGal">
		<div class="cirkleGalCont">
			<div class="cirkleGalMainImg">
				<img src="include/img/mainCirkle.png" alt="homeimg"/>
			</div>
			
			<div class="cirkleGalImg1">
				<img src="include/img/circkePict1.png" alt="homeimg"/>
			</div>	
			<div class="cirkleGaltext1">Pora žodžių paaiškinimui1</div>
			<div class="cirkleGalImg2">
				<img src="include/img/circkePict2.png" alt="homeimg"/>
			</div>
			<div class="cirkleGaltext2">Pora žodžių paaiškinimui2</div>
			<div class="cirkleGalImg3">
				<img src="include/img/circkePict3.png" alt="homeimg"/>
			</div>
			<div class="cirkleGaltext3">Pora žodžių paaiškinimui3</div>
			<div class="cirkleGalImg4">
				<img src="include/img/circkePict4.png" alt="homeimg"/>
			</div>
			<div class="cirkleGaltext4">Pora žodžių paaiškinimui4</div>
			<div class="cirkleGalImg5">
				<img src="include/img/circkePict1.png" alt="homeimg"/>
			</div>
			<div class="cirkleGaltext5">Pora žodžių paaiškinimui5</div>
			<div class="cirkleGalImg6">
				<img src="include/img/circkePict2.png" alt="homeimg"/>
			</div>
			<div class="cirkleGaltext6">Pora žodžių paaiškinimui6</div>
			<div class="cirkleGalImg7">
				<img src="include/img/circkePict3.png" alt="homeimg"/>
			</div>
			<div class="cirkleGaltext7">Pora žodžių paaiškinimui7</div>
			<div class="cirkleGalImg8">
				<img src="include/img/circkePict4.png" alt="homeimg"/>
			</div>
			<div class="cirkleGaltext8">Pora žodžių paaiškinimui8</div>
			<div class="cirkleGalImg9">
				<img src="include/img/circkePict1.png" alt="homeimg"/>
			</div>
			<div class="cirkleGaltext9">Pora žodžių paaiškinimui9</div>
			<div class="cirkleGalImg10">
				<img src="include/img/circkePict2.png" alt="homeimg"/>
			</div>
			<div class="cirkleGaltext10">Pora žodžių paaiškinimui10</div>			
		</div>	
	</div>
	
	<div class="galItems">
		<?php
			for ($x = 1; $x <= 7; $x++) {
			echo '<a href="?psl=GaleryItemPage&image=' .$x .'"><img src="files/foto/'.$x .'.jpg" alt="img"/></a>';
			}
		?> 
	</div>
</section>

<?php

	$name=$_POST['name'];
    $email=$_POST['email'];
	$region=$_POST['region']; 
    $comment=$_POST['comment'];

 
?>
<section class="container">
	<div class="actionPage">
		<h2>Sveiki <span><?php echo $name ?> </span> Jūsų užklausą gavome</h2>
		<div class="contactsForm">
			<h3>Jūsų pateikti duomenys:</h3>
			<p><b>Elektroninis paštas:</b> <span><?php echo  $email ?> </span></p>
			<p><b>Apskritis: </b><span><?php echo  $region ?> </span></p>
			<p><b>Jūsų žinutė:</b> <span><?php echo  $comment ?> </span></p>
		</div>
	</div>
</section>

<?php

?>
<section class="container">
	<div class="contactsPage">
		<h2>Mūsų kontaktai</h2>
		<div class="contactsSide col-6 col-sm-12">
			<div class=" ">
				
					<p>Adresas: Beržų alėja 10, Rokiškis</p>
					<p>Telefonas: 8-611-61111</p>
					<p>E. paštas: info@berzualeja.lt</p>
			</div>
		</div>
		<div class="contactsForm col-6 col-sm-12">
			<h3>Parašykite mums:</h3>
			<form action="?psl=ActionPage" method="post">
				<label for="name">Vardas</label>
				<input type="text" id="name" name="name" placeholder="Jūsų vardas">

				<label for="email">Elektroninis paštas</label>
				<input type="text" id="email" name="email" placeholder="Jūsų e. paštas">

				<label for="region">Apskritis</label>
				<select id="region" name="region">
					<option value="Alytus">Alytus</option>
					<option value="Kaunas">Kaunas</option>
					<option value="Klaipėda">Klaipėda</option>
					<option value="Marijampolė">Marijampolė</option>
					<option value="Panevėžys">Panevėžys</option>
					<option value="Šiauliai">Šiauliai</option>
					<option value="Tauragė">Tauragė</option>
					<option value="Telšiai">Telšiai</option>
					<option value="Utena">Utena</option>
					<option value="Vilnius">Vilnius</option>
				</select>

				<label for="comment">Jūsų komentaras</label>
				<textarea id="comment" name="comment" placeholder="Jūsų komentaras" style="height:200px"></textarea>

				<input class="contSent" type="submit" value="Siųsti">
			</form>
		</div>
	</div>
</section>

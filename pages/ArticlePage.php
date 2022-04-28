 <?php 

?>
<!-- https://www.w3schools.com/code/tryit.asp?filename=GUS9MISQCUFV čia n+k elementu sekos -->


<section class="container clear">
	<h1> Straipsnis čia turėtų būti, bet... </h1>
	<h2> Čia forma su vaizdo keitimo elementais </h2>
	<div class="contactsForm col-8 col-sm-12">
	<form>
		<div class="formRow">
			<div class="formRowElement">
				<label for="boxContent" class="formLabel">Elemento turinys:</label>
				<div class="formInputBox">
					<input type="text" class="formInput" id="boxContent" name="boxContent" oninput='changeElementInner("boxContent", "boxIn")'>
				</div>
			</div>
			<div class="formRowElement">
				<label for="boxFontSize" class="formLabel">Šrifto dydis:</label>
				<div class="formInputBox">
					<input type="text" class="formInput" id="boxFontSize" name="boxFontSize" oninput='changeElementStyle("boxFontSize", "fontSize", "boxIn", true)'>
				</div>
			</div>
		</div>	
		<div class="formRow">
			<div class="">
				<div class="formRowElement">
					<label class="formLabel"> Šrifto stilius:</label>
				</div>
				<div class="formRowElement sidewidbig">
					<div class="listBoxField ceckWidth">
						<input type="checkbox" class="formCheckInput" id="boxFontStyleBold" name="boxFontStyleBold" value="bold" onchange='changeElementStyle("boxFontStyleBold", "fontWeight", "boxIn", false)'>
						<label for="boxFontStyleBold" class="formCheckLabel"> Paryškintas</label>
					</div>
					<div class="listBoxField ceckWidth">
						<input type="checkbox" class="formCheckInput" id="boxFontStyleItalic" name="boxFontStyleItalic" value="italic" onchange='changeElementStyle("boxFontStyleItalic", "fontStyle", "boxIn", false)'>
						<label for="boxFontStyleItalic" class="formCheckLabel"> Italic</label>
					</div>
					<div class="listBoxField ceckWidth">
						<input type="checkbox" class="formCheckInput" id="boxFontStyleUnderline" name="boxFontStyleUnderline" value="underline" onchange='changeElementStyle("boxFontStyleUnderline", "textDecoration", "boxIn", false)'>
						<label for="boxFontStyleUnderline" class="formCheckLabel"> Pabrauktas</label>
					</div>
				</div>
			</div>
		</div>	
		<div class="formRow">
			<div class="">
				<div class="formRowElement">
					<label class="formLabel"> Horizontalus lygiavimas:</label>
				</div>
				<div class="formRowElement sidewidbig">
					<div class="listBoxField ceckWidth">
						<input type="radio" class="formRadioInput" id="leftSide" name="halign" value="left" onchange='changeElementStyle("leftSide", "textAlign", "boxIn", false)'>
						<label for="leftSide" class="form-label col-1">Kairėje</label>
					</div>
					<div class="listBoxField ceckWidth">
						<input type="radio" class="formRadioInput" id="center" name="halign" value="center" onchange='changeElementStyle("center", "textAlign", "boxIn", false)'>
						<label for="center" class="form-label col-1">Centruoti</label>
					</div>
					<div class="listBoxField ceckWidth">
						<input type="radio" class="formRadioInput" id="rightSide" name="halign" value="right" onchange='changeElementStyle("rightSide", "textAlign", "boxIn", false)'>
						<label for="rightSide" class="form-label col-1">Dešinėje</label>
					</div>
				</div>
			</div>
		</div>	
		<div class="formRow">
			<div class="">
				<div class="formRowElement">
					<label class="formLabel"> Verikalus lygiavimas:</label>
				</div>
				<div class="formRowElement sidewidbig">
					<div class="listBoxField ceckWidth">				
						<input type="radio" class="formRadioInput" id="top" name="valign" value="start" onchange='changeElementStyle("top", "alignItems", "boxOut", false)'>
						<label for="top" class="form-label col-1">Viršuje</label>
					</div>
					<div class="listBoxField ceckWidth">
						<input type="radio" class="formRadioInput" id="middle" name="valign" value="center" onchange='changeElementStyle("middle", "alignItems", "boxOut", false)'>
						<label for="middle" class="form-label col-1">Viduryje</label>
					</div>
					<div class="listBoxField ceckWidth">
						<input type="radio" class="formRadioInput" id="bottom" name="valign" value="end" onchange='changeElementStyle("bottom", "alignItems", "boxOut", false)'>
						<label for="bottom" class="form-label col-1">Apačioje</label>
					</div>
				</div>
			</div>
		</div>	
		<div class="formRow">
			
			<div class="formRowElement">

				<label for="boxWidth" class="formLabel">Elemento plotis:</label>
				<div class="formInputBox">
					<input type="text" class="formInput" id="boxWidth" name="boxWidth" onchange='changeElementStyle("boxWidth", "width", "boxOut", true)'>
				</div>
			</div>
			<div class="formRowElement">
				<label for="boxHeight" class="formLabel">Elemento aukštis:</label>
				<div class="formInputBox">
					<input type="text" class="formInput" id="boxHeight" name="boxHeight" onchange='changeElementStyle("boxHeight", "height", "boxOut", true)'>	
				</div>
			</div>
		</div>			
		<div class="formRow">
			<div class="">
				<div class="formRowElement">
					<label class="formLabel">Spalvos:</label>
				</div>
				<div class="formRowElement sidewidbig ">
					<div class="listBoxField nowrap">
						<div class="formInputBox colorBox">
							<input type="color" class="formColor" id="textColor" name="textColor" onchange='changeElementStyle("textColor", "color", "boxIn", false)'>
						</div>
						<label for="textColor" class="colorLabel">Teksto:</label>
					</div>
					<div class="listBoxField nowrap">
						<div class="formInputBox colorBox">
							<input type="color" class="formColor" id="boxColor" name="boxColor" onchange='changeElementStyle("boxColor", "backgroundColor", "boxOut", false)'>
						</div>
						<label for="boxColor" class="colorLabel">Elemento:</label>
					</div>
					<div class="listBoxField nowrap">
						<div class="formInputBox colorBox">
							<input type="color" class="formColor" id="borderColor" name="borderColor" onchange='changeElementStyle("borderColor", "borderColor", "boxOut", false)'>
						</div>
						<label for="borderColor" class="colorLabel">Rėmelio:</label>
					</div>
				</div>
			</div>
		</div>			
		<div class="formRow">	
			<div class="formRowElement">
				<label for="borderWidth" class="formLabel">Rėmelio plotis:</label>
				<div class="formInputBox">
					<input type="range" class="formRange" min="0" max="100" id="borderWidth" name="borderWidth" onchange='changeElementStyle("borderWidth", "borderWidth", "boxOut", true)'>
				</div>
			</div>
			<div class="formRowElement">
				<label for="boxPadding" class="formLabel">Elemento "padding'as":</label>
				<div class="formInputBox">
					<input type="range" class="formRange" min="0" max="100" id="boxPadding" name="boxPadding" onchange='changeElementStyle("boxPadding", "padding", "boxOut", true)'>
				</div>
			</div>
		</div>	
	</form>
	</div>
	<div class="boxbox col-4 col-sm-12">
		<div id="boxOut">
			<div id="boxIn" >ooo
			</div>	
		</div>
	</div>
</section>

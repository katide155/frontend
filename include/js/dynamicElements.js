let boxId = "boxIn";
let value = "";
let inner = "";
let param = "";
let fontSize = "fontSize";
let px = "";


function getElementValue(id){
	if ((typeof id == "string") && (id)){
		let value = document.getElementById(id).value;
		return value;
	}
}

function getElementInner(id){
	if ((typeof id == "string") && (id)){
		let inner =  document.getElementById(id).innerHTML;
		return inner;
	}
}

function setElementInner(id, value){
	if ((typeof id == "string") && (id)){
		document.getElementById(id).innerHTML = value;
	}
}


function changeElementInner(inputId, elemId){
	if ((typeof inputId == "string") && (inputId)){
		if ((typeof elemId == "string") && (elemId)){
			setElementInner(elemId, getElementValue(inputId));
		}
	}
}

function changeElementStyle(inputId, param, elemId, unit){
	if ((typeof inputId == "string") && (inputId)){
		 
		if (((typeof elemId == "string") && (elemId)) && (param)){	
			if (unit == true)
				px = "px";
			let inputElem = document.getElementById(inputId);
			let elem = document.getElementById(elemId);
			let elemType = inputElem.type;
			
			switch(elemType){
				case "checkbox":
					if(inputElem.checked){
						elem.style[param] = getElementValue(inputId);
					}
					else{
						startString = param.substr(0, 4) ;
						if(startString == "font")
							elem.style[param] = "normal";
						else
							elem.style[param] = "none";
					}
				break;
				case "radio":
					elem.style[param] = getElementValue(inputId);
				break;
				case "color":
					elem.style[param] = getElementValue(inputId);
				break;
				default:
					elem.style[param] = getElementValue(inputId) + px;
			}
		}
	}
}





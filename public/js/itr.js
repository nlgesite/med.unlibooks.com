
	function getInt(intVal){
		if(intVal != '' && intVal[0] == '('){
			intVal = intVal.toString().replace(/\(/g,'');
			intVal = intVal.toString().replace(/\)/g,'');
			intVal *= -1;
		}
		
		if(intVal != ''){
			intVal = intVal.toString().replace(/,/g,'');
			intVal = parseFloat(intVal);
		}
		
		if(isNaN(intVal)){
			return 0;
		}
		return intVal;
	}
	
	function roundFloat(intVal){
		// intVal = getInt(intVal);
		
		intVal = getInt(intVal);
		
		intVal = Number((intVal).toFixed(2));
		
		array = intVal.toString().split('.');
		
		if(array[1]){
			if(array[1].length == 1){
				array[1] += '0';
			}
		} else {
			array[1] = '00';
		}
		
		intVal = array.join('.');
		
		hasComma = commafy(intVal);
		
		if(hasComma[0] == '-'){
			hasComma = hasComma.toString().replace(/-/g,'');
			
			hasComma = '('+hasComma+')';
		}
		return hasComma;
	}

	function commafy( num ) {

		var n= num.toString().split(".");
		n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		return n.join(".");
	}

	$('input[type="text"]').change(function(){
		myInt = roundFloat($(this).val());
		$(this).val(myInt);
	});



$(function(){
	
	$('input[name="part2Item12A"]').change(function(){
		part2Item12A = getInt($('input[name="part2Item12A"]').val());
		
		part2Item12B = part2Item12A * (0.12);
		
		$('input[name="part2Item12B"]').val(part2Item12B);
		$('input[name="part2Item12B"]').change();
	})
	
	$('input[name="part2Item13A"]').change(function(){
		part2Item13A = getInt($('input[name="part2Item13A"]').val());
		
		part2Item13B = part2Item13A * (0.12);
		
		$('input[name="part2Item13B"]').val(part2Item13B);
		$('input[name="part2Item13B"]').change();
	})
	
	$('input[name="part2Item12A"], input[name="part2Item13A"], input[name="part2Item14"], input[name="part2Item15"]').change(function(){
		part2Item12A = getInt($('input[name="part2Item12A"]').val());
		part2Item13A = getInt($('input[name="part2Item13A"]').val());
		part2Item14 = getInt($('input[name="part2Item14"]').val());
		part2Item15 = getInt($('input[name="part2Item15"]').val());
		
		part2Item16A = part2Item12A + part2Item13A + part2Item14 + part2Item15;
		
		$('input[name="part2Item16A"]').val(part2Item16A);
		$('input[name="part2Item16A"]').change();
	})
	
	$('input[name="part2Item12B"], input[name="part2Item13B"]').change(function(){
		part2Item12B = getInt($('input[name="part2Item12B"]').val());
		part2Item13B = getInt($('input[name="part2Item13B"]').val());
		
		part2Item16B = part2Item12B + part2Item13B;
		
		$('input[name="part2Item16B"]').val(part2Item16B);
		$('input[name="part2Item16B"]').change();
	})
	
	$('input[name="part2Item17A"], input[name="part2Item17B"], input[name="part2Item17C"], input[name="part2Item17D"], input[name="part2Item17E"]').change(function(){
		part2Item17A = getInt($('input[name="part2Item17A"]').val());
		part2Item17B = getInt($('input[name="part2Item17B"]').val());
		part2Item17C = getInt($('input[name="part2Item17C"]').val());
		part2Item17D = getInt($('input[name="part2Item17D"]').val());
		part2Item17E = getInt($('input[name="part2Item17E"]').val());
		
		part2Item17F = part2Item17A + part2Item17B + part2Item17C + part2Item17D + part2Item17E;
		
		$('input[name="part2Item17F"]').val(part2Item17F);
		$('input[name="part2Item17F"]').change();
	})
	
	$('input[name="part2Item18A"]').change(function(){
		part2Item18A = getInt($('input[name="part2Item18A"]').val());
		
		part2Item18B = part2Item18A * (0.12);
		
		$('input[name="part2Item18B"]').val(part2Item18B);
		$('input[name="part2Item18B"]').change();
	})
	
	$('input[name="part2Item18C"]').change(function(){
		part2Item18C = getInt($('input[name="part2Item18C"]').val());
		
		part2Item18D = part2Item18C * (0.12);
		
		$('input[name="part2Item18D"]').val(part2Item18D);
		$('input[name="part2Item18D"]').change();
	})
	
	$('input[name="part2Item18E"]').change(function(){
		part2Item18E = getInt($('input[name="part2Item18E"]').val());
		
		part2Item18F = part2Item18E * (0.12);
		
		$('input[name="part2Item18F"]').val(part2Item18F);
		$('input[name="part2Item18F"]').change();
	})
	
	$('input[name="part2Item18G"]').change(function(){
		part2Item18G = getInt($('input[name="part2Item18G"]').val());
		
		part2Item18H = part2Item18G * (0.12);
		
		$('input[name="part2Item18H"]').val(part2Item18H);
		$('input[name="part2Item18H"]').change();
	})
	
	$('input[name="part2Item18I"]').change(function(){
		part2Item18I = getInt($('input[name="part2Item18I"]').val());
		
		part2Item18J = part2Item18I * (0.12);
		
		$('input[name="part2Item18J"]').val(part2Item18J);
		$('input[name="part2Item18J"]').change();
	})
	
	$('input[name="part2Item18K"]').change(function(){
		part2Item18K = getInt($('input[name="part2Item18K"]').val());
		
		part2Item18L = part2Item18K * (0.12);
		
		$('input[name="part2Item18L"]').val(part2Item18L);
		$('input[name="part2Item18L"]').change();
	})
	
	$('input[name="part2Item18N"]').change(function(){
		part2Item18N = getInt($('input[name="part2Item18N"]').val());
		
		part2Item18O = part2Item18N * (0.12);
		
		$('input[name="part2Item18O"]').val(part2Item18O);
		$('input[name="part2Item18O"]').change();
	})
	
	$('input[name="part2Item18A"], input[name="part2Item18C"], input[name="part2Item18E"], input[name="part2Item18G"], input[name="part2Item18I"], input[name="part2Item18K"], input[name="part2Item18M"], input[name="part2Item18N"]').change(function(){
	
		part2Item18A = getInt($('input[name="part2Item18A"]').val());
		part2Item18C = getInt($('input[name="part2Item18C"]').val());
		part2Item18E = getInt($('input[name="part2Item18E"]').val());
		part2Item18G = getInt($('input[name="part2Item18G"]').val());
		part2Item18I = getInt($('input[name="part2Item18I"]').val());
		part2Item18K = getInt($('input[name="part2Item18K"]').val());
		part2Item18M = getInt($('input[name="part2Item18M"]').val());
		part2Item18N = getInt($('input[name="part2Item18N"]').val());
		
		part2Item18P = part2Item18A + part2Item18C + part2Item18E + part2Item18G + part2Item18I + part2Item18K + part2Item18M + part2Item18N;
		
		$('input[name="part2Item18P"]').val(part2Item18P);
		$('input[name="part2Item18P"]').change();
	})
	
	$('input[name="part2Item17F"], input[name="part2Item18B"], input[name="part2Item18D"], input[name="part2Item18F"], input[name="part2Item18H"], input[name="part2Item18J"], input[name="part2Item18L"], input[name="part2Item18O"]').change(function(){
	
		part2Item17F = getInt($('input[name="part2Item17F"]').val());
		part2Item18B = getInt($('input[name="part2Item18B"]').val());
		part2Item18D = getInt($('input[name="part2Item18D"]').val());
		part2Item18F = getInt($('input[name="part2Item18F"]').val());
		part2Item18H = getInt($('input[name="part2Item18H"]').val());
		part2Item18J = getInt($('input[name="part2Item18J"]').val());
		part2Item18L = getInt($('input[name="part2Item18L"]').val());
		part2Item18O = getInt($('input[name="part2Item18O"]').val());
		
		part2Item19 = part2Item17F + part2Item18B + part2Item18D + part2Item18F + part2Item18H + part2Item18J + part2Item18L + part2Item18O;
		
		$('input[name="part2Item19"]').val(part2Item19);
		$('input[name="part2Item19"]').change();
	})
	
	$('input[name="part2Item20A"], input[name="part2Item20B"], input[name="part2Item20C"], input[name="part2Item20D"], input[name="part2Item20E"]').change(function(){
	
		part2Item20A = getInt($('input[name="part2Item20A"]').val());
		part2Item20B = getInt($('input[name="part2Item20B"]').val());
		part2Item20C = getInt($('input[name="part2Item20C"]').val());
		part2Item20D = getInt($('input[name="part2Item20D"]').val());
		part2Item20E = getInt($('input[name="part2Item20E"]').val());
		
		part2Item20F = part2Item20A + part2Item20B + part2Item20C + part2Item20D + part2Item20E;
		
		$('input[name="part2Item20F"]').val(part2Item20F);
		$('input[name="part2Item20F"]').change();
	})
	
	$('input[name="part2Item19"], input[name="part2Item20F"]').change(function(){
	
		part2Item19 = getInt($('input[name="part2Item19"]').val());
		part2Item20F = getInt($('input[name="part2Item20F"]').val());
		
		part2Item21 = part2Item19 - part2Item20F;
		
		$('input[name="part2Item21"]').val(part2Item21);
		$('input[name="part2Item21"]').change();
	})
	
	$('input[name="part2Item16B"], input[name="part2Item21"]').change(function(){
	
		part2Item16B = getInt($('input[name="part2Item16B"]').val());
		part2Item21 = getInt($('input[name="part2Item21"]').val());
		
		part2Item22 = part2Item16B - part2Item21;
		$('input[name="part2Item22"]').val(part2Item22);
		// $('input[name="part2Item22"]').change();
	})
	
	$('input[name="part2Item23A"], input[name="part2Item23B"], input[name="part2Item23C"], input[name="part2Item23D"], input[name="part2Item23E"], input[name="part2Item23F"]').change(function(){
	
		part2Item23A = getInt($('input[name="part2Item23A"]').val());
		part2Item23B = getInt($('input[name="part2Item23B"]').val());
		part2Item23C = getInt($('input[name="part2Item23C"]').val());
		part2Item23D = getInt($('input[name="part2Item23D"]').val());
		part2Item23E = getInt($('input[name="part2Item23E"]').val());
		part2Item23F = getInt($('input[name="part2Item23F"]').val());
		
		part2Item23G = part2Item23A + part2Item23B + part2Item23C + part2Item23D + part2Item23E + part2Item23F;
		
		$('input[name="part2Item23G"]').val(part2Item23G);
		$('input[name="part2Item23G"]').change();
	})
	
	$('input[name="part2Item22"], input[name="part2Item23G"]').change(function(){
	
		part2Item22 = getInt($('input[name="part2Item22"]').val());
		part2Item23G = getInt($('input[name="part2Item23G"]').val());
		
		part2Item24 = part2Item22 - part2Item23G;
		
		$('input[name="part2Item24"]').val(part2Item24);
		$('input[name="part2Item24"]').change();
	})
	
	$('input[name="part2Item25A"], input[name="part2Item25B"], input[name="part2Item25C"]').change(function(){
	
		part2Item25A = getInt($('input[name="part2Item25A"]').val());
		part2Item25B = getInt($('input[name="part2Item25B"]').val());
		part2Item25C = getInt($('input[name="part2Item25C"]').val());
		
		part2Item25D = part2Item25A + part2Item25B + part2Item25C;
		
		$('input[name="part2Item25D"]').val(part2Item25D);
		$('input[name="part2Item25D"]').change();
	})
	
	$('input[name="part2Item24"], input[name="part2Item25D"]').change(function(){
	
		part2Item24 = getInt($('input[name="part2Item24"]').val());
		part2Item25D = getInt($('input[name="part2Item25D"]').val());
		
		part2Item26 = part2Item24 + part2Item25D; 
		
		$('input[name="part2Item26"]').val(part2Item26);
		$('input[name="part2Item26"]').change();
	})
});
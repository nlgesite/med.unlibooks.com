$(function(){
	
	$('input[name="part2Item15A"]').change(function(){
		part2Item15A = getInt($('input[name="part2Item15A"').val());
		
		part2Item15B = part2Item15A * (0.12);
		
		$('input[name="part2Item15B"]').val(roundFloat(part2Item15B));
		$('input[name="part2Item15B"]').change();
	})
	
	$('input[name="part2Item16A"]').change(function(){
		part2Item16A = getInt($('input[name="part2Item16A"').val());
		
		part2Item16B = part2Item16A * (0.12);
		
		$('input[name="part2Item16B"]').val(part2Item16B);
		$('input[name="part2Item16B"]').change();
	})
	
	$('input[name="part2Item15A"], input[name="part2Item16A"], input[name="part2Item17"], input[name="part2Item18"]').change(function(){
		part2Item15A = getInt($('input[name="part2Item15A"').val());
		part2Item16A = getInt($('input[name="part2Item16A"').val());
		part2Item17 = getInt($('input[name="part2Item17"').val());
		part2Item18 = getInt($('input[name="part2Item18"').val());
		
		part2Item19A = part2Item15A + part2Item16A + part2Item17 + part2Item18;
		
		$('input[name="part2Item19A"]').val(part2Item19A);
		$('input[name="part2Item19A"]').change();
	})
	
	$('input[name="part2Item15B"], input[name="part2Item16B"]').change(function(){
		part2Item15B = getInt($('input[name="part2Item15B"').val());
		part2Item16B = getInt($('input[name="part2Item16B"').val());
		
		part2Item19B = part2Item15B + part2Item16B;
		
		$('input[name="part2Item19B"]').val(part2Item19B);
		$('input[name="part2Item19B"]').change();
	})
	
	$('input[name="part2Item20A"], input[name="part2Item20B"], input[name="part2Item20C"], input[name="part2Item20D"], input[name="part2Item20E"]').change(function(){
		part2Item20A = getInt($('input[name="part2Item20A"').val());
		part2Item20B = getInt($('input[name="part2Item20B"').val());
		part2Item20C = getInt($('input[name="part2Item20C"').val());
		part2Item20D = getInt($('input[name="part2Item20D"').val());
		part2Item20E = getInt($('input[name="part2Item20E"').val());
		
		part2Item20F = part2Item20A + part2Item20B + part2Item20C + part2Item20D + part2Item20E;
		
		$('input[name="part2Item20F"]').val(part2Item20F);
		$('input[name="part2Item20F"]').change();
	})
	
	$('input[name="part2Item21A"]').change(function(){
		part2Item21A = getInt($('input[name="part2Item21A"').val());
		
		part2Item21B = part2Item21A * (0.12);
		
		$('input[name="part2Item21B"]').val(part2Item21B);
		$('input[name="part2Item21B"]').change();
	})
	
	$('input[name="part2Item21C"]').change(function(){
		part2Item21C = getInt($('input[name="part2Item21C"').val());
		
		part2Item21D = part2Item21C * (0.12);
		
		$('input[name="part2Item21D"]').val(part2Item21D);
		$('input[name="part2Item21D"]').change();
	})
	
	$('input[name="part2Item21E"]').change(function(){
		part2Item21E = getInt($('input[name="part2Item21E"').val());
		
		part2Item21F = part2Item21E * (0.12);
		
		$('input[name="part2Item21F"]').val(part2Item21F);
		$('input[name="part2Item21F"]').change();
	})
	
	$('input[name="part2Item21G"]').change(function(){
		part2Item21G = getInt($('input[name="part2Item21G"').val());
		
		part2Item21H = part2Item21G * (0.12);
		
		$('input[name="part2Item21H"]').val(part2Item21H);
		$('input[name="part2Item21H"]').change();
	})
	
	$('input[name="part2Item21I"]').change(function(){
		part2Item21I = getInt($('input[name="part2Item21I"').val());
		
		part2Item21J = part2Item21I * (0.12);
		
		$('input[name="part2Item21J"]').val(part2Item21J);
		$('input[name="part2Item21J"]').change();
	})
	
	$('input[name="part2Item21K"]').change(function(){
		part2Item21K = getInt($('input[name="part2Item21K"').val());
		
		part2Item21L = part2Item21K * (0.12);
		
		$('input[name="part2Item21L"]').val(part2Item21L);
		$('input[name="part2Item21L"]').change();
	})
	
	$('input[name="part2Item21N"]').change(function(){
		part2Item21N = getInt($('input[name="part2Item21N"').val());
		
		part2Item21O = part2Item21N * (0.12);
		
		$('input[name="part2Item21O"]').val(part2Item21O);
		$('input[name="part2Item21O"]').change();
	})
	
	$('input[name="part2Item21A"], input[name="part2Item21C"], input[name="part2Item21E"], input[name="part2Item21G"], input[name="part2Item21I"], input[name="part2Item21K"], input[name="part2Item21M"], input[name="part2Item21N"]').change(function(){
	
		part2Item21A = getInt($('input[name="part2Item21A"').val());
		part2Item21C = getInt($('input[name="part2Item21C"').val());
		part2Item21E = getInt($('input[name="part2Item21E"').val());
		part2Item21G = getInt($('input[name="part2Item21G"').val());
		part2Item21I = getInt($('input[name="part2Item21I"').val());
		part2Item21K = getInt($('input[name="part2Item21K"').val());
		part2Item21M = getInt($('input[name="part2Item21M"').val());
		part2Item21N = getInt($('input[name="part2Item21N"').val());
		
		part2Item21P = part2Item21A + part2Item21C + part2Item21E + part2Item21G + part2Item21I + part2Item21K + part2Item21M + part2Item21N;
		
		$('input[name="part2Item21P"]').val(part2Item21P);
		$('input[name="part2Item21P"]').change();
	})
	
	$('input[name="part2Item20F"], input[name="part2Item21B"], input[name="part2Item21D"], input[name="part2Item21F"], input[name="part2Item21H"], input[name="part2Item21J"], input[name="part2Item21L"], input[name="part2Item21O"]').change(function(){
	
		part2Item20F = getInt($('input[name="part2Item20F"').val());
		part2Item21B = getInt($('input[name="part2Item21B"').val());
		part2Item21D = getInt($('input[name="part2Item21D"').val());
		part2Item21F = getInt($('input[name="part2Item21F"').val());
		part2Item21H = getInt($('input[name="part2Item21H"').val());
		part2Item21J = getInt($('input[name="part2Item21J"').val());
		part2Item21L = getInt($('input[name="part2Item21L"').val());
		part2Item21O = getInt($('input[name="part2Item21O"').val());
		
		part2Item22 = part2Item20F + part2Item21B + part2Item21D + part2Item21F + part2Item21H + part2Item21J + part2Item21L + part2Item21O;
		
		$('input[name="part2Item22"]').val(part2Item22);
		$('input[name="part2Item22"]').change();
	})
	
	$('input[name="part2Item23A"], input[name="part2Item23B"], input[name="part2Item23C"], input[name="part2Item23D"], input[name="part2Item23E"]').change(function(){
	
		part2Item23A = getInt($('input[name="part2Item23A"').val());
		part2Item23B = getInt($('input[name="part2Item23B"').val());
		part2Item23C = getInt($('input[name="part2Item23C"').val());
		part2Item23D = getInt($('input[name="part2Item23D"').val());
		part2Item23E = getInt($('input[name="part2Item23E"').val());
		
		part2Item23F = part2Item23A + part2Item23B + part2Item23C + part2Item23D + part2Item23E;
		
		$('input[name="part2Item23F"]').val(part2Item23F);
		$('input[name="part2Item23F"]').change();
	})
	
	$('input[name="part2Item22"], input[name="part2Item23F"]').change(function(){
	
		part2Item22 = getInt($('input[name="part2Item22"').val());
		part2Item23F = getInt($('input[name="part2Item23F"').val());
		
		part2Item24 = part2Item22 - part2Item23F;
		
		$('input[name="part2Item24"]').val(part2Item24);
		$('input[name="part2Item24"]').change();
	})
	
	$('input[name="part2Item19B"], input[name="part2Item24"]').change(function(){
	
		part2Item19B = getInt($('input[name="part2Item19B"').val());
		part2Item24 = getInt($('input[name="part2Item24"').val());
		
		part2Item25 = part2Item19B - part2Item24;
		
		$('input[name="part2Item25"]').val(part2Item25);
		$('input[name="part2Item25"]').change();
	})
	
	$('input[name="part2Item26A"], input[name="part2Item26B"], input[name="part2Item26C"], input[name="part2Item26D"], input[name="part2Item26E"], input[name="part2Item26F"], input[name="part2Item26G"]').change(function(){
	
		part2Item26A = getInt($('input[name="part2Item26A"').val());
		part2Item26B = getInt($('input[name="part2Item26B"').val());
		part2Item26C = getInt($('input[name="part2Item26C"').val());
		part2Item26D = getInt($('input[name="part2Item26D"').val());
		part2Item26E = getInt($('input[name="part2Item26E"').val());
		part2Item26F = getInt($('input[name="part2Item26F"').val());
		part2Item26G = getInt($('input[name="part2Item26G"').val());
		
		part2Item26H = part2Item26A + part2Item26B + part2Item26C + part2Item26D + part2Item26E + part2Item26F + part2Item26G;
		
		$('input[name="part2Item26H"]').val(part2Item26H);
		$('input[name="part2Item26H"]').change();
	})
	
	$('input[name="part2Item25"], input[name="part2Item26H"]').change(function(){
	
		part2Item25 = getInt($('input[name="part2Item25"').val());
		part2Item26H = getInt($('input[name="part2Item26H"').val());
		
		part2Item27 = part2Item25 - part2Item26H;
		
		$('input[name="part2Item27"]').val(part2Item27);
		$('input[name="part2Item27"]').change();
	})
	
	$('input[name="part2Item28A"], input[name="part2Item28B"], input[name="part2Item28C"]').change(function(){
	
		part2Item28A = getInt($('input[name="part2Item28A"').val());
		part2Item28B = getInt($('input[name="part2Item28B"').val());
		part2Item28C = getInt($('input[name="part2Item28C"').val());
		
		part2Item28D = part2Item28A + part2Item28B + part2Item28C;
		
		$('input[name="part2Item28D"]').val(part2Item28D);
		$('input[name="part2Item28D"]').change();
	})
	
	$('input[name="part2Item27"], input[name="part2Item28D"]').change(function(){
	
		part2Item27 = getInt($('input[name="part2Item27"').val());
		part2Item28D = getInt($('input[name="part2Item28D"').val());
		
		part2Item29 = part2Item27 + part2Item28D; 
		
		$('input[name="part2Item29"]').val(part2Item29);
		$('input[name="part2Item29"]').change();
	})
});
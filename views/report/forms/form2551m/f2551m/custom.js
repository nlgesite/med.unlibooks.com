$(function(){
	$('input[name="iTR2551M14C"]').change(function(){
		taxableAmount = $.number($(this).val(), 2);
		rate = $.number($('input[name="iTR2551M14D"]').val(), 2);
		rate = rate.toString().replace(/,/g,'');
		rate = rate / 100;
		taxableAmount = taxableAmount.toString().replace(/,/g,'');
		
		$('input[name="iTR2551M14E"]').val($.number((taxableAmount * rate), 2));
		$(this).val($.number($(this).val(), 2));
		$('input[name="iTR2551M14D"]').val($.number($('input[name="iTR2551M14D"]').val(), 2));
		$(this).change();
	});
	$('input[name="iTR2551M15C"]').change(function(){
		taxableAmount = $.number($(this).val(), 2);
		rate = $.number($('input[name="iTR2551M15D"]').val(), 2);
		rate = rate.toString().replace(/,/g,'');
		rate = rate / 100;
		taxableAmount = taxableAmount.toString().replace(/,/g,'');
		
		$('input[name="iTR2551M15"]').val($.number((taxableAmount * rate), 2));
		$(this).val($.number($(this).val(), 2));
		$('input[name="iTR2551M15D"]').val($.number($('input[name="iTR2551M15D"]').val(), 2));
		$(this).change();
	});
	$('input[name="iTR2551M16C"]').change(function(){
		taxableAmount = $.number($(this).val(), 2);
		rate = $.number($('input[name="iTR2551M16D"]').val(), 2);
		rate = rate.toString().replace(/,/g,'');
		rate = rate / 100;
		taxableAmount = taxableAmount.toString().replace(/,/g,'');
		
		$('input[name="iTR2551M16E"]').val($.number((taxableAmount * rate), 2));
		$(this).val($.number($(this).val(), 2));
		$('input[name="iTR2551M16D"]').val($.number($('input[name="iTR2551M16D"]').val(), 2));
		$(this).change();
	});
	$('input[name="iTR2551M17C"]').change(function(){
		taxableAmount = $.number($(this).val(), 2);
		rate = $.number($('input[name="iTR2551M17D"]').val(), 2);
		rate = rate.toString().replace(/,/g,'');
		rate = rate / 100;
		taxableAmount = taxableAmount.toString().replace(/,/g,'');
		
		$('input[name="iTR2551M17E"]').val($.number((taxableAmount * rate), 2));
		$(this).val($.number($(this).val(), 2));
		$('input[name="iTR2551M17D"]').val($.number($('input[name="iTR2551M17D"]').val(), 2));
		$(this).change();
	});
	$('input[name="iTR2551M18C"]').change(function(){
		taxableAmount = $.number($(this).val(), 2);
		rate = $.number($('input[name="iTR2551M18D"]').val(), 2);
		rate = rate.toString().replace(/,/g,'');
		rate = rate / 100;
		taxableAmount = taxableAmount.toString().replace(/,/g,'');
		
		$('input[name="iTR2551M18E"]').val($.number((taxableAmount * rate), 2));
		$(this).val($.number($(this).val(), 2));
		$('input[name="iTR2551M18D"]').val($.number($('input[name="iTR2551M18D"]').val(), 2));
		
		$(this).change();
	});
	
	$('input[name="iTR2551M14E"],' + 
		'input[name="iTR2551M15E"],' +
		'input[name="iTR2551M16E"],' +
		'input[name="iTR2551M17E"],' +
		'input[name="iTR2551M18E"]' 
		).change(function(){
			val1 = getInt($('input[name="iTR2551M14E"]').val());
			val2 = getInt($('input[name="iTR2551M15E"]').val());
			val3 = getInt($('input[name="iTR2551M16E"]').val());
			val4 = getInt($('input[name="iTR2551M17E"]').val());
			val5 = getInt($('input[name="iTR2551M18E"]').val());
			
			total = val1 + val2 + val3 + val4 + val5;
			
			$('input[name="iTR2551M19"]').val($.number(total, 2));
		});
		
	function getInt(value){
		if(value != ''){
			value = value.toString().replace(/,/g,'');
			value = parseFloat(value);
		}
		
		return value;
	}
})
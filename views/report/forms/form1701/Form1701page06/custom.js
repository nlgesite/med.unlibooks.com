$(function(){
	$('input[name="pg2Item41Taxpayer"], input[name="pg2Item42Taxpayer"]').change(function(){
		pg2Item41Taxpayer = parseInt($('input[name="pg2Item41Taxpayer"]').val());
		pg2Item42Taxpayer = parseInt($('input[name="pg2Item42Taxpayer"]').val());
		
		pg2Item43Taxpayer = pg2Item41Taxpayer - pg2Item42Taxpayer;
		
		$('input[name="pg2Item43Taxpayer"]').val(pg2Item43Taxpayer);
		$('input[name="pg2Item43Taxpayer"]').change();
	})
});
// URL = '/rev1-new/';

$(function(){
	integer = 0;//parseInt('12,313,123.3423234');
	theNumber = formatMoney(integer, 2, '.', ',');
	// alert(theNumber);
	//alert('Hello World!');
	$('form').on('submit',function(){
		returns = true;
		$(this).find('.number').each(function(){
			if($.isNumeric($(this).val())){
			} else {
				alert('Please enter a number');
				this.focus();
				returns = false;
				return false;
			}
		});
		
		return returns;
	});
	
	$('.date').datepicker({
		dateFormat: 'yy-mm-dd',
		showAnim: 'blind',
      showOtherMonths: true,
      selectOtherMonths: true
	});
	
	$('.tiNumber').mask("999-999-999-9999");
	
	$(".formatDate").mask("99-99-99");
	
	// $(".isAmount").mask("99-99-99");
	// $.mask.definitions['~']='[+-]';
	// $(".isAmount").mask("999,999,999");
	
	$('.dateString').datepicker({
		dateFormat: 'MM dd, yy',
		showAnim: 'blind',
      showOtherMonths: true,
      selectOtherMonths: true,
	  changeMonth: true,
      changeYear: true
	});
	
	$('.monthDateString').datepicker({
		dateFormat: 'MM dd',
		showAnim: 'blind',
		  showOtherMonths: true,
		  selectOtherMonths: true,
		  changeMonth: true
	});
	$('#formSelectMonth').change(function(){
		location=$(this).val();
		return false;
	});
	// alert('asd');
	/*
	$('#hideMenu').click(function(){
		// ReadCookie();
		hiddens = getCookie('close');
		if(hiddens == 'true'){
			setCookie('close','false');
			$("#leftPane").show('slow');
			$("#rightContainerHolder").css("margin-left","14%");
			$('#hideMenu').val('<<<');
			$('#hideMenu').attr('title','Hide Menu');
		} else {
			setCookie('close','true');
			$("#leftPane").hide('slow');
			$("#rightContainerHolder").css("margin-left","0px");
			$('#hideMenu').val('>>>');
			$('#hideMenu').attr('title','Show Menu');
		}
	});
	*/
	/*
	$('#hideMenu').click(function(){
		// ReadCookie();
		hiddens = getCookie('close');
		if(hiddens == 'true'){
			setCookie('close','false');
			hidePanel();
		} else {
			setCookie('close','true');
			hidePanel();
		}
	});
	
	hidePanel();
	*/
	$('#formSelectMonth').change(function(){
		value = $(this).val();
		
		location = value;
	});
	
	
	// del_cookie("close");
	// document.cookie = 'close=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
	// alert(document.cookie);
		
	$('.isNumeric').change(function(){
		$(this).removeClass('error');
		value = $(this).val();
		value = value == '' ? 0.00 : value;
		str = value.toString().replace(/,/g,'');
		if(value[0] == '('){
			str = str.toString().replace(/\(/g,'');
			str = str.toString().replace(/\)/g,'');
			str *= (-1);
		}
		isAmount = isFloatNumber(str);
		
		if(isAmount){
			
		} else {
			$(this).addClass('error');
		}
		str = roundFloat(str);
		value = commafy(str);
		$(this).val(value);
	});	
	
	$('.isNumeric').each(function(){
		$(this).removeClass('error');
		value = $(this).val();
		// alert(value);
		if( value == '' ) {
			return;
		} else {
			/*
			if(value[0] == '('){
				value = value.toString().replace(/\(/g,'');
				value = value.toString().replace(/\)/g,'');
				value *= -1;
			}
			str = value.toString().replace(/,/g,'');
			*/
			str = getInt(value);
			isAmount = isFloatNumber(str);
			
			if(isAmount){
				
			} else {
				$(this).addClass('error');
			}
			str = roundFloat(str);
			value = commafy(str);
			$(this).val(value);
		}
	});
});
/*
function hidePanel(){
	hidden = getCookie('close');
	//alert(hidden);
	if(hidden == 'true'){
		setCookie('close','true');
		$("#leftPane").hide();
		$("#rightContainerHolder").css("margin-left","0px");
		$('#hideMenu').val('>>>');
		$('#hideMenu').attr('title','Show Menu');
		
	} else {
		setCookie('close','false');
		$("#leftPane").show();
		$("#rightContainerHolder").css("margin-left","14%");
		$('#hideMenu').val('<<<');
		$('#hideMenu').attr('title','Hide Menu');
	}
}
*/
/*
function hidePanel(){
	hidden = getCookie('close');
	//alert(hidden);
	if(hidden == 'true'){
		setCookie('close','true');
		$("#leftPane").css('width','3%');
		$("#rightContainerHolder").css("margin-left","4%");
		// $('#hideMenu').val('>>>');
		$('#hideMenu').css('transform','');
		$('#hideMenu').css('-ms-transform','');
		$('#hideMenu').css('-webkit-transform','');
		
		$('#hideMenu').attr('alt','>>>');
		$('#hideMenu').attr('title','Show Menu');
		$('#brandLogo2').removeClass('hidden');
		$('#brandLogo').addClass('hidden');
		$('.menuText').addClass('hidden');
		$('.imgMenuHolder').css('float','none');
		$('.imgMenuHolder').css('margin','0 auto');
		$('.disclaimer').addClass('hidden');
	} else {
		setCookie('close','false');
		$("#leftPane").css('width','13%','slow');
		$("#rightContainerHolder").css("margin-left","14%");
		// $('#hideMenu').val('<<<');
		$('#hideMenu').css('transform','rotate(180deg)');
		$('#hideMenu').css('-ms-transform','rotate(180deg)');
		$('#hideMenu').css('-webkit-transform','rotate(180deg)');
		
		$('#hideMenu').attr('alt','<<<');
		$('#hideMenu').attr('title','Hide Menu');
		$('#brandLogo2').addClass('hidden');
		$('#brandLogo').removeClass('hidden');
		$('.menuText').removeClass('hidden');
		$('.imgMenuHolder').css('float','left');
		$('.imgMenuHolder').css('margin','0 0 0 10px');
		$('.disclaimer').removeClass('hidden');
	}
}
*/
function getInt(intVal){
	// intVal = intVal.join(", ");
	
	if(intVal != ''){
		intVal = intVal.toString().replace(/,/g,'');
	}
	if(intVal[0] == '('){
		intVal = intVal.toString().replace(/\(/g,'');
		intVal = intVal.toString().replace(/\)/g,'');
		intVal *= -1;
	}
	intVal = parseFloat(intVal);
	if(isNaN(intVal)){
		return 0.00;
	}
	// alert(intVal);
	return intVal;
}

function roundFloat(intVal){
	// intVal = getInt(intVal);
	// alert(intVal);
	intVal = parseFloat(intVal);
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
		// intVal *= -1;
		hasComma = '('+hasComma+')';
	}
	return hasComma;
}

function getCookie(c_name){
	var allcookies = document.cookie;
	   // alert("All Cookies : " + allcookies );

	   // Get all the cookies pairs in an array
	   cookiearray  = allcookies.split(';');

	   // Now take key value pair out of this array
	   for(var i=0; i<cookiearray.length; i++){
		  name = cookiearray[i].split('=')[0];
		  value = cookiearray[i].split('=')[1];
		  if(name == c_name){
			return value;
		  }
		  // alert("Key is : " + name + " and Value is : " + value);
	   }
	   
	var c_value = document.cookie;
	var c_start = c_value.indexOf(" " + c_name + "=");
	if (c_start == -1){
		c_start = c_value.indexOf(c_name + "=");
	}
	if (c_start == -1){
		c_value = null;
	}else{
		c_start = c_value.indexOf("=", c_start) + 1;
		var c_end = c_value.indexOf(";", c_start);
		if (c_end == -1){
			c_end = c_value.length;
		}
		c_value = unescape(c_value.substring(c_start,c_end));
	}
	return c_value;
}

function setCookie(c_name,value){
	document.cookie = c_name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
	exdays = null;
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : ";expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}

function del_cookie(name){
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}
function ReadCookie()
    {
       var allcookies = document.cookie;
       alert("All Cookies : " + allcookies );

       // Get all the cookies pairs in an array
       cookiearray  = allcookies.split(';');

       // Now take key value pair out of this array
       for(var i=0; i<cookiearray.length; i++){
          name = cookiearray[i].split('=')[0];
          value = cookiearray[i].split('=')[1];
          alert("Key is : " + name + " and Value is : " + value);
       }
    }

function formatMoney(n, c, d, t){
	c = isNaN(c = Math.abs(c)) ? 2 : c, 
	d = d == undefined ? "." : d, 
	t = t == undefined ? "," : t, 
	s = n < 0 ? "-" : "", 
	i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
	j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};
///////////For Checking
function isFloatNumber(str){
	// return true;
	
	var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
	if(numberRegex.test(str)) {
		return true;
	}
	if(str == ''){
		return true;
	}
	
	return false;
}

function commafy( num ) {
	// num = parseString(num);
	// num = getInt(num);
	var n= num.toString().split(".");
	//Comma-fies the first part
	n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	//Combines the two sections
	// alert(n.join("."));
	return n.join(".");
}
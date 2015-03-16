$(function() {
    $('.close').click(function() {
        $('.popBack').addClass('hidden');
    });

    $('.tasknet').number(true, 2);
    $('.itemnet').number(true, 2);
    $('.numeric').number(true, 2);

    $(document).on("click", ".numeric", function() {
        $(this).val(roundFloat(getInt($(this).val())));// $(this).number(true, 2);
    });

    $(document).on("focusout", ".isNumeric", function() {
        $(this).val(roundFloat(getInt($(this).val())));//$(this).val($.number($(this).val(), 2));
    });

    $(document).on("focusin", ".isNumeric", function() {
        if ($(this).val() === '0.00') {
            $(this).val('');
        }
    });

    $(document).on("focusin", ".nodecimal", function() {
        if ($(this).val() === '0') {
            $(this).val('');
        }
    });

    $(document).on("focusout", ".nodecimal", function() {
        $(this).val($.number($(this).val(), 0));
    });

    $(document).on("focusout", ".rate", function() {
        $(this).val($.number($(this).val(), 2));
    });
//    alert(taxyears);
    $("#di, .dd").datepicker(
            {beforeShowDay: function(date) {
                    //getMonth()  is 0 based
                    if ($.inArray(date.getFullYear() + '-' + date.getMonth(), taxyears) > -1) {
                        return [false, ''];
                    }
                    return [true, ''];
                },
                dateFormat: 'mm/dd/yy'//,
//                changeMonth:true,
//                changeYear:true
            }

    );
})
function getInt(intVal) {
    if (intVal != '' && intVal[0] == '(') {
        intVal = intVal.toString().replace(/\(/g, '');
        intVal = intVal.toString().replace(/\)/g, '');
        intVal *= -1;
    }

    if (intVal != '') {
        intVal = intVal.toString().replace(/,/g, '');
        intVal = parseFloat(intVal);
    }

    if (isNaN(intVal) || intVal === '') {
        return 0;
    }
    return intVal;
}

function roundFloat(intVal) {
    // intVal = getInt(intVal);
    // alert(intVal);
    intVal = getInt(intVal);
    intVal = Number((intVal).toFixed(2));

    array = intVal.toString().split('.');

    if (array[1]) {
        if (array[1].length == 1) {
            array[1] += '0';
        }
    } else {
        array[1] = '00';
    }

    intVal = array.join('.');

    hasComma = commafy(intVal);

    if (hasComma[0] == '-') {
        hasComma = hasComma.toString().replace(/-/g, '');
        // intVal *= -1;
        hasComma = '(' + hasComma + ')';
    }
    return hasComma;
}

function commafy(num) {

    var n = num.toString().split(".");
    n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return n.join(".");
}

$('input[type="text"]').change(function() {
    myInt = roundFloat($(this).val());
    $(this).val(myInt);
});





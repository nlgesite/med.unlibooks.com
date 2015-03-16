$(function() {
//    $('.item_24').click(function() {
//        $('.item_24').val('');
//        $(this).val('x');
//
//        tempVal = $(this).parent().find('#item24').val();
//
//        $('#item24Value').val(tempVal);
//    });

    $('input[name="iTR1701Q27A"]').change(function() {
        $('input[name="iTR1701Q28A"]').val(roundFloat(getInt($('input[name="iTR1701Q26A"]').val()) + getInt($('input[name="iTR1701Q27A"]').val())));

        $('input[name="iTR1701Q30A"]').val(roundFloat(getInt($('input[name="iTR1701Q28A"]').val()) - getInt($('input[name="iTR1701Q29A"]').val())));

        $('input[name="iTR1701Q32A"]').val(roundFloat(getInt($('input[name="iTR1701Q30A"]').val()) + getInt($('input[name="iTR1701Q31A"]').val())));

        if (paymentmode == 'osd') {
            $('input[name="iTR1701Q33A"]').val(roundFloat(getInt($('input[name="iTR1701Q32A"]').val()) * (40 / 100)));
        }

        $('input[name="iTR1701Q34A"]').val(roundFloat(getInt($('input[name="iTR1701Q32A"]').val()) - getInt($('input[name="iTR1701Q33A"]').val())));

        $('input[name="iTR1701Q36A"]').val(roundFloat(getInt($('input[name="iTR1701Q34A"]').val()) + getInt($('input[name="iTR1701Q35A"]').val())));

        $.post(URL + 'report/provisionaryIncomeTax', {net: getInt($('input[name="iTR1701Q36A"]').val())},
        function(returnData) {
            $('input[name="iTR1701Q37A"]').val(roundFloat(returnData));

            $('input[name="iTR1701Q39A"]').val(roundFloat(getInt($('input[name="iTR1701Q37A"]').val()) - getInt($('input[name="iTR1701Q38M"]').val())));
            
            taxpayerComputation();
        });

    });

    $('input[name="iTR1701Q35A"]').change(function() {
        $('input[name="iTR1701Q36A"]').val(roundFloat(getInt($('input[name="iTR1701Q34A"]').val()) + getInt($('input[name="iTR1701Q35A"]').val())));

        $.post(URL + 'report/provisionaryIncomeTax', {net: $('input[name="iTR1701Q36A"]').val()},
        function(returnData) {
            $('input[name="iTR1701Q37A"]').val(roundFloat(returnData));

            $('input[name="iTR1701Q39A"]').val(roundFloat(getInt($('input[name="iTR1701Q37A"]').val()) - getInt($('input[name="iTR1701Q38M"]').val())));
            
            taxpayerComputation();
        });
    });

    $('input[name="iTR1701Q37A"]').change(function() {
        $('input[name="iTR1701Q39A"]').val(roundFloat(getInt($('input[name="iTR1701Q37A"]').val()) - getInt($('input[name="iTR1701Q38M"]').val())));

        taxpayerComputation();
    });

    $('input[name="iTR1701Q40A"],input[name="iTR1701Q40C"],input[name="iTR1701Q40E"]').change(function() {
        $('input[name="iTR1701Q40G"]').val(roundFloat(getInt($('input[name="iTR1701Q40A"]').val()) + getInt($('input[name="iTR1701Q40C"]').val()) + getInt($('input[name="iTR1701Q40E"]').val())));

        taxpayerComputation();
    });

    $('input[name="iTR1701Q38A"],input[name="iTR1701Q38C"],input[name="iTR1701Q38E"],input[name="iTR1701Q38G"],input[name="iTR1701Q38K"]').change(function() {
        $('input[name="iTR1701Q38M"]').val(roundFloat(getInt($('input[name="iTR1701Q38A"]').val()) + getInt($('input[name="iTR1701Q38C"]').val()) + getInt($('input[name="iTR1701Q38E"]').val()) + getInt($('input[name="iTR1701Q38G"]').val()) + getInt($('input[name="iTR1701Q38K"]').val())));

        $('input[name="iTR1701Q39A"]').val(roundFloat(getInt($('input[name="iTR1701Q37A"]').val()) - getInt($('input[name="iTR1701Q38M"]').val())));

        taxpayerComputation();
    });

    //spouse
    $('input[name="iTR1701Q27B"],input[name="iTR1701Q26B"],input[name="iTR1701Q29B"],input[name="iTR1701Q33B"],input[name="iTR1701Q31B"]').change(function() {
        $('input[name="iTR1701Q28B"]').val(roundFloat(getInt($('input[name="iTR1701Q26B"]').val()) + getInt($('input[name="iTR1701Q27B"]').val())));

        $('input[name="iTR1701Q30B"]').val(roundFloat(getInt($('input[name="iTR1701Q28B"]').val()) - getInt($('input[name="iTR1701Q29B"]').val())));

        $('input[name="iTR1701Q32B"]').val(roundFloat(getInt($('input[name="iTR1701Q30B"]').val()) + getInt($('input[name="iTR1701Q31B"]').val())));
       
        if (paymentmode == 'osd') {
            $('input[name="iTR1701Q33B"]').val(roundFloat(getInt($('input[name="iTR1701Q32B"]').val() * (40 / 100))));
        }

        $('input[name="iTR1701Q34B"]').val(roundFloat(getInt($('input[name="iTR1701Q32B"]').val()) - getInt($('input[name="iTR1701Q33B"]').val())));

        $('input[name="iTR1701Q36B"]').val(roundFloat(getInt($('input[name="iTR1701Q34B"]').val()) + getInt($('input[name="iTR1701Q35B"]').val())));

        $.post(URL + 'report/provisionaryIncomeTax', {net: getInt($('input[name="iTR1701Q36B"]').val())},
        function(returnData) {
            $('input[name="iTR1701Q37B"]').val(roundFloat(returnData));

            $('input[name="iTR1701Q39B"]').val(roundFloat(getInt($('input[name="iTR1701Q37B"]').val()) - getInt($('input[name="iTR1701Q38N"]').val())));
            
            spouseComputation();
        });

//        $('input[name="iTR1701Q36B"]').number(true, 2);
    });

//    $('input[name="iTR1701Q33B"]').change(function() {
//        $('input[name="iTR1701Q34B"]').val(getInt($('input[name="iTR1701Q32B"]').val()) - getInt($('input[name="iTR1701Q33B"]').val()));
//        $('input[name="iTR1701Q34B"]').number(true, 2);
//        
//        $('input[name="iTR1701Q36B"]').val(getInt($('input[name="iTR1701Q34B"]').val()) + getInt($('input[name="iTR1701Q35B"]').val()));
//
//        $.post(URL + 'report/provisionaryIncomeTax', {net: $('input[name="iTR1701Q36B"]').val()},
//        function(returnData) {
//            $('input[name="iTR1701Q37B"]').val(returnData);
//            $('input[name="iTR1701Q37B"]').number(true, 2);
//
//            $('input[name="iTR1701Q39B"]').val(getInt($('input[name="iTR1701Q37B"]').val()) - getInt($('input[name="iTR1701Q38N"]').val()));
//            $('input[name="iTR1701Q39B"]').number(true, 2);
//            
//            spouseComputation();
//        });
//
//        $('input[name="iTR1701Q36B"]').number(true, 2);
//    });
    
    $('input[name="iTR1701Q35B"]').change(function() {
        $('input[name="iTR1701Q36B"]').val(roundFloat(getInt($('input[name="iTR1701Q34B"]').val()) + getInt($('input[name="iTR1701Q35B"]').val())));

        $.post(URL + 'report/provisionaryIncomeTax', {net: getInt($('input[name="iTR1701Q36B"]').val())},
        function(returnData) {
            $('input[name="iTR1701Q37B"]').val(roundFloat(returnData));

            $('input[name="iTR1701Q39B"]').val(roundFloat(getInt($('input[name="iTR1701Q37B"]').val()) - getInt($('input[name="iTR1701Q38N"]').val())));
            spouseComputation();
        });

//        $('input[name="iTR1701Q36B"]').number(true, 2);
    });

    $('input[name="iTR1701Q37B"],input[name="iTR1701Q38N"]').change(function() {
        $('input[name="iTR1701Q39B"]').val(roundFloat(getInt($('input[name="iTR1701Q37B"]').val()) - getInt($('input[name="iTR1701Q38N"]').val())));

        spouseComputation();
    });

    $('input[name="iTR1701Q40B"],input[name="iTR1701Q40D"],input[name="iTR1701Q40F"]').change(function() {
        $('input[name="iTR1701Q40H"]').val(roundFloat(getInt($('input[name="iTR1701Q40B"]').val()) + getInt($('input[name="iTR1701Q40D"]').val()) + getInt($('input[name="iTR1701Q40F"]').val())));

        spouseComputation();
    });

    $('input[name="iTR1701Q38B"],input[name="iTR1701Q38D"],input[name="iTR1701Q38F"],input[name="iTR1701Q38H"],input[name="iTR1701Q38L"]').change(function() {
        $('input[name="iTR1701Q38N"]').val(roundFloat(getInt($('input[name="iTR1701Q38B"]').val()) + getInt($('input[name="iTR1701Q38D"]').val()) + getInt($('input[name="iTR1701Q38F"]').val()) + getInt($('input[name="iTR1701Q38H"]').val()) + getInt($('input[name="iTR1701Q38L"]').val())));

        $('input[name="iTR1701Q39B"]').val(roundFloat(getInt($('input[name="iTR1701Q37B"]').val()) - getInt($('input[name="iTR1701Q38N"]').val())));

        spouseComputation();
    });
})

function taxpayerComputation() {
    $('input[name="iTR1701Q41A"]').val(roundFloat(getInt($('input[name="iTR1701Q39A"]').val()) + getInt($('input[name="iTR1701Q40G"]').val())));

    $('input[name="iTR1701Q41C"]').val(roundFloat(getInt($('input[name="iTR1701Q41A"]').val()) + getInt($('input[name="iTR1701Q41B"]').val())));
}

function spouseComputation() {
    $('input[name="iTR1701Q41B"]').val(roundFloat(getInt($('input[name="iTR1701Q39B"]').val()) + getInt($('input[name="iTR1701Q40H"]').val())));

    $('input[name="iTR1701Q41C"]').val(roundFloat(getInt($('input[name="iTR1701Q41A"]').val()) + getInt($('input[name="iTR1701Q41B"]').val())));
}
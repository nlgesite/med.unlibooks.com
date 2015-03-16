/* $(function() {
    $('.close').click(function() {
        $('.popBack').addClass('hidden');
    });

    $('.tasknet').number(true, 2);
    $('.itemnet').number(true, 2);
    $('.numeric').number(true, 2);

    $('.nodecimal').number(true, 0);

    $(document).on("click", ".numeric", function() {
        $(this).number(true, 2);
    });

    $(document).on("focusout", ".isNumeric", function() {
        $(this).val($.number($(this).val(), 2));
    });

    $(document).on("focusin", ".isNumeric", function() {
        if ($(this).val() === '0.00') {
            $(this).val('');
        }
    });

}) */
<style>
    @font-face {
        font-family: 'agency fb'!important;  /*a name to be used later*/
        src: url('<?= URL ?>public/fonts/AGENCYR.ttf'); /*URL to font*/
    }

    @font-face {
        font-family: 'agency fb2'!important; /*a name to be used later*/
        src: url('<?= URL ?>public/fonts/AGENCYB.ttf'); /*URL to font*/
    }
    .nifont{
        font-family:agency fb2;
    }
    #discountHolder{
        font-family: Arial;
        font-size: 13px;
        margin-top: 0;
        margin-right: 3px;
    }
    .fr{
        float: right;
    }
    .trnewInvoice{
        padding-top: 15px;
        font-size: 12px;
        font-family: verdana;
        color: #000000;
    }
    .newsc{
    }
    .trnewInvoice2{
        padding-top: 8px;
    }
    .NewRecurTable2{

    }
    .NewRecurTable2 td{
        color:#000000;
        font-size:12px;
        font-family:verdana;
        font-weight:normal;
        padding-left:15px;
    }
    .invoiceNumberTb{
        float: right;
        padding-right: 40px;
    }
    .invoiceNumberTb2{
        float: right;
        padding-right: 60px;
    }
    .table2New{
        margin-top: -2px;
    }
    .taskid{
        width: 100%;
        border: none;
        height:25px;
    }
    .descNewInvoice{

    }
    .table2-new tr:hover{
        background-color: #c8c8c8;
    }
    .table1-new tr:hover{
        background-color: #c8c8c8;
    }
    .table1-new tr:hover{
        background-color: #c8c8c8;
    }
    .buttonsInvoices{
        margin-left: 229px;
    }
    .newcost{	
        margin-top: -12px;
        width: 128px;
        margin-left: -2px;
    }
    .taskCheck{
        margin-top: 4px;
        font-family:verdana;
        font-size:12px;

    }
    .taskCheck2{
        color: #000000;;
        font-size: 12px;
        font-family: verdana;

    }
    .taskCheck2{
        font-weight: normal;
        font-family: verdana;
    }
    .taskCheck3{
        color: #000000;
        font-size: 12px;
        font-family: verdana;
        margin-top: -19px; 

    }
    .additional{
        margin-top:20px;
    }
    .lt { 
        text-align:left;		
    }
    .recid{
        padding-left: 20px;
        background-color: white;
        padding: 5px 125px 5px 7px;
        border: 1px solid #C8C8C8;
        text-decoration:none;
    }
    .NewRecurTable2 td a:hover{
        font-weight:normal;
        border: 1px solid #C8C8C8;
        text-decoration:underline;
        color:blue;
    }
    .incvat{
        font-size: 12px;
        font-family: verdana;
        margin-top: -20px;
        margin-left: 135px;
    }
    .intext{
        font-weight: normal;
        font-family: verdana;
        font-size: 12px;
    }
    .table1-new tr th:nth-child(2){
        text-align: left;
        padding:5px;
    }
    .table1-new tr th:nth-child(3){
        text-align: left;
        padding:5px;
    }

    .table1-new tr th:nth-child(4){
        text-align: left;
        padding:5px;
    }
    .table1-new tr th:nth-child(5){
        text-align: right;
        padding:5px;
    }
    .table1-new tr th:nth-child(6){
        text-align: right;
        padding:5px;
    }
    .table1-new tr th:nth-child(7){
        text-align: right;
        padding:5px;
    }
    .table2-new tr th:nth-child(2){
        text-align: left;
        padding:3px;
    }
    .table2-new tr th:nth-child(3){
        text-align: left;
        padding:5px;
    }
    .table2-new tr th:nth-child(4){
        text-align: right;
        padding:5px;
    }
    .table2-new tr th:nth-child(5){
        text-align: right;
        padding:5px;
    }
    .table2-new tr th:nth-child(6){
        text-align: right;
        padding:5px;
    }
    .table2-new tr th:nth-child(7){
        text-align: right;
        padding:5px;
    }
    .table2-new tr th:nth-child(1){

    }
    .NewRecurTable2 input[type="text"], input[type="date"]{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        height: 27px;
        width: 190px;
        background-color: white;
        border: 1px solid #C8C8C8;
        text-align: left;
        margin-top:3px;
        padding:5px; 
    }
    .newI_table select{
        width: 231px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: verdana;
        padding: 5px;
    }
    .newI_table input[type="text"]{
        width: 232px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: verdana;
        padding: 5px;
    }
    .newI_table td{
        padding-left:10px;
    }
    /*    span{
            margin-top:-15px;
        }*/
    #container1{
        float: left;
        margin-left: 26px;
        margin-top: 10px;
    }
    .percentNew{
        position: absolute;
        margin-top: -21px;
        margin-left: 84px;
    }
    select[disabled] {
        color: black;

    }
    .mystyle{
        border-bottom: solid 1px #c8c8c8;
    }
    .vata{
        text-align:right;
    }
    .a{
        background-image: url('<?= URL ?>public/images/add1a.png');
        background-repeat: no-repeat;
        width: 23px;
        height: 22px;
        font-style: italic;
        font-size: 11px;
        font-family: Calibri;
        border: none;
        background:white;
    }

    .a:hover, .a-hover{
        cursor: pointer;
        background-image: url('<?= URL ?>public/images/addhover.png');
        background-size: 72% 77%;
        width: 23px;
        height: 25px;
        background-repeat: no-repeat;
        background-position: 4px;
    } 

    .del:hover, .del-hover{
        cursor: pointer;
        background-image: url('../public/images/del1a.png'); 
        background-size: 72% 77%;
        width: 23px;
        height: 25px;
        background-repeat: no-repeat;
        background-position: 4px;
    }
    .addlinediv{
        margin-top: 33px;
        margin-left: 15px;
    }
    .inputAddline{
        padding: 5px 10px 5px 10px;
        cursor: pointer;
        /* width: 67px; */
        border-radius: 5px;
        font-family: verdana;
        font-size: 12px;
        color: white;
        border: none;
        /*  background: linear-gradient(to bottom, #B6B1B1 0%,#494949 100%); */
        background-image: url('../public/images/addline.png'); 
        background-size:100% 100%;
        width: 75px;
    }
    .reverseInvoice{
        margin-top: 15px;
        margin-left: 182px;
        color: white;
        font-family: Calibri(Body);
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
        border: none;
        width: 87px;
        height: 28px;
        background-image: url('../public/images/addsave.png'); 
        background-size:100% 100%;
    }
    .vatselectInvoice{
        width: 100%;
        border: none;
        font-size: 12px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
    }
    .bn3{
        margin-top: 15px;
        margin-left: 20px;
        width: 87px;
        height: 28px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
        margin-left: 86px;
        border: none;
        color: white;
        background-image: url('../public/images/save.png'); 
        background-size: 100% 100%;
        cursor:pointer;
    }
    .bn{
        margin-top: 15px;
        margin-left: 5px;
        color: white;
        font-family: Calibri(Body);
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
        background-color: rgb(97, 93, 93);
        border: none;
        background-image: url('../public/images/post.png'); 
        background-size: 100% 100%;
        cursor:pointer;
    }
    *::-webkit-input-placeholder {
        color: #000 !important;
        font-size: 13px !important;

    }
    *:-moz-placeholder {
        /* FF 4-18 */
        color: #000 !important;
        font-size: 12px;
        font-size: 13px !important;
    }
    *::-moz-placeholder {
        /* FF 19+ */
        color:#000 !important;
        font-size: 13px !important;
    }
    *:-ms-input-placeholder {
        /* IE 10+ */
        color: #000 !important;
        font-size: 13px !important;
    }

    ::-webkit-input-placeholder {
        color: pink;
    }
    .settingsform{
        width:700px !important;
        margin: auto;
    }
    .bodysizesetting{
        width: 517px !important;
        margin: auto;
        margin-left: 94px !important;
    }
    .companyHolderNew{
        padding-top:0px !important;
        padding-bottom: 10px !important;
    }
	.tohide{
		display:none !important;
	}
	.tblcontact{
		    margin-top: -63px !important;
			  margin-right: 11px !important;
			  width: 471px !important;
	}
	.hrClass2bottom{
		margin-top:74px !important;
		width:92% !important;
	}
	.phoneNo2two{
		margin-left:60px !important;
	}
	.hrClass2{
		width:95% !important;
	}
	
	.seconds{
		  font-size: 12px;
		  font-family: verdana;
		  color: rgb(45, 43, 43);
		  margin-left: 45px;
		  margin-top: 30px;
		  font-weight:bold;
		  display:auto !important;
	}
	
</style>
<?php $taxtype = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->typeOfTax ?>
<?php Controller::getTaxableYears(); ?>
<script>
    newrecord = "new";
</script>
<script>
    $(function() {
        taskcheck();
        itemcheck();
        eventLoader();
        function taskcheck() {
            if ($('#taskcheck').is(':checked')) {
                $('.table1-new').removeClass('hidden');
                $('.taskid').each(function(i) {
                    $(this).prop('required', 'required');
                });

            } else {
                $('.table1-new').addClass('hidden');
                $('.taskid').each(function(i) {
                    $(this).removeAttr('required');
                });
            }
            subTotal();
        }
        function itemcheck() {
            if ($('#itemcheck').is(':checked')) {
                $('.table2-new').removeClass('hidden');
                $('.items').each(function(i) {
                    $(this).prop('required', 'required');
                });
            } else {
                $('.table2-new').addClass('hidden');
                $('.items').each(function(i) {
                    $(this).removeAttr('required');
                });
            }
            subTotal();
        }

        $('#addtasks').click(function() {
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>invoice/invoiceTask",
                    function(result) {
                        $('.table1-new > tbody:last').append(result);
                    });
            $.ajaxSetup({async: true});

        });

        $(document).on("click", "#additem", function() {
            additem($(this));
        });

        function additem($object) {
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>invoice/invoiceItems",
                    function(result) {
                        $('.table2-new > tbody:last').append(result);
                        eventLoader();
                    });
            $.ajaxSetup({async: true});
        }

        $(document).on("click", "#addtask", function() {
            addtask($(this));
        });

        function addtask($object) {
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>invoice/invoiceTask",
                    function(result) {
                        $('.table1-new > tbody:last').append(result);
                        eventLoader();
                    });
            $.ajaxSetup({async: true});
        }

        $("#size").change(function() {
            if ($(this).val() == "addtask") {
                addtask($('.taskid').last());
            } else if ($(this).val() == "additem") {
                additem($('.items').last());
            }
        })

        $(document).on("change", "vatselectedInvoice", function() {
            subTotal();
        })

        $(document).on("keyup", ".rate", function() {
            $(this).parents('tr').find('.tasknet').val($.number(getInt($(this).val().replace(/,/g, '')) * $(this).parents('tr').find('.hour').val().replace(/,/g, ''), 2));
            subTotal();
        });
        $(document).on("keyup", ".hour", function() {
            $(this).parents('tr').find('.tasknet').val($.number(getInt($(this).val().replace(/,/g, '')) * $(this).parents('tr').find('.rate').val().replace(/,/g, ''), 2));
            subTotal();
        });
        $(document).on("keyup", ".unitCost", function() {
            $(this).parents('tr').find('.itemnet').val($.number(getInt($(this).val().replace(/,/g, '')) * $(this).parents('tr').find('.quantity').val().replace(/,/g, ''), 2));
            //alert($(this).val());
            subTotal();
        });
        $(document).on("keyup", ".quantity", function() {
            $(this).parents('tr').find('.itemnet').val($.number(getInt($(this).val().replace(/,/g, '')) * $(this).parents('tr').find('.unitCost').val().replace(/,/g, ''), 2));
            subTotal();
        });
        //add client//
        $(document).on("change", "#client", function() {
            $('#address').text('');
            if ($(this).val() === 'addclient') {
                $('#client option').removeAttr('selected')
                        .filter('[value=""]')
                        .attr('selected', true);
//                $('.popBack').removeClass('hidden');
//                $('.clientfrm').removeClass('hidden');
//                $('.returnurl').val('invoice');
//                $('body').css('overflow', 'hidden');
//
//                $('.close1Client').click(function() {
//                    $('.popBack').addClass('hidden');
//                    $('.clientfrm').addClass('hidden');
//                    $('.returnurl').val('');
//                    $('body').css('overflow', 'auto');
//                });
                addNewClient();
            }
            if ($(this).val() !== 'addclient' && $(this).val() !== '') {
                $.ajax({
                    url: "<?php echo URL ?>invoice/getAddress",
                    type: "POST",
                    data: {
                        clientId: $(this).val()
                    },
                    dataType: "JSON", async: false,
                    success: function(jsonStr) {
                        $('#address').text(jsonStr.address);
                        $('#currencyId option').removeAttr('selected')
                                .filter('[value="' + jsonStr.currencyId + '"]')
                                .attr('selected', true);

                        if (jsonStr.currencyId == 33) {
                            $("input[name='crate']").addClass('hidden');
                            $("input[name='crate']").removeAttr('required');
                            $('#ratetxt').addClass('hidden');
                        } else {
                            $("input[name='crate']").removeClass('hidden');
                            $("input[name='crate']").prop('required', 'required');
                            $('#ratetxt').removeClass('hidden');
                        }
                    }
                });
                subTotal();
            }
        });
        //add hmo//
        $(document).on("change", "#hmo", function() {
            // $('#address').text('');
            if ($(this).val() === 'addHmo') {
                $('#hmo option').removeAttr('selected')
                        .filter('[value=""]')
                        .attr('selected', true);
//                $('.popBack').removeClass('hidden');
//                $('.hmofrm').removeClass('hidden');
//                $('.returnurl').val('invoice');
//                $('body').css('overflow', 'hidden');
//
//                $('.close1Client').click(function() {
//                    $('.popBack').addClass('hidden');
//                    $('.hmofrm').addClass('hidden');
//                    $('.returnurl').val('');
//                    $('body').css('overflow', 'auto');
//                });
                addNewHmo();
            }
            /*  if ($(this).val() !== 'addclient' && $(this).val() !== '') {
             $.ajax({
             url: "<?php echo URL ?>invoice/getAddress",
             type: "POST",
             data: {
             clientId: $(this).val()
             },
             dataType: "JSON", async: false,
             success: function(jsonStr) {
             $('#address').text(jsonStr.address);
             $('#currencyId option').removeAttr('selected')
             .filter('[value="' + jsonStr.currencyId + '"]')
             .attr('selected', true);
             
             if (jsonStr.currencyId == 33) {
             $("input[name='crate']").addClass('hidden');
             $("input[name='crate']").removeAttr('required');
             $('#ratetxt').addClass('hidden');
             } else {
             $("input[name='crate']").removeClass('hidden');
             $("input[name='crate']").prop('required', 'required');
             $('#ratetxt').removeClass('hidden');
             }
             }
             });
             subTotal();
             } */
        });
        $(document).on("keyup", "input[name='discount']", function() {
            subTotal();
        });
        $(document).on("click", ".deltask", function() {
            $(this).parents('tr').remove();
            subTotal();
        });
        $(document).on("click", ".delitem", function() {
            $(this).parents('tr').remove();
            subTotal();
        });
        $(document).on("click", ".delitem", function() {
            $(this).parents('tr').remove();
        });
        $(document).on("change", ".taskid", function() {
            object = $(this);
            $activeobjct = $(this);
            $(object).parents('tr').find('.description').val('');
            $(object).parents('tr').find('.rate').val('');
            $(object).parents('tr').find('.hour').val(1);
            $(object).parents('tr').find('.tasknet').val('');
            if ($(this).val() === 'addtask') {
                $(this).addClass('activeObj');
                $('.activeObj option').removeAttr('selected')
                        .filter('[value=""]')
                        .attr('selected', true);
//                $('.popBack').removeClass('hidden');
//                $('.taskfrm').removeClass('hidden');
//                $('.returnurl').val('invoice');
//                $('body').css('overflow', 'hidden');
//
//                $('.closeCNTs').click(function() {
//                    $('.popBack').addClass('hidden');
//                    $('.taskfrm').addClass('hidden');
//                    $('.returnurl').val('');
//                    $('body').css('overflow', 'auto');
//                });
                addNewTask();
            }
            if ($(this).val() !== 'addtask') {
                $.ajax({
                    url: "<?= URL ?>invoice/getTaskDescription",
                    type: "POST",
                    data: {
                        taskid: $(this).val()
                    },
                    dataType: "JSON", async: false,
                    success: function(jsonStr) {
                        description = jsonStr.description;
                        rate = jsonStr.rate;
                        $(object).parents('tr').find('.description').val(description);
                        $(object).parents('tr').find('.rate').val($.number(rate, 2));
                        $(object).parents('tr').find('.tasknet').val($.number(rate * $(object).parents('tr').find('.hour').val(), 2));
                    }
                });

            }
            subTotal();
            return false;
        });
        $(document).on("change", ".items", function() {
            object = $(this);
            $activeobjct = $(this);
            $(object).parents('tr').find('.description').val('');
            $(object).parents('tr').find('.unitcost').val('');
            $(object).parents('tr').find('.quantity').val(1);
            $(object).parents('tr').find('.itemnet').val('');

            if ($(this).val() === 'additem') {
                $(this).addClass('activeObj');
                $('.activeObj option').removeAttr('selected')
                        .filter('[value=""]')
                        .attr('selected', true);
                $('.popBack').removeClass('hidden');
                $('.itemfrm').removeClass('hidden');
                $('.returnurl').val('invoice');
                $('body').css('overflow', 'hidden');

                $('.closeNewItem').click(function() {
                    $('.popBack').addClass('hidden');
                    $('.itemfrm').addClass('hidden');
                    $('body').css('overflow', 'auto');
                });
            }
            if ($(this).val() !== 'additem') {
                $.ajax({
                    url: "<?= URL ?>invoice/getItemDescription",
                    type: "POST",
                    data: {
                        itemid: $(this).val()
                    },
                    dataType: "JSON", async: false,
                    success: function(jsonStr) {
                        description = jsonStr.description;
                        unitcost = jsonStr.unitcost;
                        $(object).parents('tr').find('.description').val(description);
                        $(object).parents('tr').find('.unitcost').val($.number(unitcost, 2));
                        $(object).parents('tr').find('.itemnet').val($.number(unitcost * $(object).parents('tr').find('.quantity').val(), 2));
                    }
                });
            }

            subTotal();
        });
        $('input[name="dueDate"],input[name="dateIssued"]').change(function() {
            date1 = new Date($('input[name="dateIssued"]').val());
            date2 = new Date($('input[name="dueDate"]').val());
            diff = (Math.floor((date2.getTime() - date1.getTime()) / 86400000)); // ms per day);

            if (diff < 0) {
                alert('Due date should be 7 days or more ahead from start date');
                $('input[name="dueDate"]').val('');
            }
        });

        $('#taskcheck').click(function() {
            taskcheck();
        });

        $('#itemcheck').click(function() {
            itemcheck();
        });

        $('.bPost').click(function() {
//            if (confirm('Are you sure you want to post this transaction?')) {
            $('input[name="status"]').val('post');
//                $('.form-new').submit();
//            }else{
//                return false;
//            }

            //$('select[name="status"]').val('post');
        });

        $('#save').click(function() {
            //  $('input[name="status"]').val('');

            if ($('input[name="status"]').val('')) {
                if (confirm('Are you sure you want to save the Invoice?') == false) {
                    $('input[name="status"]').val('');
                    return false;
                }
            }



        });

        $('.form-new').submit(function() {

            if ($('input[name="status"]').val() == 'post') {
                if (confirm('Are you sure you want to post the Invoice?') == false) {
                    $('input[name="status"]').val('post');
                    return false;
                }
            }
        });
        $('#currencyId').change(function() {
            if ($('#currencyId :selected').text() == "PHP") {
                $("input[name='crate']").addClass('hidden');
                $("input[name='crate']").removeAttr('required');
                $('#ratetxt').addClass('hidden');
            } else {
                $("input[name='crate']").removeClass('hidden');
                $("input[name='crate']").prop('required', 'required');
                $('#ratetxt').removeClass('hidden');
            }
        });

        $('#mopId').change(function() {
            if ($(this).find('option:selected').text() == 'HMO') {
                $('#hmo').removeAttr('disabled');
                $('#hmo').attr('required', 'required');
                $('#hmo').parents('tr').css('visibility', 'visible');
            } else {
                $('#hmo').attr('disabled', 'disabled');
                $('#hmo').removeAttr('required');
                $('#hmo').parents('tr').css('visibility', 'hidden');
            }
        });

        $('#reverseNewInvoice').click(function() {
            if (confirm('Are you sure you want to reverse this account?')) {
                $.post(URL + 'invoice/reverseInvoice')
                        .done(function(returnData) {
                            if (returnData == '') {
//                                location.reload();
                                window.location.href = URL + 'invoice';
                            } else {
                                alert('Unable to reverse due to posted collection.');
                            }
                        })
                        .fail(function() {
                            alert('Connection Error!');
                        });
                return false;
            }
        });

//        monthArray = ['2015-0'];
//        yearArray = [2014];



    })
    function recurring(recurringid, status) {
        $().redirect(URL + 'invoice/newRecurring', {recurringid: recurringid, status: status});
    }

    $(document).on("change", ".tasktaxid", function() {
        subTotal();
    });

    $(document).on("change", ".itemtaxid", function() {
        subTotal();
    });

    $(document).on("change", "#isInclusive", function() {
        subTotal();
    });

    $(document).on("change", ".vatselectInvoice", function() {
        subTotal();
    });


    //for vat




    function subTotal() {
        subtotal = 0;
        discounttotal = 0;
        vattotal = 0;

        discountClass = $('input[name="discount"]').val();

        VAT = $('#vatselectInvoice').val();


        $.ajaxSetup({async: true});

        if (discountClass == '') {
            discountClass = 0;
        }

        if ($('#taskcheck').is(':checked')) {
            $('.taskid').each(function(i) {
                object = $(this);

                nettotal = parseFloat($(object).parents('tr').find('.tasknet').val().replace(/,/g, ''));
                discount = parseFloat(discountClass) / parseInt(100);

                //subtotal += nettotal;


                //	vattotal2 = nettotal - (( nettotal / 100 ) * discount);
                if ($(this).parent('td').parent('tr').find('.vatselectInvoice').val() == 1 ||
                        $(this).parent('td').parent('tr').find('.vatselectInvoice').val() == 'Vatable') {
                    amount = nettotal / ((parseInt(100) + 12) / parseInt(100));
                    vattotal += (amount - (amount * discount)) * 0.12;
                    subtotal += amount;//nettotal / ((parseInt(100) + 12) / parseInt(100));
                    discounttotal += (amount) * discount;
                } else {
                    subtotal += nettotal;
                    discounttotal += (nettotal) * discount;
                }

                if (subtotal + vattotal - discounttotal > 999999999999999) {
                    alert('Amount exceeds to maximum limit');
                    $(object).parents('tr').find('.rate').val(0);
                    $(object).parents('tr').find('.hour').val(0);
                    $(object).parents('tr').find('.tasknet').val(0);

                    return false;
                }
            });
        }

//        if ($('#itemcheck').is(':checked')) {
//            $('.items').each(function(i) {
//                object = $(this);
//
//                nettotal = parseFloat($(object).parents('tr').find('.itemnet').val().replace(/,/g, ''));
//                discount = parseFloat(discountClass) / parseInt(100);
//
//                if ($(object).parents('tr').find('.vatselectInvoice').val() == 'vatable') {
//                    subtotal += nettotal / ((parseInt(100) + 12) / parseInt(100));
//                }
//                else{
//                    subtotal += nettotal;
//                }
//            });
//        }
        /*
         if (taxtype == 'vat') {
         discounttotal = subtotal * ($('input[name="discount"]').val() / parseInt(100));
         vattotal = (subtotal - discounttotal) * (12 / parseInt(100));
         
         } else {
         discounttotal = subtotal * ($('input[name="discount"]').val() / parseInt(100));
         }
         */

        $('#discount').val(parseFloat(discounttotal).toFixed(2));
        $('#discountHolder').html('(' + parseFloat(discounttotal).toFixed(2) + ')');
        $('#subtotal').val(parseFloat(subtotal).toFixed(2));
        $('#vat').val(parseFloat(vattotal).toFixed(2));
        $('#invoicetotal').val(parseFloat(subtotal + vattotal - discounttotal).toFixed(2));
    }

    function addNewTask() {
        $.post(URL + 'invoice/task', {view: 'invoice'})
                .done(function(returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');


                    $('.closeCNTs').click(function() {
                        if (confirm('Are you sure, you want to leave this page without saving?')) {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        }
                    });
                })
                .fail(function() {
                    alert('Connection Error!');
                });
        return false;
    }

    function addNewClient() {
        $.post(URL + 'invoice/newcustomer', {view: 'invoice'})
                .done(function(returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');


                    $('.close1Client').click(function() {
                        if (confirm('Are you sure, you want to leave this page without saving?')) {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        }
                    });
                })
                .fail(function() {
                    alert('Connection Error!');
                });
        return false;
    }


    function addNewHmo() {
        $.post(URL + 'invoice/newHmo', {view: 'invoice'})
                .done(function(returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');

                    $('.close1Client').click(function() {
                        if (confirm('Are you sure, you want to leave this page without saving?')) {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        }
                    });
                })
                .fail(function() {
                    alert('Connection Error!');
                });
        return false;
    }

    function eventLoader()
    {
        $('.table1-new').find('tr').mouseover(function() {
            $(this).find('#addtask').addClass('a-hover');
            $(this).find('.deltask').addClass('del-hover');
        });

        $('.table1-new').find('tr').mouseout(function() {
            $(this).find('#addtask').removeClass('a-hover');
            $(this).find('.deltask').removeClass('del-hover');
        });
        $('.table2-new').find('tr').mouseover(function() {
            $(this).find('#additem').addClass('a-hover');
            $(this).find('.delitem').addClass('del-hover');
        });

        $('.table2-new').find('tr').mouseout(function() {
            $(this).find('#additem').removeClass('a-hover');
            $(this).find('.delitem').removeClass('del-hover');
        });
    }

</script>

<script>
    status = "<?php echo Session::getSession('status') ?>";
</script>

<?php
$status = Session::getSession('status');
$invoice = new TblNewInvoice();
$invoiceamount = new TblInvoiceAmount();
//$invoice->dateIssued = date('m-d-Y');
//$invoice->dueDate = date('m-d-Y');
$taskstat = 'addinvoice';
//$taskstat = 'updateinvoice';
$subtotal = $vattotal = $discounttotal = 0;

$invoicestat = '';
$invoicestat2 = '';


if (isset($_POST['invoiceid']) || (Session::getSession('invoiceid') != '' && Session::getSession('status') != '')) {
    $invoiceid = (isset($_POST['invoiceid'])) ? $_POST['invoiceid'] : Session::getSession('invoiceid');
    $invoice = TblNewInvoiceMySqlExtDAO::getRowInvoice($invoiceid);
    Session::setSession('invoiceid', $invoiceid);
    foreach (DAOFactory::getTblAllInvoiceDAO()->queryByNewInvoiceId($invoiceid) as $each) {
        $allinvoice = $each;
    }
    foreach (DAOFactory::getTblInvoiceAmountDAO()->queryByAllInvoiceId($allinvoice->id) as $each) {
        $invoiceamount = $each;
    }

    $taskstat = (isset($_POST['status']) && $_POST['status'] == 'copy') ? 'addinvoice' : 'updateinvoice';

    if ($invoice->status != "open" && $taskstat == 'updateinvoice') {
        $invoicestat = 'readonly';
        $invoicestat2 = 'disabled';
    }
}
//if(Session::getSession('status')=='posted'){ echo Session::getSession('status'); exit; }
Session::setSession('returnurl', 'invoice');
Session::setSession('status', '');

$vats = DAOFactory::getTblTaxDAO()->queryAll();
?>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="bodysize">
    <div class="invoiceHolderNewInvoiceForm">
        <div id="new">
            <!--<p class="headTextNewInvoice nifont">NEW INVOICE</p>-->
            <p class="headTextNewInvoice nifont">
                <?php
                if ($taskstat == 'addinvoice') {
                    echo 'NEW';
                } else if (in_array($invoice->status, array('reversed', 'posted'))) {
                    echo strtoupper($invoice->status);
                } else {
                    echo 'UPDATE';
                }
                ?> INVOICE<p>


        </div><br/><br/>
        <form method="post" action="" class="form-new" id="formNewInvoice">
            <div id="container1">
                <table class="newI_table">	
                    <tr class="trnewInvoice">
                        <td class="" >Patient Name:</td>
                        <td>
                            <?php
                            if ($invoicestat2 != '') {
                                $customer = DAOFactory::getTblClientDAO()->load($invoice->clientId);
                                ?>    
                                <input type="text" value="<?php echo ucwords($customer->clientName); ?>" readonly/>
                            <?php } else {
                                ?>
                                <select class="sc newsc" name='clientId' id="client" required>
                                    <option value="">--Select--</option>
                                    <option value="addclient">[Add Patient]</option>
                                    <?php
                                    $customer = DAOFactory::getTblClientDAO()->queryByOrgId(Session::getSession('medorgid'));

                                    if (count($customer) > 0) {
                                        foreach ($customer as $item) {
                                            if ($item->active == 'yes' || $item->id == $invoice->clientId) {
                                                ?>
                                                <option value='<?php echo $item->id ?>' <?php echo ($item->id == $invoice->clientId) ? 'selected' : '' ?>><?php echo $item->clientAccount . ' - ' . ucwords($item->clientName) ?></option>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>

                                </select>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr class="trnewInvoice">
                        <td><div style="margin-top:-35px;">Address:</div></td>
                        <td><textarea class="add" id='address' name='address' readonly <?php echo $invoicestat ?> ><?php echo ucwords(($invoice->clientId != '') ? DAOFactory::getTblClientDAO()->load($invoice->clientId)->address : '' ) ?></textarea></td>
                    </tr>
                    <tr class="trnewInvoice">
                        <td>Mode of Payment:</td>
                        <td>
                            <?php
                            if ($invoicestat2 != '') {
                                ?>
                                <input type="text" value="<?php echo DAOFactory::getTblMopDAO()->load($invoice->mopId)->description ?>" readonly />
                                <?php
                            } else {
                                ?>
                                <select class="selectPay"  name="mopId" id="mopId" required <?php echo $invoicestat2 ?> >
                                    <option value="">--Select--</option>
                                    <?php
                                    $mop = DAOFactory::getTblMopDAO()->queryAll();
                                    foreach ($mop as $item) {
                                        if ($item->code != 'Credit') {
                                            ?>
                                            <option value="<?php echo $item->id ?>" <?php echo ($item->id == $invoice->mopId) ? 'selected' : '' ?>><?php echo $item->code ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            <?php } ?>
                    </tr>
                    <tr class="trnewInvoice"  <?php
                            if ($invoice->hmoId == 0) {
                                echo "style='visibility:hidden'";
                            }
                            ?>>
                        <td class="" >HMO Partner:</td>
                        <td>
                            <?php
                            if ($invoicestat2 != '') {
                                ?>
                                <input type="text" value="<?php echo ($invoice->hmoId != 0 ) ? DAOFactory::getTblHmoDAO()->load($invoice->hmoId)->hmoAccount : '' ?>" readonly />
                            <?php } else { ?>
                                <select class="sc newsc" name='hmoId' id="hmo" <?php echo ($invoice->hmoId == 0 ) ? 'disabled' : '' ?>>
                                    <option value=""></option>
                                    <option value="addHmo">[Add HMO]</option>

                                    <?php
                                    $hmos = DAOFactory::getTblHmoDAO()->queryByOrgId(Session::getSession('medorgid'));
                                    foreach ($hmos as $hmo) {
                                        ?>
                                        <option value="<?php echo $hmo->id ?>" <?php echo ($hmo->id == $invoice->hmoId) ? 'selected' : '' ?>><?php echo $hmo->hmoAccount . ' - ' . ucwords($hmo->hmoName) ?></option>

                                    <?php } ?> 

                                </select>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr class="trnewInvoice">
                </table>
                <?php
                $invoicetasklines = TblInvoiceLinesMySqlExtDAO::getTasks($invoice->id == '' ? 0 : $invoice->id);
//            $invoiceitemlines = TblInvoiceLinesMySqlExtDAO::getItem($invoice->id == '' ? 0 : $invoice->id);
                ?>
                <div class="additional">
                    <div style="margin-top:5px;">
                        <input type="checkbox"   name='taskcheck' class="taskCheck hidden" id='taskcheck'<?php
                if (count($invoicetasklines) > 0 || $taskstat == "addinvoice") {
                    echo "checked ";
                }
                echo $invoicestat2
                ?>> 

                    </div>
                </div>
            </div>
            <div id="container1" style="margin-right: 57px;float:right;padding-bottom: 10px;">
                <table class="NewRecurTable2">
                    <?php if ($invoice->invoiceNumber != '') { ?>
                        <tr class="i">
                            <td class="">Invoice Number:</td>
                            <td class=""><input type="text" class="in" name="invoiceNumber" <?php echo $invoicestat ?> value="<?php echo $invoice->invoiceNumber ?>"></td>
                        </tr>	
                    <?php } ?>
                    <tr class="i">
                        <td class="">Date:</td>
                        <td class=""><input type="text" class="di" id="di" name="dateIssued"  <?php echo $invoicestat ?> required value="<?php echo ((isset($_POST['status']) && $_POST['status'] == 'copy') || $taskstat == 'addinvoice') ? '' : date('m/d/Y', strtotime($invoice->dateIssued)) ?>"  pattern="\d{2}\/\d{2}\/\d{4}" placeholder="mm/dd/yyyy">
                        </td>
                    </tr>
                    <tr class="i">
                        <td>Due Date:</td>
                        <td><input type="text" class="dd"  name="dueDate"  <?php echo $invoicestat ?> required value="<?php echo ((isset($_POST['status']) && $_POST['status'] == 'copy') || $taskstat == 'addinvoice') ? '' : date('m/d/Y', strtotime($invoice->dueDate)) ?>"  pattern="\d{2}\/\d{2}\/\d{4}" placeholder="mm/dd/yyyy"></td>
                    </tr>
                    <tr class="i">
                        <td >Discount:</td>
                        <td><input type="text" class="dsc nodecimal"  <?php echo $invoicestat ?> style="border: 1px solid #C8C8C8; text-align:right;width:100px;padding-right: 18px;" name="discount" value="<?php echo ($invoice->discount != '') ? $invoice->discount : 0 ?>"><div class="percentNew">%</div></td>
                    </tr>
                    <tr class="i">
                        <td><div style="margin-top:-37px">Particulars:</div></td>
                        <td class=""><textarea input type="text" class="mm" name="particular"  <?php echo $invoicestat ?> ><?php echo $invoice->particular ?></textarea></td>
                    </tr>

                </table>
            </div>

            <div id="containertable">
                <table class="table1-new mytableNew">
                    <tr class="t" >
                        <th></th>
                        <th width="13%">Service Item No.</th>
                        <th width="35%">Description</th>
                        <th width="12%">Vat</th>
                        <th width="12%">Hour</th>
                        <th width="12%">Rate</th>
                        <th width="12%">Net Amount</th>
                        <th></th>
                    </tr>
                    <?php
                    $client = DAOFactory::getTblClientDAO()->load($invoice->clientId);
                    if (count($invoicetasklines) > 0) {
                        ?>
                        <tbody>
                            <?php
                            foreach ($invoicetasklines as $i => $invoiceline) {
                                ?>
                                <tr class="row-item">

                                    <td class="mystyle">
                                        <?php if ($invoice->status == "open" || $taskstat == 'addinvoice') { ?>
                                            <input type="button" name="delete"  class="del deltask" />
                                        <?php } ?>
                                    </td>
                                    <td class="mystyle">
                                        <?php if ($invoice->status == "open" || $taskstat == 'addinvoice') { ?>
                                            <select name="taskid[]" class="taskid" <?php echo $invoicestat2 ?> required>
                                                <option value="addtask">[Add Service]</option>
                                                <?php
                                                $tasks = DAOFactory::getTblTaskDAO()->queryByOrgId(Session::getSession('medorgid'));
                                                foreach ($tasks as $task) {
                                                    ?>
                                                    <option value="<?php echo $task->id ?>" <?php echo $invoiceline->taskId == $task->id ? 'selected' : '' ?>><?php echo $task->taskCode ?>-<?php echo ucwords($task->description) ?></option>
                                                <?php } ?>

                                            </select>     
                                        <?php } else { ?>
                                            <input type="text" name="taskid[]" class="taskid"  value="<?php echo DAOFactory::getTblTaskDAO()->load($invoiceline->taskId)->taskCode ?>"<?php echo $invoicestat ?>>
                                        <?php } ?>
                                    </td>
                                    <?php
//                                $tbltask = DAOFactory::getTblTaskDAO()->load($invoiceline->taskId);
                                    ?>
                                    <td class="mystyle"><input type="text" name="taskDescription[]"  <?php echo $invoicestat ?> value="<?php echo ucwords($invoiceline->description) ?>" class="description"/></td>
                                    <td class="mystyle">
                                        <?php
                                        if ($invoice->status == "open" || $taskstat == 'addinvoice') {
                                            if ($taxtype == 'vat') {
                                                ?>
                                                <select class="vatselectInvoice" id="vatselectInvoice" name="vatselectInvoice[]">
                                                    <option value="1" <?= ($invoiceline->Vat == 'Vatable') ? ' selected="selected" ' : '' ?>>Vatable</option>
                                                    <option value="2" <?= ($invoiceline->Vat == 'Non-VAT') ? ' selected="selected" ' : '' ?>>Non-Vat</option>
                                                </select>
                                            <?php } else { ?>

                                                <input type="text" value="Non-VAT" readonly>

                                                <input type="hidden" name="vatselectInvoice[]" class="vatselectInvoice"  value="2" >
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <input type="text" name="vatselectInvoice[]" class="vatselectInvoice"  value="<?php echo $invoiceline->Vat ?>"<?php echo $invoicestat ?>>
                                        <?php } ?>
                                    </td>

                                    <td class="mystyle"><input type="text" name="hour[]" class="hour nodecimal linetext"  <?php echo $invoicestat ?> value="<?php echo $invoiceline->hour ?>" required maxlength="2"/></td>

                                    <td class="mystyle"><input type="text" name="rate[]"  class="rate isNumeric linetext"  <?php echo $invoicestat ?> value="<?php echo ($invoiceline->rate > 0) ? number_format((float) $invoiceline->rate, 2, '.', '') : number_format((float) $tbltask->ratePerHour, 2, '.', ''); ?>" maxlength="9"/></td>

                                    <td class="mystyle"><input type="text" class="tasknet linetext RateTH isNumeric" readonly <?php echo $invoicestat ?> value="<?php echo number_format((float) $invoiceline->netAmount, 2, '.', '') ?>"></td>
                                    <td class="mystyle">
                                        <div class="adel">
                                            <?php if ($invoice->status == 'open' || $taskstat == 'addinvoice') { ?>
                                                <input type="button" name="add"  class="a addtask" id="addtask" />
                                            <?php } ?>
                                            <div>
                                                <input type="hidden" name="invoicetaskid[]" value="<?php echo $invoiceline->id ?>" />
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                        <?php
                    } else {
                        ?>
                        <tbody>
                            <tr class="row-item">
                                <td class="mystyle"><input type="button" name="delete"  class="del deltask" ></td>
                                <td class="mystyle">
                                    <select name="taskid[]" class="taskid" required>
                                        <option value="">--Select--</option>
                                        <option value="addtask">[Add Service]</option>
                                        <?php
                                        $tasks = DAOFactory::getTblTaskDAO()->queryByOrgId(Session::getSession('medorgid'));
                                        if (count($tasks) > 0) {
                                            foreach ($tasks as $task) {
                                                ?>
                                                <option class="lt" value="<?php echo $task->id ?>"><?php echo $task->taskCode ?>-<?php echo $task->description ?></option>
                                                <?php
                                            }
                                        }
                                        ?>

                                    </select>
                                </td>
                                <td class="mystyle"><input type="text" name="taskDescription[]" class="description" value="" class="description" id="description"/></td>
                                <td class="mystyle">
                                    <?php
                                    if ($taxtype == 'vat') {
                                        ?>
                                        <select class="vatselectInvoice" id="vatselectInvoice" name="vatselectInvoice[]">
                                            <option value="1" <?php echo $taxtype == 'vat' ? 'selected' : '' ?>>Vatable</option>
                                            <option value="2" <?php echo $taxtype == 'percentage' ? 'selected' : '' ?>>Non-VAT</option>
                                        </select>
                                        <?php
                                    } else {
                                        ?>
                                        <input type="text" value="Non-VAT" readonly>
                                        <input type="hidden" name="vatselectInvoice[]" class="vatselectInvoice"  value="2" >
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td class="mystyle"><input type="text" name="hour[]" class="hour nodecimal linetext" value="0" required maxlength="2" /></td>


                                <td class="mystyle"><input type="text" name="rate[]"  class="rate isNumeric linetext" value="0.00" maxlength="9" /></td>

                                <td class="mystyle"><input type="text" class="tasknet linetext RateTH isNumeric" value="0.00" readonly ></td>
                                <td class="mystyle">
                                    <div class="adel">
                                        <input type="button" name="add"  class="a addtask" id="addtask">
                                    </div>
                                </td>
                            </tr>
                        </tbody>

                        <?php
                    }
                    ?>
                </table>
                <?php if ($invoice->status == 'open' || $invoice->status == '') { ?>
                    <div class="addlinediv">
                        <input type="button" name="size" class="inputAddline" id="addtask" <?php echo $invoicestat2 ?> value=""> 
                    </div>
                <?php } ?>

                <?php if ($taskstat == 'addinvoice' && $invoice->status == 'posted') { ?>
                    <div class="addlinediv">
                        <input type="button" name="size" class="inputAddline" id="addtask" <?php echo $invoicestat2 ?> value=""> 
                    </div>
                <?php } ?>	

                <table class="table3">
                    <tr class="sv">
                        <td style="padding: 5px;">Service Amount:</td>
                        <td class="sa"><input type="text" name="subtotal" id="subtotal" class="numeric" style="border: none;text-align:right;padding-right: 17px;" value="<?php echo number_format((float) $invoiceamount->subTotalAmount, 2, '.', '') ?>" readonly/></td>
                    </tr>


                    <tr class="v vatselect">
                        <td style="padding: 5px;">VAT:</td>
                        <td class="sa">
                            <input type="text" name="vat" id="vat" class="numeric" style="border: none;text-align:right;padding-right: 17px;" value="<?php echo number_format((float) $invoiceamount->vatAmount, 2, '.', '') ?>" readonly/>
                        </td>
                    </tr>
                    <tr class="v">
                        <td style="padding: 5px;">Discount Amount:</td>
                        <td class="sa">
                            <input type="text" name="discounttotal" id="discount" style="border: none;text-align:right; width:85px;padding-right: 3px;" class="isNumeric hidden" value="<?php echo (number_format((float) $invoiceamount->discountAmount, 2, '.', '')) ?> " readonly />
                            <span class="fr " style="padding-right:10px;" id="discountHolder">(<?php echo '' . (number_format((float) $invoiceamount->discountAmount, 2, '.', '')) . '' ?>)</span>
                        </td>
                    </tr>

                    <tr class="gtotal">
                        <td class="gt" style="padding: 5px;">Total Invoice:</td>
                        <td class="sa" id="gt"><input type="text" name="grandtotal" id="invoicetotal" class="numeric" style="text-align:right;padding-right: 17px;" value="<?php echo number_format((float) $invoiceamount->grandTotal, 2, '.', '') ?>" readonly/></td>
                    </tr>
                </table>
            </div>
            <div><img class="image6"  src="<?= URL ?>public/images/line3.png"></div>
            <div>
                <h4 class="t">Remarks:</h4>
                <textarea  class="tm" name="remarks" <?php echo $invoicestat ?>><?php echo ucfirst($invoice->remarks) ?></textarea>
            </div>
            <div class="buttonsInvoices">
                <?php if ($invoice->status == "open" || $taskstat == 'addinvoice') { ?>
                    <input class="bn3" id="save" type="submit" name="save" value="">
                    <input class="bn bPost" type="submit" name="post" value="">
                <?php } elseif ($invoice->status == "posted") {
                    ?>
                    <input type="button" name="reverse" value="REVERSE" class="reverseInvoice addsavebutton" id="reverseNewInvoice">
                    <?php
                }
                ?>
                <input type="hidden" name="task" value="<?php echo $taskstat ?>"/>
                <input type="hidden" name="status" value=""/>
            </div>	

        </form>  

    </div>
</div>
<?php
if ((Session::getSession('status') == '' || $invoice->status != 'posted') && DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->typeOfTax != '') {
    ?>
    <div class="popBack hidden">
        <div class="clientfrm hidden">
            <?php include('views/invoice/create_new_customer.php'); ?>
        </div> 

        <div class="hmofrm hidden">
            <?php include('views/invoice/create_new_hmo.php'); ?>
        </div> 

        <div class="taskfrm hidden">
            <?php include('views/invoice/create_new_tasks.php'); ?>
        </div>
    </div>
<?php }
?> 

<script>
    $(function() {
        $('.bPost').click(function() {
            $('input[name="status"]').val('post');
//            alert($('input[name="status"]').val('post'));
//            return false;
        });

        $('#formNewInvoice').submit(function() {
            stat = false;
            $('.tasknet').each(function(){
                if(getInt($(this).val())==0){
                    stat =true;
                    return false;
//                    break;
                }
            });
            
            if(stat){
                alert('Net amount lines should not be equal to 0');
                return false;
            }

            $.post(URL + 'invoice/setinvoice', $('#formNewInvoice').serialize())
                    .done(function(returnData) {
						$('body').css('overflow', 'hidden');
                        if (returnData == '') {
                            location = URL + 'invoice';
                        } else if (returnData == 'add') {
                            location = URL + 'invoice/add';
                        } else {
                            $('.popBack').html($('.popBack').html() + returnData);
                            $('.popBack').removeClass('hidden');
							$('.seconds').show();
							$('body').css('overflow', 'auto');
                            return false;
//                            alert(returnData);
                        }
                    });

            return false;
        });
        if (status == 'posted') {
            $.post(URL + 'invoice/printPreview', {invoiceid: "<?php echo Session::getSession('invoiceid') ?>"})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        $('.closePrint').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        });
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
        }
        $('#size').focus(function() {
            $('#sizeLabel').addClass('hidden');
        });

        $('#size').change(function() {
            $('#sizeLabel').removeClass('hidden');
            $('#size').val(0);
            $('#size').blur();
        });

        eventLoader();
    });
</script>
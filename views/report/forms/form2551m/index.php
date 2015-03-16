<style>
    .generatedReports2{
        zoom: 55%;
    }
    input[type="text"]{
        font-weight: bold;
        text-align: right;
        font-size: 20px;
    }

    .BSForm{

    }
    .BSText{
        padding-left: 20px;
        padding-top:20px;
    }
    .FSPrint{
        width: 100px;
        height: 28px;
        color: white;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        background-color:rgba(135, 194, 15, 0.87);
        font-weight: bold;
        border: none;
        border-radius: 5px;
        box-shadow: 2px 2px 2px gray;
        margin-left: 5px;
        cursor: pointer;
    }
    .buttonFS{
        float: right;
        margin-right: 15px;
        margin-top: -22px;
    }
    .DFs{
        padding-left: 20px;
        height:65px;
    }
    .ButInput{
        width: 133px;
        height: 28px;
        font-size: 12px;
        font-family: verdana;
        padding-left: 5px;
        border-radius: 5px;
        box-shadow: none;
        border: 1px solid rgba(128, 128, 128, 0.58);
        margin-left: 5px;
        margin-right: 5px;
    }
    .dateDiv{
        padding-top: 5px;
    }
    .dateDiv2{
        padding-top: 5px;
        margin-bottom: 10px;
        padding-bottom: 10px;
    }
    .FSGen{
        width: 100px;
        height: 28px;
        color: white;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        background-color: rgba(135, 194, 15, 0.87);
        font-weight: bold;
        border: none;
        border-radius: 5px;
        box-shadow: 2px 2px 2px gray;
        margin-left: 637px;
        float: left;
        margin-top: -56px;
        cursor: pointer;
    }

    .yearname{
        width:120px;
        height:26px;
    }
    .generate{
        width: 100px;
        height: 28px;
        border: none;
        border-radius: 5px;
        margin-left: 262px;
        cursor: pointer;
        margin-top: -27px;
        float:left;
    }	
    .hmoDivider{
        width: 100%;
        height: 2px;
        border-radius: 2px;
        background: rgb(37, 181, 239);
        margin-top: 10px;
    }
    .generatediv{
        float: left;
        margin-top: -43px;
        margin-left: 280px;
    }
    .itrbutton{
        padding-top: 10px;
        padding-left: 29px;
    }
    .gen101{
        overflow:scroll;
        height:559px;
        margin-top: 25px;
    }
    .buttonbelow{
        float: right;
        margin-right: 63px;
        margin-top: 14px;
    }
    .buttonstyles{
        width:80px;
        height:25px;
        color:#fff;
        font-family:tahoma;
        font-weight:bold;
        border:none;
        border-radius:2px;
        margin-left: 10px;
    }
    #background {
        left: 0px !important;
        top: 0px !important;
        position: relative !important;
        margin-left: auto !important;
        margin-right: auto !important;
        width: 1275px !important;
        height: 1070px !important;
        overflow: auto !important;
        z-index: 0 !important;
    }
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div>

    <div class="linereport"> 
        <div class="BSForm">
            <div class="BSText">Form 2551M</div>
            <div class="buttonFS">
                <input type="button" class="FSPrint hidden" value="Export">
                <input type="button" class="FSPrint printPdf hidden" value="Print">
            </div>
            <div class="DFs">
                <div>
                        <!--<select name="month" style="margin-top: 20px;" class="yearname">
                    <?php
                    for ($x = 1; $x <= 12; $x++) {
                        ?>
                                            <option value="<?= strtolower(date("F", mktime(null, null, null, $x))); ?>">
                        <?= date("F", mktime(null, null, null, $x)); ?>
                                            </option>
                        <?php
                    }
                    ?>
                        </select>-->
                    <select name="month" style="margin-top: 20px;" class="yearname">

						<?php
						$currentMonth = date("m");
						for ($x = 1; $x <= 12; $x++) {
							if ($x == $currentMonth) {
								?>
								<option selected='selected' value="<?= strtolower(date('F', strtotime('2014-' . $x . '-01'))) ?>">
									<?= date('F', strtotime('2014-' . $x . '-01')) ?></option>

								<?php
							} else {
								
								?>
							<option value="<?= strtolower(date('F', strtotime('2014-' . $x . '-01'))) ?>">
								<?= date('F', strtotime('2014-' . $x . '-01')) ?></option>
							<?php
						}
						}
						?>
					</select>
                    <input type="number" name="year" value="<?= date('Y') ?>"  class="yearname"/>
                    <div>
                        <input type="button" value="" class="generate reportgenerate"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="hmoDivider"></div>	
    </div>

    <form class="hidden">
        <div class="buttonHolder itrbutton">
            <!--<input type="submit" value="SAVE" class="addsavebutton buttonstyles"/>-->
            <input type="button" value="POST" class="postform2551m addsavebutton buttonstyles"/>
        </div>
        <!--<div class="zoomDiv">
                <input type="button" id="zoomOut" value="-">
                <input type="button" id="zoomIn" value="+">
        </div>-->

        <div class="generatedReports2 divClass" id="divelement">

        </div>


        <div class="buttonHolder buttonbelow">
            <!--<input type="submit" value="SAVE" class="addsavebutton buttonstyles"/>-->
            <input type="button" value="POST" class="postform2551m addsavebutton buttonstyles"/>
        </div>
    </form>
</div>

<script>
    $(function() {
        $('#zoomIn').click(
                function() {
                    $("#divelement").animate({'zoom': 0.7}, 400);
                });

        $('#zoomOut').click(
                function() {
                    $("#divelement").animate({'zoom': 0.4}, 400);
                });

        $('.generate').click(function() {
            month = $('select[name="month"]').val();
            year = $('input[name="year"]').val();
            $.post(URL + 'report/form2551m/getReport', {'month': month, 'year': year})
                    .done(function(returnData) {
                        $('.generatedReports2').html(returnData);
                        $('form').removeClass('hidden');
                        $('.isNumeric').each(function() {
                            $(this).val($.number($(this).val(), 2));
                        });

                    })
        });

        $('form').submit(function() {
            $.post(URL + 'report/form2551m/setReport', $('form').serialize())
                    .done(function(returnData) {
                        if (returnData == 0) {
                            alert('Saved.');
                            $('.generate').click();
                        } else {
                            alert(returnData);
                        }
                    });
            return false;
        });

        $('.postform2551m').click(function() {
            confirmPost = confirm('Are you sure you want to post?');
            if (confirmPost) {
                $.post(URL + 'report/form2551m/setReport?status=post', $('form').serialize())
                        .done(function(returnData) {
                            if (returnData == 0) {
                                $('.generate').click();
                            } else {
                                alert(returnData);
                            }
                        });
            }
        });

    })
</script>
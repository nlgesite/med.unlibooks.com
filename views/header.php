


<html>
    <head> <?php
//        header('Content-type: text/plain; charset=utf-8');
        $cl = strtolower(Session::getSession('class'));
        $fc = Session::getSession('function');
        ?>
        <title>
            Welcome to Unlibooks
        </title>
        <link rel="shortcut icon" href="<?php echo URL; ?>public/images/icons/taxpirin_icon.png">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.css"/>

        <link href="<?= URL ?>public/css/ajax.css" rel="stylesheet" type="text/css">
        <?php
        if (isset($this->css)) {
            foreach ($this->css as $css) {
                echo '<link rel="stylesheet" href="' . URL . 'views' . $css . '"/>';
            }
        }
        ?>
        <script src="<?php echo URL; ?>public/js/jquery.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery.redirect.min.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery.price_format.1.8.js"></script>
        <!--<script src="<?php echo URL; ?>public/js/jquery.numberformatter-1.2.4.js"></script>-->
        <script src="<?php echo URL; ?>public/js/jquery.number.min.js"></script>
        <script>
            URL = '<?php echo URL; ?>';
        </script>
        <!--<script src="<?php echo URL; ?>/public/views/report/form1701q/form1701q-001/custom.js" type="text/javascript"></script>-->
        
        <script>taxyears = [<?php echo Controller::getTaxableYears()?>];</script>
        <script src="<?php echo URL; ?>public/js/custom.js"></script>

    </head>
    <style>
        <!--@font-face {
            font-family: 'agency fb'!important;  /*a name to be used later*/
            src: url('<?= URL ?>public/fonts/AGENCYR.ttf'); /*URL to font*/
        }

        @font-face {
            font-family: 'agency fb2'!important; /*a name to be used later*/
            src: url('<?= URL ?>public/fonts/AGENCYB.ttf'); /*URL to font*/
        }-->

    </style>
    <body  class="Main">

        <div id="container">
            <div id="header">
                <div class="top">
                    <div id="link">
                        <a href="#" style="padding: 5px 9px;" class="mainHeaderLink supportlink">SUPPORT</a>	
                        <a href="http://med.unlibooks.com/help/pdf/help.pdf" target="_blank" class="mainHeaderLink supportlink2" style="padding: 5px 9px;font-family: agency fb2;">HELP</a>
                        <a href="<?php echo URL; ?>setting" style="padding: 5px 9px;font-family: agency fb2;" class="mainHeaderLink <?php echo ($cl == 'setting') ? 'activemainHeaderLink' : '' ?>">SETTINGS</a>
                        <a href="<?php echo URL; ?>user/logout" style="padding: 5px 9px;font-family: agency fb2;" class="mainHeaderLink ">LOG OUT</a>
                    </div>

                </div>
                <!--<div class="settingsdiv">
                        <a href="<?php echo URL; ?>setting" class="settingsbutton <?php echo ($cl == 'setting') ? 'activemainHeaderLink' : '' ?>">Settings</a>
                </div>-->
                <div class="unlibooks"><img class="logo"  src="<?= URL ?>public/images/medical PNG.png"></div>


                <div class="belowTop">
                    <div class="link2">
                        <!--<a class="refer">Referral</a>
                        <a class="subTop">Pricing & Upgrade</a>-->
                    </div>	
                    <!-- <div>
                         <img class="upload" src ="<?php echo URL ?>public/companylogo/<?php echo Session::getSession('medorgid') . '.' . DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->logoName ?>" />
                         <!--<a href="<?= URL ?>Upload"><img class="img"  src="<?= URL ?>public/images/unlibook.png"></a>
                     </div>
                     <div class="companyName2">
                    <?php
                    $organization = DAOFactory::getTblOrganizationDAO()->load(Session::getSession('medorgid'));
                    echo $organization->orgName;
                    ?>
                         
                     </div>-->
                    <div class="txt2"id="tit"><!--You have--> <span class="trial"><!--14 days--></span> <!--remaining in your trial.--> <a href="<?php echo URL; ?>" class="txt5"><!--Upgrade your account--></a></div>
                    <div style="height:15px;">
                        <?php
                        $str = date("M d Y ", strtotime($organization->dateCreated));
                        $str = strtotime(date("M d Y ")) - (strtotime($str));
                        $days = 30 - floor($str / 3600 / 24);
                        ?>
                    </div>
                    <div class="txt2"id="tit">You have <span class="trial"><?php echo $days ?> day(s)</span> remaining in your trial. <a href="http://sjcgroup.net/member/signup/ubmedbasic" target="_blank" class="txt5">PAY NOW.</a></div>
                    <div class="div">
                        <div id="lowerLink">
                            <a href="<?= URL ?>Dashboard" class="submit <?php echo ($cl == 'dashboard') ? 'link-selected' : '' ?> " >DASHBOARD</a>
                            <img class="linestand"  src="<?= URL ?>public/images/linestand.png">
                            <!--<hr style="height:30px;width:1px;border:none;border-left:solid 1px #c8c8c8;margin-top: -25px;margin-left: 155px;"> -->
                            <a href="<?= URL ?>Invoice" class="submit <?php echo ($cl == 'invoice') ? 'link-selected' : '' ?> " >BILLING</a>
                            <img class="linestand"  src="<?= URL ?>public/images/linestand.png">
                            <a href="<?= URL ?>Expenses" class="submit <?php echo ($cl == 'expenses') ? 'link-selected' : '' ?> ">EXPENSES</a>
                            <img class="linestand"  src="<?= URL ?>public/images/linestand.png">
<!--<a href="<?= URL ?>TimeTracking" class="submit <?php echo ($cl == 'timetracking') ? 'link-selected' : '' ?> ">TIME TRACKING</a>-->
                            <a href="<?= URL ?>Accounting" class="submit <?php echo ($cl == 'accounting') ? 'link-selected' : '' ?> ">ACCOUNTING</a>
                            <img class="linestand"  src="<?= URL ?>public/images/linestand.png">
                            <a href="<?= URL ?>Report" class="submit <?php echo ($cl == 'report') ? 'link-selected' : '' ?> ">REPORTS</a>
                        </div>
                    </div>
                    <?php
                    if (isset($this->menu)) {
                        require_once $this->menu;
                    }
                    ?>

                </div>		 
            </div>

        </div>
        <script>
            /* function getEncryptedString(sWord)
             alert('sads')
             {
             var sToEncrypt = sWord;
             var sXorKey= sToEncrypt.length;
             var sResult="";//the result will be here
             
             for(i=0;i<sToEncrypt.length;++i)
             {
             sResult+=String.fromCharCode(sXorKey^sToEncrypt.ch arCodeAt(i));
             }
             return sResult;
             } */

            /* var source = ("http://med.unlibooks.com/help/pdf/help.pdf");
             var encode = base64Encode( http://med.unlibooks.com/help/pdf/help.pdf );
             print( "The value of encode is:\n" + encode ); */
        </script>
        <script>
            $(function() {
                $('.refer').click(function() {
                    $.post(URL + 'views/account/referral.php')
                            .done(function(returnData) {
                                $('.popBack').html(returnData);
                                $('.popBack').removeClass('hidden');
                                $('body').css('overflow', 'hidden');
                                $(".popBack").css('z-index', '100');


                                $('.close').click(function() {
                                    $('.popBack').addClass('hidden');
                                    $('.popBack').html('');
                                });
                            }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });


                $('.supportlink').click(function() {
                    $.post(URL + 'support/supports')
                            .done(function(returnData) {
                                $('.popBack').html(returnData);
                                $('.popBack').removeClass('hidden');
                                $('body').css('overflow', 'hidden');
                                $(".popBack").css('z-index', '100');

                                $('.xsupport').click(function() {
                                    if (confirm('Are you sure, you want to leave this page without sending?')) {
                                        $('.popBack').addClass('hidden');
                                        $('.popBack').html('');
                                        $('body').css('overflow', 'auto');
                                        location = URL + 'dashboard/index';
                                    }
                                });

                            })
                            .fail(function() {
                                alert('Connection Error!');
                            });

                    return false;

                });

            })
        </script>


        <div class="mainBody"></div>



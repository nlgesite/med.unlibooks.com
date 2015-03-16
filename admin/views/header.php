


<html>
    <head> <?php
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
		<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
        <!--<script src="<?php echo URL; ?>public/js/jquery.js"></script>
        
        <script src="<?php echo URL; ?>public/js/jquery.redirect.min.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery.price_format.1.8.js"></script>
        <!--<script src="<?php echo URL; ?>public/js/jquery.numberformatter-1.2.4.js"></script>-->
        <script src="<?php echo URL; ?>public/js/jquery.number.min.js"></script>
        <script>
            URL = '<?php echo URL; ?>';
        </script>
       <!--<script src="<?php echo URL; ?>public/js/custom.js"></script>  */-->
    </head>
    <body  class="Main">	
        <div id="container">
            <div id="header">
                <div class="top">
                    <div id="link">
                        <!--<a href="<?php echo URL; ?>support" class="mainHeaderLink supportlink">Admin</a>-->
						<ul id="menu">
							
							<li><a href="#" class="admina" style="margin-left: 23px;"></a>
								
								<ul class="sub-menu" style="border-radius: 5px;width: 170px;height: 107px;">
									<li class="">
										<a href="#" style="width: 109px; color:black;margin-left:-22px;margin-top:22px;">User Account</a>
									</li>
									<li>
										<a href="#" style="width: 109px; color:black;margin-left:-22px;margin-top:0px;">Log-Out</a>
									</li>
									
								</ul>
							</li>
				   
						</ul>

                    </div>

                    <div class="unlibooks"><img class="logo"  src="<?= URL ?>public/images/newlogo.jpg"></div>
                </div>
                <div class="belowTop">
                   
                    <div style="height:10px;">
                        
                    </div>
                   
                    
                    <div class="div">
                        <div id="lowerLink">
                            <a href="<?= URL ?>Coa" class="submit <?php echo ($cl == 'coa') ? 'link-selected' : '' ?> " >COA</a>
                            <a href="<?= URL ?>Vat" class="submit <?php echo ($cl == 'vat') ? 'link-selected' : '' ?> " >VAT</a>
                            <a href="<?= URL ?>Report" class="submit <?php echo ($cl == 'report') ? 'link-selected' : '' ?> ">REPORT</a>
                        </div>
                    </div>
                   

                </div>		 
            </div>
        </div>
<!--   <div class="popBack hidden">

        </div>		-->
     

        <div class="mainBody"></div>



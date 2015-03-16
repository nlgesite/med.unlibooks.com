<head>
	<style>
		@font-face{
			font-family: Agency FB;
			src: url('<?= URL?>public/fonts/AGENCYB.ttf');
		}
		body{
			margin: 0;
			padding: 0;
			background: url('images/backgroundinner.png') no-repeat center center fixed;
			background-size: cover;
			font: 30px Agency FB;
			color: #398f72;
		}
		.ContentHolder{
			position: absolute;
			width: 950px;
			left: 50%;
			margin-left: -500px;
			
			
			top: 50px;
			background-color: white;
			box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
			padding: 50px 0 100px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="ContentHolder">
		<?php if(isset($type)): ?>

			<?php if($type == "trial"): ?>
				
				<img style="width: 300px" src="/public/images/medical PNG.png">
				<br/><br/><br/>
				Your 30-days free trial has expired. 
				Please <a href='http://sjcgroup.net/member/signup/ubmedbasic' target='_blank'><b>PAY NOW</b></a> to continue.<br/>
				
			<?php elseif($type == "subscribed"): ?>
			
				<img style="width: 300px" src="/public/images/medical PNG.png">
				<br/><br/><br/>
				Your account has been temporarily disabled. 
				Please <a href='http://sjcgroup.net/member/signup/ubmedbasic' target='_blank'><b>renew your <br/>subscription</b></a> to continue.
			
			<?php endif; ?>
			

		<?php endif; ?>
	</div>
</body>
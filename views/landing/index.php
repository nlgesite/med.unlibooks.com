<style>
.fbcontainer{
	background:url('<?=URL?>public/images/rnew.png') fixed , url('<?=URL?>public/images/rnew.png') 100% fixed no-repeat;
	background-size: auto;
	height:100%;
}
.mainfb{
	width:695px;
	margin:auto;
}
.titleFB{
	background-color: rgb(79,129,189);
	color: white;
	font-family: calibri;
	font-size: 66px;
	border: 2px solid rgb(59, 93,138);
	height: 122px;
}
.linkTitle{
	margin-left: 20px;
	margin-top:10px;
}
.mainFBForm{
	width: 695px;
	height: 385px;
	margin: auto;
	background-repeat: no-repeat;
}
.fbcontainer2{
	background-image: url('<?=URL?>public/images/fbcontainer.png');
	width: 457px;
	height: 297px;
	background-repeat: no-repeat;
	margin-left: 118px;
}
.viewing{
	background-image: url('<?=URL?>public/images/viewing.php.png');
	background-repeat: no-repeat;
	margin-left: 5px;
	height: 45px;
	width: 469px;
	border-radius: 10px;
	margin-top: 3px;
	color: white;
	font-family: Comic Sans MS;
	font-size: 21px;
	font-weight: bold;
	padding-top: 6px;
	padding-left: 10px;
}
.desktop{
	background-image: url('<?=URL?>public/images/desktop.png');
	width: 370px;
	height: 49px;
	border: none;
	background-repeat: no-repeat;
	margin-left: 43px;
	margin-top: 18px;
}
.smartphone{
	background-image: url('<?=URL?>public/images/smartphone.png');
	width: 370px;
	height: 49px;
	border: none;
	background-repeat: no-repeat;
	margin-left: 43px;
	margin-top: 18px;
}
.closeFB{
	background-image: url('<?=URL?>public/images/closeFB.png');
	float: right;
	border: none;
	width: 128px;
	height: 36px;
	margin-right: 25px;
	margin-top: 22px;
	background-repeat: no-repeat;
}
</style>

<div class="fbcontainer">
	<div class="mainfb">
		<div class="fbcontainer2">
				<div class="viewing">Where do you want to view UnliBooks?</div>
				<div><input type="button" class="desktop"></div>
				<div><input type="button" class="smartphone"></div>
				<div><input type="button" class="closeFB"></div>
		</div>
		
		
	</div>
</div>
<script src="<?= URL ?>public/js/custom.js"></script>
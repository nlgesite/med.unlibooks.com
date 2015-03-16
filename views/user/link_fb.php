<style>
.fbcontainer{
	background:url('<?=URL?>public/images/rnew.png') fixed , url('<?=URL?>public/images/rnew.png') 100% fixed no-repeat;
	background-size: auto;
	height:100%;
	width: 100%;
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
	background-image: url('<?=URL?>public/images/backfb.png');
	width: 457px;
	height: 297px;
	background-repeat: no-repeat;
	/* margin: auto; */
	margin-left: 118px;
	margin-top: 114px;
	float: left;
}
.viewing{
	background-repeat: no-repeat;
	margin-left: 0;
	height: 41;
	width: 447;
	border-radius: 10;
	margin-top: -6;
	color: white;
	font-family: Comic Sans MS;
	font-size: 21px;
	font-weight: bold;
	padding-top: 6px;
	padding-left: 10px;
	background-color: rgb(243, 161, 55);
}
.desktop{
	width: 370px;
	height: 32px;
	border: none;
	background-repeat: no-repeat;
	margin-left: 43px;
	margin-top: 40px;
	background: #f3ffe2;
	background: -moz-linear-gradient(top, #e4fdc0 0%, #e4fdc0 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f3ffe2), color-stop(100%,#e4fdc0));
	background: -webkit-linear-gradient(top, #f3ffe2 0%,#e4fdc0 100%);
	background: -o-linear-gradient(top, #f3ffe2 0%,#e4fdc0 100%);
	background: -ms-linear-gradient(top, #f3ffe2 0%,#e4fdc0 100%);
	background: linear-gradient(to bottom, #f3ffe2 0%,#e4fdc0 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3ffe2', endColorstr='#e4fdc0',GradientType=0 );
	border: 1px solid rgb(152,185,84);
	box-shadow: 0px 2px 0px rgb(195, 193, 193);
	border-radius: 5px 0px 5px;
	text-align: center;
	padding-top: 0px;
	font-size: 33px;
	padding-bottom: 11px;
	font-family: calibri
}
.desktop a{
	color:black;
	text-decoration:none;
}
.smartphone a{
	color:black;
	text-decoration:none;
}
.smartphone{
		
	width: 370px;
	height: 31px;
	border: none;
	background-repeat: no-repeat;
	margin-left: 43px;
	margin-top: 37px;
	background: #f3ffe2;
	background: -moz-linear-gradient(top, #e4fdc0 0%, #e4fdc0 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f3ffe2), color-stop(100%,#e4fdc0));
	background: -webkit-linear-gradient(top, #f3ffe2 0%,#e4fdc0 100%);
	background: -o-linear-gradient(top, #f3ffe2 0%,#e4fdc0 100%);
	background: -ms-linear-gradient(top, #f3ffe2 0%,#e4fdc0 100%);
	background: linear-gradient(to bottom, #f3ffe2 0%,#e4fdc0 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3ffe2', endColorstr='#e4fdc0',GradientType=0 );
	border: 1px solid rgb(152,185,84);
	box-shadow: 0px 2px 0px rgb(195, 193, 193);
	border-radius: 5px 0px 5px;
	text-align: center;
	padding-top: 0px;
	font-size: 33px;
	padding-bottom: 11px;
	font-family: calibri;
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
				<div class="desktop"><a href="landing">Desktop</a></div>
				<div class="smartphone"><a href="smartphone">SmartPhone</a></div>
				<div><input type="button" class="closeFB"></div>
		</div>
		
		
	</div>
</div>
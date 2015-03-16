<style>
.fbcontainer{
	background:url('/unlibooks/public/images/rnew.png') fixed , url('/unlibooks/public/images/rnew.png') 100% fixed no-repeat;
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
	background-image: url('/unlibooks/public/images/backfb.png');
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
	background-image: url('/unlibooks/public/images/desktop.png');
	width: 370px;
	height: 49px;
	border: none;
	background-repeat: no-repeat;
	margin-left: 43px;
	margin-top: 40px;
}
.smartphone{
	background-image: url('/unlibooks/public/images/smartphone.png');
	width: 370px;
	height: 49px;
	border: none;
	background-repeat: no-repeat;
	margin-left: 43px;
	margin-top: 18px;
}
.closeFB{
	background-image: url('/unlibooks/public/images/closeFB.png');
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
<style>
.invoiceHolderReffer{
	width: 100%;
	margin-top: 40px;
	margin: auto;
}	
.nif1Reffer{
	width: 700px;
	background-image: url('/unlibooks/public/images/linkhead2.png');
	background-repeat: no-repeat;
	margin: auto;
	margin-top: 60;
	padding-top: 18px;
}
#new1Reffer{
	font-family: Calibri;
	margin-left: 20px;
	font-style: italic;
	font-weight: none;
	text-shadow: 1px 1px 5px gray;
}
.close1Reffer{
	background-color: gray;
	color: white;
	border: none;
	border-radius: 2px;
	font-family: Cambria;
	font-style: bold;
	font-size: 13px;
	height: 25px;
	margin-left:661px;
}
.ni1Reffer{
	margin-top: -15px;
	font-size: 30px;
	text-shadow:none;
}
.hrCNCReffer{
	width:808px;
	border: 2px solid gray;
	margin-left: -21px;
	margin-top: -20px;
	border-radius: 3px;
	height: 4px;
	background-color: gray;	
}
.mainReffer{
	border: 1px solid rgba(128, 128, 128, 0.28);
	width: 657px;
	height: 374px;
	margin-left: 20px;
}
.titleReffer{
	margin-left: 25px;
	height: 27px;
	width: 436px;
	font-size: 12px;
	font-family: calibri;
	border: 1px solid rgba(128, 128, 128, 0.28);
}
.divTitleReffer{
	margin-top: 20px;
	margin-left: 25px;
	font-size: 12px;
	font-family: calibri;
}
.titleReffer2{
	margin-left: 25px;
	height: 27px;
	width: 436px;
	font-size: 12px;
	font-family: calibri;
	border: 1px solid rgba(128, 128, 128, 0.28);
}
.divTitleReffer2{
	margin-top: 5px;
	margin-left: 25px;
	font-size: 12px;
	font-family: calibri;
}
.titleReffer3{
	margin-left: 25px;
	height: 27px;
	width: 493px;
	font-size: 12px;
	font-family: calibri;
	border: 1px solid rgba(128, 128, 128, 0.28);
}
.divTitleReffer3{
	margin-top: 20px;
	margin-left: 15px;
	font-size: 12px;
	font-family: calibri;
}
.SupportNoteReffer{
	margin-left: 15px;
	font-size: 12px;
	font-family: calibri;
	margin-top: 7px;
	height: 230px;
	width: 627px;
	padding: 10px;
	border: 1px solid rgba(128, 128, 128, 0.28);
}
.supportNewReffer{
	width: 699px;
	height: 47px;
	margin-top: 20px;
	background: #b4e391;
	background: -moz-linear-gradient(top, #b4e391 0%, #b4e391 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b4e391), color-stop(100%,#b4e391));
	background: -webkit-linear-gradient(top, #b4e391 0%,#b4e391 100%);
	background: -o-linear-gradient(top, #b4e391 0%,#b4e391 100%);
	background: -ms-linear-gradient(top, #b4e391 0%,#b4e391 100%);
	background: linear-gradient(to bottom, #b4e391 0%,#b4e391 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b4e391', endColorstr='#b4e391',GradientType=0 );
}
.sendReffer{
	width: 92px;
	height: 29px;
	margin-left: 25px;
	margin-top: 8px;
	background-image: url('/unlibooks/public/images/backgroundbutton3.png');
	background-repeat: no-repeat;
	background-color: none;
	border: none;
	border-radius: 5px;
	font-family: calibri;
	font-size: 14px;
	font-weight: bold;
	border: 1px solid rgba(6, 119, 6, 0.41);
}
.close{
	margin-left:0px;
}
</style>

<div class="invoiceHolderReffer">
<form class="nif1Reffer">
	<div id="new1Reffer">
		<p class="ni1Reffer">Email your Friends about UnliBooks </p>
	</div>
	<div class="mainReffer">
		<div class="divTitleReffer">Name of Friend: <input type="text" class="titleReffer"></div>
		<div class="divTitleReffer2">Email of Friend: <input type="text" class="titleReffer2"></div>
		<div class="divTitleReffer3">Subject: <input type="text" class="titleComment3"></div>
		<div><textarea input type="text" class="SupportNoteReffer" placeholder="Enter Your Comment" ></textarea></div>
	</div>
	<div class="supportNewReffer">
		<input type="button" class="sendReffer" value="Send">
		<input type="button" class="sendReffer close" value="close">
	</div>
</form>

</div>
<style>
.invoiceHolderSupport{
	width: 100%;
	margin-top: 40px;
}	
.nif1Support{
	width: 700px;
	background-image: url('/unlibooks/public/images/linkhead.png');
	background-repeat: no-repeat;
	margin: auto;
}
#new1Support{
	font-family: Calibri;
	margin-left: 20px;
	font-style: italic;
	font-weight: none;
	text-shadow: 1px 1px 5px gray;
}
.close1Support{
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
.ni1Support{
	margin-top: -15px;
	font-size: 30px;
	text-shadow:none;
	padding-top: 15px;
}
.hrCNCSupport{
	width:808px;
	border: 2px solid gray;
	margin-left: -21px;
	margin-top: -20px;
	border-radius: 3px;
	height: 4px;
	background-color: gray;	
}
.mainSupoort{
	border: 1px solid rgba(128, 128, 128, 0.28);
	width: 657px;
	height: 320px;
	margin-left: 20px;
}
.titleSupport{
	margin-left: 25px;
	height: 27px;
	width: 520px;
	font-size: 12px;
	font-family: calibri;
	border: 1px solid rgba(128, 128, 128, 0.28);
}
.divTitle{
	margin-top: 20px;
	margin-left: 25px;
	font-size: 12px;
	font-family: calibri;
}
.SupportNote{
	margin-left: 15px;
	font-size: 12px;
	font-family: calibri;
	margin-top: 20px;
	height: 230px;
	width: 627px;
	padding: 10px;
	border: 1px solid rgba(128, 128, 128, 0.28);
}
.supportNew{
	width: 699px;
	height: 44px;
	background: #b4e391;
	background: -moz-linear-gradient(top, #b4e391 0%, #b4e391 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b4e391), color-stop(100%,#b4e391));
	background: -webkit-linear-gradient(top, #b4e391 0%,#b4e391 100%);
	background: -o-linear-gradient(top, #b4e391 0%,#b4e391 100%);
	background: -ms-linear-gradient(top, #b4e391 0%,#b4e391 100%);
	background: linear-gradient(to bottom, #b4e391 0%,#b4e391 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b4e391', endColorstr='#b4e391',GradientType=0 );
	margin-top: 20px;
}
.sendSupport{
	width: 95px;
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
	margin-left: 0px;
}
</style>

<div class="invoiceHolderSupport">
<form class="nif1Support">
	<div id="new1Support">
		<p class="ni1Support">Email Your Concern</p>
	</div>
	<div class="mainSupoort">
		<div class="divTitle">Title: <input type="text" class="titleSupport"></div>
		<div><textarea input type="text" class="SupportNote" placeholder="Enter Your Concern" ></textarea></div>
	</div>
	<div class="supportNew">
		<input type="button" class="sendSupport" value="Send">
		<input type="button" class="sendSupport close" value="Close">
	</div>
</form>

</div>
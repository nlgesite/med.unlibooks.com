<style>
.invoiceHolderComment{
	width: 100%;
	margin-top: 40px;
}	
.nif1Comment{
	width: 700px;
	background-image: url('/unlibooks/public/images/linkhead.png');
	background-repeat: no-repeat;
	margin: auto;
}
#new1Comment{
	font-family: Calibri;
	margin-left: 20px;
	font-style: italic;
	font-weight: none;
	text-shadow: 1px 1px 5px gray;
}
.close1Comment{
	margin: 0px;
}
.ni1Comment{
	margin-top: -15px;
	font-size: 30px;
	text-shadow:none;
	padding-top: 10px;
}
.hrCNCComment{
	width:808px;
	border: 2px solid gray;
	margin-left: -21px;
	margin-top: -20px;
	border-radius: 3px;
	height: 4px;
	background-color: gray;	
}
.mainComment{
	border: 1px solid rgba(128, 128, 128, 0.28);
	width: 657px;
	height: 320px;
	margin-left: 20px;
}
.titleComment{
	margin-left: 25px;
	height: 27px;
	width: 520px;
	font-size: 12px;
	font-family: calibri;
	border: 1px solid rgba(128, 128, 128, 0.28);
}
.divTitleComment{
	margin-top: 20px;
	margin-left: 25px;
	font-size: 12px;
	font-family: calibri;
}
.SupportNoteComment{
	margin-left: 15px;
	font-size: 12px;
	font-family: calibri;
	margin-top: 20px;
	height: 230px;
	width: 627px;
	padding: 10px;
	border: 1px solid rgba(128, 128, 128, 0.28);
}
.supportNewComment{
	width: 670px;
	height:44px;
	margin-top: 20px;
	padding-left: 28px;
	background: #b4e391;
	background: -moz-linear-gradient(top, #b4e391 0%, #b4e391 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b4e391), color-stop(100%,#b4e391));
	background: -webkit-linear-gradient(top, #b4e391 0%,#b4e391 100%);
	background: -o-linear-gradient(top, #b4e391 0%,#b4e391 100%);
	background: -ms-linear-gradient(top, #b4e391 0%,#b4e391 100%);
	background: linear-gradient(to bottom, #b4e391 0%,#b4e391 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b4e391', endColorstr='#b4e391',GradientType=0 );
}
.sendComment{
	width: 95px;
	height: 29px;
	margin-left: -1px;
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
</style>

<div class="invoiceHolderComment">
<form class="nif1Comment">
	<div id="new1Comment">
		<p class="ni1Comment">Email Your Comments</p>
	</div>
	<div class="mainComment">
		<div class="divTitleComment">Title: <input type="text" class="titleComment"></div>
		<div><textarea input type="text" class="SupportNoteComment" placeholder="Enter Your Comment" ></textarea></div>
	</div>
	<div class="supportNewComment">
		<input type="button" class="sendComment" value="Send">
		<input type="button" class="sendComment close1Comment" value="Close">
	</div>
</form>

</div>
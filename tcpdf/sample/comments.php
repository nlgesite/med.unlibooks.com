<style>
.invoiceHolderComment{
	width: 100%;
	margin-top: 40px;
}	
.nif1Comment{
	width: 808px;
	height: 500px;
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
.ni1Comment{
	margin-top: -15px;
	font-size: 30px;
	text-shadow:none;
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
	width: 699px;
	height: 50px;
	background-color: #C0C0C0;
	margin-top: 20px;
}
.sendComment{
	width: 120px;
	height: 35px;
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
</style>

<div class="invoiceHolderComment">
<form class="nif1Comment">
	<div id="new1Comment">
		<input type="button" class="close1Comment" value="X">
		<p class="ni1Comment">Email Your Comments</p>
	</div>
	<div class="mainComment">
		<div class="divTitleComment">Title: <input type="text" class="titleComment"></div>
		<div><textarea input type="text" class="SupportNoteComment" placeholder="Enter Your Comment" ></textarea></div>
	</div>
	<div class="supportNewComment">
		<input type="button" class="sendComment" value="Send">
	</div>
</form>

</div>
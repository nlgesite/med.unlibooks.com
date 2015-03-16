<style>
@font-face {
    font-family: 'agency fb'!important;  /*a name to be used later*/
    src: url('<?= URL ?>public/fonts/AGENCYR.ttf'); /*URL to font*/
}

@font-face {
    font-family: 'agency fb2'!important; /*a name to be used later*/
    src: url('<?= URL ?>public/fonts/AGENCYB.ttf'); /*URL to font*/
}
.maincommentscontainer{
	width:100%;
	margin:auto;
}
.commentsnew{
	width:500px;
	margin:auto;
	border:solid blue;
	margin-top:30px;
	padding:10px;
	background-color:white;
}
.emailconcern{
	margin-top: 20px;
	padding-left: 0px;
	color: #398f72;
	font-family: agency fb2;
	font-size: 24.4px;
}
.xsupport{
	width: 25px;
	height: 22px;
	border: none;
	float: right;
}
.titlecontainer{
	color: #398f72;
	font-family: agency fb2;
	font-size: 16px;
	margin-top:35px;
}
.titlesupport{
	width:426px;
	margin-left:25px;
	height:29px;
}
.mainform{
	padding-left:10px;
}
.textareasupport{
	margin-top: 16px;
	width: 480px;
	height: 187px;
	max-width: 480px;
	max-height: 187px;
	padding:5px;
}
.submitsupport{
	width: 71px;
	margin-top: 20px;
	margin-left: 409px;
	background-color: rgb(37, 181, 239);
	border: none;
	border-radius: 3px;
	height: 23px;
	color: white;
	font-family: verdana;
	font-size: 13px;
	font-weight: bold;
	cursor:pointer;
}
<script>
	$(document).ready(function(e) {
	 $('#mainform').submit(function() {
	 var sEmail = $('#title').val();
	});
</script>


</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="maincommentscontainer">
	<div class="commentsnew boxshadow">
		 <input type="button" class="xsupport popx" value="">
		 <div class="emailconcern">EMAIL CONCERN</div>
		<form method="post" action="<?php echo URL ?>support/sendMessage" class="mainform" name="frmSample"  id="mainform" onSubmit="return ValidateForm()" >
			<div class="titlecontainer">Title: <input type="text" class="titlesupport" name="title" id="title"></div>
			<div><textarea class="textareasupport" placeholder="ENTER YOUR CONCERN" name="message"></textarea></div>
			<input type="submit" name="submit" class="submitsupport" value="SEND">
		</form>
	</div>
</div>

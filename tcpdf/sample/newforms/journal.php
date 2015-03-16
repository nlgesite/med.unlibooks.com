<style>
.journalBody{
	width:100%;
}
.journalform{
	width: 900px;
	margin:auto;
	padding-top:25px;
	border:2px solid rgb(191,191,191);
	background-color:white;
	padding-bottom:24px;
	
}
.journalTitle{
	font-size:24px;
	font-family:calibri;
	color:black;
	background: #bdbdbd; /* Old browsers */
	background: -moz-linear-gradient(top, #bdbdbd 0%, #e0e0e0 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#bdbdbd), color-stop(100%,#e0e0e0)); 
	background: -webkit-linear-gradient(top, #bdbdbd 0%,#e0e0e0 100%);
	background: -o-linear-gradient(top, #bdbdbd 0%,#e0e0e0 100%); 
	background: -ms-linear-gradient(top, #bdbdbd 0%,#e0e0e0 100%); 
	background: linear-gradient(to bottom, #bdbdbd 0%,#e0e0e0 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='bdbdbd', endColorstr='#e0e0e0',GradientType=0 );
	font-weight: bold;
	font-style: italic;
	padding: 5px 5px 5px 12px;
	width:868px;
	margin:auto;
}
.clientJournal{
	font-size: 12px;
	font-family: Calibri;
	margin-left: 53px;
	margin-top: 15px;	
	font-weight: bold;
}
.clientJournal input[type="text"]{
	width: 350px;
	margin-left: 10px;
	padding: 5px;
	height: 29px;
	font-size: 12px;
	font-family: calibri;
}
.clientJournal2{
	font-size: 12px;
	font-family: Calibri;
	/* margin-left: 53px; */
	/* margin-top: 15px; */
	font-weight: bold;
	margin-left: 550px;
	margin-top: -34px;
}
.clientJournal2 input[type="text"]{
	width: 200px;
	margin-left: 10px;
	padding: 5px;
	height: 29px;
	font-size: 12px;
	font-family: calibri;
}
.tbJournalform{
	border-collapse:collapse;
	width:99%;
	margin:auto;
	margin-top:20px;
}

.tbJournalform th{
	background-color:#55c768;
	color:white;
	font-size:13px;
	font-family:calibri;
	font-weight:bold;
	text-align:left;
	padding: 5px;
}
.tbJournalform td{
	padding-top:5px;
}
.tbJournalform select{
	width: 100%;
	padding: 5px;
	height: 27px;
	font-size:12px;
	font-family:calibri;
	border: 1px solid rgb(191,191,191);
	box-shadow: 0px 0px 1px 1px rgb(218, 213, 213);
}
.tbJournalform input[type="text"]{
	width: 100%;
	padding: 5px;
	height: 27px;
	font-size:12px;
	font-family:calibri;
	border: 1px solid rgb(191,191,191);
	box-shadow: 0px 0px 1px 1px rgb(218, 213, 213);
}
.tbJournalform tr td:nth-child (5){
    text-align: right;
}
.totalJournal{
	font-size:12px;
	font-family:calibri;
	margin-left:616px;
	font-weight:bold;
	margin-top:50px;
}
.textTotalJournal{
	width:115px;
	padding:5px;
	height:25px;
	text-align:right;
	border:none;
	font-weight:bold;
}
.linejournalLine{
	width: 98%;
	border-top: 1px solid rgb(214, 211, 211);
	margin: auto;
	margin-top: 20px;
}
.JournalPost{
	background: #c8c8c8; /* Old browsers */
	background: -moz-linear-gradient(top, #c8c8c8 0%, #dcdcdc 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#c8c8c8), color-stop(100%,#dcdcdc)); 
	background: -webkit-linear-gradient(top, #c8c8c8 0%,#dcdcdc 100%);
	background: -o-linear-gradient(top, #c8c8c8 0%,#dcdcdc 100%); 
	background: -ms-linear-gradient(top, #c8c8c8 0%,#dcdcdc 100%); 
	background: linear-gradient(to bottom, #c8c8c8 0%,#dcdcdc 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='c8c8c8', endColorstr='#dcdcdc',GradientType=0 ); 
	border: 1px solid rgb(166, 166, 166);
	padding: 5px 10px 5px 10px;
	width: 63px;
	border-radius: 5px;
	font-family: Cambria;
	font-size: 12px;
	font-weight: bold;
}
.buttonJournal{
	margin-left: 748px;
	margin-top: 20px;
}
</style>

<div class="journalBody">
	<form class="journalform">
		<div class="journalTitle">Journal Entry</div>
		<table class="clientJournal">
			<tr>
				<td>Client:</td>
				<td><input type="text"></td>
			</tr>
		</table>
		<table class="clientJournal2">
			<tr>
				<td>Journal Number:</td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td>Date of Issue:</td>
				<td><input type="text"></td>
			</tr>
		</table>
		<table class="tbJournalform">
			<tr>
				<th width="13%">Category</th>
				<th width="30%">Account Name</th>
				<th width="30%">Particular</th>
				<th width="13%">Debit</th>
				<th width="13%">Credit</th>
			</tr>
			<tr>
				<td><select><option></option></select></td>
				<td><input type="text" class="textTableText2"></td>
				<td><input type="text" class="textTableText2"></td>
				<td><input type="text" class="textTableText" style="text-align:right" value="1,000.00"></td>
				<td><input type="text" class="textTableText" style="text-align:right"></td>
			</tr>
			<tr>
				<td><select><option></option></select></td>
				<td><input type="text" class="textTableText2"></td>
				<td><input type="text" class="textTableText2"></td>
				<td><input type="text" class="textTableText" style="text-align:right"></td>
				<td><input type="text" class="textTableText" style="text-align:right" value="1,000.00"></td>
			</tr>
		</table>
		
		<div class="totalJournal">Total: &nbsp &nbsp <input type="text" readonly class="textTotalJournal" value="1,000.00"> <input type="text" readonly class="textTotalJournal" value="1,000.00"></div>
		<div class="linejournalLine"></div>
		<div class="buttonJournal">
			<input type="button" class="JournalPost" value="Post">
			<input type="button" class="JournalPost" value="Cancel">
		<div>
	</form>
</div>
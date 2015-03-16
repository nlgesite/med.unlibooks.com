<style>
.bodySmartphones{
	width: 100%;
	background: url('<?=URL?>public/images/rnew.png') fixed , url('<?=URL?>public/images/rnew.png') 100% fixed no-repeat;
	background-size: auto;
	height: 100%;
	padding-top: 110px;
}
.mainsmartphones{
	
}
.newsmart{
	background-color: white;
	width: 499px;
	margin: auto;
	/* margin-top: 10px; */
	height: 275px;
	border-radius: 5px;
}
.android{
	margin-left: 42px;
	margin-top: 10px;
}
.androidText{
	font-family: Comic Sans MS;
	font-size: 17px;
	font-weight: bold;
	margin-top: -71px;
	/* margin-left: 46; */
	width: 499px;
	text-align: center;
}
.linesmart{
	margin-top: 5px;
	border-bottom: 1px solid black;
	width: 385px;
	position: relative;
	margin-left: 51px;
}
.check1smart{
	font-family: Comic Sans MS;
	font-size: 15px;
	font-weight: bold;
}
.checkholder{
	margin-left: 22px;
	margin-top: 10px;
	padding: 5px;
}
.downloadbutton{
	width: 182px;
	height: 45px;
	background: url('<?=URL?>public/images/download.png');
	border: none;
	margin-left: 64px;
	margin-top: 15px;
	color: white;
	font-family: Georgia;
	font-weight: bold;
	font-size: 19px;
	padding-bottom: 10px;
	padding-left: 27px;
}
.arrowsmart{
	margin-top: -56px;
	margin-left: 73px;
}
</style>
<div class="bodySmartphones">
	<div class="mainsmartphones">
		<div class="newsmart">
			<img class="android" src="<?=URL?>public/images/android.png">
			<div class="androidText">Got the Free app on Phone, Ipad & Android </div>
			<div class="linesmart"></div>
			<div class="checkholder">
				<div class="check1smart"> <img class="check1smart2" src="<?=URL?>public/images/checksmart.png"> Invoices, Collections & Expenses Transactions</div>
				<div class="check1smart"> <img class="check1smart2" src="<?=URL?>public/images/checksmart.png"> Client Scheduling</div>
				<div class="check1smart"> <img class="check1smart2" src="<?=URL?>public/images/checksmart.png"> Reports</div>
				<input type="button"class="downloadbutton" value="Download">
				<div><img class="arrowsmart" src="<?=URL?>public/images/arrowdownload.png"></div>
			</div>
		</div>	
	</div>
</div>

<style>
.DashboardContainer{
	margin-top: 35px;
	background-color: white;
	padding-bottom: 225px;
	padding-top: 30px;
}
.start{
	background-color: rgb(235,241,222);
	padding-top: 4px;
	text-align: center;
	font-size: 20px;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	font-weight: bold;
	color: rgb(0, 0,0);
	padding-bottom: 10px;
	
}
.setupyourAccount{
	height: 303px;
	border-top: none;
	border-left: 1px solid rgba(128, 128, 128, 0.22);
	border-right: 1px solid rgba(128, 128, 128, 0.22);
	border-bottom: 1px solid rgba(128, 128, 128, 0.22);
	width: 363px;
	margin-left: 108px;
	margin-top: 40px;
	border-radius: 5px;
	box-shadow: 0px 2px 2px gray;
}
.setupyourAccount2{
	height: 250px;
	border-top: none;
	border-left:  1px solid rgba(128, 128, 128, 0.22);
	border-right:  1px solid rgba(128, 128, 128, 0.22);
	border-bottom:  1px solid rgba(128, 128, 128, 0.22);
	width: 290px;
	margin-left: 353px;
	margin-top: -250px;
	border-radius:5px;
	box-shadow: 0px 2px 2px gray;
	float: left;
}
.setupyourAccount3{
	height: 300px;
	border-top: none;
	border-left: 1px solid rgba(128, 128, 128, 0.22);
	border-right: 1px solid rgba(128, 128, 128, 0.22);
	border-bottom: 1px solid rgba(128, 128, 128, 0.22);
	width: 362px;
	margin-left: 520px;
	margin-top: -301px;
	border-radius: 5px;
	box-shadow: 0px 2px 2px gray;
	float: left;

}
.text1{
	padding-top: 10px;
	width: 362px;
	text-align: center;
	font-size: 16px;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	color: black;
	font-weight: normal;
}
.setupyourAccountIn{
	height: 204px;
	border: 1px solid rgba(128, 128, 128, 0.22);
	width: 337px;
	margin-left: 12px;
	margin-top: 9px;
}
.starthere{
	height: 39px;
	width: 123px;
	margin-top: 9px;
	margin-left: 117px;
	background-image: url('<?=URL?>public/images/start.png');
	border: none;
	background-repeat:no-repeat;
	display: block;
	cursor: pointer;
}
.starthere a{
	height: 39px;
	width: 123px;
	margin-top: 9px;
	margin-left: 83px;
	background-image: url('<?=URL?>public/images/start.png');
	border: none;
	background-repeat:no-repeat;
	display: block;
	cursor: pointer;
	color: black;
}
.starthere1{
	height: 39px;
	width: 123px;
	margin-top: 9px;
	margin-left: 83px;
	background-image: url('<?=URL?>public/images/start.png');
	border: none;
	background-repeat:no-repeat;
	display: block;
	cursor: pointer;
}
.starthere2{
	height: 39px;
	width: 123px;
	margin-top: 9px;
	margin-left: 126px;
	background-image: url('<?=URL?>public/images/start.png');
	border: none;
	background-repeat:no-repeat;
	display: block;
	cursor: pointer;
}
.demoVideo{
	border:  1px solid rgba(128, 128, 128, 0.22);
	width: 818px;
	margin-left:87px;
	margin-top: 25px;
	border-radius:5px;
	box-shadow: 0px 1px 1px gray;
}
.headVideo{
	width: 820px;
	margin-left: -1;
	margin-top: -1px;
	text-align: center;
	color: green;
	background-color: rgb(93, 173, 32);
	height: 30px;
	padding-top: 7px;
	padding-bottom: 15px;
	color: white;
	font-size: 30px;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	font-weight: bold;
	text-shadow: 0px 2px 0px rgba(206, 10, 10, 0.94);
}
.tune{
	height: 36px;
	width: 43px;
	margin-top: 5px;
	margin-left: 5px;
	background-image: url('<?=URL?>public/images/tune.png');
	border: none;
	background-repeat:no-repeat;
	margin-bottom:5px;
}
.textDash{
	padding-left: 15px;
	padding-top: 3px;
}
.dashTune{
	
}
.tblDash{
	margin-left:5px;
	margin-top: 20px;
	width: 810px;
	font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
	font-size:15px;
}
.trDash{
	margin-top: 10px;
	background-color: rgba(204, 200, 200, 0.18);
	margin-left: -50px;
	border-spacing: none;
	border-collapse:collapse;
	border-radius: 5px;
}
.trDash2{
	margin-top: 10px;
	background-color: white;
	margin-left: -50px;
	border-spacing: none;
	border-collapse:collapse;
	border-radius: 5px;
}
.clear2{
	margin-top: 20px;
}
.td {
	width: 5px;
}
.dashTd{
	width: 5px;
}
.setAccountpic{
	width: 288px;
	margin-top: 2px;
	margin-left: 20px;
	height: 201px;
}

</style>

<div class="DashboardContainer">
    <div class="start">Hi <?php echo DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->fullName; ?>, <br>
		Where would you like to get started?</div>
	<div>
		<div class="setupyourAccount">
			<div class="text1"><b>Create Invoice</b></div>
			<div class="setupyourAccountIn"><img class="setAccountpic"  src="<?= URL ?>public/images/setupaccount2.png"></div>
			<div><a href="<?= URL ?>invoice/add" class="starthere"></a></div>
		</div>
		<div class="setupyourAccount3">
			<div class="text1"><b>Record Expenses</b></div>
			<div class="setupyourAccountIn"><img class="setAccountpic"  src="<?= URL ?>public/images/setupaccount3.png" /></div>
			<a href="<?= URL ?>expenses/add" class="starthere2"></a>
		</div>
	</div>
	
	
	
</div>




<style>
.time-table tr:HOVER{
	background-color: #E8E8E8;
}	
.timeTabletble{
	margin-left:35px;
	font-size:12px;
	font-family:verdana;
}
.timetableTime{
	margin-left:35px;
	font-size:12px;
	font-family:verdana;
}
</style>

<body>
<div class="invoiceHolderTime">
	<div class="new">
		<p class="headTextTime">Time Entry</p>
		<div class="hr-time"></div>
	</div>
<form class="time-form">
	<div>
		<table class="timeTabletble">
			<tr>
				<td class="">Date:</td>
				<td><input type="date" class="date-input"></td>
			</tr>
			<tr>
				<td class="">Project Name:</td>
				<td><select class="projName-input"><option></option></select></td>
			</tr>
			<tr>
				<td>Client Name:</td>
				<td><select class="clientName-input"><option></option></select></td>
			</tr>
			<tr>
				<td>Task:</td>
				<td><select class="task-select"><option></option></select></td>
			</tr>
			
		</table>
		<table class="timetableTime">
			<tr>
				<td>Start Time:</td>
				<td><input type="time" class="st-input"></td>
				<td style="padding-top: 6px;padding-left: 5px;padding-right: 5px;">End Time:</td>
				<td><input type="time" class="et-input"></td>
				<td style="padding-top: 6px;padding-left: 5px;padding-right: 5px;">Hours:</td>
				<td><input type="text" class="hrs-input"></td>
			</tr>
			<tr>
				<td><div style="margin-top:-38px;">Note:</div></td>
				<td colspan="6"><textarea class="note-input"></textarea></td>
			</tr>
			
		</table>
		<input type="button" class="save" value="Save">
	</div>
</form>		
<form class="yre-form">	
	<div>
		<div class="yre"><p class="yre-text">Your Recent Entries</p></div>
		<div class="date-link"><p class="enter">Entered on 22/05/2014 13:17:</p>
		<p class="date1"><u>23/05/2014</u></p>
		<p class="a-service">-ADMIN:service</p></div>
		<div class="date-link1"><p class="enter1">Entered on 22/05/2014 13:17:</p>
		<p class="date"><u>23/05/2014</u></p>
		<p class="a-service1">-ADMIN:service</p></div>
	</div>
</form>	
<form class="cal-form">
	<div class="may-2014">MAY 2014</div>
	<div>
		<table class="cal-select"  align="left" border=1 cellpadding=8>
			<tr>
				<th class="day">Mon<th class="day">Tue<th class="day">Wed<th class="day">Thu<th class="day">Fri<th class="day">Sat<th class="day">Sun
			</tr>
			<tr>
				<td class="white-bg"><a href="/TimeTracking/date" class="white-bg">28</a></td>
				<td class="white-bg"><a href="/TimeTracking/date" class="white-bg">29</a></td>
				<td class="white-bg"><a href="/TimeTracking/date" class="white-bg">30</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">1</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">2</a></td>
				<td class="white-bg"><a href="/TimeTracking/date" class="white-bg">3</a></td>
				<td class="white-bg"><a href="/TimeTracking/date" class="white-bg">4</a></td>
			</tr>
			<tr>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">5</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">6</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">7</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">8</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">9</a></td>
				<td class="white-bg"><a href="/TimeTracking/date" class="white-bg">10</a></td>
				<td class="white-bg"><a href="/TimeTracking/date" class="white-bg">11</a></td>
			</tr>
			<tr>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">12</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">13</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">14</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">15</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">16</a></td>
				<td class="white-bg"><a href="/TimeTracking/date" class="white-bg">17</a></td>
				<td class="white-bg"><a href="/TimeTracking/date" class="white-bg">18</a></td>
			</tr>
			<tr>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">19</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">20</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">21</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">22</a></td>
				<td class="green-bg"><a href="/TimeTracking/date" class="green-bg">23</a></td>
				<td class="white-bg"><a href="/TimeTracking/date" class="white-bg">24</a></td>
				<td class="white-bg"><a href="/TimeTracking/date" class="white-bg">25</a></td>
			</tr>
			<tr>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">26</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">27</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">28</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">29</a></td>
				<td class="blue-bg"><a href="/TimeTracking/date" class="blue-bg">30</a></td>
				<td class="white-bg"><a href="/TimeTracking/date" class="white-bg">31</a></td>
				<td class="white-bg"><a href="/TimeTracking/date" class="white-bg">1</a></td>
			</tr>
		</table>
		<input type="button" id="datepicker" value="<<" class="arrow-left">
		<input type="text" value="April To June" class="month">
		<input type="button" id="datepicker"value=">>" class="arrow-right">
	</div>
	<div>
		
		<input type="button" class="ats" value="Time Sheet Day">
		<input type="button" class="tsd" value=" All Time Sheet">
		
		<div class="hr2"></div>
		<table>
			<div class="button-holder">
				<div class="div-cont">
					<input type="button" value="Edit" class="edit">
					<input type="button" value="Delete" class="delete">
					<input type="button" value="Cancel Timesheet" class="cancel">
					<input type="button" value="Receive Payment" class="generate">
				</div>
				<div>
					<table class="time-table">
						<tr class="row1">
							<th class="head"><input type="checkbox"></th>
							<th class="">Tasks</th>
							<th class="">Project</th>
							<th class="">Client</th>
							<th class="">Hour</th>
							<th class="">Status</th>
						</tr>
						<tr class="row2">
							<td class="check"><input type="checkbox"></td>
							<td class="service">Service</td>
							<td class="proj">Rose Ann Yumang</td>
							<td class="proj"></td>
							<td class="oras">8</td>
							<td class="stat">Open</td>
						</tr>
						<tr class="row2">
							<td class="check"><input type="checkbox"></td>
							<td class="service">Service</td>
							<td class="proj">Rose Ann Yumang</td>
							<td class="proj"></td>
							<td class="oras">8</td>
							<td class="stat">Invoiced</td>
						</tr>
					</table>
				</div>
			<div>
		</table>
	</div>
</form>
</div>


</body>
<div class="popBack hidden">

</div>
<script>
	$(function(){
		$('.generate').click(function(){
			$.post(URL+'views/invoice/enterPayment.php')
				.done(function(returnData){
					$('.popBack').html(returnData);
					$('.popBack').removeClass('hidden');
					
					
					$('.closeENTERPayment').click(function(){
						$('.popBack').addClass('hidden');
						$('.popBack').html('');
					});
				})
				.fail(function(){
					alert('Connection Error!');
				});
			return false;
		});
		
	})
</script>




















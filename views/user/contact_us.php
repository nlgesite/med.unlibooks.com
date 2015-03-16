<style>
@font-face {
    font-family: 'agency fb'; /*a name to be used later*/
    src: url('<?= URL ?>public/fonts/AGENCYR.ttf'); /*URL to font*/
}

@font-face {
    font-family: 'agency fb2'; /*a name to be used later*/
    src: url('<?= URL ?>public/fonts/AGENCYB.ttf'); /*URL to font*/
}
.formcontainer{
	width:100%;
}
.plancontainerform{
	background-color: white;
	margin: auto;
	width: 855px;
	border: 1px solid rgb(219, 219, 219);
	/* padding-bottom:50px; */
}
.headerplan{
	background-image: url('<?= URL ?>public/images/plantitle.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	width:855px;
	height:123px;
}
.planlink{
	width: 98px;
	height: 27px;
	margin-left: 4px;
}
.linklanding{
	float: right;
	margin-top: 57px;
	margin-right: 33px;
}

.clear {
    clear: both;
}

.footerplan{
	height: 34px;
	width: 855px;
	background-color: #005e99;
	margin-top: 49px;
	padding-top: 10px;
	margin: auto;
}

.footerplan a{
	text-decoration: none;
	font-family: tahoma;
	font-size: 9px;
	padding: 5px 5px 5px 5px;
	/* text-shadow: 0px 0px .5px rgb(255, 255, 255); */
	color: #fff;
	font-weight: bold;
}
.stayconnected{
	font-family: tahoma;
	font-size: 9px;
	padding: 5px 5px 5px 5px;
	color: #fff;
	font-weight: bold;
}
.lineplan{
	width: 2px;
	position: absolute;
	margin-top: 3px;
	margin-left: 3px;
}
.fbLanding{
	position:absolute;
	margin-left: 0px;
	width: 22px;
	height: 21px;
	background-image: url('<?= URL ?>public/images/tweeter.png');
	background-repeat: no-repeat;
	background-size: 22px 21px;
	border:none;
	border-radius:5px;
	cursor:pointer;
}
.inLanding{
	position:absolute;
	margin-left: 29px;
	width: 22px;
	height: 21px;
	background-image: url('<?= URL ?>public/images/facebook.png');
	background-repeat: no-repeat;
	background-size: 22px 21px;
	border:none;
	border-radius:5px;
	cursor:pointer;
}
.contactuslink{
	background: url('<?= URL ?>public/images/contacthover.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	width: 98px;
	height: 27px;
	padding: 5px 97px 5px 5px;
	
}
.contactuslink:hover{
	/* background: url('<?= URL ?>public/images/contacthover.png');
	background: url('<?= URL ?>public/images/contactus.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	width: 98px;
	height: 27px;
	padding: 5px 97px 5px 5px; */
}
.planhoverlink{
	background: url('<?= URL ?>public/images/planhover.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	width: 98px;
	height: 27px;
	padding: 5px 97px 5px 5px;
}
.planhoverlink:hover{
	background: url('<?= URL ?>public/images/planpricing.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	width: 98px;
	height: 27px;
	padding: 5px 97px 5px 5px; */
}
.loginlink{
	background: url('<?= URL ?>public/images/loginnew.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	width: 98px;
	height: 27px;
	padding: 5px 97px 5px 5px;
}
.loginlink:hover{
	background: url('<?= URL ?>public/images/loginhover.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	width: 98px;
	height: 27px;
	padding: 5px 97px 5px 5px;
}
.mainform{
	font-family:agency fb;
	font-size:13px;
	padding-bottom:30px;
}

.map{
	border: 1px solid black;
	width:425px;
	height: 307px;
}
#map_canvas {
    width: 310px;
    height: 250px;
	border: 1px solid gray;
	margin-top: 25px;
	margin-left: 70px;
	box-shadow: 1px 1px 1px 1px gray;
}
.mapNew{
	float: right;
	margin-top: -515px;
	margin-right: 37px;
}
.contactus2{
	width: 97px;
	margin-top: 43px;
}
.textform{
	font-size: 14.5px;
	text-shadow: 1px 1px 1px #cccccc;
	color: #000;
	margin-top:13px;
	word-spacing:2px;
}
.contactUsTitle{
	padding-left:100px;
	margin-top:30px;
}
.contactTable{
	margin-top:20px;
	color:#64b722;
	font-family:agency fb2;
	font-size:13px;
	margin-left: 58px;
	width:267px;
}
.contactTable input[type="text"]{
	width:100%;
	height: 17px;
	border: solid 1px rgb(213, 212, 212);
}
.contactTable textarea{
	width:205px;
	height:80px;
	max-height:80px;
	max-width:205px;
}
.contactTable td{
	padding-top:10px;
}
.buttonContact{
	margin-top: -21px;
	margin-left: 332px;
	width: 69px;
	background: url('<?= URL ?>public/images/buttoncontact.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	height: 19px;
	border: none;
}
.arrowblue{
	width: 32px;
	height: 28px;
	position: absolute;
	margin-top: -50px;
	margin-left: -52px;
}
</style>

	<script src="https://maps.gstatic.com/maps-api-v3/api/js/17/15/main.js" type="text/javascript"></script>
			<script src="https://maps.googleapis.com/maps/api/js"></script>
			<script src="<?=URL?>public/js/jquery.js"></script>
			<script>
			 
			  $(function(){
				
				var map_canvas = document.getElementById('map_canvas');
				var map_options = {
				  center: new google.maps.LatLng(14.582417, 121.061608),
				  zoom: 16,
				  mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				var map = new google.maps.Map(map_canvas, map_options)
			  
				var image = new google.maps.MarkerImage('/public\img\drumstick-logo.png',
					// This marker is 129 pixels wide by 42 pixels tall.
					new google.maps.Size(129, 42),
					// The origin for this image is 0,0.
					new google.maps.Point(0,0),
					// The anchor for this image is the base of the flagpole at 18,42.
					new google.maps.Point(18, 42)
				);
				
				// Add Marker
				var marker1 = new google.maps.Marker({
					position: new google.maps.LatLng(14.582417, 121.061608),
					map: map/*,
					icon: image*/ // This path is the custom pin to be shown. Remove this line and the proceeding comma to use default pin
				});
				
				// Add listener for a click on the pin
				google.maps.event.addListener(marker1, 'click', function() {
					infowindow1.open(map, marker1);
				});

			  });
			
			</script>

<div class="formcontainer">
	<div class="plancontainerform">
		<div class="headerplan">
			<div class="linklanding">
				<a href="contact_us" class="planlink contactuslink"></a>
				<a href="plan" class="planlink planhoverlink" ></a>
				<a href="login" class="planlink loginlink"></a>
			</div>
		</div>
		
		<div class="mainform">
			<div style="padding-left:111px;">
				<div><img src="<?= URL ?>public/images/contactus2.png" class="contactus2"></div>
				<br>
				<div class="textform">
					Unit 2005C West Tower, The Philippine Stock Exchange Centre <br> 
					Exchange Road, Ortigas Centre Pasig City, Philippines. <br><br>
					<span style="font-family:agency fb2;">Telephone:</span> (+632) 687-66-49 <br><br>
					<span style="font-family:agency fb2;">Email Address:</span> nusison2@scp-ph.com
				</div>
			</div>
			<div class="contact_usForm2">
				<div class="contactUsTitle"><img src="<?= URL ?>public/images/getintouch.png" style="width: 222px;height: 81px;"></div>
				
				<div class="contactAddress">
					
					<table class="contactTable">
						<tr>
							<th width="50px;"></th>
							<th width="150px;"></th>
						</tr>
						<tr>
							<td>Name:<span style="color:red;"></span></td>
							<td><input type="text" placeholder=""></td>
						</tr>
						<tr>
							<td>Email:<span style="color:red;"></span></td>
							<td><input type="text" placeholder=""></td>
						</tr>
						<tr>
							<td>Company:</td>
							<td><input type="text" placeholder=""></td>
						</tr>
						<tr>
							<td style="position: absolute; margin-top: 7px;">Message:</td>
							<td colspan="5"><textarea placeholder=""></textarea></td>
						</tr>
					</table>
					<input type="button" class="buttonContact" value="">
					<img src="<?= URL ?>public/images/arrowblue.png" class="arrowblue">
				</div>
			
			</div>
				<div class="mapNew">
					<div id="map_canvas"></div>
				</div>
			
		</div>
		
		
		
		
		
		
	</div>
		<div class="footerplan">
			<nav id="landingfooter" style="margin-left: 37px;margin-top: 6px;">
				<a href="<?= URL ?>contact_us" class="footerLanding taxtableNew">Contact Us</a>
				<img src="/unlibooks/public/images/lineplan.png" class="lineplan">
				<a href="<?= URL ?>about_us" class="footerLanding contact" style="padding-left: 18px;">About Us</a>
				<img src="/unlibooks/public/images/lineplan.png" class="lineplan">
				<!--<a href="<?= URL ?>plan" class="footerLanding NTCTax" style="padding-left: 18px;">Plan & Pricing</a>
				<img src="/unlibooks/public/images/lineplan.png" class="lineplan">-->
				<span class="stayconnected" style="padding-left: 18px;">Stay Connected</span>
				<input type="button" class="fbLanding">
				<input type="button" class="inLanding">
				
				<a href="<?= URL ?>learn?" class="footerLanding NTCTax" style="margin-left: 468px;">Learn More...</a>
				
			</nav>
		</div>
	</div>	
</div>
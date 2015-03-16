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
	background-size: 855px 114px;
	width:855px;
	height:114px;
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
.planpricetxt{
	font-family: agency fb2;
	color: #1e7da4;
	font-size: 23px;
	text-shadow: 1px 1px 1px rgb(207, 205, 205);
}
.planpricingcontainer{
	width: 771px;
	margin:auto;
	margin-left: 108px;
}
.planleft{
	float:left;
	margin-top: 40px;
	width:340px;
	
}
.choose{
	background-image: url('<?= URL ?>public/images/choose.png');
	background-repeat: no-repeat;
	background-size: 335px 51px;
	width: 335px;
	height: 51px;
	margin-top: 13px;
	position: absolute;
}
.container2{
	background-image: url('<?= URL ?>public/images/container.png');
	background-repeat: no-repeat;
	background-size: 335px 432px;
	margin-top: 14px;
	height: 437px;
	font-family: agency fb2;
	font-size: 14px;
	text-shadow: 0px 0px .5px rgb(255, 255, 255);
	color: rgb(228, 241, 253);
	word-spacing: 2px;
	padding-left: 38px;
}
.planList{
	padding-top:68px;
}
.clear {
    clear: both;
}
.planright{
	float: right;
	width: 431px;
	margin-top: -455px;
}
.freeplan{
	background-image: url('<?= URL ?>public/images/freeplan.png');
	background-repeat: no-repeat;
	background-size: 138px 470px;
	height: 470px;
	width: 138px;
	margin-left: 22px;
}
.basicplan{
	background-image: url('<?= URL ?>public/images/basic.png');
	background-repeat: no-repeat;
	background-size: 140px 503px;
	height: 502px;
	width: 140px;
	margin-left: 159px;
	margin-top: -502px;
}
.basicpremium{
	background-image: url('<?= URL ?>public/images/basicpremium.png');
	background-repeat: no-repeat;
	background-size: 140px 525px;
	height: 525px;
	width: 140px;
	margin-left: 299px;
	margin-top: -525px;
}
.circle{
	width: 12px;
	height: 12px;
	position: absolute;
	margin-top: 4px;
	margin-left:-20px;
}
.footerplan{
	height: 34px;
	width: 855px;
	background-color: #005e99;
	margin-top: 49px;
	padding-top: 10;
}
.cross{
	width:20px;
	height:22px;
	margin-left: -4px;
}
.planList2{
	padding-top:68px;
	padding-left: 44px;
	font-family: agency fb2;
	font-size: 14px;
	text-shadow: 0px 0px .5px rgb(255, 255, 255);
	color: rgb(228, 241, 253);
}
.planList3{
	padding-top:99px;
	text-align:center;
	font-family: agency fb2;
	font-size: 14px;
	text-shadow: 0px 0px .5px rgb(255, 255, 255);
	color: rgb(228, 241, 253);
}
.check{
	width: 28px;
	height: 22px;
	margin-left: 8px;
}
.planList4{
	padding-top:68px;
	padding-left: 39px;
	font-family: agency fb2;
	font-size: 14px;
	text-shadow: 0px 0px .5px rgb(255, 255, 255);
	color: rgb(228, 241, 253);
}
.footerplan a{
	text-decoration: none;
	font-family: agency fb2;
	font-size: 11.8px;
	padding: 5px 5px 5px 5px;
	text-shadow: 0px 0px .5px rgb(255, 255, 255);
	color: rgb(228, 241, 253);
}
.stayconnected{
	font-family: agency fb2;
	font-size: 11.8px;
	padding: 5px 5px 5px 5px;
	text-shadow: 0px 0px .5px rgb(255, 255, 255);
	color: rgb(228, 241, 253);
}
.lineplan{
	width: 2px;
	position: absolute;
	margin-top: 3px;
	margin-left: 3px;
}
.fbLanding{
	position:absolute;
	margin-left: -474px;
	width: 22px;
	height: 21px;
	background-image: url('<?= URL ?>public/images/tweeter.png');
	background-repeat: no-repeat;
	background-size: 22px 21px;
	border:none;
	border-radius:5px;
}
.inLanding{
	position:absolute;
	margin-left: -444px;
	width: 22px;
	height: 21px;
	background-image: url('<?= URL ?>public/images/facebook.png');
	background-repeat: no-repeat;
	background-size: 22px 21px;
	border:none;
	border-radius:5px;
}
.goforfree{
	margin:auto;
	width:135px;
}
.buttonplan{
	background-image: url('<?= URL ?>public/images/goforfree.png');
	background-repeat: no-repeat;
	background-size: 108px 26px;
	height: 27px;
	width: 108px;
	position: absolute;
	margin-left: -30px;
	border: none;
	margin-top: 34px;
}
.buttonplan2{
	background-image: url('<?= URL ?>public/images/gobasic.png');
	background-repeat: no-repeat;
	background-size: 108px 26px;
	height: 27px;
	width: 108px;
	position: absolute;
	margin-left: -52px;
	border: none;
	margin-top: 89px;
}
.buttonplan3{
	background-image: url('<?= URL ?>public/images/gopremium.png');
	background-repeat: no-repeat;
	background-size: 108px 26px;
	height: 27px;
	width: 108px;
	position: absolute;
	margin-left: -28px;
	border: none;
	margin-top: 118px;
}
.contactuslink{
	background: url('<?= URL ?>public/images/contactus.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	width: 98px;
	height: 27px;
	padding: 5px 97px 5px 5px;
	
}
.contactuslink:hover{
	background: url('<?= URL ?>public/images/contacthover.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	width: 98px;
	height: 27px;
	padding: 5px 97px 5px 5px;
}
.planhoverlink{
	background: url('<?= URL ?>public/images/planpricing.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	width: 98px;
	height: 27px;
	padding: 5px 97px 5px 5px;
}
.planhoverlink:hover{
	/* background: url('<?= URL ?>public/images/planpricing.png');
	background: url('<?= URL ?>public/images/planhover.png');
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
</style>

<div class="formcontainer">
	<div class="plancontainerform">
		<div class="headerplan">
			<div class="linklanding">
				<a href="contact_us" class="planlink contactuslink"></a>
				<a href="plan" class="planlink planhoverlink" ></a>
				<a href="login" class="planlink loginlink"></a>
			</div>
		</div>
		<div class="planpricingcontainer">
			<div class="planleft">
				<span class="planpricetxt">PLAN & PRICING</span>
				<div class="choose"></div>
				<div class="container2" >
					<nav class="planList">
						<div style="margin-top: 10px;padding-left:11px;"><img src="<?= URL ?>public/images/circle.png" class="circle"> # of Invoices Transactions</span></div>
						<div style="margin-top: 25px;padding-left:11px;"><img src="<?= URL ?>public/images/circle.png" class="circle"> # of Expenses Transactions</div>
						<div style="margin-top: 25px;padding-left:11px;"><img src="<?= URL ?>public/images/circle.png" class="circle"> # of Journal Entries</div>
						<div style="margin-top: 25px;padding-left:11px;"><img src="<?= URL ?>public/images/circle.png" class="circle"> # of Client List</div>
						<div style="margin-top: 25px;padding-left:11px;"><img src="<?= URL ?>public/images/circle.png" class="circle"> # of Vendor List</div>
						<div style="margin-top: 25px;padding-left:11px;"><img src="<?= URL ?>public/images/circle.png" class="circle"> Support Access</div>     
					</nav>
				</div>
			</div>
			<div class="clear"></div>
			<div class="planright">
				<div class="freeplan">
					<nav class="planList2">
						<div style="margin-top: 31px;padding-left:11px;">20</div>
						<div style="margin-top: 25px;padding-left:11px;">20</div>
						<div style="margin-top: 25px;padding-left:11px;">20</div>
						<div style="margin-top: 25px;padding-left:11px;">20</div>
						<div style="margin-top: 25px;padding-left:11px;">20</div>
						<div style="margin-top: 13px;padding-left:11px;"></div>
						<!--<div style="margin-top: 14px;padding-left:14px;">1</div>
						<div style="margin-top: 17px;padding-left:11px;"></div>
						<div style="margin-top: 49px;padding-left:11px;"><img src="<?= URL ?>public/images/xplan.png" class="cross"> </div>-->
						<div class="goforfree"><a href="landing"><img src="<?= URL ?>public/images/goforfree.png" class="buttonplan3"></a></div>
						
					</nav>
				</div>
				<div class="basicplan">
					<nav class="planList3">
						<div style="margin-top: 31px;padding-left:11px;">Unlimitted</div>
						<div style="margin-top: 25px;padding-left:11px;">Unlimitted</div>
						<div style="margin-top: 25px;padding-left:11px;">Unlimitted</div>
						<div style="margin-top: 25px;padding-left:11px;">Unlimitted</div>
						<div style="margin-top: 25px;padding-left:11px;">Unlimitted</div>
						<div style="margin-top: 25px;padding-left:11px;">2 Tickets & Live Chat</div>
						<!--<div style="margin-top: 14px;padding-left:14px;">2</div>
						<div style="margin-top: 17px;padding-left:11px;">2 Tickets & Live Chat</div>
						<div style="margin-top: 15px;padding-left:11px;"><img src="<?= URL ?>public/images/checkplan.png" class="check"> </div>-->
						<div class="gobasic"><a href="http://sjcgroup.net/member/signup/ubmedbasic"><img src="<?= URL ?>public/images/gobasic.png" class="buttonplan2"></a></div>
					</nav>
				</div>
				<!--<div class="basicpremium">
					<nav class="planList4">
						<div style="margin-top: 84px;padding-left:0px;">Unlimited</div>
						<div style="margin-top: 17px;padding-left:0px;">Unlimited</div>
						<div style="margin-top: 19px;padding-left:0px;">Unlimited</div>
						<div style="margin-top: 13px;padding-left:0px;">Unlimited</div>
						<div style="margin-top: 15px;padding-left:3px;"><img src="<?= URL ?>public/images/checkplan.png" class="check"></div>
						<div style="margin-top: 14px;padding-left:3px;"><img src="<?= URL ?>public/images/checkplan.png" class="check"></div>
						<div style="margin-top: 14px;padding-left:17px;">5</div>
						<div style="margin-top: 19px;padding-left:0px;font-size: 11.3px;margin-left: -18px;">5 Tickets & Live Chat/Remote</div>
						<div style="margin-top: 15px;padding-left:3px;"><img src="<?= URL ?>public/images/checkplan.png" class="check"> </div>
						<div class="gopremium"><a href=""><img src="<?= URL ?>public/images/gopremium.png" class="buttonplan3"></a></div>
					</nav>
				</div>-->
			</div>
		</div>
		<div class="footerplan">
			<nav id="landingfooter" style="margin-left: 37px;margin-top: 6px;">
				<a href="<?= URL ?>contact_us" class="footerLanding taxtableNew">Contact Us</a>
				<img src="/unlibooks/public/images/lineplan.png" class="lineplan">
				<a href="<?= URL ?>about_us" class="footerLanding contact" style="padding-left: 18px;">About Us</a>
				<img src="/unlibooks/public/images/lineplan.png" class="lineplan">
				<a href="<?= URL ?>plan" class="footerLanding NTCTax" style="padding-left: 18px;">Plan & Pricing</a>
				<img src="/unlibooks/public/images/lineplan.png" class="lineplan">
				<span class="stayconnected" style="padding-left: 18px;">Stay Connected</span>
				<a href="<?= URL ?>learn?" class="footerLanding NTCTax" style="margin-left: 409px;">Learn More...</a>
				<input type="button" class="fbLanding">
				<input type="button" class="inLanding">
				
			</nav>
		</div>
	</div>	
</div>


<?php
	$form2551mData = (isset($this->form2551m) && !empty($this->form2551m)) ? $this->form2551m : ''; 
?>	
		<style>
			.inp2551m{
				width: 236px;
				height: 38px;
				background:transparent;
				border:none;
			}
			.inp2551m2{
				width: 118px;
				height: 38px;
				background:transparent;
				border:none;
			}
			.inp2551m3{
				width: 279px;
				height: 38px;
				background:transparent;
				border:none;
			}
			.inp2551m4{
				width: 94px;
				height: 38px;
				background:transparent;
				border:none;
			}
			.inp2551m5{
				width: 198px;
				height: 38px;
				background:transparent;
				border:none;
			}
			.inp2551m5a{
				width: 188px;
				height: 38px;
				background:transparent;
				border:none;
			}
			
			.isAmount{
				text-align: right;
				font-size: 15px;
				letter-spacing: 2px;
				padding-right: 5px;
			}
			
			.item_1{
				height: 24px;
				width: 29px;
				background: transparent;
				border: none;
				text-align: center !important;
				font-size: 16px !important;
				padding-left: 1px;
			}
			
			.item_2m{
				height: 39px;
				width: 51px;
				background: transparent;
				border: none;
				padding-left: 5;
				letter-spacing: 8px;
			}	
			
			.item_2y{
				height: 39px;
				width: 116px;
				background: transparent;
				border: none;
				padding-left: 5;
				letter-spacing: 13px;
			}
			
			.item_3m{
				height: 39px;
				width: 51px;
				background: transparent;
				border: none;
				padding: 1px;
				letter-spacing: 8px;
			}
			
			.item_3y{
				height: 39px;
				width: 116px;
				background: transparent;
				border: none;
				padding: 0px;
				letter-spacing: 14px;
			}
			.item_4{
				height: 20px;
				width: 31px;
				background: transparent;
				border: none;
				text-align: center !important;
				font-size: 16px !important;
				padding-left: 5;
			}
			.item_5{
				height: 38px;
				width: 89px;
				background: transparent;
				border: none;
				letter-spacing: 22px;
			}
			.item_6{
				height: 38px;
				width: 310px;
				/* background: transparent; */
				border: none;
				padding: 5;
				text-align: center !important;
				letter-spacing: 8px;
			}
			
			.item_7{
				height: 40px;
				width: 95px;
				background: transparent;
				border: none;
				letter-spacing: 14px;
			}
			
			.item_8{
				height: 40px;
				width: 341px;
				background: transparent;
				border: none;
				padding: 10px;
				text-align: left !important;
				letter-spacing: 1;
			}
			.item_9{
				height: 32px;
				width: 842px;
				background: transparent;
				border: none;
				padding: 10px;
				text-align: left !important;
				letter-spacing: 1;
			}
			.item_10{
				height: 32px;
				width: 219px;
				/* background: transparent; */
				border: none;
				padding: 5;
				text-align: left !important;
				letter-spacing: 1;
			}
			.item_11{
				height: 32px;
				width: 842px;
				background: transparent;
				border: none;
				padding: 8px;
				text-align: left !important;
				letter-spacing: 1;
			}
			.item_12{
				height: 32px;
				width: 103px;
				background: transparent;
				border: none;
				letter-spacing: 10px;
			}
			.item_13{
				height: 22px;
				width: 31px;
				background: transparent;
				border: none;
				font-size: 16px !important;
				text-align: center !important;
				padding-left: 5;
			}
			.item_13_specify{
				height: 32px;
				width: 452px;
				background: transparent;
				border: none;
				padding-left: 10px;
				text-align: left !important;
				letter-spacing: 2;
			}
			}
					
			 #item1Calendar 
			{ 
				 left: 162px; 
				 top: 280px; 
				 position: absolute; 
				 width: 24px;
				 height: 17px;
				 z-index:1;
			} 

			 #item1Fiscal 
			{ 
				 left: 285px; 
				 top: 280px; 
				 position: absolute; 
				 width: 24px;
				 height: 17px;
				 z-index:2;
			} 

			 #item2M 
			{ 
				 left: 203px; 
				 top: 310px; 
				 position: absolute; 
				 width: 47px;
				 height: 38px;
				 z-index:3;
			} 

			 #item2Y 
			{ 
				 left: 252px; 
				 top: 310px; 
				 position: absolute; 
				 width: 111px;
				 height: 38px;
				 z-index:4;
			} 

			 #item3M 
			{ 
				 left: 526px; 
				 top: 310px; 
				 position: absolute; 
				 width: 45px;
				 height: 38px;
				 z-index:5;
			} 

			 #item3Y 
			{ 
				 left: 574px; 
				 top: 310px; 
				 position: absolute; 
				 width: 112px;
				 height: 38px;
				 z-index:6;
			} 

			 #item4Yes 
			{ 
				 left: 747px; 
				 top: 327px; 
				 position: absolute; 
				 width: 27px;
				 height: 20px;
				 z-index:7;
			} 

			 #item4No 
			{ 
				 left: 833px; 
				 top: 327px; 
				 position: absolute; 
				 width: 27px;
				 height: 19px;
				 z-index:8;
			} 

			 #item5 
			{ 
				 left: 1130px; 
				 top: 309px; 
				 position: absolute; 
				 width: 86px;
				 height: 37px;
				 z-index:9;
			} 

			 #item6 
			{ 
				 left: 126px; 
				 top: 396px; 
				 position: absolute; 
				 width: 304px;
				 height: 37px;
				 z-index:10;
			} 

			 #item7 
			{ 
				 left: 542px; 
				 top: 394px; 
				 position: absolute; 
				 width: 91px;
				 height: 39px;
				 z-index:11;
			} 

			 #item8 
			{ 
				 left: 884px; 
				 top: 394px; 
				 position: absolute; 
				 width: 336px;
				 height: 39px;
				 z-index:12;
			} 

			 #item9 
			{ 
				 left: 94px; 
				 top: 465px; 
				 position: absolute; 
				 width: 840px;
				 height: 30px;
				 z-index:13;
			} 

			 #item10 
			{ 
				 left: 1007px; 
				 top: 464px; 
				 position: absolute; 
				 width: 213px;
				 height: 31px;
				 z-index:14;
			} 

			 #item11 
			{ 
				 left: 95px; 
				 top: 524px; 
				 position: absolute; 
				 width: 838px;
				 height: 32px;
				 z-index:15;
			} 

			 #item12 
			{ 
				 left: 1122px; 
				 top: 524px; 
				 position: absolute; 
				 width: 98px;
				 height: 30px;
				 z-index:16;
			} 

			 #item13Yes 
			{ 
				 left: 370px; 
				 top: 582px; 
				 position: absolute; 
				 width: 26px;
				 height: 18px;
				 z-index:17;
			} 

			 #item13No 
			{ 
				 left: 489px; 
				 top: 582px; 
				 position: absolute; 
				 width: 25px;
				 height: 19px;
				 z-index:18;
			} 

			 #item13Specify 
			{ 
				 left: 772px; 
				 top: 573px; 
				 position: absolute; 
				 width: 448px;
				 height: 31px;
				 z-index:19;
			} 

			
		</style>
		<link href="<?= $this->imageUrl ?>styles.css" rel="stylesheet" type="text/css">
		<script src="<?= $this->imageUrl ?>custom.js"></script>
		<div id="background" class="">
			<div id="M2551page1"><img src="<?= $this->imageUrl ?>images/M2551page1.png"></div>
			<div id="checkBoxtobeissuedTC" class="hidden"><img src="<?= $this->imageUrl ?>images/checkBoxtobeissuedTC.png"></div>
			<div id="checkBoxtoberefunded" class="hidden"><img src="<?= $this->imageUrl ?>images/checkBoxtoberefunded.png"></div>
			
			<div id="item1Calendar">
				<input type="text" class="item_1" name="item1" >
			</div>
			<div id="item1Fiscal">
				<input type="text" class="item_1" name="item1">
			</div>
			<div id="item2M">
				<input type="text" class="item_2m" name="item2" >
			</div>
			<div id="item2Y">
				<input type="text" class="item_2y" name="item2" >
			</div>
			<div id="item3M">
				<input type="text" class="item_3m" name="item3" value="<?= getF2551p1Data($form2551mData,'item3M') ?>">
			</div>
			<div id="item3Y">
				<input type="text" class="item_3y" name="item3" value="<?= getF2551p1Data($form2551mData,'item3Y') ?>">
			</div>
			<div id="item4Yes">
				<input type="text" class="item_4" name="item4" value="<?= getF2551p1Data($form2551mData,'item4') ?>">
			</div>
			<div id="item4No">
				<input type="text" class="item_4" name="item4" value="<?= getF2551p1Data($form2551mData,'item4') ?>">
			</div>
			<div id="item5">
				<input type="text" class="item_5" name="item5" value="<?= getF2551p1Data($form2551mData,'item5') ?>">
			</div>
			<div id="item6">
				<input type="text" class="item_6" name="item6" value="<?= getF2551p1Data($form2551mData,'item6') ?>">
			</div>
			<div id="item7">
				<input type="text" class="item_7" name="item7" value="<?= getF2551p1Data($form2551mData,'item7') ?>">
			</div>
			<div id="item8">
				<input type="text" class="item_8" name="item8" value="<?= getF2551p1Data($form2551mData,'item8') ?>">
			</div>
			<div id="item9">
				<input type="text" class="item_9" name="item9" value="<?= getF2551p1Data($form2551mData,'item9') ?>">
			</div>
			<div id="item10">
				<input type="text" class="item_10" name="item10" value="<?= getF2551p1Data($form2551mData,'item10') ?>">
			</div>
			<div id="item11">
				<input type="text" class="item_11" name="item11" value="<?= getF2551p1Data($form2551mData,'item11') ?>">
			</div>
			<div id="item12">
				<input type="text" class="item_12" name="item12" value="<?= getF2551p1Data($form2551mData,'item12') ?>">
			</div>
			<div id="item13Yes">
				<input type="text" class="item_13" name="item13" value="<?= getF2551p1Data($form2551mData,'item13') ?>">
			</div>
			<div id="item13No">
				<input type="text" class="item_13" name="item13" value="<?= getF2551p1Data($form2551mData,'item13') ?>">
			</div>
			<div id="item13Specify">
				<input type="text" class="item_13_specify" name="item13Specify" value="<?= getF2551p1Data($form2551mData,'item13Specify') ?>">
			</div>
			
			<div id="A14">
				<input text="text" class="isAmount  inp2551m" name="iTR2551M14A"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M14A') ?>"/>
			</div>
			<div id="B14">
				<input text="text" class="isAmount  inp2551m2" name="iTR2551M14B"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M14B') ?>"/>
			</div>
			<div id="C14">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M14C"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M14C') ?>"/>
			</div>
			<div id="D14">
				<input text="text" class="isAmount isNumeric inp2551m4" name="iTR2551M14D"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M14D') ?>"/>
			</div>
			<div id="E14">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M14E"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M14E') ?>"/>
			</div>
			
			<div id="A15">
				<input text="text" class="isAmount  inp2551m" name="iTR2551M15A"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M15A') ?>"/>
			</div>
			<div id="B15">
				<input text="text" class="isAmount  inp2551m2" name="iTR2551M15B"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M15B') ?>"/>
			</div>
			<div id="C15">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M15C"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M15C') ?>"/>
			</div>
			<div id="D15">
				<input text="text" class="isAmount isNumeric inp2551m4" name="iTR2551M15D"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M15D') ?>"/>
			</div>
			<div id="E15">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M15E"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M15E') ?>"/>
			</div>
			
			<div id="A16">
				<input text="text" class="isAmount  inp2551m" name="iTR2551M16A"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M16A') ?>"/>
			</div>
			<div id="B16">
				<input text="text" class="isAmount  inp2551m2" name="iTR2551M16B"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M16B') ?>"/>
			</div>
			<div id="C16">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M16C"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M16C') ?>"/>
			</div>
			<div id="D16">
				<input text="text" class="isAmount isNumeric inp2551m4" name="iTR2551M16D"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M16D') ?>"/>
			</div>
			<div id="E16">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M16E"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M16E') ?>"/>
			</div>
			
			<div id="A17">
				<input text="text" class="isAmount  inp2551m" name="iTR2551M17A"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M17A') ?>"/>
			</div>
			<div id="B17">
				<input text="text" class="isAmount  inp2551m2" name="iTR2551M17B"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M17B') ?>"/>
			</div>
			<div id="C17">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M17C"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M17C') ?>"/>
			</div>
			<div id="D17">
				<input text="text" class="isAmount isNumeric inp2551m4" name="iTR2551M17D"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M17D') ?>"/>
			</div>
			<div id="E17">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M17E"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M17E') ?>"/>
			</div>
			
			<div id="A18">
				<input text="text" class="isAmount  inp2551m" name="iTR2551M18A"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M18A') ?>"/>
			</div>
			<div id="B18">
				<input text="text" class="isAmount  inp2551m2" name="iTR2551M18B"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M18B') ?>"/>
			</div>
			<div id="C18">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M18C"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M18C') ?>"/>
			</div>
			<div id="D18">
				<input text="text" class="isAmount isNumeric inp2551m4" name="iTR2551M18D"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M18D') ?>"/>
			</div>
			<div id="E18">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M18E"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M18E') ?>"/>
			</div>
			
			<div id="partII19">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M19"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M19') ?>"/>
			</div>
			<div id="partII20A">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M20A"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M20A') ?>"/>
			</div>
			<div id="partII20B">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M20B"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M20B') ?>"/>
			</div>
			<div id="partII21">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M21"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M21') ?>"/>
			</div>
			<div id="partII22">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M22"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M22') ?>"/>
			</div>
			<div id="partII23A">
				<input text="text" class="isAmount isNumeric inp2551m5" name="iTR2551M23A"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M23A') ?>"/>
			</div>
			<div id="partII23B">
				<input text="text" class="isAmount isNumeric inp2551m5" name="iTR2551M23B"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M23B') ?>"/>
			</div>
			<div id="partII23C">
				<input text="text" class="isAmount isNumeric inp2551m5a" name="iTR2551M23C"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M23C') ?>"/>
			</div>
			<div id="partII23D">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M23D"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M23D') ?>"/>
			</div>
			<div id="parII24">
				<input text="text" class="isAmount isNumeric inp2551m3" name="iTR2551M24"
					value="<?= getF2551p1Data($form2551mData,'iTR2551M24') ?>"/>
			</div>
		</div>
		
<?php
	function getF2551p1Data($obj, $name){
		$return = '';
		
		if($obj != ''){
			foreach($obj as $var=>$each){
				if($var == $name){
					$return = $each;
				}
			}
		}
		return $return;
	}
?>
<style>
.setup-form{
	width:750px;
	height: 640px;
	margin: auto;
	border: 1px solid rgba(0, 128, 0, 0.61);
}
.companySetupTable tr{
	background-color: #E1F5CE;	
}
</style>
<?php
    $info = new TblOrganizationInfo();
    $org  = new TblOrganization();
    
    if(Session::getSession('meduser')){
        $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
        $org  = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
    }
?>
<link href="<?=URL?>views/setting/css/ajax.css" rel="stylesheet" type="text/css">
<div class="setupHolder">
<form method="post" action="<?= URL ?>setting/companySetting" class="setup-form">
	<div id="setup-div">
			<p class="setup-head">Set-up your company</p>
	</div>
	<div class="inside-form">
		<table class="companySetupTable">
			<tr>
				<td class="cname-text">Company Name:</td>
				<td class="asterisk">*</td>
				<td><input type="text" class="companyN-input paddingText " value="<?= $org->orgName ?>" name="orgName"></td>
			</tr>
			<tr>
				<td class="cadd-text">Company Address:</td>
				<td><input type="text" class="companyA-input paddingText" value="<?= $info->address ?>" name="address"></td>
			</tr>
			<tr>
				<td class="tinNo-text">Tin No.</td><input type="text" class="tinNo-input paddingText" value="<?= $info->tinNum ?>" name="tinNum">
			</tr>
			<tr>
				<td class="eAdd-text">Email Address:</td><input type="text" class="eAdd-input paddingText" name="email" value="<?php echo $info->emailAddress ?>">
			</tr>
			<tr>
				<td class="pNo-text">Phone No.</td><input type="text" class="pNo-input paddingText" name="phoneNum" value="<?= $info->phoneNum ?>">
			</tr>
			<tr>
				<td class="fNo-text">Fax No.</td><input type="text" class="fNo-input paddingText" name="faxNum" value="<?= $info->faxNum ?>">
			</tr>
			<tr>
				<td class="city-text">City:</td><input type="text" class="city-input paddingText" value="<?= $info->city ?>" name="city">
			</tr>
			<tr>
				<td class="provi-text">Province:</td><input type="text" class="provi-input paddingText" value="<?= $info->province ?>" name="province">
			</tr>
			<tr>
				<td class="pc-text">Postal Code:</td><input type="text" class="pc-input paddingText">
			</tr>
			<tr>
				<td class="country-text">Country:</td><select class="country-input paddingText"><option></option></select>
			</tr>
			<tr>
				<td class="btype-text">Business Type:</td><td class="asterisk2">*</td><input type="text" class="btype-input paddingText">
			</tr>
			<tr>
				<td class="currency-text">Currency:</td><td class="asterisk3">*</td><select class="currency-input paddingText"><option></option></select>
			</tr>
			<tr>
				<td class="uplogo-text">Upload your Logo here:</td>
			</tr>
		</table>
		<div class="browse-logo"></div>
	</div>	
	<div class="div-proj"><input type="submit" class="save-project" value=""></div>
</form>	
</div>










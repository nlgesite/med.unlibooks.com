<?php
require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Server.php';
require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Session.php';
require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/include_dao.php';
?>

<?php // Session::setSession('orgid', 46); ?>

<style>
	.popBack, .popup{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
	.popback:parent{
		overflow:hidden;
	}
</style>
<?php
    $project = new TblProject();
    $task = 'addproject';
    if (isset($_POST['projectid'])) {
    $projectid = $_POST['projectid'][0];

    $project = DAOFactory::getTblProjectDAO()->load($projectid);
    Session::setSession('projectid', $projectid);
    $task = 'updateproject';
}
?>
<link href="<?=URL?>views/time/css/ajax.css" rel="stylesheet" type="text/css">
<div class="projectHolder">
<form method="post" action="<?php echo URL?>timeTracking/projects" class="project-form">
	<div id="project-div">
		<input type="button" class="proj-close" value="X">
		<p class="np">New Project:</p>
		<div class="hr-proj">
	</div>
	<div>
		<table class="newTableProject">
			<tr>
				<td class="proj-textnEW">Project No.</td>
				<td class="projectInputBox"><input type="text" class="proj-no" name="projectNum" value="<?php echo $project->projectNum ?>" required></td>
			</tr>
			<tr>
				<td class="projN-text">Project Name:</td>
				<td><input type="text" class="projN-input" name="projectName" value="<?php echo $project->projectName ?>" required></td>
			</tr>
			<?php 
			$clients = DAOFactory::getTblClientDAO()->queryByOrgId(Session::getSession('medorgid'));
			
			if(count($clients)>0){
			?>
			<tr>
				<td class="projN-text">Client Name:</td>
				<td><select class="projN-input" name="clientId">
				<?php foreach($clients as $item){ ?>
				<option value="<?php echo $item->id ?>" <?php echo ($item->id==$project->clientId)? 'selected':'' ?>><?php echo $item->clientName ?></option>
				<?php } ?>
				</select></td>
			</tr>
			<?php } ?>
			<tr>
				<td class="projN-text2" ><input type="checkbox" checked name="activeAccount" <?php echo ($project->activeAccount == 'yes')? 'checked' : '' ?>></td>
			</tr>
		</table>
		<table class="tblProjectNote">
			<tr>
				<td class="note-text"></td>
				<td><textarea class="note-input23" name="note"><?php echo $project->note ?></textarea></td>
			</tr>
		</table>
		
		<div class="projectcheckP">Active Account</div>
		<div class="projectcheckPNote">Note</div>
	</div>	
	<div class="proj-buttons">	
		<input type="submit" value="Save" class="save-proj">
		<input type="button" value="Save and Add New" class="saan-proj">
                <input type="hidden" name="task" value="<?php echo $task ?>"/>
	</div>

</div>	
    </form>
</div>
<style>
.createNProjects{
margin-left: 760px;
margin-top: -68px;
width: 212px;
height: 47px;
border: none;
background-image: url('/unlibooks/public/images/newproject2.png');
background-repeat: no-repeat;
background-position: left;
border-radius: 10px;
cursor: pointer;
}
.cnitableProject{
	border-collapse:collapse;
	width: 99%;
	margin:auto;
	margin-top: 5px;
}
.cnitableProject, th{
	background-color: #55C768;
	padding: 2px 2px 2px 2px;
	font-size: 13px;
	color:white;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	text-align: left;
	padding: 5px;
}
.cnitableProject, td{
	font-size: 12px;
	color:black;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	text-align: left;
	padding: 2px 5px 2px 5px;
}
.cnitableProject a{
	color:blue;
	font-size: 12px;
	font-weight: normal;
	cursor: pointer;
	text-decoration: none;
}
.cnitableProject a:hover{
	color:blue;
	font-size: 12px;
	font-weight: normal;
	cursor: pointer;
	text-decoration: underline;
}
.cnitableProject tr:HOVER{
	background-color: #E8E8E8;
}	
.newProjectForm{
	background-color: white;
	padding-bottom: 250px;
}
</style>

<div class="ProjectHolder">
    <div id="newProject">
        <p class="textHeadProjectTime">All Projects</p>

        <div class="hrAllProject">
		<a href="<?=URL?>invoice/newRecurring">
			<input type="button"  class="createNProjects">
		</a>
        </div>	
        <div class="centerProject">
            <div id="searchProject">
                <input type="button" name="add" value="Edit" class="addProject">
                <input type="button" name="sendinvoice" value="Delete" class="deleteProject">
                <input type="search" name="search" placeholder="Search" class="searchindexProject" > 	
                &nbsp &nbsp By:
                <select class="inumberProject">
                    <option>Project Number</option>
                </select>
				 <input type="button" name="add" value="Search" class="addProject">
                <input type="button" name="add" value="Import/Export" class="ImportProject">
            </div>
        </div>
    </div>

    <div class="newProjectForm">	

        <table class="cnitableProject">
            <tr class="headinvoiceProject">
                <th  width="1%"><input type="checkbox"></th>
                <th >Project No.</th>
                <th class="">Date</th>
                <th class="">Project Name</th>
                <th class="">Client</th>
                <th class="">Tax Code</th>
                <th class="">Active</th>
            </tr>
            <?php
            $project = TblProjectMySqlExtDAO::getData();

            if (count($project) > 0) {
                foreach ($project as $item) {
                    ?>
                    <tr class="tableProject">
                        <td class=""><input type="checkbox"></td>
                        <td class=""><a onclick="editrec(<?php echo $item->id ?>)"><?php echo $item->project_num ?></a></td>
                    <td class="">06/02/2014</td>
                    <td class=""><?php echo $item->project_name ?></td>
                    <td class=""><?php echo $item->client_name ?></td>
                    <td>Vatable</td>
                    <td><?php echo ucfirst($item->active_account) ?></td>
                    </tr>

                    <?php
                }
            }
            ?>
        </table>
        <div class="popBack hidden">

        </div>
        <script>
            $(function() {
                $('.createNProjects').click(function() {
                    $.post(URL + 'views/time/new_project.php')
                            .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
						$('body').css('overflow','hidden');


                        $('.proj-close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
							$('body').css('overflow','auto');
                        });
                    })
                            .fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
            })
			
				function editrec(projectid) {
        
            if ($('.chk').is(':checked') || projectid !='') {
                var checked = [];
                $("input[name='chk[]']:checked").each(function()
                {
                    checked.push(parseInt($(this).val()));
                    return false;
                });
				
				if(projectid != ''){
					checked.push(parseInt(projectid));
				}
                
                $.post(URL + 'views/time/new_project.php',{projectid: checked})
                        .done(function(returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
					$('body').css('overflow','hidden');


                    $('.closeCNTs').click(function() {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
						$('body').css('overflow','auto');
                    });
                })
                        .fail(function() {
                    alert('Connection Error!');
                });
                return false;
            } else {
                alert('Please select record to edit');
            }
        }
        </script>
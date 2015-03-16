<?php
	$pageNumber = isset($_POST['pageNumber']) ? $_POST['pageNumber'] : '';
	
?>
<style>
	.tfootTable{
		padding: 2px 2px 2px 2px;
		font-size: 13px;
		color: white;
		font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
		text-align: left;
		margin: 0 auto;
		width: 394px;
	}
<style>
	.tr{
		text-align: right;
	}
</style>

<table class="tfootTable">

<tfoot>
	<tr class="under">
		<td colspan="5" style="text-align: center;color:#fff;font-family:verdana; font-size:12px;" class="under">
			<span style="margin-left:25px\width:120px">
				<span class="<?= ($this->pages > 1) ? '' : '' ?>">
					<span class="paginate">Page:</span>
					<select class="paginate paginateSelect ">
						<?php
						if(isset($this->pages)){
							for($num = 1; $num <= $this->pages; $num++){ ?>
								<option value="<?= $num ?>"><?= $num ?></option>
						<?php }
						} else {
							?>
							<option value="1">1</option>
							<?php
						}
						?>
					</select>
					
				</span>
				<span style="float:right">
					<span>
						<span class="paginate">Items per page:</span>
						<select class="paginateNumber" >
							<option value="10" <?= $pageNumber == 10 ? 'selected="selected"' : '' ?>>10</option>
							<option value="25" <?= $pageNumber == 25 ? 'selected="selected"' : '' ?>>25</option>
							<option value="50" <?= $pageNumber == 50 ? 'selected="selected"' : '' ?>>50</option>
							<option value="100" <?= $pageNumber == 100 ? 'selected="selected"' : '' ?>>100</option>
							<option value="" <?= $pageNumber == '' ? 'selected="selected"' : '' ?>>All</option>
						</select>
						<span>Page</span>
						<span>
							<?php
							if(isset($this->pages)){
								for($num = 1; $num <= $this->pages; $num++){ ?>
									<?= $num ?>
							<?php }
							} 
							?> 
							of <?= isset($this->pages) ? $this->pages : 1 ?>
						</span>
					</span>
				</span>
			
		</td>
	</tr>
</tfoot>
</table>
<script>
	$(function(){
		loadExpenseList();
		
		function loadExpenseList(){
			search = $('.searchindexAllE').val();
			type = $('.inumberAllExp').val();
			pageNumber = $('.paginateNumber').val();
			page = $('.paginateSelect').val();
			$.post(URL + 'expenses/loadList',{'search':search, 'type':type, 'pageNumber': pageNumber, 'page' : page})
				.done(function(returnData){
					$('.tablecni').remove();
					$('.cnitableExp').append(returnData);
					
					$('.edits').click(function(){
						id = this.id;
						edit(id);
						return false;
					});
				});
		}
		
		$('.paginateSelect').change(function(){
			loadExpenseList();
		});
		
		$('.paginateNumber').change(function(){
			setPagenation();
		});
		
		function setPagenation(){
			search = $('.searchindexAllE').val();
			type = $('.inumberAllExp').val();
			pageNumber = $('.paginateNumber').val();
			$.post(URL + 'expenses/expensePagenation',{'search':search, 'type':type, 'pageNumber': pageNumber})
				.done(function(returnData){
					$('.cnitableExpHolderPage').html(returnData);
				});
		}
	})
</script>

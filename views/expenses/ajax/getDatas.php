<?php
$suppliers = $this->suppliers; //TblSupplierMySqlExtDAO::getData();
foreach ($suppliers as $item) {
	?>
	<tr class="tableItemSuppliers">
		<td class=""><input name="chk[]" type="checkbox" class="chk" value="<?php echo $item->id ?>"></td>
		<td class=""><a href="#" value="<?= $item->id ?>" class="viewAct"><?php echo $item->supplierAccount ?></a></td>
		<td class=""><?= date('F d, Y',strtotime($item->dateCreated)) ?></td>
		<td class=""><?php echo $item->name ?></td>
		<td class=""><?php echo $item->activeAccount?></td>
	</tr>
	<?php
}
?>
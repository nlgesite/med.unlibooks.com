<?php

	$lists = $this->getData;        
if($lists){
	$total = 0;
	foreach($lists as $list){
		$total += Controller::removeComma(($list->status=='reversed')? 0: getData2($this->getExpenseAmount,$list->id));
?>
<tr class="tablecni">
	<td class=""><input type="checkbox" name="trig[]" value="<?= $list->id ?>"></td>
	<td class="">
		<a href="#" class="edits" id="<?= $list->id ?>" ><?= $list->expenseNumber ?></a>
	</td>
	<td class=""><?= date('m / d / Y',strtotime($list->dateIssued)) ?></td>
	<td class=""><?= ucwords(getData($this->getSuppliers,$list->supplierId)) ?>
	</td>
        <td class=""style="text-align:right;padding-right:20px;"><?= ($list->status=='reversed')? '(' . str_replace(',','',getData2($this->getExpenseAmount,$list->id)) * -1 .')' : getData2($this->getExpenseAmount,$list->id);  ?></td>
	<td class=""><?= ucwords($list->status) ?></td>
        <td><?= ($list->dateReversed=='0000-00-00')? '': date('m / d / Y', strtotime($list->dateReversed))?></td>
</tr>
<?php
	}
?>
	
		<tr class="tablecni" style="background-color:#25B5EF;border:none">
			<td class=""></td>
			<td class=""></td>
			<td class="tr"></td>
			<td style="color:#fff;"><b>Total : </b></td>
			<td class="" style="text-align:right;padding-right:20px;color:#fff;"><b><?= Controller::getFloat($total) ?></b></td>
			<td class=""></td>
					<td></td>
		</tr>
	
<?php
}

function getData($obj,$id){
	$return = '';
	foreach($obj as $each){
		if($id == $each->id){
			$return = $each->name;
		}
	}
	
	return $return;
}

function getData2($obj,$id){
	$return = '';
	foreach($obj as $each){
		if($id == $each->newExpenseId){
			$return = $each->grandTotal;
		}
	}
	return Controller::getFloat($return);
}

?>
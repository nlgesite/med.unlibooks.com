<nav id="lowerlink2">
	 <li><a href="<?= URL ?>invoice"class="submit4">INVOICE</a>
    <?php echo ($fc=='index')? '<img class="img2"  src="'. URL .'public/images/blueline.png">' :'' ?>
    </li> 
	 <li><a href="<?= URL ?>invoice/collection"class="submit4">COLLECTION</a>
    <?php echo ($fc=='collection')? '<img class="img2" style="margin-left: 39px;"  src="'. URL .'public/images/blueline.png">' :'' ?>
    </li>
	<li><a href="<?= URL ?>invoice/hmo"class="submit4"> HMO PARTNER</a>
    <?php echo ($fc=='hmo')? '<img class="img2" style="margin-left: 53px;" src="'. URL .'public/images/blueline.png">' :'' ?>
    </li>
	<li><a href="<?= URL ?>invoice/customers"class="submit4"> PATIENT</a>
    <?php echo ($fc=='customers')? '<img class="img2"  style="margin-left: 33px;" src="'. URL .'public/images/blueline.png">' :'' ?>
    </li>
   <li><a href="<?= URL ?>invoice/services"class="submit4">SERVICE ITEM</a>
    <?php echo ($fc=='services')? '<img class="img2"  style="margin-left: 46px;" src="'. URL .'public/images/blueline.png">' :'' ?>
	</li>
  <!-- <li><a href="<?= URL ?>invoice/items" class="submit4">Item</a>
    <?php // echo ($fc=='items')? '<img class="img2"  src="'. URL .'public/images/line5.png">' :'' ?>
    </li>-->
   
</nav>
<div class="hrlink"></div>

<div class="clear"></div>


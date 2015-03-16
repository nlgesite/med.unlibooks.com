<nav id="lowerlink2">
    <li><a href="<?= URL ?>invoice"class="submit4">Invoice</a>
    <?php echo ($fc=='index')? '<img class="img2"  src="'. URL .'public/images/line5.png">' :'' ?>
    </li> 
    <li><a href="<?= URL ?>invoice/recurring"class="submit4">Recurring</a>
    <?php echo ($fc=='recurring')? '<img class="img2"  src="'. URL .'public/images/line5.png">' :'' ?>
    </li>
    <li><a href="<?= URL ?>invoice/collection"class="submit4">Collection</a>
    <?php echo ($fc=='collection')? '<img class="img2"  src="'. URL .'public/images/line5.png">' :'' ?>
    </li>
    <li><a href="<?= URL ?>invoice/customers"class="submit4"> Clients</a>
    <?php echo ($fc=='customers')? '<img class="img2"  src="'. URL .'public/images/line5.png">' :'' ?>
    </li>
    <li><a href="<?= URL ?>invoice/items" class="submit4">Items</a>
    <?php echo ($fc=='items')? '<img class="img2"  src="'. URL .'public/images/line5.png">' :'' ?>
    </li>
</nav>
<div class="hrlink"></div><div class="clear"></div>
<style>
    .contnt{
        /*background-color: #837F7F;*/
        /*width: 400px;*/
        height: 100%;
        margin: 0 auto;
        padding-top: 30px;
    }

    .optcontent{
        width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 10px;
        /*margin-top: 50px;*/
    }

    input[type="submit"]{
        display: block;
        margin: 0 auto;
    }
</style>
<div class="popBack">
    <div class="contnt">
        <div class="optcontent">
            <form method="post" action="<?php echo URL ?>invoice/taxtype">
                Select Taxable Type:
                <ul>
                    <li><input type="radio" name="typeOfTax" value="percentage" required>Percentage (If your income is below 1,919,500.00)</li>
                    <li><input type="radio" name="typeOfTax" value="vat" required>VAT (If your income is over 1,919,500.00)</li>
                </ul>
                <input type="submit" value="OK" />
            </form>
        </div>
    </div>
</div>
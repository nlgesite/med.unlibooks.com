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
            <form method="post" action="<?php echo URL ?>expenses/moptype">
                Mode of Payment:
                <ul>
                    <li><input type="radio" name="modeOfPayment" value="osd" required>Optional Standard Deduction (Automatic maximum deduction of 40% of income even without supporting receipts)</li>
                    <li><input type="radio" name="modeOfPayment" value="itemized" required>Itemized Deduction (Can be used if expenses is more than 40% of income. Should provide expense receipts)</li>
                </ul>
                <input type="submit" value="OK" />
            </form>
        </div>
    </div>
</div>
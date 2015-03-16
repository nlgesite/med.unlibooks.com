<style>
    .TaskHolder{
        width: 100%;
        margin-top: 210px;
    }
    #newItem{
        font-family: calibri;
        margin-left: 20px;
        font-style: italic;
        font-weight: none;
        text-shadow: 1px 1px 5px gray;
    }
    .textHead{
        margin-top: -200px;
        font-size: 30px;
    }
    .createNewI{
        margin-left: 760px;
        margin-top: -70px;
        width: 200px;
        height: 45px;
        border: none;
        background-image:url('/unlibooks/public/images/create new item.png');
        background-repeat:no-repeat;
        background-position:left;
        border-radius: 10px;
        cursor: pointer;
    }
    .centerItem {
        right: 50%;
        margin-right: -450px;
        width: 990px;
        height: 45px;
        margin: 0 auto;
        background-color:#f0f6f0;
        border-radius:5px 5px 0px 0px;
    }
    .buttonImp{
        background-color:#C8C8C8 ;
        width: 128px;
        height: 29px;
        border-radius: 5px 0px 7px 0px;
        margin-left: -5px;
        font-size: 14px;
        font-family: calibri;
        cursor: pointer;
        margin-left: 5px;
    }
    .searchItem{
        margin-left: 10px;
        width: 200px;
        text-align: center;
        height: 28px;
        margin-top: 20px;
    }
    .searchindexItem{
        margin-left: 15px;
        margin-top: 6px;
        width: 24%;
        height: 30px;
        border: 1px solid #C0C0C0;
        text-align: center;
        background-image:url('/unlibooks/public/images/search2.png');
        background-repeat:no-repeat;
        background-position:left;
    }
    .deleteItem{
        background-color:#C8C8C8 ;
        width: 128px;
        height: 29px;
        border-radius: 5px 0px 7px 0px;
        margin-left: 5px;
        font-size: 14px;
        font-family: calibri;
        margin-top:5px;
        cursor: pointer;
    }
    .sendItem{
        background-color:#C8C8C8 ;
        width: 128px;
        height: 29px;
        border-radius: 5px 0px 7px 0px;
        margin-left: -5px;
        font-size: 14px;
        font-family: calibri;
        cursor: pointer;
    }	
    .printItem{
        background-color:#C8C8C8 ;
        width: 128px;
        height: 29px;
        border-radius: 5px 0px 7px 0px;
        margin-left: -5px;
        font-size: 14px;
        font-family: calibri;
        cursor: pointer;
    }
    .byItem{
        color: black;
        font-weight: normal;
        font-family: Calibri;
        font-size: 14px;
        margin-left: 10px;
    }
    .inumberItem{
        background-color:#C8C8C8 ;
        margin-left: 10px;
        width: 150px;
        height: 29px;
        border:none;
        border-radius: 5px 0px 7px 0px;
        font-size:12px;
        font-weight:bold;
    }
    .cnitableItem{
        margin-top: 20px;
        border-collapse: collapse;
        margin-left: 15px;
        width: 97%;
        font-family: Calibri;
    }
    .headinvoiceItem{
        font-family: Calibri;
    }
    .tableItem{
        background-color:#F5F5F5;
        border: solid 1px #C8C8C8;
        font-size:12px;
    }
    .cboxItem{
        text-align: center;
        border: none;
    }
    .itemNo{
        color: blue;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        margin-top: 200px;
        padding-left: 7px;
        text-align: left;
    }
    .itemDesc{
        text-align: left;
        background-color:#F5F5F5;
        border-collapse: collapse;
        padding-left: 7px;
    }
    .dateCreated{
        text-align: left;
        background-color:#F5F5F5;
        border-collapse: collapse;
        padding-left: 7px;
    }
    .unitCost{
        text-align:left; 
        padding-left: 7px;
    }
    .taxCode{
        text-align: left;
        padding-left: 7px;
    }
    .thHead{
        text-align: left;
        width: 150px;

    }

</style>

<script>
$(function(){
    $('#formitem').submit(function() {
            if (newrecord == "new") {
//            task = $('#form input[name="task"]').val().length; alert(task);
                $.ajax({
                    url: "<?= URL ?>invoice/additemOption",
                    type: "POST",
                    data: {
                        itemCode: $('input[name="itemCode"]').val(),
                        description: $('#description').val(),
                        unitCost: $('input[name="unitCost"]').val(),
                        task: $('#formitem input[name="task"]').val(),
                        returnurl:'addoption'
                    },
                    dataType: "JSON",
                    success: function(jsonStr) {
                        $('.items option:last').before($('<option/>', {
                            value: jsonStr.value,
                            text: jsonStr.text
                        }));

                        $('.items option').removeAttr('selected')
                                .filter('[value="' + jsonStr.value + '"]')
                                .attr('selected', true);

                        $('.popBack').addClass("hidden");
                        return false;
                    }, error: function(xhr, textStatus, errorThrown) {
//                        alert('resf');
                        alert(xhr.responseText);
                    }
                });
                return false;
            }
        });
})
</script>
<div class="TaskHolder">
    <div id="newItem">
        <p class="textHead">All Items</p>
        <a href="#">	
            <input type="button" class="createNewI">
        </a>
        <hr>
    </div>	
    <div class="centerItem">
        <div id="searchItem">
            <input type="button" name="del" value="Edit" class="deleteItem">
            <input type="button" name="sendinvoice" value="Create Invoice" class="sendItem">
            <input type="button" name="print" value="Delete" class="printItem">
            <input type="search" name="search" placeholder="Search" class="searchindexItem" > 	
            <a class="byItem">By:</a>
            <select class="inumberItem">
                <option>Invoice Number</option>
            </select>
            <input type="button" class="buttonImp" value="Import/Export">	
        </div>
    </div>
</div>

<div>	



    <table class="cnitable">
        <tr class="headinvoiceItem">
            <th><input type="checkbox"></th>
            <th class="thHead">Item Number</th>
            <th class="thHead">Description</th>
            <th class="thHead">Date Created</th>
            <th class="thHead">Unit Cost</th>
            <th class="thHead">Tax Code</th>
        </tr>

        <tr class="tableItem">
            <td class="cboxItem"><input type="checkbox"></td>
            <td class="itemNo"><u><a href="<?=URL?>000001"></a>000001</u></td>
        <td class="itemDesc">Purchasing Raw Materials</td>
        <td class="dateCreated">04/09/2014</td>
        <td class="unitCost">1000.00</td>
        <td class="taxCode"></td>

        </tr>


        <tr class="tableItem">
            <td class="cboxItem"><input type="checkbox"></td>
            <td class="ItemNo"><u><a href="<?=URL?>000001"></a>000001</u></td>
        <td class="itemDesc">Purchasing Raw Materials</td>
        <td class="dateCreated">04/09/2014</td>
        <td class="unitCost">1000.00</td>
        <td class="taxCode"></td>

        </tr>

        <tr class="tableItem">
            <td class="cboxItem"><input type="checkbox"></td>
            <td class="ItemNo"><u><a href="<?=URL?>000001"></a>000001</u></td>
        <td class="itemDesc">Purchasing Raw Materials</td>
        <td class="dateCreated">04/09/2014</td>
        <td class="unitCost">1000.00</td>
        <td class="taxCode"></td>

        </tr>
        <tr class="tableItem">
            <td class="cboxItem"><input type="checkbox"></td>
            <td class="ItemNo"><u><a href="<?=URL?>000001"></a>000001</u></td>
        <td class="itemDesc">Purchasing Raw Materials</td>
        <td class="dateCreated">04/09/2014</td>
        <td class="unitCost">1000.00</td>
        <td class="taxCode"></td>

        </tr>

    </table>
<link href="<?= URL ?>views/setting/css/ajax.css" rel="stylesheet" type="text/css">
<div class="chartHolder">
    <form class="chart-form">
        <div id="chart-div">
            <input type="button" class="chart-close" value="X">
            <p class="chart-head">New Chart of Account</p>
            <div class="chart-box">
                <p class="aText"><b>Accounts</b></p>
                <table>
                    <tr>
                        <td class="anText">Account Code.</td>
                        <td><input type="text" class="aNo" placeholder="0001"></td>
                    </tr>
                    <tr>
                        <td class="atText">Account Type:</td>
                        <td><select class="aType"><option></option></select></td>
                    </tr>
                    <tr>
                        <td class="atText">Account Categories:</td>
                        <td><select class="aType"><option></option></select></td>
                    </tr>
                    <tr>
                        <td class="atText">Account Name:</td>
                        <td><input type="text" class="aNameInput"></td>
                    </tr>
                    <tr>
                        <td class="atText"></td>
                        <td><textarea class="descInput"></textarea></td>
                    </tr>
                    <tr>
                        <td class="atText4">Vat:</td>
                        <td><select class="vatSelect"><option></option></select></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" value="Browse.." class="InclusiveOfVatChartcheck"></td>
                        <td class="InclusiveOfVatChartText"></td>
                    </tr>
                </table>
            </div>
            <div class="atText2">Description:</div>

            <div class="InclusiveOfVatChartText">Inclusive of Vat</div>
            <div class="chart-box2">
                <p class="bText"><b>Balances</b></p>
                <table>
                    <tr>
                        <td class="openB">Opening Balance</td>
                        <td><input type="text" class="oBal"></td>
                        <td class="asText">As of:</td>
                        <td><input type="date" class="ao"></td>
                    </tr>
                </table>
                <div class="noteText">Note:</div>
                <div><textarea class="noteInput"></textarea></div>
                <div><input type="checkbox" checked class="aBox"></div>
                <div class="aaInput">Active Account</div>
                <div></div>
            </div>
            <div class="div-saveAdd">
                <input type="button" class="chartSave" value="Save">
                <input type="button" class="chartAddSave" value="Save and Add New">
            </div>
        </div>
    </form>
</div>
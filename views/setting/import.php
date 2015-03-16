<style>
    .import-form{
        background-color:#E5F1CE;
        width: 90%;
        height: 405px;
        margin-left: 50px;
        margin-top: 10px;
        margin-bottom: 50px;
    }
    .export-div{
        border: 1px solid #C8C8C8;
        width: 870px;
        height: 150px;
        margin-left: 15px;
        margin-top: 35px;
    }
    .export{
        background-color: #E5F1CE;
        margin-top: -10px;
        margin-left: 55px;
        font-style: italic;
        font-family: verdana;
        font-size: 14px;
        width: 70px;
        text-align: center;
        font-weight: bold;
    }
    #im-ex-new{
        padding-top:5px;
    }
    .step1{
        margin-left: 10px;
        margin-top: 5px;
        font-size: 12px;
        font-family: verdana;
    }
    .Demo{
        margin-left: 740px;
        margin-top: -22px;
        font-size: 12px;
        font-family: verdana;
    }
    .demolink{
        color: blue;
        text-decoration: underline;
    }
    .sampleT{
        margin-left:50px; 
        margin-top: 15px;
        font-size: 12px;
        font-family: verdana;
    }
    .sampleSpan{
        color: blue;
    }
    .eText{
        font-family: verdana;
        font-size: 12px;
        margin-top: 30px;
        margin-left: 35px;
    }
    .eType{
        width: 180px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
        margin-left: 140px;
        margin-top: -20px;
        font-size:12px;
        font-family:verdana;
    }
    .exButton{
        background-image:url('<?= URL ?>public/images/export-file.png');
        background-repeat:no-repeat;
        width: 147px;
        height: 33px;
        border: none;
        margin-left: 340px;
        float: left;
        margin-top: -29px;
    }
    .export2-div{
        border: 1px solid #C8C8C8;
        width: 870px;
        height: 150px;
        margin-top: 19px;
        margin-left: 15px;
    }
    .SelectText{
        font-family: verdana;
        font-size: 12px;
        margin-top: 30px;
        padding-left: 39px;
    }
    .buttonBrowse{
        margin-left: 143px;
        margin-top: -17px;
        width: 190px;
        height: 20px;
        font-size: 13px;
        font-weight: bold;
        font-family: calibri;
        font-style: italic;
    }
    .BankText{
        font-family: Calibri;
        font-size: 12px;
        margin-top: -22px;
        margin-left: 251px;
    }
    .imButton{
        background-image:url('<?= URL ?>public/images/import-file.png');
        background-repeat:no-repeat;
        width: 147px;
        height: 33px;
        border: none;
        margin-top: -25px;
        margin-left: 340px;
        float:left;
    }
    .im-ex-new2{
        margin-left: 15px;

    }
    .export2-div{
        margin-bottom: 10px;
    }

    .fileUpload {
    }
    .fileUpload input.buttonBrowse {
        font-size: 12px;
        cursor: pointer;
        font-family: verdana;
        font-weight: normal;

    }
</style>
<div class="companyHolderNew1">
    <div class="import-form">
        <div id="im-ex-new">
            <div class="export-div">
                <div class="export">Export</div>
                <div class="step1">Step 1. Export your master data to be use as sample template of how to format your file for importing.</div>	
                <div class="Demo"> Click Here for <a href class="demolink">DEMO</a></div>
                <div class="sampleT"><span class="sampleSpan">Sample template</span>: Client, Supplier, Project, Item, Task,  Bank, Taxes and Chart of Account</div>	
                <div class="eText">Template File:</div>
                <form method="post" action="<?php echo URL ?>setting/export" >
                    <div><select class="eType" name="type">
                            <option value="client">Client</option>
                            <option value="task">Task</option>
                            <option value="item">Item</option>
                        </select></div>
                    <input type="submit" class="exButton" value="">
                </form>
            </div>
        </div>
        <div id="im-ex-new2">
            <div class="export2-div">
                <div class="export">Import</div>
                <div class="step1">Step 2. Import your master data using  sample template from export file.</div>	
                <div class="Demo"> Click Here for <a href class="demolink">DEMO</a></div>
                <div class="SelectText">Select Your File:</div>
                <form method="post" action="<?php echo URL ?>setting/importfile" enctype="multipart/form-data" >
                    <div class="fileUpload btn btn-primary"><input type="file" class="buttonBrowse" id="" name="file"></div>
                    <input type="submit" class="imButton" value="">
                </form>
            </div>
        </div>
    </div>	
</div>	
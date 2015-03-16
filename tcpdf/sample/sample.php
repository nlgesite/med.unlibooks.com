<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
    RxVue
</title><link rel="stylesheet" type="text/css" href="_css/main.css" />
    <!-- <link rel="stylesheet" type="text/css" href="_css/newrx.css" />
    <link rel="stylesheet" type="text/css" href="_css/print_rx.css" media="print" />
    -->
    <link rel="stylesheet" type="text/css" href="_css/print_rx.css" />


    <!--[if IE]>
    <style>
    fieldset {
        position: relative;
    }
    legend {
        position: absolute;
        top: -.5em;
        left: .2em;
    }
    </style>
    <![endif]-->
    <script type="text/javascript" language="javascript">

    </script>
</head>
<body>

    <div id="mainwrap">
        <div id="wrap" class="clearfix">
            <div id="header" class="noprint">
                <!--<h1>RxVue v2.0</h1><img src="images\title.jpg"-->
            </div>
            <div id="topnav" class="noprint">
                <div id="ctl00_buttons">

                    <div id="ctl00_nousers">

                        <ul>
                            <li><a href="Patient.aspx">Search Patients</a></li>
                            <li id="favs"><a href="favorites.aspx">Favorites</a></li>

                            <li style="float:right"><a href="help.aspx">Help</a></li>
                            <li style="float:right"><a href="SessEnd.aspx">Log Off</a></li>

                        </ul>

    </div>


</div>
            </div>
            <div id="main" class="fullwidth">

    <form name="aspnetForm" method="post" action="print_newrx.aspx" id="aspnetForm">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTkwMTE2OTYzOQ8WCB4GUmVmVXJsBSNodHRwOi8vbG9jYWxob3N0L1J4VnVlL3BhdGllbnQuYXNweB4OX2N1cnJlbnRTY3JpcHQy6QMAAQAAAP////8BAAAAAAAAAAwCAAAAQkRhdGFPYmplY3RzLCBWZXJzaW9uPTEuMC4wLjAsIEN1bHR1cmU9bmV1dHJhbCwgUHVibGljS2V5VG9rZW49bnVsbAUBAAAAKU9wdXNJU00uUHJvZHVjdHMuUnhWdWUuRGF0YU9iamVjdHMuU2NyaXB0EQAAAAhTY3JpcHRJRAZzaXRlSUQIZG9jdG9ySUQJcGF0aWVudElEBG5hbWUIY2F0ZWdvcnkNc3RyZW5ndGhBbmRVTQRmb3JtA3NpZwhxdWFudGl0eQdyZWZpbGxzDHJlZmlsbE51bWJlcghyeE51bWJlcgpkYXlzU3VwcGx5B2Rhd0NvZGULZGF0ZVdyaXR0ZW4NZGF0ZU9mU2VydmljZQAAAAABAQEBAQAAAAEAAQMDCAgICAYICAgPU3lzdGVtLkRhdGVUaW1lD1N5c3RlbS5EYXRlVGltZQIAAADO3QQAAQAAAC8AAACwFQAABgMAAAAJSUJVUFJPRkVOBgQAAAAABgUAAAAFNDAwTUcGBgAAAANUQUIGBwAAAAkKMSBEQUlMWSAAAAAAAAAkQGMAAAAAAAAABggAAAAGODE1NDY4CgAAAAYJAAAAATAIDQAAXWKHqMsICA0AAF1ih6jLCAseDl9jdXJyZW50RG9jdG9yMrMDAAEAAAD/////AQAAAAAAAAAMAgAAAEJEYXRhT2JqZWN0cywgVmVyc2lvbj0xLjAuMC4wLCBDdWx0dXJlPW5ldXRyYWwsIFB1YmxpY0tleVRva2VuPW51bGwFAQAAAClPcHVzSVNNLlByb2R1Y3RzLlJ4VnVlLkRhdGFPYmplY3RzLkRvY3RvchEAAAAGc2l0ZUlECGRvY3RvcklECWZpcnN0TmFtZQhsYXN0TmFtZQhhZGRyZXNzMQhhZGRyZXNzMgRjaXR5BXN0YXRlB3ppcGNvZGUGaG9zdElECXdvcmtQaG9uZQNkZWEFbm90ZXMMc3RhdGVMaWNlbnNlBHVQaW4JZmF4TnVtYmVyA05QSQAAAQEBAQEBAQEBAQEBAQEBCAgCAAAAAQAAADgJAAAGAwAAAAAGBAAAAAVHT1lBTAkDAAAACgYGAAAACEVMTVNGT1JEBgcAAAACTlkGCAAAAAUxMDUyMwYJAAAABDIzNTMGCgAAAA0oOTE0KTY4MS0yMDI4BgsAAAAJQkc1MDk3NDY0CQMAAAAGDQAAAAYyMDM0MzQJAwAAAAkDAAAACQMAAAALHg9fY3VycmVudFBhdGllbnQymgYAAQAAAP////8BAAAAAAAAAAwCAAAAQkRhdGFPYmplY3RzLCBWZXJzaW9uPTEuMC4wLjAsIEN1bHR1cmU9bmV1dHJhbCwgUHVibGljS2V5VG9rZW49bnVsbAUBAAAAKk9wdXNJU00uUHJvZHVjdHMuUnhWdWUuRGF0YU9iamVjdHMuUGF0aWVudBsAAAAJcGF0aWVudElEDGhvc3RVbmlxdWVJRAZzaXRlSUQJZmlyc3ROYW1lCGxhc3ROYW1lBGNpdHkFc3RhdGUHemlwQ29kZQhhZGRyZXNzMQhhZGRyZXNzMgtkYXRlT2ZCaXJ0aA1oYXNTYWZldHlDYXBzA3NleBFhbHRlcm5hdGVMYW5ndWFnZQlob21lUGhvbmUJd29ya1Bob25lCmZhY2lsaXR5SUQMZmFjaWxpdHlOYW1lFGZhY2lsaXR5QWRtaXR0ZWREYXRlFWZhY2lsaXR5UGF0aWVudE51bWJlchBmYWNpbGl0eUJ1aWxkaW5nDWZhY2lsaXR5Rmxvb3INZmFjaWxpdHlOdXJzZQxmYWNpbGl0eVJvb20LZmFjaWxpdHlCZWQScHJpbWFyeVBoeXNpY2lhbklEFHByaW1hcnlQaHlzaWNpYW5OYW1lAwMAAQEBAQEBAQMAAQEBAQMBAwEBAQEBAQMBDFN5c3RlbS5JbnQzMgxTeXN0ZW0uSW50MzIID1N5c3RlbS5EYXRlVGltZQEMU3lzdGVtLkludDMyD1N5c3RlbS5EYXRlVGltZQxTeXN0ZW0uSW50MzICAAAACAiwFQAACAgkTgAAAQAAAAYDAAAABE9QVVMGBAAAAARURVNUBgUAAAAKS0lOR1MgUEFSSwYGAAAAAk5ZBgcAAAAFMTE3NTQGCAAAAAoyIFNNSVRIIExOCggNAMABJL1QmggBBgkAAAABTQoGCgAAAA0oOTk5KTk5OS05OTk5BgsAAAAACAgzAAAABgwAAAANVEVTVCBGQUNJTElUWQgNAMBdCG7ewAgGDQAAAAEwCgYOAAAAATAJCwAAAAkLAAAACQsAAAAICPEOAAAKCxYCZg9kFgQCAw9kFgICAQ8PFgIeB1Zpc2libGVnZGQCBQ9kFgICAQ9kFgICAQ9kFgQCAQ9kFgICAQ8WAh4EVGV4dAU5IEdPWUFMPGJyLz48YnIvPjxici8+RUxNU0ZPUkQsIE5ZIDEwNTIzPGJyLz4oOTE0KTY4MS0yMDI4ZAIDD2QWAgIBDxYCHwUF5AU8ZGl2IGlkPSdwYXRpZW50ZGV0YWlscyc+PGhyIGNsYXNzPSdocjEnLz48ZGl2IGNsYXNzPSdwYXRpZW50bmFtZUxibCc+UGF0aWVudCdzIE5hbWU8L2Rpdj48ZGl2IGNsYXNzPSdwYXRpZW50bmFtZSc+VEVTVCwgT1BVUzwvZGl2PjxociBjbGFzcz0naHIyJy8+PGRpdiBjbGFzcz0nYWRkcmVzc0xibCc+QWRkcmVzczwvZGl2PjxkaXYgY2xhc3M9J2FkZHJlc3MnPjIgU01JVEggTE48YnIvPktJTkdTIFBBUksgTlkgMTE3NTQ8YnIvPkhvbWU6ICg5OTkpOTk5LTk5OTkgV29yazogPC9kaXY+PGRpdiBjbGFzcz0nZGF0ZUxibCc+RGF0ZTwvZGl2PjxkaXYgY2xhc3M9J2N1cnJlbnREYXRlJz43LzE0LzIwMTE8L2Rpdj48ZGl2IGNsYXNzPSdET0JMYmwnPkRPQjwvZGl2PjxkaXYgY2xhc3M9J2RvYic+NS8xOC8xOTY1PC9kaXY+PGhyIGNsYXNzPSdocjMnLz48ZGl2IGNsYXNzPSdyeGxvZ28nPjxpbWcgc3JjPSdfaW1hZ2VzL25ld3J4X3J4bG9nby5naWYnLz48L2Rpdj48ZGl2IGNsYXNzPSdkcnVnbmFtZSc+SUJVUFJPRkVOPC9kaXY+PGRpdiBjbGFzcz0nc3RyZW5ndGgnPjQwME1HPC9kaXY+PGRpdiBjbGFzcz0nZEZvcm0nPlRBQjwvZGl2PjxkaXYgY2xhc3M9J1F1YW50aXR5Jz4xMDwvZGl2PjxkaXYgY2xhc3M9J0RheXNTdXBwbHknPjEwPC9kaXY+PGRpdiBjbGFzcz0nU2lnJz4KMSBEQUlMWSA8L2Rpdj48ZGl2IGNsYXNzPSdyZWZpbGxudW0nPjA8L2Rpdj48ZGl2IGNsYXNzPSdkYXcnPjwvZGl2PjwvZGl2PmRk7RV36BiJjbbovj1XnUym6MEOcXOJIKiWRJUuDtYd6VM=" />
</div>

<div>

    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBAKXxtXKAgL9pNLfAwL+95vYCQKrtLS2BiSIbnbb9KvUH1ZSdz1FkSgkv3bVd6X5jUkQVgpkQliz" />
</div>


    <div id="ctl00_mainContent_newscript" class="newscript fullwidth">

            <div id="ctl00_mainContent_doctor" class="doctor fullwidth">

                 GOYAL<br/><br/><br/>ELMSFORD, NY 10523<br/>(914)681-2028

    </div>

            <div id="ctl00_mainContent_patientinfo" class="patientinfo fullwidth">

               <div id='patientdetails'><hr class='hr1'/><div class='patientnameLbl'>Patient's Name</div><div class='patientname'>TEST, OPUS</div><hr class='hr2'/><div class='addressLbl'>Address</div><div class='address'>2 SMITH LN<br/>KINGS PARK NY 11754<br/>Home: (999)999-9999 Work: </div><div class='dateLbl'>Date</div><div class='currentDate'>7/14/2011</div><div class='DOBLbl'>DOB</div><div class='dob'>5/18/1965</div><hr class='hr3'/><div class='rxlogo'><img src='_images/newrx_rxlogo.gif'/></div><div class='drugname'>IBUPROFEN</div><div class='strength'>400MG</div><div class='dForm'>TAB</div><div class='Quantity'>10</div><div class='DaysSupply'>10</div><div class='Sig'>
1 DAILY </div><div class='refillnum'>0</div><div class='daw'></div></div>
               <div id="ctl00_mainContent_script2">

                    <span id="ctl00_mainContent_lblDrugName" class="lbldrugname">Drug Name</span>                                                                                                                   
                    <br />
                    <span id="ctl00_mainContent_lblstrengthAndUM" class="lblstrength">Strength:</span>
                    <br />                    
                    <span id="ctl00_mainContent_lblForm" class="lbldForm">Form:</span>
                    <br />

                    <span id="ctl00_mainContent_lblQuantity" class="lblQuantity">Quantity:</span>
                    <input name="ctl00$mainContent$frmquantity" type="text" id="ctl00_mainContent_frmquantity" class="Quantity" />
                        <br />

                    <span id="ctl00_mainContent_lblDaysSupply" class="lblDaysSupply">Days Supply:</span>


                    <span id="ctl00_mainContent_lblSig" class="lblSig">Sig:</span>
                    <br />
                    <hr class='hr4'/>
                    <div class="txtDaw">THIS PRESCRIPTION WILL BE FILLED GENERICALLY<br />UNLESS THE PRESCRIBER WRITES 'd a w' IN THE BOX BELOW </div>
                    <span id="ctl00_mainContent_lblrefills" class="lblrefills">Refills:</span>
                    <br />                                                                             
                    <div class="lblDaw">DISPENSE AS WRITTEN</div>            

        </div>

    </div>

</div>

    <div id="ctl00_mainContent_newscriptbottom" class="newscriptbottom noprint">

        <input type="submit" name="ctl00$mainContent$btnCancelNew" value="Back" id="ctl00_mainContent_btnCancelNew" class="btn_newScript noprint" />
        <input type="submit" name="ctl00$mainContent$btnPrint" value="Print" onclick="window.print();" id="ctl00_mainContent_btnPrint" class="btn_newScript noprint" />      

</div>   

    </form>


            </div>
        </div>
        <div id="clearfooter"></div>

    </div>
    <div id="footer">
        <span class="image">
            <img src="_images/poweredby.gif" alt="Powered By WebRx"/></span>
    </div>

</body>
</html>
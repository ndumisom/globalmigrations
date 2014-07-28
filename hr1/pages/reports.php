<link rel="stylesheet" media="all" type="text/css" href="../css/datepicker/jquery-ui.css" />
        <link rel="stylesheet" media="all" type="text/css" href="../css/datepicker/jquery-ui-timepicker-addon.css" />
        
        <script type="text/javascript" src="../js/datepicker/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../js/datepicker/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/datepicker/jquery-ui-timepicker-addon.js"></script>
        <script type="text/javascript" src="../js/datepicker/jquery-ui-sliderAccess.js"></script>
        <link rel="stylesheet" href="../dist/css/bootstrapValidator.css"/>
<script type="text/javascript">
    var xmlHttp;
    function showUser(str)
    { 
        xmlHttp=GetXmlHttpObject();
        if (xmlHttp==null)
        {
            alert ("Browser does not support HTTP Request");
            return;
        }
        var url="textfield.php";
        url=url+"?q="+str;
        url=url+"&sid="+Math.random();
        xmlHttp.onreadystatechange=stateChanged;
        xmlHttp.open("GET",url,true);
        xmlHttp.send(null);
    }
    function stateChanged() 
    { 
        if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
        { 
            document.getElementById("txtHint").innerHTML=xmlHttp.responseText;
        } 
    }
    function GetXmlHttpObject()
    {
        var xmlHttp=null;
        try
        {
            // Firefox, Opera 8.0+, Safari
            xmlHttp=new XMLHttpRequest();
        }
        catch (e)
        {
            //Internet Explorer
            try
            {
                xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e)
            {
                xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
        }
        return xmlHttp;
    }
    
   //DATE      
   $(document).click(function () {
   $('#basic_example_1').datetimepicker({
                         dateFormat: "yy-mm-dd",
                        timeFormat: "hh:mm",
                        changeMonth: true,
    changeYear: true,

                    });
                        }); 

$(function () {
   
    $(document).on('focus', '#basic_example_1', function () {
        $(this).datetimepicker({dateFormat: "yy-mm-dd"});
    });
});
  var defaultOpts = {
    changeMonth: true,
    changeYear: true,
    showOn: 'both',
    buttonImageOnly: false,
    dateFormat: 'yy-mm-dd',
    onChangeMonthYear: function (year, month, inst) {
        console.log(year, month, inst);
    }
};



   $(document).click(function () {
   $('#basic_example_2').datetimepicker({
                         dateFormat: "yy-mm-dd",
                        timeFormat: "hh:mm",
                        changeMonth: true,
    changeYear: true,

                    });
                        }); 

$(function () {
   
    $(document).on('focus', '#basic_example_2', function () {
        $(this).datetimepicker({dateFormat: "yy-mm-dd"});
    });
});
  var defaultOpts = {
    changeMonth: true,
    changeYear: true,
    showOn: 'both',
    buttonImageOnly: false,
    dateFormat: 'yy-mm-dd',
    onChangeMonthYear: function (year, month, inst) {
        console.log(year, month, inst);
    }
};
    
</script>
<style>
 .wrap_froms {
    border: 2px solid;
    border-radius: 5px;
    margin-left: auto;
    margin-left: auto;
    border: 1px solid #0088cc;
    border-radius: 3px;
    padding: 9px;
    max-width: 980px;
}
</style>
<?php $userID =""?>
<div class="container wrap_froms">
  <div class="row">
    <div class="offset1 span8 ">
<table class="tab" width="100%" cellspacing="0" cellpadding="0" border="0" bordercolor="#0000FF">
    <tr><td>
            <h2 class="title" style="color: #0000FF; text-align:center;"><a href="#" style="color: #0000FF; text-decoration:; font: Helvetica, Arial, sans-serif;"> Reports </a></h2>
            <p>&nbsp;</p>
<center>
<a href="index.php?page=file_opened" style="color: ; text-align:center;  font: Helvetica, Arial, sans-serif;" class="label label-info"> <b>File Opened Report</b></a> &nbsp;&nbsp;&nbsp;<a href="index.php?page=ministerial_report" style="color; text-decoration: ; font: Helvetica, Arial, sans-serif;" class="label label-info"> <b>Ministerial Report</b></a>&nbsp;&nbsp;&nbsp;<a href="index.php?page=empty_fields" style="color: ; text-decoration: ; font: Helvetica, Arial, sans-serif;" class="label label-info"> <b>Empty fields Report</b></a><br/><br/>
            <form id="defaultForm" method="post" action="index.php?page=view_report" class="form-horizontal">
            <fieldset>
                <table border="0" width="750" cellspacing="1" cellpadding="3" 
                       bgcolor="#353535" align="center">
                    <tr>
                        <td bgcolor="#FFFFFF" width="30%">Permit status</td>
                        <td bgcolor="#FFFFFF" width="70%">
                               <div class="form-group">

                                <select class="for-control" name="permit_status" id="level">
                                <option value="">Select</option>
                                <option value="New client">New client</option>
                                <option value="Pending at DHA">Pending at DHA</option>
                                <option value="Pre-Submission">Pre-Submission</option>
                                <option value="TRP Endorsed">TRP Endorsed</option>
                                <option value="PR Endorsed">PR Endorsed</option>
                                <option value="Urgent">Urgent</option>
                                <option value="Memo issued - Awaiting Documents">Memo issued - Awaiting Documents</option>
                                <option value="File Closed">File Closed</option>
                                <option value="Current Valid TRP">Current Valid TRP</option>
                                <option value="Finalised">Finalised - Awaiting Copy of Permit</option>
                                <option value="Waivers Pending">Waivers Pending</option>
                                <option value="Memorandum Issued">Memorandum Issued</option>
                                <option value="Payment Status - Complete">Payment Status - Complete</option>
                                <option value="Payment Status - Incomplete">Payment Status - Incomplete</option>
                                <option value="Consultation">Consultation</option>
                                <option value="Citizenship Received">Citizenship Received</option>
                                <option value="Work Complete">Work Complete</option>
                                <option value="Expired">Expired</option>
                                <option value="Received New TRP<">Received New TRP</option>
                                <option value="Rejected">Rejected</option>
                                <option value="Awaiting Instruction">Awaiting Instruction</option>
                                <option value="Awaiting Waiver">Awaiting Waiver</option>
                                <option value="Illegal">Illegal</option>
                                <option value="No Extension required">No Extension required</option>
                                <option value="Extension submitted">Extension submitted</option>
                                <option value="Applicant Abroad">Applicant Abroad</option>
                                <option value="Appeal Submitted">Appeal Submitted</option>
                                <option value="Deceased">Deceased</option>
                                <option value="No copy of trp on file">No copy of trp on file</option>
                                <option value="To be submitted to DHA">To be submitted to DHA</option>
                                <option value="Received by DHA">Received by DHA</option>
                                <option value="Request for rectification of incorrect endorsement">Request for rectification of incorrect endorsement</option>
                                <option value="Submitted to DHA">Submitted to DHA</option>
                                <option value="Departed RSA">Departed RSA</option>
                                <option value="Approved, waiting for passports">Approved, waiting for passports</option>
                                <option value="South African Citizen">South African Citizen</option>
                                <option value="TRP Refused">TRP Refused</option>
                                <option value="Memo issued- Transfer of permit to new passport">Memo issued- Transfer of permit to new passport</option>
                                <option value="Refused">Refused</option>
                                <option value="Review Submitted/Pending">Review Submitted/Pending</option>
                                <option value="Documents Received">Documents Received</option>
                                <option value="Balance of documents received1">Balance of documents received1</option>
                                <option value="Balance of documents recieved2">Balance of documents recieved2</option>
                                <option value="Balance of documents recieved3">Balance of documents recieved3</option>
                                <option value="Incorrect Endorsement">Incorrect Endorsement</option>
                                <option value="Finalised">Finalised</option>
                                <option value="Refused,Form2 received">Refused,Form2 received</option>

                            </select>

</div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF">Corporate</td>
                        <td bgcolor="#FFFFFF">
                         <div class="form-group">
                            <select class="for-control" name="corporate" id="corporate">
                                <option value="">Select</option>
                                <option value="Aerotechnic">Aerotechnic</option>
                                <option value="AIG">AIG</option>
                                <option value="Aircom">Aircom</option>
                                <option value="Aker Sollutions">Aker Sollutions</option>
                                <option value="Jacob Matasis">Jacob Matasis</option>
                                <option value="Albany">Albany</option>
                                <option value="Albany systems">Albany systems</option>
                                <option value="Arcus Gibb">Arcus Gibb</option>
                                <option value="ARV">ARV</option>
                                <option value="Asch Proffessional Services">Asch Proffessional Services</option>
                                <option value="Aunde">Aunde</option>
                                <option value="Axis Mason">Axis Mason</option>
                                <option value="Bain & Company Inc">Bain & Company Inc</option>
                                <option value="Barone, Budge and Dominick">Barone, Budge and Dominick</option>
                                <option value="Base Models">Base Models</option>
                                <option value="Basil Read">Basil Read</option>
                                <option value="Bastillion">Bastillion</option>
                                <option value="Battery Electric">Battery Electric</option>
                                <option value="Beroa">Beroa</option>
                                <option value="Bosch">Bosch</option>
                                <option value="BSG">BSG</option>
                                <option value="BSH Home Appliances">BSH Home Appliances</option>
                                <option value="Cape Gourmet Food Festival">Cape Gourmet Food Festival</option>
                                <option value="CapQuest">CapQuest</option>
                                <option value="CCIC Caracle Creek Intl Con">CCIC Caracle Creek Intl Con</option>
                                <option value="CF">CF</option>
                                <option value="China Experience">China Experience</option>
                                <option value="Clarity Mineral">Clarity Mineral</option>
                                <option value="Coleman">Coleman</option>
                                <option value="Coleman Tunneling">Coleman Tunneling</option>
                                <option value="Concor">Concor</option>
                                <option value="Connect 123">Connect 123</option>
                                <option value="Continental China">Continental China</option>
                                <option value="CPS Projects (pty) Ltd">CPS Projects (pty) Ltd</option>
                                <option value="Cricket South Africa">Cricket South Africa</option>
                                <option value="Dale Automation">Dale Automation</option>
                                <option value="Daymon World International">Daymon World International</option>
                                <option value="Daymon World Intl">Daymon World Intl</option>
                                <option value="Desmond Tutu">Desmond Tutu</option>
                                <option value="Devere">Devere</option>
                                <option value="Digitot">Digitot</option>
                                <option value="DNV">DNV</option>
                                <option value="DRG">DRG</option>
                                <option value="DVT">DVT</option>
                                <option value="Edison Allteck">Edison Allteck</option>
                                <option value="Edison Durban">Edison Durban</option>
                                <option value="Edison Jehamo / Allteck">Edison Jehamo / Allteck</option>
                                <option value="Edison Jehamo Power">Edison Jehamo Power</option>
                                <option value="Ercam">Ercam</option>
                                <option value="Edison Power Electrical">Edison Power Electrical</option>
                                <option value="Fairmont Zimbali Resort">Fairmont Zimbali Resort</option>
                                <option value="FairView Golf Estate">FairView Golf Estate</option>
                                <option value="Faurecia">Faurecia</option>
                                <option value="Federal Mogul">Federal Mogul</option>
                                <option value="Federal Mogul South Africa">Federal Mogul South Africa</option>
                                <option value="Futura Footware">Futura Footware</option>
                                <option value="Futura Footwear">Futura Footwear</option>
                                <option value="Global Migration">Global Migration</option>
                                <option value="Green Building Council SA">Green Building Council SA</option>
                                <option value="Habib Overseas Bank">Habib Overseas Bank</option>
                                <option value="harsco">harsco</option>
                                <option value="Hensu Transport">Hensu Transport</option>
                                <option value="Hillary Construction">Hillary Construction</option>
                                <option value="Ibamba Hunting">Ibamba Hunting</option>
                                <option value="Ivodent">Ivodent</option>
                                <option value="Jacob Matasis">Jacob Matasis</option>
                                <option value="Just Diesel">Just Diesel</option>
                                <option value="KEC">KEC</option>
                                <option value="KEC International">KEC International</option>
                                <option value="Kingswood College">Kingswood College</option>
                                <option value="Kinky Group">Kinky Group</option>
                                <option value="Kool U Up">Kool U Up</option>
                                <option value="Krones">Krones</option>
                                <option value="Linda Ness">Linda Ness</option>
                                <option value="Linde Group">Linde Group</option>
                                <option value="Marcom International">Marcom International</option>
                                <option value="Maskew Miller Longman">Maskew Miller Longman</option>
                                <option value="Mecs">Mecs</option>
                                <option value="Metropiltan">Metropiltan</option>
                                <option value="Metropolitan Life">Metropolitan Life</option>
                                <option value="Microsof">Microsoft</option>
                                <option value="MMI Holdings">MMI Holdings</option>
                                <option value="MML">MML</option>
                                <option value="Mobilitrix">Mobilitrix</option>
                                <option value="Motivation Africa">Motivation Africa</option>
                                <option value="Murray and Roberts">Murray and Roberts</option>
                                <option value="Murray and Roberts Marin">Murray and Roberts Marine</option>
                                <option value="MurRob">MurRob</option>
                                <option value="MUSA">MUSA</option>
                                <option value="Nielsen Company">Nielsen Company</option>
                                <option value="Nielsen Group">Nielsen Group</option>
                                <option value="Novartis">Novartis</option>
                                <option value="Novartis South Africa">Novartis South Africa</option>
                                <option value="Oceans Research">Oceans Research</option>
                                <option value="Ogilvy">Ogilvy</option>
                                <option value="OOBA">OOBA</option>
                                <option value="Osmand lange">Osmand lange</option>
                                <option value="Petroplan">Petroplan</option>
                                <option value="Phoenix Racks">Phoenix Racks</option>
                                <option value="Piet Esterhuyse Vervoer">Piet Esterhuyse Vervoer</option>
                                <option value="PRDW">PRDW</option>
                                <option value="Prestedge Retief Dresdner Wijnberg">Prestedge Retief Dresdner Wijnberg</option>
                                <option value="Prestedge Retief Dresner Wijnberg">Prestedge Retief Dresner Wijnberg</option>
                                <option value="Rapidol">Rapidol</option>
                                <option value="Rennies Travel">Rennies Travel</option>
                                <option value="Robert Bosch">Robert Bosch</option>
                                <option value="Rockwell Automation">Rockwell Automation</option>
                                <option value="SA Rock Drills CC">SA Rock Drills CC</option>
                                <option value="SAC School">SAC School</option>
                                <option value="Sandoz">Sandoz</option>
                                <option value="SASOL">SASOL</option>
                                <option value="SB TIPPERS">SB TIPPERS</option>
                                <option value="Seal Cool Industrie">Seal Cool Industries</option>
                                <option value="Seamless Technologies">Seamless Technologies</option>
                                <option value="Sircus Synergy">Sircus Synergy</option>
                                <option value="SircusSynergy">SircusSynergy</option>
                                <option value="Snowden">Snowden</option>
                                <option value="Sofline Accpac">Sofline Accpac</option>
                                <option value="Softline AccPac">Softline AccPac</option>
                                <option value="SRK<">SRK</option>
                                <option value="SRK Consulting">SRK Consulting</option>
                                <option value="SRK Consulting Engineers">SRK Consulting Engineers</option>
                                <option value="St Andrews College">St Andrews College</option>
                                <option value="St Martins in the Field">St Martins in the Field</option>
                                <option value="Stepping South">Stepping South</option>
                                <option value="Sunrise">Sunrise</option>
                                <option value="Taj Hotel">Taj Hotel</option>
                                <option value="Taj Hotels Corporate">Taj Hotels Corporate</option>
                                <option value="Tata Consultancy Services">Tata Consultancy</option>
                                <option value="Tasty Treat">Tasty Treat</option>
                                <option value="The Logikal Choice">The Logikal Choice</option>
                                <option value="The Neilsen Group">The Neilsen Group</option>
                                <option value="The Nielsen Group">The Nielsen Group</option>
                                <option value="Time Tunnel">Time Tunnel</option>
                                <option value="Tony Fenner">Tony Fenner</option>
                                <option value="Tradestream">Tradestream</option>
                                <option value="Transcat">Transcat</option>
                                <option value="Transearch">Transearch</option>
                                <option value="Treatment Action Campaign">Treatment Action Campaign</option>
                                <option value="TSB Suga">TSB Sugar</option>
                                <option value="Tullow Oil">Tullow Oil</option>
                                <option value="Tunneling">Tunneling</option>
                                <option value="T�V NORD">T�V NORD</option>
                                <option value="T�V Nord (Pty) Ltd">T�V Nord (Pty) Ltd</option>
                                <option value="TUV-NORD">TUV-NORD</option>
                                <option value="UCT">UCT</option>
                                <option value="Ukubona">Ukubona</option>
                                <option value="UKZN">UKZN</option>
                                <option value="UP 2 Solutions">UP 2 Solutions</option>
                                <option value="UPSTREAM T.C/SASOL">UPSTREAM T.C/SASOL</option>
                                <option value="Verang">Verang</option>
                                <option value="Vindhya Systems">Vindhya Systems</option>
                                <option value="Vindhya Sysytems">Vindhya Sysytems</option>
                                <option value="Virgin Active">Virgin Active</option>
                                <option value="Wooldridge College">Wooldridge College</option>
                                <option value="ZF Auto Industrial">ZF Auto Industrial</option>
                                <option value="Zimbali Lodge">Zimbali Lodge</option>
                                <option value="None">None</option>
                               

                            </select>
 <div id="txtHint"></div>
                        </td>
                    </tr>
                    </div>
                    <tr>
                        <td bgcolor="#FFFFFF">Hr Department</td>
                         
                        <td bgcolor="#FFFFFF">
                        <div class="form-group">
                            <select class="for-control" name="hr_department" id="level">
                                <option value="">Select</option>
                                <option value="Natref">Natref</option>
                                <option value="Temane">Temane</option>
                                <option value="Sasol Gas">Sasol Gas</option>
                                <option value="Sasol Group Services">Sasol Group Services</option>
                                <option value="Sasol Wax">Sasol Wax</option>
                                <option value="Sastech">Sastech</option>
                                <option value="Shared Services">Shared Services</option>
                                <option value="SPI">SPI</option>
                                <option value="Synfuels">Synfuels</option>
                              
                                
                             </select>
                        </td>
                    </tr>
                    </div>
                                        <div id="txtHint"></div>
                        </td>
                    </tr>
        <tr>
            <td bgcolor="#FFFFFF" width="60%">Start Date</td>
        
                        <td bgcolor="#FFFFFF" width="100%">
                            <div class="form-group input-daterange">
                          <input type="text" name="start_date" id="basic_example_1" autocomplete="off"/>

                <script type="text/javascript">
                    function catcalc(cal) {
                        var date = cal.date;
                        var time = date.getTime()
                        // use the _other_ field
                        var field = document.getElementById("f_calcdate");
                        if (field == cal.params.inputField) {
                            field = document.getElementById("start_date");
                            time -= Date.WEEK; // substract one week
                        } else {
                            time += Date.WEEK; // add one week
                        }
                        var date2 = new Date(time);
                        field.value = date2.print("%Y-%m-%d %H:%M");
                    }
                    Calendar.setup({
                        inputField     :    "date_a",   // id of the input field
                        ifFormat       :    "%Y-%m-%d %H:%M",       // format of the input field
                        showsTime      :    true,
                        timeFormat     :    "24",
                        onUpdate       :    catcalc
                    });
   
                </script>

            </td>
        </tr>
         <tr>
           <td bgcolor="#FFFFFF" width="60%">End Date</td>
        
                        <td bgcolor="#FFFFFF" width="100%">
                            <div class="form-group input-daterange">
            <input type="text" name="end_date" id="basic_example_2" autocomplete="off"/>

                <script type="text/javascript">
                    function catcalc(cal) {
                        var date = cal.date;
                        var time = date.getTime()
                        // use the _other_ field
                        var field = document.getElementById("f_calcdate");
                        if (field == cal.params.inputField) {
                            field = document.getElementById("end_date");
                            time -= Date.WEEK; // substract one week
                        } else {
                            time += Date.WEEK; // add one week
                        }
                        var date2 = new Date(time);
                        field.value = date2.print("%Y-%m-%d %H:%M");
                    }
                    Calendar.setup({
                        inputField     :    "date_a",   // id of the input field
                        ifFormat       :    "%Y-%m-%d %H:%M",       // format of the input field
                        showsTime      :    true,
                        timeFormat     :    "24",
                        onUpdate       :    catcalc
                    });
   
                </script>

            </td>
        </tr>
        <tr>
            <td>
            </td>

            <td><div class="d-blank"></div>
                <div class="d-login"></div><input type="submit" name="Submit" value=" View " class="login btn btn-primary">
            </td>
            </tr>
    </table>
</form>

</table>

</div>
</div>
</div>
<p>&nbsp;</p>
</td>
</tr>

    
    <link rel="stylesheet" href="../vendor/bootstrap/css/validate.css"/>
    <script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../dist/js/bootstrapValidator.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            
            permit_statu: {
                validators: {
                    notEmpty: {
                        message: 'The permit status is required and can\'t be empty'
                    }
                }
            },
            corporat:{
                validators: {
                    notEmpty: {
                        message: 'The corporate is required and can\'t be empty'
                    }
                }
            },
            start_dat: {
                validators: {
                    Empty: {
                        message: 'The start date is required and can\'t be empty'
                    }
                }
            },
             end_dat: {
                validators: {
                    Empty: {
                        message: 'The end date is required and can\'t be empty'
                    }
                }
            },
            acceptTerms: {
                validators: {
                    notEmpty: {
                        message: 'You have to accept the terms and policies'
                    }
                }
            }
        }
    });
});
</script>


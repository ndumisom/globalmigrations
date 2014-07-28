<link rel="stylesheet" media="all" type="text/css" href="../css/datepicker/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="../css/datepicker/jquery-ui-timepicker-addon.css" />
		
		
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
<tr><a href="index.php?page=sent_task" class="label label-info">Sent tasks</a></tr>
<??>
<tr>
<td>
<center>

<form name="task" method="post" class="uniForm" action="index.php?page=p_task_allocation" onsubmit="return validateTask()" id="demoForm">
    <h3><b style="color: #0000FF; text-decoration:; font: Helvetica, Arial, sans-serif;">Task Allocation</b> </h3> 
    <table width="50%" border="0" cellspacing="3" cellpadding="0">
        <tr>
            <td>&nbsp;</td>
            <td><?php
if (isset($_SESSION['msg'])) {
    echo '<span id="msg"><b>' . $_SESSION['msg'] . '</span></b>';
    unset($_SESSION['msg']);
}
if (isset($_SESSION['error'])) {
    echo '<span id="error"><b>' . $_SESSION['error'] . '</span></b/>';
    unset($_SESSION['error']);
}
?>
                    </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="hidden" name="clientID" value="<?php echo $userID; ?>" id="clientID" /></td>
        </tr>
        <tr>
            <td>Consultant</td>
            <td><fieldset>
            <div class="form-group">

                <select name="consultant" id="consultant">
                    <option value="">   Select    </option>  
                    <option value="Elsa">Elsa Van Loggerenberg</option>
                    <option value="Keith">Keith Lykert</option>
                    <option value="Eldorette">Eldorette Isaacson</option>
                    <option value="Kim ">Kim Van Niekerk</option>
                    <option value="Lisa">Lisa Haggard</option>
                    <option value="Elissa">Elissa Davie</option>
                    <option value="Leon ">Leon Isaacson</option>


                </select>
            </td>
        </tr>
        <tr>
            <td>Allocated task </td>
            <td>
            <div class="form-group">
                 <select name="allocated_task1" id="allocated_task">
                                <option value=""> Select  </option>

                                <option value="Advert - draft"> Advert - draft</option>
                                <option value="Advert - placement"/>Advert - placement</option>
                                <option value="Assistance with Doctor">Assistance with Doctor</option>
                                <option value="Benchmarking"/>Benchmarking</option>
                                <option value="Business Plan"/>Business Plan</option>
                                <option value="Call out Fees"/>Call out Fees</option>
                                <option value="Chartered Accountant Certificate"/>Chartered Accountant Certificate</option>
                                <option value="Company Registration (CC, Pty, Vat, etc)"/>Company Registration (CC, Pty, Vat, etc)</option>
                                <option value="Courier"/>Courier</option>
                                <option value="Courier services">Courier services</option>
                                <option value="Good Cause Period"/>Good Cause Period</option>
                                <option value="Handling Fees"/>Handling Fees</option>
                                <option value="Labour"/>Labour</option>
                                <option value="Legalisation"/>Legalisation</option>
                                <option value="Medical"/>Medical</option>
                                <option value="1"/>Other</option>
                                <option value="Other Services (CVs, Letters, etc)"/>Other Services (CVs, Letters, etc)</option>
                                <option value="Permit application"/>Permit application</option>
                                <option value="PR Attendance at Interviews"/>PR Attendance at Interviews</option>
                                <option value="Professional Fees"/>Professional Fees</option>
                                <option value="Request refund of overstay fine"/>Request refund of overstay fine</option>
                                <option value="Review - follow up"/>Review - follow up</option
                                <option value="Review - submit"/>Review - submit</option>
                                <option value="SAQA"/>SAQA</option>
                                <option value="Send copy of application to the hub"/>Send copy of application to the hub</option>
                                <option value="Telephonic follow up with the hub"/>Telephonic follow up with the hub</option>
                                <option value="Translation"/>Translation</option>
                                <option value="Urgent Applications"/>Urgent Applications</option>
                                <option value="Waiver- follow up"/>Waiver- follow up</option>
                                <option value="Waiver Request"/>Waiver Request</option>
                               
                                
                                
                                
                             
                            </select>
   <div id="txtHint"></div>    
            </td>
        </tr>
        <input type="hidden" name="allocated_by" id="allocated_by" value="<?php echo $_SESSION['log']; ?>" />
        <input type="hidden" name="allocated_to" id="allocated_to" value="<?php echo $_SESSION['log']; ?>" />

        </tr>
        <tr>
            <td>Due date </td>
            <td><input type="text" name="due_date" id="basic_example_1" autocomplete="off"/>

                <script type="text/javascript">
                    function catcalc(cal) {
                        var date = cal.date;
                        var time = date.getTime()
                        // use the _other_ field
                        var field = document.getElementById("f_calcdate");
                        if (field == cal.params.inputField) {
                            field = document.getElementById("due_date");
                            time -= Date.WEEK; // substract one week
                        } else {
                            time += Date.WEEK; // add one week
                        }
                        var date2 = new Date(time);
                        field.value = date2.print("%Y-%m-%d %H:%M");
                    }
                    // Calendar.setup({
                    //     inputField     :    "date_a",   // id of the input field
                    //     ifFormat       :    "%Y-%m-%d %H:%M",       // format of the input field
                    //     showsTime      :    true,
                    //     timeFormat     :    "24",
                    //     onUpdate       :    catcalc
                    // });
   
                </script>

            </td>
        </tr>

        <tr>
            <td valign="top">Details</td>
            <td><textarea name="details" id="details" cols="19" rows="5"><?php
                if ($userID) {
                    echo $firstname . " " . $surname . " " . $file_no;
                } else {
                    
                }
                ?></textarea></td>
        </tr>
        <tr>
            <td>
            </td>

            <td><div class="d-blank"></div>
                <div class="d-login"></div><input type="submit" name="Submit" value="Send task" class="login btn btn-primary" onclick="checkDate(document.getElementById('date').value)" id="submit"/>
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

<!--  <link rel="stylesheet" href="../vendor/bootstrap/css/validate.css"/> -->
    // <!-- <script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    // <script type="text/javascript" src="../dist/js/bootstrapValidator.js"></script> -->
<script type="text/javascript">
// $(document).ready(function() {
//     $('#demoForm').bootstrapValidator({
//         message: 'This value is not valid',
//         feedbackIcons: {
//             valid: 'glyphicon glyphicon-ok',
//             invalid: 'glyphicon glyphicon-remove',
//             validating: 'glyphicon glyphicon-refresh'
//         },
//         fields: {
            
//             consultant: {
//                 validators: {
//                     notEmpty: {
//                         message: 'The consultant is required and can\'t be empty'
//                     }
//                 }
//             },
//             allocated_task1:{
//                 validators: {
//                     notEmpty: {
//                         message: 'The allocated_task is required and can\'t be empty'
//                     }
//                 }
//             },
//             start_dat: {
//                 validators: {
//                     Empty: {
//                         message: 'The start date is required and can\'t be empty'
//                     }
//                 }
//             },
//              end_dat: {
//                 validators: {
//                     Empty: {
//                         message: 'The end date is required and can\'t be empty'
//                     }
//                 }
//             },
//             acceptTerms: {
//                 validators: {
//                     notEmpty: {
//                         message: 'You have to accept the terms and policies'
//                     }
//                 }
//             }
//         }
//     });
// });
</script>

<script type="text/javascript" src="../js/datepicker/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../js/datepicker/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/datepicker/jquery-ui-timepicker-addon.js"></script>
        <script type="text/javascript" src="../js/datepicker/jquery-ui-sliderAccess.js"></script>
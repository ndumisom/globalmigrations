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
        <a href="index.php?page=reports" style="color: ; text-decoration: ; font: Helvetica, Arial, sans-serif;" class="label label-info"> <b>Normal Report</b></a> <br/>
        <form action="index.php?page=view_file_opened" method="post">
                <table border="0" width="750" cellspacing="1" cellpadding="3" 
                       bgcolor="#353535" align="center">
              
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
                        <td bgcolor="#FFFFFF" colspan=2 align="center">
                            <input type="submit" name="Submit" value=" View " class="login btn btn-primary"> 
                        </td>

                    </tr>
                </table>
            </form>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <p>&nbsp;</p>
    </td> </tr></table>
    </div>
    </div>
    </div>
<p>&nbsp;</p>
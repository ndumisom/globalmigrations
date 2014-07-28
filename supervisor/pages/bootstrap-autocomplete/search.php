<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Language" content="en-us">
<title>Bootstrap Autocomplete</title>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/typeahead.js"></script> 
<script type="text/javascript" src="js/jquery.ui.autocomplete.js"></script>
<style>
h1{
font-size: 20px;
color: #111;
}
.content{
  width: 80%;
  margin: 0 auto;
  margin-top: 50px;
}


</style>
<script>
$(document).ready(function() {
$('input.typeahead-devs').typeahead({
  name: 'accounts',
  local: ['Sunday', 'Monday', 'Tuesday','Wednesday','Thursday','Friday','Saturday']
});

$('input#search_name').typeahead({
  name: 'country',
  remote : 'country.php?query=%QUERY'

});})
</script>
</head>
<body>

<form name="search_name" action="index.php?page=search_results" method="get" autocomplete="off" >
                        <input type="text" name="name" class="input-medium search-query country"   placeholder="Search"  id="search_name" required="required">
                        <input type="submit" name="submit" value="Search" class="btn btn-primary"/>
                  </form>
 
</body>
</html> -->
<!DOCTYPE html>
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

.tt-dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 14px;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}
.tt-suggestion > p {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.428571429;
  color: #333333;
  white-space: nowrap;
}
.tt-suggestion > p:hover,
.tt-suggestion > p:focus,
.tt-suggestion.tt-cursor p {
  color: #ffffff;
  text-decoration: none;
  outline: 0;
  background-color: #428bca;
}
</style>
<script>
$(document).ready(function() {

$('input#search').typeahead({
  name: 'country',
  remote : 'pages/country.php?query=%QUERY'

});})
</script>
</head>
<body>

<form name="search" action="index.php?page=search_results" method="get" autocomplete="off" class="input-append" >
                         <input type="hidden" name="page" value="search_results" >
                        <input type="text" name="name" class=""   placeholder="Search"  id="search" required="required">
                        <input type="submit" name="submit" value="Search" class="btn btn-primary"/>
                      
   

                        
                  </form>
 
</body>
</html>
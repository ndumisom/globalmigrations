<?php session_start();
$url = "http" . (($_SERVER['SERVER_PORT']==443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Global Migration | Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/global-migration-favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap1.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #0D26E2;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

.btn-primary {
color: #ffffff;
text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
background-color: #006dcc;
background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
background-image: -o-linear-gradient(top, #0088cc, #0044cc);
background-image: linear-gradient(to bottom, #0088cc, #0044cc);
background-repeat: repeat-x;
border-color: #0044cc #0044cc #002a80;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}
#error{

                border:1px solid #FF0033;
                width:350px; 
                padding-left:15px;
                padding-right:15px; 
                padding-bottom:8px; 
                padding-top:8px; 
                text-align:left;
                text-decoration:blink; 
                
                font-size:14px;
               
                color: #a94442;
background-color: #f2dede;
border-color: #ebccd1;

            }

    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">
        <br/><br/><br/><br/><br/>
      <form class="form-signin" method="post" action="p_l.php" name="log" >       
		<img src="images/globallogo.jpg" width="100%" alt=""/><p><?php

if( isset($_SESSION['er']) ){echo '<span id="error" class="alert alert-danger">'. $_SESSION['er'].'</span>'; unset($_SESSION['er']);}
 

       
  ?></p><br/>
		 <!--  Error message to be printed. <h2 class="form-signin-heading">Please sign in</h2> -->
        <input type="text" name="username" class="input-block-level" placeholder="Username" required>
        <input type="password" name="password" class="input-block-level" placeholder="Password " required>
        
        <button class="btn btn-primary" type="submit" name="login" onclick="v_login();">Sign in</button>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src=".js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script>
        function v_login(){
            var username = document.getElementById("username");
            var password = document.getElementById("password");
            
            if(username == null || username == "" ){
                
               document.getElementById('username').innerHTML = 'Please enter your username';
               
               return false;
            }
            
            if(password == null || password == ""){
                document.getElementById('password').innerHTML = 'Plase enter your password';
                return false;
            }
           
        }
    </script>
<script src="js/jqBootstrapValidation.js"></script>     
             <script>
  $(function () { $("input").not("[type=submit]").jqBootstrapValidation(); } );
</script>
  </body>
</html>

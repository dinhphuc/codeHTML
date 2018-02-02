<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      $query  = "SELECT * FROM `admin` WHERE username='$myusername' AND password='$mypassword'";
	  $result = mysql_query($query);
	  if( $result && mysql_num_rows($result) == 1 ) 
      {    
          $_SESSION['login_user'] = $myusername;  
         header("location: CaiDat.php");
	  }
	  else 
      {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         @import url(http://fonts.googleapis.com/css?family=Roboto:400);
body {
  background-color:#fff;
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
}

.container {
    padding: 25px;
    position: fixed;
}

.form-login {
    background-color: #EDEDED;
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    box-shadow:0 1px 0 #cfcfcf;
}

h4 { 
 border:0 solid #fff; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}

.wrapper {
    text-align: center;
}

      </style>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
   </head>
   
   <body bgcolor = "#FFFFFF">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
        <form action = "" method = "post">
            <div class="form-login">
                    <h4>Welcome back.</h4>
                 <input type="text"  name = "username" class="form-control input-sm chat-input" placeholder="username" />
                   </br>
                   <input type="password" name = "password" class="form-control input-sm chat-input" placeholder="password" />
                 </br>
                 <div class="wrapper">
                 <span class="group-btn">    
                  <input class="btn btn-primary btn-md" type = "submit" value = "Submit "/><br />
                 </span>
               </div>
            </div>
              </form>
         <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
        </div>
    </div>
    </div>
      
   </body>
</html>
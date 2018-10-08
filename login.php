<!-- IT15112538 K.G.D.R Perera!-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Specify the client ID you created for your app in the Google Developers Console with the google-signin-client_id meta element.
!-->
<meta name="google-signin-client_id" content="723786095395-8lomhnggclv4baum36f7oo6vb5orvct9.apps.googleusercontent.com">

<title>Demo App</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://apis.google.com/js/platform.js" async defer></script>

<style type="text/css">
    body {
        color: #999;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
  }
  .form-control {
    box-shadow: none;
    border-color: #ddd;
  }
  .form-control:focus {
    border-color: #4aba70; 
  }
  .login-form {
        width: 350px;
    margin: 0 auto;
    padding: 30px 0;
  }
    .login-form form {
        color: #434343;
    border-radius: 1px;
      margin-bottom: 15px;
        background: #fff;
    border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
  }
  .login-form h4 {
    text-align: center;
    font-size: 22px;
        margin-bottom: 20px;
  }
    .login-form .avatar {
        color: #fff;
    margin: 0 auto 30px;
        text-align: center;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    z-index: 9;
    background: #4aba70;
    padding: 15px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  }
    .login-form .avatar i {
        font-size: 62px;
    }
    .login-form .form-group {
        margin-bottom: 20px;
    }
  .login-form .form-control, .login-form .btn {
    min-height: 40px;
    border-radius: 2px; 
        transition: all 0.5s;
  }
  .login-form .close {
        position: absolute;
    top: 15px;
    right: 15px;
  }
  .login-form .btn {
    background: #4aba70;
    border: none;
    line-height: normal;
  }
  .login-form .btn:hover, .login-form .btn:focus {
    background: #42ae68;
  }
    .login-form .checkbox-inline {
        float: left;
    }
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .forgot-link {
        float: right;
    }
    .login-form .small {
        font-size: 13px;
    }
    .login-form a {
        color: #4aba70;
    }
</style>

<?php

require_once('settings.php');

?>

</head>
<body>

<div class="login-form">    
    <form action="" method="">
    <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
      <h4 class="modal-title">Login to Your Account</h4>
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Password" required="required">
        </div>
      
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">   
        <br>
        
        <a class="btn btn-primary btn-block  btn-lg active" href="<?= 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>">Login with <i class= "fa fa-google"></i>oogle</a>    
       
      </form> 

    <div class="text-center small">Demo application : <a href="#">OAuth 2.0 framework</a></div>
</div>
</body>
</html>                                                               
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Signin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="CodedThemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Login</h3>
                    
                    <form role="form" action="/hms/hms/models/models.php" method="post" name="loginform">
                        
                    <div class="input-group mb-3">
                        <input id='username'  name='username' type="text" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="input-group mb-4">
                        <input id='password' name='password' type="password" class="form-control" placeholder="password" required>
                    </div>
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" >
                           
                        </div>
                    </div>
                             <button  type="submit" name="login" class="btn btn-primary shadow-2 mb-4">Login</button>
                        
                    </form>
                    	<span class="text-danger">
                
            </span>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>

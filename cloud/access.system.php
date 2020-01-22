<?php
require '../mvc/cloud/cloud.php';
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>ACCESS SYSTEM - Coop360 Login Portal</title>
  <link rel="apple-touch-icon" href="<?php echo $base_host; ?>app-assets/images/ico/apple-icon-120.png">
  <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_host; ?>app-assets/images/ico/favicon.ico"> -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/vendors/css/forms/icheck/custom.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/app.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/pages/login-register.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>assets/css/style.css">
</head>
<body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu" data-col="1-column">
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="<?php echo $base_host; ?>img/coop-logo.png" alt="branding logo" style="width: 50%;">
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span><b>LOGIN TO SYSTEM</b></span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal form-simple cloud-access">
                      <fieldset class="form-group position-relative has-icon-left mb-0">
                        <input type="text" class="form-control form-control-lg input-lg common" id="user-name" placeholder="system username"
                        required autocomplete="off" name="username_imputed">
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <br><br>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control form-control-lg input-lg common" id="user-password"
                        placeholder="system password" required autocomplete="off" name="password_imputed">
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-md-left">
                          <fieldset>
                            &nbsp;
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 text-center text-md-right">
                          
                        </div>
                      </div>
                      <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="">
                    <p class="float-sm-left text-center m-0"><a href="#!" class="card-link">CONNECTED</a></p>
                    <p class="float-sm-right text-center m-0 infomer">Uhuru Cloud 360 System <a href="register-simple.html" class="card-link"></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <script src="<?php echo $base_host; ?>app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <script src="<?php echo $base_host; ?>app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="<?php echo $base_host; ?>app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  <script src="<?php echo $base_host; ?>app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="<?php echo $base_host; ?>app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="<?php echo $base_host; ?>app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
  <script>
        $(".common").click(function(){$(".infomer").html("");return false;});
        $(".cloud-access").submit(function(){
            $(".infomer").html("<br><br><span class='alert alert-info'><b>Connecting....</b></span>");
                $.ajax({
                    type:"post",
                    url:"<?php echo $base_host; ?>mvc/controllers/auth-user",
                    data:$(".cloud-access").serialize(),
                    success: function(medusa_resp){
                        if(medusa_resp=='super-admin'){
                            window.location="<?php echo $base_host; ?>cloud/super-dash.system";
                        }else if(medusa_resp=='admin'){
                            window.location="<?php echo $base_host; ?>cloud/super-dash.system";
                        }else if(medusa_resp=='data-entrant-user'){
                            window.location="<?php echo $base_host; ?>cloud/super-dash.system";
                        }else if(medusa_resp=='data-entrant'){
                            window.location="<?php echo $base_host; ?>cloud/super-dash.system";
                        }else if(medusa_resp=='locked'){
                            $(".infomer").html("<br><br><span class='alert alert-danger'><b>Account Blocked.</b></span>");
                        }else if(medusa_resp=='invalid'){
                            $(".infomer").html("<br><br><span class='alert alert-danger'><b>Access Denied.</b></span>");
                        }else{
                            $(".infomer").html("<br><br><span class='alert alert-danger'><b>ERROR CODE-EX43</b></span>");
                        }
                    }
                });
            return false;
        });
    </script>
</body>
</html>
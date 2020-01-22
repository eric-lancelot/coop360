<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="#!">
              <img class="brand-log" alt="modern admin logo" src="<?php echo $base_host; ?>img/coop-logo.png" style="width: 70%;">
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <?php
                    if($UserRole=='super-admin'){
                      ?>
                      <span style="color: #464855; font-family: sans-serif;"><b>Role : Super Administrator</b></span>
                      <?php
                    }else if($UserRole=="admin"){
                      ?>
                      <span style="color: #464855; font-family: sans-serif;"><b>Role : System Administrator</b></span>
                      <?php
                    }else if($UserRole=='data-entrant-user'){
                      ?>
                      <span style="color: #464855; font-family: sans-serif;"><b>Role : Data Entrant</b></span>
                      <?php
                    }else if($UserRole=='data-entrant'){
                      ?>
                      <span style="color: #464855; font-family: sans-serif;"><b>Role : Super Data Entrant</b></span>
                      <?php
                    }
                  ?>
                <span class="mr-1"><b>&nbsp;&nbsp;</b>|
                  <span class="user-name text-bold-700"><?php echo $UserAccountName; ?></span>
                </span>
              </a>
            </li>
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="<?php echo $base_host; ?>cloud/exit-system">
                <i class="ficon ft-lock"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
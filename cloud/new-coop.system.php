<?php
require '../asset-core/head-start.php';
require '../asset-core/top-head-start.php';
require '../asset-core/nav-start.php';
?>

<style type="text/css">
  label{
    font-weight: bold;
  }
</style>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">ADD NEW SYSTEM COOPERATIVE</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <section id="demo">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <form action="#" class="number-tab-steps wizard-circle">
                      <!-- different sections -->
                      <h6>&nbsp;</h6>
                      <?php
                        require 'introduction.php';
                        require 'administrative.php';
                        require 'cooperative_membership.php';
                        require 'cooperative_business.php';
                        require 'agm.php';
                        require 'risk.php';
                        require 'financial.php';
                        require 'policy.php';
                        require 'history.php';
                      ?>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php
require '../asset-core/footer-start.php';
?>
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
                    <form action="#" class="number-tab-steps wizard-circle coop_form">
                      <!-- Step 1 -->
                      <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName1"><b>Cooperative Name</b></label>
                              <input type="text" class="form-control" id="cooperative_name" name="cooperative_name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastName1">Profiled by</label>
                              <input type="text" class="form-control" id="name_of_profiler" name="name_of_profiler">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">Date of Profiling</label>
                              <input type="date" class="form-control" id="date_of_profiling" name="date_of_profiling">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">Respondent Name</label>
                              <input type="text" class="form-control" id="respondent_name" name="respondent_name">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Respondent’s Telephone</label>
                              <input type="tel" class="form-control" id="respondent_tel" name="respondent_tel">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">Respondent’s Email</label>
                              <input type="text" class="form-control" id="respondent_email" name="respondent_email">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">Respondent’s role at the Cooperative</label>
                              <input type="text" class="form-control" id="respondent_role" name="respondent_role">
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName1">Registered Cooperative name in full</label>
                              <input type="text" class="form-control" id="registered_cooperative_name" name="registered_cooperative_name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastName1">Probationary Registration Date</label>
                              <input type="date" class="form-control" id="prob_reg_date" name="prob_reg_date">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">Probationary Registration Number</label>
                              <input type="text" class="form-control" id="prob_reg_number" name="prob_reg_number">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="pwd">Permanent Registration Date</label>
                              <input type="date" class="form-control" id="permanent_reg_date" name="permanent_reg_date">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">Permanent Registration Number</label>
                              <input type="text" class="form-control" id="permanent_reg_number" name="permanent_reg_number">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">District</label>
                              <input type="text" class="form-control" id="district" name="district">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">Sub County</label>
                              <input type="text" class="form-control" id="sub_county" name="sub_county">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Parish</label>
                              <input type="text" class="form-control" id="parish" name="parish">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">Village</label>
                              <input type="text" class="form-control" id="village" name="village">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="pwd">Does Cooperative Have Physical Office</label>
                              <select name="physical_office" id="physical_office" class="form-control">
                                <option value="">Choose</option>
                                <option value="YES"><b>YES WE HAVE</b></option>
                                <option value="NO"><b>NO WE DONT</b></option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="pwd">Has your cooperative lost any property(s) in the past</label>
                              <select name="lost_property" id="lost_property" class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label>If yes, what caused the loss</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" class="loss_value" value="Wars">&nbsp; Wars</li>
                                <li><input type="checkbox" class="loss_value" value="Natural disaster">&nbsp; Natural disaster</li>
                                <li><input type="checkbox" class="loss_value" value="Debt">&nbsp; Debt</li>
                                <li><input type="checkbox" class="loss_value" value="Internal fraud">&nbsp; Internal fraud</li>
                                <li><input type="checkbox" class="loss_value" value="None">&nbsp; None</li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="pwd">Have you ever heard about the former Cooperative Bank</label>
                              <select name="heard_former_cop_bank" id="heard_former_cop_bank" class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label for="pwd">If yes, was your cooperative a share-holder of the former Cooperative Bank</label>
                              <select name="share_holder_former_cop_bank" id = "share_holder_former_cop_bank" class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label for="pwd">Did your Cooperative have an account in the former Cooperative Bank</label>
                              <select name="former_cop_bank_acct" id="former_cop_bank_acct" class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="pwd">Did you make any losses when the Cooperative Bank was closed in 1999</label>
                              <select name="any_losses" id="any_losses" class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label>If yes, in what form</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" class="loss_form" value="We lost money in deposit accounts">&nbsp; We lost money in deposit accounts</li>
                                <li><input type="checkbox" class="loss_form" value="We lost money in paying debts">&nbsp; We lost money in paying debts</li>
                                <li><input type="checkbox" class="loss_form" value="Not applicable">&nbsp; Not applicable</li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="pwd">Quantify the Loss in monetary terms if Assets were lost. If Money was lost, please state how much</label>
                              <input type="text" name="amount_of_loss" id="amount_of_loss" class="form-control">
                              <br><br>
                              <label>Would you support a new Cooperative Bank</label>
                              <select name="support_for_new_cop_bank" id="support_for_new_cop_bank" class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label>Did your cooperative have shares in the Cooperative Insurance Company of Uganda</label>
                              <select name="shares_in_cop_insurance_co" id="shares_in_cop_insurance_co" class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="pwd">Do you currently hold any shares in current Cooperative Insurance Company of Uganda</label>
                              <select name="shares_in_current_cop_insurance_co" id="shares_in_current_cop_insurance_co" class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Does your cooperative have shares in any defunct cooperative</label>
                              <select name="shares_in_any_defunct_cop" id="shares_in_any_defunct_cop" class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br>
                              <label>If yes, please specify</label>
                              <input type="text" name="specify_shares_in_defunct_cop" id="specify_shares_in_defunct_cop" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="">
                            <p class="float-sm-left text-center m-0"><a href="#!" class="card-link">CONNECTED</a></p>
                            <p class="float-sm-right text-center m-0 infomer">Uhuru Cloud 360 System <a href="register-simple.html" class="card-link"></a></p>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Form wizard with vertical tabs section end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php
require '../asset-core/footer-start.php';
?>

<script>
  var cooperative_name = $('#cooperative_name').val();
  var name_of_profiler = $('#name_of_profiler').val();
  var date_of_profiling = $('#date_of_profiling').val();
  var respondent_name = $('#respondent_name').val();
  var respondent_tel = $('#respondent_tel').val();
  var respondent_email = $('#respondent_email').val();
  var respondent_role = $('#respondent_role').val();
  var registered_cooperative_name = $('#registered_cooperative_name').val();
  var prob_reg_date = $('#prob_reg_date').val();
  var prob_reg_number = $('#prob_reg_number').val();
  var permanent_reg_number = $('#permanent_reg_number').val();
  var permanent_reg_date = $('#permanent_reg_date').val();
  var district = $('#district').val();
  var sub_county = $('#sub_county').val();
  var parish = $('#parish').val();
  var village = $('#village').val();
  var physical_office = $('#physical_office').val();
  var lost_property = $('#lost_property').val();
  var loss_value = $('#loss_value').val();
  var heard_former_cop_bank = $('#heard_former_cop_bank').val();
  var share_holder_former_cop_bank = $('#share_holder_former_cop_bank').val();
  var former_cop_bank_acct = $('#former_cop_bank_acct').val();
  var any_losses = $('#any_losses').val();
  var amount_of_loss = $('#amount_of_loss').val();
  var support_for_new_cop_bank = $('#support_for_new_cop_bank').val();
  var shares_in_cop_insurance_co = $('#shares_in_cop_insurance_co').val();
  var shares_in_current_cop_insurance_co = $('#shares_in_current_cop_insurance_co').val();
  var shares_in_any_defunct_cop = $('#shares_in_any_defunct_cop').val();
  var specify_shares_in_defunct_cop = $('#specify_shares_in_defunct_cop').val();
  var loss_value_list = [];
  var loss_form_list = [];

  var info = {
    cooperative_name: cooperative_name, name_of_profiler: name_of_profiler, date_of_profiling: date_of_profiling, respondent_name: respondent_name,
    respondent_tel: respondent_tel, respondent_email: respondent_email, respondent_role: respondent_role, registered_cooperative_name: registered_cooperative_name,
    prob_reg_date: prob_reg_date, prob_reg_number: prob_reg_number, permanent_reg_number: permanent_reg_number, permanent_reg_date: permanent_reg_date,
    district: district, sub_county: sub_county, parish: parish, village: village, physical_office: physical_office, lost_property: lost_property,loss_value_list: loss_value_list,
    heard_former_cop_bank: heard_former_cop_bank, share_holder_former_cop_bank: share_holder_former_cop_bank, former_cop_bank_acct: former_cop_bank_acct,
    any_losses: any_losses, loss_form_list: loss_form_list, amount_of_loss: amount_of_loss, support_for_new_cop_bank: support_for_new_cop_bank, shares_in_cop_insurance_co: shares_in_cop_insurance_co,
    shares_in_current_cop_insurance_co: shares_in_current_cop_insurance_co, shares_in_any_defunct_cop: shares_in_any_defunct_cop, specify_shares_in_defunct_cop: specify_shares_in_defunct_cop
  }
   $(document).ready(function(){
    //  $('.coop_form').submit(function(){
       
    //  })
     
     onFinished: function () {
     
      alert("data submitted 687390873");
     
      }
    //  $('#finish').click(function(){
    //   $('.loss_value').each(function(){
    //       if($(this).is(":checked")){
    //         loss_value_list.push($(this).val());
    //       }
    //   });

    //   loss_value_list = loss_value_list.toString();
    //   $('.loss_form').each(function(){
    //     if($(this).is(":checked")){
    //       loss_form_list.push($(this).val());
    //     }
    //   });
    //   loss_form_list = loss_form_list.toString();
    //   $.ajax({
    //     url:"<?php echo $base_host; ?>mvc/controllers/insert",
    //     method:"POST",
    //     data: info,
    //     success:function(response){
    //       $(".infomer").html("<br><br><span class='alert alert-info'><b>Data added successfully !</b></span>");
    //     }
    //   })
    // })
  })
</script>



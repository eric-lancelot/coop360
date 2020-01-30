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
<script type="text/javascript">
  $(document).click(function(){

    $('a[href="#finish"]').hide();
    $("li[style='']").html("<button class='btn btn-info camelot-remit' type='submit'>Add new Cooperative</button>");
    $(".camelot-remit").click(function(){
      var loss_value_list = [];
      var loss_form_list = [];
      var if_yes_list =  [];  
      var coop_business_list = [];
      var coop_products_list = [];
      var coop_minerals_list = [];
      var standardized_agency_list = [];
      var product_names = [];
      var product_qty = [];
      var business_names = [];
      var annual_turnover_list = [];
      var channels_for_marketing_list = []
      var location_for_marketing_list = [];
      var challenges_list = [];
      var coop_refer_list = [];
      var any_coop_conflict_before_list = [];
      var keep_records_list = [];
      var coop_reserves_list = [];
      var coop_money_ways_list = [];
      var have_any_account_list = [];
      var coop_insurance_policy_type_list = [];
      var common_internal_risks_list = [];
      var coop_external_risks_list = [];
      var coop_agm = [];
      var coop_committees_list = [];
      var recruited_list = [];
      var specify_taxes_list = [];
      var coop_policies_list = [];
      var no_policies_list = [];
      var affiliated_bodies_list = [];
      var coop_assets_list = [];
      var own_or_rent_premise_list = [];
      var title_docs = [];
      var purchase_agreement = [];
      var coop_partners_list = [];
      var finance_sources_list = [];
      var loan_type_list = [];
      var loan_repayment_list = [];
      var loan_source_list = [];
      var loan_repayment_frequency_list = [];
      var loans_per_annum_list = [];
      var interest_on_loans_list = [];
      
      $('.loss_value').each(function(){
          if($(this).is(":checked")){
            loss_value_list.push($(this).val());
          }
      });

      loss_value_list = loss_value_list.toString();

      $('.loss_form').each(function(){
        if($(this).is(":checked")){
          loss_form_list.push($(this).val());
        }
      });
      loss_form_list = loss_form_list.toString();

      $('.if_yes').each(function(){
        if($(this).is(":checked")){
          if_yes_list.push($(this).val());
        }
      });
      if_yes_list = if_yes_list.toString();

      $('.coop_business').each(function(){
        if($(this).is(":checked")){
          coop_business_list.push($(this).val());
        }
      });
      coop_business_list = coop_business_list.toString();

      $('.coop_products' ).each(function(){
        if($(this).is(":checked")){
          coop_products_list.push($(this).val());
        }
      });
      coop_products_list = coop_products_list.toString();

      $('.coop_minerals').each(function(){
        if($(this).is(":checked")){
          coop_minerals_list.push($(this).val());
        }
      });
      coop_minerals_list = coop_minerals_list.toString();

      $('.standardized_agency').each(function(){
        if($(this).is(":checked")){
          standardized_agency_list.push($(this).val());
        }
      });
      standardized_agency_list = standardized_agency_list.toString();

      $('.product_name').each(function(){
        product_names.push($(this).val());
      });
      product_names = product_names.toString();

      $('.product_qty').each(function(){
        product_qty.push($(this).val());
      });
      product_qty = product_qty.toString();

      $('.business_name').each(function(){
        business_names.push($(this).val());
      });
      business_names = business_names.toString();

      $('.annual_turnover').each(function(){
        annual_turnover_list.push($(this).val());
      });
      annual_turnover_list = annual_turnover_list.toString();

      $('.channels_for_marketing').each(function(){
        if($(this).is(":checked")){
          channels_for_marketing_list.push($(this).val());
        }
      });
      channels_for_marketing_list = channels_for_marketing_list.toString();

      $('.location_for_marketing').each(function(){
        if($(this).is(":checked")){
          location_for_marketing_list.push($(this).val());
        }
      });
      location_for_marketing_list = location_for_marketing_list.toString();

      $('.challenges_list').each(function(){
        if($(this).is(":checked")){
          challenges_list.push($(this).val());
        }
      });
      challenges_list = challenges_list.toString();

      $('.coop_refer').each(function(){
        if($(this).is(":checked")){
          coop_refer_list.push($(this).val());
        }
      });
      coop_refer_list = coop_refer_list.toString();

      $('.any_coop_conflict_before').each(function(){
        if($(this).is(":checked")){
          any_coop_conflict_before_list.push($(this).val());
        }
      });
      any_coop_conflict_before_list = any_coop_conflict_before_list.toString();

      $('.keep_records').each(function(){
        if($(this).is(":checked")){
          keep_records_list.push($(this).val());
        }
      });
      keep_records_list = keep_records_list.toString();

      $('.coop_reserves').each(function(){
        if($(this).is(":checked")){
          coop_reserves_list.push($(this).val());
        }
      });
      coop_reserves_list = coop_reserves_list.toString();

      $('.coop_money_ways').each(function(){
        if($(this).is(":checked")){
          coop_money_ways_list.push($(this).val());
        }
      });
      coop_money_ways_list = coop_money_ways_list.toString();

      $('.have_any_account').each(function(){
        if($(this).is(":checked")){
          have_any_account_list.push($(this).val());
        }
      });
      have_any_account_list = have_any_account_list.toString();

      $('.coop_insurance_policy_type').each(function(){
        if($(this).is(":checked")){
          coop_insurance_policy_type_list.push($(this).val());
        }
      });
      coop_insurance_policy_type_list = coop_insurance_policy_type_list.toString();

      $('.common_internal_risks').each(function(){
        if($(this).is(":checked")){
          common_internal_risks_list.push($(this).val());
        }
      });
      common_internal_risks_list = common_internal_risks_list.toString();

      $('.coop_external_risks').each(function(){
        if($(this).is(":checked")){
          coop_external_risks_list.push($(this).val());
        }
      });
      coop_external_risks_list = coop_external_risks_list.toString();

      $('.coop_agm').each(function(){
        if($(this).is(":checked")){
          coop_agm.push($(this).val());
        }
      });
      coop_agm = coop_agm.toString();

      $('.coop_committees').each(function(){
        if($(this).is(":checked")){
          coop_committees_list.push($(this).val());
        }
      });
      coop_committees_list = coop_committees_list.toString();

      $('.recruited').each(function(){
        if($(this).is(":checked")){
          recruited_list.push($(this).val());
        }
      });
      recruited_list = recruited_list.toString();

      $('.specify_taxes').each(function(){
        if($(this).is(":checked")){
          specify_taxes_list.push($(this).val());
        }
      });
      specify_taxes_list = specify_taxes_list.toString();

      $('.coop_policies').each(function(){
        if($(this).is(":checked")){
          coop_policies_list.push($(this).val());
        }
      });
      coop_policies_list = coop_policies_list.toString();

      $('.no_policies').each(function(){
        if($(this).is(":checked")){
          no_policies_list.push($(this).val());
        }
      });
      no_policies_list = no_policies_list.toString();

      $('.affiliated_bodies').each(function(){
        if($(this).is(":checked")){
          affiliated_bodies_list.push($(this).val());
        }
      });
      affiliated_bodies_list = affiliated_bodies_list.toString();

      $('.coop_assets').each(function(){
        if($(this).is(":checked")){
          coop_assets_list.push($(this).val());
        }
      });
      coop_assets_list = coop_assets_list.toString();

      $('.own_or_rent_premise').each(function(){
        if($(this).is(":checked")){
          own_or_rent_premise_list.push($(this).val());
        }
      });
      own_or_rent_premise_list = own_or_rent_premise_list.toString();

      $('.title_docs').each(function(){
        if($(this).is(":checked")){
          title_docs.push($(this).val());
        }
      });
      title_docs = title_docs.toString();

      $('.purchase_agreement').each(function(){
        if($(this).is(":checked")){
          purchase_agreement.push($(this).val());
        }
      });
      purchase_agreement = purchase_agreement.toString();

      $('.coop_partners').each(function(){
        if($(this).is(":checked")){
          coop_partners_list.push($(this).val());
        }
      });
      coop_partners_list = coop_partners_list.toString();

      $('.finance_sources').each(function(){
        if($(this).is(":checked")){
          finance_sources_list.push($(this).val());
        }
      });
      finance_sources_list = finance_sources_list.toString();

      $('.loan_type').each(function(){
        if($(this).is(":checked")){
          loan_type_list.push($(this).val());
        }
      });
      loan_type_list = loan_type_list.toString();

      $('.loan_repayment').each(function(){
        if($(this).is(":checked")){
          loan_repayment_list.push($(this).val());
        }
      });
      loan_repayment_list = loan_repayment_list.toString();

      $('.loan_source').each(function(){
        if($(this).is(":checked")){
          loan_source_list.push($(this).val());
        }
      });
      loan_source_list = loan_source_list.toString();

      $('.loan_repayment_frequency').each(function(){
        if($(this).is(":checked")){
          loan_repayment_frequency_list.push($(this).val());
        }
      });
      loan_repayment_frequency_list = loan_repayment_frequency_list.toString();

      $('.loans_per_annum').each(function(){
        if($(this).is(":checked")){
          loans_per_annum_list.push($(this).val());
        }
      });
      loans_per_annum_list = loans_per_annum_list.toString();

      $('.interest_on_loans').each(function(){
        if($(this).is(":checked")){
          interest_on_loans_list.push($(this).val());
        }
      });
      interest_on_loans_list = interest_on_loans_list.toString();

      $.ajax({
          type: "POST",
          url: "<?php echo $base_host; ?>mvc/controllers/insert.system",
          data: $(".register-core").serialize(),
          success: function(response_down_hydra){
            console.log(response_down_hydra);
          }

      });
      return false;
    });


    return false;
  });
  
</script>
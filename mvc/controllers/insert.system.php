<?php

require '../cloud/cloud.php';
// cooperative information
  $cop_name=$_POST['cooperative_name'];
  $profiler=$_POST['name_of_profiler'];
  $date_of_profiling = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['date_of_profiling'])));
  $respondent_name = $_POST['respondent_name'];
  $respondent_tel = $_POST['respondent_tel'];
  $respondent_email= $_POST['respondent_email'];
  $respondent_role = $_POST['respondent_role'];
  $registered_cooperative_name = $_POST['registered_cooperative_name'];
  $prob_reg_date = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['prob_reg_date'])));
  $prob_reg_number = $_POST['prob_reg_number'];
  $permanent_reg_number = $_POST['permanent_reg_number'];
  $permanent_reg_date = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['permanent_reg_date'])));
  $district = $_POST['district'];
  $sub_county = $_POST['sub_county'];
  $parish = $_POST['parish'];
  $village = $_POST[' village'];
  $physical_office =  $_POST['physical_office'];
  $lost_property = $_POST['lost_property'];
  $loss_value_list = $_POST['loss_value_list'];
  $heard_former_cop_bank = $_POST['heard_former_cop_bank'];
  $share_holder_former_cop_bank = $_POST['share_holder_former_cop_bank'];
  $former_cop_bank_acct = $_POST['former_cop_bank_acct'];
  $any_losses = $_POST['any_losses'];
  $loss_form_list = $_POST['loss_form_list'];
  $amount_of_loss = (int) $_POST['amount_of_loss'];
  $support_for_new_cop_bank = $_POST['support_for_new_cop_bank'];
  $shares_in_cop_insurance_co = $_POST['shares_in_cop_insurance_co'];
  $shares_in_current_cop_insurance_co = $_POST['shares_in_current_cop_insurance_co'];
  $shares_in_any_defunct_cop = $_POST['shares_in_any_defunct_cop'];
  $specify_shares_in_defunct_cop = $_POST['specify_shares_in_defunct_cop'];
   
  // cooperative membership analysisinfo
  $fully_paid_members= (int) $_POST['fully_paid_members'];
  $partially_paid_members= (int) $_POST['partially_paid_members'];
  $demographic_details = $_POST['demographic_details'];
  $from_15_to_25 = (int) $_POST['from_15_25'];
  $from_26_to_35= (int) $_POST['from_26_to_35'];
  $from_36_to_45 = (int) $_POST['from_36_to_45'];
  $from_46_60 = (int) $_POST['from_46_60'];
  $from_61_to_older =  (int) $_POST['from_61_to_older'];
  $ple = (int) $_POST['ple'];
  $uce = (int) $_POST['uce'];
  $uace = (int) $_POST['uace'];
  $undergraduate = (int) $_POST['undergraduate'];
  $post_graduate = (int) $_POST[' post_graduate'];
  $not_applicable =  (int) $_POST['not_applicable'];
  $members_left =  (int) $_POST['lost_property'];
  $dormant_members = (int) $_POST['dormant_members'];
  $active_members = (int) $_POST['active_members'];
  $status = $_POST['status'];
  $no_of_farmers = (int) $_POST['former_cop_bank_acct'];
  $no_of_teachers = (int) $_POST['any_losses'];
  $no_of_medical = (int) $_POST['loss_form_list'];
  $no_of_legal_practitioners = (int) $_POST['amount_of_loss'];
  $social_devt_nos = (int) $_POST['social_devt_nos'];
  $no_of_finance =  (int) $_POST['no_of_finance'];
  $no_marketers = (int) $_POST['no_marketers'];
  $no_of_engineers = (int) $_POST['no_of_engineers'];
  $no_of_manual_labor = (int) $_POST['no_of_manual_labor'];
  $other_occupation = $_POST['other_occupation'];
  $if_yes_list = $_POST['if_yes_list'];
  $non_member_beneficiaries_no = (int) $_POST[' non_member_beneficiaries_no'];
  $member_group_nos =  (int) $_POST['member_group_nos'];
  $no_of_groups = (int) $_POST['no_of_groups'];
  $reason1 = $_POST['reason1'];
  $reason2 = $_POST['reason2'];
  $reason3 = $_POST['reason3'];


  // cooperative business
  $coop_business_list = $_POST['coop_business_list'];
  $sacco_non_financial_services = $_POST['sacco_non_financial_services'];
  $reason_1 = $_POST['reason_1'];
  $reason_2 = $_POST['reason_2'];
  $reason_3 = $_POST[' reason_3'];
  $business_status =  $_POST['business_status'];
  $any_irrigation_system = $_POST['any_irrigation_system'];
  $annual_turnover = (int) $_POST['annual_turnover'];
  $business_names = $_POST['business_names'];
  $annual_turnover_list = $_POST['annual_turnover_list'];

  // cooperative products
  $coop_products_list = $_POST['coop_products_list'];
  $coop_minerals_list = $_POST['coop_minerals_list'];
  $raw_material_supplier = $_POST['raw_material_supplier'];
  $value_addition = $_POST['value_addition'];
  $value_addition_activities = $_POST['value_addition_activities'];
  $products_standardized = $_POST['products_standardized'];
  $standardized_agency_list = $_POST['standardized_agency_list'];
  $standard_measurement_scale = $_POST['standard_measurement_scale'];
  $total_qty = (int) $_POST['total_qty'];
  $product_names = $_POST['product_names'];
  $product_qty = (int) $_POST['product_qty'];
  $selling_period = $_POST['selling_period'];
  $channels_for_marketing_list = $_POST[' channels_for_marketing_list'];
  $location_for_marketing_list =  $_POST['location_for_marketing_list'];
  $coop_exports = $_POST['coop_exports'];
  $transport_to_and_from = (int) $_POST['transport_to_and_from'];
  $distance = (int) $_POST['distance'];
  $challenges_list = $_POST['challenges_list'];

  //policy
  $coop_in_national_policy_devt = $_POST['coop_in_national_policy_devt'];
  $coop_refer_list = $_POST['coop_refer_list'];
  $copy_docs_mentioned = $_POST['copy_docs_mentioned'];
  $members_read_them = $_POST['members_read_them'];
  $coop_act_amendment = $_POST['coop_act_amendment'];
  $un_resolved_conflict = $_POST['un_resolved_conflict'];
  $any_coop_conflict_before_list = $_POST['any_coop_conflict_before_list'];
  $no_of_unresolved_cases = $_POST['no_of_unresolved_cases'];
 

  //risk
  $business_plan = $_POST['business_plan'];
  $business_plan_participation = $_POST['business_plan_participation'];
  $no_business_plan = $_POST['no_business_plan'];
  $keep_records_list = $_POST['keep_records_list'];
  $any_coop_software = $_POST['any_coop_software'];
  $coop_software = $_POST['coop_software'];
  $keep_reserves = $_POST['keep_reserves'];
  $coop_reserves_list = $_POST['coop_reserves_list'];
  $coop_money_ways_list = $_POST['coop_money_ways_list'];
  $coop_insurance_policy = $_POST['coop_insurance_policy'];
  $have_any_account_list = $_POST['have_any_account_list'];
  $members_read_them = $_POST['members_read_them'];
  $coop_act_amendment = $_POST['coop_act_amendment'];
  $un_resolved_conflict = $_POST['un_resolved_conflict'];
  $any_coop_conflict_before_list = $_POST['any_coop_conflict_before_list'];
  $coop_insurance_policy_type_list = $_POST['coop_insurance_policy_type_list'];
  $common_internal_risks_list = $_POST['common_internal_risks_list'];
  $coop_external_risks_list = $_POST['coop_external_risks_list'];
 

  // agm
  $coop_agm = $_POST['coop_agm'];
  $inception = $_POST['inception'];
  $quorum_coop = $_POST['quorum_coop'];
  $observe_quorum_agm = $_POST['observe_quorum_agm'];
  $attend_last_agm = (int) $_POST['attend_last_agm'];
  $members_participation_in_electing_committee_members = $_POST['members_participation_in_electing_committee_members'];
  $audit_report = $_POST['audit_report'];
  $audit_financial_reports = $_POST['audit_financial_reports'];
  $ministry_of_trade_rep = $_POST['ministry_of_trade_rep'];
  $coop_committees_list = $_POST['coop_committees_list'];
  $coop_hold_elections = $_POST['coop_hold_elections'];
  $vetting_commitee = (int) $_POST['vetting_commitee'];
  $board_commitee = (int) $_POST['board_commitee'];
  $supervisory_commitee = (int) $_POST['supervisory_commitee'];
  $issue_any_contracts = $_POST['issue_any_contracts'];
  $managerial_team = $_POST['managerial_team'];
  $recruited_list = $_POST['recruited_list'];
  $no_managerial_team = $_POST['no_managerial_team'];
  $hiring_graduates = $_POST['hiring_graduates'];
  $why_yes = $_POST['why_yes'];
  $why_no = $_POST['why_no'];
  $no_of_employees = (int) $_POST['no_of_employees'];
  $coop_issue_contracts = $_POST['coop_issue_contracts'];
  $coop_financial_reports = $_POST['coop_financial_reports'];
  $any_internal_auditor = $_POST['any_internal_auditor'];
  $engage_external_auditors = $_POST['engage_external_auditors'];
  $DCO = $_POST['DCO'];
  $qualified_audit_firm = $_POST['qualified_audit_firm'];
  $why_yes = $_POST['engage_external_auditors'];
  $why_no = $_POST['last_audit_done'];
  $remit_taxes = $_POST['remit_taxes'];
  $specify_taxes_list = $_POST['specify_taxes_list'];
  $coop_policies_list = $_POST['coop_policies_list'];
  $no_policies_list = $_POST['no_policies_list'];
  $affiliated_bodies_list = $_POST['affiliated_bodies_list'];

  //financial
  $any_coop_assets = $_POST['any_coop_assets'];
  $coop_assets_list = $_POST['coop_assets_list'];
  $own_store = $_POST['own_store'];
  $store_size = $_POST['store_size'];
  $machinery_asset_1 = $_POST['machinery_asset_1'];
  $machinery_asset_2 = $_POST['machinery_asset_2'];
  $machinery_asset_3 = $_POST['machinery_asset_3'];
  $own_or_rent_premise_list = $_POST['own_or_rent_premise_list'];
  $land_size = $_POST['land_size'];
  $title_docs = $_POST['title_docs'];
  $purchase_agreement = $_POST['purchase_agreement'];
  $why_is_this_so = $_POST['why_is_this_so'];
  $coop_partners_list = $_POST['coop_partners_list'];
  $finance_sources_list = $_POST['finance_sources_list'];
  $shares = $_POST['shares'];
  $business_income = $_POST['business_income'];
  $grants = $_POST['grants'];
  $loans = $_POST['loans'];
  $loan_type_list = $_POST['loan_type_list'];
  $loan_repayment_list = $_POST['loan_repayment_list'];
  $loan_source_list = $_POST['loan_source_list'];
  $loan_repayment_frequency_list = $_POST['loan_repayment_frequency_list'];
  $loans_per_annum_list = $_POST['loans_per_annum_list'];
  $interest_on_loans_list = $_POST['interest_on_loans_list'];
  

	$sql_one = "INSERT INTO
    cooperative(
      `name`,
      `profiled_by`,
      `date_of_profiling`,
      `respondent_name`,
      `respondent_telephone`,
      `respondent_email`,
      `respondent_role`,
      `name_in_full`,
      `prob_reg_date`,
      `prob_reg_number`,
      `permanent_reg_date`,
      `permanent_reg_number`,
      `district`,
      `sub_county`,
      `parish`,
      `village`,
      `physical_office`,
      `lost_any_property`,
      `cause_of_loss`,
      `ever_heard_former_cop_bank`,
      `any_acct_in_former_cop_bank`,
      `share_holder_of_former_cop_bank`,
      `any_losses_when_bank_closed`,
      `form_of_loss`,
      `amount_of_loss`,
      `any_support_for_new_cop_bank`,
      `any_shares_in_cop_insurance_co`,
      `any_shares_in_cop_in_current_insurance_co`,
      `any_shares_in_defunct_cop`,
      `specify_shares_in_defuct_cop`
    )
  VALUES
    (
      '$cop_name',
      '$profiler',
      '$date_of_profiling',
      '$respondent_name',
      '$respondent_tel',
      '$respondent_email',
      '$respondent_role',
      '$registered_cooperative_name',
      '$prob_reg_date ',
      '$prob_reg_number ',
      '$permanent_reg_date ',
      '$permanent_reg_number ',
      '$district ',
      '$sub_county ',
      '$parish ',
      '$village ',
      '$physical_office ',
      '$lost_property ',
      '$loss_value_list ',
      '$heard_former_cop_bank ',
      '$former_cop_bank_acct ',
      '$share_holder_former_cop_bank ',
      '$any_losses ',
      '$loss_form_list ',
      '$amount_of_loss ',
      '$support_for_new_cop_bank ',
      '$shares_in_cop_insurance_co ',
      '$shares_in_current_cop_insurance_co ',
      '$shares_in_any_defunct_cop ',
      '$specify_shares_in_defunct_cop '
    )
  ";

$sql_two = "INSERT INTO
cooperative_membership_analysis(
  `fully_paid_members`,
  `partially_paid_members`,
  `demographic_details`,
  `from_15_to_25`,
  `from_26_to_35`,
  `from_36_to_45`, 
  `from_46_60`,
  `from_61_to_older`,
  `ple`, 
  `uce`,
  `uace`,
  `undergraduate`, 
  `post_graduate`, 
  `not_applicable`,
  `members_left`,
  `dormant_members`,
  `active_members`,
  `status`, 
  `no_of_farmers`, 
  `no_of_teachers`,
  `no_of_medical`,
  `no_of_legal_practitioners`, 
  `social_devt_nos`, 
  `no_of_finance`, 
  `no_marketers`, 
  `no_of_engineers`, 
  `no_of_manual_labor`, 
  `other_occupation`,
  `if_yes_list`,
  `non_member_beneficiaries_no`,
  `member_group_nos`, 
  `no_of_groups`,
  `reason1`,
  `reason2`,
  `reason3`
)
VALUES
(
  '$fully_paid_members',
  '$partially_paid_members',
  '$demographic_details',
  '$from_15_to_25',
  '$from_26_to_35',
  '$from_36_to_45', 
  '$from_46_60',
  '$from_61_to_older',
  '$ple', 
  '$uce',
  '$uace',
  '$undergraduate', 
  '$post_graduate', 
  '$not_applicable',
  '$members_left',
  '$dormant_members',
  '$active_members',
  '$status', 
  '$no_of_farmers', 
  '$no_of_teachers',
  '$no_of_medical',
  '$no_of_legal_practitioners', 
  '$social_devt_nos', 
  '$no_of_finance', 
  '$no_marketers', 
  '$no_of_engineers', 
  '$no_of_manual_labor', 
  '$other_occupation',
  '$if_yes_list',
  '$non_member_beneficiaries_no',
  '$member_group_nos', 
  '$no_of_groups',
  '$reason1',
  '$reason2',
  '$reason3'
)
";

$sql_three = "INSERT INTO
cooperative_business(
  `business_list`, 
  `non_financial_services`,
  `reason_for_engagement_in_non_financial_services`,
  `reason_2`, 
  `reason_3`, 
  `business_participation_status`, 
  `any_irrigation_system`,
  `annual_turnover`,
  `business_names`, 
  `annual_turnover_list`
)
VALUES
(
  '$coop_business_list', 
  '$sacco_non_financial_services',
  '$reason_1',
  '$reason_2', 
  '$reason_3', 
  '$business_status', 
  '$any_irrigation_system',
  '$annual_turnover',
  '$business_names', 
  '$annual_turnover_list'
)
";

$sql_four = "INSERT INTO
cooperative_products(
  `coop_pdts_list`, 
  `mineral_list`,
  `supplier_of_raw_materials`,
  `any_value_addition`,
  `value_addition_activities`, 
  `products_standardized`, 
  `who_standardizes`, 
  `standard_measurement_of_scale`,
  `total_produce_per_annum`,
  `pdt_names`, 
  `pdt_qty`,
  `selling_period`,
  `channels_for_market`,
  `where_market_is`,
  `export_pdts`,
  `transport_to_and_from`,
  `distance_from_cooperative_to_market`,
  `challenges_list`
)
VALUES
(
  '$coop_products_list',
  '$coop_minerals_list',
  '$raw_material_supplier',
  '$value_addition',
  '$value_addition_activities',
  '$products_standardized',
  '$standardized_agency_list',
  '$standard_measurement_scale',
  '$total_qty',
  '$product_names',
  '$product_qty',
  '$selling_period',
  '$channels_for_marketing_list',
  '$location_for_marketing_list',
  '$coop_exports',
  '$transport_to_and_from',
  '$distance',
  '$challenges_list'
)
";

$sql_five = "INSERT INTO
policy_and_legal_framework(
  `national_policy`, 
  `cooperative_policies`,
  `any_copy_policy_docs`,
  `been_read_by_members`, 
  `any_knowledge_abt_act`, 
  `ways_to_resolve_conflicts`, 
  `any_disagreement`,
  `unresolved_cases`
)
VALUES
(
  '$coop_in_national_policy_devt',
  '$coop_refer_list',
  '$copy_docs_mentioned',
  '$members_read_them',
  '$coop_act_amendment',
  '$un_resolved_conflict',
  '$any_coop_conflict_before_list',
  '$no_of_unresolved_cases'
)
";

$sql_six = "INSERT INTO
risk_management(
  `any_business_plan`, 
  `members_participation_in_bp`,
  `consider_consultant`,
  `form_of_keeping_records`,
  `any_accounting_sw`, 
  `consider_accounting_sw`, 
  `keep_reserves`, 
  `reserves_kept`,
  `ways_cooperative_keeps_money`,
  `any_insurance_policy`, 
  `bank_acct_type`,
  `type_of_insurance_policy`,
  `internal_risks`,
  `external_risks`
)
VALUES
(
  '$business_plan',
  '$business_plan_participation',
  '$no_business_plan',
  '$keep_records_list', 
  '$any_coop_software',
  '$coop_software',
  '$keep_reserves',
  '$coop_reserves_list',
  '$coop_money_ways_list',
  '$coop_insurance_policy',
  '$have_any_account_list', 
  '$coop_insurance_policy_type_list', 
  '$common_internal_risks_list',
  '$coop_external_risks_list'
)
";

$sql_seven = "INSERT INTO
annual_general_meeting(
  `coop_agm`,
  `had_agm_annually_since_inception`,
  `quorum_of_cooperative`,
  `quorum_observed`,
  `attend_last_agm`,
  `members_participation_in_electing_committee_members`, 
  `audit_report`,
  `audit_financial_reports`,
  `any_ministry_of_trade_representative`, 
  `cooperative_committees`,
  `hold_elections_for_commitiee_every_four_yr`,
  `last_vetting_committee_election`, 
  `last_executive_committee_election`, 
  `last_supervisory_committee_election`,
  `issue_out_contracts_to_committee_members`,
  `any_managerial_team`,
  `managerial_team_recruitment`,
  `run_without_managerial_team_process`, 
  `consider_graduates_for_recruitment`, 
  `reason_for_considering_grads_or_not`,
  `no_of_committee_employees`,
  `issue_contracts_to_employees`, 
  `prepare_financial_reports`, 
  `any_internal_auditor`, 
  `any_external_auditor`, 
  `specify_external_auditor`, 
  `last_audit_period`, 
  `reason_why`,
  `remit_any_taxes`,
  `taxes_remited`,
  `cooperative_policies`,
  `reason_why_no_policies`,
  `cooperative_member_of_affiliated_bodies`
)
VALUES
(
  '$coop_agm',
  '$inception',
  '$quorum_coop',
  '$observe_quorum_agm',
  '$attend_last_agm',
  '$members_participation_in_electing_committee_members', 
  '$audit_report', 
  '$audit_financial_reports',
  '$ministry_of_trade_rep',
  '$coop_committees_list',
  '$coop_hold_elections',
  '$vetting_commitee',
  '$board_commitee',
  '$supervisory_commitee',
  '$issue_any_contracts',
  '$managerial_team',
  '$recruited_list',
  '$no_managerial_team', 
  '$hiring_graduates', 
  '$why_yes',
  '$no_of_employees',
  '$coop_issue_contracts',
  '$coop_financial_reports',
  '$any_internal_auditor', 
  '$engage_external_auditors', 
  '$DCO',
  '$qualified_audit_firm', 
  '$why_yes', 
  '$remit_taxes', 
  '$specify_taxes_list',
  '$coop_policies_list',
  '$no_policies_list',
  '$affiliated_bodies_list'
)
";

$sql_eight = "INSERT INTO
coop_finance(
  `any_coop_assets`,
  `coop_assets_list`,
  `own_store`,
  `store_size`,
  `machinery_asset_1`,
  `machinery_asset_2`,
  `machinery_asset_3`,
  `own_or_rent_premise_list`,
  `land_size`,
  `title_docs`,
  `purchase_agreement`,
  `why_is_this_so`,
  `coop_partners_list`,
  `finance_sources_list`,
  `shares`,
  `business_income`,
  `grants`,
  `loans`,
  `loan_type_list`,
  `loan_repayment_list`,
  `loan_source_list`,
  `loan_repayment_frequency_list`,
  `loans_per_annum_list`,
  `interest_on_loans_list`
)
VALUES
(
  '$any_coop_assets',
  '$coop_assets_list',
  '$own_store',
  '$store_size',
  '$machinery_asset_1',
  '$machinery_asset_2',
  '$machinery_asset_3 ',
  '$own_or_rent_premise_list',
  '$land_size',
  '$title_docs',
  '$purchase_agreement',
  '$why_is_this_so',
  '$coop_partners_list',
  '$finance_sources_list',
  '$shares',
  '$business_income',
  '$grants',
  '$loans',
  '$loan_type_list',
  '$loan_repayment_list',
  '$loan_source_list',
  '$loan_repayment_frequency_list',
  '$loans_per_annum_list',
  '$interest_on_loans_list'
)
";


	$query1=$cloud->query($sql_one);
  $query2=$cloud->query($sql_two);
  $query3=$cloud->query($sql_three);
  $query4=$cloud->query($sql_four);
  $query5=$cloud->query($sql_five);
  $query6=$cloud->query($sql_six);
  $query7=$cloud->query($sql_seven);
  $query8=$cloud->query($sql_eight);

    // $query3=$cloud->query($sql_three);

    // $query2= mysqli_query($conn, $sql_two);

    // $query3 = mysqli_query($conn, $sql_three);
    
    

    if ($query1 && $query2 && $query3 && $query4 && $query5 && $query6 &&  $query7 && $query8) {
        
        echo json_encode(array("statusCode"=>200));
	} 
	else {
        echo json_encode($query8);
        // echo json_encode($query2);
        // echo json_encode($query3);
        echo json_encode(array("statusCode"=>400, 'error'=>mysqli_error($cloud)));
	}
	mysqli_close($cloud);

?>
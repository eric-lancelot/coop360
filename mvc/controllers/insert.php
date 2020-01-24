<?php

require '../cloud/cloud.php';

    $cop_name=$_POST['cooperative_name'];
    $profiler=$_POST['name_of_profiler'];
    $date_of_profiling = $_POST['date_of_profiling'];
    $respondent_name = $_POST['respondent_name'];
    $respondent_tel = $_POST['respondent_tel'];
    $respondent_email= $_POST['respondent_email'];
    $respondent_role = $_POST['respondent_role'];
    $registered_cooperative_name = $_POST['registered_cooperative_name'];
    $prob_reg_date = $_POST['prob_reg_date'];
    $prob_reg_number = $_POST['prob_reg_number'];
    $permanent_reg_number = $_POST['permanent_reg_number'];
    $permanent_reg_date = $_POST['permanent_reg_date'];
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
    $amount_of_loss = $_POST['amount_of_loss'];
    $support_for_new_cop_bank = $_POST['support_for_new_cop_bank'];
    $shares_in_cop_insurance_co = $_POST['shares_in_cop_insurance_co'];
    $shares_in_current_cop_insurance_co = $_POST['shares_in_current_cop_insurance_co'];
    $shares_in_any_defunct_cop = $_POST['shares_in_any_defunct_cop'];
    $specify_shares_in_defunct_cop = $_POST['specify_shares_in_defunct_cop'];
   
	$sql = "INSERT INTO `cooperative`( `name`, `profiled_by`, `date_of_profiling`, `respondent_name`, `respondent_telephone`, `respondent_email`, `respondent_role`,
            `name_in_full`, `prob_reg_date`, `prob_reg_number`, `permanent_reg_date`, `permanent_reg_number`, `district`, `sub_county`, `parish`, `village`, `physical_office`
            `lost_any_property`, `cause_of_loss`, `ever_heard_former_cop_bank`, `any_acct_in_former_cop_bank`, `share_holer_of_former_cop_bank`,
            `any_losses_when_bank_closed`, `form_of_loss`, `amount_of_loss`, `any_support_for_new_cop_bank`, `any_shares_in_cop_insurance_co`, `any_shares_in_cop_in_current_insurance_co`,
            `any_shares_in_defunct_cop`, `specify_shares_in_defunct_cop`) 
	VALUES ('$cop_name', '$profiler', '$date_of_profiling', '$respondent_name', '$respondent_tel', '$respondent_email', '$respondent_role', '$registered_cooperative_name', $prob_reg_date',
            '$prob_reg_number', '$permanent_reg_date', '$permanent_reg_number', '$district', '$sub_county', '$parish', '$village', '$physical_office', '$lost_property', '$loss_value_list', 
            '$heard_former_cop_bank', '$former_cop_bank_acct', '$share_holder_former_cop_bank', '$any_losses', '$loss_form_list', '$amount_of_loss', '$support_for_new_cop_bank',
            '$shares_in_cop_insurance_co', '$shares_in_current_cop_insurance_co', '$shares_in_any_defunct_cop', '$specify_shares_in_defunct_cop' );
   )";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);

?>
<?php

require '../cloud/cloud.php';

// member information
    $fullname=$_POST['fullname'];
    $occupation=$_POST['occupation'];
    $produce = $_POST['produce'];
    $employment = $_POST['employment '];
    $trading_product = $_POST['trading_product '];
    $date_of_birth = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['date_of_birth'])));
    $age= (int) $_POST['age'];
    $gender = $_POST['gender'];
    $district = $_POST['district'];
    $county = $_POST['county'];
    $nationality = $_POST['nationality'];
    $nin_number = $_POST['nin_number'];
    $marital_status = $_POST['marital_status'];
    $spouse_name = $_POST['spouse_name'];
    $sub_county = $_POST['sub_county'];
    $parish = $_POST['parish'];
    $village = $_POST['village'];
    $chronic_illness =  $_POST['chronic_illness'];
    $phone_number = $_POST['phone_number'];
    $email_address = $_POST['email_address'];
    $next_of_kin_name = $_POST['next_of_kin_name'];
    $next_of_kin_phone = $_POST['next_of_kin_phone'];
    $own_house = $_POST['own_house'];
    $been_school = $_POST['been_school'];
    $primary_school = $_POST['primary_school'];
    $secondary_school = $_POST['secondary_school'];
    $college = $_POST['college'];
    $university = $_POST['university'];
    $have_kids = $_POST['have_kids'];
    $number_of_kids_have = (int) $_POST['number_of_kids_have'];
    $kid_name = $_POST['kid_name '];
    $kid_age = (int) $_POST['kid_age '];
    $kid_education = $_POST['kid_education '];
    $kid_occupation = $_POST['kid_occupation '];
    $have_training = $_POST['have_training'];
    $training_name = $_POST['training_name '];
    $training_place = $_POST['training_place '];
    $training_type = $_POST['training_type '];
    $training_help = $_POST['training_help '];
    $source_pay = (int) $_POST['source_pay '];
    $month_pay = (int) $_POST['month_pay '];
    $month_expenses = (int) $_POST['month_expenses '];
    $have_loan = $_POST['have_loan'];
    $have_bank_account = $_POST['have_bank_account'];
    $loan_type = $_POST['loan_type '];
    $loan_amount = (int) $_POST['loan_amount '];
    $loan_provider = $_POST['loan_provider '];
    $loan_date = $_POST['loan_date '];
    $loan_reason = $_POST['loan_reason '];

    // cooperative membership information
    $join_reason = $_POST['join_reason '];
    $coop_shares = (int) $_POST['coop_shares'];
    $have_saving_account = $_POST['have_saving_account'];
    $amount_per_month = $_POST['amount_per_month'];
    $saving_period = $_POST['saving_period '];
    $saving_medium = $_POST['saving_medium '];
    $earn_interest = (int) $_POST['earn_interest'];
    $money_access = $_POST['money_access '];
    $volume_produce = $_POST['volume_produce '];
    $member_role = $_POST['member_role '];
    $member_rights = $_POST['member_rights '];
    $benefits = $_POST['benefits '];
    $any_fears = $_POST['any_fears'];
    $fear_reason = $_POST['fear_reason '];
    $expect = $_POST['expect '];
    $future = $_POST['future '];
    $contribute = $_POST['contribute '];
    $spouse_to_coop = $_POST['spouse_to_coop'];

    // agm member information
    $understand_annual_meeting = $_POST['understand_annual_meeting'];
    $attend_annnual_meeting = $_POST['attend_annnual_meeting'];
    $usefull_annual_meeting = $_POST['usefull_annual_meeting '];
    $like_about_agm = $_POST['like_about_agm '];
 
   
	$sql_one = "INSERT INTO
    member (
      `full_names`,
      `occupation`,
      `farmer_products`,
      `employment_status`,
      `trader_deal`,
      `date_of_birth`,
      `age`,
      `sex`,
      `district`,
      `county`,
      `nationality`,
      `id_no`,
      `marital_status`,
      `spouse_name`,
      `sub_county`,
      `parish`,
      `village`,
      `any_chronic_illness`,
      `telephone`,
      `email_address`,
      `next_of_kin`,
      `tel`,
      `house_ownership`,
      `school_attendance`,
      `primary`,
      `secondary`,
      `college`,
      `university`,
      `any_children`,
      `no_of_children`,
      `child_name`,
      `child_age`,
      `highest_education`,
      `child_occupation`,
      `any_trainings`,
      `training_name`,
      `training_institution`,
      `training_type`,
      `importance_of_training`,
      `source_income`,
      `monthly_income`,
      `monthly_expense`,
      `any_loan`,
      `bank_acct`,
      `loan_type`,
      `loan_amount`,
      `loan_provider`,
      `loan_date`,
      `loan_reason`
    )
  VALUES
    (
      '$fullname',
      '$occupation',
      '$produce',
      '$employment',
      '$trading_product',
      '$date_of_birth',
      $age,
      '$gender',
      '$district',
      '$county',
      '$nationality',
      '$nin_number',
      ' $marital_status ',
      '$spouse_name',
      '$sub_county',
      '$parish',
      '$village',
      '$chronic_illness',
      '$phone_number ',
      '$email_address',
      '$next_of_kin_name',
      '$next_of_kin_phone',
      '$own_house',
      '$been_school',
      '$primary_school',
      '$secondary_school',
      '$college',
      '$university',
      '$have_kids',
      '$number_of_kids_have',
      '$kid_name',
      '$kid_age',
      '$kid_education',
      '$kid_occupation',
      '$have_training',
      '$training_name',
      '$training_place',
      '$training_type',
      '$training_help',
      '$source_pay',
      '$month_pay',
      '$month_expenses',
      '$have_loan',
      '$have_bank_account',
      '$loan_type',
      '$loan_amount',
      '$loan_provider',
      '$loan_date',
      '$loan_reason'
    )";

   $sql_two  = "INSERT INTO
   cooperative_membership(
     `decision_to_join`,
     `no_of_shares_in_cooperative`,
     `any_savings_acct_with_cooperative`,
     `period_saving`,
     `medium_for_saving`,
     `any_interest_earned`,
     `access_period_for_money`,
     `volume_saved`,
     `role_in_cooperative`,
     `rights_in_cooperative`,
     `benefits_from_cooperative`,
     `fears_abt_being_a_member`,
     `why_have_fears`,
     `how_to_address_these_fears`,
     `expectations_from_cooperative_5yearsplus`,
     `expect_to_see_cooperative_5yearsplus`,
     `contribution_to_aspiration`,
     `spouse_cooperative_member`
   )
 VALUES
   (
     '$join_reason',
     '$coop_shares',
     '$have_saving_account',
     ' $saving_period',
     '$saving_medium',
     '$earn_interest',
     '$money_access',
     '$volume_produce',
     '$member_role',
     '$member_rights',
     '$benefits',
     ' $any_fears ',
     '$fear_reason',
     '$fear_solution',
     '$expect',
     '$future',
     '$contribute',
     '$spouse_to_coop'
   )
 ";

    $sql_three = "INSERT INTO
    agm_to_member(
      `knowledge_of_agm`,
      `attend_agm`,
      `importance_of_meeting`,
      `what_didn't_you_like`
    )
  VALUES
    (
      '$understand_annual_meeting',
      '$attend_annnual_meeting',
      '$usefull_annual_meeting',
      '$like_about_agm'
    )";


    $query1=$cloud->query($sql_one);
    $query2=$cloud->query($sql_two);
    $query3=$cloud->query($sql_three);

    // $query2= mysqli_query($conn, $sql_two);

    // $query3 = mysqli_query($conn, $sql_three);
    
    

    if ($query1 && $query2 && $query3) {
        
        echo json_encode(array("statusCode"=>200));
	} 
	else {
        echo json_encode($query1);
        echo json_encode($query2);
        echo json_encode($query3);
        echo json_encode(array("statusCode"=>400, 'error'=>mysqli_error($cloud)));
	}
	mysqli_close($cloud);

?>
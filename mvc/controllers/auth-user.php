<?php


require '../cloud/cloud.php';

	$UserName=$_POST['username_imputed']; $Passcode=$_POST['password_imputed'];

	if(isset($UserName) && isset($Passcode)){
		echo APP_START::AUTH_USER($cloud,$UserName,$Passcode);
	}else{
		echo "Missing Parameters, Please Reload Page, Again.";
	}


?>
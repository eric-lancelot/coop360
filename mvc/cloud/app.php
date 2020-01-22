<?php
error_reporting(0);

date_default_timezone_set("Africa/Kampala");


class APP_START{

	function LanceCrypt($action, $string) {
	    $output = false;
	    $encrypt_method = "AES-256-CBC";
	    $secret_key = 'camelot-hydra-lancelot';
	    $secret_iv = 'cloud-xeus-delta';

	    $key = hash('sha256', $secret_key);
	    
	    $iv = substr(hash('sha256', $secret_iv), 0, 16);
	    if ( $action == 'encrypt' ) {
	        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
	        $output = base64_encode($output);
	    } else if( $action == 'decrypt' ) {
	        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	    }
    return $output;
	}

	function AUTH_USER($cloud_net,$username_imputed=null,$password_imputed=null){
		$RT=mysqli_escape_string($cloud_net,$password_imputed);
		$Defcom1=mysqli_escape_string($cloud_net,$username_imputed); $PasscodeCleaned=md5($RT);

		if(isset($Defcom1) && isset($RT)){
			$ValidateRequest1=mysqli_query($cloud_net,"SELECT dex_account,dex_role,dex_status FROM dex_cloud_users WHERE dex_username='$Defcom1' AND dex_password='$PasscodeCleaned'");
				if(mysqli_num_rows($ValidateRequest1)==1){
					$LoadCommandedData=mysqli_fetch_array($ValidateRequest1);
					$FoundAccountID=$LoadCommandedData['dex_account'];
					$UserRoleLoader=$LoadCommandedData['dex_role'];
					$UserAccountStatus=$LoadCommandedData['dex_status'];

					if($UserAccountStatus=='dex-1'){
						$defcon_1=$UserRoleLoader;
						setcookie('_dexnut', APP_START::LanceCrypt('encrypt',$FoundAccountID), time() + (86400 * 30), "/");

						$AclDate=date('D-M-Y h:i a'); $UsedIp=$_SERVER['REMOTE_ADDR'];
						$LogAcl=mysqli_query($cloud_net,"INSERT INTO dex_acls(dex_account, dex_logdate, dex_ip, acl_id) VALUES ('$FoundAccountID','$AclDate','$UsedIp','')");

						$StartSession=mysqli_query($cloud_net,"UPDATE dex_cloud_users SET dex='dex-00',dex_lastlogin='$AclDate' WHERE dex_account='$FoundAccountID'");
					}else if($UserAccountStatus=='dex-0'){
						$defcon_1='locked';
					}
					
				}else{
					$defcon_1='invalid';
				}	
		}else{
			$defcon_1='param-error';
		}

		return $defcon_1;
	}


}

class SYSTEM_CORE{

	function ACCOUNT_PROFILER($cloud_net,$command_impute=null,$target_system_user=null){
		if(isset($command_impute) && isset($target_system_user)){
			if($command_impute=='read-name'){
				$GetContent=mysqli_query($cloud_net,"SELECT dex_name FROM dex_cloud_users WHERE dex_account='$target_system_user'");
				$load_data_up=mysqli_fetch_array($GetContent);
				$UserAccountName=$load_data_up['dex_name'];
				$result=$UserAccountName;
			}
		}else{
			$result="missing-params";
		}
		return $result;
	}

	function ACL_LIMIT($cloud_net,$trooper_account=null){
		$GetAclLimit=mysqli_query($cloud_net,"SELECT dex_role FROM dex_cloud_users WHERE dex_account='$trooper_account'");
		$loadAcl=mysqli_fetch_array($GetAclLimit);
		$AclFound=$loadAcl['dex_role'];

		return $AclFound;
	}

}//end main class system core






?>
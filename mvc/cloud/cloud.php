<?php

error_reporting(0);

require 'app.php';

$base_host="http://localhost/coop/pontiac/";

$host="localhost"; $access_user="root"; $access_password=""; $target_db="coop360";

$cloud= new mysqli($host,$access_user,$access_password,$target_db);

if (!$cloud) {
	echo "<h3>SYSTEM INTERNAL ERROR CODE : 430-DXM, CONTACT SUPPORT, NOW.</h3>";
}


?>
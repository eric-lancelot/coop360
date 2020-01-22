<?php
require '../mvc/cloud/cloud.php';

  $User=APP_START::LanceCrypt('decrypt',$_COOKIE['_dexnut']); 
  $UserRole=SYSTEM_CORE::ACL_LIMIT($cloud,$User);
  $UserAccountName=SYSTEM_CORE::ACCOUNT_PROFILER($cloud,'read-name',$User);

?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>COOP360 SYSTEM - DASHBOARD</title>
  <link rel="apple-touch-icon" href="<?php echo $base_host; ?>app-assets/images/ico/apple-icon-120.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/app.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/vendors/css/charts/morris.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/plugins/forms/wizard.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/plugins/pickers/daterange/daterange.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_host; ?>app-assets/css/plugins/animate/animate.css">
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
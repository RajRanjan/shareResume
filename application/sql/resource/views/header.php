<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PCRFv2 Rest API-Beta</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery-ui.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery-ui.theme.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>" />
     <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-ui.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container-fluid headerGradient">
     <div class="container-fluid">
        <a href="<?= base_url('index.php/rest') ?>"><h1 class="text-primary" style="color: white;hover:none;">Testing PCRFv2 Rest API <span class="small" style="color: #F2F2F2;">Beta</Beta></span></h1></a>
     
     </div> 
  </div>
  </br/>
  <style>
      .centered {
  position: fixed;
  top: 50%;
  left: 50%;
  z-index:100;
  transform: translate(-50%, -50%);
}
  
  </style>
  <!--
  <div class="centered" id="loadingButton">
             <script>$("#loadingButton").hide();</script>
             <img width="40%" height="40%" src="<?= base_url('assets/img/loading.gif') ?>" />
  </div>
  -->
  <script>
  
  //$(document).ajaxStart(function() {
        // show loader on start
        //$("#loadingButton").show();
        
   // }).ajaxSuccess(function() {
        // hide loader on success
         //$("#loadingButton").hide();
   // });

   </script>
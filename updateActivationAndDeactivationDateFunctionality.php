<?php ob_start(); ?>
<?php 
   include("classes/database.php");
   include("classes/userMaster.php");
   include("classes/leave.php");
  $dateType=$_POST['dateType'];//either leave or comp off
  $newActivationDate=$_POST['updateActivationDate'];
  $userId=$_POST['userId'];
  $getUser=USERMASTER::find_by_id($userId);
  if($getUser){
    if($dateType=="activation"){
              $getUser->activationDate=$newActivationDate;
              if($getUser->update()){
                echo 1;
              }
    }
    if($dateType=="deactivation"){
              $getUser->deactivationDate=$newActivationDate;
              if($getUser->update()){
                echo 1;
              }
    }
  }
  
    




?>
<?php ob_flush(); ?>
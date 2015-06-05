<?php ob_start(); ?>
<?php 
   include("classes/database.php");
   include("classes/userMaster.php");
   include("classes/leave.php");
  $leaveType=$_POST['leaveType'];//either leave or comp off
  $leaveDate=$_POST['addLeaveDate'];
  $leaveCategory=$_POST['radios'];
  $userId=$_POST['userId'];
  if($leaveType=="leave"){
    //viewing the leave type we map value 0 to 3 and 1 to 4
    $newLeave=new LEAVES();
    $newLeave->userId=$userId;
    $newLeave->leaveType=$leaveCategory;
    $newLeave->leaveDate=$leaveDate;
    if($newLeave->create()){
        echo 1;
    }
    
  }
  if($leaveType=="compOff"){
    //viewing the leave type we map value 0 to 3 and 1 to 4
    $newLeave=new LEAVES();
    $newLeave->userId=$userId;
    if($leaveCategory==0){
        $leaveCategory=2;
    }
    if($leaveCategory==1){
        $leaveCategory=3;
    }
    $newLeave->leaveType=$leaveCategory;
    $newLeave->leaveDate=$leaveDate;
    if($newLeave->create()){
        echo 1;
    }
    
  }
  




?>
<?php ob_flush(); ?>
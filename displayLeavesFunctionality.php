<?php ob_start(); ?>
<?php
   include("classes/database.php");
   include("classes/leave.php");
   $userId=$_POST['userId'];
   $leavetype=$_POST['leaveType'];
  
   $findallLeavesByUser=LEAVES::find_all_by_userId($userId);
?>

        <div class="row">
                  <div class="col-md-4">Day</div>
                  <div class="col-md-4">Leave Type</div>
        </div>
        <?php foreach($findallLeavesByUser as $eachLeave): ?>
           
             <?php if($leavetype=="leave"): ?>
                 <?php if($eachLeave->leaveType==0 || $eachLeave->leaveType==1): ?>
                <div class="row">
                          <div class="col-md-4"><?php echo date("M j, Y", strtotime($eachLeave->leaveDate)); ?></div>
                          <div class="col-md-4"><?php switch($eachLeave->leaveType){case 0:echo "Half Day";break;case 1:echo "Full Day";break;} ?></div>
                </div>
                <?php endif; ?> 
             <?php endif; ?> 
             <?php if($leavetype=="compOff"): ?>
                <?php if($eachLeave->leaveType==2 || $eachLeave->leaveType==3): ?>
                <div class="row">
                          <div class="col-md-4"><?php echo date("M j, Y", strtotime($eachLeave->leaveDate)); ?></div>
                          <div class="col-md-4"><?php switch($eachLeave->leaveType){case 2:echo "Half Day";break;case 3:echo "Full Day";break;} ?></div>
                </div>
                <?php endif; ?> 
             <?php endif; ?> 
             
        <?php endforeach; ?>

<?php ob_flush(); ?>
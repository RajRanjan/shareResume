<div class="container">
        <div class="row tableHeader">
          <div class="col-md-2"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Name</div>
          <div class="col-md-2"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;Activation Date</div>
          <div class="col-md-2"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;Deactivation Date</div>
          <div class="col-md-2"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;Leaves</div>
          <div class="col-md-2"><span class="glyphicon glyphicon-adjust"></span>&nbsp;&nbsp;&nbsp;Comp Off</div>
        </div>
</div>


<?php $getAllusers=USERMASTER::find_all("DESC"); ?>
<?php foreach($getAllusers as $eachUser): ?>
        <?php $allLeavesTaken=LEAVES::find_all_by_userId($eachUser->id);
                  $halfDayLeave=0;$fullDayLeave=0;$halDayCompOff=0;$fullDAyCompOff=0;
              foreach($allLeavesTaken as $eachLeave){
                
                    switch($eachLeave->leaveType){
                        
                        case 0:$halfDayLeave++;break;
                        case 1:$fullDayLeave++;break;
                        case 2:$halDayCompOff++;break;
                        case 3:$fullDAyCompOff++;break;                        
                    }
              }  
        ?>
        <div class="container">
        <div class="row userData">
          <div class="col-md-2" ><span class="btn btn-small btn-default fontStyle1"><?php echo $eachUser->fullName; ?></span></div>
          <div class="col-md-2"><a id="" dialogTitle="Update Activation Date" userId="<?php echo $eachUser->id; ?>" dateType="activation" href="#" class="updateActivationDate btn btn-small btn-default"><?php if($eachUser->activationDate=="0000-00-00"){echo "Not Available";}else{echo date("M j, Y", strtotime($eachUser->activationDate));} ?></a></div>
          <div class="col-md-2"><a id="" dialogTitle="Update Deactivation Date" userId="<?php echo $eachUser->id; ?>" dateType="deactivation" href="#" class="updateDeactivationDate btn btn-small btn-default"><?php if($eachUser->deactivationDate=="0000-00-00"){echo "Not Available";}else{echo date("M j, Y", strtotime($eachUser->deactivationDate));} ?></a></div>
          <div class="col-md-2"><a id="" dialogTitle="Add Leaves" userId="<?php echo $eachUser->id; ?>" leaveType="leave" href="#" class="addLeave btn btn-small btn-default"><?php echo $halfDayLeave ?> &nbsp;H&nbsp;|&nbsp;<?php echo $fullDayLeave ?>&nbsp;F</a></div>
          <div class="col-md-2"><a id="" dialogTitle="Add Comp Off" userId="<?php echo $eachUser->id; ?>" leaveType="compOff" href="#" class="addCompOff btn btn-small btn-default"><?php echo $halDayCompOff ?> &nbsp;H&nbsp;|&nbsp;<?php echo $fullDAyCompOff ?>&nbsp;F</a></div>         
       </div>
        </div>
<?php endforeach; ?>


<!-- Update Employee Leave Form -->
<div class="container" id="dialogBox">
        <script>$("#dialogBox").dialog({autoOpen:false,width:600,height:600,modal:true});</script>
        <div class="container" style="width: 100%;">
             <form id="updateLeaveForm" userId="" class="form-horizontal">
                        <fieldset>
                        
                        <!-- Form Name -->
                      
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="textinput">Leave Date</label>  
                          <div class="col-md-6">
                          <input id="addLeaveDate" name="addLeaveDate" type="text" placeholder="Leave Date" class="form-control input-md">
                            
                          </div>
                        </div>
                        
                        <!-- Multiple Radios -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="radios">Leave Type</label>
                          <div class="col-md-4">
                          <div class="radio">
                            <label for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="0" checked="checked">
                              Half Day
                            </label>
                        	</div>
                          <div class="radio">
                            <label for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="1">
                              Full Day
                            </label>
                        	</div>
                          </div>
                        </div>
                        
                        <!-- Button -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="singlebutton"></label>
                          <div class="col-md-4">
                            <input type="submit"  id="singlebutton" name="singlebutton" class="btn btn-success">
                          </div>
                        </div>
                        
                        </fieldset>
        </form>
        <!-- Displaying leaves Taken-->
        <div id="leavesDetails">
             
             
        </div>
        <!-- Displaying leaves Taken-->
        
        </div>



</div>
<!-- Update ACTIVATION DATE AND DEACTIVATION DATE Form -->
<div class="container" id="updateActivationdialogBox">
        <script>$("#updateActivationdialogBox").dialog({autoOpen:false,width:600,height:600,modal:true});</script>
        <div class="container" style="width: 100%;">
             <form id="updateActivationDateForm" userId="" class="form-horizontal">
                        <fieldset>
                        
                        <!-- Form Name -->
                      
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="textinput">Update Date</label>  
                          <div class="col-md-6">
                          <input id="updateActivationDate" name="updateActivationDate" type="text" placeholder="Leave Date" class="form-control input-md">
                            
                          </div>
                        </div>                       
                     
                        
                        <!-- Button -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="singlebutton"></label>
                          <div class="col-md-4">
                            <input type="submit"  id="singlebutton" name="singlebutton" class="btn btn-success">
                          </div>
                        </div>
                        
                        </fieldset>
        </form>
        </div>



</div>
<script>
    $(document).ready(function(){
        $("#addLeaveDate,#updateActivationDate").datepicker({
        dateFormat: "yy-mm-dd"
     });
    });
    
$("#updateLeaveForm").submit(function(e){
    e.preventDefault();
    var userId=$(this).attr('userId');
    var leaveType=$(this).attr('leaveType');
    dataString='userId='+userId+'&leaveType='+leaveType+'&'+$(this).serialize();
    //alert("raj");
    $.ajax({
                type: 'POST',
                url: "updateLeavesCompOffFunctionality.php",
                data: dataString,
                success: function(data) {
                   
                     if(data==1){
                        alert("success");
                     }
                  
               }
              
              });
          // ending ajax call  
    
})    
//Ajax fpr update activation and deactivation code
$("#updateActivationDateForm").submit(function(e){
    e.preventDefault();
    var userId=$(this).attr('userId');
    var dateType=$(this).attr('dateType');//this attribute is dynamically created
    dataString='userId='+userId+'&dateType='+dateType+'&'+$(this).serialize();
    //alert("raj");
    $.ajax({
                type: 'POST',
                url: "updateActivationAndDeactivationDateFunctionality.php",
                data: dataString,
                success: function(data) {
                     
                     console.log(data);
                     if(data==1){
                        alert("success");
                     }
                  
               }
              
              });
          // ending ajax call  
    
})    
    
    

</script>
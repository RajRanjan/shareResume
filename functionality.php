
<?php
   include("classes/database.php");
   include("classes/userMaster.php");
   include("classes/leave.php");
   include("classes/functions.php");
$option=$_POST['option'];
$jiraId=$_POST['jiraId'];    
$startDateFromDatePicker = $_POST['startDate'];//this date is in the form 5/May/2015 which jira query takes
$endDateFromDatePicker = $_POST['endDate'];
$phpStartTime=dateInPHPFormatFromJiraFormat($startDateFromDatePicker);
$phpEndTime=dateInPHPFormatFromJiraFormat($endDateFromDatePicker);
//echo $phpStartTime."  ".$phpEndTime;
$timeDifference=(strtotime($phpEndTime)-strtotime($phpStartTime));
$totalDaysFromCalender=($timeDifference/(60*60*24))+1;
if($jiraId=="all"){
    $users =USERMASTER::find_all("ASC");
}else {
    
    $users=USERMASTER::find_by_JiraId($jiraId);
   
}

?>
    <!-- <div class="container" style=""><h2>Total Days From Calender : <?php echo $totalDaysFromCalender ?></h2></div> -->
     <div class="row reportDataHeading fontStyle1">
                  <div class="col-md-2" >Name</div>
                  <div class="col-md-1" >Hours</div>
                  <div class="col-md-1" onclick="sortByPercentage()" style="cursor: pointer;">%age</div>  
                   <div class="col-md-1" >Start Date</div>
                  <div class="col-md-1" >End Date</div> 
                     <div class="col-md-1" >HL</div> 
                      <div class="col-md-1" >FL</div>
                       <div class="col-md-1" >HCL</div>
                        <div class="col-md-1" >FCL</div>
                   <div class="col-md-1" >Week Off</div>     
                  <div class="col-md-1" >AD</div> 
                        
     </div>         
    
<div class="testWrapper">    
   <form id="sendEmail">
     <?php foreach ($users as $eachUser): ?>        
          <?php //for every user
                 $startDate=$startDateFromDatePicker;
                 $endDate=$endDateFromDatePicker;
                 $dashStartTime=dateInPHPFormatFromJiraFormat($startDate);
                 $dashEndTime=dateInPHPFormatFromJiraFormat($endDate);             
                 //Validating the activation Date that date from picker is less than the user activation date
                 if(strtotime($dashStartTime)<strtotime($eachUser->activationDate)){
                    $dashStartTime=$eachUser->activationDate;
                    $startDate=dateInJiraFormatFromPHPFormat($dashStartTime);
                 } 
                 $currentDate=date('Y-m-d');
                 if($eachUser->deactivationDate!="0000-00-00"){
                    if(strtotime($dashEndTime)>strtotime($eachUser->deactivationDate)){
                        $dashEndTime=$eachUser->deactivationDate;
                        $endDate=dateInJiraFormatFromPHPFormat($dashEndTime);
                    }
                }else if(strtotime($dashEndTime)>strtotime($currentDate)){
                    $dashEndTime=$currentDate;
                    $endDate=dateInJiraFormatFromPHPFormat($dashEndTime);
                }
                
                
                 $sum=getTotalHourWorkedFromJira($eachUser->jiraId,$startDate,$endDate);
                 $daysWithWeekends=((strtotime($dashEndTime)-strtotime($dashStartTime))/(60*60*24))+1;
                 $totalDaysActual=getWorkingDays($dashStartTime,$dashEndTime);
                 $weekOff=$daysWithWeekends-$totalDaysActual;
                 $halfDayLeave=0;$fullDayLeave=0;$halfDayCompOff=0;$fullDayCompOff=0;
                 $halfDayLeave=($database->total_object(LEAVES::all_halfday_leaves($eachUser->id,$dashStartTime,$dashEndTime)))/2;
                 $fullDayLeave=$database->total_object(LEAVES::all_fullDay_leaves($eachUser->id,$dashStartTime,$dashEndTime));
                 $halfDayCompOff=($database->total_object(LEAVES::all_halfday_CompOff_leaves($eachUser->id,$dashStartTime,$dashEndTime)))/2;
                 $fullDayCompOff=$database->total_object(LEAVES::all_Fullday_CompOff_leaves($eachUser->id,$dashStartTime,$dashEndTime));
                 $totalDaysActual=$totalDaysActual+$halfDayCompOff+$fullDayCompOff-$halfDayLeave-$fullDayLeave;
                 //echo "<pre>";
                // print_r(LEAVES::all_halfday_leaves($eachUser->id,$dashStartTime));
                 //echo "</pre><br/>"
                 
                 
                 
                 //echo $startDate."  ".$endDate."    ".$totalDaysActual."<br/>";
          ?> 
          <?php //calculatuing the percentage
                    $hours=round(($sum / (60 * 60)), 2);
                    $percent=round((($hours/($totalDaysActual*8))*100),2);
          ?>
           <?php //now checking if the option is sset as defaulter then checking if percent is less than 80%
                 if($option=="defaulter"){
                   if($percent>80){
                        continue;
                   }
           } ?>  
           
               <div class="row reportData" data-percentage="<?php echo intval($percent) ?>" <?php if($percent<80){echo "style='border:1px dotted red'";} ?> >
                      <div class="col-md-2" >
                            <input  type="checkbox" class="reportEmail" id="<?php echo $eachUser->id ?>" email="<?php echo $eachUser->email ?>" name="<?php echo $eachUser->id ?>" emaildata="name='<?php echo $eachUser->fullName;?>'&hours='<?php echo $hours ?>'&percent='<?php echo $percent; ?>'&startDate='<?php echo date("j M", strtotime($dashStartTime));?>'&endDate='<?php echo date("j M", strtotime($dashEndTime));?>'&halfLeave='<?php echo ($halfDayLeave*2);  ?>'&fullLeave='<?php echo $fullDayLeave;  ?>'&halCompOff='<?php echo ($halfDayCompOff*2)  ?>'&fullCompOff='<?php echo $fullDayCompOff ?>'&weekOff='<?php echo $weekOff; ?>'&actualWorkingDays='<?php echo $totalDaysActual ?>'"/>
                            <?php echo $eachUser->fullName;?>
                      </div>                      
                      <div class="col-md-1" ><?php echo $hours ?></div>
                      <div class="col-md-1" ><?php echo $percent; ?></div>    
                      <div class="col-md-1" ><?php echo date("j M", strtotime($dashStartTime));?></div>
                      <div class="col-md-1" ><?php echo date("j M", strtotime($dashEndTime));?></div>  
                      <div class="col-md-1" ><?php echo ($halfDayLeave*2);  ?></div> 
                      <div class="col-md-1" ><?php echo $fullDayLeave;  ?></div>
                      <div class="col-md-1" ><?php echo ($halfDayCompOff*2)  ?></div>
                      <div class="col-md-1" ><?php echo $fullDayCompOff ?></div>     
                      <div class="col-md-1" ><?php echo $weekOff; ?></div>          
                      <div class="col-md-1" ><?php echo $totalDaysActual ?></div>
              </div>        
                         
     <?php endforeach; ?> 
     <input type="submit" name="submitReportEmail" id="submitReportEmail" value="Send Report" class="btn btn-default btn-success" />
     </form>
  </div>
 <script>
        var toggle=0;
        function sortByPercentage(){
            
                if(toggle==0){
                    var $wrapper = $('.testWrapper');
                    $wrapper.find('.reportData').sort(function (a, b) {
                        return +a.dataset.percentage - +b.dataset.percentage;
                    })
                    .appendTo( $wrapper );
                    toggle++;
                }
                else if(toggle==1){
                    var $wrapper = $('.testWrapper');
                    $wrapper.find('.reportData').sort(function (a, b) {
                        return +b.dataset.percentage - +a.dataset.percentage;
                    })
                    .appendTo( $wrapper );
                    toggle=0;
                }
                
                
                //$(".reportData").tinysort("",{attr:"data-percentage"});
                
        }//function ends
        
        $("#sendEmail").on('submit',function(e){
           e.preventDefault();
           //alert("raj");
           
            var checkBoxArray=$(this).find('.reportEmail');
            $.each( checkBoxArray, function( i, field ) {
                    var idValue=field.name;
                    var checkboxObject=$("#"+idValue);
                    if(checkboxObject.is(':checked')){
                        dataString="email="+$(this).attr('email')+"&"+$(this).attr('emailData');
                        //console.log(dataString);
                        
                        $.ajax({
                                type: 'POST',
                                url: "emailSendingFunctionality.php",
                                data: dataString,
                                success: function(data) {
                                   
                                     console.log(data);                                
                               }                              
                              });
                          // ending ajax call   
                        
                    }                    
            });
           
            
        });//end of emai sending
        
 
 </script>

 
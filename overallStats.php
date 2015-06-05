<?php    
$startDateFromDatePicker ="01/Apr/2015";//this date is in the form 5/May/2015 which jira query takes 
$phpStartTime=dateInPHPFormatFromJiraFormat($startDateFromDatePicker);
$phpEndTime=date('Y-m-d',strtotime("-1 days"));
$endDateFromDatePicker =dateInJiraFormatFromPHPFormat($phpEndTime);
$timeDifference=(strtotime($phpEndTime)-strtotime($phpStartTime));
$totalDaysFromCalender=($timeDifference/(60*60*24))+1;
//echo $startDateFromDatePicker."    ".$endDateFromDatePicker;
$users =USERMASTER::find_all("ASC");
$count=0;    
$totalPercent=0;  
  
 foreach ($users as $eachUser){   
             $count++;
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
             
             //calculatuing the percentage
                $hours=round(($sum / (60 * 60)), 2);               
                $percent=round((($hours/($totalDaysActual*8))*100),2);
                $totalPercent=$totalPercent+$percent;     

}
 $average=$totalPercent/$count;
    
 
?> 
<div class="container">
<div id="element1" style="border-radius: 50%;"><span id="percent"><?php echo round($average, 2); ?>%</span></div>
</div>



<?php
    
    //getting the values from the post variable
    //$to=$_POST['email'];
    $to="raj.ranjan91956@gmail.com";
    $name=$_POST['name'];
    $hours=$_POST['hours'];
    $percent=$_POST['percent'];
    $startDate=$_POST['startDate'];
    $endDate=$_POST['endDate'];
    $halfLeave=$_POST['halfLeave'];
    $fullLeave=$_POST['fullLeave'];
    $halCompOff=$_POST['halCompOff'];
    $fullCompOff=$_POST['fullCompOff'];
    $weekOff=$_POST['weekOff'];
    $actualWorkingDays=$_POST['actualWorkingDays'];    
    $subject="Jira Report";
    $email="<div style='width: 80%;margin: auto;border: 1px solid #DDDDDD;'>
         <div style='width: 100%;'><h1 style='padding: 10px;background-color: #800000;color: #F9F9F9;margin: 0px;font-family: sans-serif;font-size: 22px;'>Hello ".$name." - Jira Report  [ From- ".$startDate." ]  [ To - ".$endDate." ]</h1></div>
         <div style='width: 80%;margin: auto;padding: 5px;margin-top: 5px;'><span style='font-family: sans-serif;font-size: 20px;'>Total Hours</span>&nbsp;&nbsp;-&nbsp;&nbsp;<span style='font-family: sans-serif;font-size: 20px;font-weight: bold;color: maroon;'>".$hours."</span></div>
         <div style='width: 80%;margin: auto;padding: 5px;margin-top: 5px;'><span style='font-family: sans-serif;font-size: 20px;'>Percentage</span>&nbsp;&nbsp;-&nbsp;&nbsp;<span style='font-family: sans-serif;font-size: 20px;font-weight: bold;color: maroon;'>".$percent."</span></div>
         <div style='width: 80%;margin: auto;padding: 5px;margin-top: 5px;'><span style='font-family: sans-serif;font-size: 20px;'>Half Leaves</span>&nbsp;&nbsp;-&nbsp;&nbsp;<span style='font-family: sans-serif;font-size: 20px;font-weight: bold;color: maroon;'>".$halfLeave."</span></div>
         <div style='width: 80%;margin: auto;padding: 5px;margin-top: 5px;'><span style='font-family: sans-serif;font-size: 20px;'>Full Leaves</span>&nbsp;&nbsp;-&nbsp;&nbsp;<span style='font-family: sans-serif;font-size: 20px;font-weight: bold;color: maroon;'>".$fullLeave."</span></div>
         <div style='width: 80%;margin: auto;padding: 5px;margin-top: 5px;'><span style='font-family: sans-serif;font-size: 20px;'>Half CompOff</span>&nbsp;&nbsp;-&nbsp;&nbsp;<span style='font-family: sans-serif;font-size: 20px;font-weight: bold;color: maroon;'>".$halCompOff."</span></div>
         <div style='width: 80%;margin: auto;padding: 5px;margin-top: 5px;'><span style='font-family: sans-serif;font-size: 20px;'>Full CompOff</span>&nbsp;&nbsp;-&nbsp;&nbsp;<span style='font-family: sans-serif;font-size: 20px;font-weight: bold;color: maroon;'>".$fullCompOff."</span></div>
         <div style='width: 80%;margin: auto;padding: 5px;margin-top: 5px;'><span style='font-family: sans-serif;font-size: 20px;'>Weekends Holiday</span>&nbsp;&nbsp;-&nbsp;&nbsp;<span style='font-family: sans-serif;font-size: 20px;font-weight: bold;color: maroon;'>".$weekOff."</span></div>
         <div style='width: 80%;margin: auto;padding: 5px;margin-top: 5px;'><span style='font-family: sans-serif;font-size: 20px;'>Actual Days Worked</span>&nbsp;&nbsp;-&nbsp;&nbsp;<span style='font-family: sans-serif;font-size: 20px;font-weight: bold;color: maroon;'>".$actualWorkingDays."</span></div>
    </div>";  
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:<dictatorraj@gmail.com>' . "\r\n";
    //echo $to."<br/>".$subject."<br/>".$email;
    $temp=mail($to, $subject, $email,$headers);
        echo $temp;
        
       
    
?>
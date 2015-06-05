<?php
    /* if(isset($_POST)){
        if(isset($_POST['submitLoginForm'])){
            $username=$_POST['loginID'];
            $password=$_POST['password'];
            //echo $username."   ".$password;
            $process = curl_init("https://172.16.100.25:8443/rest/timesheet-gadget/1.0/raw-timesheet.json?targetUser=maaz.kazi%26startDate=10/May/2015%26endDate=11/May/2015");
            $username="raj.ranjan";
            $password="alepo123";
            curl_setopt($process, CURLOPT_HEADER, 0);
            curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/json', ""));
            curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
            curl_setopt($process, CURLOPT_RETURNTRANSFER, true);
            
            $return = curl_exec($process);
            curl_close($process); 
            print_r($return);
            
            
            
        }
     }
  
  */
   ?>



<!-- Navigation Starts -->
    
    <div class="container-fluid">
            
            <div class="container">
                         <form id="loginForm" method="post" action="index.php" style="margin-top: 100px;" class="form-horizontal">
                                <fieldset>
                                
                                <!-- Form Name -->
                                <legend></legend>
                                
                                <!-- Text input-->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="loginID">JiraID</label>  
                                  <div class="col-md-4">
                                  <input id="loginID" name="loginID" type="text" placeholder="EmployeeID" class="form-control input-md">
                                  
                                  </div>
                                </div>
                                
                                <!-- Password input-->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="password">Password</label>
                                  <div class="col-md-4">
                                    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">
                                    
                                  </div>
                                </div>
                                
                                <!-- Button -->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="submitLoginForm"></label>
                                  <div class="col-md-4">
                                    <input type="submit" id="submitLogin" value="Login"  name="submitLoginForm" class="btn btn-primary">
                                  </div>
                                </div>
                                
                                </fieldset>
                                <div class="form-group">
                                  <label class="col-md-4 control-label" ></label>
                                  <div id="result" style="color: red;" class="col-md-4">
                                    
                                  </div>
                                </div>
                                
                                </fieldset>
                            </form>

            
            </div>             
    </div> 
   
    
     
     
     
     
     
     

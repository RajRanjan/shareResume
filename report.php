<?php 
       $option="null";
       if(isset($_GET['option'])){
        $option=$_GET['option'];    
       } 
?> 

<!-- page will display when any otion is not set -->
<?php if($option=="allEmployee" || $option=="singleEmployee"): ?>
        <?php $allUsers=USERMASTER::find_all("ASC");?>
        <div class="container">
                <form class="navbar-form navbar-left" role="search">
                     <?php if($option=="allEmployee"): ?>
                          
                            <input type="hidden" value="all" id="jiraId" name="jiraId" class="form-control">                      
                          
                      <?php endif; ?>
                      <?php if($option=="singleEmployee"): ?>
                          <div class="form-group">
                            <select id="jiraId" name="jiraId" class="form-control">                             
                              <?php foreach($allUsers as $eachUser): ?>
                                <option value="<?php echo $eachUser->jiraId; ?>"><?php echo $eachUser->fullName; ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                      <?php endif; ?>
                      <div class="form-group">
                        <input type="text" class="form-control" name="startDate" id="startDate" placeholder="Start Date">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="endDate" id="endDate" placeholder="End Date">
                      </div>              
                      <button type="button" onclick="getTime()" name="getTimeSheet" class="btn btn-default btn-success">Get Timesheet</button>
               </form>
        </div>
<?php endif; ?>
<!-- page will display when any otion is set to defaulter list -->
<?php if($option=="defaulter"): ?>
        <script> $(document).ready(function(){getDefaulterList();}) </script>
<?php endif; ?> 


<div class="container" id="result"></div>


   
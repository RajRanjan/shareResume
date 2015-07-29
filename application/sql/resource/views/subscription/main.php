<div class="container-fluid">
  <div class="row">
      <!-- Left Section of page start -->
      <div class="col-sm-2" style="min-height:500px ;">
         <!--  <legend>Rest API</legend> -->
           <?php //include("restAPIMenu.php"); ?>     
      </div>
      <!-- Left Section of page Ends -->
      <div class="col-sm-10" style="min-height:500px ;">
             <!-- MAKING Three rows for form request and response -->             
             <div class="row">
                    <?php if(isset($pageToLoad)): ?>
                    <div class="col-xs-8" style="min-height: 200px; ">
                       <?php include($pageToLoad); ?>                   
                    </div>
                    <?php endif; ?>
                    
                    
                    <?php //if(isset($request) && isset($response)): ?>
                    <div class="col-xs-4" style="min-height: 200px;">
                           
                            <legend>Raw Response</legend>
                            <div class="text-primary" id="rawResponse" style="padding: 30px;">
                                
                            </div>
                           
                    </div>
                 
               </div>                
              <?php //endif; ?>
              
              
      </div>
  
  
  </div>


</div>
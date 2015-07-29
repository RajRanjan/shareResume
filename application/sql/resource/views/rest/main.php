<div class="container-fluid">
  <div class="row">
  
      <div class="col-sm-2" style="min-height:500px ;">
           <legend>Rest API</legend>
           <?php include("restAPIMenu.php"); ?>
                
      
      
      
      
      </div>
      <div class="col-sm-10" style="min-height:500px ;">
             <!-- MAKING Three rows for form request and response -->
             
             <div class="row">
                <?php if(isset($pageToLoad)): ?>
                <div class="col-xs-6" style="min-height: 200px;">
                   <?php include($pageToLoad); ?>                   
                </div>
                <?php endif; ?>
                
                
                <?php if(isset($request) && isset($response)): ?>
                <div class="col-xs-6" style="min-height: 200px;">
                    <legend>Request</legend>
                    <?php if(isset($request)){
                        echo "<pre>";
                        print_r($request);
                        echo "</pre>";
                    } ?>
                    <br /><br /></br>
                    <legend>Response</legend>
                    <div class="container-fluid" id="responseDiv" style="overflow-y: auto;max-height: 500px;" >
                   
                    <?php if(isset($response)){
                        echo "<pre>";
                        print_r($response);
                        echo "</pre>";
                    } ?>
                    </div>
                </div>
             
             </div>
               
        <?php endif; ?>
      </div>
  
  
  </div>


</div>
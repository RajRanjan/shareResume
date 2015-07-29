<?= form_open('rest/getTokens','class="form-horizontal" id="addTokenForm"'); ?>
<fieldset>

<!-- Form Name -->
<legend>Get Tokens</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="subscriberId">Subscriber Id</label>  
  <div class="col-md-4">
  <input id="subscriberId" name="subscriberId" type="text" class="form-control input-md" value="<?= set_value('subscriberId') ?>">    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label sr-only" for="getSubscriberSubmit">Single Button</label>
  <div class="col-md-4">
    <button id="getSubscriberSubmit" name="getSubscriberSubmit" class="btn btn-primary">Get</button>
  </div>
</div>

   <?= validation_errors(); ?>


</fieldset>
<?= form_close(); ?>

<br /><br /><br />

<?php  if(isset($response)){
    $responseArray=json_decode($response,true);//echo "<pre>";print_r($responseArray);echo "</pre>"; 
    if($responseArray[0]['errorCode']!="404"){
     echo "<legend>Tokens</legend>";    
       
            if(is_array($responseArray[1]['TOKENS'])){
                foreach($responseArray[1]['TOKENS'] as $key=>$value){
                    echo "<button type='button' class='btn btn-success' style='margin-right:10px;padding:10px 20px 10px 20px'>{$key}</button>";                   
                }
            }else {
                echo "<button type='button' class='btn btn-success'>{$responseArray[1]['TOKENS']}</button>";            
            }
    }
}
?>    





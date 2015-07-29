<?php //print_r($formPopulateData); ?>

<?= form_open('rest/addToken',"class='form-horizontal' id='addTurboBoost'"); ?>
<fieldset>
<?php if(isset($formPopulateData)): ?>
   <input type="hidden" name="id" id="id" value="<?= $formPopulateData[0]['id']?>" />

<?php endif; ?>
<!-- Form Name -->
<legend><?= isset($formPopulateData)?"Update TurboBoost":"Add TurboBoost" ?></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" class="form-control input-md" value="<?= isset($formPopulateData) ? $formPopulateData[0]['name'] : set_value('name') ?>">    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>  
  <div class="col-md-6">
  <textarea rows="8" style="resize: none;" id="description" name="description" type="text" class="form-control input-md"><?= isset($formPopulateData) ? $formPopulateData[0]['description'] : set_value('description') ?></textarea>    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="speed">Speed</label>  
  <div class="col-md-4">
  <input id="speed" name="speed" type="text" class="form-control input-md" value="<?= isset($formPopulateData) ? $formPopulateData[0]['speed'] : set_value('speed') ?>">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="duration">Duration</label>  
  <div class="col-md-4">
  <input id="duration" name="duration" type="text" class="form-control input-md" value="<?= isset($formPopulateData) ? $formPopulateData[0]['duration'] : set_value('duration') ?>">    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="cost">Cost</label>  
  <div class="col-md-4">
  <input id="cost" name="cost" type="text" class="form-control input-md" value="<?= isset($formPopulateData) ? $formPopulateData[0]['cost'] : set_value('cost') ?>">    
  </div>
</div>
<!-- Button -->

<div class="form-group">
  <label class="col-md-4 control-label sr-only" for="addTurboBoostSubmit">Single Button</label>
  <div class="col-md-4">     
    <button id="addTurboBoostSubmit" name="addTurboBoostSubmit" class="btn btn-primary"><?= isset($formPopulateData)?"Update":"Create" ?></button>
  </div>
</div>

   <?= validation_errors(); ?>


</fieldset>
<?= form_close(); ?>

<script>
  
   $("#addTurboBoost").on('submit',function(e){
         e.preventDefault();
         dataToSend="ajaxRequest=1&"+$(this).serialize();
         console.log(dataToSend);
         $.ajax({
                    url:"<?= base_url('index.php/configuration/addTurboBoost') ?>",
                    data:dataToSend,
                    type:'POST',
                    dataType:'json',
                    success:function(data){
                        jsonObj=data;              
                        if(jsonObj['errorCode']=="0"){
                            alert(jsonObj['errorMessage']);
                            window.location='<?= base_url('index.php/configuration')?>';
                        }else{
                            alert(jsonObj['errorMessage']);
                        }                      
                        
                    }
                });
                //Ajax Call End
        
   })
   

</script>
<?php //print_r($formPopulateData); ?>

<?= form_open('rest/addToken',"class='form-horizontal' id='addDataPass'"); ?>
<fieldset>
<?php if(isset($formPopulateData)): ?>
   <input type="hidden" name="id" id="id" value="<?= $formPopulateData[0]['id']?>" />

<?php endif; ?>
<!-- Form Name -->
<legend><?= isset($formPopulateData)?"Update DataPass":"Add DataPass" ?></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Datapass Name</label>  
  <div class="col-md-4">
  <input placeholder="Topup Package Name" id="name" name="name" type="text" class="form-control input-md" value="<?= isset($formPopulateData) ? $formPopulateData[0]['name'] : set_value('name') ?>">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="allotment">Data Allotment</label>  
  <div class="col-md-4">
  <input placeholder="Allotment in GB" id="allotment" name="allotment" type="text" class="form-control input-md" value="<?= isset($formPopulateData) ? $formPopulateData[0]['allotment'] : set_value('allotment') ?>">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="duration">Duration</label>  
  <div class="col-md-4">
  <input placeholder="Number Of Days" id="duration" name="duration" type="text" class="form-control input-md" value="<?= isset($formPopulateData) ? $formPopulateData[0]['duration'] : set_value('duration') ?>">    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="cost">Cost</label>  
  <div class="col-md-4">
  <input placeholder="Cost including tax in USD" id="cost" name="cost" type="text" class="form-control input-md" value="<?= isset($formPopulateData) ? $formPopulateData[0]['cost'] : set_value('cost') ?>">    
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
  
   $("#addDataPass").on('submit',function(e){
         e.preventDefault();
         dataToSend="ajaxRequest=1&"+$(this).serialize();
         console.log(dataToSend);
         $.ajax({
                    url:"<?= base_url('index.php/configuration/addDataPass') ?>",
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
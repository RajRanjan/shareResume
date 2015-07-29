<?= form_open('rest/deleteToken','class="form-horizontal" id="deleteTokenForm"'); ?>
<fieldset>

<!-- Form Name -->
<legend>Delete Token</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="subscriberId">Subscriber Id</label>  
  <div class="col-md-4">
  <input id="subscriberId" name="subscriberId" type="text" class="form-control input-md" value="<?= set_value('subscriberId') ?>">    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="tokenName">Token Name</label>  
  <div class="col-md-4">
  <input id="tokenName" name="tokenName" type="text" class="form-control input-md" value="<?= set_value('tokenName') ?>">    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label sr-only" for="deleteTokenSubmit">Single Button</label>
  <div class="col-md-4">
    <button id="deleteTokenSubmit" name="deleteTokenSubmit" class="btn btn-primary">Delete</button>
  </div>
</div>

   <?= validation_errors(); ?>


</fieldset>
<?= form_close(); ?>

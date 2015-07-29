<?= form_open('rest/addToken','class="form-horizontal" id="addTokenForm"'); ?>
<fieldset>

<!-- Form Name -->
<legend>Add Token</legend>

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
  <label class="col-md-4 control-label sr-only" for="addTokenSubmit">Single Button</label>
  <div class="col-md-4">
    <button id="addTokenSubmit" name="addTokenSubmit" class="btn btn-primary">Create</button>
  </div>
</div>

   <?= validation_errors(); ?>


</fieldset>
<?= form_close(); ?>

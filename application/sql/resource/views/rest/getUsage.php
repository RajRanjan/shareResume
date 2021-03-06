<?= form_open('rest/getUsage','class="form-horizontal" id="addTokenForm"'); ?>
<fieldset>

<!-- Form Name -->
<legend>Usage Details</legend>

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

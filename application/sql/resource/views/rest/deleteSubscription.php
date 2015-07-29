<?= form_open('rest/deleteSubscription','class="form-horizontal" id="deleteSubscriptionForm"'); ?>
<fieldset>

<!-- Form Name -->
<legend>Delete Subscription</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="subscriberId">Subscriber Id</label>  
  <div class="col-md-4">
  <input id="subscriberId" name="subscriberId" type="text" class="form-control input-md" value="<?= set_value('subscriberId') ?>">    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label sr-only" for="subscriptionDeleteSubmit">Single Button</label>
  <div class="col-md-4">
    <button id="subscriptionDeleteSubmit" name="subscriptionDeleteSubmit" class="btn btn-primary">Delete</button>
  </div>
</div>

   <?= validation_errors(); ?>


</fieldset>
<?= form_close(); ?>

<?= form_open('rest/addToken','class="form-horizontal" id="addTokenForm"'); ?>
<fieldset>

<!-- Form Name -->
<legend>Manage Speed</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newSpeed">New Speed</label>  
  <div class="col-md-4">
  <input id="newSpeed" name="newSpeed" type="text" class="form-control input-md" value="<?= set_value('newSpeed') ?>">    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label sr-only" for="newSpeedSubmit">Single Button</label>
  <div class="col-md-4">
    <button id="newSpeedSubmit" name="newSpeedSubmit" class="btn btn-primary">Change</button>
  </div>
</div>

   <?= validation_errors(); ?>


</fieldset>
<?= form_close(); ?>

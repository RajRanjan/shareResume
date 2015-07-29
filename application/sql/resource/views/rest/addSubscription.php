<?= form_open('rest/addSubscription','class="form-horizontal" id="addSubscriberForm"'); ?>
<fieldset>

<!-- Form Name -->
<legend>Add Subscriber</legend>
<?= validation_errors(); ?>
<!-- Text input-->
<div class="row">
  <div class="col-sm-6">
            <div class="form-group">
              <label class="col-md-6 control-label" for="SUBSCRIBERID">Subscriber Id</label>  
              <div class="col-md-6">
              <input id="SUBSCRIBERID" name="SUBSCRIBERID" type="text" class="form-control input-md" value="<?= set_value('SUBSCRIBERID') ?>">    
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-6 control-label" for="IMSI">IMSI *</label>  
              <div class="col-md-6">
              <input id="IMSI" name="IMSI" type="text" class="form-control input-md" value="<?= set_value('IMSI') ?>">    
              </div>
            </div>
             
            <div class="form-group">
              <label class="col-md-6 control-label" for="MSISDN">MSISDN *</label>  
              <div class="col-md-6">
              <input id="MSISDN" name="MSISDN" type="text" class="form-control input-md" value="<?= set_value('MSISDN') ?>">    
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-6 control-label" for="PackageName">Package Name *</label>  
              <div class="col-md-6">
              <input id="PackageName" name="PackageName" type="text" class="form-control input-md" value="<?= set_value('PackageName') ?>">    
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-6 control-label" for="CREATEDATE">Create Date</label>  
              <div class="col-md-6">
              <input id="CREATEDATE" name="CREATEDATE" type="text" class="form-control input-md" value="<?= set_value('CREATEDATE') ?>">    
              </div>
            </div>
             <div class="form-group">
              <label class="col-md-6 control-label" for="BARRINGSTATUS">Barring Status</label>  
              <div class="col-md-6">
              <input id="BARRINGSTATUS" name="BARRINGSTATUS" type="text" class="form-control input-md" value="<?= set_value('BARRINGSTATUS') ?>">    
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-6 control-label" for="EMAIL">Email</label>  
              <div class="col-md-6">
              <input id="EMAIL" name="EMAIL" type="text" class="form-control input-md" value="<?= set_value('EMAIL') ?>">    
              </div>
            </div>
            
           
            
  </div>
  <div class="col-sm-6">
             <div class="form-group">
              <label class="col-md-6 control-label" for="PARENTSUBSCRIBERID">Parent Subs. Id</label>  
              <div class="col-md-6">
              <input id="PARENTSUBSCRIBERID" name="PARENTSUBSCRIBERID" type="text" class="form-control input-md" value="<?= set_value('PARENTSUBSCRIBERID') ?>">    
              </div>
              </div>
               <div class="form-group">
              <label class="col-md-6 control-label" for="SIPURI">SIPURI *</label>  
              <div class="col-md-6">
              <input id="SIPURI" name="SIPURI" type="text" class="form-control input-md" value="<?= set_value('SIPURI') ?>">    
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-6 control-label" for="USERNAI">USERNAI *</label>  
              <div class="col-md-6">
              <input id="USERNAI" name="USERNAI" type="text" class="form-control input-md" value="<?= set_value('USERNAI') ?>">    
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-6 control-label" for="TOKENS">Tokens</label>  
              <div class="col-md-6">
              <input id="TOKENS" name="TOKENS" type="text" class="form-control input-md" value="<?= set_value('TOKENS') ?>">    
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-6 control-label" for="STARTDATE">Start Date</label>  
              <div class="col-md-6">
              <input id="STARTDATE" name="STARTDATE" type="text" class="form-control input-md" value="<?= set_value('STARTDATE') ?>">    
              </div>
            </div>
            <!--
            <div class="form-group">
              <label class="col-md-6 control-label" for="SUBSCRIPTIONCATEGORY">Subscription Cat.</label>  
              <div class="col-md-6">
              <input id="SUBSCRIPTIONCATEGORY" name="SUBSCRIPTIONCATEGORY" type="text" class="form-control input-md" value="<?= set_value('SUBSCRIPTIONCATEGORY') ?>">    
              </div>
            </div>
            -->           
            
            <div class="form-group">
              <label class="col-md-6 control-label" for="MOBILE">Mobile</label>  
              <div class="col-md-6">
              <input id="MOBILE" name="MOBILE" type="text" class="form-control input-md" value="<?= set_value('MOBILE') ?>">    
              </div>
            </div>
            
            
           <!--
            <div class="form-group">
              <label class="col-md-6 control-label" for="SPEEDPROFILE">Speed Profile</label>  
              <div class="col-md-6">
              <input id="SPEEDPROFILE" name="SPEEDPROFILE" type="text" class="form-control input-md" value="<?= set_value('SPEEDPROFILE') ?>">    
              </div>
            </div>
            -->
  </div>
</div>
<!-- Making Collapsable content -->
 <div class="panel-group" id="customFields">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#customFields" href="#collapseCustomFields"><span class="glyphicon glyphicon-folder-close">
                    </span>Custom Fields</a>
                </h4>
            </div>
            <div id="collapseCustomFields" class="panel-collapse collapse">
                <div class="panel-body" style="background-color: #F3F3F3;">
                    <!--Adding Form inside -->
                    <div class="row" style="padding: 10px;">
                          <div class="col-sm-6">
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD1">Custom Field 1</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD1" name="CUSTOMFIELD1" type="text" class="form-control input-md" value="<?= set_value('CUSTOMFIELD1') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD2">Custom Field 2</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD2" name="CUSTOMFIELD2" type="text" class="form-control input-md" value="<?= set_value('CUSTOMFIELD2') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD3">Custom Field 3</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD3" name="CUSTOMFIELD3" type="text" class="form-control input-md" value="<?= set_value('CUSTOMFIELD3') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD4">Custom Field 4</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD4" name="CUSTOMFIELD4" type="text" class="form-control input-md" value="<?= set_value('CUSTOMFIELD4') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD5">Custom Field 5</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD5" name="CUSTOMFIELD5" type="text" class="form-control input-md" value="<?= set_value('CUSTOMFIELD5') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD6">Custom Field 6</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD6" name="CUSTOMFIELD6" type="text" class="form-control input-md" value="<?= set_value('CUSTOMFIELD6') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD7">Custom Field 7</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD7" name="CUSTOMFIELD7" type="text" class="form-control input-md" value="<?= set_value('CUSTOMFIELD7') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD8">Custom Field 8</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD8" name="CUSTOMFIELD8" type="text" class="form-control input-md" value="<?= set_value('CUSTOMFIELD8') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD9">Custom Field 9</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD9" name="CUSTOMFIELD9" type="text" class="form-control input-md" value="<?= set_value('CUSTOMFIELD9') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD10">Custom Field 10</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD10" name="CUSTOMFIELD10" type="text" class="form-control input-md" value="<?= set_value('CUSTOMFIELD10') ?>">    
                                  </div>
                                </div>
                          </div>
                          <div class="col-sm-6">
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD1">CustomNum Field 1</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD1" name="CUSTOMNUMFIELD1" type="text" class="form-control input-md" value="<?= set_value('CUSTOMNUMFIELD1') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD2">CustomNum Field 2</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD2" name="CUSTOMNUMFIELD2" type="text" class="form-control input-md" value="<?= set_value('CUSTOMNUMFIELD2') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD3">CustomNum Field 3</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD3" name="CUSTOMNUMFIELD3" type="text" class="form-control input-md" value="<?= set_value('CUSTOMNUMFIELD3') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD4">CustomNum Field 4</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD4" name="CUSTOMNUMFIELD4" type="text" class="form-control input-md" value="<?= set_value('CUSTOMNUMFIELD4') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD5">CustomNum Field 5</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD5" name="CUSTOMNUMFIELD5" type="text" class="form-control input-md" value="<?= set_value('CUSTOMNUMFIELD5') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD6">CustomNum Field 6</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD6" name="CUSTOMNUMFIELD6" type="text" class="form-control input-md" value="<?= set_value('CUSTOMNUMFIELD6') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD7">CustomNum Field 7</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD7" name="CUSTOMNUMFIELD7" type="text" class="form-control input-md" value="<?= set_value('CUSTOMNUMFIELD7') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD8">CustomNum Field 8</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD8" name="CUSTOMNUMFIELD8" type="text" class="form-control input-md" value="<?= set_value('CUSTOMNUMFIELD8') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD9">CustomNum Field 9</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD9" name="CUSTOMNUMFIELD9" type="text" class="form-control input-md" value="<?= set_value('CUSTOMNUMFIELD9') ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD10">CustomNum Field 10</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD10" name="CUSTOMNUMFIELD10" type="text" class="form-control input-md" value="<?= set_value('CUSTOMNUMFIELD10') ?>">    
                                  </div>
                                </div>
                          </div>
                    </div>
                    <!--Adding Form Ends -->
                </div>
            </div>
        </div>
 </div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-10 control-label sr-only" for="addNewSubscriber">Single Button</label>
  <div class="col-md-2">
    <button id="addNewSubscriber" name="addNewSubscriber" class="btn btn-primary">Create</button>
  </div>
</div>

   


</fieldset>
<?= form_close(); ?>

<?= form_open('rest/getSubscriber','class="form-horizontal" id="addTokenForm"'); ?>
<fieldset>

<!-- Form Name -->
<legend>Get Subscriber</legend>

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

<?php  if(isset($response)): ?>
<?php $responseArray=json_decode($response,true);
      //echo "<pre>";
     // print_r($responseArray);
      //echo "</pre>";
      
      

 ?>
 <?php if($responseArray[0]['errorCode']!="404"): ?>
<!--Displaying the result -->
<?= form_open('','class="form-horizontal" id="addSubscriberForm"'); ?>
<fieldset>
<div class="row">
  <div class="col-sm-6">
            <div class="form-group">
              <label class="col-md-6 control-label" for="SUBSCRIBERID">Subscriber Id</label>  
              <div class="col-md-6">
              <input id="SUBSCRIBERID" name="SUBSCRIBERID" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['SUBSCRIBERID'] ?>">    
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-6 control-label" for="IMSI">IMSI *</label>  
              <div class="col-md-6">
              <input id="IMSI" name="IMSI" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['IMSI'] ?>">    
              </div>
            </div>
             
            <div class="form-group">
              <label class="col-md-6 control-label" for="MSISDN">MSISDN *</label>  
              <div class="col-md-6">
              <input id="MSISDN" name="MSISDN" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['MSISDN'] ?>">    
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-6 control-label" for="PackageName">Package Name *</label>  
              <div class="col-md-6">
              <input id="PackageName" name="PackageName" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['PackageName'] ?>">    
              </div>
            </div>
            <!--
            <div class="form-group">
              <label class="col-md-6 control-label" for="CREATEDATE">Create Date</label>  
              <div class="col-md-6">
              <input id="CREATEDATE" name="CREATEDATE" type="text" class="form-control input-md" value="<?= $responseArray[1]['CREATEDATE'] ?>">    
              </div>
            </div>
            -->
             <div class="form-group">
              <label class="col-md-6 control-label" for="BARRINGSTATUS">Barring Status</label>  
              <div class="col-md-6">
              <input id="BARRINGSTATUS" name="BARRINGSTATUS" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['BARRINGSTATUS'] ?>">    
              </div>
            </div>
            <!--
            <div class="form-group">
              <label class="col-md-6 control-label" for="EMAIL">Email</label>  
              <div class="col-md-6">
              <input id="EMAIL" name="EMAIL" type="text" class="form-control input-md" value="<?= $responseArray[1]['EMAIL'] ?>">    
              </div>
            </div>
            -->
            
           
            
  </div>
  <div class="col-sm-6">
             <div class="form-group">
              <label class="col-md-6 control-label" for="PARENTSUBSCRIBERID">Parent Subs. Id</label>  
              <div class="col-md-6">
              <input id="PARENTSUBSCRIBERID" name="PARENTSUBSCRIBERID" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['PARENTSUBSCRIBERID'] ?>">    
              </div>
              </div>
               <div class="form-group">
              <label class="col-md-6 control-label" for="SIPURI">SIPURI *</label>  
              <div class="col-md-6">
              <input id="SIPURI" name="SIPURI" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['SIPURI'] ?>">    
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-6 control-label" for="USERNAI">USERNAI *</label>  
              <div class="col-md-6">
              <input id="USERNAI" name="USERNAI" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['USERNAI'] ?>">    
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-6 control-label" for="TOKENS">Tokens</label>  
              <div class="col-md-6">
              <?php $str="";if(is_array($responseArray[1]['TOKENS']))
                        {
                           foreach($responseArray[1]['TOKENS'] as $key=>$value){
                              $str=$str.",".$key;
                              $str= ltrim ($str,',');
                           } 
                        }else{$str=$responseArray[1]['TOKENS'];} ?>
              <input id="TOKENS" name="TOKENS" type="text" readonly="readOnly" class="form-control input-md" value="<?= $str ?>">    
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-6 control-label" for="STARTDATE">Start Date</label>  
              <div class="col-md-6">
              <input id="STARTDATE" name="STARTDATE" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['STARTDATE'] ?>">    
              </div>
            </div>
            <!--
            <div class="form-group">
              <label class="col-md-6 control-label" for="SUBSCRIPTIONCATEGORY">Subscription Cat.</label>  
              <div class="col-md-6">
              <input id="SUBSCRIPTIONCATEGORY" name="SUBSCRIPTIONCATEGORY" type="text" class="form-control input-md" value="<?= $responseArray[1]['SUBSCRIPTIONCATEGORY'] ?>">    
              </div>
            </div>
            -->           
            <!--
            <div class="form-group">
              <label class="col-md-6 control-label" for="MOBILE">Mobile</label>  
              <div class="col-md-6">
              <input id="MOBILE" name="MOBILE" type="text" class="form-control input-md" value="<?= $responseArray[1]['MOBILE'] ?>">    
              </div>
            </div>
            -->
            
           <!--
            <div class="form-group">
              <label class="col-md-6 control-label" for="SPEEDPROFILE">Speed Profile</label>  
              <div class="col-md-6">
              <input id="SPEEDPROFILE" name="SPEEDPROFILE" type="text" class="form-control input-md" value="<?= $responseArray[1]['SPEEDPROFILE'] ?>">    
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
                <div class="panel-body" style="background-color: #F3F3F3;" >  
                    <!--Adding Form inside -->
                    <div class="row" style="padding: 10px;">
                          <div class="col-sm-6">
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD1">Custom Field 1</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD1" name="CUSTOMFIELD1" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMFIELD1'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD2">Custom Field 2</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD2" name="CUSTOMFIELD2" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMFIELD2'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD3">Custom Field 3</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD3" name="CUSTOMFIELD3" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMFIELD3'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD4">Custom Field 4</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD4" name="CUSTOMFIELD4" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMFIELD4'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD5">Custom Field 5</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD5" name="CUSTOMFIELD5" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMFIELD5'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD6">Custom Field 6</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD6" name="CUSTOMFIELD6" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMFIELD6'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD7">Custom Field 7</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD7" name="CUSTOMFIELD7" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMFIELD7'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD8">Custom Field 8</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD8" name="CUSTOMFIELD8" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMFIELD8'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD9">Custom Field 9</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD9" name="CUSTOMFIELD9" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMFIELD9'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMFIELD10">Custom Field 10</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMFIELD10" name="CUSTOMFIELD10" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMFIELD10'] ?>">    
                                  </div>
                                </div>
                          </div>
                          <div class="col-sm-6">
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD1">CustomNum Field 1</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD1" name="CUSTOMNUMFIELD1" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMNUMFIELD1'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD2">CustomNum Field 2</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD2" name="CUSTOMNUMFIELD2" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMNUMFIELD2'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD3">CustomNum Field 3</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD3" name="CUSTOMNUMFIELD3" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMNUMFIELD3'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD4">CustomNum Field 4</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD4" name="CUSTOMNUMFIELD4" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMNUMFIELD4'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD5">CustomNum Field 5</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD5" name="CUSTOMNUMFIELD5" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMNUMFIELD5'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD6">CustomNum Field 6</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD6" name="CUSTOMNUMFIELD6" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMNUMFIELD6'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD7">CustomNum Field 7</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD7" name="CUSTOMNUMFIELD7" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMNUMFIELD7'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD8">CustomNum Field 8</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD8" name="CUSTOMNUMFIELD8" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMNUMFIELD8'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD9">CustomNum Field 9</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD9" name="CUSTOMNUMFIELD9" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMNUMFIELD9'] ?>">    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="CUSTOMNUMFIELD10">CustomNum Field 10</label>  
                                  <div class="col-md-6">
                                  <input id="CUSTOMNUMFIELD10" name="CUSTOMNUMFIELD10" type="text" readonly="readOnly" class="form-control input-md" value="<?= $responseArray[1]['CUSTOMNUMFIELD10'] ?>">    
                                  </div>
                                </div>
                          </div>
                    </div>
                    <!--Adding Form Ends -->
                </div>
            </div>
        </div>
 </div>



   


</fieldset>
<?= form_close(); ?>
<?php endif; ?>
<?php endif; ?>
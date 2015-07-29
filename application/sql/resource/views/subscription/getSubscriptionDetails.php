<?= form_open('subscription/getSubscription','class="form-horizontal" id="addTokenForm"'); ?>
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="subscriberId">Customer Id</label>  
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
<!-- Displaying Contents when form has been submitted -->
<!-- Panel group starts -->
<br />
<?php if(isset($mapping)): ?>
<hr />
        <div>
               
        <div class="panel-group" id="accordion" >
            <div class="row">
              <div class="col-sm-9">
                     <div class="row" style="padding: 0px;font-weight: bold;">
                            <div class="col-xs-3 text-center text-primary">&nbsp;&nbsp;<span class="glyphicon glyphicon-user" aria-hidden="true"></span>Subscriber Id</div>
                            <div class="col-xs-2 text-center text-primary"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>IMSI</div>
                            <div class="col-xs-2 text-center text-primary"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>MSISDN</div>
                            <div class="col-xs-2 text-center text-primary"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Create Date</div>
                            <div class="col-xs-3 text-center text-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>Barring Status</div>
                     </div> 
              </div>
              <div class="col-sm-3">
               </div>
        </div>
               
              <?php $count=0;foreach($mapping as $key=>$value): ?>              <?php
                   $reponse=getRestData("http://172.16.100.77:8080/pcrf-ems/subscriptions/{$value}");
                   $jsonobj=json_decode($reponse,true); 
                   //echo "<pre>";
                  //print_r($jsonobj); 
                   //echo "</pre>";                  
              ?>
              <div class="panel panel-default" style="padding: 0px;" >
                    <div class="panel-heading" style="padding: 0px;">
                        <h4 class="panel-title">
                            <div class="row">
                                 <div class="col-sm-9">
                                        <a data-toggle="" data-parent="#accordion1" href="#<?= $count ?>">
                                            <div class="row text-primary" style="font-size: 13px;font-weight: bold;padding: 12px;">
                                                <div class="col-xs-3 text-center text-info" style="border-right: 1px solid #BEBEBE;"><?= $jsonobj[1]['SUBSCRIBERID']; ?></div>
                                                <div class="col-xs-2 text-center text-info" style="border-right: 1px solid #BEBEBE;"><?= $jsonobj[1]['IMSI']; ?></div>
                                                <div class="col-xs-2 text-center text-info" style="border-right: 1px solid #BEBEBE;"><?= $jsonobj[1]['MSISDN']; ?></div>
                                                <div class="col-xs-2 text-center text-info" style="border-right: 1px solid #BEBEBE;"><?php if(($jsonobj[1]['CREATEDATE'])==""){echo "Not Available";}else{echo date("d-M-Y",strtotime($jsonobj[1]['CREATEDATE']));} ?></div>
                                                <div class="col-xs-3 text-center text-info" style="border-right: 1px solid #BEBEBE;"><?php if(($jsonobj[1]['BARRINGSTATUS'])=="1"){echo "Barred";}else if(($jsonobj[1]['BARRINGSTATUS'])=="0"){echo "UnBarred"; }  ?></div>                                            
                                            </div>
                                        </a>
                                 </div>
                                 <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-4" style="margin-top: 5px;">
                                                  <?=  form_open('index.php/subscription/changeBarringStatus','class="form-inline"'); ?>
                                                                         
                                                     <?php if(($jsonobj[1]['BARRINGSTATUS'])=="1"): ?>                                                        
                                                        <button type="submit" subscriberId="<?= $jsonobj[1]['SUBSCRIBERID']; ?>" barringStatusValue="<?= $jsonobj[1]['BARRINGSTATUS']; ?>" class="btn btn-sm btn-danger barStatusButton" name="barringButton" id="barringButton">UnBar</button>
                                                     <?php endif ?>  
                                                     <?php if(($jsonobj[1]['BARRINGSTATUS'])=="0"): ?>
                                                        <button type="submit" subscriberId="<?= $jsonobj[1]['SUBSCRIBERID']; ?>" barringStatusValue="<?= $jsonobj[1]['BARRINGSTATUS']; ?>" class="btn btn-sm btn-success barStatusButton" name="barringButton" id="barringButton">Bar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                     <?php endif ?>                                                        
                                                  <?=  form_close(); ?> 
                                                
                                            </div>
                                            <div class="col-sm-3 pull-left" style="padding-top: 8px;">
                                                 <small class="text-primary rawSubscriptionData" style="font-weight: bold;cursor: pointer;"><span style="visibility: hidden;position: absolute;" class="data"><?= $reponse ?></span>&nbsp;&nbsp;Request</small>
                                            </div>
                                            <div class="col-sm-3 pull-left" style="padding-top: 8px;">
                                                 <small class="text-primary rawSubscriptionData" style="font-weight: bold;cursor: pointer;"><span style="visibility: hidden;position: absolute;" class="data"><?= $reponse ?></span>&nbsp;&nbsp;Response</small>
                                            </div>
                                                                               
                                        </div>                                        
                                 </div>
                            </div>
                            
                            
                        </h4>
                    </div>
                    
                    <div id="<?= $count ?>" class="">
                        <div class="panel-body">
                            <table class="table table-responsive table-bordered">
                               <!-- populating the data of each subscription in a row starts -->
                                <?php //$responseArray=json_decode($response,true); ?>
                                <?php 
                                  //getting the usage
                                  $responseArray=getRestData("http://172.16.100.77:8080/pcrf-ems/subscriptions/{$jsonobj[1]['SUBSCRIBERID']}/accumulators");
                                  $array1=json_decode($responseArray,true);
                                  array_shift($array1);
                                  //echo "<pre>";
                                    //print_r($array1); 
                               // echo "</pre>"; 
                                
                                 ?>
                                <?php foreach($array1 as $eachResponseArray): ?>
                                <!--
                                <tr><td class="text-center"></td><td class="text-center"><?= $eachResponseArray['ACCUMULATEDUSAGE']; ?></td><td class="text-center"><?= $eachResponseArray['ASSETID']; ?></td><td class="text-center"><?= $eachResponseArray['PACKAGENAME']; ?></td><td class="text-center"><?= $eachResponseArray['SUBSCRIPTIONINDEX']; ?></td></tr>
                                -->
                                <?php 
                                    $ACCUMULATEDUSAGE=floatval($eachResponseArray['ACCUMULATEDUSAGE']);
                                    $UNIT=$eachResponseArray['UNIT'];
                                    $LIMIT=floatval($eachResponseArray['LIMIT']);
                                    $percent=intval(($ACCUMULATEDUSAGE/$LIMIT)*100);                 
                                ?>
                                <tr>
                                    <td colspan="5">
                                       <!-- progressbar -->
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-sm-8" >
                                                <strong>Label - <span class="text-primary text-success"><?= $eachResponseArray['LABEL']; ?></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Usage - <span class="text-primary text-success"><?= $ACCUMULATEDUSAGE." ".$UNIT ?></span>&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp; Limit - <span class="text-primary text-success"><?= $LIMIT." ".$UNIT ?></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Next Reset Date - <span class="text-primary text-success"><?= date('d-M-Y',strtotime($eachResponseArray['NextResetDate'])); ?></span></strong>
                                                <?php if($percent<=50): ?>                                        
                                                    <div class="progress" style="background-color: #C8E7F7;border: 1px dotted #B0B0B0;">                        
                                                        <div class="progress-bar progress-bar-success progress-bar-striped "  role="progressbar" aria-valuenow="<?= $percent?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 3em;width: <?= $percent; ?>%;"><?= $percent ?>%</div>
                                                    </div> 
                                                <?php endif; ?> 
                                                <?php if($percent>50 && $percent<=80): ?>                                        
                                                    <div class="progress" style="background-color: #C8E7F7;border: 1px dotted #B0B0B0;">                        
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped "  role="progressbar" aria-valuenow="<?= $percent?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 3em;width: <?= $percent; ?>%;"><?= $percent ?>%</div>
                                                    </div> 
                                                <?php endif; ?> 
                                                <?php if($percent>80): ?>                                        
                                                    <div class="progress" style="background-color: #C8E7F7;border: 1px dotted #B0B0B0;">                        
                                                        <div class="progress-bar progress-bar-danger progress-bar-striped "  role="progressbar" aria-valuenow="<?= $percent?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 3em;width: <?= $percent; ?>%;"><?= $percent ?>%</div>
                                                    </div> 
                                                <?php endif; ?>                              
                                            </div> 
                                            <div class="col-sm-4" >
                                                <!-- Form To Alter accumulated usage start -->
                                                    <br />
                                                    <span id="<?= $count; ?>"  class="accumulatorButton text-success" style="font-weight: bold;cursor: pointer;">Adjustment</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span class="usageResponse text-success" style="font-weight:bold;cursor: pointer;"><span class="usageData" style="visibility: hidden;position: absolute;"><?php echo $responseArray  ?></span>Response</span>
                                                    <div id="accumulatorForm<?= $count;?>">
                                                     <script>$("#accumulatorForm"+<?= $count ?>).hide();</script>
                                                        <?= form_open('subscription/updateAccumulator','class="form-inline accumulatorUpdateForm" id="addTokenForm"'); ?>
                                                           <input type="hidden" name="subscriberId" value="<?= $eachResponseArray['SUBSCRIBERID']  ?>" />
                                                           <input type="hidden" name="assetName" value="<?= $eachResponseArray['ASSETNAME']  ?>" />
                                                           <div class="form-group">
                                                                <input type="text" class="form-control" id="bytes" name="bytes" placeholder="Data in Bytes." />
                                                           </div>
                                                           <button type="submit" class="btn btn-success">Set</button> 
                                                        <?= form_close(); ?>
                                                    </div>    
                                                <!-- Form To Alter accumulated usage Ends  -->
                                            </div>                    
                                         </div> 
                                       
                                       <!-- progressbar -->
                                
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                               <!-- populating the data of each subscription in a row Ends  --> 
                            </table>
                        </div>
                    </div>
              </div>
              <?php $count++; ?>
              <?php endforeach; ?>
        </div>
        <!-- Panel group Ends -->
        </div>
<?php endif; ?>     



<script>
  
        
//AJAX FOR SETTING BAR STATUS
   $(".barStatusButton").on('click',function(e){
         e.preventDefault();
         var barringStatusValue=$(this).attr('barringStatusValue');
         var subscriberId=$(this).attr('subscriberId');
         if(barringStatusValue=="0"){barringStatusValue="1";}else if(barringStatusValue=="1"){barringStatusValue="0";}
         dataToSend="ajaxRequest=1&"+"barringStatusValue="+barringStatusValue+"&subscriberId="+subscriberId;
         //alert(barringStatusValue);
         $.ajax({
                    url:"<?= base_url('index.php/subscription/changeBarringStatus') ?>",
                    data:dataToSend,
                    type:'POST',
                    success:function(data){
                        //alert(data);
                        var jsonObj=JSON.parse(data);
                        console.log(jsonObj);
                        if(jsonObj[0]['errorCode']==200){
                            alert(jsonObj[0]['errorMessage']);
                            location.reload();
                        }else{
                            alert(jsonObj[0]['errorMessage']);
                        }
                        
                        //$("#result").html(data);
                    }
                });
                //Ajax Call End
   });
//AJAX FOR CHANGING ACCUMULATED USAGE               
    //toggling feature start
    $(".accumulatorButton").on('click',function(e){
       $(this).hide();
       var id=$(this).attr('id');
       $("#accumulatorForm"+id).show(500);
   });
   //toggling feature ends
   $(".accumulatorUpdateForm").on('submit',function(e){
         e.preventDefault();
         var subscriberId=$("input[name='subscriberId']",this).val();
         var bytes=$("input[name='bytes']",this).val();
         var assetName=$("input[name='assetName']",this).val();
         dataToSend="ajaxRequest=1&"+"bytes="+bytes+"&subscriberId="+subscriberId+"&assetName="+assetName;        
         $.ajax({
                    url:"<?= base_url('index.php/subscription/updateAccumulator') ?>",
                    data:dataToSend,
                    type:'POST',
                    success:function(data){
                        //console.log(data);
                        var jsonObj=JSON.parse(data);
                        //console.log(jsonObj);
                        if(jsonObj[0]['errorCode']==200){
                            alert(jsonObj[0]['errorMessage']);
                            location.reload();
                        }else{
                            alert(jsonObj[0]['errorMessage']);
                        }
                        
                      
                    }
                });
                //Ajax Call End
                
                
   });
//showing source data

    $(".rawSubscriptionData").on('click',function(e){
        //var data=$(this).attr('data');
        data=$(this).find('.data').html();
        data="<pre>"+data+"</pre>";
        //alert(data);
        $("#rawResponse").html(data);
    });
    $(".usageResponse").on('click',function(e){
        //var data=$(this).attr('data');
        data=$(this).find('.usageData').html();
        //alert(data);
        data="<pre>"+data+"</pre>";
        $("#rawResponse").html(data);
    });



</script>
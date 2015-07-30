
<div class="bg-form border-form padding30">
    <?= form_open('projects/add','id="editBasicInformation"') ?>
         <?php if(isset($formPopulateData)): ?>
            <input type="hidden" name="id" id="id" value="<?= $formPopulateData['id']; ?>" />
         <?php endif; ?>
         <div class="form-group">
             <div class="row">
                <div class="col-sm-4">
                    <label class="text-form-label" for="contact_no">Contact Number</label>
                    <input class="col-sm-6 form-control text-form-input"  name="contact_no" id="contact_no" value="<?= isset($formPopulateData) ? $formPopulateData['contact_no'] : set_value('contact_no') ?>"  />
                </div>
                <div class="col-sm-4">
                    <label class="text-form-label" for="birth_date">Birth Date</label>
                    <input class="col-sm-6 form-control text-form-input"  name="birth_date" id="birth_date" value="<?= isset($formPopulateData) ? textFormatDate(strtotime($formPopulateData['birth_date'])) : set_value('birth_date') ?>"  />
                </div>
             </div>     
         </div> 
         <div class="form-group">
             <div class="row">
                <div class="col-sm-4">
                    <label class="text-form-label" for="country">Country</label>
                    <select class="col-sm-6 form-control"  name="country" id="country">
                        <option value="india">India</option>
                        <option value="pakistan">Pakistan</option>
                    </select>
                </div>
                <div class="col-sm-4">
                </div>
             </div>     
         </div>
          <div class="form-group">
            <label class="text-form-label" for="website">Website</label>
            <input class="form-control text-form-input" name="website" id="website" value="<?= isset($formPopulateData) ? $formPopulateData['website'] : set_value('website') ?>"  />
         </div>
         <div class="form-group">
            <label class="text-form-label" for="facebook">Facebook</label>
            <input class="form-control text-form-input" name="facebook" id="facebook" value="<?= isset($formPopulateData) ? $formPopulateData['facebook'] : set_value('facebook') ?>"  />
         </div>
         <div class="form-group">
            <label class="text-form-label" for="linkedin">LinkedIn</label>
            <input class="form-control text-form-input" name="linkedin" id="linkedin" value="<?= isset($formPopulateData) ? $formPopulateData['linkedin'] : set_value('linkedin') ?>"  />
         </div>
         <div class="form-group">
            <label class="text-form-label" for="quora">Quora</label>
            <input class="form-control text-form-input" name="quora" id="quora" value="<?= isset($formPopulateData) ? $formPopulateData['quora'] : set_value('quora') ?>"  />
         </div> 
         <button class="btn btn-primary" type="submit" name="addBasicInformationSubmitButton" id="addBasicInformationSubmitButton">Save</button>
                
         <div id="basicInformationError"></div>
    <?= form_close() ?>
</div>

<script>
//Setting the date pickers
    $("#birth_date").datepicker({
        //setting datepicker configrations
        dateFormat:'dd-M-yy',
        changeMonth:true,
         changeYear:true,
         yearRange:'1950:2015'
    });
    
  
//ajax functionality on login     
    $("#editBasicInformation").on('submit',function(e){
        e.preventDefault();
        var errorDisplayDiv=$("#basicInformationError");
        errorDisplayDiv.html("");
        var dataToSend=$(this).serialize();
        //console.log(dataToSend);
        $.ajax({
               url: '<?= base_url('index.php/basic/edit') ?>',
               type: 'POST',
               data:'ajaxRequest=1&'+dataToSend,
               dataType:'json',
               success: function(jsonData) {
                  console.log(jsonData);                  
                  if(jsonData['errorCode']!=0){
                    errorDisplayDiv.html(jsonData['errorMessage']);
                  }else if(jsonData['errorCode']==0){
                    //errorDisplayDiv.html(jsonData['errorMessage']);
                    window.location="<?= base_url('index.php/basic'); ?>"
                  }
               },
               error:function(data){
                  //console.log(data);
               },
               complete:function(data){
                 // console.log(data);
               }
        });//ajax ends
            
    })//function ends



</script>
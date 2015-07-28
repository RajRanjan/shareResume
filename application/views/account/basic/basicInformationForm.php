<div class="bg-form border-form padding30">
    <?= form_open('projects/add','id="editBasicInformation"') ?>
         <div class="form-group">
             <div class="row">
                <div class="col-sm-4">
                    <label class="text-form-label" for="contact_number">Contact Number</label>
                    <input class="col-sm-6 form-control text-form-input"  name="contact_number" id="contact_number" value="<?= set_value('contact_number'); ?>"  />
                </div>
                <div class="col-sm-4">
                    <label class="text-form-label" for="birth_date">Birth Date</label>
                    <input class="col-sm-6 form-control text-form-input"  name="birth_date" id="birth_date" value="<?= set_value('birth_date'); ?>"  />
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
            <label class="text-form-label" for="facebook">Facebook</label>
            <input class="form-control text-form-input" name="facebook" id="facebook" value="<?= set_value('facebook'); ?>"  />
         </div>
         <div class="form-group">
            <label class="text-form-label" for="linkedin">LinkedIn</label>
            <input class="form-control text-form-input" name="linkedin" id="linkedin" value="<?= set_value('linkedin'); ?>"  />
         </div>
         <div class="form-group">
            <label class="text-form-label" for="quora">Quora</label>
            <input class="form-control text-form-input" name="quora" id="quora" value="<?= set_value('quora'); ?>"  />
         </div> 
         <button class="btn btn-primary" type="submit" name="addBasicInformationSubmitButton" id="addBasicInformationSubmitButton">Save</button>
                
    
    <?= form_close() ?>
</div>

<script>
//Setting the date pickers
    $("#birth_date").datepicker({
        //setting datepicker configrations
        changeMonth:true,
         changeYear:true
    });
    
//ajax functionality on form submit    
    $("#editBasicInformation").on('submit',function(e){
        e.preventDefault();
        var dataToSend=$(this).serialize();
        console.log(dataToSend);
        $.ajax({
               url: '<?= base_url('index.php/basic/edit') ?>',
               type: 'POST',
               data:'ajaxRequest=1&'+dataToSend,
               //dataType:'json',
               success: function(data) {
                  console.log(data);
               }
            });//ajax ends
            
    })//function ends




</script>
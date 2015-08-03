
<div class="bg-form border-form padding30">
    <?= form_open('projects/add','id="addProjectForm" ') ?>
    <?php if(isset($formPopulateData)): ?>
            <input type="hidden" name="id" id="id" value="<?= $formPopulateData['id']; ?>" />
    <?php endif; ?>
         <div class="form-group">
            <label class="text-form-label" for="title">Project Title</label>
            <input class="form-control text-form-input" name="title" id="title" value="<?= isset($formPopulateData) ? $formPopulateData['title']:set_value('title'); ?>" />
         </div> 
         <div class="form-group">
             <div class="row">
                <div class="col-sm-4">
                    <label class="text-form-label" for="start_date">Start Date</label>
                    <input class="col-sm-6 form-control text-form-input"  name="start_date" id="start_date" value="<?= isset($formPopulateData) ? $formPopulateData['start_date']:set_value('start_date'); ?>"  />
                </div>
                <div class="col-sm-4">
                    <label class="text-form-label" for="end_date">End Date</label>
                    <input class="col-sm-6 form-control text-form-input"  name="end_date" id="end_date" value="<?= isset($formPopulateData) ? $formPopulateData['end_date']:set_value('end_date'); ?>"  />
                </div>
             </div>     
         </div>
         
         <div class="form-group">
            <label class="text-form-label" for="description">Description</label>
            <textarea class="form-control text-form-input" rows="3" name="description" id="description" ><?= isset($formPopulateData) ? $formPopulateData['description']:set_value('description'); ?></textarea>
         </div> 
         <!--
         <div class="form-group">
            <label class="text-form-label" for="skills">Skills Used</label>
            <input class="form-control text-form-input" name="skills" id="skills" value="<?= isset($formPopulateData) ? $formPopulateData['start_date']:set_value('skills'); ?>"  />
         </div> 
         -->
         <button class="btn btn-primary" type="submit" name="addProjectFormSubmitButton" id="addProjectFormSubmitButton">Save</button>
          <div id="projectAddErrorDisplay"></div>      
    
    <?= form_close() ?>
</div>

<script>
//Setting the date pickers
    $("#start_date,#end_date").datepicker({
        //setting datepicker configrations
        dateFormat:'dd-M-yy',
        changeMonth:true,
         changeYear:true,
         yearRange:'1950:2015'
    });
    
//ajax functionality on form submit    
    
    $("#addProjectForm").on('submit',function(e){
        e.preventDefault();
        var errorDisplayDiv=$("#projectAddErrorDisplay");
        errorDisplayDiv.html("");
        var dataToSend=$(this).serialize();
        //console.log(dataToSend);
        $.ajax({
               url: '<?= base_url('index.php/projects/add') ?>',
               type: 'POST',
               data:'ajaxRequest=1&'+dataToSend,
               dataType:'json',
               success: function(jsonData) {
                  console.log(jsonData);                  
                  if(jsonData['errorCode']!=0){
                    errorDisplayDiv.html(jsonData['errorMessage']);
                  }else if(jsonData['errorCode']==0){
                    errorDisplayDiv.html(jsonData['errorMessage']);
                    window.location="<?= base_url('index.php/projects'); ?>"
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
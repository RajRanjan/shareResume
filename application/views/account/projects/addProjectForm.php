<div class="jumbotron" style="border: 1px dotted #D3D3D3;width: 75%; margin: auto;padding: 10px;">
    <?= form_open('projects/add','id="addProjectForm" data-parsley-validate') ?>
         <div class="form-group">
            <label for="projectTitle">Project Title</label>
            <input class="form-control" name="projectTitle" id="projectTitle" value="<?= set_value('projectTitle'); ?>" data-parsley-required />
         </div> 
         <div class="form-group">
             <div class="row">
                <div class="col-sm-4">
                    <label for="projectTitle">Start Date</label>
                    <input class="col-sm-6 form-control"  name="startDate" id="startDate" value="<?= set_value('startDate'); ?>"  />
                </div>
                <div class="col-sm-4">
                    <label for="projectTitle">End Date</label>
                    <input class="col-sm-6 form-control"  name="endDate" id="endDate" value="<?= set_value('endDate'); ?>"  />
                </div>
             </div>     
         </div>
         
         <div class="form-group">
            <label for="projectTitle">Description</label>
            <textarea class="form-control" rows="3" name="description" id="description" ><?= set_value('description'); ?></textarea>
         </div> 
         <div class="form-group">
            <label for="projectTitle">Skills Used</label>
            <input class="form-control" name="skills" id="skills" value="<?= set_value('skills'); ?>"  />
         </div> 
         <button class="btn btn-primary" type="submit" name="addProjectFormSubmitButton" id="addProjectFormSubmitButton">Save</button>
                
    
    <?= form_close() ?>
</div>

<script>
//Setting the date pickers
    $("#startDate,#endDate").datepicker({
        //setting datepicker configrations
        changeMonth:true,
         changeYear:true
    });
    
//ajax functionality on form submit    
    $("#addProjectForm").on('click',function(e){
        
    })//function ends




</script>
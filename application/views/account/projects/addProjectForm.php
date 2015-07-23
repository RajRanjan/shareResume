<div class="jumbotron" style="border: 1px dotted #D3D3D3;width: 75%; margin: auto;padding: 10px;">
    <?= form_open('index.php/projects/add','id="addProjectForm"') ?>
         <div class="form-group">
            <label for="projectTitle">Project Title</label>
            <input class="form-control" name="projectTitle" id="projectTitle" />
         </div> 
         <div class="form-group">
             <div class="row">
                <div class="col-sm-4"><label for="projectTitle">Start Date</label><input class="col-sm-6 form-control"  name="startDate" id="startDate" /></div>
                <div class="col-sm-4"><label for="projectTitle">End Date</label><input class="col-sm-6 form-control"  name="startDate" id="startDate" /></div>
             </div>
             
            
         </div>
         <div class="form-group">
            <label for="projectTitle">Description</label>
            <textarea class="form-control" rows="3" name="projectTitle" id="projectTitle" ></textarea>
         </div> 
                
    
    <?= form_close() ?>
</div>
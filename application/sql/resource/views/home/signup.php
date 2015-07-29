<div class="container-fluid" style="">
   <div class="container" style="width: 50%;margin: auto;">
    <!-- Creating Sign up Forms -->     
        
       <?php echo form_open('home/index','class="form-horizontal" id="signupForm"'); ?>                  
            <div class="form-group">
                   <label for="name" class="control-label col-xs-3 text-success">Name</label>
                   <div class="col-xs-5"><input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name') ?>"/></div>
            </div>
            <div class="form-group">
                    <label for="emailId" class="control-label col-xs-3 text-success">Email</label>
                    <div class="col-xs-5"><input type="text" class="form-control" name="emailId" id="emailId" value="<?php echo set_value('emailId') ?>"/></div>
            </div>
            <div class="form-group">
                    <label for="password" class="control-label col-xs-3 text-success">Password</label>
                    <div class="col-xs-5"><input type="text" class="form-control" name="password" id="password"/></div>
            </div>
            <div class="form-group">
                    <label for="signupSubmit" class="control-label col-xs-3 text-success sr-only">Password</label>
                    <div class="col-xs-5"><button type="submit" name="signupSubmit" id="signupSubmit" value="submit" class="btn btn-success">Sign Up</button></div>
            </div>    
       <?php echo form_close(); ?>  
       <?php echo validation_errors(); ?>
    <!-- End Sign up Form -->
   </div>
</div>
<script>
window.onload=function(){    
$(document).ready(function(){
      $("#signupForm").on('submit',function(e){
             e.preventDefault();
             $.ajax({
                 url:"<?php echo base_url('index.php/home/create') ?>",
                 data:$(this).serialize(),
                 type:'POST',
                 success:function(data){
                 console.log(data);
                     alert(data);           
                 }
            });
    //Ajax Call End
      });
    
});//ready ends
}//onload ends
 




</script>
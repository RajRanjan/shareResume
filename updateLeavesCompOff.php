


<div class="container" style="width: 100%;">
     <form id="updateLeaveForm" userId="<?php echo $userId=$_POST['userId'];?> " class="form-horizontal">
                <fieldset>
                
                <!-- Form Name -->
              
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Leave Date</label>  
                  <div class="col-md-6">
                  <input id="updateLeaveDate" name="updateLeaveDate" type="text" placeholder="Leave Date" class="form-control input-md">
                    
                  </div>
                </div>
                
                <!-- Multiple Radios -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="radios">Leave Type</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <label for="radios-0">
                      <input type="radio" name="radios" id="radios-0" value="0" checked="checked">
                      Half Day
                    </label>
                	</div>
                  <div class="radio">
                    <label for="radios-1">
                      <input type="radio" name="radios" id="radios-1" value="1">
                      Full Day
                    </label>
                	</div>
                  </div>
                </div>
                
                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="singlebutton"></label>
                  <div class="col-md-4">
                    <input type="submit"  id="singlebutton" name="singlebutton" class="btn btn-success">
                  </div>
                </div>
                
                </fieldset>
</form>
</div>
<script>
    $(document).ready(function(){
        $("#updateLeaveDate").datepicker({
        dateFormat: "yy-mm-dd"
     });
    });
    
$("#updateLeaveForm").submit(function(e){
    e.preventDefault();
    var userId=$(this).attr(userId);
    dataString:'userId='+userId+'&'+$(this).serialize();
    alert("raj");
    /*$.ajax({
                type: 'POST',
                url: "updateLeavesCompOffFunctionality.php",
                data: dataString,
                success: function(data) {
                   
                     console.log(data);
                  
               }
              
              });
          // ending ajax call  
    */
})    
    
    

</script>
<div class="container-fluid bg-home-container-1">

   <div class="container" style="padding: 50px;">
       <div class="row">
            <div class="col-sm-7">
               carosuel will come here
            </div>      
            <div class="col-xs-5">
                 <?= form_open('index.php/home','id="signUpForm" class="form-horizontal"'); ?>
                     
                     <div class="form-group">
                          <div class="col-sm-10">
                             <div class="input-group">
                               <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                               <input class="form-control input-lg" name="name" id="name" placeholder="Full Name" />
                             
                             </div>                         
                          </div>
                     
                      </div>
                      <div class="form-group">
                          <div class="col-sm-10">
                             <div class="input-group">
                               <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                               <input class="form-control input-lg" name="email" id="email" placeholder="Email" />
                             
                             </div>                         
                          </div>
                     
                      </div>
                      <div class="form-group">
                          <div class="col-sm-10">
                             <div class="input-group">
                               <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                               <input class="form-control input-lg" name="password" id="password" placeholder="Password" />
                             
                             </div>                         
                          </div>
                     
                      </div>
                      <div class="form-group">
                          <div class="col-sm-10">
                             <div class="input-group">
                               <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                               <input class="form-control input-lg" name="passwordConfirm" id="passwordConfirm" placeholder="Re-Password" />
                             
                             </div>                         
                          </div>
                     
                      </div>
                      <div class="form-group">
                          
                          <div class="col-sm-5">
                                  <button class="btn btn-success" >SignUp</button>                     
                          </div>
                     
                      </div>
                 
                 
                 <?= form_close(); ?>
            </div>       
       </div>
   
   </div>

</div>
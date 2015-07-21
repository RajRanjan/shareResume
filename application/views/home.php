<div class="container-fluid">

   <div class="container" style="padding: 50px;">
       <div class="row">
            <div class="col-sm-7">
               
            </div>      
            <div class="col-sm-5">
                 <!-- Tabs Start --> 
                    <div>
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
                        <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a></li>
                      </ul>                    
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active padding20" id="login">
                          <!-- Login Form Starts -->
                             <?= form_open('home/login','id="signUpForm" class="form-horizontal"'); ?>
                                    <div class="form-group">
                                          <div class="col-sm-12">
                                             <div class="input-group">
                                               <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                                               <input class="form-control input-lg" name="email" id="email" placeholder="Email" value="<?= set_value('email');?>" />
                                             
                                             </div>                         
                                          </div>                                     
                                      </div>
                                      <div class="form-group">
                                          <div class="col-sm-12">
                                             <div class="input-group">
                                               <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                                               <input class="form-control input-lg" name="password" id="password" placeholder="Password" value="<?= set_value('password');?>" />
                                             
                                             </div>                         
                                          </div>                                     
                                      </div>  
                                      <div class="form-group">
                                          
                                          <div class="col-sm-5">
                                                  <button class="btn btn-success text-justify">Login</button>                     
                                          </div>                                     
                                      </div>                               
                             <?= form_close(); ?> 
                          <!-- Login Form Ends   -->
                             <?php if(isset($loginError)): ?> 
                                    <div class="container col-sm-12 text-primary">
                                         <?= $loginError; ?>
                                    </div> 
                             <?php endif; ?>                   
                        </div>
                        <div role="tabpanel" class="tab-pane padding20" id="register">
                         <!-- Registration Form Start -->
                            <?= form_open('home/register','id="signUpForm" class="form-horizontal"'); ?>                     
                                     <div class="form-group">
                                          <div class="col-sm-12">
                                             <div class="input-group">
                                               <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                               <input class="form-control input-lg" name="name" id="name" placeholder="Full Name" value="<?= set_value('name');?>" />
                                             
                                             </div>                         
                                          </div>                                     
                                      </div>
                                      <div class="form-group">
                                          <div class="col-sm-12">
                                             <div class="input-group">
                                               <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                                               <input class="form-control input-lg" name="email" id="email" placeholder="Email" value="<?= set_value('email');?>" />
                                             
                                             </div>                         
                                          </div>                                     
                                      </div>
                                      <div class="form-group">
                                          <div class="col-sm-12">
                                             <div class="input-group">
                                               <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                                               <input class="form-control input-lg" name="password" id="password" placeholder="Password" value="<?= set_value('password');?>" />
                                             
                                             </div>                         
                                          </div>                                     
                                      </div>
                                      <div class="form-group">
                                          <div class="col-sm-12">
                                             <div class="input-group">
                                               <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                                               <input class="form-control input-lg" name="passwordConfirm" id="passwordConfirm" placeholder="Re-Password" value="<?= set_value('passwordConfirm');?>" />
                                             
                                             </div>                         
                                          </div>                                     
                                      </div>
                                      <div class="form-group">
                                          
                                          <div class="col-sm-5">
                                                  <button class="btn btn-success text-justify">SignUp</button>                     
                                          </div>                                     
                                      </div>                 
                 
                           <?= form_close(); ?>
                         <!-- registration Form Ends  -->
                           <?php if(isset($registrationError)): ?> 
                                    <div class="container col-sm-12 text-primary">
                                         <?= $registrationError; ?>
                                    </div> 
                             <?php endif; ?> 
                        </div>                        
                      </div>
                    </div>

                 <!-- Tabs End   -->
                 <div class="container col-sm-12 text-primary">
                    <?= validation_errors(); ?>
                 </div>
            </div>       
       </div>
   
   </div>

</div>
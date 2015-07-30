<?php if(isset($currentUserBasicInformation)): ?>
<?php $resultObj=$currentUserBasicInformation; ?>
<div class="" style="">
    <div class="row">
           <!-- Left pane of basic information page starts -->
           <div class="col-sm-4 border">
                <div class="row">
                    <!--Profile Picture div -->
                    <div class="col-sm-12">
                        <div class="padding15">
                             <img width="60%" src="<?= base_url('assets/img/maleDefault.jpg');?>" class="img-responsive img-circle center" />
                           <!--  <p class="center padding10 text-navbar-header-option " style="border-left: 1em solid #B6B6B6;width: 90%;">John Doe</p> -->
                        </div>
                    </div>
                    <!-- Edit Button -->
                    <div class="col-sm-12">
                        <?= form_open('basic/edit'); ?>
                          <div class="form-group" style="width: 60%; margin: auto;">
                            <button type="submit" class="btn btn-primary text-menu-1">Edit Basic Details</button>
                          </div>
                        <?= form_close(); ?>
                    </div>
                
                </div>
           </div>
           <!-- Left pane of basic information page Ends   -->
           <!-- Right pane of basic information page starts -->
           <div class="col-sm-8">
                 <div style="margin-top: 2em;">
                    <table class="table" id="table-basic-information">
                        <tr class=""><td class="text-right text-menu-1">Name</td><td class="text-left text-navbar-header-option"><?=  ($resultObj['name']==NULL)?"Not Available":$resultObj['name'] ; ?></td></tr>
                        <tr><td class="text-right text-menu-1">Email</td><td class="text-left text-navbar-header-option"><?= ($resultObj['email']==NULL)?"Not Available":$resultObj['email'] ; ?></td></tr>
                        <tr><td class="text-right text-menu-1">Contact No</td><td class="text-left text-navbar-header-option"><?= ($resultObj['contact_no']==NULL)?"Not Available":$resultObj['contact_no'] ; ?></td></tr>
                        <tr><td class="text-right text-menu-1">Birth Date</td><td class="text-left text-navbar-header-option"><?= ($resultObj['birth_date']==NULL)?"Not Available":textFormatDate(strtotime($resultObj['birth_date'])) ; ?></td></tr>
                        <tr><td class="text-right text-menu-1">Country</td><td class="text-left text-navbar-header-option"><?= ($resultObj['country']==NULL)?"Not Available":$resultObj['country'] ; ?></td></tr>
                        <tr><td class="text-right text-menu-1">Website</td><td class="text-left text-navbar-header-option"><?= ($resultObj['website']==NULL)?"Not Available":$resultObj['website'] ; ?></td></tr>
                        <tr><td class="text-right text-menu-1">Facebook</td><td class="text-left text-navbar-header-option"><?= ($resultObj['facebook']==NULL)?"Not Available":$resultObj['facebook'] ; ?></td></tr>
                        <tr><td class="text-right text-menu-1">LinkedIn</td><td class="text-left text-navbar-header-option"><?= ($resultObj['linkedin']==NULL)?"Not Available":$resultObj['linkedin'] ; ?></td></tr>
                        <tr><td class="text-right text-menu-1">Quora</td><td class="text-left text-navbar-header-option"><?= ($resultObj['quora']==NULL)?"Not Available":$resultObj['quora'] ; ?></td></tr>
                    </table>                 
                 </div>                       
           </div>
           <!-- Right pane of basic information page Ends   -->
    
    
    </div>




</div>
<?php endif; ?>
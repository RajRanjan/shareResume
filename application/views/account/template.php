<div class="container-fluid">
    <div class="row">
        <!-- Left Section DashBoard Starts -->
        <div class="col-sm-2" style="padding: 0px;">
             <?php $this->load->view('account/menu.php'); ?>             
        </div>
        <!-- Left Section DashBoard Ends   -->
        <!-- Right Section DashBoard Starts -->
        <div class="col-sm-10">
            <div class="row">
                <!-- Topic Option section ends -->
                <div class="col-sm-12" style="padding: 0px;">
                    <?php if(isset($menuOptioToLoad)){$this->load->view($menuOptioToLoad);} ?>
                </div>
                <!-- Topic Option section ends -->
                   
                <!-- each option content start -->
                <div class="col-sm-9">
                    <?php if(isset($formToLoad)){$this->load->view($formToLoad);} ?>
                    <?php if(isset($pageToLoad)){$this->load->view($pageToLoad);} ?>
                </div>
                <!-- each option content start -->
            </div>
        </div>
        <!-- Right Section DashBoard Ends  -->
    </div>




</div>
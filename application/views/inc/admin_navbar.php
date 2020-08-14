<?php $sessionData = $this->session->userdata('user');?>
<div class="div-top-navbar">
    <div class="dropdown show pull-right">
        <a class="dropdown-toggle" href="#" role="button" id="myAccountDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
            <?php
                $role = "";
                if($sessionData['role'] == 0){
                    $role = "Admin";
                }
                else{
                    $role = "User";
                }
                echo ucwords('<strong>'.$role.'</strong>'.' | '.$sessionData['firstname'].' '.$sessionData['lastname'].' '.$sessionData['middlename']);
            ?>
        </a>

        <div class="dropdown-menu myAccountDropdownMenu" aria-labelledby="myAccountDropdown">
            <?php 
                $img_name = "";
                if($sessionData['img_name'] == ""){
                    if(ucwords($sessionData['sex']) == "Male"){
                        $img_name = 'maledefault.png';
                    }
                    else{
                        $img_name = 'femaledefault.png';
                    }
                }
                else{
                    $img_name = $sessionData['img_name'];
                }
            ?>
            <img src="<?php echo base_url();?>assets/images/profiles/<?php echo $img_name?>" alt="LFC">
            <button class="dropdown-item ">Profiles</button>
            <button class="dropdown-item logout">Logout</button>
        </div>
    </div>
</div>

<div class="div-side-navbar">
    <div class="d-flex justify-content-center">
        <img src="<?php echo base_url();?>assets/images/lloyds_logo.png" alt="LFC">
        
    </div>
    <hr>
    <div class="div-side-navbar-buttons">
        <a class="btn form-control" href="<?php echo base_url();?>createaccount">Create Account <i class="fa fa-caret-right pull-right"></i></a>
        <button class="btn form-control">Create Account <i class="fa fa-caret-right pull-right"></i></button>
        <button class="btn form-control">Create Account <i class="fa fa-caret-right pull-right"></i></button>
        <button class="btn form-control">Create Account <i class="fa fa-caret-right pull-right"></i></button>
        <button class="btn form-control">Create Account <i class="fa fa-caret-right pull-right"></i></button>
        <button class="btn form-control">Create Account <i class="fa fa-caret-right pull-right"></i></button>
        <button class="btn form-control">Create Account <i class="fa fa-caret-right pull-right"></i></button>
        <button class="btn form-control">Create Account <i class="fa fa-caret-right pull-right"></i></button>

        <button class="minize-navbar-btn"><i class="fa fa-long-arrow-left"></i></button>
    </div>
</div>
<button class="show-navbar-btn"><i class="fa fa-long-arrow-right"></i></button>
<div class="div-loading">
    <div class="d-flex flex-column justify-content-center align-items-center div-sub-loading">
        <div class="spinner-border text-primary" role="status"></div>
        <br/>
        Logging out. . . . .
    </div>
</div>

<script src="<?php echo base_url();?>assets/js/admin/navbar/admin_navbar.js"></script>
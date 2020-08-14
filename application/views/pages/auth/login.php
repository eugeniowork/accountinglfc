<div class="d-flex align-items-center justify-content-center login">
    <div class="login-form">
        <div class="d-flex p-2 justify-content-center">
            <img src="<?php echo base_url();?>assets/images/lloyds_logo.png" alt="LFC">
        </div>
        <p class="lfc-title">LFC ACCOUNTING SYSTEM</p>
        <div class="form-group">
            <i class="fa fa-envelope form-control"></i>
            <input type="text" placeholder="Enter email" class="form-control email">
        </div>
        <i class="fa fa-lock form-control"></i>
        <input type="password" placeholder="Enter password" class="form-control password">
        <button class="btn btn-primary form-control sign-in">Sign in</button>
        <a href="#" class="btn forgot-password-btn form-control">Forgot password?</a>
        <br/>
        <div class="errors">
            
        </div>
    </div>

</div>

<script src="<?php echo base_url();?>assets/js/auth/login.js"></script>
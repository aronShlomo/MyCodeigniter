<?php
require_once(APPPATH . 'includes/header.php');


?>





<div class="reset_pass-container row" id="passwordReset">
    <?php if ($error = $this->session->flashdata('error')) : ?>
        <div class="alert alert-dismissible alert-danger error">
            <p><?php echo $error; ?></p>
        </div>
    <?php endif; ?>
    <div class="form-pass-reset">
        <?php echo form_open('account/resetpass'); ?>
        <h5 style="color: blue; margin: 20px;" >Enter a new password</h5>
        <input type="password" style="text-transform: capitalize;" 
        class="reset_password  form-control" id="password" name="password"
         placeholder="Password  ">
        <input type="password" style="text-transform: capitalize;" 
        class="reset_password form-control" id="con_password" 
        name="con_password" placeholder="Confirm Password">
        <button style="margin-right: 20%" class="pass-forgoten-btn "
         type="submit" id="pass-reset">Update</button>
        <?php echo form_close(); ?>
    </div>
    <a class="return-to-login" href="login">Return to login</a>
</div>


<?php if($this->session->flashdata('updated')) : ?>


    <script type="text/javascript">
         $(document).ready(function () {
                $('#passwordReset').hide();  
        });

    </script>


    <?php endif ; ?>
























<?php
require_once(APPPATH . 'includes/footer.php');


?>
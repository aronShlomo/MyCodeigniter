<?php
require_once(APPPATH . 'includes/header.php');


?>

<div class="login_container row ">
    <h2>Sign In</h2>
    <?php if ($error = $this->session->flashdata('error')) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-danger error">
                    <?php echo $error; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>



    <?php if ($error = $this->session->flashdata('user_signup')) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-success error">
                    <?php echo $error; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if ($error = $this->session->flashdata('passNotMatch')) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-danger error">
                    <?php echo $error; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>




 


    <?php echo form_open('account/getLogin',  ['class' => 'from-horizontal']); ?>



    <div class="md-4">
        <label for="lastname">Last Name</label>
        <?php echo form_input([
            'type' => 'text', 
            'name' => 'lastname',
            'style' => 'text-transform: capitalize;', 
            'placeholder' =>'Last Name',
            'autofocus' => 'true',
            'class' => 'form-control',
        ]); ?>
    </div>
    


    <div class="md-4">
        <label for="password">Password</label>
        <?php echo form_input([
            'type' => 'password', 
            'name' =>'password',
            'id' =>'password',
            'style' => 'text-transform: capitalize;', 
             'placeholder' =>'Password', 
             'autofocus' => 'true',
            'class' => 'form-control'
        ]); ?>
    </div>
    <input type="checkbox" id="showPassword"> Show Password


    <script>
      $(document).ready(function(){
            $("#showPassword").on('change', function () {
                  const passwordInput = $('#password'); 
                 passwordInput.attr('type', this.checked ? 'text' : 'password');
            });
      });

    </script>


    <button type="submit" class="login-submit ">Log in</button>
    <?php echo form_close(); ?>
    <a class="forgot_pass" href="forgotpassform">Forgot Password</a>


    <?php echo form_open('account/signup', ['class' => 'from-horizontal']); ?>
    <p class="dont_have_an_account_yet">Dont have an account yet ? <button class="btn-signup" type="submit"> Sign Up</button></p>
    <?php echo form_close(); ?>


</div>
















<?php
require_once(APPPATH . 'includes/footer.php');
?>
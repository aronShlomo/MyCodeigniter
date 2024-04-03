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


 


    <?php echo form_open('account/getLogin',  ['class' => 'from-horizontal']); ?>



    <div class="md-4">
        <label for="lastname">Last Name</label>
        <?php echo form_input([
            'type' => 'text', 'name' =>
            'lastname', 'placeholder' =>
            'Last Name', 'autofocus' => 'true',
            'class' => 'form-control',
            'value' => set_value('lastname')
        ]); ?>
    </div>


    <div class="md-4">
        <label for="password">Password</label>
        <?php echo form_input([
            'type' => 'password', 'name' =>
            'password', 'placeholder' =>
            'Password', 'autofocus' => 'true',
            'class' => 'form-control'
        ]); ?>
    </div>

    <button type="submit" class="login-submit ">Log in</button>
    <?php echo form_close(); ?>


    <?php echo form_open('account/signup', ['class' => 'from-horizontal']); ?>
    <p class="dont_have_an_account_yet">Dont have an account yet ? <button class="btn-signup" type="submit"> Sign Up</button></p>
    <?php echo form_close(); ?>


</div>
















<?php
require_once(APPPATH . 'includes/footer.php');
?>
<?php
require_once(APPPATH . 'includes/header.php');
?>





<?php echo form_open('account/getSignup', ['class' => 'form-horizontal']); ?>

<div class="signup_container">


    <h2>Sign Up</h2>


    <?php if ($error = $this->session->flashdata('error')) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-danger error">
                    <?php echo $error; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($user = $this->session->flashdata('user')) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-success error">
                    <?php echo $user; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if ($userExist = $this->session->flashdata('userExist')) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-success error">
                    <?php echo $userExist; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <input type="hidden" name="auto_id">


    <div class="col-md-4">

        <label for="firstname">First Name </label>
        <?php echo form_input([
            'type' => 'text', 'name' =>
            'firstname', 'placeholder' =>
            'First Name', 'autofocus' => 'true',
            'class' => 'form-control input-signup',
            'value' => set_value('firstname')
        ]); ?>
    </div>
    <div class="col-md-4">
        <label for="lastname">Last Name </label>
        <?php echo form_input([
            'type' => 'text', 'name' =>
            'lastname', 'placeholder' =>
            'Last Name', 'autofocus' => 'true',
            'value' => set_value('lastname'),
            'class' => 'form-control input-signup'
        ]); ?>

    </div>
    <div class="col-md-4">
        <label for="password">Password</label>
        <?php echo form_input([
            'type' => 'password',
            'name' => 'password',
            'placeholder' => 'Password',
            'autofocus' => 'true',
            'class' => 'form-control input-signup',
        ]); ?>
    </div>

    <div class="col-md-4">
        <label for="password">Confirm Password</label>
        <?php echo form_input([
            'type' => 'password',
            'name' => 'con_password',
            'placeholder' => 'Confirm Password',
            'autofocus' => 'true',
            'class' => 'form-control input-signup',
        ]); ?>
    </div>

    <button type="submit" class="btn-create-signup">Submit</button>
    <!-- </?php  echo anchor('accountController/login', 'Login', ['class' => 'btn btn-primary']) ?>  -->
    <?php echo form_close(); ?>




    <?php echo form_open('account/login', ['class' => 'from-horizontal signup_have_account']); ?>
    <p class="dont_have_an_account_yet">have an account ? <button class="btn-signup" type="submit"> Sign In</button></p>
    <?php echo form_close(); ?>

</div>



















<?php
require_once(APPPATH . 'includes/footer.php');
?>
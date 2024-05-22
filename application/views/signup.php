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
        <input type="text" style="text-transform: capitalize;" name="firstname" placeholder="First Name" id="firstnameId" class="form-control input-signup" onkeyup="saveToCookie()">
    </div>
    <div class="col-md-4">
        <label for="lastname">Last Name </label>
        <input type="text" style="text-transform: capitalize;" name="lastname" placeholder="Last Name" id="lastnameId" 
        class="form-control input-signup" onkeyup="saveToCookie()">
    </div>
    <div class="col-md-4">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password" class="form-control input-signup" onkeyup="saveToCookie()">
    </div>
    <input type="checkbox" id="showPassword"> Show Password 


    <div class="col-md-4">
        <label for="password">Confirm Password</label>
        <input type="password" name="con_password" id="con_password" placeholder="Confirm Password" class="form-control input-signup">
    </div>


    <script>
        $(document).ready(function () {
              $("#showPassword").on('change', function () {
                  const passwordInput = $('#password');
                  passwordInput.attr('type' , this.checked ? 'text' : 'password');
            });

        });
    </script>


    <button type="submit" class="btn-create-signup">Submit</button>
    <!-- </?php  echo anchor('accountController/login', 'Login', ['class' => 'btn btn-primary']) ?>  -->
    <?php echo form_close(); ?>




    <?php echo form_open('account/login', ['class' => 'from-horizontal signup_have_account']); ?>
    <p class="dont_have_an_account_yet">have an account ? <button class="btn-signup" type="submit"> Sign In</button></p>
    <?php echo form_close(); ?>

</div>




<script>
    function saveToCookie() {
        const firstname = document.getElementById('firstnameId').value;
        const password = document.getElementById('passwordId').value;
        document.cookie = `firstnameIdValue=${encodeURIComponent(firstname)}; path=/`;
        document.cookie = `lastnameIdValue=${encodeURIComponent(lastname)}; path=/`;
        document.cookie = `passwordIdValue=${encodeURIComponent(password)}; path=/`;
    }

    // Retrieve the value from the cookie and set it in the textbox
    function loadFromCookie() {
        const cookieValue1 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)firstnameIdValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue3 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)passwordIdValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        document.getElementById('firstnameId').value = cookieValue1;
        document.getElementById('lastnameId').value = cookieValue2;
        document.getElementById('passwordId').value = cookieValue3;
    }

    function clearCookie() {
        document.cookie = 'firstnameIdValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'passwordIdValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    }
</script>








<?php
require_once(APPPATH . 'includes/footer.php');
?>
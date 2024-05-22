<?php
require_once(APPPATH . 'includes/header.php');


?>



<div class="forgotpass-container row" id="passwordReset">


    <?php if ($error = $this->session->flashdata('error')) : ?>
        <div class="alert alert-dismissible alert-danger error">
            <p><?php echo $error; ?></p>
        </div>
    <?php endif; ?>

    <div class="form-pass-forgot" >
        <?php echo form_open('account/forgotpass'); ?>
        <label class="enter-username-title-forgoten-pass" style="margin: 10px; margin-top: 5% " for="username">Enter Last Name</label>
        <input type="text" style="text-transform: capitalize; margin-left: 20%" class="username_pass form-control" id="username" name="username" placeholder="User Name  ">
        <button style="margin-right: 20%" class="pass-forgoten-btn" type="submit" id="pass-forgoten">Reset Password</button>
        <?php echo form_close(); ?>
    </div>


 
    


    <a class="return-to-login" href="login">Return to login</a>
</div>





<!-- </?php if ($error = $this->session->flashdata('error')) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-danger error">
                    </?php echo $error; ?>
                </div>
            </div>
        </div>
    </?php endif; ?> -->



<!-- <script>

$(document).ready(function () {
     $("#passwordReset").on('submit', function (e){
                 e.preventDefault();
          const username = $('#username').val();

          $.ajax({
              type: "POST",
              url: '/forgotpass',
              data: {username: username}, 
              success: function (response){
                alert('Password reset link sent to your email.');
              },
              error:  function (error){
                alert('Error sending password reset link. Please try again later.');
              }
              

        
        });

     });
      

});

</script>
 -->


















<?php
require_once(APPPATH . 'includes/footer.php');
?>
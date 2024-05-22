<?php
require_once(APPPATH . 'includes/header.php');


?>





<div class="reset_pass-container row" id="passwordReset">

    <div style="margin: 20px; font-size:23px; color:cornflowerblue;" class="">

        <?php if ($error = $this->session->flashdata('updated')) : ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
    </div>





    <a style="font-size: 24px;" class="return-to-login" href="login">Return to login</a>
</div>































<?php
require_once(APPPATH . 'includes/footer.php');


?>
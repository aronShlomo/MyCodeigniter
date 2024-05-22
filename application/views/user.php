<?php
require_once(APPPATH . 'includes/header.php');


?>
<h2 class="last_form">Your Account Form</h2>




<div class="container_user ">
    <?php foreach ($userdb as  $value) : ?>

        <br>
        <hr>
        <br>
        <h2 class="info" style="font-style: italic; font-size: 40px;" >Parent Information</h2>
        <br>

        <div class="parents-user">
            <div class="first-user" >
            <p>First Name: <?php echo $value->username  ?></p>
            <p>Last Name: <?php echo $value->lastname  ?></p>
            <p>DOB: <?php echo $value->date  ?></p>
            <p>SSN: <?php echo $value->ssn  ?></p>
            </div>
            <div class="second-user">
            <p>First Name: <?php echo $value->second_username  ?></p>
            <p>Last Name: <?php echo $value->second_lastname  ?></p>
            <p>DOB: <?php echo $value->second_date  ?></p>
            <p>SSN: <?php echo $value->second_ssn  ?></p>
             
            </div>
            <br>
        </div>

        <br>
        <h5 class="info" >Child Information</h5>
        <br>
        <p>Number Of Children: <?php echo $value->children_id  ?></p>


        <?php if ($value->children_id == 0) { ?>
            <p><?php echo $value->zero_child  ?></p>
        <?php } ?>

            <?php if ($value->children_id == 1) { ?>
                <p><?php echo 'First Name: ' . $value->username_child_one  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_one  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_one  ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_one  ?></p>
            <?php } ?>
            <?php if ($value->children_id == 2) { ?>
                <p><?php echo 'First Name: ' . $value->username_child_one  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_one  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_one  ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_one  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_two  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_two  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_two ?></p>
                <p><?php echo 'DOB: ' .  $value->dob_child_two  ?></p>

            <?php } ?>
            <?php if ($value->children_id == 3) { ?>
                <p><?php echo 'First Name: ' . $value->username_child_one  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_one  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_one  ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_one  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_two  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_two  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_two ?></p>
                <p><?php echo 'DOB: ' .  $value->dob_child_two  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_three  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_three  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_three ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_three  ?></p>

            <?php } ?>
            <?php if ($value->children_id == 4) { ?>
                <p><?php echo 'First Name: ' . $value->username_child_one  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_one  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_one  ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_one  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_two  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_two  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_two ?></p>
                <p><?php echo 'DOB: ' .  $value->dob_child_two  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_three  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_three  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_three ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_three  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_four  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_four  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_four ?></p>
                <p><?php echo 'DOB: ' .  $value->dob_child_four  ?></p>
            <?php } ?>

        <div class="children-user">
            <?php if ($value->children_id == 5) { ?>
                <p><?php echo 'First Name: ' . $value->username_child_one  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_one  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_one  ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_one  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_two  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_two  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_two ?></p>
                <p><?php echo 'DOB: ' .  $value->dob_child_two  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_three  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_three  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_three ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_three  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_four  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_four  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_four ?></p>
                <p><?php echo 'DOB: ' .  $value->dob_child_four  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_five  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_five  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_five ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_five  ?></p>
            <?php } ?>
            <?php if ($value->children_id == 6) { ?>
                <p><?php echo 'First Name: ' . $value->username_child_one  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_one  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_one  ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_one  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_two  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_two  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_two ?></p>
                <p><?php echo 'DOB: ' .  $value->dob_child_two  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_three  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_three  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_three ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_three  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_four  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_four  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_four ?></p>
                <p><?php echo 'DOB: ' .  $value->dob_child_four  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_five  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_five  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_five ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_five  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_six  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_six  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_six ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_six  ?></p>
            <?php } ?>
            <?php if ($value->children_id == 7) { ?>
                <p><?php echo 'First Name: ' . $value->username_child_one  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_one  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_one  ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_one  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_two  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_two  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_two ?></p>
                <p><?php echo 'DOB: ' .  $value->dob_child_two  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_three  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_three  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_three ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_three  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_four  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_four  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_four ?></p>
                <p><?php echo 'DOB: ' .  $value->dob_child_four  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_five  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_five  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_five ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_five  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_six  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_six  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_six ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_six  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_seven  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_seven  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_seven ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_seven  ?></p>
            <?php } ?>
            <?php if ($value->children_id == 8) { ?>
                <p><?php echo 'First Name: ' . $value->username_child_one  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_one  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_one  ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_one  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_two  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_two  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_two ?></p>
                <p><?php echo 'DOB: ' .  $value->dob_child_two  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_three  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_three  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_three ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_three  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_four  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_four  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_four ?></p>
                <p><?php echo 'DOB: ' .  $value->dob_child_four  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_five  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_five  ?></p>
                <p><?php echo 'SSN: ' .  $value->ssn_child_five ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_five  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_six  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_six  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_six ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_six  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_seven  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_seven  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_seven ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_seven  ?></p>
                <p><?php echo 'First Name: ' . $value->username_child_eight  ?></p>
                <p><?php echo 'Last Name: ' . $value->firstname_child_eight  ?></p>
                <p><?php echo 'SSN: ' . $value->ssn_child_eight ?></p>
                <p><?php echo 'DOB: ' . $value->dob_child_eight  ?></p>
            <?php } ?>
        </div>
        <?php if ($value->children_id == 9) { ?>
            <p><?php echo $value->firstname_child_one  ?></p>
            <p><?php echo $value->ssn_child_one  ?></p>
            <p><?php echo $value->dob_child_one  ?></p>
            <p><?php echo $value->firstname_child_two  ?></p>
            <p><?php echo $value->ssn_child_two ?></p>
            <p><?php echo $value->dob_child_two  ?></p>
            <p><?php echo $value->firstname_child_three  ?></p>
            <p><?php echo $value->ssn_child_three ?></p>
            <p><?php echo $value->dob_child_three  ?></p>
            <p><?php echo $value->firstname_child_four  ?></p>
            <p><?php echo $value->ssn_child_four ?></p>
            <p><?php echo $value->dob_child_four  ?></p>
            <p><?php echo $value->firstname_child_five  ?></p>
            <p><?php echo $value->ssn_child_five ?></p>
            <p><?php echo $value->dob_child_five  ?></p>
            <p><?php echo $value->firstname_child_six  ?></p>
            <p><?php echo $value->ssn_child_six ?></p>
            <p><?php echo $value->dob_child_six  ?></p>
            <p><?php echo $value->firstname_child_seven  ?></p>
            <p><?php echo $value->ssn_child_seven ?></p>
            <p><?php echo $value->dob_child_seven  ?></p>
            <p><?php echo $value->firstname_child_eight  ?></p>
            <p><?php echo $value->ssn_child_eight ?></p>
            <p><?php echo $value->dob_child_eight  ?></p>
            <p><?php echo $value->firstname_child_nine  ?></p>
            <p><?php echo $value->ssn_child_nine ?></p>
            <p><?php echo $value->dob_child_nine  ?></p>

        <?php } ?>
        <?php if ($value->children_id == 10) { ?>
            <p><?php echo $value->firstname_child_one  ?></p>
            <p><?php echo $value->ssn_child_one  ?></p>
            <p><?php echo $value->dob_child_one  ?></p>
            <p><?php echo $value->firstname_child_two  ?></p>
            <p><?php echo $value->ssn_child_two ?></p>
            <p><?php echo $value->dob_child_two  ?></p>
            <p><?php echo $value->firstname_child_three  ?></p>
            <p><?php echo $value->ssn_child_three ?></p>
            <p><?php echo $value->dob_child_three  ?></p>
            <p><?php echo $value->firstname_child_four  ?></p>
            <p><?php echo $value->ssn_child_four ?></p>
            <p><?php echo $value->dob_child_four  ?></p>
            <p><?php echo $value->firstname_child_five  ?></p>
            <p><?php echo $value->ssn_child_five ?></p>
            <p><?php echo $value->dob_child_five  ?></p>
            <p><?php echo $value->firstname_child_six  ?></p>
            <p><?php echo $value->ssn_child_six ?></p>
            <p><?php echo $value->dob_child_six  ?></p>
            <p><?php echo $value->firstname_child_seven  ?></p>
            <p><?php echo $value->ssn_child_seven ?></p>
            <p><?php echo $value->dob_child_seven  ?></p>
            <p><?php echo $value->firstname_child_eight  ?></p>
            <p><?php echo $value->ssn_child_eight ?></p>
            <p><?php echo $value->dob_child_eight  ?></p>
            <p><?php echo $value->firstname_child_nine  ?></p>
            <p><?php echo $value->ssn_child_nine ?></p>
            <p><?php echo $value->dob_child_nine  ?></p>
            <p><?php echo $value->firstname_child_ten  ?></p>
            <p><?php echo $value->ssn_child_ten ?></p>
            <p><?php echo $value->dob_child_ten  ?></p>
        <?php } ?>


        <br>
        <h5 class="info" >Maryland Total fund: </h5>

        <?php if ($value->children_id == 0) : ?>
            <p>$1000</p>
        <?php endif; ?>
        <?php if ($value->children_id == 1) : ?>
            <p>$2000</p>
        <?php endif; ?>
        <?php if ($value->children_id == 2) : ?>
            <p>$3000</p>
        <?php endif; ?>
        <?php if ($value->children_id == 3) : ?>
            <p>$4000</p>
        <?php endif; ?>
        <?php if ($value->children_id == 4) : ?>
            <p>$5000</p>
        <?php endif; ?>
        <?php if ($value->children_id == 5) : ?>
            <p>$6000</p>
        <?php endif; ?>
        <?php if ($value->children_id == 6) : ?>
            <p>$7000</p>
        <?php endif; ?>
        <?php if ($value->children_id == 7) : ?>
            <p>$8000</p>
        <?php endif; ?>
        <?php if ($value->children_id == 8) : ?>
            <p>$9000</p>
        <?php endif; ?>
        <?php if ($value->children_id == 9) : ?>
            <p>$10000</p>
        <?php endif; ?>
        <?php if ($value->children_id == 10) : ?>
            <p>$11000</p>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<hr>
<br>




<div class="home-container">
    <div class="btns-user">
        <?php echo form_open('account/delete', ['class' => 'from-horizontal']); ?>
        <button class="home" id="delete" type="submit">Delete</button>
        <?php echo form_close(); ?>
    </div>
    <div class="btns-user">
        <?php echo form_open('account/create', ['class' => 'from-horizontal']); ?>
        <button class="home" id="create" type="submit">Create new form</button>
        <?php echo form_close(); ?>
    </div>



    <div class="btns-user">
        <?php echo form_open('account/home', ['class' => 'from-horizontal']); ?>
        <button class="home" type="submit">Home</button>
        <?php echo form_close(); ?>
    </div>


    <div class="btns-user">
        <?php echo form_open('account/logout', ['class' => 'from-horizontal']); ?>
        <button class="home" type="submit">Logout</button>
        <?php echo form_close(); ?>
    </div>

    <!-- <div class="btns-user">
    </?php echo form_open('account/index', ['class' => 'from-horizontal']); ?>
    <button class="home" type="submit">Create new form</button>
    </?php echo form_close(); ?>
</div> -->

</div>















<?php
require_once(APPPATH . 'includes/footer.php');
?>
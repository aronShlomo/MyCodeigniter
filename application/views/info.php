<?php
require_once(APPPATH . 'includes/header.php');
?>





<div class="container_info">
    <?php if ($data = $this->session->flashdata('success')) : ?>

        <?php if (is_array($data) || is_object($data)) : ?>
            <?php foreach ($data as $value) : ?>


                <h3>Parent Information</h3>
                <p>Last Name: <?php echo $value->lastname  ?></p>
                <p>Date Of Birth: <?php echo $value->date  ?></p>
                <p>Social Security Number: <?php echo $value->ssn  ?></p>
                <br>
                <h3>Child Information</h3>
                <p>Number Of Children: <?php echo $value->children_id  ?></p>

                <?php if ($value->children_id == 0) { ?>
                    <p><?php echo $value->zero_child  ?></p>
                <?php } ?>
                <?php if ($value->children_id == 1) { ?>
                    <p><?php echo $value->firstname_child_one  ?></p>
                    <p><?php echo $value->ssn_child_one  ?></p>
                <?php } ?>
                <?php if ($value->children_id == 2) { ?>
                    <p><?php echo $value->firstname_child_one  ?></p>
                    <p><?php echo $value->ssn_child_one  ?></p>
                    <p><?php echo $value->firstname_child_two  ?></p>
                    <p><?php echo $value->ssn_child_two ?></p>
                <?php } ?>
                <?php if ($value->children_id == 3) { ?>
                    <p><?php echo $value->firstname_child_one  ?></p>
                    <p><?php echo $value->ssn_child_one  ?></p>
                    <p><?php echo $value->firstname_child_two  ?></p>
                    <p><?php echo $value->ssn_child_two ?></p>
                    <p><?php echo $value->firstname_child_three  ?></p>
                    <p><?php echo $value->ssn_child_three ?></p>
                <?php } ?>
                <?php if ($value->children_id == 4) { ?>
                    <p><?php echo $value->firstname_child_one  ?></p>
                    <p><?php echo $value->ssn_child_one  ?></p>
                    <p><?php echo $value->firstname_child_two  ?></p>
                    <p><?php echo $value->ssn_child_two ?></p>
                    <p><?php echo $value->firstname_child_three  ?></p>
                    <p><?php echo $value->ssn_child_three ?></p>
                    <p><?php echo $value->firstname_child_four  ?></p>
                    <p><?php echo $value->ssn_child_four ?></p>
                <?php } ?>
                <?php if ($value->children_id == 5) { ?>
                    <p><?php echo $value->firstname_child_one  ?></p>
                    <p><?php echo $value->ssn_child_one  ?></p>
                    <p><?php echo $value->firstname_child_two  ?></p>
                    <p><?php echo $value->ssn_child_two ?></p>
                    <p><?php echo $value->firstname_child_three  ?></p>
                    <p><?php echo $value->ssn_child_three ?></p>
                    <p><?php echo $value->firstname_child_four  ?></p>
                    <p><?php echo $value->ssn_child_four ?></p>
                    <p><?php echo $value->firstname_child_five  ?></p>
                    <p><?php echo $value->ssn_child_five ?></p>
                <?php } ?>
                <?php if ($value->children_id == 6) { ?>
                    <p><?php echo $value->firstname_child_one  ?></p>
                    <p><?php echo $value->ssn_child_one  ?></p>
                    <p><?php echo $value->firstname_child_two  ?></p>
                    <p><?php echo $value->ssn_child_two ?></p>
                    <p><?php echo $value->firstname_child_three  ?></p>
                    <p><?php echo $value->ssn_child_three ?></p>
                    <p><?php echo $value->firstname_child_four  ?></p>
                    <p><?php echo $value->ssn_child_four ?></p>
                    <p><?php echo $value->firstname_child_five  ?></p>
                    <p><?php echo $value->ssn_child_five ?></p>
                    <p><?php echo $value->firstname_child_six  ?></p>
                    <p><?php echo $value->ssn_child_six ?></p>
                <?php } ?>
                <?php if ($value->children_id == 7) { ?>
                    <p><?php echo $value->firstname_child_one  ?></p>
                    <p><?php echo $value->ssn_child_one  ?></p>
                    <p><?php echo $value->firstname_child_two  ?></p>
                    <p><?php echo $value->ssn_child_two ?></p>
                    <p><?php echo $value->firstname_child_three  ?></p>
                    <p><?php echo $value->ssn_child_three ?></p>
                    <p><?php echo $value->firstname_child_four  ?></p>
                    <p><?php echo $value->ssn_child_four ?></p>
                    <p><?php echo $value->firstname_child_five  ?></p>
                    <p><?php echo $value->ssn_child_five ?></p>
                    <p><?php echo $value->firstname_child_six  ?></p>
                    <p><?php echo $value->ssn_child_six ?></p>
                    <p><?php echo $value->firstname_child_seven  ?></p>
                    <p><?php echo $value->ssn_child_seven ?></p>
                <?php } ?>
                <?php if ($value->children_id == 8) { ?>
                    <p><?php echo $value->firstname_child_one  ?></p>
                    <p><?php echo $value->ssn_child_one  ?></p>
                    <p><?php echo $value->firstname_child_two  ?></p>
                    <p><?php echo $value->ssn_child_two ?></p>
                    <p><?php echo $value->firstname_child_three  ?></p>
                    <p><?php echo $value->ssn_child_three ?></p>
                    <p><?php echo $value->firstname_child_four  ?></p>
                    <p><?php echo $value->ssn_child_four ?></p>
                    <p><?php echo $value->firstname_child_five  ?></p>
                    <p><?php echo $value->ssn_child_five ?></p>
                    <p><?php echo $value->firstname_child_six  ?></p>
                    <p><?php echo $value->ssn_child_six ?></p>
                    <p><?php echo $value->firstname_child_seven  ?></p>
                    <p><?php echo $value->ssn_child_seven ?></p>
                    <p><?php echo $value->firstname_child_eight  ?></p>
                    <p><?php echo $value->ssn_child_eight ?></p>
                <?php } ?>
                <?php if ($value->children_id == 9) { ?>
                    <p><?php echo $value->firstname_child_one  ?></p>
                    <p><?php echo $value->ssn_child_one  ?></p>
                    <p><?php echo $value->firstname_child_two  ?></p>
                    <p><?php echo $value->ssn_child_two ?></p>
                    <p><?php echo $value->firstname_child_three  ?></p>
                    <p><?php echo $value->ssn_child_three ?></p>
                    <p><?php echo $value->firstname_child_four  ?></p>
                    <p><?php echo $value->ssn_child_four ?></p>
                    <p><?php echo $value->firstname_child_five  ?></p>
                    <p><?php echo $value->ssn_child_five ?></p>
                    <p><?php echo $value->firstname_child_six  ?></p>
                    <p><?php echo $value->ssn_child_six ?></p>
                    <p><?php echo $value->firstname_child_seven  ?></p>
                    <p><?php echo $value->ssn_child_seven ?></p>
                    <p><?php echo $value->firstname_child_eight  ?></p>
                    <p><?php echo $value->ssn_child_eight ?></p>
                    <p><?php echo $value->firstname_child_nine  ?></p>
                    <p><?php echo $value->ssn_child_nine ?></p>
                <?php } ?>
                <?php if ($value->children_id == 10) { ?>
                    <p><?php echo $value->firstname_child_one  ?></p>
                    <p><?php echo $value->ssn_child_one  ?></p>
                    <p><?php echo $value->firstname_child_two  ?></p>
                    <p><?php echo $value->ssn_child_two ?></p>
                    <p><?php echo $value->firstname_child_three  ?></p>
                    <p><?php echo $value->ssn_child_three ?></p>
                    <p><?php echo $value->firstname_child_four  ?></p>
                    <p><?php echo $value->ssn_child_four ?></p>
                    <p><?php echo $value->firstname_child_five  ?></p>
                    <p><?php echo $value->ssn_child_five ?></p>
                    <p><?php echo $value->firstname_child_six  ?></p>
                    <p><?php echo $value->ssn_child_six ?></p>
                    <p><?php echo $value->firstname_child_seven  ?></p>
                    <p><?php echo $value->ssn_child_seven ?></p>
                    <p><?php echo $value->firstname_child_eight  ?></p>
                    <p><?php echo $value->ssn_child_eight ?></p>
                    <p><?php echo $value->firstname_child_nine  ?></p>
                    <p><?php echo $value->ssn_child_nine ?></p>
                    <p><?php echo $value->firstname_child_ten  ?></p>
                    <p><?php echo $value->ssn_child_ten ?></p>
                <?php } ?>
     
        
    

            <?php endforeach; ?>
        <?php endif; ?>
    <?php endif; ?>


    <?php if ($childrenID = $this->session->flashdata('childrenID')) : ?>
        <?php foreach ($childrenID as $value) : ?>
            <br>

            <h3>Maryland Total fund: </h3>

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
    <?php endif; ?>
</div>



<div class="btns-user">
    <?php echo form_open('account/home', ['class' => 'from-horizontal']); ?>
    <button class="home" type="submit">Home</button>
    <?php echo form_close(); ?>
</div>



















<?php
require_once(APPPATH . 'includes/footer.php');
?>
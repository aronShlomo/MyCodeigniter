<?php
require_once(APPPATH . 'includes/header.php');
?>


<div class="home_page" >



    <h1>history forms</h1>



    <?php if($user = $this->session->userdata('history_data')) : ?>
          <?php foreach($user as $key => $value) : ?>
          <ul>           
             <p class="home-result"><br> <?php echo $value->second_username ?></p>
             <p class="home-result"><br> <?php echo $value->second_lastname ?></p>
             <p class="home-result"><br> <?php echo $value->second_ssn ?></p>
             <p class="home-result"><br><?php echo $value->second_date ?></p>
             <p class="home-result"><br> <?php echo $value->username ?></p>
             <p class="home-result"><br> <?php echo $value->lastname ?></p>
             <p class="home-result"><br><?php echo $value->ssn ?></p>
             <p class="home-result"><br><?php echo $value->date ?></p>

             <p class="home-result"><br><?php echo $value->username_child_one ?></p> 
             <p class="home-result"><br><?php echo $value->firstname_child_one ?></p> 
             <p class="home-result"><br><?php echo $value->ssn_child_one ?></p>
             <p class="home-result"><br><?php echo $value->dob_child_one ?></p>

             <p class="home-result"><br><?php echo $value->username_child_two ?></p> 
             <p class="home-result"><br><?php echo $value->firstname_child_two ?></p> 
             <p class="home-result"><br><?php echo $value->ssn_child_two ?></p>
             <p class="home-result"><br><?php echo $value->dob_child_two ?></p>

             <p class="home-result"><br><?php echo $value->username_child_three ?></p> 
             <p class="home-result"><br><?php echo $value->firstname_child_three ?></p> 
             <p class="home-result"><br><?php echo $value->ssn_child_three ?></p>
             <p class="home-result"><br><?php echo $value->dob_child_three ?></p>

             <p class="home-result"><br><?php echo $value->username_child_four ?></p> 
             <p class="home-result"><br><?php echo $value->firstname_child_four ?></p> 
             <p class="home-result"><br><?php echo $value->ssn_child_four ?></p>
             <p class="home-result"><br><?php echo $value->dob_child_four ?></p>

             <p class="home-result"><br><?php echo $value->username_child_five ?></p> 
             <p class="home-result"><br><?php echo $value->firstname_child_five ?></p> 
             <p class="home-result"><br><?php echo $value->ssn_child_five ?></p>
             <p class="home-result"><br><?php echo $value->dob_child_five ?></p>

             <p class="home-result"><br><?php echo $value->username_child_six ?></p> 
             <p class="home-result"><br><?php echo $value->firstname_child_six ?></p> 
             <p class="home-result"><br><?php echo $value->ssn_child_six ?></p>
             <p class="home-result"><br><?php echo $value->dob_child_six ?></p>

             <p class="home-result"><br><?php echo $value->username_child_seven ?></p> 
             <p class="home-result"><br><?php echo $value->firstname_child_seven ?></p> 
             <p class="home-result"><br><?php echo $value->ssn_child_seven ?></p>
             <p class="home-result"><br><?php echo $value->dob_child_seven ?></p>

             <p class="home-result"><br><?php echo $value->username_child_eight ?></p> 
             <p class="home-result"><br><?php echo $value->firstname_child_eight ?></p> 
             <p class="home-result"><br><?php echo $value->ssn_child_eight ?></p>
             <p class="home-result"><br><?php echo $value->dob_child_eight ?></p>

             <p class="home-result"><br><?php echo $value->firstname_child_nine ?></p> 
             <p class="home-result"><br><?php echo $value->ssn_child_nine ?></p>
             <p class="home-result"><br><?php echo $value->dob_child_nine ?></p>

          </ul>
            <?php endforeach; ?>
        <?php endif ;?>

    
    <?php echo form_open('account/user', ['class' => 'from-horizontal']); ?>
    <?php $user = $this->session->userdata('lastname_user'); ?>
    <button class="btn-ReturnToAccount" type="submit"><h2>Back to  <?php echo $user ?>  forms</h2></button>
    <?php echo form_close(); ?>







</div>












<?php
require_once(APPPATH . 'includes/footer.php');
?>
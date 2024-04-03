<?php
require_once(APPPATH . 'includes/header.php');
?>



<div class="session_account">

    <?php if ($error = $this->session->flashdata('error')) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-danger error">
                    <?php echo $error; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($error_file = $this->session->flashdata('error_file')) : ?>
        <div class="row">
            <div class="col-md-6">

                <?php foreach ($error_file as $error) : ?>
                    <div class="alert alert-dismissible alert-danger error">
                        <?php echo $error; ?>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    <?php endif; ?>


    <?php if ($error = $this->session->flashdata('userNOTmatch')) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-danger error">
                    <?php echo $error; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

</div>


<!-- </?php if ($success_file_upload = $this->session->flashdata('success_file_upload')) : ?>
            <div class="row">
                <div class="col-md-6">
                    </?php foreach ($success_file_upload as $success) : ?>
                        <div class="alert alert-dismissible alert-success error">
                                </?php echo $success . 'Upload Succesflly'; ?>
                            </div>
                        </?php endforeach; ?>
                    </div>
                </div>
            </?php endif; ?> -->



<?php echo form_open_multipart('account/form', ['class' => 'form-horizontal']); ?>
<div class="inputs-parent row">



    <label for="lastname">Last Name </label>
    <?php echo form_input([
        'type' => 'text', 'name' =>
        'lastname', 'placeholder' =>
        'Last Name', 'autofocus' => 'true',
        'class' => 'form-control index_input',
        'value' => set_value('lastname'),
    ]); ?>
    <label for="date">Date of birth </label>
    <?php echo form_input([
        'type' => 'date', 'name' => 'date',
        'autofocus' => 'true',
        'id' => 'datepicker',
        'placeholder' => 'Date of Birth',
        'class' => 'form-control index_input input-group date ',
        'value' => set_value('date'),
    ]); ?>
    <label for="ssn">SSN </label>
    <?php echo form_input([
        'type' => 'text', 'name' =>
        'ssn', 'placeholder' =>
        '555-55-5555', 'autofocus' => 'true',
        'pattern' => '\d{3}-?\d{2}-?\d{4}',
        'class' => 'form-control index_input',
        'value' => set_value('ssn'),
    ]); ?>

    <label for="num_child">Number of Children </label>
    <select onchange="changeNum();" name="children_id" id="num_children" class="form-control index_input">
        <option value="">Zero</option>
        <?php if (count($children)) : ?>
            <?php foreach ($children as $child) : ?>
                <option value=<?php echo $child->children_id ?>><?php echo $child->Children_Number ?>
                </option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>

    <div class="child-input" >
        <div class="child-info " id="child_information-0">
            <input type="text" name="zero_child" class="form-control index_input" placeholder="First Name">
        </div>

        <div class="child-info " id="child_information-1">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname_child_one" class="form-control index_input" placeholder="First Name">
            <label for="ssn">SSN</label>
            <input type="text" name="ssn_child_one" class="form-control index_input" placeholder="555-55-5555">
        </div>
        <div class="child-info " id="child_information-2">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname_child_two" class="form-control index_input" placeholder="First Name">
            <label for="ssn">SSN</label>
            <input type="text" name="ssn_child_two" class="form-control index_input" placeholder="555-55-5555">
        </div>
        <div class="child-info " id="child_information-3">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname_child_three" class="form-control index_input" placeholder="First Name">
            <label for="ssn">SSN</label>
            <input type="text" name="ssn_child_three" class="form-control index_input" placeholder="555-55-5555">
        </div>
        <div class="child-info" id="child_information-4">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname_child_four" class="form-control index_input" placeholder="First Name">
            <label for="ssn">SSN</label>
            <input type="text" name="ssn_child_four" class="form-control index_input" placeholder="555-55-5555">
        </div>
        <div class="child-info " id="child_information-5">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname_child_five" class="form-control index_input" placeholder="First Name">
            <label for="ssn">SSN</label>
            <input type="text" name="ssn_child_five" class="form-control index_input" placeholder="555-55-5555">
        </div>
        <div class="child-info" id="child_information-6">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname_child_six" class="form-control index_input" placeholder="First Name">
            <label for="ssn">SSN</label>
            <input type="text" name="ssn_child_six" class="form-control index_input" placeholder="555-55-5555">
        </div>
        <div class="child-info" id="child_information-7">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname_child_seven" class="form-control index_input" placeholder="First Name">
            <label for="ssn">SSN</label>
            <input type="text" name="ssn_child_seven" class="form-control index_input" placeholder="555-55-5555">
        </div>
        <div class="child-info " id="child_information-8">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname_child_eight" class="form-control index_input" placeholder="First Name">
            <label for="ssn">SSN</label>
            <input type="text" name="ssn_child_eight" class="form-control index_input" placeholder="555-55-5555">
        </div>
        <div class="child-info " id="child_information-9">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname_child_nine" class="form-control index_input" placeholder="First Name">
            <label for="ssn">SSN</label>
            <input type="text" name="ssn_child_nine" class="form-control index_input" placeholder="555-55-5555">
        </div>
        <div class="child-info" id="child_information-10">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname_child_ten" class="form-control index_input" placeholder="First Name">
            <label for="ssn">SSN</label>
            <input type="text" name="ssn_child_ten" class="form-control index_input" placeholder="555-55-5555">
        </div>
    </div>

    <div class="upload">
        <label for="image">Upload Your Id: </label>
        <?php echo form_input(['type' => 'file', 'name' => 'image', 'value' => set_value('image')]); ?>
    </div>







    <button type="submit" class="btn btn-primary btn-account-submit" id="btn-submit-account">Submit</button>
    <?php echo form_close(); ?>

    <?php echo form_open('account/home', ['class' => 'from-horizontal']); ?>
    <button class="home_account" type="submit">Home</button>
    <?php echo form_close(); ?>



</div>

















<?php require_once(APPPATH . 'includes/footer.php');

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





<div class="container-account col">
    <?php echo form_open_multipart('account/form', ['class' => 'form-horizontal']); ?>


    <div class="parent">
        <div class="first-parents">
            <p style="color: black;">First Parent</p>
            <hr>
            <label class="account-label" for="firstname">First Name </label>
            <input type="text" style="text-transform: capitalize;" name="username" placeholder="First Name" id="firstnameId" class="form-control parent" onkeyup="saveToCookie()">
            <label class="account-label" for="lastname">Last Name </label>
            <input type="text" style="text-transform: capitalize;" name="lastname" placeholder="Last Name" id="lastnameId" class="form-control parent" onkeyup="saveToCookie()">

            <label class="account-label" for="date">Date of birth</label>
            <input type="text" name="date" placeholder="Date of Birth" id="dateId" class="form-control " onkeyup="saveToCookie()">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
            <script>
                $(document).ready(function() {
                    $("#dateId").on("blur", function() {
                        const inputDate = $(this).val();
                        const formatted = moment(inputDate, "D/M/YYYY").format("D/M/YYYY");
                        $(this).val(formatted);
                    });

                });

                function isValidDate(dateString) {
                    var regEx = /^\d{1}-\d{2}-\d{4}$/; // Format: yyyy-mm-dd
                    return dateString.match(regEx) !== null;
                }
                $("#dateId").on("input", function() {
                    var inputValue = $(this).val();
                    if (!isValidDate(inputValue)) {
                        // Prevent further input
                        $(this).val(inputValue.slice(0, 10));
                    }
                });
                $(document).ready(function() {
                    $("#dateId").datepicker("disable", {
                        onSelect: function(dateText) {
                            console.log("Selected date:", dateText);
                        }
                    });
                });
                $(document).ready(function() {
                    $("#dateId").on("keypress", function(event) {
                        var regex = new RegExp("^[0-9, /, -]+$"); // Regular expression for numeric characters
                        var key = String.fromCharCode(event.charCode || event.which);
                        if (!regex.test(key)) {
                            event.preventDefault(); // Prevent non-numeric input
                            return false;
                        }
                    });
                });
            </script>
            <label class="account-label" for="ssn">SSN</label>
            <input type="text" name="ssn" placeholder="555-55-5555" onBlur = "myFunc()" id="ssnId" class="form-control parent" onkeyup="saveToCookie()">
            <label for="image">Upload Your Id:</label>
            <input type="file" name="image" id="upload" onkeyup="saveToCookie()" class="form-control ">

        </div>

        <div class="second-parents">
            <p style="color: black;">Second Parent</p>
            <hr>
            <label class="account-label" for="firstname">First Name </label>
            <input type="text" style="text-transform: capitalize;" name="second_username" placeholder="First Name" 
            id="secondfirstnameId" class="form-control parent" onkeyup="saveToCookie()">
            <label class="account-label" for="lastname">Last Name </label>
            <input type="text" style="text-transform: capitalize;" name="second_lastname" placeholder="Last Name"
             id="secondlastnameId" class="form-control parent" onkeyup="saveToCookie()">

            <label class="account-label" for="date">Date of birth</label>
            <input type="text" style="text-transform: capitalize;" name="second_date" placeholder="Date of Birth"
             id="seconddateId" class="form-control " onkeyup="saveToCookie()">

            <script type="text/javascript">
                $(document).ready(function() {
                    $("#seconddateId").on("blur", function() {
                        const inputDate = $(this).val();
                        const formatted = moment(inputDate, "D/M/YYYY").format("D/M/YYYY");
                        $(this).val(formatted);
                    });

                });


                function isValidDate(dateString) {
                    var regEx = /^\d{1}-\d{2}-\d{4}$/; // Format: yyyy-mm-dd
                    return dateString.match(regEx) !== null;
                }

                $("#seconddateId").on("input", function() {
                    var inputValue = $(this).val();
                    if (!isValidDate(inputValue)) {
                        // Prevent further input
                        $(this).val(inputValue.slice(0, 10));
                    }
                });
                $(document).ready(function() {
                    $("#seconddateId").datepicker("disable", {
                        onSelect: function(dateText) {
                            console.log("Selected date:", dateText);
                        }

                    });
                });

                $(document).ready(function() {
                    $("#seconddateId").on("keypress", function(event) {
                        var regex = new RegExp("^[0-9, /, -]+$"); // Regular expression for numeric characters
                        var key = String.fromCharCode(event.charCode || event.which);
                        if (!regex.test(key)) {
                            event.preventDefault(); // Prevent non-numeric input
                            return false;
                        }
                    });
                });
            </script>
            
            <label class="account-label" for="ssn">SSN</label>
            <input type="text"  onBlur = "mySecondFunc()" name="second_ssn"  placeholder="555-55-5555"
               id="secondssnId" class="form-control parent" onkeyup="saveToCookie()">
            <label for="image">Upload Your Id:</label>
            <input type="file" name="second_image" id="upload" onkeyup="saveToCookie()" class="form-control ">
        </div>
    </div>
    <script type="text/javascript">
                function myFunc() {
                    var format = new RegExp("\d{3}[\-]\d{2}[\-]\d{4}");
                    var x = document.getElementById("ssnId");
                    var res = format.test(x.value);
                    if (!res) {
                        x.value = x.value
                            .match(/\d*/g).join('')
                            .match(/(\d{0,3})(\d{0,2})(\d{0,4})/).slice(1).join('-')
                            .replace(/-*$/g, '');
                    }
                    
                }
                function mySecondFunc() {
                    var format = new RegExp("\d{3}[\-]\d{2}[\-]\d{4}");
                    var x = document.getElementById("secondssnId");
                    var res = format.test(x.value);
                    if (!res) {
                        x.value = x.value
                            .match(/\d*/g).join('')
                            .match(/(\d{0,3})(\d{0,2})(\d{0,4})/).slice(1).join('-')
                            .replace(/-*$/g, '');
                    }
                }
            </script>



    <div class="num_children">
        <label class="account-label" for="num_child">Number of Children </label>
        <select onchange="changeNum();" name="children_id" class="form-control children-select" id="num_children">
            <option value="">Zero</option>
            <?php if (count($children)) : ?>
                <?php foreach ($children as $child) : ?>
                    <option value=<?php echo $child->children_id ?>><?php echo $child->Children_Number ?>
                    </option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
    </div>

</div>



<div class="child-info " id="child_information-0">
    <input type="text" name="zero_child" class="" placeholder="Last Name">
</div>


<div class="child-container">
    <div class="row">
        <div class="child-info " id="child_information-1">
            <label for="username_child_one">Fisrt Name:</label>
            <input type="text" style="text-transform: capitalize;" name="username_child_one" id="username_child_one" onkeyup="saveToCookie()" class="form-control" placeholder="First Name">
            <label for="firstname_child_one">Last Name:</label>
            <input type="text" style="text-transform: capitalize;" name="firstname_child_one" id="firstname_child_one" onkeyup="saveToCookie()" class="form-control" placeholder="Last Name">
            <label for="ssn_child_one">SSN:</label>
            <input type="text" name="ssn_child_one" id="ssn_child_one" onkeyup="saveToCookie()" class="form-control" placeholder="555-55-5555">
            <label for="dob_child_one">DOB:</label>
            <input type="text" name="dob_child_one" id="dob_child_one" onkeyup="saveToCookie()" class="form-control" placeholder="Date Of Birth">
        </div>
        <div class="child-info " id="child_information-2">
            <label for="username_child_two">Fisrt Name:</label>
            <input type="text" style="text-transform: capitalize;" name="username_child_two" id="username_child_two" onkeyup="saveToCookie()" class="form-control" placeholder="First Name">
            <label for="firstname_child_two">Last Name</label>
            <input type="text" style="text-transform: capitalize;" name="firstname_child_two" id="firstname_child_two" onkeyup="saveToCookie()" class="form-control" placeholder="Last Name">
            <label for="ssn_child_two">SSN</label>
            <input type="text" name="ssn_child_two" id="ssn_child_two" onkeyup="saveToCookie()" class="form-control" placeholder="555-55-5555">
            <label for="dob_child_two">DOB:</label>
            <input type="text" name="dob_child_two" id="dob_child_two" onkeyup="saveToCookie()" class="form-control" placeholder="Date Of Birth">
        </div>
        <div class="child-info " id="child_information-3">
            <label for="username_child_three">Fisrt Name:</label>
            <input type="text" style="text-transform: capitalize;" name="username_child_three" id="username_child_three" onkeyup="saveToCookie()" class="form-control" placeholder="First Name">
            <label for="firstname_child_three">Last Name</label>
            <input type="text" style="text-transform: capitalize;" name="firstname_child_three" id="firstname_child_three" onkeyup="saveToCookie()" class="form-control" placeholder="Last Name">
            <label for="ssn_child_three">SSN</label>
            <input type="text" name="ssn_child_three" id="ssn_child_three" onkeyup="saveToCookie()" class="form-control" placeholder="555-55-5555">
            <label for="dob_child_three">DOB:</label>
            <input type="text" name="dob_child_three" id="dob_child_three" onkeyup="saveToCookie()" class="form-control" placeholder="Date Of Birth">
        </div>
        <div class="child-info" id="child_information-4">
            <label for="username_child_four">Fisrt Name:</label>
            <input type="text" style="text-transform: capitalize;" name="username_child_four" id="username_child_four" onkeyup="saveToCookie()" class="form-control" placeholder="First Name">
            <label for="firstname_child_four">Last Name</label>
            <input type="text" style="text-transform: capitalize;" name="firstname_child_four" id="firstname_child_four" onkeyup="saveToCookie()" class="form-control" placeholder="Last Name">
            <label for="ssn_child_four">SSN</label>
            <input type="text" name="ssn_child_four" id="ssn_child_four" onkeyup="saveToCookie()" class="form-control" placeholder="555-55-5555">
            <label for="dob_child_four">DOB:</label>
            <input type="text" name="dob_child_four" id="dob_child_four" onkeyup="saveToCookie()" class="form-control" placeholder="Date Of Birth">
        </div>
    </div>

    <div class="row">
        <div class="child-info " id="child_information-5">
            <label for="username_child_five">Fisrt Name:</label>
            <input type="text" style="text-transform: capitalize;" name="username_child_five" id="username_child_five" onkeyup="saveToCookie()" class="form-control" placeholder="First Name">
            <label for="ssn_child_five">Last Name</label>
            <input type="text" style="text-transform: capitalize;" name="firstname_child_five" id="firstname_child_five" onkeyup="saveToCookie()" class="form-control" placeholder="Last Name">
            <label for="ssn_child_five">SSN</label>
            <input type="text" name="ssn_child_five" id="ssn_child_five" onkeyup="saveToCookie()" class="form-control" placeholder="555-55-5555">
            <label for="dob_child_five">DOB:</label>
            <input type="text" name="dob_child_five" id="dob_child_five" onkeyup="saveToCookie()" class="form-control" placeholder="Date Of Birth">
        </div>
        <div class="child-info" id="child_information-6">
            <label for="username_child_six">Fisrt Name:</label>
            <input type="text" style="text-transform: capitalize;" name="username_child_six" id="username_child_six" onkeyup="saveToCookie()" class="form-control" placeholder="First Name">
            <label for="ssn_child_six">Last Name</label>
            <input type="text" style="text-transform: capitalize;" name="firstname_child_six" id="firstname_child_six" onkeyup="saveToCookie()" class="form-control" placeholder="Last Name">
            <label for="ssn_child_six">SSN</label>
            <input type="text" name="ssn_child_six" id="ssn_child_six" onkeyup="saveToCookie()" class="form-control" placeholder="555-55-5555">
            <label for="dob_child_six">DOB:</label>
            <input type="text" name="dob_child_six" id="dob_child_six" onkeyup="saveToCookie()" class="form-control" placeholder="Date Of Birth">
        </div>

        <div class="child-info" id="child_information-7">
            <label for="username_child_seven">Fisrt Name:</label>
            <input type="text" style="text-transform: capitalize;" name="username_child_seven" id="username_child_seven" onkeyup="saveToCookie()" class="form-control" placeholder="First Name">
            <label for="ssn_child_seven">Last Name</label>
            <input type="text" style="text-transform: capitalize;" name="firstname_child_seven" id="firstname_child_seven" onkeyup="saveToCookie()" class="form-control" placeholder="Last Name">
            <label for="ssn_child_seven">SSN</label>
            <input type="text" name="ssn_child_seven" id="ssn_child_seven" onkeyup="saveToCookie()" class="form-control" placeholder="555-55-5555">
            <label for="dob_child_seven">DOB:</label>
            <input type="text" name="dob_child_seven" id="dob_child_seven" onkeyup="saveToCookie()" class="form-control" placeholder="Date Of Birth">
        </div>
        <div class="child-info " id="child_information-8">
            <label for="username_child_eight">Fisrt Name:</label>
            <input type="text" style="text-transform: capitalize;" name="username_child_eight" id="username_child_eight" onkeyup="saveToCookie()" class="form-control" placeholder="First Name">
            <label for="ssn_child_eight">Last Name</label>
            <input type="text" style="text-transform: capitalize;" name="firstname_child_eight" id="firstname_child_eight" onkeyup="saveToCookie()" class="form-control" placeholder="Last Name">
            <label for="ssn_child_eight">SSN</label>
            <input type="text" name="ssn_child_eight" id="ssn_child_eight" onkeyup="saveToCookie()" class="form-control" placeholder="555-55-5555">
            <label for="dob_child_eight">DOB:</label>
            <input type="text" name="dob_child_eight" id="dob_child_eight" onkeyup="saveToCookie()" class="form-control" placeholder="Date Of Birth">
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $("#dob_child_one").on("blur", function() {
            const inputDate = $(this).val();
            const formatted = moment(inputDate, "D/M/YYYY").format("D/M/YYYY");
            $(this).val(formatted);
        });

    });

    function isValidDate(dateString) {
        var regEx = /^\d{1}-\d{2}-\d{4}$/; // Format: yyyy-mm-dd
        return dateString.match(regEx) !== null;
    }

    $("#dob_child_one").on("input", function() {
        var inputValue = $(this).val();
        if (!isValidDate(inputValue)) {
            // Prevent further input
            $(this).val(inputValue.slice(0, 10));
        }
    });
    $(document).ready(function() {
        $("#dob_child_one").datepicker("disable", {
            onSelect: function(dateText) {
                console.log("Selected date:", dateText);
            }

        });
    });

    $(document).ready(function() {
        $("#dob_child_one").on("keypress", function(event) {
            var regex = new RegExp("^[0-9, /, -]+$"); // Regular expression for numeric characters
            var key = String.fromCharCode(event.charCode || event.which);
            if (!regex.test(key)) {
                event.preventDefault(); // Prevent non-numeric input
                return false;
            }
        });
    });
    //child two
    $(document).ready(function() {
        $("#dob_child_two").on("blur", function() {
            const inputDate = $(this).val();
            const formatted = moment(inputDate, "D/M/YYYY").format("D/M/YYYY");
            $(this).val(formatted);
        });

    });

    function isValidDate(dateString) {
        var regEx = /^\d{1}-\d{2}-\d{4}$/; // Format: yyyy-mm-dd
        return dateString.match(regEx) !== null;
    }

    $("#dob_child_two").on("input", function() {
        var inputValue = $(this).val();
        if (!isValidDate(inputValue)) {
            // Prevent further input
            $(this).val(inputValue.slice(0, 10));
        }
    });
    $(document).ready(function() {
        $("#dob_child_two").datepicker("disable", {
            onSelect: function(dateText) {
                console.log("Selected date:", dateText);
            }

        });
    });
    $(document).ready(function() {
        $("#dob_child_three").on("keypress", function(event) {
            var regex = new RegExp("^[0-9, /, -]+$"); // Regular expression for numeric characters
            var key = String.fromCharCode(event.charCode || event.which);
            if (!regex.test(key)) {
                event.preventDefault(); // Prevent non-numeric input
                return false;
            }
        });
    });

    //child three
    $(document).ready(function() {
        $("#dob_child_three").on("blur", function() {
            const inputDate = $(this).val();
            const formatted = moment(inputDate, "D/M/YYYY").format("D/M/YYYY");
            $(this).val(formatted);
        });
    });

    function isValidDate(dateString) {
        var regEx = /^\d{1}-\d{2}-\d{4}$/; // Format: yyyy-mm-dd
        return dateString.match(regEx) !== null;
    }

    $("#dob_child_three").on("input", function() {
        var inputValue = $(this).val();
        if (!isValidDate(inputValue)) {
            // Prevent further input
            $(this).val(inputValue.slice(0, 10));
        }
    });
    $(document).ready(function() {
        $("#dob_child_three").datepicker("disable", {
            onSelect: function(dateText) {
                console.log("Selected date:", dateText);
            }

        });
    });
    $(document).ready(function() {
        $("#dob_child_three").on("keypress", function(event) {
            var regex = new RegExp("^[0-9, /, -]+$"); // Regular expression for numeric characters
            var key = String.fromCharCode(event.charCode || event.which);
            if (!regex.test(key)) {
                event.preventDefault(); // Prevent non-numeric input
                return false;
            }
        });
    });


    //child four
    $(document).ready(function() {
        $("#dob_child_four").on("blur", function() {
            const inputDate = $(this).val();
            const formatted = moment(inputDate, "D/M/YYYY").format("D/M/YYYY");
            $(this).val(formatted);
        });

    });

    function isValidDate(dateString) {
        var regEx = /^\d{1}-\d{2}-\d{4}$/; // Format: yyyy-mm-dd
        return dateString.match(regEx) !== null;
    }

    $("#dob_child_four").on("input", function() {
        var inputValue = $(this).val();
        if (!isValidDate(inputValue)) {
            // Prevent further input
            $(this).val(inputValue.slice(0, 10));
        }
    });
    $(document).ready(function() {
        $("#dob_child_four").datepicker("disable", {
            onSelect: function(dateText) {
                console.log("Selected date:", dateText);
            }

        });
    });
    //child three
    $(document).ready(function() {
        $("#dob_child_four").on("keypress", function(event) {
            var regex = new RegExp("^[0-9, /, -]+$"); // Regular expression for numeric characters
            var key = String.fromCharCode(event.charCode || event.which);
            if (!regex.test(key)) {
                event.preventDefault(); // Prevent non-numeric input
                return false;
            }
        });
    });
</script>


<div class="row  footer-account">
    <div class="btn-accounts">
        <button onclick="getDate();" type="submit" id="btn-submit-account">Submit</button>
        <?php echo form_close(); ?>

    </div>
</div>





<div class="child-info " id="child_information-9">
    <input type="text" name="firstname_child_nine" class="form-control" placeholder="Last Name">
    <input type="text" name="ssn_child_nine" class="form-control" placeholder="555-55-5555">
    <label for="dob_child_nine">DOB:</label>
    <input type="date" name="dob_child_nine" class="form-control" placeholder="Date Of Birth">
</div>
<div class="child-info" id="child_information-10">
    <input type="text" name="firstname_child_ten" class="form-control" placeholder="Last Name">
    <input type="text" name="ssn_child_ten" class="form-control" placeholder="555-55-5555">
    <label for="dob_child_ten">DOB:</label>
    <input type="date" name="dob_child_ten" class="form-control" placeholder="Date Of Birth">
</div>







<script>
    function saveToCookie() {
        const firstnameId = document.getElementById('firstnameId').value;
        // const lastnameId = document.getElementById('lastnameId').value;
        const dateId = document.getElementById('dateId').value;
        const ssnId = document.getElementById('ssnId').value;
        const firstname_child_one = document.getElementById('firstname_child_one').value;
        const ssn_child_one = document.getElementById('ssn_child_one').value;
        const dob_child_one = document.getElementById('dob_child_one').value;
        const firstname_child_two = document.getElementById('firstname_child_two').value;
        const ssn_child_two = document.getElementById('ssn_child_two').value;
        const dob_child_two = document.getElementById('dob_child_two').value;
        const firstname_child_three = document.getElementById('firstname_child_three').value;
        const ssn_child_three = document.getElementById('ssn_child_three').value;
        const dob_child_three = document.getElementById('dob_child_three').value;
        const firstname_child_four = document.getElementById('firstname_child_four').value;
        const ssn_child_four = document.getElementById('ssn_child_four').value;
        const dob_child_four = document.getElementById('dob_child_four').value;
        const firstname_child_five = document.getElementById('firstname_child_five').value;
        const ssn_child_five = document.getElementById('ssn_child_five').value;
        const dob_child_five = document.getElementById('dob_child_five').value;
        const firstname_child_six = document.getElementById('firstname_child_six').value;
        const ssn_child_six = document.getElementById('ssn_child_six').value;
        const dob_child_six = document.getElementById('dob_child_six').value;
        const upload = document.getElementById('upload').value;
        const secondfirstnameId = document.getElementById('secondfirstnameId').value;
        const secondlastnameId = document.getElementById('secondlastnameId').value;
        const seconddateId = document.getElementById('seconddateId').value;
        const secondssnId = document.getElementById('secondssnId').value;
        document.cookie = `firstnameIdValue=${encodeURIComponent(firstnameId)}; path=/`;
        // document.cookie = `lastnameIdValue=${encodeURIComponent(lastnameId)}; path=/`;
        document.cookie = `dateIdValue=${encodeURIComponent(dateId)}; path=/`;
        document.cookie = `ssnIdValue=${encodeURIComponent(ssnId)}; path=/`;
        document.cookie = `secondfirstnameIdValue=${encodeURIComponent(secondfirstnameId)}; path=/`;
        document.cookie = `secondlastnameIdValue=${encodeURIComponent(secondlastnameId)}; path=/`;
        document.cookie = `seconddateIdValue=${encodeURIComponent(seconddateId)}; path=/`;
        document.cookie = `secondssnIdValue=${encodeURIComponent(secondssnId)}; path=/`;
        document.cookie = `firstname_child_oneValue=${encodeURIComponent(firstname_child_one)}; path=/`;
        document.cookie = `ssn_child_oneValue=${encodeURIComponent(ssn_child_one)}; path=/`;
        document.cookie = `dob_child_oneValue=${encodeURIComponent(dob_child_one)}; path=/`;
        document.cookie = `firstname_child_twoValue=${encodeURIComponent(firstname_child_two)}; path=/`;
        document.cookie = `ssn_child_twoValue=${encodeURIComponent(ssn_child_two)}; path=/`;
        document.cookie = `dob_child_twoValue=${encodeURIComponent(dob_child_two)}; path=/`;
        document.cookie = `firstname_child_threeValue=${encodeURIComponent(firstname_child_three)}; path=/`;
        document.cookie = `ssn_child_threeValue=${encodeURIComponent(ssn_child_three)}; path=/`;
        document.cookie = `dob_child_threeValue=${encodeURIComponent(dob_child_three)}; path=/`;
        document.cookie = `firstname_child_fourValue=${encodeURIComponent(firstname_child_four)}; path=/`;
        document.cookie = `ssn_child_fourValue=${encodeURIComponent(ssn_child_four)}; path=/`;
        document.cookie = `dob_child_fourValue=${encodeURIComponent(dob_child_four)}; path=/`;
        document.cookie = `firstname_child_fiveValue=${encodeURIComponent(firstname_child_five)}; path=/`;
        document.cookie = `ssn_child_fiveValue=${encodeURIComponent(ssn_child_five)}; path=/`;
        document.cookie = `dob_child_fiveValue=${encodeURIComponent(dob_child_five)}; path=/`;
        document.cookie = `firstname_child_sixValue=${encodeURIComponent(firstname_child_six)}; path=/`;
        document.cookie = `ssn_child_sixValue=${encodeURIComponent(ssn_child_six)}; path=/`;
        document.cookie = `dob_child_sixValue=${encodeURIComponent(dob_child_six)}; path=/`;
        document.cookie = `uploadValue=${encodeURIComponent(upload)}; path=/`;
    }

    function loadFromCookie() {
        const cookieValue0 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)firstnameIdValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        // const cookieValue1 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)lastnameIdValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue2 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)dateIdValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue3 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)ssnIdValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue5 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)firstname_child_oneValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue6 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)ssn_child_oneValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue7 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)dob_child_oneValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue8 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)firstname_child_twoValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue9 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)ssn_child_twoValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue10 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)dob_child_twoValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue11 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)firstname_child_threeValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue12 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)ssn_child_threeValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue13 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)dob_child_threeValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue14 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)firstname_child_fourValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue15 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)ssn_child_fourValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue16 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)dob_child_fourValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue17 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)firstname_child_fiveValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue18 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)ssn_child_fiveValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue19 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)dob_child_fiveValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue20 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)firstname_child_sixValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue21 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)ssn_child_sixValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue22 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)dob_child_sixValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue23 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)uploadValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue24 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)secondfirstnameIdValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue25 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)secondlastnameIdValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue26 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)seconddateIdValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        const cookieValue27 = decodeURIComponent(document.cookie.replace(/(?:(?:^|.*;\s*)secondssnIdValue\s*=\s*([^;]*).*$)|^.*$/, '$1'));
        document.getElementById('firstnameId').value = cookieValue0;
        // document.getElementById('lastnameId').value = cookieValue1;
        document.getElementById('dateId').value = cookieValue2;
        document.getElementById('ssnId').value = cookieValue3;
        document.getElementById('firstname_child_one').value = cookieValue5;
        document.getElementById('ssn_child_one').value = cookieValue6;
        document.getElementById('dob_child_one').value = cookieValue7;
        document.getElementById('firstname_child_two').value = cookieValue8;
        document.getElementById('ssn_child_two').value = cookieValue9;
        document.getElementById('dob_child_two').value = cookieValue10;
        document.getElementById('firstname_child_three').value = cookieValue11;
        document.getElementById('ssn_child_three').value = cookieValue12;
        document.getElementById('dob_child_three').value = cookieValue13;
        document.getElementById('firstname_child_four').value = cookieValue14;
        document.getElementById('ssn_child_four').value = cookieValue15;
        document.getElementById('dob_child_four').value = cookieValue16;
        document.getElementById('firstname_child_five').value = cookieValue17;
        document.getElementById('ssn_child_five').value = cookieValue18;
        document.getElementById('dob_child_five').value = cookieValue19;
        document.getElementById('firstname_child_six').value = cookieValue20;
        document.getElementById('ssn_child_six').value = cookieValue21;
        document.getElementById('dob_child_six').value = cookieValue22;
        document.getElementById('upload').value = cookieValue23;
        document.getElementById('secondfirstnameId').value = cookieValue24;
        document.getElementById('secondlastnameId').value = cookieValue25;
        document.getElementById('seconddateId').value = cookieValue26;
        document.getElementById('secondssnId').value = cookieValue27;
    }


    function clearCookie() {
        document.cookie = 'firstnameIdValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        // document.cookie = 'lastnameIdValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'dateIdValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'ssnIdValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'secondfirstnameIdValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'secondlastnameIdValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'seconddateIdValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'secondssnIdValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'firstname_child_oneValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'ssn_child_oneValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'dob_child_oneValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'firstname_child_twoValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'ssn_child_twoValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'dob_child_twoValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'firstname_child_threeValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'ssn_child_threeValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'dob_child_threeValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'firstname_child_fourValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'ssn_child_fourValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'dob_child_fourValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'firstname_child_fiveValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'ssn_child_fiveValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'dob_child_fiveValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'firstname_child_sixValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'ssn_child_sixValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'dob_child_sixValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'uploadValue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    }
</script>













<?php require_once(APPPATH . 'includes/footer.php');

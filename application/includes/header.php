<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <title>Maryland529</title>

    <style>
        .btn {
            display: flex;
            float: right;
        }
        .upload{
            justify-content: center;
            margin: 30px;
        }
        .session_account{
            text-align: center;
            justify-content: center;
            position: absolute;
            top: 3%;
            left: 50%;
            transform: translate(-50%, -50%);        }
        
        .inputs-parent{
            background-color: aliceblue;
            padding: 20px;
            border-radius: 20px;
            background-size: 400px;
            margin-top: 20px;
            text-align: center;
            justify-content: center;
            position: absolute;
            width: 300px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
       
        .child-input{
            width: 400px;
            display: flex;
            padding : 20px;
            justify-content: center;

        }
        .child-info {
            display: none;
            padding : 20px;
        }

        .home_account{
        border: none;
        background-color: aliceblue;
        color: blue;
        font-style: italic;
        font-weight: bold;
        padding: 20px;
        padding-left: 25px;
        }

        #btn-submit-account {
            width: max-content;
            background-color: blue;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 20px;
            padding: 6px;
            text-align: center;
            
        }
        .upload_file{
            margin: 20px;
        }

       .signup_have_account{
        margin-left: 40px;
       }

        .index_container {
            width: 400px;
            border: 2px solid black;
            border-radius: 50px;
            padding: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
     
        }
       

        .uploadFile {
            margin: 7px;
            
        }

        .uploadFile input {
            margin: 5px;
        }

        .error {
            width: 300px;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .input-signup {
            width: 300px;
        }

    

        h2 {
            text-align: center;
            margin: 10px;
        }

        

        .login_container {
            width: 400px;
            border: 2px solid black;
            border-radius: 50px;
            padding: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }

        .signup_container {
            justify-content: center;
            align-items: center;
            width: 400px;
            border: 2px solid black;
            border-radius: 50px;
            padding: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .btn-ReturnToAccount {
            border: none;
            background-color: white;
            font-weight: bold;
            font-size: 20px;
            color: blue;
        }

        .nav-btn {
            display: flex;
        }

        .btn-create-signup {
            width: max-content;
            background-color: blue;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 20px;
            padding: 6px;
            display: inline-flex;
            text-align: center;
            margin: 25px;
            margin-left: 120px;
        }

        .btn-create-signup:hover {
              background-color: blue;
              color: white;
        }
     
        .btn-title {
            border: none;
            background-color: cornflowerblue;
            font-weight: bold;
            font-size: 20px;
            color: blue;
        }

    
        .btn-logout {
            border: none;
            background-color: cornflowerblue;
            font-weight: bold;
            font-size: 20px;
            color: blue;
            text-align: center;
        }

        .btn-logout:hover {
              background-color: blue;
              color: white;
        }


        .btn-signup {
            width: max-content;
            border: none;
            background-color: white;
            color: black;
            font-weight: bold;
            font-size: 20px;
            display: inline-flex;
            text-align: center;
            margin: 10px;
            
        }

        .btn-user{
            width: max-content;
            background-color: blue;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 20px;
            padding: 6px;
            display: inline-flex;
            text-align: center;
            margin: 10px;
        }
        

        .dont_have_an_account_yet{
            width: max-content;
            margin: 10px;
            margin-top: 10px;
        }


        .btn-signup:hover {            
            background-color: blue;
            color: white;
            border-radius: 20px;
           
        }


        .login-submit {
            width: max-content;
            background-color: blue;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 20px;
            padding: 6px;
            display: inline-flex;
            text-align: center;
            margin: 25px;
            margin-left: 120px;
        }

        
        .login-submit:hover {            
            background-color: blue;
            color: white;
            border-radius: 20px;
           
        }

        .btn-login {
            border: none;
            background-color: cornflowerblue;
            font-weight: bold;
            font-size: 20px;
            color: blue;

        }

        .login {
            text-decoration: none;
            font-weight: bold;
            margin-right: 40px;
            color: blue;
            font-size: 20px;
            float: right;

        }

        .signup {
            text-decoration: none;
            font-weight: bold;
            margin-right: 40px;
            color: blue;
            font-size: 20px;

        }

       

        .title {
            font-size: 20px;
            margin: 10px;
            margin-left: 40px;
            float: left;
        }

        .nav {
            color: blue;
            border-radius: 10px;
            background-color: cornflowerblue;
        }

        p {
            font-weight: bold;

        }

        h3 {
            text-align: center;
        }




        .form-control {
            margin: 10px;

        }

        #date_input {
            width: 200px;
        }

        label {
            font-weight: bold;
            font-style: italic;
            width: max-content;
        }

        h4 {
            margin-top: 10px;
            margin-bottom: 20px;

        }

      
        .btn {
            margin: 10px;

        }

        .get_account {
            float: right;
        }

        .container_info {
            padding: 40px;
            margin-top: 50px;
            text-align: center;
        }
        .btn-user_page{
            text-decoration: none;
            color: blue;
            font-weight: bold;
            margin-top: 30px;
        }

        .uploadFile {
            width: 250px;
            margin: 2px;
           align-items: center;
           margin-left: 50px;
           margin-top: 40px;
        }

        #btn-submit-file {
            margin: 5px;
            font-weight: bolder;
            width: min-content;
            
        }

        #btn-submit-file:hover {
            background-color: blue;
            color: white;
        }

        .upload_title {
            width: 150px;
            margin: 2px;

        }
        .container_user{
            padding: 40px;
            margin-top: 20px;
            text-align: center;
        }
        hr{
            font-weight: bold;
        }
       
        .btn-edit{
            width: max-content;
            background-color: blue;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 20px;
            padding: 6px;
            text-align: center;
            margin: 10px;
        }
        .btn-delete{
            width: max-content;
            background-color: blue;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 20px;
            padding: 6px;
            text-align: center;
            margin: 10px;
        }
        .btn-create{
            width: max-content;
            background-color: blue;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 20px;
            padding: 6px;
            text-align: center;
            margin: 10px;
            text-decoration: none;
        }

        .btns-user{
            display: flex;
            justify-content: center;
        }
        .back_to_user_account{
            text-decoration: none;
            color: blue;
            text-align: center;
            font-weight: bold;
        }
      .last_form{
        margin-top: 40px;
        text-align: center;
        font-style: italic;
        color: blue;
      }
      .home{
        text-align: center;
        font-size: 17px;
        border: none;
        background-color: white;
        color: blue;
        display: flex;
        margin: 10px;
        font-style: italic;
        font-weight: bold;
      }
      h1{
        color: blue;
        
      }
      .home-container{
        display: flex;
        text-align: center;
        justify-content: center;
      }
      .home_user{
        text-decoration: none;
        font-weight: bold;
        text-align: center;
        font-size: 17px;
        justify-content: center;
        display: flex;
        margin-top: 20px;
      }
      .home_page{
        width: 100%;
        text-align: center;
        margin-top:  20px;
      }
      .btn-ReturnToAccount{
        padding-bottom: 10px;
        margin: 10px;
      }
      ul{
        display: flex;
        
      }
      .home-result{
        width: 100%;
        padding: 5px;
        margin: 10px;
      }
        
    </style>

    <script type="text/javascript">
        function changeNum() {
            var child0 = document.getElementById('child_information-0');
            var child1 = document.getElementById('child_information-1');
            var child2 = document.getElementById('child_information-2');
            var child3 = document.getElementById('child_information-3');
            var child4 = document.getElementById('child_information-4');
            var child5 = document.getElementById('child_information-5');
            var child6 = document.getElementById('child_information-6');
            var child7 = document.getElementById('child_information-7');
            var child8 = document.getElementById('child_information-8');
            var child9 = document.getElementById('child_information-9');
            var child10 = document.getElementById('child_information-10');
            var selected = document.getElementById('num_children');
            var selectedValue = selected.options[selected.selectedIndex].value;
            if (selectedValue == 0) {
                child1.style.display = 'none';
                child2.style.display = 'none';
                child3.style.display = 'none';
                child4.style.display = 'none';
                child5.style.display = 'none';
                child6.style.display = 'none';
                child7.style.display = 'none';
                child8.style.display = 'none';
                child9.style.display = 'none';
                child10.style.display = 'none';
            }
            if (selectedValue == 1) {
                child1.style.display = 'block';
                child2.style.display = 'none';
                child3.style.display = 'none';
                child4.style.display = 'none';
                child5.style.display = 'none';
                child6.style.display = 'none';
                child7.style.display = 'none';
                child8.style.display = 'none';
                child9.style.display = 'none';
                child10.style.display = 'none';
            }
            if (selectedValue == 2) {
                child1.style.display = 'block';
                child2.style.display = 'block';
                child3.style.display = 'none';
                child4.style.display = 'none';
                child5.style.display = 'none';
                child6.style.display = 'none';
                child7.style.display = 'none';
                child8.style.display = 'none';
                child9.style.display = 'none';
                child10.style.display = 'none';
            }
            if (selectedValue == 3) {
                child1.style.display = 'block';
                child2.style.display = 'block';
                child3.style.display = 'block';
                child4.style.display = 'none';
                child5.style.display = 'none';
                child6.style.display = 'none';
                child7.style.display = 'none';
                child8.style.display = 'none';
                child9.style.display = 'none';
                child10.style.display = 'none';
            }
            if (selectedValue == 4) {
                child1.style.display = 'block';
                child2.style.display = 'block';
                child3.style.display = 'block';
                child4.style.display = 'block';
                child5.style.display = 'none';
                child6.style.display = 'none';
                child7.style.display = 'none';
                child8.style.display = 'none';
                child9.style.display = 'none';
                child10.style.display = 'none';
            }
            if (selectedValue == 5) {
                child1.style.display = 'block';
                child2.style.display = 'block';
                child3.style.display = 'block';
                child4.style.display = 'block';
                child5.style.display = 'block';
                child6.style.display = 'none';
                child7.style.display = 'none';
                child8.style.display = 'none';
                child9.style.display = 'none';
                child10.style.display = 'none';
            }
            if (selectedValue == 6) {
                child1.style.display = 'block';
                child2.style.display = 'block';
                child3.style.display = 'block';
                child4.style.display = 'block';
                child5.style.display = 'block';
                child6.style.display = 'block';
                child7.style.display = 'none';
                child8.style.display = 'none';
                child9.style.display = 'none';
                child10.style.display = 'none';
            }
            if (selectedValue == 7) {
                child1.style.display = 'block';
                child2.style.display = 'block';
                child3.style.display = 'block';
                child4.style.display = 'block';
                child5.style.display = 'block';
                child6.style.display = 'block';
                child7.style.display = 'block';
                child8.style.display = 'none';
                child9.style.display = 'none';
                child10.style.display = 'none';
            }
            }
            if (selectedValue == 8) {
                child1.style.display = 'block';
                child2.style.display = 'block';
                child3.style.display = 'block';
                child4.style.display = 'block';
                child5.style.display = 'block';
                child6.style.display = 'block';
                child7.style.display = 'block';
                child8.style.display = 'block';
                child9.style.display = 'none';
                child10.style.display = 'none';
            }
            if (selectedValue == 9) {
                child1.style.display = 'block';
                child2.style.display = 'block';
                child3.style.display = 'block';
                child4.style.display = 'block';
                child5.style.display = 'block';
                child6.style.display = 'block';
                child7.style.display = 'block';
                child8.style.display = 'block';
                child9.style.display = 'block';
                child10.style.display = 'none';
            }
            if (selectedValue == 10) {
                child1.style.display = 'block';
                child2.style.display = 'block';
                child3.style.display = 'block';
                child4.style.display = 'block';
                child5.style.display = 'block';
                child6.style.display = 'block';
                child7.style.display = 'block';
                child8.style.display = 'block';
                child9.style.display = 'block';
                child10.style.display = 'block';
            }
            
        
            
        
    </script>
</head>

<body>


    <nav class="navbar nav">
        <?php echo form_open('account/home', ['class' => 'form-horizontal']); ?>
        <button type="submit" class="btn btn-primary btn-title">Maryland529</button>
        <?php echo form_close(); ?>
        <div class="nav-btn">






    </nav>
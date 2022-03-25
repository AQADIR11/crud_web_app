<script>
    <?php if (!isset($_GET['edit'])) { ?>
        // validation for add user form
    $('#register-form').validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true
            },
            password: {
                required: true
            },
            gender: {
                required: true
            },
            dob: {
                required: true
            },
            address: {
                required: true
            }
        },

        messages: {
            // custom message hare
        }
    });

    // Check Registred Email For Add user
    $('input[name="email"]').change(function() {
        $.ajax({
            url: 'modules/login-register/code/login-register-code.php',
            type: 'post',
            data: {
                action: "checkEmail",
                value: $(this).val()
            },
            success: function(res) {
                if (res == 'success') {
                    $('#msg').text('Email Alredy Registred');
                } else {
                    $('#msg').text('');
                }
            }
        });
    });

    // Submit add user Form
    $('#register-form').on('submit', function() {
        if ($('#register-form').valid()) {
            if ($('#msg').text() == '') {
                $.ajax({
                    url: 'modules/login-register/code/login-register-code.php',
                    type: 'post',
                    processData: false,
                    contentType: false,
                    data: new FormData(this),
                    success: function(res) {
                        if (res == 'success') {
                            alert('Registration Success');
                            window.location.href = 'admin.php?user';
                        }
                    }
                });
            }
        }
    });
    <?php } if(isset($_GET['edit'])){ ?>

        // edit form validation
        $('#update-form').validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true
            },
            password: {
                required: true
            },
            gender: {
                required: true
            },
            dob: {
                required: true
            },
            address: {
                required: true
            }
        },

        messages: {
            // custom message hare
        }
    });

    // fetch user data for edit
    $(document).ready(function(){
        $.ajax({
            url: 'modules/dashboard/code/admin-code.php',
            type: 'post',
            dataType: 'json',
            data: {action: 'fetch-edit-user', id: <?= $_GET['edit'] ?>},
            success: function(res){
                $('#name').val(res.name);
                $('#email').val(res.email);
                $('#phone').val(res.phone);
                $('#dob').val(res.dob);
                $('#gender').val(res.gender);
                $('#address').val(res.address);
            }
        });
    });
    // chekc registred email
    $('#email').keyup(function(){
        $.ajax({
            url: 'modules/dashboard/code/admin-code.php',
            type: 'post',
            data: {action: 'checkEmailEdit', id:<?= $_GET['edit'] ?>, value: $(this).val()},
            success: function(res){
                if(res == 'success'){
                    $('#editmsg').text('Email Already Regitered');
                }else{
                    $('#editmsg').text('');
                }
            }
        });
    });

    // submit update form
    $('#update-form').on('submit', function(){
        if($('#update-form').valid()){
            if($('#msg').text() == ''){
                $.ajax({
                    url: 'modules/dashboard/code/admin-code.php',
                    type: 'post',
                    processData: false,
                    contentType: false,
                    data: new FormData(this),
                    success: function(res){
                        if(res == 'success'){
                            window.location.href = 'admin.php?user';
                        }else{
                            alert('Somthing went wron please retry!')
                        }
                    }
                });
            }
        }
    });


<?php } ?>
</script>
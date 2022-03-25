<script>
    // Registration Form Validation

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

    // Check Registred Email For Register
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

    // Submit Registration Form
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
                            window.location.href = 'index.php';
                        }
                    }
                });
            }
        }
    });

    // Login Form Validation

    $('#login-form').validate({
        rules: {
            login_email: {
                required: true,
                email: true
            },
            login_pass: {
                required: true
            }
        },
        messages: {
            // custom message hare
        }
    })

    // Check Email For Login

    $('input[name="login_email"]').change(function() {
        $.ajax({
            url: 'modules/login-register/code/login-register-code.php',
            type: 'post',
            data: {
                action: "checkEmail",
                value: $(this).val()
            },
            success: function(res) {
                if (res == 'fail') {
                    $('#msg').text('Email Not Registred');
                } else {
                    $('#msg').text('');
                }
            }
        });
    });

    // Login Form Submit

    $('#login-form').on('submit', function() {
        if ($('#login-form').valid()) {
            if ($('#msg').text() == '') {
                $.ajax({
                    url: 'modules/login-register/code/login-register-code.php',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(res) {
                        if (res == 'super admin') {
                            alert('Login Success');
                            window.location.href = 'admin.php';
                        } else if (res == 'admin') {
                            alert('Login Success');
                            window.location.href = 'admin.php';
                        } else if(res == 'user'){
                            alert('Login Success');
                            window.location.href = 'user.php';
                        }else{
                            alert(res);
                        }
                    }
                });
            }
        }
    });
</script>
$(function () {
    //User Save Profile    
    $("#user-save-profile").click(function () {
        $name = $("#profile-name").val();
        $surname = $("#profile-surname").val();
        $phone = $("#profile-phone").val();
        $grade = $("#profile-grade").val();
        $school = $("#profile-school").val();
        $province = $("#profile-province").val();
        $password = $("#profile-password").val();

        if ($name == "" || $surname == "" || $phone == "" || $grade == "" || $school == "" || $province == "" || $password == "") {
            alertify.alert("Alert", "All fields are required!");
        } else {
            $.post("php/index.php",
                    {
                        req_profile: "req_profile",
                        name: $name,
                        surname: $surname,
                        phone: $phone,
                        grade: $grade,
                        school: $school,
                        passcode: $password,
                        province: $province
                    },
                    function (data, status) {
                        var $data = data.replace(/ /g, "");
                        if ($data == "success") {
                            alertify.alert("Alert", "Profile saved.");

                        } else {
                            alertify.alert("Alert", "An error occured please try again.");

                        }
                    });
        }
    });
    //User login
    $("#user-login").click(function () {
        $email = $("#login-email").val();
        $password = $("#login-password").val();

        if ($email == "" || $password == "") {
            alertify.alert("Alert", "All fields are required!");
        } else {
            $.post("php/index.php",
                    {
                        req_log: "req_log",
                        email: $email,
                        password: $password

                    },
                    function (data, status) {
                        var $data = data.replace(/ /g, "");
                        if ($data == "success") {
                            alertify.alert("Alert", "Login success, you will be redirected.");
                            //timeout
                            setTimeout(function () {
                                window.location.href = "welcome.php"
                            }, 2500);
                        } else {
                            alertify.alert("Alert", "Email or Password you have entered are incorrect please try again.");
                            setTimeout(function () {
                                window.location.href = "index.php";
                            }, 2500);
                        }
                    });
        }
    });
    //User registration
    $("#user-register").click(function () {
        $name = $("#name").val();
        $surname = $("#surname").val();
        $school = $("#school").val();
        $phone = $("#phone").val();
        $email = $("#register-email").val();
        $password = $("#register-password").val();

        if ($name == "" || $surname == "" || $school == "" || $phone == "" || $email == "" || $password == "") {
            alertify.alert("Alert", "All fields are required!");
        } else {
            $.post("http://localhost/Learnx.Elabvine/php/app/index.php",
                    {
                        req_reg: "req_req",
                        name: $name,
                        surname: $surname,
                        school: $school,
                        phone: $phone,
                        email: $email,
                        password: $password

                    },
                    function (data, status) {
                        var $data = data.replace(/ /g, "");
                        if ($data == "success") {
                            alertify.alert("Alert", "Your account has been successfully registered, you will be redirected.");
                            //timeout
                            setTimeout(function () {
                                window.location.href = "welcome.php"
                            }, 2500);
                        } else {
                            alertify.alert("Alert", "An account with the same email address or phone number has already been registered");
                            setTimeout(function () {
                                window.location.href = "index.php";
                            }, 2500);
                        }
                    });
        }
    });
    //Send Email To Admin
    $("#help-center-button").click(function () {
        $subject = $("#subject").val();
        $email = $("#mail-email").val();
        $message = $("#message").val();

        if ($subject == "" || $email == "" || $message == "") {
            alertify.alert("Alert", "All fields are required!");
        } else {
            $.post("php/email.php",
                    {
                        req_mail: "req_mail",
                        subject: $subject,
                        email: $email,
                        message: $message
                    },
                    function (data, status) {
                        var $data = data.replace(/ /g, "");
                        if ($data == "success") {
                            alertify.alert("Alert", "Message successfully sent, you will be redirected.");
                            //timeout
                            setTimeout(function () {
                                window.location.href = "index.php"
                            }, 2500);
                        } else {
                            alertify.alert("Alert", "An error occured please try again");
                            setTimeout(function () {
                                window.location.href = "help-desk.php";
                            }, 2500);
                        }
                    });
        }
    });
});
$(function () {
    //User Business    
    $("#business").click(function () {
        window.location.href = "business.php";
    });
    //User App Unlock    
    $("#unlock-code-button").click(function () {
        $code = $("#unlock-code").val();

        if ($code == "") {
            alertify.alert("Alert", "All fields are required!");
        } else {
            $.post("php/index.php",
                    {
                        req_unlock_code: "req_unlock_code",
                        code: $code
                    },
                    function (data, status) {
                        var $data = data.replace(/ /g, "");
                        if ($data == "success") {
                            alertify.alert("Alert", "Success, LearnX App successfully unlocked.");
                            setTimeout(function () {
                                window.location.href = "welcome.php";
                            }, 2500);

                        } else {
                            alertify.alert("Alert", "Code might already be redeemed please try gain if error persist contact us on WhatsApp (+27 66 066 1480) or Email (givenmakhobela@elabvine.com).");

                        }
                    });
        }
    });
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
    $("#admin-login").click(function () {
        $id = $("#admin-id").val();
        $password = $("#admin-password").val();

        if ($id == "" || $password == "") {
            alertify.alert("Alert", "All fields are required!");
        } else {
            $.post("php/index.php",
                    {
                        req_log: "req_log",
                        id: $id,
                        password: $password

                    },
                    function (data, status) {
                        var $data = data.replace(/ /g, "");
                        if ($data == "success") {
                            alertify.alert("Alert", "Login success, you will be redirected.");
                            setTimeout(function () {
                                window.location.href = "user/index.php";
                            }, 2500);
                        } else {
                            alertify.alert("Alert", "Admin Id or Password you have entered are incorrect please try again.");
                            
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
            $.post("php/index.php",
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

});
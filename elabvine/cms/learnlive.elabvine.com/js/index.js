$(function () {
    //subscribe modal
    var $remodalSubscribe = $('[data-remodal-id=remodal-subscribe]').remodal();
    //Subscribe button
    $("#button-subscribe").click(function () {
        var $emailAddress = $("#subscriber-email").val();
        if ($emailAddress == "") {
            alertify.alert("Alert", "Please fill in email address.");
        } else {
            $remodalSubscribe.open();
        }

    });
    //subscribe modal
    var $remodalSubscribeBlog = $('[data-remodal-id=remodal-blog-subscribe]').remodal();
    //Subscribe button blog
    $("#button-subscribe-blog").click(function () {
        var $emailAddress = $("#subscriber-email-blog").val();
        if ($emailAddress == "") {
            alertify.alert("Alert", "Please fill in email address.");
        } else {
            $remodalSubscribeBlog.open();
        }

    });
    //Submit Blog name and email
    $("#button-subscribe-blog-submit").click(function () {
        var $emailAddress = $("#subscriber-email-blog").val();
        var $name = $("#subscriber-blog-name").val();
        if ($name == "") {
            alertify.alert("Alert", "Please fill in name.");
        } else {
            $remodalSubscribeBlog.close();
            submitSubscriber($emailAddress, $name);
        }

    });
    //Submit name and email
    $("#button-subscribe-submit").click(function () {
        var $emailAddress = $("#subscriber-email").val();
        var $name = $("#subscriber-name").val();
        if ($name == "") {
            alertify.alert("Alert", "Please fill in name.");
        } else {
            $remodalSubscribe.close();
            submitSubscriber($emailAddress, $name);
        }

    });
    //Ajax to submit subscribers info
    function submitSubscriber() {
        $.post("php/index.php",
                {
                    reqId: "newSubscriber",
                    name: arguments[1],
                    email: arguments[0]
                },
                function (data, status) {
                    var $data = data.replace(/ /g, "");
                    if ($data == "success") {
                        alertify.alert("Alert", "Thanks for subscribing on our website you will receive blog updates, promotions and all the update that will excite you.");
                    } else if ($data == "error") {
                        alertify.alert("Alert", "You already subscribed anyway you will still receive blog updates, promotions and all the update that will excite you.");
                    } else {
                        alertify.alert("Alert", "Something went wrong retry.");
                    }
                }
        );
    }
    //Index get started
    $("#get-started-index").click(function () {
        //Hide
        $("#get-started-index").hide();
        //vars
        var $name = $("#name").val();
        var $phone = $("#phone").val();
        var $email = $("#email").val();
        var $password = $("#password").val();

        if ($name == "" || $phone == "" || $email == "" || $password == "") {
            alertify.alert("Alert", "Please fill in all fields.");
            //Hide
            $("#get-started-index").show();
        } else {
            getStartedIndex($name, $phone, $email, $password);
        }
    });
    //Get started
    $("#get-started").click(function () {
        //Hide
        $("#get-started").hide();
        //vars
        var $name = $("#name").val();
        var $phone = $("#phone").val();
        var $email = $("#email").val();
        var $password = $("#password").val();

        if ($name == "" || $phone == "" || $email == "" || $password == "") {
            alertify.alert("Alert", "Please fill in all fields.");
            //Hide
            $("#get-started").show();
        } else {
            getStartedIndex($name, $phone, $email, $password);
        }
    });
    //Register
    function getStartedIndex($name, $phone, $email, $password) {
        $.post("php/index.php",
                {
                    reqId: "getStartedRegistration",
                    name: $name,
                    phone: $phone,
                    email: $email,
                    password: $password
                },
                function (data, status) {
                    var $data = data.replace(/ /g, "");
                    if ($data == "success") {
                        alertify.alert("Alert", "Success. thanks for signing up. Please wait...");

                        setTimeout(function () {
                            window.location.href = "account/"
                        }, 2500);

                    } else {
                        alertify.alert("Alert", "An error occured please try again");
                        //show
                        $("#get-started-index").show();
                    }
                }
        );
    }
    //Matric Rewrite Application
    $("#button-matric-rewrite").click(function () {
        //Hide
        $("#button-matric-rewrite").hide();
        //vars
        var $name = $("#name").val();
        var $phone = $("#phone").val();
        var $email = $("#email").val();
        var $message = $("#message").val();

        if ($name == "" || $phone == "" || $email == "" || $message == "") {
            alertify.alert("Alert", "Please fill in all fields.");
            //Hide
            $("#button-matric-rewrite").show();
        } else {
            matricApplicationRewrite($name, $phone, $email, $message);
        }
    });
    //Matric Application to Rewrite
    function matricApplicationRewrite($name, $phone, $email, $message) {
        $.post("php/index.php",
                {
                    reqId: "matricApplicationRewrite",
                    name: $name,
                    phone: $phone,
                    email: $email,
                    message: $message
                },
                function (data, status) {
                    var $data = data.replace(/ /g, "");
                    if ($data == "success") {
                        alertify.alert("Alert", "Thanks for choosing Scimatix to rewrite your matric, we will contact you shortly.");

                    } else {
                        alertify.alert("Alert", "An error occured please try again");
                        //show
                        $("#button-matric-rewrite").show();
                    }
                }
        );
    }
    //Message
    $("#button-help-center").click(function () {
        //Hide
        $("#button-help-center").hide();
        //vars
        var $name = $("#name").val();
        var $phone = $("#phone").val();
        var $email = $("#email").val();
        var $message = $("#message").val();

        if ($name == "" || $phone == "" || $email == "" || $message == "") {
            alertify.alert("Alert", "Please fill in all fields.");
            //Hide
            $("#button-help-center").show();
        } else {
            helpCenterMessage($name, $phone, $email, $message);
        }
    });
    //Matric Application to Rewrite
    function helpCenterMessage($name, $phone, $email, $message) {
        $.post("php/index.php",
                {
                    reqId: "matricApplicationRewrite",
                    name: $name,
                    phone: $phone,
                    email: $email,
                    message: $message
                },
                function (data, status) {
                    var $data = data.replace(/ /g, "");
                    if ($data == "success") {
                        alertify.alert("Alert", "Thanks for contacting Scimatix, we will get back to you shortly.");

                    } else {
                        alertify.alert("Alert", "An error occured please try again");
                        //show
                        $("#button-help-center").show();
                    }
                }
        );
    }
    $("#LogInWarning").hide();
    //Login Submit
    $("#button-login-submit").click(function () {
        
        var $email = $("#login-email").val();
        var $password = $("#login-password").val();
        var $rememberme;
        if ($('#login-checkbox').prop("checked") == true) {
            $rememberme = "yes";
        } else {
            $rememberme = "no";
        }

        if ($email == "" || $password == "" || $rememberme == "") {
            $("#LogInWarning").show();
            $("#LogInWarning").text("An error occured please try again.");
        } else {
            logIn($email, $password, $rememberme);
        }
    });
    //Login in
    function logIn($email, $password, $rememberme) {
        $.post("php/index.php",
                {
                    reqId: "Login",
                    email: $email,
                    password: $password,
                    remember: $rememberme
                },
                function (data, status) {
                    var $data = data.replace(/ /g, "");
                    if ($data == "success") {
                        alertify.alert("Alert", "Success. Logging in. Please wait...");

                        setTimeout(function () {
                            window.location.href = "account/"
                        }, 2500);
                    } else {
                        $("#LogInWarning").show();
                        $("#LogInWarning").text("An error occured please try again.");
                    }
                }
        )
    }
})
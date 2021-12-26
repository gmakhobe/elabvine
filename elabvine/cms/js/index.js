$(function () {
    //Hidden
    $("#getStartedWarning").hide();
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
    //get started modal
    var $remodalGetStarted = $('[data-remodal-id=remodal-getstarted]').remodal();
    //Get started
    $("#create-your-platform").click(function () {
        //Get inputs
        var $emailAddress = $("#email").val();
        var $password = $("#password").val();
        var $storeName = $("#company-name").val();
        //See if empty
        if ($emailAddress == "" || $password == "" || $storeName == "") {
            alertify.alert("Alert", "Please fill in all fields.");
        } else {
            $remodalGetStarted.open();
        }

    });
    //Get started submit all
    $("#button-getstarted").click(function () {
        //hide
        $("#button-getstarted").hide();
        //Get inputs
        var $emailAddress = $("#email").val();
        var $password = $("#password").val();
        var $storeName = $("#company-name").val();
        var $adminName = $("#admin-name").val();
        var $adminCell = $("#admin-cell").val();
        var $platformType = $("#platform-type").val();
        //Check empty input
        if ($emailAddress == "" || $password == "" || $storeName == "" || $adminName == "" || $platformType == "" || $adminCell == "") {
            //Alert user
            $("#getStartedWarning").show();
            $("#getStartedWarning").text("Please fill in all fields.");
            //show
            $("#button-getstarted").show();
        } else {
            $("#getStartedWarning").hide();
            //link availability
            $.post("php/index.php",
                    {
                        reqId: "getStartedRegistration",
                        email: $emailAddress,
                        password: $password,
                        storename: $storeName,
                        name: $adminName,
                        cell: $adminCell,
                        platformtype: $platformType
                    },
                    function (data, status) {
                        var $data = data.replace(/ /g, "");
                        if ($data == "success") {
                            alertify.alert("Alert", "Your account is successfully registered. You will be redirected to Dashboard.");
                            //timeout
                            setTimeout(function () {
                                window.location.href = "account/index.php"
                            }, 2500);
                        } else {
                            //show
                            $("#button-getstarted").show();

                            alertify.alert("Alert", "An error occured while setting up your account please try again.");
                        }
                    }
            );
        }

    });


    //Receive message
    $("#button-custom-platform-send-message").click(function () {
        //hide
        $("#button-custom-platform-send-message").hide();
        //Get values
        var $name = $("#name").val();
        var $email = $("#email").val();
        var $subject = $("#subject").val();
        var $message = $("#message").val();
        //If empty
        if ($name == "" || $email == "" || $subject == "" || $message == "") {
            alertify.alert("Alert", "Please fill in all fields.");
            //show
            $("#button-custom-platform-send-message").show();
        } else {
            customPlatformPostMessage($name, $email, $subject, $message);
        }
    });
    //Send Message to givenmakhobela@elabvine.com
    function customPlatformPostMessage() {
        //Get values
        var $name = arguments[0];
        var $email = arguments[1];
        var $subject = arguments[2];
        var $message = arguments[3];
        //Post
        $.post("mail.php",
                {
                    name: $name,
                    email: $email,
                    subject: $subject,
                    message: $message
                },
                function (data, status) {
                    var $data = data.replace(/ /g, "");
                    if ($data == "success") {
                        alertify.alert("Alert", "Message successfully sent, a typical response time take up to an hour. In out of office hours it takes up to 5 hours.");
                    } else {
                        alertify.alert("Alert", "An error occured please try gain.");
                        //show
                        $("#button-custom-platform-send-message").show();
                    }
                }
        );
    }
    //subscribe modal
    var $remodalBlogSubscribe = $('[data-remodal-id=remodal-blog-subscribe]').remodal();
    //Subscribe blog button
    $("#button-blog-subscribe").click(function () {
        var $emailAddress = $("#blog-subscribers-email").val();
        if ($emailAddress == "") {
            alertify.alert("Alert", "Please fill in email address.");
        } else {
            $remodalBlogSubscribe.open();
        }

    });
    //Submit name and email
    $("#button-subscribe-blog-submit").click(function () {
        var $emailAddress = $("#blog-subscribers-email").val();
        var $name = $("#subscriber-blog-name").val();
        if ($name == "") {
            alertify.alert("Alert", "Please fill in name.");
        } else {
            $remodalBlogSubscribe.close();
            submitSubscriberBlog($emailAddress, $name);
        }

    });
    //Ajax to submit subscribers info
    function submitSubscriberBlog() {
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
    //login modal
    var $remodalLogin = $('[data-remodal-id=remodal-login]').remodal();
    //login button
    $("#login-nav").click(function () {
        //hide
        $("#LogInWarning").hide();
        //OPen remodal
        $remodalLogin.open();
    });
    //Login
    $("#button-login-submit").click(function () {
        //hide
        $("#button-login-submit").hide();
        //Get values
        var $email = $("#login-email").val();
        var $password = $("#login-password").val();
        var $rememberme;
        if ($('#login-checkbox').prop("checked") == true) {
            $rememberme = "yes";
        } else {
            $rememberme = "no";
        }
        //If empty
        if ($email == "" || $password == "" || $rememberme == "") {
            //show
            $("#LogInWarning").show();
            $("#LogInWarning").text("Please fill in all fields.");
            //show
            $("#button-login-submit").show();
        } else {
            loginSubmit($email, $password, $rememberme);
        }
    });
    //Login
    function loginSubmit($email, $password, $rememberme) {
        //Post
        $.post("php/index.php",
                {
                    reqId: "loginSubmit",
                    email: $email,
                    password: $password,
                    remember: $rememberme
                },
                function (data, status) {
                    var $data = data.replace(/ /g, "");
                    if ($data == "success") {
                        $remodalLogin.close();
                        alertify.alert("Alert", "Success, please wait...");
                        //timeout
                        setTimeout(function () {
                            window.location.href = "account/index.php"
                        }, 2500);
                    } else {
                        //show
                        $("#LogInWarning").show();
                        $("#LogInWarning").text("Email or Password you entered is not corrent..");
                        //show
                        $("#button-login-submit").show();
                    }
                }
        );
    }

});
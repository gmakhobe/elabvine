$(function () {
    /* Account Config */
    function tutorStepOne() {
        $("#tutor-step-1").show();
        $("#tutor-step-2").hide();
    }
    tutorStepOne();
    function tutorStepTwo() {
        $("#tutor-step-2").show();
        $("#tutor-step-1").hide();
    }
    function studentStepOne() {
        $("#student-step-1").show();
        $("#student-step-2").hide();
        $("#student-step-3").hide();
    }
    studentStepOne();
    function studentStepTwo() {
        $("#student-step-2").show();
        $("#student-step-1").hide();
        $("#student-step-3").hide();
    }
    function studentStepThree() {
        $("#student-step-3").show();
        $("#student-step-1").hide();
        $("#student-step-2").hide();
    }
    //Tutor Button Clicks First Step
    $("#button-tutor-go-to-step-1").click(function () {
        //Get First Values
        var $name = $("#t-name").val();
        var $surname = $("#t-surname").val();
        var $gender = $("#t-gender").val();
        var $identification = $("#t-identification").val();
        var $occupation = $("#t-occupation").val();
        //If empty
        if ($name == "" || $surname == "" || $gender == "" || $identification == "" || $occupation == "") {
            alertify.alert("Alert", "All fields are requred");
        } else {
            //post
            $.post("../php/index.php",
                    {
                        reqId: "accountConfig",
                        user: "tutor",
                        step: 1,
                        name: $name,
                        surname: $surname,
                        gender: $gender,
                        identification: $identification,
                        occupation: $occupation
                    }, function (data, status) {
                var $data = data.replace(/ /g, "");
                if ($data == "success") {
                    alertify.success('Success!');
                    tutorStepTwo();
                } else {
                    alertify.alert("Alert", "An error occured while saving your information please try again.");
                }
            });
        }


    });
    //Tutor Button Clicks Second Step
    $("#button-tutor-finished").click(function () {
        //Get First Values
        var $address_1 = $("#t-address-1").val();
        var $address_2 = $("#t-address-2").val();
        var $address_3 = $("#t-address-3").val();
        var $address_4 = $("#t-address-4").val();
        var $address_5 = $("#t-province").val();
        //If empty
        if ($address_1 == "" || $address_3 == "" || $address_4 == "") {
            alertify.alert("Alert", "Fill in Address Line 1, Suburb and Zip Code. Address Line 2 is optional.");
        } else {
            //post
            $.post("../php/index.php",
                    {
                        reqId: "accountConfig",
                        user: "tutor",
                        step: 2,
                        address1: $address_1,
                        address2: $address_2,
                        address3: $address_3,
                        address4: $address_4,
                        address5: $address_5
                    }, function (data, status) {
                var $data = data.replace(/ /g, "");
                if ($data == "success") {
                    alertify.alert("Alert", "Thanks you will be redirected to Dashboard.");
                    setTimeout(function () {
                        window.location.href = "./"
                    }, 2500)
                } else {
                    alertify.alert("Alert", "An error occured while saving your information please try again.");
                }
            });
        }

    });
    //Button Clicks First Step
    $("#button-go-to-step-2").click(function () {
        //Get First Values
        var $student_name = $("#s-name").val();
        var $student_surname = $("#s-surname").val();
        var $student_gender = $("#s-gender").val();
        var $student_datebirth = $("#s-datebirth").val();
        var $student_grade = $("#s-grade").val();
        var $student_school = $("#s-school").val();
        //If empty
        if ($student_name == "" || $student_surname == "" || $student_gender == "" || $student_datebirth == "" || $student_grade == "" || $student_school == "") {
            alertify.alert("Alert", "All fields are requred");
        } else {
            //post
            $.post("../php/index.php",
                    {
                        reqId: "accountConfig",
                        user: "student",
                        step: 1,
                        name: $student_name,
                        surname: $student_surname,
                        datebirth: $student_datebirth,
                        gender: $student_gender,
                        grade: $student_grade,
                        school: $student_school
                    }, function (data, status) {
                var $data = data.replace(/ /g, "");
                if ($data == "success") {
                    alertify.success('Success!');
                    studentStepTwo();
                } else {
                    alertify.alert("Alert", "An error occured while saving your information please try again.");
                }
            });
        }


    });
    //Button Clicks Second Step
    $("#button-go-to-step-3").click(function () {
        //Get First Values
        var $address_1 = $("#s-address-1").val();
        var $address_2 = $("#s-address-2").val();
        var $address_3 = $("#s-address-3").val();
        var $address_4 = $("#s-address-4").val();
        var $address_5 = $("#s-province").val();
        //If empty
        if ($address_1 == "" || $address_2 == "" || $address_3 == "" || $address_4 == "") {
            alertify.alert("Alert", "Fill in Address Line 1, Suburb and Zip Code. Address Line 2 is optional.");
        } else {
            //post
            $.post("../php/index.php",
                    {
                        reqId: "accountConfig",
                        user: "student",
                        step: 2,
                        address1: $address_1,
                        address2: $address_2,
                        address3: $address_3,
                        address4: $address_4,
                        address5: $address_5
                    }, function (data, status) {
                var $data = data.replace(/ /g, "");
                if ($data == "success") {
                    alertify.success('Success!');
                    studentStepThree();
                } else {
                    alertify.alert("Alert", "An error occured while saving your information please try again.");
                }
            });
        }


    });
    //Button Clicks Last Step
    $("#button-Finished").click(function () {
        //Get First Values
        var $name = $("#g-name").val();
        var $phone = $("#g-phone").val();
        var $email = $("#g-email").val();
        //If empty
        if ($name == "" || $phone == "" || $email == "") {
            alertify.alert("Alert", "All fields are requred.");
        } else {
            //post
            $.post("../php/index.php",
                    {
                        reqId: "accountConfig",
                        user: "student",
                        step: 3,
                        name: $name,
                        phone: $phone,
                        email: $email
                    }, function (data, status) {
                var $data = data.replace(/ /g, "");
                if ($data == "success") {
                    alertify.alert("Alert", "Thanks you will be redirected to Dashboard.");
                    setTimeout(function () {
                        window.location.href = "./"
                    }, 2500)
                } else {
                    alertify.alert("Alert", "An error occured while saving your information please try again.");
                }
            });
        }


    });
    /* End Account Config */
    function Notifications() {
        $.post("../php/index.php",
                {
                    reqId: "DashboardNotifications",
                    source: "Wallet"
                },
                function (data, status) {
                    //Show
                    $("#notifications-section").append(data);

                }
        );
        $.post("../php/index.php",
                {
                    reqId: "DashboardNotifications",
                    source: "Hours"
                },
                function (data, status) {
                    //Show
                    $("#notifications-section").append(data);

                }
        );
        $.post("../php/index.php",
                {
                    reqId: "DashboardNotifications",
                    source: "AccountStatus"
                },
                function (data, status) {
                    //Show
                    $("#notifications-section").append(data);

                }
        );
        $.post("../php/index.php",
                {
                    reqId: "DashboardNotifications",
                    source: "LessonAcceptance"
                },
                function (data, status) {
                    //Show
                    $("#notifications-section").append(data);

                }
        );
        $.post("../php/index.php",
                {
                    reqId: "DashboardNotifications",
                    source: "LessonInProgress"
                },
                function (data, status) {
                    //Show
                    $("#notifications-section").append(data);

                }
        );
        $.post("../php/index.php",
                {
                    reqId: "DashboardNotifications",
                    source: "LessonInProgressTutor"
                },
                function (data, status) {
                    //Show
                    $("#notifications-section").append(data);

                }
        );
		$.post("../php/index.php",
                {
                    reqId: "DashboardNotifications",
                    source: "SetProfileNotification"
                },
                function (data, status) {
                    //Show
                    $("#notifications-section").append(data);

                }
        );
		$.post("../php/index.php",
                {
                    reqId: "DashboardNotifications",
                    source: "MessageNotification"
                },
                function (data, status) {
                    //Show
                    $("#notifications-section").append(data);

                }
        );
    }
    Notifications();
    //Button Clicks Last Step
    $("#button-report-lesson").click(function () {
        $("#button-report-lesson").hide();
        //Get First Values
        var $problem = $("#problem").val();
        var $message = $("#message").val();
        //If empty
        if ($problem == "" || $message == "") {
            alertify.alert("Alert", "All fields are requred.");
            $("#button-report-lesson").show();
        } else {
            //post
            $.post("../php/index.php",
                    {
                        reqId: "reportProblem",
                        problem: $problem,
                        message: $message
                    }, function (data, status) {
                var $data = data.replace(/ /g, "");
                if ($data == "success") {
                    alertify.alert("Alert", "Thanks for reporting this lesson as: " + $problem + ". We are sorry that this has to happen to you and we will respond shortly.");
                    setTimeout(function () {
                        window.location.href = "lesson.php"
                    }, 2500)
                } else {
                    alertify.alert("Alert", "An error occured please try again.");
                    $("#button-report-lesson").show();
                }
            });
        }


    });

});


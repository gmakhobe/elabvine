var app = {
    // Application Constructor
    initialize: function () {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    // deviceready Event Handler
    //
    // Bind any cordova events here. Common events are:
    // 'pause', 'resume', etc.
    onDeviceReady: function () {
        //this.receivedEvent('deviceready');
        //User Login
        document.getElementById("button-user-login").addEventListener("click", userLogin);

        function userLogin() {
            $connectionType = checkConnection();
            if ($connectionType == "No network connection") {
                alertify.alert("Alert", "There is no internet connection detected please enable your internet connection.");
            } else {
                //data
                $divice_uuid = device.uuid;
                $email = $("#login-email").val();
                $password = $("#login-password").val();

                if ($email == "" || $password == "") {
                    alertify.alert("Alert", "All fields are required.");
                } else {
                    //hide
                    $("#button-user-login").hide();
                    $("#login").modal("hide");
                    alertify.alert("Alert", "Please wait...");
                    var data = {
                        "req_log": "req_log",
                        "uuid": $divice_uuid,
                        "email": $email,
                        "password": $password
                    };
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "http://learnx.elabvine.com/php/app/index.php", //Relative or absolute path to response.php file
                        data: data,
                        success: function (data) {
                            $status = data["Id"];
                            if ($status == "success") {
                                //Set Storages
                                localStorage.setItem("name", data["Name"]);
                                localStorage.setItem("surname", data["Surname"]);
                                localStorage.setItem("email", data["Email"]);
                                localStorage.setItem("school", data["School"]);
                                localStorage.setItem("step", data["Step"]);
                                localStorage.setItem("id", data["UserId"]);
                                localStorage.setItem("session", "online");

                                navigator.notification.alert("Login Success...", non, 'Alert', 'Done');

                                setTimeout(function () {
                                    window.location.href = "index.html";
                                }, 2500);
                                
                                function non() {}

                            } else {
                                navigator.notification.alert(data["Reason"], non, 'Alert', 'Done');

                                function non() {}
                            }

                        }
                    });

                }

            }
            
            $("#button-user-login").show();

        }
        //User Registration user-register
        document.getElementById("button-user-register").addEventListener("click", userRegistration);

        function userRegistration() {
            $connectionType = checkConnection();
            if ($connectionType == "No network connection") {
                alertify.alert("Alert", "There is no internet connection detected please enable your internet connection.");
            } else {
                //data
                $name = $("#name").val();
                $surname = $("#surname").val();
                $school = $("#school").val();
                $phone = $("#phone").val();
                $email = $("#register-email").val();
                $password = $("#register-password").val();

                if ($name == "" || $surname == "" || $school == "" || $phone == "" || $email == "" || $password == "") {
                    alertify.alert("Alert", "All fields are required.");
                } else {
                    //hide
                    $("#button-user-register").hide();
                    $("#register").modal("hide");
                    alertify.alert("Alert", "Please wait...");
                    $.post("http://learnx.elabvine.com/php/app/index.php",
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

                                $data = data.replace(/ /g, "");
                                if ($data == "success") {

                                    navigator.notification.alert("Account successfully registered please login.\nEmail: " + $email + "\nPassword: " + $password, loginBar, 'Alert', 'Done');

                                    function loginBar() {
                                        //Attach Creds on login form
                                        $("#login-email").val($email);
                                        $("#login-password").val($password);
                                    }

                                } else {
                                    alertify.alert("Alert", "Your account has been successfully registered, you will be redirected.");
                                }

                            });
                }

            }
            $("#button-user-register").show();

        }
        
        //Check Internet Connection
        function checkConnection() {
            var networkState = navigator.connection.type;

            var states = {};
            states[Connection.UNKNOWN] = 'Unknown connection';
            states[Connection.ETHERNET] = 'Ethernet connection';
            states[Connection.WIFI] = 'WiFi connection';
            states[Connection.CELL_2G] = 'Cell 2G connection';
            states[Connection.CELL_3G] = 'Cell 3G connection';
            states[Connection.CELL_4G] = 'Cell 4G connection';
            states[Connection.CELL] = 'Cell generic connection';
            states[Connection.NONE] = 'No network connection';

            return (states[networkState]);
        }
    },

    


};

app.initialize();
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
        //User Redeem
        document.getElementById("unlock-code-button").addEventListener("click", userRedeemCode);

        function userRedeemCode() {
            $connectionType = checkConnection();
            if ($connectionType == "No network connection") {
                alertify.alert("Alert", "There is no internet connection detected please enable your internet connection.");
            } else {
                //data
                $userId = localStorage.getItem("id");
                $code = $("#unlock-code").val();

                if ($userId == "" || $code == "") {
                    alertify.alert("Alert", "All fields are required.");
                } else {
                    //hide
                    alertify.alert("Alert", "Please wait...");
                    var data = {
                        "req_unlock_code": "req_unlock_code",
                        "id": $userId,
                        "code": $code
                    };
                    $.ajax({
                        type: "POST",
                        url: "http://learnx.elabvine.com/php/app/index.php", //Relative or absolute path to response.php file
                        data: data,
                        success: function (data) {
                            $status = data;
                            if ($status == "success") {
                                //Set Storages
                                localStorage.setItem("step", "Step 3");

                                navigator.notification.alert("App unlocked successfully!", non, 'Alert', 'Done');

                                var time = 3000;
                                navigator.vibrate(time);

                                setTimeout(function () {
                                    window.location.href = "welcome.html";
                                }, 2500);

                                function non() { }

                            } else {
                                navigator.notification.alert("This unlock code is invalid. Please verify the unlock code and try again.", non, 'Alert', 'Done');

                                function non() { }
                            }

                        }
                    });

                }

            }


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
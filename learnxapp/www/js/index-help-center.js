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
        
        document.getElementById("button-help-center").addEventListener("click", helpCenterSendMessage);

        function helpCenterSendMessage() {
            $connectionType = checkConnection();
            if ($connectionType == "No network connection") {
                alertify.alert("Alert", "There is no internet connection detected please enable your internet connection.");
            } else {
                //data
                $subject = $("#subject").val();
                $email = $("#mail-email").val();
                $message = $("#message").val();
                $mail_source = $("#mail-source").val();

                if ($subject == "" || $email == "" || $message == "") {
                    alertify.alert("Alert", "All fields are required.");
                } else {
                    //hide
                    $("#button-help-center").hide();
                    alertify.alert("Alert", "Sending message...");
                    $.post("http://learnx.elabvine.com/php/app/email.php",
                        {
                            req_mail: "req_mail",
                            subject: $subject,
                            email: $email,
                            message: $message
                        },
                        function (data, status) {

                            $data = data.replace(/ /g, "");
                            if ($data == "success") {
                                alertify.alert("Alert", "Message sent!");
                                //timeout
                                setTimeout(function () {
                                    window.location.href = $mail_source;
                                }, 2500);
                            } else {
                                alertify.alert("Alert", "An error occured please try again.");
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
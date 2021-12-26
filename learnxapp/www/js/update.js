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

        function updateApp() {
            //Check if Item "update" exists
            $updateDay = localStorage.getItem("update");

            if ($updateDay == "" || $updateDay == undefined || $updateDay == null) {
                //Not valid create new
                $date = new Date();
                $day = $date.getDate();
                localStorage.setItem("update", $day);
                $fullDate = $date.getDate() + " " + $date.getMonth() + " " + $date.getFullYear();
                localStorage.setItem("updateDate", $fullDate);
                localStorage.setItem("updateLink", "Not Active");
            } else {
                //Already exists
                $date = new Date();
                $day = $date.getDate();
                if ($day == 1 || $day == 10 || $day == 20) {
                    //Check for updates

                    $today = $date.getDate() + " " + $date.getMonth() + " " + $date.getFullYear();
                    $oldUpdateDay = localStorage.getItem("updateDate");

                    if ($today == $oldUpdateDay) {
                        
                    } else {

                        navigator.notification.alert("An update might be available please enable internet connection to see if LearnX App can be downloaded.", updateNow, 'Alert', 'Update');

                        function updateNow() {
                            $connectionType = checkConnection();
                            if ($connectionType == "No network connection") {
                                alertify.alert("Alert", "There is no internet connection detected please enable your internet connection.");
                            } else {
                                //data
                                $version = 100;

                                if ($version == "") {
                                    alertify.alert("Alert", "App update failed.");
                                } else {
                                    //hide
                                    alertify.alert("Alert", "Please wait...");
                                    $.post("http://learnx.elabvine.com/php/app/index.php",
                                        {
                                            req_update: "req_update",
                                            version: $version
                                        },
                                        function (data, status) {

                                            $data = data.replace(/ /g, "");
                                            if ($data == "Update") {

                                                localStorage.setItem("updateLink", "Active");

                                                setTimeout(function () {
                                                    window.location.href = "update.html";
                                                }, 2500);
                                            } else {
                                                $date = new Date();
                                                $day = $date.getDate();
                                                localStorage.setItem("update", $day);
                                                $fullDate = $date.getDate() + " " + $date.getMonth() + " " + $date.getFullYear();
                                                localStorage.setItem("updateDate", $fullDate);
                                                localStorage.setItem("updateLink", "Not Active");
                                                alertify.alert("Alert", "App up to date!");
                                            }

                                        });
                                }

                            }


                        }


                    }


                }
            }


        }
        updateApp();

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
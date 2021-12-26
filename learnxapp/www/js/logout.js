//Logout
function userLogout() {

    $connectionType = checkConnection();
    if ($connectionType == "No network connection") {
        alertify.alert("Alert", "There is no internet connection detected please enable your internet connection.");
    } else {
        //data
        $divice_uuid = device.uuid;
        $userId = localStorage.getItem("id");
        
        if ($userId == "") {
            alertify.alert("Alert", "All fields are required.");
        } else {
            //Confirm
            navigator.notification.confirm(
                'Are you sure you want to logout?', // message
                logoutFunc,            // callback to invoke with index of button pressed
                'Confirm',           // title
                ['Ok', 'Cancel']     // buttonLabels
            );

            function logoutFunc(val) {
                if (val == 1) {
                    //Ajax
                    alertify.alert("Alert", "Please wait...");
                    var data = {
                        "req_logout": "req_logout",
                        "uuid": $divice_uuid, 
                        "id": $userId
                    };
                    $.ajax({
                        type: "POST",
                        url: "http://learnx.elabvine.com/php/app/index.php", //Relative or absolute path to response.php file
                        data: data,
                        success: function (data) {
                            $status = data;
                            if ($status == "success") {
                                //Remove Storage
                                //Set Storages
                                localStorage.removeItem("name");
                                localStorage.removeItem("surname");
                                localStorage.removeItem("email");
                                localStorage.removeItem("school");
                                localStorage.removeItem("step");
                                localStorage.removeItem("id");
                                localStorage.removeItem("session");

                                setTimeout(function () {
                                    window.location.href = "index.html";
                                }, 2500);

                                
                            } else {
                                navigator.notification.alert("An error occured please try again", non, 'Alert', 'Ok');

                                function non() { }
                            }

                        }
                    });
                }
            }
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
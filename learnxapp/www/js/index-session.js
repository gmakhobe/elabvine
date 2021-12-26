$(function () {
    if (typeof (Storage) !== "undefined") {
        $session = localStorage.getItem("session");
        if($session == "" || $session == "undefined" || $session == null || $session == "offline"){
            
        }else if($session == "online"){
            window.location.href = "welcome.html";
        }else{
            
        }
    } else {
        alertify.alert("Alert", "LearnX App will not function properly in your device!");
    }
});
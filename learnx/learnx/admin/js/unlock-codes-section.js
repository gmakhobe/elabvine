$(function(){
    //Get Redeemed Codes
    function redeemedCode(){
        $.post("../php/index.php",
                {
                    req_codes: "req_codes",
                    reqIdDisplay: "req_redeemed_codes"
                },
                function (data, status) {
                    $("#rowsRedeemedCodes").html(data);
                }
        );
    }
    redeemedCode();
    //Get Active Codes
    function activeCode(){
        $.post("../php/index.php",
                {
                    req_codes: "req_codes",
                    reqIdDisplay: "req_active_codes"
                },
                function (data, status) {
                    $("#rowsActiveCodes").html(data);
                }
        );
    }
    activeCode();
});
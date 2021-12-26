$(function () {
    //All Users
    function allUsers() {
        $.post("../php/index.php",
                {
                    req_users: "req_users",
                    reqIdDisplay: "req_all_users"
                },
                function (data, status) {
                    $("#rowsAllUsers").html(data);
                }
        );
    }
    allUsers();
    //Unaid Users
    function allUnpaidUsers() {
        $.post("../php/index.php",
                {
                    req_users: "req_users",
                    reqIdDisplay: "req_unpaid_users"
                },
                function (data, status) {
                    $("#rowsUnpaidUsers").html(data);
                }
        );
    }
    allUnpaidUsers();
    //Paid Users
    function allPaidUsers() {
        $.post("../php/index.php",
                {
                    req_users: "req_users",
                    reqIdDisplay: "req_paid_users"
                },
                function (data, status) {
                    $("#rowsPaidUsers").html(data);
                }
        );
    }
    allPaidUsers();
    //Paid Users
    function allAppUsers() {
        $.post("../php/index.php",
                {
                    req_users: "req_users",
                    reqIdDisplay: "req_app_users"
                },
                function (data, status) {
                    $("#rowsAppUsers").html(data);
                }
        );
    }
    allAppUsers();
    //Search user
    $("#search-user").click(function () {
        $val = $("#search-user-input").val();
        if ($val == "") {
            alertify.alert("Alert", "You need to enter an email address or phone number.");
        } else {
            $.post("../php/index.php",
                    {
                        req_users: "req_users",
                        reqIdDisplay: "req_search",
                        search_val: $val
                    },
                    function (data, status) {
                        $("#search-results").html(data);
                    }
            );
        }
    });
});
$(function(){
    //Check Messages List
    function loadPeople(){
        $.post("../php/messages.php",
        {
            reqId: "loadPeople"
        },
        function(data, status){
            $("#showPeople").html(data);
        });
    }
    loadPeople();
});
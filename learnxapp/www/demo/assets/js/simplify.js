$(function(){
    //Sign In
    $("#signIn").click(function(){

        var $email = $("#email").val();
        var $password = $("#password").val();
        var $remember = $("#remember").prop("checked");
        if($remember){$remember = "checked";}else{$remember = "Not";}

       console.log("Email: " + $email + "\nPassword: " + $password + "\nCheckbox: " + $remember);

        if($email == "" || $password == ""){
            missingFields();
        }else{
            $(this).hide();
            $.post("php/login-and-registration.php",
            {
                a1: 1,
                email: $email,
                password: $password,
                remember: $remember
            },function(data, status){
                console.log("Data: "+data+"\nstatus: "+status);
                ajaxPost(data, "account/index.php");
                $("#signIn").show();
            });
        }

    });
    //Sign Up
    $("#signUp").click(function(){

        var $email = $('#email').val();
        var $password = $('#password').val();
        var $passwordConfirmation = $('#passwordConfirmation').val();

        if($email == "" || $password == "" || $passwordConfirmation == ""){
            missingFields();
            return;
        }else if($password != $passwordConfirmation){
            matchPassword();
            return;
        }else{
            $.post("php/login-and-registration.php",
            {
                a2: 1,
                email: $email,
                password: $password
            },function(data, status){
                console.log("Data: "+data+"\nstatus: "+status);
                ajaxPost(data, "account/index.php");
                $(this).show();
            });
        }

    });
    //Reusable Functions
    function missingFields(){
        alertify.alert('Alert', "Please fill in all the fields.");
    }
    function ajaxPost(data, $link){
        if(data == "success"){
            alertify.alert('Alert', "Success please wait...");
            setTimeout(function () {
                window.location.href = $link;
            }, 2500);
        }else{
            alertify.alert('Alert', "Unsuccessful request please retry.");
        }
    }
    function matchPassword(){
        alertify.alert('Alert', "Password you have entered does not match with the confirmed password.");
    }
});

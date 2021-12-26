//Redirect on step1
function currentRegStep() {
    //Get Step
    $step = localStorage.getItem("step");
    if ($step == "Step 1") {
        window.location.href = "unlock-code.html";
    } else {

    }
}
currentRegStep();
//Load Profile Info
function profileInfo() {
    //Get Data
    $name = localStorage.getItem("name");
    $surname = localStorage.getItem("surname");
    $email = localStorage.getItem("email");
    $school = localStorage.getItem("school");
    //Past to input
    $("#profile-name").val($name);
    $("#profile-surname").val($surname);
    $("#profile-school").val($school);
    $("#profile-email").val($email);
}
profileInfo()
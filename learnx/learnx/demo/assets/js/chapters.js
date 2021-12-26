$(function(){
    $("#maths12C1").click(function(){
        calculatePage('Mathematics', 'Algebra', 'Solver for <i>X</i>', 12);
    });
    $("#maths12C2").click(function(){
        calculatePage('Mathematics', 'Sequences and Series', 'Arithmatic Series', 12);
    });

    function calculatePage($subject, $chapter, $subtitle, $grade){
        if($subject == "" || $chapter == "" || $grade == ""){
                alertify.alert('Alert', "Something went wrong reload the page.").bringToFront();
        }else{

            localStorage.setItem("subject", $subject);
            localStorage.setItem("chapter", $chapter);
            localStorage.setItem("subtitle", $subtitle);
            localStorage.setItem("grade", $grade);

            if($grade == 12 && $subject == "Mathematics" ){
                window.location.assign("problem.php");
            }
        }
    }
});
$(function () {
    //Calculate
    $(".calculateButton").click(function () {
        switch (localStorage.getItem("mainSubject")) {
            /** Algebra **/
            case "PhysicalSciences":
                demoGrade10TransversePulseTopic();
                break;
            case "Mathematics":
                demoAlgebraLinear();
                break;
            default:
                console.log("No Subject");
        }

    });
    /** Demo Linear Algebra**/
    /**Main Linear Function**/
    function demoAlgebraLinear() {
        var $equation = $("#textbox").html().toString();
        $equation = $equation.replace(/<br>/, "");
        var $isEquation = isAnEquation($equation, "linear equation");
        if ($isEquation == undefined || $isEquation == null || $isEquation == "") {
            return;
        }
        algebraLinearDemo($equation, $isEquation);
    }
    /**Linear Function**/
    function algebraLinearDemo($equation, $isEquation) {
        var $expression1 = buildEquationOne($equation, $isEquation);
        var $expression2 = buildEquationTwo($equation, $isEquation);
        $expression1 = new algebra.Expression($expression1);
        $expression2 = new algebra.Expression($expression2);
        var $equationMain = new algebra.Equation($expression1, $expression2);
        var $equationSimplified = algebra.parse($expression1 + " =  " + $expression2);
        var $answer = $equationSimplified.solveFor("x");
        var $equationMainString = $equationMain.toString();
        $equationMainString = $equationMainString.replace(/ /g, "");
        var $equationSimplifiedString = $equationSimplified.toString();
        $equationSimplifiedString = $equationSimplifiedString.replace(/ /g, "");
        if ($equationMainString == $equationSimplifiedString) {
            $equationMain = katex.renderToString(algebra.toTex($equationMain));
            $equationSimplifiedExample = katex.renderToString("2x + x = 4 - 1");
            $answer = katex.renderToString(algebra.toTex($answer));
            var $displayAnswer = "" +
                    '<section><div class="alert alert-success text-center">Step 1</div><br>' +
                    '   <b>Your equation:</b><br>' +
                    '   <span class="katex">' + $equationMain + '</span>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Step 2</div><br>' +
                    '   <p class="text-center">Register for a new account today and pay R100 to unlock all features.</p>' +
                    '   <p class="text-center">This is a demo showcase.</p>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Step 3</div><br>' +
                    '   <b>Omitted step</b><br>' +
                    '   <p class="text-center">Group like terms together and simplify each side. Example:</p>' +
                    '   <span class="katex">' + $equationSimplifiedExample + '</span>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Step 4</div><br>' +
                    '   <p class="text-center">Register for a new account today and pay R100 to unlock all features.</p>' +
                    '   <p class="text-center">This is a demo showcase.</p>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Final Step (5)</div><br>' +
                    '   <p class="text-center">Now solve for <i>x</i></p>' +
                    '   <span class="katex">x = ' + $answer + '</span>' +
                    '</section>';
            localStorage.removeItem("answer");
            localStorage.setItem("answer", $displayAnswer);
            window.location.assign("solver-slide.html");
            //console.log($equationMain.toString()+"\n x = "+$answer.toString()+"\n");
        } else {
            $equationMain = katex.renderToString(algebra.toTex($equationMain));
            $equationSimplified = katex.renderToString(algebra.toTex($equationSimplified));
            $answer = katex.renderToString(algebra.toTex($answer));
            var $displayAnswer = "" +
                    '<section><div class="alert alert-success text-center">Step 1</div><br>' +
                    '   <b>Your equation:</b><br>' +
                    '   <span class="katex">' + $equationMain + '</span>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Step 2</div><br>' +
                    '   <p class="text-center">Register for a new account today and pay R100 to unlock all features.</p>' +
                    '   <p class="text-center">This is a demo showcase.</p>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Step 3</div><br>' +
                    '   <p class="text-center">Group like terms together and simplify each side.</p>' +
                    '   <span class="katex">' + $equationSimplified + '</span>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Step 4</div><br>' +
                    '   <p class="text-center">Register for a new account today and pay R100 to unlock all features.</p>' +
                    '   <p class="text-center">This is a demo showcase.</p>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Final Step (5)</div><br>' +
                    '   <p class="text-center">Now solve for <i>x</i></p>' +
                    '   <span class="katex">x = ' + $answer + '</span>' +
                    '</section>';
            localStorage.removeItem("answer");
            localStorage.setItem("answer", $displayAnswer);
            window.location.assign("solver-slide.html");
            //console.log($equationMain.toString()+"\n"+$equationSimplified.toString()+"\n x = "+$answer.toString()+"\n");
        }
    }
    /**End Linear Function**/
    /**End Demo Linear Function**/
    /** Demo Transverse Pulse**/
    function demoGrade10TransversePulseTopic(){
        switch(sessionStorage.getItem("FormulaSection")){
            case "demoGrade10TransversePulseLayoutSectionOneFindSpeed":
                demoGrade10TransversePulseLayoutSectionOneFindSpeed();
                break;
            case "demoGrade10TransversePulseFormulaSectionOneFindDistance":
                demoGrade10TransversePulseLayoutSectionOneFindDistance();
                break;
            default:
                var $modal = $('[data-remodal-id=demoGrade10TransversPulse]').remodal();
                // Opens the modal window
                $modal.open();
        }
    }
    /** demoGrade10TransversePulseLayoutSectionOneFindSpeed **/
    function demoGrade10TransversePulseLayoutSectionOneFindSpeed(){
        var $distance = $("#demoGrade10TransversePulseLayoutSectionOneFindSpeedTextboxOne").val();
        var $time = $("#demoGrade10TransversePulseLayoutSectionOneFindSpeedTextboxTwo").val();
        //Steps
        var $formula = katex.renderToString("v = \\frac{D}{t}")
        var $stepOne = katex.renderToString("v = \\frac{"+$distance+"}{"+$time+"}");
        var $stepTwoCalculateA = ($distance/$time);
        var $stepTwo = katex.renderToString("v = "+$stepTwoCalculateA);
        var $stepThree = "&therefore; " + katex.renderToString("v = "+$stepTwoCalculateA) + " m&sdot;<sup>-1</sup>";
        // Display answer
        var $display = "" +
                    '<section><div class="alert alert-success text-center">Step 1</div><br>' +
                    '   <b>Analyse the question:</b><br>' +
                    '   <p>We are given: Distance (<i>D</i>) = '+$distance+' m and Time (<i>t</i>) = '+$time+' s</p>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Step 2</div><br>' +
                    '   <p class="text-center">Register for a new account today and pay R100 to unlock all features.</p>' +
                    '   <p class="text-center">This is a demo showcase.</p>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Step 3</div><br>' +
                    '   <b>Apply relevant principles</b><br>' +
                    '   <p class="text-center">Write down formuala</p>' +
                    '   <span class="katex">' + $formula + '</span>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Step 4</div><br>' +
                    '   <p class="text-center">Register for a new account today and pay R100 to unlock all features.</p>' +
                    '   <p class="text-center">This is a demo showcase.</p>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Final Step (5)</div><br>' +
                    '   <p class="text-center">Do the calculations.</p>' +
                    '   <span class="katex">' + $stepOne + '</span><br>' +
                    '   <span class="katex">' + $stepTwo + '</span><br>' +
                    '   <span class="katex">' + $stepThree + '</span><br>' +
                    '</section>';
            localStorage.removeItem("answer");
            localStorage.setItem("answer", $display);
            window.location.assign("solver-slide.html");
    }
    /** End demoGrade10TransversePulseLayoutSectionOneFindSpeed **/
    /** demoGrade10TransversePulseLayoutSectionOneFindDistance **/
    function demoGrade10TransversePulseLayoutSectionOneFindDistance(){
        var $speed = $("#demoGrade10TransversePulseLayoutSectionOneFindDistanceTextboxOne").val();
        var $time = $("#demoGrade10TransversePulseLayoutSectionOneFindDistanceTextboxTwo").val();
        //Steps
        var $formula = katex.renderToString("v = \\frac{D}{t}")
        var $stepOne = katex.renderToString($speed+" = \\frac{D}{"+$time+"}");
        var $stepTwo = katex.renderToString($speed+" * "+$time+" = D");
        var $stepThreeCalculateA = ($speed*$time);
        var $stepThree = katex.renderToString("D = "+$stepThreeCalculateA);
        var $stepFour = "&therefore; " + katex.renderToString("D = "+$stepThreeCalculateA) + " m";
        // Display answer
        var $display = "" +
                    '<section><div class="alert alert-success text-center">Step 1</div><br>' +
                    '   <b>Analyse the question:</b><br>' +
                    '   <p>We are given: Speed (<i>v</i>) = '+$speed+' m&sdot;<sup>-1</sup> and Time (<i>t</i>) = '+$time+' s</p>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Step 2</div><br>' +
                    '   <p class="text-center">Register for a new account today and pay R100 to unlock all features.</p>' +
                    '   <p class="text-center">This is a demo showcase.</p>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Step 3</div><br>' +
                    '   <b>Apply relevant principles</b><br>' +
                    '   <p class="text-center">Write down formuala</p>' +
                    '   <span class="katex">' + $formula + '</span>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Step 4</div><br>' +
                    '   <p class="text-center">Register for a new account today and pay R100 to unlock all features.</p>' +
                    '   <p class="text-center">This is a demo showcase.</p>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Final Step (5)</div><br>' +
                    '   <p class="text-center">Do the calculations.</p>' +
                    '   <span class="katex">' + $stepOne + '</span><br>' +
                    '   <span class="katex">' + $stepTwo + '</span><br>' +
                    '   <span class="katex">' + $stepThree + '</span><br>' +
                    '   <span class="katex">' + $stepFour + '</span><br>' +
                    '</section>';
            localStorage.removeItem("answer");
            localStorage.setItem("answer", $display);
            window.location.assign("solver-slide.html");
    }
    /** End demoGrade10TransversePulseLayoutSectionOneFindDistance **/
    /** End Demo Transverse Pulse**/
    /*
     *
     *   Functions General
     *
     */
    function userInput($input) {
        var $initialInput = $input.search("=");
        //isExpression
        if ($initialInput <= 0) {
            return;
        }
        var $equation = algebra.parse($input);
        return $equation.toString();
    }
    function buildEquationOne($equation, $isEquation) {
        var $equationCenter = $isEquation;
        var $expressionBeforeCenter = $equationCenter - 1;
        var $expression = $equation.slice(0, $expressionBeforeCenter);
        return $expression;
    }
    function buildEquationTwo($equation, $isEquation) {
        var $equationCenter = $isEquation;
        var $expressionAfterCenter = $equationCenter + 1;
        var $equationEnd = $equation.length;
        var $expression = $equation.slice($expressionAfterCenter, $equationEnd);
        return $expression;
    }
    //Check input if is an equation
    function isAnEquation($equation, $equationType) {
        $isEquation = $equation.search("=");
        if ($isEquation <= 0) {
            alertify.alert("Alert", "Please make sure you entered " + $equationType);
            return;
        }
        return $isEquation;
    }
})
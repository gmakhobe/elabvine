//Jquery Execution
$(function () {
    var $subTopicName = localStorage.getItem("subTitle");
    /*
     *
     * Algebra
     *
     */
    $(".calculateButton").click(function () {
        var $subTopicName = localStorage.getItem("subTitle");
        switch ($subTopicName) {
            /** Algebra **/
            case "AlgebraLinear":
                mainAlgebraLinear();
                break;
            case "AlgebraQuadratic":
                mainAlgebraQuadratic();
                break;
            case "AlgebraSimultaneous":
                mainAlgebraSimultaneous();
                break;
                /** End Algebra **/
                /** Sequences and Series **/
            case "SequencesAndSeriesArithmeticSequenceGroupOne":
                mainSequencesAndSeriesArithmeticSequenceGroupOne();
                break;
                /** End Sequences and Series **/
        }

    });
    /**Main Linear Function**/
    function mainAlgebraLinear() {
        var $equation = $("#textbox").html().toString();
        $equation = $equation.replace(/<br>/, "");
        var $isEquation = isAnEquation($equation, "linear equation");
        if ($isEquation == undefined || $isEquation == null || $isEquation == "") {
            return;
        }
        algebraLinear($equation, $isEquation);
    }
    /**Linear Function**/
    function algebraLinear($equation, $isEquation) {
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
                    '   <b>Omitted step</b><br>' +
                    '   <p class="text-center">Group like terms together and simplify each side. Example:</p>' +
                    '   <span class="katex">' + $equationSimplifiedExample + '</span>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Final Step (3)</div><br>' +
                    '   <p class="text-center">Now solve for <i>x</i></p>' +
                    '   <span class="katex">x = ' + $answer + '</span>' +
                    '</section>';
            localStorage.removeItem("answer");
            localStorage.setItem("answer", $displayAnswer);
            window.location.assign("solver-slide.php");
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
                    '   <p class="text-center">Group like terms together and simplify each side.</p>' +
                    '   <span class="katex">' + $equationSimplified + '</span>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Final Step (3)</div><br>' +
                    '   <p class="text-center">Now solve for <i>x</i></p>' +
                    '   <span class="katex">x = ' + $answer + '</span>' +
                    '</section>';
            localStorage.removeItem("answer");
            localStorage.setItem("answer", $displayAnswer);
            window.location.assign("solver-slide.php");
            //console.log($equationMain.toString()+"\n"+$equationSimplified.toString()+"\n x = "+$answer.toString()+"\n");
        }
    }
    /**End Linear Function**/
    /**End Main Linear Function**/
    /**Main Quadratic Function**/
    function mainAlgebraQuadratic() {
        var $equation = $("#textbox").html().toString();
        $equation = $equation.replace(/<br>/, "");
        var $isEquation = isAnEquation($equation, "quadratic equation");
        if ($isEquation == undefined || $isEquation == null || $isEquation == "") {
            return;
        }
        algebraQuadratic($equation, $isEquation);
    }
    /**Quadratic Function**/
    function algebraQuadratic($equation, $isEquation) {
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
            $equationSimplifiedExample = katex.renderToString("(x + 1)(x + 1) = 0");
            $answer1 = katex.renderToString(algebra.toTex($answer[0]));
            $answer2 = katex.renderToString(algebra.toTex($answer[1]));
            var $displayAnswer = "" +
                    '<section><div class="alert alert-success text-center">Step 1</div><br>' +
                    '   <b>Your equation:</b><br>' +
                    '   <span class="katex">' + $equationMain + '</span>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Step 2</div><br>' +
                    '   <b>Omitted step</b><br>' +
                    '   <p class="text-center">Group all values one side, simplify then factorise the equation. Example:</p>' +
                    '   <span class="katex">' + $equationSimplifiedExample + '</span>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Final Step (3)</div><br>' +
                    '   <p class="text-center">Now solve for <i>x</i></p>';
            if ($answer2 == undefined) {
                $displayAnswer += '<span class="katex">x = ' + $answer1 + ' or x is undefined</span>' +
                        '</section>';
            } else {
                $displayAnswer += '<span class="katex">x = ' + $answer1 + ' or x = ' + $answer2 + '</span>' +
                        '</section>';
            }
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
                    '   <p class="text-center">Group like terms together and simplify each side.</p>' +
                    '   <span class="katex">' + $equationSimplified + '</span>' +
                    '</section>' +
                    '<section><div class="alert alert-success text-center">Final Step (3)</div><br>' +
                    '   <p class="text-center">Now solve for <i>x</i></p>' +
                    '   <span class="katex">x = ' + $answer + '</span>' +
                    '</section>';
        }
        localStorage.removeItem("answer");
        localStorage.setItem("answer", $displayAnswer);
        window.location.assign("solver-slide.php");
    }
    /**End Quadratic Function**/
    /**End Main Quadratic Function**/
    /**Main Quadratic Function**/
    function mainAlgebraSimultaneous() {
        var $equationOne = $("#textboxAlgebraSimultaneous1").html().toString();
        $equationOne = $equationOne.replace(/<br>/, "");
        var $equationTwo = $("#textboxAlgebraSimultaneous2").html().toString();
        $equationTwo = $equationTwo.replace(/<br>/, "");
        var $isEquationEquationOne = isAnEquation($equationOne, "first equation");
        var $isEquationEquationTwo = isAnEquation($equationTwo, "second equation");
        if ($isEquationEquationOne == undefined || $isEquationEquationOne == null || $isEquationEquationOne == "" || $isEquationEquationTwo == undefined || $isEquationEquationTwo == null || $isEquationEquationTwo == "") {
            return;
        }
        algebraSimultaneous($equationOne, $equationTwo, $isEquationEquationOne, $isEquationEquationTwo);
        //console.log($equationOne+" ...(1)\n"+$equationTwo+" ...(2)");
    }
    /** Simultaneous Functions **/
    // Algebra Simalteneius
    function algebraSimultaneous() {
        //Step 1 Equation 1
        var $stepOneEquationOneExpressionLeft = buildEquationOne(arguments[0], arguments[2]).replace(/ /g, "");
        var $stepOneEquationOneExpressionRight = buildEquationTwo(arguments[0], arguments[2]).replace(/ /g, "");
        var $stepOneFullEquationOne = $stepOneEquationOneExpressionLeft + " = " + $stepOneEquationOneExpressionRight;
        var $hasX = equationHasX($stepOneFullEquationOne);
        //Step 1 Equation 2
        var $stepOneEquationTwoExpressionLeft = buildEquationOne(arguments[1], arguments[3]).replace(/ /g, "");
        var $stepOneEquationTwoExpressionRight = buildEquationTwo(arguments[1], arguments[3]).replace(/ /g, "");
        var $stepOnefullEquationTwo = $stepOneEquationTwoExpressionLeft + " = " + $stepOneEquationTwoExpressionRight;
        var $hasY = equationHasY($stepOnefullEquationTwo);
        //console.log($stepOneEquationOneExpressionRight.toString());
        //Find x and y
        if ($hasX == 1 && $hasY == 1) {
            //Step 1 Equation 1 Form algebra Expression
            $stepOneEquationOneExpressionLeft = new algebra.Expression($stepOneEquationOneExpressionLeft);
            $stepOneEquationOneExpressionRight = new algebra.Expression($stepOneEquationOneExpressionRight);
            //Step 1 Equation 2 Form algebra Expression
            $stepOneEquationTwoExpressionLeft = new algebra.Expression($stepOneEquationTwoExpressionLeft);
            $stepOneEquationTwoExpressionRight = new algebra.Expression($stepOneEquationTwoExpressionRight);
            //Step 1 Equation 1, Equation 2 Form algebra Equation 
            var $stepOneEquationOne = new algebra.Equation($stepOneEquationOneExpressionLeft, $stepOneEquationOneExpressionRight);
            var $stepOneEquationTwo = new algebra.Equation($stepOneEquationTwoExpressionLeft, $stepOneEquationTwoExpressionRight);
            //Step 2 Equation 1, Equation 2 algebra Simplify
            var $stepTwoEquationOne = algebra.parse($stepOneEquationOneExpressionLeft + " =  " + $stepOneEquationOneExpressionRight);
            var $stepTwoEquationTwo = algebra.parse($stepOneEquationTwoExpressionLeft + " =  " + $stepOneEquationTwoExpressionRight);
            //make X subject of the formula
            var $stepThreeSolveForX = $stepTwoEquationOne.solveFor("x");
            //can not find x so will start with y
            var $stepThreeSolveForY = $stepTwoEquationOne.solveFor("y");

            if ($stepThreeSolveForX == undefined || $stepThreeSolveForX == null) {

                //Equation 3 = Equation 2 with elav{y: stepYhreeSolveForY}
                //Not Simplified
                var $stepThreeAOne = $stepTwoEquationTwo.toString().replace(/y/g, $stepThreeSolveForY.toString());
                //Simplified
                var $stepThreeATwo = $stepTwoEquationTwo.eval({y: $stepThreeSolveForY});
                //C) Simplify if needed
                var $stepThreeAOneSimplified = stepThreeAOne.toString().replace(/ /g, "");
                var $stepThreeATwoSimplified = $stepThreeATwo.toString().replace(/ /g, "");
                var $stepTwoDisplayTwoIsSimplidied = katex.renderToString($stepThreeAOne) + "<br>" + katex.renderToString(algebra.toTex($stepThreeATwo)) + " * simplify *";
                var $stepThreeD = $stepThreeATwo.solveFor("x");
                var $stepThreeEOne = $stepTwoEquationOne.eval({x, $stepThreeD});
                //Non Simplified and Simplified
                var $stepThreeEOneNotSimplified = $stepTwoEquationOne.toString().replace(/y/g, "(" + $stepThreeD + ")") + "<br>" + katex.renderToString(algebra.toTex($stepThreeEOne)) + " * simplify *";
                var $stepThreeESolveForX = $stepThreeEOne.solveFor("y");
                //See if quadratic
                var $stepThreeETwo = isQuadraticsAnswer($stepThreeESolveForX);
                //+ is quadratic and - is not
                if ($stepThreeETwo >= 0) {
                    //See if undefined
                    if ($stepThreeESolveForX[0] == undefined || $stepThreeESolveForX[0] == null) {
                        $finalAnswer = "y = " + katex.renderToString(algebra.toTex($stepThreeESolveForX[0])) + " or y = undefined";
                    } else if ($stepThreeESolveForX[1] == undefined || $stepThreeESolveForX[1] == null) {
                        $finalAnswer = "y = undefined or x = " + katex.renderToString(algebra.toTex($stepThreeESolveForX[1]));
                    } else {
                        $finalAnswer = "y = " + katex.renderToString(algebra.toTex($stepThreeESolveForX[0])) + " or y = " + katex.renderToString(algebra.toTex($stepThreeESolveForX[1]));
                    }
                } else if ($stepThreeETwo < 0) {
                    var $finalAnswer = katex.renderToString(algebra.toTex($stepThreeESolveForX));
                }
                //For Display
                $stepTwoDisplayOne = "<i>y</i> = " + katex.renderToString(algebra.toTex($stepThreeSolveForY));
                $stepTwoDisplayTwo = katex.renderToString(algebra.toTex($stepOneEquationTwo));
                $stepTwoDisplayThree = $stepTwoDisplayTwoIsSimplidied;
                $stepTwoDisplayFour = "<i>x</i> = " + katex.renderToString(algebra.toTex($stepThreeD)) + " * Solve for <i>x</i> *";
                $stepTwoDisplayFive = "<i>x</i> = " + katex.renderToString(algebra.toTex($stepThreeD));
                $stepTwoDisplaySix = katex.renderToString(algebra.toTex($stepOneEquationOne));
                $stepTwoDisplaySeven = $stepThreeEOneNotSimplified;
                $stepTwoDisplayEight = "<i>y</i> = " + $finalAnswer + " * Solve for <i>y</i> *";

            } else if ($stepThreeSolveForX != undefined || $stepThreeSolveForX != null) {
                //x found
                stepThreeSolveForX = $stepThreeSolveForX;
                //Equation 3 = Equation 2 with elav{y: stepYhreeSolveForX}
                //Not Simplified
                var $stepThreeAOne = $stepTwoEquationTwo.toString().replace(/x/g, "(" + stepThreeSolveForX.toString() + ")");
                //Simplified
                var $stepThreeATwo = $stepTwoEquationTwo.eval({x: stepThreeSolveForX});
                //C) Simplify if needed
                var $stepThreeAOneSimplified = $stepThreeAOne.toString().replace(/ /g, "");
                var $stepThreeATwoSimplified = $stepThreeATwo.toString().replace(/ /g, "");
                var $stepTwoDisplayTwoIsSimplidied = katex.renderToString($stepThreeAOne) + "<br>" + katex.renderToString(algebra.toTex($stepThreeATwo)) + " * simplify *";
                var $stepThreeD = $stepThreeATwo.solveFor("y");
                var $stepThreeEOne = $stepTwoEquationOne.eval({y: $stepThreeD});
                //Non Simplified and Simplified
                var $stepThreeEOneNotSimplified = $stepTwoEquationOne.toString().replace(/y/g, "(" + $stepThreeD + ")") + "<br>" + katex.renderToString(algebra.toTex($stepThreeEOne)) + " * simplify *";
                var $stepThreeESolveForX = $stepThreeEOne.solveFor("x");
                //See if quadratic
                var $stepThreeETwo = isQuadraticsAnswer($stepThreeESolveForX);
                //+ is quadratic and - is not
                if ($stepThreeETwo >= 0) {
                    //See if undefined
                    if ($stepThreeESolveForX[0] == undefined || $stepThreeESolveForX[0] == null) {
                        $finalAnswer = "x = " + katex.renderToString(algebra.toTex($stepThreeESolveForX[0])) + " or x = undefined";
                    } else if ($stepThreeESolveForX[1] == undefined || $stepThreeESolveForX[1] == null) {
                        $finalAnswer = "x = undefined or x = " + katex.renderToString(algebra.toTex($stepThreeESolveForX[1]));
                    } else {
                        $finalAnswer = "x = " + katex.renderToString(algebra.toTex($stepThreeESolveForX[0])) + " or x = " + katex.renderToString(algebra.toTex($stepThreeESolveForX[1]));
                    }
                } else if ($stepThreeETwo < 0) {
                    var $finalAnswer = katex.renderToString(algebra.toTex($stepThreeESolveForX));
                }
                //For Display
                $stepTwoDisplayOne = "<i>x</i> = " + katex.renderToString(algebra.toTex(stepThreeSolveForX));
                $stepTwoDisplayTwo = katex.renderToString(algebra.toTex($stepOneEquationTwo));
                $stepTwoDisplayThree = $stepTwoDisplayTwoIsSimplidied;
                $stepTwoDisplayFour = "<i>y</i> = " + katex.renderToString(algebra.toTex($stepThreeD)) + " * Solve for <i>y</i> *";
                $stepTwoDisplayFive = "<i>y</i> = " + katex.renderToString(algebra.toTex($stepThreeD));
                $stepTwoDisplaySix = katex.renderToString(algebra.toTex($stepOneEquationOne));
                $stepTwoDisplaySeven = $stepThreeEOneNotSimplified;
                $stepTwoDisplayEight = "<i>x</i> = " + $finalAnswer + " * Solve for <i>x</i> *";

            } else {
                alertify.alert("Alert", "Rearange Equation 1 and Equation 2");
                return;
            }
            sendAlgebraSimultaneousToSolve($stepOneEquationOne, $stepOneEquationTwo, $stepTwoDisplayOne, $stepTwoDisplayTwo, $stepTwoDisplayThree, $stepTwoDisplayFour, $stepTwoDisplayFive, $stepTwoDisplaySix, $stepTwoDisplaySeven, $stepTwoDisplayEight);
        } else {
            //Has no X and or Y
            alertify.alert("Alert", "Equation 1 solves for <i>x</i> and Equation 2 solves for <i>y</i>");
            return;
        }
    }
    function sendAlgebraSimultaneousToSolve() {
        var $stepOneEquationOne = katex.renderToString(algebra.toTex(arguments[0]));
        var $stepOneEquationTwo = katex.renderToString(algebra.toTex(arguments[1]));

        var $displayAnswer = "" +
                '<section><div class="alert alert-success text-center">Solve for <i>x</i> and <i>y</i> by substitution method.</i><br> Step 1:</div>' +
                '   <b>Number the equations:</b><br>' +
                '   <span class="katex">' + $stepOneEquationOne + '</span> ...(1)<br>' +
                '   <span class="katex">' + $stepOneEquationTwo + '</span> ...(2)' +
                '</section>' +
                '<section><div class="alert alert-success text-center">Step 2:</div><br>' +
                '   <p class="text-center">Substitute <span class="katex"> ' + arguments[2].toString() + '</span> ...(1) into equation(2)</p>' +
                '   <span class="katex">' + arguments[3].toString() + '</span> ...(2)<br>' +
                '   <span class="katex">' + arguments[4].toString() + '</span><br>' +
                '   <span class="katex">' + arguments[5].toString() + '</span>' +
                '</section>' +
                '<section><div class="alert alert-success text-center">Final Step (3)</div><br>' +
                '   <p class="text-center">Substitute <span class="katex"> ' + arguments[6].toString() + '</span> ... into equation(1)</p>' +
                '   <span class="katex">' + arguments[7].toString() + '</span> ...(1)<br>' +
                '   <span class="katex">' + arguments[8].toString() + '</span><br>' +
                '   <span class="katex">' + arguments[9].toString() + '</span>' +
                '</section>';

        localStorage.removeItem("answer");
        localStorage.setItem("answer", $displayAnswer);
        window.location.assign("solver-slide.php");

    }
    /**End Main Quadratic Function**/
    /*
     *
     * End Algebra
     *
     */
    /*
     *
     * Sequences and Series
     *
     */
    /** Sequences And Series Arithmetic Sequence Group One Function**/
    function mainSequencesAndSeriesArithmeticSequenceGroupOne() {
        $isArithmaticSequence = isArithmaticSequence();
        if($isArithmaticSequence == 0){
            return;
        }else if($isArithmaticSequence == 1){
            alertify.alert("Alert", "Excellent");
        }else if($isArithmaticSequence == 2){
            alertify.alert("Alert", "Brief sequence you have enter is not Arithmatic it might be Geomatric or Quadratic.");
        }
    }
    //See if is Arithmatic
    function isArithmaticSequence() {
        var $textboxOne = $("#sequencesAndSeriesArithmeticSequenceGroupOneTextboxOne").val();
        var $textboxTwo = $("#sequencesAndSeriesArithmeticSequenceGroupOneTextboxTwo").val();
        var $textboxThree = $("#sequencesAndSeriesArithmeticSequenceGroupOneTextboxThree").val();


        if ($textboxOne == "" || $textboxOne == undefined || $textboxOne == null || $textboxTwo == "" || $textboxTwo == undefined || $textboxTwo == null || $textboxThree == "" || $textboxThree == undefined || $textboxThree == null) {
            alertify.alert("Alert", "Enter atleast 3 values of Arithmatic Sequences");
            return 0;
        }else{
            var $diiValueOne = $textboxTwo - $textboxOne;
            var $diiValueTwo = $textboxThree - $textboxTwo;
            if($diiValueTwo == $diiValueOne){
                return 1;
            }else{
                return 2;
            } 
            
        }
    }
    /*
     *
     * End Sequences and Series
     *
     */

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
    //Has X
    function equationHasX() {
        $equation = arguments[0];
        $value = $equation.search("x");
        if ($value >= 0) {
            return 1;
        } else {
            return -1;
        }
    }
    //Has Y
    function equationHasY() {
        $equation = arguments[0];
        $value = $equation.search("y");
        if ($value >= 0) {
            return 1;
        } else {
            return -1;
        }
    }
    //Answer is quadratic
    function isQuadraticsAnswer($answer) {
        var $var = $answer.toString().search(",");
        return $var;
    }
    /*
     *
     *   End Functions General
     *
     */
});
//End Jquery Execution
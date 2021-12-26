//Jquery Execution
$(document).ready(function () {
    /** Show Chapter Name and Subtitle **/
    var $chapter = localStorage.getItem("chapter");
    $("#chapter").text($chapter);
    $("#subtitle").html(localStorage.getItem("subtitle"));
    /** End Show Chapter Name and Subtitle **/
    /** Render To Katex For Subtopic Selection **/
    var $keyBrackets = katex.renderToString("(x)");
    var $keySquareRoot = katex.renderToString("\\sqrt{x}");
    var $keyPower = katex.renderToString("x^{x}");
    var $keyFraction = katex.renderToString("{x \\over x}");
    /** End Render To Katex For Subtopic Selection **/
    /** Show Maths Keys **/
    $("#kayboardkeys").append('<td class="btn btn-link katex" id="keyBrackets">' + $keyBrackets + '</td> | ')
            .append('<td class="btn btn-link katex" id="keySquareRoot">' + $keySquareRoot + '</td> | ')
            .append('<td class="btn btn-link katex" id="keyPower">' + $keyPower + '</td> | ')
            .append('<td class="btn btn-link katex" id="keyFraction">' + $keyFraction + '</td>');
    /** End Show Maths Keys **/
    /** OnChosen Chapter **/
    switch ($chapter) {
        case 'Algebra':
            $("#subTopicsModal").append('<li class="list-group-item" id="algebraLinear">Linear Eq</li>')
                    .append('<li class="list-group-item" id="algebraQuadratic">Quadratic Eq</li>')
                    .append('<li class="list-group-item" id="algebraSimultaneous">Simultaneous Eq</li>');
            //Show current topic    
            $("#subTopicTitle").text("Linear Eq");
            //Show snippet
            $("#algebraGeneralEquations").show();
            //Subtitle
            localStorage.setItem("subTitle", 'AlgebraLinear');
            break;
        case 'Sequences and Series':
            $("#subTopicsModal").append('<li class="list-group-item" id="sequencesAndSeriesArithmaticSequence">Arithmatic Sequence</li>')
                    .append('<li class="list-group-item" id="sequencesAndSeriesArithmaticSeries">Arithmatic Series</li>')
                    .append('<li class="list-group-item" id="sequencesAndSeriesGeometricSequence">Geometric Sequence</li>')
                    .append('<li class="list-group-item" id="sequencesAndSeriesGeometricSeries">Geometric Series</li>')
                    .append('<li class="list-group-item" id="sequencesAndSeriesQuadraticSequence">Quadratic Sequence</li>');
            //Show current topic
            $("#subTopicTitle").text("Arithmatic Sequence");
            //Show snippet
            $("#sequencesAndSeriesArithmeticSequence").show();
            //Display
            SequencesAndSeriesArithmeticSequenceGroupOne();
            //Subtitle
            localStorage.setItem("subTitle", 'SequencesAndSeriesArithmeticSequenceGroupOne');
            break;
        default:
    }

    /** End OnChosen Chapter **/
    /** Widgets onKeyUp **/
    //Maths Keys
    $("#textboxKeys").keyup(function () {
        var $expression = $(this).text();
        $expression = $expression.replace("<br>", "");
        $expression = checkInputType($expression);
        var $algebraExpression = katex.renderToString(algebra.toTex($expression));
        $("#katexKeysMirror").html($algebraExpression);
    });
    //Problem Textbox
    $("#textbox").keyup(function () {
        var $equation = $(this).text();
        $equation = $equation.replace("<br>", "");
        $equation = checkInputType($equation);
        var $algebraEquationDisplay = katex.renderToString(algebra.toTex($equation));
        $("#katexKeysMirror2").html($algebraEquationDisplay);

    });
    //Problem Simultaneous
    $("#textboxAlgebraSimultaneous1").keyup(function () {
        var $equation = $(this).text();
        $equation = $equation.replace("<br>", "");
        $equation = checkInputType($equation);
        var $algebraEquationDisplay = katex.renderToString(algebra.toTex($equation));
        $("#katexKeysMirrorAlgebraSimultaneous1").html($algebraEquationDisplay);
    });
    /** Problem Sequences And Series Arithmetic Sequence Group One **/
    $("#sequencesAndSeriesArithmeticSequenceGroupOneTextboxOne").keyup(function () {
        SequencesAndSeriesArithmeticSequenceGroupOne();
    });
    $("#sequencesAndSeriesArithmeticSequenceGroupOneTextboxTwo").keyup(function () {
        SequencesAndSeriesArithmeticSequenceGroupOne();
    });
    $("#sequencesAndSeriesArithmeticSequenceGroupOneTextboxThree").keyup(function () {
        SequencesAndSeriesArithmeticSequenceGroupOne();
    });
    /** End Problem Sequences And Series Arithmetic Sequence Group One **/
    /** End Widgets onKeyUp **/
    /** Widgets onClick **/
    //Toggle keyboard
    $("#callFullKeyboard").click(function () {
        $("#fullKeyboard").toggle();
    });
    //Maths Keys Fraction
    $("#keyFraction").click(function () {
        var $id = localStorage.getItem("keyboardID");
        var $expression = "(?/?)";
        var $fullexpression = $("#" + $id).text();
        if ($fullexpression == "Enter a problem...") {
            $fullexpression = $expression;
        } else {
            $fullexpression = $fullexpression + $expression;
        }
        $("#" + $id).html($fullexpression);
    });
    //Maths Keys Power
    $("#keyPower").click(function () {
        var $id = localStorage.getItem("keyboardID");
        var $expression = "(?)^2";
        var $fullexpression = $("#" + $id).text();
        if ($fullexpression == "Enter a problem...") {
            $fullexpression = $expression;
        } else {
            $fullexpression = $fullexpression + $expression;
        }
        $("#" + $id).html($fullexpression);
    });
    //Maths Keys Squareroot
    $("#keySquareRoot").click(function () {

        var $id = localStorage.getItem("keyboardID");
        var $expression = "(?)^(1/2)";
        var $fullexpression = $("#" + $id).text();
        if ($fullexpression == "Enter a problem...") {
            $fullexpression = $expression;
        } else {
            $fullexpression = $fullexpression + $expression;
        }
        $("#" + $id).html($fullexpression);

    });

    //Maths Keys Brackets
    $("#keyBrackets").click(function () {
        var $id = localStorage.getItem("keyboardID");
        var $expression = "(?)";
        var $fullexpression = $("#" + $id).text();
        if ($fullexpression == "Enter a problem...") {
            $fullexpression = $expression;
        } else {
            $fullexpression = $fullexpression + $expression;
        }
        $("#" + $id).html($fullexpression);
    });
    /** Subtopics **/
    /** Algebra Subtopics **/
    $("#algebraLinear").click(function () {
        localStorage.removeItem("subTitle");
        localStorage.setItem("subTitle", 'AlgebraLinear');
        $("#subTopicTitle").text("Linear Eq");
        subTopicChangeSuccess();
        //Show snippet and hide
        $("#algebraGeneralEquations").show();
        $("#algebraSimultaneousProblem").hide();
    });
    $("#algebraQuadratic").click(function () {
        localStorage.removeItem("subTitle");
        localStorage.setItem("subTitle", 'AlgebraQuadratic');
        $("#subTopicTitle").text("Quadratic Eq");
        subTopicChangeSuccess();
        //Show snippet and hide
        $("#algebraGeneralEquations").show();
        $("#algebraSimultaneousProblem").hide();
    });
    $("#algebraSimultaneous").click(function () {
        localStorage.removeItem("subTitle");
        localStorage.setItem("subTitle", 'AlgebraSimultaneous');
        $("#subTopicTitle").text("Simultaneous Eq");
        subTopicChangeSuccess();
        //Show snippet and hide
        $("#algebraSimultaneousProblem").show();
        $("#algebraGeneralEquations").hide();
    });
    /** End Algebra Subtopics **/
    /** End Subtopics **/
    /** End Widgets onClick **/
    /** Functions **/
    //Check if is expression | Equation
    function checkInputType($input) {
        var $initialInput = $input.search("=");
        //isExpression
        if ($initialInput <= 0) {
            var $expression = new algebra.Expression($input);
            return $expression.toString();
        }
        var $equation = algebra.parse($input);
        return $equation.toString();
    }
    //Maths Keys Alert Error
    function keyInputError() {
        alertify.alert("Alert", "Enter expression first");
    }
    //Subtopics Alert Success
    function subTopicChangeSuccess() {
        $subTopic = $("#subTopicTitle").text();
        alertify.alert("Alert", "Topic changed to " + $subTopic);
        $("#mathematicsSubtitles").modal("hide");
    }
    //Maths Keys Prompts
    function keysCallPromps($expression, $title, $subtitle) {


        alertify.prompt("Enter " + $subtitle, 2,
                function (evt, value) {
                    getExpression(value);
                },
                function () {
                    getExpression("")
                })
                ;
        function getExpression($value) {

            var $expression = $value;

            if ($expression == null || $expression == "") {
                alertify.alert("Alert", "You have to enter an expression or a value.");
                return;
            } else if ($title == "Squareroot") {



            } else if ($title == "Power") {
                var $exponent = $expression;
                var $textbox = $("#textboxKeys").html();
                $algebraExponent = $textbox + "^" + $exponent;
                var $keyExponentMirror = katex.renderToString($textbox + "^{" + $exponent + "}");
                $("#katexKeysMirror").html($keyExponentMirror);
                var $keyPower = $algebraExponent.toString();
                $("#textboxKeys").html($keyPower);
            } else if ($title == "Fraction") {
                var $base = $expression;
                var $denominator = $("#textboxKeys").html();
                $denominator = $denominator.replace(/<br>/g, "");
                var $keyFractionMirror = katex.renderToString("{" + $denominator + " \\over " + $base + "}");
                $("#katexKeysMirror").html($keyFractionMirror);
                var $keyFraction = $denominator + "/" + $base;
                $("#textboxKeys").html($keyFraction);
            }

        }

    }
    //Show typed values
    function SequencesAndSeriesArithmeticSequenceGroupOne() {
        var $textboxOne = $("#sequencesAndSeriesArithmeticSequenceGroupOneTextboxOne").val().toString();
        var $textboxTwo = $("#sequencesAndSeriesArithmeticSequenceGroupOneTextboxTwo").val().toString();
        var $textboxThree = $("#sequencesAndSeriesArithmeticSequenceGroupOneTextboxThree").val().toString();

        if ($textboxOne == "" || $textboxOne == undefined || $textboxOne == null) {
            $textboxOne = "T<sub>1</sub>";
        }
        if ($textboxTwo == "" || $textboxTwo == undefined || $textboxTwo == null) {
            $textboxTwo = "T<sub>2</sub>";
        }
        if ($textboxThree == "" || $textboxThree == undefined || $textboxThree == null) {
            $textboxThree = "T<sub>3</sub>";
        }

        $("#sequencesAndSeriesArithmeticSequenceGroupOneDisplay").html($textboxOne + "; " + $textboxTwo + "; " + $textboxThree + "; ..");
    }
    /** End Functions **/
});
//End Jquery Execution
//Javascript
/** Widgets onkeyup **/
function algebraSimultaneousKeyup($value) {
    var $equation = $("#textboxAlgebraSimultaneous" + $value).text();
    $equation = $equation.replace("<br>", "");
    $equation = checkInputType($equation);
    var $algebraEquationDisplay = katex.renderToString(algebra.toTex($equation));
    $("#katexKeysMirrorAlgebraSimultaneous" + $value).html($algebraEquationDisplay);
}
/** End Widgets onkeyup **/
/** Functions **/
//Check if is expression | Equation
function checkInputType($input) {
    var $initialInput = $input.search("=");
    //isExpression
    if ($initialInput <= 0) {
        var $expression = new algebra.Expression($input);
        return $expression.toString();
    }
    var $equation = algebra.parse($input);
    return $equation.toString();
}
/** End Functions **/
//End Javascript
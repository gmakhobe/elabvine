/*
 
 Algebra Start
 
 */
/*
 
 Linear Start
 
 */

function algorithm_algebra_topic_linear_equation(){

    try {
        //Receive input
        var text1 = document.getElementById('algebra-topic-linear-text-1').value;
        var text2 = document.getElementById('algebra-topic-linear-text-2').value;
        //Process
        var left = algebra.parse(text1);
        var right = algebra.parse(text2);
        var Equation = new algebra.Equation(left, right);
        var Answer = Equation.solveFor("x");
        //Output        
        var display1 = katex.renderToString(text1 + " = " + text2);
        var display2 = katex.renderToString(algebra.toTex(Equation));
        var display3 = katex.renderToString("x + 2x = 1 + 2");
        var display4 = katex.renderToString("x = " + algebra.toTex(Answer));
        //Display
        var final_answer = '' +
                '<section><span class="badge">Step 1</span></section><section><b>Equation</b><br><span class="katex">'+display1+'</span></section>' +
                '<section><span class="badge">Step 2</span></section><section><b>Evaluate the equation by using BODMAS rule on each side</b><br/><span class="katex">'+display2+'</span></section>' +
                '<section><span class="badge">Step 3</span></section><section><b>Carefully group like terms.</b><br/>Values one side and variables one side<br/>e.g <span class="katex">'+display3+'</span></section>' +
                '<section><span class="badge">Step 4</span></section><section><b>Solve for x / Make x subject of the formula</b><br/>Your answer <span class="katex">'+display4+'</span></section>';
    
        sessionStorage.setItem("final_answer-cookie",final_answer);

        location.href = "workspace-slide.php";

    } catch (err) {

        document.getElementById('algebra-topic-linear-display').innerHTML = '' +
                '<p class="text-center text-danger">Enter correct linear equation format & make sure your variable <i>x</i> is in lowercase</p>';

    }

}


/*
 
 Linear End
 
 */
/*
 
 Quadratic Start
 
 */

function algorithm_algebra_topic_quadratic() {
    //Receive input
    var text1 = document.getElementById('algebra-topic-quadratic-text-1').value;
    var text2 = document.getElementById('algebra-topic-quadratic-text-2').value;
    //Check error
    try {
        //Proccess
        var left = algebra.parse(text1);
        var right = algebra.parse(text2);
        var Equation = new algebra.Equation(left, right);
        var Answer = Equation.solveFor("x");

        if (Answer[0] == Answer[1]) {
            
            //Output        
            var display1 = katex.renderToString(text1 + " = " + text2);
            var display2 = katex.renderToString(algebra.toTex(Equation));
            var display3 = katex.renderToString("\frac{x}{2} + x + 2 = 0");
            var display4 = katex.renderToString("x = " + algebra.toTex(Answer));
            //Display
            
            var final_answer = '' +
                    '<section><span class="badge">Step 1</span><br><b>Equation</b><br><span class="katex">'+display1+'</span></section>' +
                    '<section><span class="badge">Step 2</span><br><b>Here you evaluate the equation by using BODMAS rule on each sides</b><br><span class="katex">'+display2+'</span></section>' +
            '<section><span class="badge">Step 3</span><br/><b>Here you must carefully group your like terms.</b><br/>Values one side and variables on the other side<br/>e.g <span class="katex">'+display3+'</span></section>' +
                '<section><span class="badge">Step 4</span><br/><b>Now solve for x by making x subject of the formula</b><br/>Your answer should be <span class="katex">'+display4+'</span></section>';

           sessionStorage.setItem("final_answer-cookie",final_answer);

            location.href = "workspace-slide.php";
                

        } else {

            //Output        
            var display1 = katex.renderToString(text1 + " = " + text2);
            var display2 = katex.renderToString(algebra.toTex(Equation));
            var display3 = katex.renderToString("x^2 + x + 2 = 0");
            var display4 = katex.renderToString("x = " + algebra.toTex(Answer[0]) + " or x = " + algebra.toTex(Answer[1]));
            //Display
            
            var final_answer = '' +
                    '<section><span class="badge">Step 1</span><br><b>Equation</b><br><span class="katex">'+display1+'</span></section>' +
                    '<section><span class="badge">Step 2</span><br><b>Here you evaluate the equation by using BODMAS rule on each sides</b><br><span class="katex">'+display2+'</span></section>' +
            '<section><span class="badge">Step 3</span><br/><b>Here you must carefully group your like terms.</b><br/>Values one side and variables on the other side<br/>e.g <span class="katex">'+display3+'</span></section>' +
                '<section><span class="badge">Step 4</span><br/><b>Now solve for x by making x subject of the formula</b><br/>Your answer should be <span class="katex">'+display4+'</span></section>';

           sessionStorage.setItem("final_answer-cookie",final_answer);

            location.href = "workspace-slide.php";
        }

    } catch (err) {

        document.getElementById('algebra-topic-quadratic-display').innerHTML = '' +
                '<p class="text-center text-danger">Enter correct quadratic equation format & make sure your variable <i>x</i> is in lowercase</p>' +
                '</div>';

    }
}


/*
 
 Quadratic End
 
 */


function algorithm_algebra_topic_simultaneous() {
    var text1 = document.getElementById('algebra-topic-simultaneous-text-1').value;
    var text2 = document.getElementById('algebra-topic-simultaneous-text-2').value;
    var text3 = document.getElementById('algebra-topic-simultaneous-text-3').value;
    var text4 = document.getElementById('algebra-topic-simultaneous-text-4').value;

    try {
        //Process
        var first_left = algebra.parse(text1);
        var first_right = algebra.parse(text2);
        var second_left = algebra.parse(text3);
        var second_right = algebra.parse(text4);
        var Equation_One = new algebra.Equation(first_left, first_right);
        var Answer_For_Eq1 = Equation_One.solveFor("x");
        var substi1 = Answer_For_Eq1;
        var Equation_Two_As_Three_1 = new algebra.Equation(second_left, second_right);
        var Equation_Two_As_Three_2 = Equation_Two_As_Three_1.eval({x: substi1});
        var Equation_Two_As_Three_2_Answer = Equation_Two_As_Three_2.solveFor("y");
        var substi2 = Equation_Two_As_Three_2_Answer;
        var Equation_Two_Got_y = new algebra.Equation(first_left, first_right);
        var Equation_Two_Got_y_Sub = Equation_Two_Got_y.eval({y: substi2});
        var Answer_For_X_Before = Equation_Two_Got_y_Sub.solveFor("x");
        //Output
        var display1 = katex.renderToString(first_left + " = " + first_right, display1);
        var display2 = katex.renderToString(second_left + " = " + second_right, display2);
        var display3 = katex.renderToString("x = " + algebra.toTex(Answer_For_Eq1), display3);
        var display4 = katex.renderToString(algebra.toTex(Equation_Two_As_Three_2), display4);
        var display5 = katex.renderToString("y = " + algebra.toTex(Equation_Two_As_Three_2_Answer), display5);
        var display6 = katex.renderToString(algebra.toTex(Equation_Two_Got_y_Sub), display6);
        var display7 = katex.renderToString("x = " + algebra.toTex(Answer_For_X_Before), display7);

        var final_answer = '' +
                '<section><span class="badge">Step 1</span><br><b>Equations</b><br><span class="katex">'+display1+'</span> ... equation 1<br><span class="katex">'+display2+'</span> ... equation 2</section>' +
                '<section><span class="badge">Step 2</span><br><b>In equation 1 make x subject of the formula and call it equation 3</b><br><span class="katex">'+display3+'</span> ... equation 3</section>' +
                '<section><span class="badge">Step 3</span><br><b>Substitute x in equation 2 by equation 3</b><br><span class="katex">'+display4+'</span></section>' +
                '<section><span class="badge">Step 4</span><br><b>Solve for y in equation 2</b></section>' +
                '<section><span class="badge">Step 5</span><br><b>Y should be equal to</b><br><span class="katex">'+display5+'</span></section>' +
                '<section><span class="badge">Step 6</span><br><b>Substitute the value of y in equation 1</b><br><span class="katex">'+display6+'</span></section>' +
                '<section><span class="badge">Step 7</span><br><b>Solve for x in equation 1</b></section>' +
        '<section><span class="badge">Step 8</span><br><b>Y should be equal to</b><br><span class="katex">'+display7+'</span></section>';

        sessionStorage.setItem("final_answer-cookie",final_answer);

        location.href = "workspace-slide.php";

    } catch (err) {

        document.getElementById('algebra-topic-simultaneous').innerHTML = '' +
                '<p class="text-center text-danger">Values you entered are not of maths type please make sure your variable is x and is lowercase, and your expressions are of real maths.<br>If error persist contact support with Error Type<br>Error Type : ' + err.message + '</p>' +
                '</div>';

    }

}



/*
 
 Simultaneous End
 
 */

/*
 
 Algebra End
 
 */

/*

  Sequences and Series

 */
/*

  Arithmetic Sequence

 */
function algorithm_sequence_topic_arithmetic_sequence_1(){
    var num1 = parseFloat(document.getElementById('textbox-1-arithmetic-sequence-1').value),
            num2 = parseFloat(document.getElementById('textbox-2-arithmetic-sequence-1').value),
            num3 = parseFloat(document.getElementById('textbox-3-arithmetic-sequence-1').value);

    if (isNaN(num1) || isNaN(num2) || isNaN(num3)) {
        document.getElementById('display-arithmetic-sequence-1').innerHTML = '<div class="alert alert-danger">' +
                'Make sure all the text boxes are filled with values.<br>Values ranging from 0-9.' +
                '</div>';
    } else {

        var final_answer = '' +
                '<section>Arithmetic sequence: ' + num1 + '; ' + num2 + '; ' + num3 + '...' + '</section>' +
                '<section><span class="badge">Step 1</span><br>You have to determine the value of <i>a</i> which is ' + num1 + '<br>&Therefore; <i>a</i> = ' + num1 + '</section>' +
                '<section><span class="badge">Step 2</span><br><b>Then determine common difference value</b><br>T<sub>2</sub> - T<sub>1</sub> = <i>d</i><br>' + num2 + ' - ' + num1 + ' = ' + (num2 - num1) + '<br>&Therefore; <i>d</i> = ' + (num2 - num1) + '</section>' +
                '<section>General formula of an arithmetic sequence is:<br> T<sub>n</sub> = a + (n - 1) &times; d</section>' +
                '<section><span class="badge">Step 3</span><br><b>From the general formula substitute as follows</b><br>T<sub>n</sub> = ' + num1 + ' + (n - 1) &times;' + (num2 - num1) + '</section>' +
                '<section><span class="badge">Step 4</span><br><b>After substitution calculate</b><br>T<sub>n</sub> = ' + num1 + ' + (' + (num2 - num1) + 'n - ' + (num2 - num1) + ')<br>&Therefore; T<sub>n</sub> = ' + (num2 - num1) + 'n + (' + (num1 - (num2 - num1)) + ')</section>';
        
        sessionStorage.setItem("final_answer-cookie",final_answer);

        location.href = "workspace-slide.php";
    }
}

function algorithm_sequence_topic_arithmetic_sequence_2() {
    var num1 = parseFloat(document.getElementById('textbox-1-arithmetic-sequence-2').value),
            num2 = parseFloat(document.getElementById('textbox-2-arithmetic-sequence-2').value),
            num3 = parseFloat(document.getElementById('textbox-3-arithmetic-sequence-2').value);

    if (isNaN(num1) || isNaN(num2) || isNaN(num3)) {
        document.getElementById('display-arithmetic-sequence-2').innerHTML = '<div class="alert alert-danger">' +
                'Make sure all the text boxes are filled with values.<br>Values ranging from 0-9.' +
                '</div>';
    } else {
        
        var final_answer = '' +
                '<section>General the formula of an arithmetic sequence is :<br> T<sub>n</sub> = a + (n - 1) &times; d</section>' +
                '<section><span class="badge">Step 1</span><br><b>From general formula substitute as follows</b><br>T<sub>n</sub> = ' + num1 + ' + (n - 1) &times; ' + num2 + '</section>' +
                '<section><span class="badge">Step 2</span><br><b>The value of n is ' + num3 + ' substitute it also</b><br> T<sub>n</sub> = ' + num1 + ' + (' + num3 + ' - 1) &times; ' + num2 + '</section>' +
                '<section><span class="badge">Step 3</span><br><b>Now calculate</b><br>T<sub>n</sub> = ' + num1 + ' + (' + (num2 * num3) + ' - ' + (num2) + ')<br>T<sub>n</sub> = ' + num1 + ' + ' + ((num2 * num3) - num2) + '<br>&Therefore; T<sub>n</sub> = ' + (num1 + (num2 * num3) - num2) + '</section>';
        
        sessionStorage.setItem("final_answer-cookie",final_answer);

        location.href = "workspace-slide.php";
    }
}

function algorithm_sequence_topic_arithmetic_sequence_3() {
    var num1 = parseFloat(document.getElementById('textbox-1-arithmetic-sequence-3').value),
            num2 = parseFloat(document.getElementById('textbox-2-arithmetic-sequence-3').value),
            num3 = parseFloat(document.getElementById('textbox-3-arithmetic-sequence-3').value);
    if (isNaN(num1) || isNaN(num2) || isNaN(num3)) {
        document.getElementById('display-arithmetic-sequence-3').innerHTML = '<div class="alert alert-danger">' +
                'Make sure all the text boxes are filled with values.<br>Values ranging from 0-9.' +
                '</div>';
    } else {
        
        var display1 = katex.renderToString("\\frac{"+(num3 - (num1 - num2))+"}{"+ num2 +"}");
        var display2 = katex.renderToString("\\frac{"+ num2 +"n}{"+ num2 +"}");
        
        var final_answer = '' +
                '<section>General formula of an arithmetic sequence is :<br> T<sub>n</sub> = a + (n - 1) &times; d</section>' +
                '<section><span class="badge">Step 1</span><br><b>From the general formula substitute as follows</b><br>T<sub>n</sub> = ' + num1 + ' + (n - 1) &times; ' + num2 + '</section>' +
                '<section><span class="badge">Step 2</span><br><b>The value of T<sub>n</sub> is ' + num3 + ' substitute it also</b><br>' + num3 + ' = ' + num1 + ' + (n - 1) &times; ' + num2 + '</section>' +
                '<section><span class="badge">Step 3</span><br><b>Now calculate</b><br>' + num3 + ' = ' + num1 + ' + (' + num2 + 'n - ' + num2 + ')<br>' + num3 + ' = ' + (num1 - num2) + ' + ' + num2 + 'n<br>' + num3 + ' - (' + (num1 - num2) + ') = ' + num2 + 'n<br>' + (num3 - (num1 - num2)) + ' = ' + num2 + 'n<br><span class="katex">'+display1+'</span> = <span class="katex">'+display2+'</span><br>&Therefore; n = ' + ((num3 - (num1 - num2)) / num2) + '</section>';
        
        sessionStorage.setItem("final_answer-cookie",final_answer);

        location.href = "workspace-slide.php";
    }
}

/*
 
 End Arithmetic Sequence
 
*/
/*
 
 Arithmetic Series
 
*/
function algorithm_sequence_topic_arithmetic_series_1() {
    var num1 = parseFloat(document.getElementById('textbox-1-arithmetic-series-1').value),
            num2 = parseFloat(document.getElementById('textbox-2-arithmetic-series-1').value),
            num3 = parseFloat(document.getElementById('textbox-3-arithmetic-series-1').value);

    if (isNaN(num1) || isNaN(num2) || isNaN(num3)) {
        document.getElementById('display-arithmetic-series-1').innerHTML = '<div class="alert alert-danger">' +
                'Make sure all the text boxes are filled with values.<br>Values ranging from 0-9.' +
                '</div>';
    } else {
        var final_answer = '' +
                '<section>General formula of an arithmetic series is: <br>S<sub>n</sub> = <sup>n</sup> &frasl; <sub>2</sub> [2a + (a - 1) &times; d]</section>' +
                '<section><span class="badge">Step 1</span><br><b>Determine the value of <i>a</i> which is ' + num1 + '</b><br>&Therefore; <i>a</i> = ' + num1 + '</section>' +
                '<section><span class="badge">Step 2</span><br><b>Determine common difference value </b><br>T<sub>2</sub> - T<sub>1</sub> = <i>d</i><br>' + num2 + ' - ' + num1 + ' = ' + (num2 - num1) + '<br>&Therefore; <i>d</i> = ' + (num2 - num1) + '</section>' +
                '<section><span class="badge">Step 3</span><br><b>From the general formula substitute as follows</b><br>S<sub>n</sub> = <sup>' + num3 + '</sup> &frasl; <sub>' + 2 + '</sub> [ 2 (' + num1 + ') + (' + num3 + ' - 1) &times; ' + (num2 - num1) + ' ]</section>' +
                '<section><span class="badge">Step 4</span><br><b>After substitution calculate</b><br>S<sub>n</sub> = ' + (num3 / 2) + ' [ ' + (num1 * 2) + ' + (' + (num3 * (num2 - num1)) + ' - ' + (num2 - num1) + ')]<br>S<sub>n</sub> = ' + (num3 / 2) + ' [ ' + (num1 * 2) + ' + ' + ((num3 * (num2 - num1)) - (num2 - num1)) + ']<br>S<sub>n</sub> = ' + (num3 / 2) + ' [ ' + ((num1 * 2) + ((num3 * (num2 - num1)) - (num2 - num1))) + ']' + '<br>&Therefore; S<sub>n</sub> = ' + ((num3 / 2) * ((num1 * 2) + ((num3 * (num2 - num1)) - (num2 - num1)))) + '</section>';
        
        sessionStorage.setItem("final_answer-cookie",final_answer);

        location.href = "workspace-slide.php";
    }
}

function algorithm_sequence_topic_arithmetic_series_2() {
    var num1 = parseFloat(document.getElementById('textbox-1-arithmetic-series-2').value),
            num2 = parseFloat(document.getElementById('textbox-2-arithmetic-series-2').value),
            num3 = parseFloat(document.getElementById('textbox-3-arithmetic-series-2').value);

    if (isNaN(num1) || isNaN(num2) || isNaN(num3)) {
        document.getElementById('display-arithmetic-series-2').innerHTML = '<div class="alert alert-danger">' +
                'Make sure all the text boxes are filled with values.<br>Values ranging from 0-9.' +
                '</div>';
    } else {
        var final_answer = '' +
                '<section>General formula of an arithmetic series is: <br>S<sub>n</sub> = <sup>n</sup> &frasl; <sub>2</sub> (a + l)</section>' +
                '<section><span class="badge">Step 1</span><br><b>Determine the value of <i>a</i> which is ' + num1 + '</b><br>&Therefore; <i>a</i> = ' + num1 + '</section>' +
                '<section><span class="badge">Step 2</span><br><b>From the general formula substitute as follows</b><br>T<sub>n</sub> = <sup>' + num2 + '</sup> &frasl; <sub>' + 2 + '</sub> (' + num1 + ' + ' + num3 + ' )</section>' +
                '<section><span class="badge">Step 3</span><br><b>After substitution calculate</b><br>S<sub>n</sub> = ' + (num2 / 2) + ' ( ' + num1 + ' + ' + num3 + ')<br>S<sub>n</sub> = ' + (num2 / 2) + ' ( ' + (num1 + num3) + ')<br>&Therefore; S<sub>n</sub> = ' + ((num2 / 2) * (num1 + num3)) + '</section>';
        
        sessionStorage.setItem("final_answer-cookie",final_answer);

        location.href = "workspace-slide.php";
    }
}
/*
 
 End Arithmetic Series
 
*/
/*
 
 Quadratic Sequence
 
*/

function algorithm_sequence_topic_quadratic_sequence_1() {
    var num1 = parseFloat(document.getElementById('textbox-1-quadratic-sequence-1').value),
            num2 = parseFloat(document.getElementById('textbox-2-quadratic-sequence-1').value),
            num3 = parseFloat(document.getElementById('textbox-3-quadratic-sequence-1').value),
            num4 = parseFloat(document.getElementById('textbox-4-quadratic-sequence-1').value);
    if (isNaN(num1) || isNaN(num2) || isNaN(num3) || isNaN(num4)) {
        document.getElementById('display-quadratic-sequence-1').innerHTML = '<div class="alert alert-danger">' +
                'Make sure all the text boxes are filled with values.<br>Values ranging from 0-9.' +
                '</div>';
    } else {
        var final_answer = '' +
                '<section>Quadratic sequence: ' + num1 + '; ' + num2 + '; ' + num3 + '; ' + num4 + '...' + '</section>' +
                '<section><b>Determine first difference of the sequence</b><br>' + num2 + ' - ' + num1 + ' = <b>' + (num2 - num1) + '</b>; ' + num3 + ' - ' + num2 + ' = <b>' + (num3 - num2) + '</b>; ' + num4 + ' - ' + num3 + ' = <b>' + (num4 - num3) + '</b><br><b>Second common difference</b><br>' + (num3 - num2) + ' - ' + (num2 - num1) + ' = <b>' + ((num3 - num2) - (num2 - num1)) + '</b>; ' + (num4 - num3) + ' - ' + (num3 - num2) + ' = <b>' + ((num4 - num3) - (num3 - num2)) + '</b></section>' +
                '<section><span class="badge">Step 1</span><br><b>Determine second difference which is common: <br>' + ((num3 - num2) - (num2 - num1)) + '</b><br>So 2a = ' + ((num3 - num2) - (num2 - num1)) + '<br>a = <sup>' + ((num3 - num2) - (num2 - num1)) + '</sup> &frasl; <sub>' + 2 + '</sub><br>&Therefore;a = ' + (((num3 - num2) - (num2 - num1)) / 2) + '</section>' +
                '<section><span class="badge">Step 2</span><br>T<sub>2</sub> - T<sub>1</sub> = ' + (num2 - num1) + '</b><br>So 3a + b = ' + (num2 - num1) + '<br>3(' + (((num3 - num2) - (num2 - num1)) / 2) + ') + b = ' + (num2 - num1) + '<br>b = ' + (num2 - num1) + ' - ' + (3 * (((num3 - num2) - (num2 - num1)) / 2)) + '<br>&Therefore;b = ' + ((num2 - num1) - (3 * (((num3 - num2) - (num2 - num1)) / 2))) + '</section>' +
                '<section><span class="badge">Step 3</span><br><b>First term is ' + num1 + '</b><br>So a + b + c = ' + num1 + '<br>' + (((num3 - num2) - (num2 - num1)) / 2) + ' + ' + ((num2 - num1) - (3 * (((num3 - num2) - (num2 - num1)) / 2))) + ' + c = ' + num1 + '<br>c = ' + (num1) + ' - ' + (((num2 - num1) - (3 * (((num3 - num2) - (num2 - num1)) / 2))) + (((num3 - num2) - (num2 - num1)) / 2)) + '<br>&Therefore;c = ' + (num1 - (((num2 - num1) - (3 * (((num3 - num2) - (num2 - num1)) / 2))) + (((num3 - num2) - (num2 - num1)) / 2))) + '</section>' +
                '<section>Final answer is: <br>&Therefore;T<sub>n</sub> = ' + (((num3 - num2) - (num2 - num1)) / 2) + 'n<sup>2</sup> + ' + ((num2 - num1) - (3 * (((num3 - num2) - (num2 - num1)) / 2))) + 'n + ' + (num1 - (((num2 - num1) - (3 * (((num3 - num2) - (num2 - num1)) / 2))) + (((num3 - num2) - (num2 - num1)) / 2))) + '</section>';
        
        sessionStorage.setItem("final_answer-cookie",final_answer);

        location.href = "workspace-slide.php";
    }
}

function algorithm_sequence_topic_quadratic_sequence_2() {
    var num1 = parseFloat(document.getElementById('textbox-1-quadratic-sequence-2').value),
            num2 = parseFloat(document.getElementById('textbox-2-quadratic-sequence-2').value),
            num3 = parseFloat(document.getElementById('textbox-3-quadratic-sequence-2').value),
            num4 = parseFloat(document.getElementById('textbox-4-quadratic-sequence-2').value);

    if (isNaN(num1) || isNaN(num2) || isNaN(num3) || isNaN(num4)) {
        document.getElementById('display-quadratic-sequence-2').innerHTML = '<div class="alert alert-danger">' +
                'Make sure all the text boxes are filled with values.<br>Values ranging from 0-9.' +
                '</div>';
    } else {
        var final_answer = '' +
                '<section>General formula of a quadratic sequence: <br>T<sub>n</sub> = an<sup>2</sup> + bn + c</section>' +
                '<section><span class="badge">Step 1</span><br><b>From the general formula substitute as follows</b><br>T<sub>n</sub> = ' + num1 + 'n<sup>2</sup> + ' + num2 + 'n + ' + num3 + '</section>' +
                '<section><span class="badge">Step 2</span><br><b>The value of n is ' + num4 + ' substitute it also</b><br>T<sub>n</sub> = ' + num1 + '(' + num4 + ')<sup>2</sup> + ' + num2 + '(' + num4 + ') + ' + num3 + '</section>' +
                '<section><span class="badge">Step 3</span><br><b>Now calculate</b><br>T<sub>n</sub> = ' + num1 + '(' + Math.pow(num4, 2) + ') + ' + (num2 * num4) + ' + ' + num3 + '<br>T<sub>n</sub> = ' + (num1 * Math.pow(num4, 2)) + ' + ' + (num2 * num4) + ' + ' + num3 + '<br>T<sub>n</sub> = ' + ((num1 * Math.pow(num4, 2)) + (num2 * num4) + num3) + '</section>';
        
        sessionStorage.setItem("final_answer-cookie",final_answer);

        location.href = "workspace-slide.php";
    }
}

/*
 
 End Quadratic Sequence
 
*/
/*
 
 Geometric Sequence
 
*/
function algorithm_sequence_topic_geometric_sequence_1() {
    var num1 = parseFloat(document.getElementById('textbox-1-geometric-sequence-1').value),
            num2 = parseFloat(document.getElementById('textbox-2-geometric-sequence-1').value),
            num3 = parseFloat(document.getElementById('textbox-3-geometric-sequence-1').value);

    if (isNaN(num1) || isNaN(num2) || isNaN(num3)) {
        document.getElementById('display-geometric-sequence-1').innerHTML = '<div class="alert alert-danger">' +
                'Make sure all the text boxes are filled with values.<br>Values ranging from 0-9.' +
                '</div>';
    } else {

        var final_answer = '' +
                '<section>Geometric Sequence: <br>' + num1 + '; ' + num2 + '; ' + num3 + '...  </section>' +
                '<section><span class="badge">Step 1</span><br><b>First team is ' + num1 + '</b><br>&Therefore; <i>a</i> = ' + num1 + '</section>' +
                '<section><span class="badge">Step 2</span><br><b>Determine common ratio</b><br><sup>T<sub>2</sub></sup> &frasl; <sub> T<sub>1</sub></sub> = <i>r</i><br><sup>' + num2 + '</sup> &frasl; <sub>' + num1 + '</sub> = ' + (num2 / num1) + '<br>&Therefore; <i>r</i> = ' + (num2 / num1) + '</section>' +
                '<section>General formula of a geometric sequence is: <br>T<sub>n</sub> = ar<sup>n - 1</sup></p>' +
                '<section><span class="badge">Step 3</span><br><b>From the general formula substitute as follows</b><br>T<sub>n</sub> = ' + num1 + ' &times; ' + (num2 / num1) + '<sup>n - 1</sup>' + '<br>&Therefore; T<sub>n</sub> = ' + num1 + '(' + (num2 / num1) + ')<sup>n - 1' + '</section>';
        
        sessionStorage.setItem("final_answer-cookie",final_answer);

        location.href = "workspace-slide.php";
    }
}

function algorithm_sequence_topic_geometric_sequence_2() {
    var num1 = parseFloat(document.getElementById('textbox-1-geometric-sequence-2').value),
            num2 = parseFloat(document.getElementById('textbox-2-geometric-sequence-2').value),
            num3 = parseFloat(document.getElementById('textbox-3-geometric-sequence-2').value);

    if (isNaN(num1) || isNaN(num2) || isNaN(num3)) {
        document.getElementById('display-geometric-sequence-2').innerHTML = '<div class="alert alert-danger">' +
                'Make sure all the text boxes are filled with values.<br>Values ranging from 0-9.' +
                '</div>';
    } else {
        
        var final_answer = '' +
                '<section>General formula of a geometric sequence: <br>T<sub>n</sub> = ar<sup>n - 1</sup></section>' +
                '<section><span class="badge">Step 1</span><br><b>From the general formula substitute as follows</b><br>T<sub>n</sub> = ' + num1 + '(' + num2 + ')<sup>n - 1</sup>' + '</section>' +
                '<section><span class="badge">Step 2</span><br><b>The value of n is ' + num3 + ' substitute it also</b><br> T<sub>n</sub> = ' + num1 + '(' + num2 + ')<sup>' + num3 + ' - 1</sup>' + '</section>' +
                '<section><span class="badge">Step 3</span><br><b>Now calculate</b><br>T<sub>n</sub> = ' + num1 + '(' + num2 + ')<sup>' + (num3 - 1) + '</sup><br>T<sub>n</sub> = ' + num1 + '(' + Math.pow(num2, (num3 - 1)) + ')<br>&Therefore; T<sub>n</sub> = ' + (num1 * Math.pow(num2, (num3 - 1))) + '</section>';
        
        
        sessionStorage.setItem("final_answer-cookie",final_answer);

        location.href = "workspace-slide.php";
    }
}

function algorithm_sequence_topic_geometric_sequence_3() {
    var num1 = parseFloat(document.getElementById('textbox-1-geometric-sequence-3').value),
            num2 = parseFloat(document.getElementById('textbox-2-geometric-sequence-3').value),
            num3 = parseFloat(document.getElementById('textbox-3-geometric-sequence-3').value);
    if (isNaN(num1) || isNaN(num2) || isNaN(num3)) {
        document.getElementById('display-geometric-sequence-3').innerHTML = '<div class="alert alert-danger">' +
                'Make sure all the text boxes are filled with values.<br>Values ranging from 0-9.' +
                '</div>';
    } else {
        
        var display1 = katex.renderToString("\\frac{" + num3 + "}{"+ num1 +"} = \\frac{"+num1+"("+num2+")^{n - 1}}{"+num1+"}");
        var display2 = katex.renderToString(num2+"^{n - 1}");
        var display3 = katex.renderToString(num2+"^"+(Math.log(num3 / num1) / Math.log(num2)));
        var display4 = katex.renderToString(num2+"^"+(Math.log(num3 / num1) / Math.log(num2))+" = "+num2+"^{n - 1}");
        
        var final_answer = '' +
                '<section>General formula of a geometric sequence: <br>T<sub>n</sub> = ar<sup>n - 1</sup></section>' +
                '<section><span class="badge">Step 1</span><br><b>From general formula substitute as follows</b><br>T<sub>n</sub> = ' + num1 + '(' + num2 + ')<sup>n - 1</sup>' + '</section>' +
                '<section><span class="badge">Step 2</span><br><b>The value of T<sub>n</sub> is ' + num3 + ' substitute it also</b><br>' + num3 + ' = ' + num1 + '(' + num2 + ')<sup>n - 1</sup>' + '</section>' +
                '<section><span class="badge">Step 3 :</span><b><br>Now calculate</b><br><span class="katex">'+display1+'</span><br>' + (num3 / num1) + ' = <span class="katex">'+display2+'</span><br></section>'+
                '<section><b>We can write ' + (num3 / num1) + ' as <span class="katex">'+display3+'</span></b><br>So <span class="katex">'+display4+'</span></section>'+
                '<section><b>Same bases drop down the exponents</b><br>' + (Math.log(num3 / num1) / Math.log(num2)) + ' = n - 1<br>' + (Math.log(num3 / num1) / Math.log(num2)) + ' + 1 = n<br>&Therefore; n = ' + ((Math.log(num3 / num1) / Math.log(num2)) + 1) + '</section>';
        
        sessionStorage.setItem("final_answer-cookie",final_answer);

        location.href = "workspace-slide.php";
    }
}

/*
 
 End Geometric Sequence
 
*/

/*
 
 Geometric Series
 
*/
function algorithm_sequence_topic_geometric_series_1(){
    var num1 = parseFloat(document.getElementById('textbox-1-geometric-series-1').value),
            num2 = parseFloat(document.getElementById('textbox-2-geometric-series-1').value),
            num3 = parseFloat(document.getElementById('textbox-3-geometric-series-1').value);

    if (isNaN(num1) || isNaN(num2) || isNaN(num3)) {
        document.getElementById('display-geometric-series-1').innerHTML = '<div class="alert alert-danger">' +
                'Make sure all the text boxes are filled with values.<br>Values ranging from 0-9.' +
                '</div>';
    } else {
        
        var display1 = katex.renderToString("\\frac{a(r^{n} - 1)}{r - 1}");
        var display2 = katex.renderToString("\\frac{T2}{T1}");
        var display3 = katex.renderToString("\\frac{"+num2+"}{"+num1+"}");
        var display4 = katex.renderToString("\\frac{"+num1+"("+(num2/num1)+"^{"+num3+"} - 1)}{"+(num2/num1)+" - 1}");
        var display5 = katex.renderToString("\\frac{"+ num1 + '(' + (Math.pow((num2 / num1), num3) - 1) +")}{"+ ((num2 / num1) - 1)+"}");
        var display6 = katex.renderToString("\\frac{"+ (num1 * (Math.pow((num2 / num1), num3) - 1)) +"}{"+ ((num2 / num1) - 1)+"}");
        
        var final_answer = '' +
                '<section>General formula of a geometric series: <br><span class="katex">'+display1+'</span></section>' +
                '<section><span class="badge">Step 1</span><br><b>Determine the value of <i>a</i> which is ' + num1 + '</b><br>&Therefore; <i>a</i> = ' + num1 + '</section>' +
                '<section><span class="badge">Step 2</span><br><b>Determine common ratio value</b><br><span class="katex">'+display2+'</span> = <i>r</i><br><span class="katex">'+display3+'</span> = ' + (num2 / num1) + '<br>&Therefore; <i>r</i> = ' + (num2 - num1) + '</section>' +
                '<section><span class="badge">Step 3</span><br><b>From the general formula substitute</b><br>S<sub>n</sub> = <span class="katex">'+display4+'</span></section>' +
                '<section><span class="badge">Step 4</span><br><b>After substitution calculate</b><br>S<sub>n</sub> = <span class="katex">'+display5+'</span><br>S<sub>n</sub> = <span class="katex">'+display6+'</span><br>&Therefore;S<sub>n</sub> = ' + ((num1 * (Math.pow((num2 / num1), num3) - 1)) / ((num2 / num1) - 1)) + '</section>';
        
        sessionStorage.setItem("final_answer-cookie",final_answer);

        location.href = "workspace-slide.php";
    }
}
/*
 
 End Geometric Series
 
*/
/*

  End Sequences and Series

 */
/*
 
 Functions
 
 */
/*
 
 Linear Function
 
*/
function algorithm_functions_topic_linear_function_1(){

    try {

        var Expression_1 = document.getElementById('textbox-1-linear-function-1').value;

        var Expression_1_Evaluated = algebra.parse(Expression_1),
                Expression_2_Evaluated = algebra.parse("y"),
                Equation_Evaluated = new algebra.Equation(Expression_1_Evaluated, Expression_2_Evaluated),
                answer = Equation_Evaluated.solveFor("x"),
                neweq = answer,
                //x = - 3
                x2 = algebra.parse("-3"),
                eq = new algebra.Equation(neweq, x2),
                exe_neg_3 = eq.solveFor("y"),
                //x = - 2
                x2 = algebra.parse("-2"),
                eq = new algebra.Equation(neweq, x2),
                exe_neg_2 = eq.solveFor("y"),
                //x = - 1
                x2 = algebra.parse("-1"),
                eq = new algebra.Equation(neweq, x2),
                exe_neg_1 = eq.solveFor("y"),
                //x = 0
                x2 = algebra.parse("0"),
                eq = new algebra.Equation(neweq, x2),
                exe_0 = eq.solveFor("y"),
                //x = 1
                x2 = algebra.parse("1"),
                eq = new algebra.Equation(neweq, x2),
                exe_pos_1 = eq.solveFor("y"),
                //x = 2
                x2 = algebra.parse("2"),
                eq = new algebra.Equation(neweq, x2),
                exe_pos_2 = eq.solveFor("y"),
                //x = 1
                x2 = algebra.parse("3"),
                eq = new algebra.Equation(neweq, x2),
                exe_pos_3 = eq.solveFor("y");
                
                var display1 = katex.renderToString("f(x) = "+ algebra.toTex(Expression_1_Evaluated));

        var final_answer = '' +
                '<section><span class="badge">Step 1</span><br><b>Linear Equation:</b><br><span class="katex">' + display1 + '</span></section>' +
                '<section><span class="badge">Step 2</span><br><b>Mapping of Linear Function</b></section>' +
                '<section>' +
                '<table class="table table-bordered table-responsive">' +
                '<tr><td><b>x</b></td><td>' + (-3) + '</td><td>' + (-2) + '</td><td>' + (-1) + '</td><td>' + (0) + '</td><td>' + (1) + '</td><td>' + (2) + '</td><td>' + (3) + '</td></tr>' +
                '<tr><td><b>y</b></td><td>' + (exe_neg_3) + '</td><td>' + (exe_neg_2) + '</td><td>' + (exe_neg_1) + '</td><td>' + (exe_0) + '</td><td>' + (exe_pos_1) + '</td><td>' + (exe_pos_2) + '</td><td>' + (exe_pos_3) + '</td></tr>' +
                '</table>' +
                '</section>' +
                '<section><span class="badge">Step 3</span><br><b>Linear Function Graph</b></section>'+
                '<section><canvas id="myChart" style="height: 400px; width: 100%;"></canvas></section>';
        
        sessionStorage.setItem("final_answer-cookie",final_answer);
        //X Values
        plot_xvalue_1 = -3;
        plot_xvalue_2 = -2;
        plot_xvalue_3 = -1;
        plot_xvalue_4 = 0;
        plot_xvalue_5 = 1;
        plot_xvalue_6 = 2;
        plot_xvalue_7 = 3;
        //Web storage
        sessionStorage.setItem("linear_function_xvalue_1",plot_xvalue_1);
        sessionStorage.setItem("linear_function_xvalue_2",plot_xvalue_2);
        sessionStorage.setItem("linear_function_xvalue_3",plot_xvalue_3);
        sessionStorage.setItem("linear_function_xvalue_4",plot_xvalue_4);
        sessionStorage.setItem("linear_function_xvalue_5",plot_xvalue_5);
        sessionStorage.setItem("linear_function_xvalue_6",plot_xvalue_6);
        sessionStorage.setItem("linear_function_xvalue_7",plot_xvalue_7);
        //Y Values
        plot_yvalue_1 = exe_neg_3;
        plot_yvalue_2 = exe_neg_2;
        plot_yvalue_3 = exe_neg_1;
        plot_yvalue_4 = exe_0;
        plot_yvalue_5 = exe_pos_1;
        plot_yvalue_6 = exe_pos_2;
        plot_yvalue_7 = exe_pos_3;
        //Web storage
        sessionStorage.setItem("linear_function_yvalue_1",plot_yvalue_1);
        sessionStorage.setItem("linear_function_yvalue_2",plot_yvalue_2);
        sessionStorage.setItem("linear_function_yvalue_3",plot_yvalue_3);
        sessionStorage.setItem("linear_function_yvalue_4",plot_yvalue_4);
        sessionStorage.setItem("linear_function_yvalue_5",plot_yvalue_5);
        sessionStorage.setItem("linear_function_yvalue_6",plot_yvalue_6);
        sessionStorage.setItem("linear_function_yvalue_7",plot_yvalue_7);
        
        location.href = "workspace-slide.php";

    } catch (err) {

        document.getElementById('display-linear-function-1').innerHTML = '<div class="alert alert-danger">' +
                '<p class="text-center text-danger">Expression you entered is not of linear equation, to fix this please make sure your variable is x and is in lowercase.<br>If the error persist contact support with capture error: ' + err.message + '</p>' +
                '</div>';

    }

}

function algorithm_functions_topic_linear_function_2() {

    try {

        var x_intercept = document.getElementById('textbox-1-linear-function-2').value,
                y_intercept = document.getElementById('textbox-2-linear-function-2').value,
                x_value = document.getElementById('textbox-3-linear-function-2').value,
                y_value = document.getElementById('textbox-4-linear-function-2').value;
                
        if ((y_intercept - (x_intercept * ((y_value - y_intercept) / (x_value - x_intercept)))) < 0) {
            
            var display1 = katex.renderToString("a = \\frac{y^{2} - y^{1}}{x^{2} - x^{1}}");
            var display2 = katex.renderToString("a = \\frac{"+y_value + " - " + y_intercept+"}{"+ x_value + " - " + x_intercept +"}");
            var display3 = katex.renderToString("a = "+((y_value - y_intercept) / (x_value - x_intercept)));
            var display4 = katex.renderToString("f(x) = mx + c");
            var display5 = katex.renderToString(y_intercept +" = "+((y_value - y_intercept) / (x_value - x_intercept))+"("+x_intercept+") + c");
            var display6 = katex.renderToString(y_intercept +" = "+ (x_intercept * ((y_value - y_intercept) / (x_value - x_intercept))) + " + c");
            var display7 = katex.renderToString(y_intercept + ' - ' + (x_intercept * ((y_value - y_intercept) / (x_value - x_intercept))) +" = c");
            var display8 = katex.renderToString("c = " + (y_intercept - (x_intercept * ((y_value - y_intercept) / (x_value - x_intercept)))));
            var display9 = katex.renderToString("f(x) = " + ((y_value - y_intercept) / (x_value - x_intercept)) + 'x - ' + (-(y_intercept - (x_intercept * ((y_value - y_intercept) / (x_value - x_intercept))))));
            
           var final_answer = '' +
                    '<section><span class="badge">Graph illustration</span></section>' +
                    '<section><canvas id="myChart" style="height: 400px; width: 100%;"></canvas></section>' +
                    '<section><span class="badge">Step 1</span><br><b>Determining the value of gradient</b><br><span class="katex">'+display1+'</span><br><span class="katex">'+display2+'</span><br>&Therefore; <span class="katex">'+display3+'</span></section>' +
                    '<section>General formula of linear function: <br><span class="katex">'+display4+'</span></section>' +
                    '<section><span class="badge">Step 2</span><br><b>From the general formula substitute as follows</b><br><span class="katex">'+display5+'</span></section>' +
                    '<section><span class="badge">Step 3</span><br><b>Calculate</b><br><span class="katex">'+display6+'</span><br><span class="katex">'+display7+'</span><br>' + (y_intercept - (x_intercept * ((y_value - y_intercept) / (x_value - x_intercept)))) + ' = c<br>&Therefore; <span class="katex">'+display8+'</span></section>' +
                    '<section><span class="badge">Step 4</span><br><b>Substitute a and c in the general formula</b><br>&Therefore; <span class="katex">'+display9+'</span></section>';

            var Expression_1_Evaluated = algebra.parse(((y_value - y_intercept) / (x_value - x_intercept)) + 'x - ' + (-(y_intercept - (x_intercept * ((y_value - y_intercept) / (x_value - x_intercept)))))),
                    Expression_2_Evaluated = algebra.parse("y"),
                    Equation_Evaluated = new algebra.Equation(Expression_1_Evaluated, Expression_2_Evaluated),
                    answer = Equation_Evaluated.solveFor("x"),
                    neweq = answer,
                    //x = - 3
                    x2 = algebra.parse("-3"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_neg_3 = eq.solveFor("y"),
                    //x = - 2
                    x2 = algebra.parse("-2"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_neg_2 = eq.solveFor("y"),
                    //x = - 1
                    x2 = algebra.parse("-1"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_neg_1 = eq.solveFor("y"),
                    //x = 0
                    x2 = algebra.parse("0"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_0 = eq.solveFor("y"),
                    //x = 1
                    x2 = algebra.parse("1"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_pos_1 = eq.solveFor("y"),
                    //x = 2
                    x2 = algebra.parse("2"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_pos_2 = eq.solveFor("y"),
                    //x = 1
                    x2 = algebra.parse("3"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_pos_3 = eq.solveFor("y");
            
        sessionStorage.setItem("final_answer-cookie",final_answer);
        //X Values
        plot_xvalue_1 = -3;
        plot_xvalue_2 = -2;
        plot_xvalue_3 = -1;
        plot_xvalue_4 = 0;
        plot_xvalue_5 = 1;
        plot_xvalue_6 = 2;
        plot_xvalue_7 = 3;
        //Web storage
        sessionStorage.setItem("linear_function_xvalue_1",plot_xvalue_1);
        sessionStorage.setItem("linear_function_xvalue_2",plot_xvalue_2);
        sessionStorage.setItem("linear_function_xvalue_3",plot_xvalue_3);
        sessionStorage.setItem("linear_function_xvalue_4",plot_xvalue_4);
        sessionStorage.setItem("linear_function_xvalue_5",plot_xvalue_5);
        sessionStorage.setItem("linear_function_xvalue_6",plot_xvalue_6);
        sessionStorage.setItem("linear_function_xvalue_7",plot_xvalue_7);
        //Y Values
        plot_yvalue_1 = exe_neg_3;
        plot_yvalue_2 = exe_neg_2;
        plot_yvalue_3 = exe_neg_1;
        plot_yvalue_4 = exe_0;
        plot_yvalue_5 = exe_pos_1;
        plot_yvalue_6 = exe_pos_2;
        plot_yvalue_7 = exe_pos_3;
        //Web storage
        sessionStorage.setItem("linear_function_yvalue_1",plot_yvalue_1);
        sessionStorage.setItem("linear_function_yvalue_2",plot_yvalue_2);
        sessionStorage.setItem("linear_function_yvalue_3",plot_yvalue_3);
        sessionStorage.setItem("linear_function_yvalue_4",plot_yvalue_4);
        sessionStorage.setItem("linear_function_yvalue_5",plot_yvalue_5);
        sessionStorage.setItem("linear_function_yvalue_6",plot_yvalue_6);
        sessionStorage.setItem("linear_function_yvalue_7",plot_yvalue_7);
        
        location.href = "workspace-slide.php";

        } else {
            
            var display1 = katex.renderToString("a = \\frac{y^{2} - y^{1}}{x^{2} - x^{1}}");
            var display2 = katex.renderToString("a = \\frac{"+y_value + " - " + y_intercept+"}{"+ x_value + " - " + x_intercept +"}");
            var display3 = katex.renderToString("a = "+((y_value - y_intercept) / (x_value - x_intercept)));
            var display4 = katex.renderToString("f(x) = mx + c");
            var display5 = katex.renderToString(y_intercept +" = "+((y_value - y_intercept) / (x_value - x_intercept))+"("+x_intercept+") + c");
            var display6 = katex.renderToString(y_intercept +" = "+ (x_intercept * ((y_value - y_intercept) / (x_value - x_intercept))) + " + c");
            var display7 = katex.renderToString(y_intercept + ' - ' + (x_intercept * ((y_value - y_intercept) / (x_value - x_intercept))) +" = c");
            var display8 = katex.renderToString("c = " + (y_intercept - (x_intercept * ((y_value - y_intercept) / (x_value - x_intercept)))));
            var display9 = katex.renderToString("f(x) = " + ((y_value - y_intercept) / (x_value - x_intercept)) + 'x - ' + (-(y_intercept - (x_intercept * ((y_value - y_intercept) / (x_value - x_intercept))))));
            
            var final_answer = '' +
                    '<section><span class="badge">Graph illustration</span></section>' +
                    '<section><canvas id="myChart" style="height: 400px; width: 100%;"></canvas></section>' +
                    '<section><span class="badge">Step 1</span><br><b>Determining the value of gradient</b><br><span class="katex">'+display1+'</span><br><span class="katex">'+display2+'</span><br>&Therefore; <span class="katex">'+display3+'</span></section>' +
                    '<section>General formula of linear function: <br><span class="katex">'+display4+'</span></section>' +
                    '<section><span class="badge">Step 2</span><br><b>From the general formula substitute as follows</b><br><span class="katex">'+display5+'</span></section>' +
                    '<section><span class="badge">Step 3</span><br><b>Calculate</b><br><span class="katex">'+display6+'</span><br><span class="katex">'+display7+'</span><br>' + (y_intercept - (x_intercept * ((y_value - y_intercept) / (x_value - x_intercept)))) + ' = c<br>&Therefore; <span class="katex">'+display8+'</span></section>' +
                    '<section><span class="badge">Step 4</span><br><b>Substitute a and c in the general formula</b><br>&Therefore; <span class="katex">'+display9+'</span></section>';

            var Expression_1_Evaluated = algebra.parse(((y_value - y_intercept) / (x_value - x_intercept)) + 'x + ' + (y_intercept - (x_intercept * ((y_value - y_intercept) / (x_value - x_intercept))))),
                    Expression_2_Evaluated = algebra.parse("y"),
                    Equation_Evaluated = new algebra.Equation(Expression_1_Evaluated, Expression_2_Evaluated),
                    answer = Equation_Evaluated.solveFor("x"),
                    neweq = answer,
                    //x = - 3
                    x2 = algebra.parse("-3"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_neg_3 = eq.solveFor("y"),
                    //x = - 2
                    x2 = algebra.parse("-2"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_neg_2 = eq.solveFor("y"),
                    //x = - 1
                    x2 = algebra.parse("-1"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_neg_1 = eq.solveFor("y"),
                    //x = 0
                    x2 = algebra.parse("0"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_0 = eq.solveFor("y"),
                    //x = 1
                    x2 = algebra.parse("1"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_pos_1 = eq.solveFor("y"),
                    //x = 2
                    x2 = algebra.parse("2"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_pos_2 = eq.solveFor("y"),
                    //x = 1
                    x2 = algebra.parse("3"),
                    eq = new algebra.Equation(neweq, x2),
                    exe_pos_3 = eq.solveFor("y");
            
            sessionStorage.setItem("final_answer-cookie",final_answer);
            //X Values
            plot_xvalue_1 = -3;
            plot_xvalue_2 = -2;
            plot_xvalue_3 = -1;
            plot_xvalue_4 = 0;
            plot_xvalue_5 = 1;
            plot_xvalue_6 = 2;
            plot_xvalue_7 = 3;
            //Web storage
            sessionStorage.setItem("linear_function_xvalue_1",plot_xvalue_1);
            sessionStorage.setItem("linear_function_xvalue_2",plot_xvalue_2);
            sessionStorage.setItem("linear_function_xvalue_3",plot_xvalue_3);
            sessionStorage.setItem("linear_function_xvalue_4",plot_xvalue_4);
            sessionStorage.setItem("linear_function_xvalue_5",plot_xvalue_5);
            sessionStorage.setItem("linear_function_xvalue_6",plot_xvalue_6);
            sessionStorage.setItem("linear_function_xvalue_7",plot_xvalue_7);
            //Y Values
            plot_yvalue_1 = exe_neg_3;
            plot_yvalue_2 = exe_neg_2;
            plot_yvalue_3 = exe_neg_1;
            plot_yvalue_4 = exe_0;
            plot_yvalue_5 = exe_pos_1;
            plot_yvalue_6 = exe_pos_2;
            plot_yvalue_7 = exe_pos_3;
            //Web storage
            sessionStorage.setItem("linear_function_yvalue_1",plot_yvalue_1);
            sessionStorage.setItem("linear_function_yvalue_2",plot_yvalue_2);
            sessionStorage.setItem("linear_function_yvalue_3",plot_yvalue_3);
            sessionStorage.setItem("linear_function_yvalue_4",plot_yvalue_4);
            sessionStorage.setItem("linear_function_yvalue_5",plot_yvalue_5);
            sessionStorage.setItem("linear_function_yvalue_6",plot_yvalue_6);
            sessionStorage.setItem("linear_function_yvalue_7",plot_yvalue_7);

            location.href = "workspace-slide.php";

        }

    } catch (err) {

        document.getElementById('display-linear-function-2').innerHTML = '<div class="alert alert-danger">' +
                '<p class="text-center text-danger">Expression you entered is not of linear equation, to fix this please make sure your variable is x and is in lowercase.<br>If the error persist contact support with capture error: ' + err.message + '</p>' +
                '</div>';

    }


}
/*
 
 End Linear Function
 
*/
/*
 
    Start Quadratic Function
 
 */
function algorithm_functions_topic_quadratic_function_1() {
    var a_value = parseFloat(document.getElementById('textbox-1-quadratic-function-1').value),
            b_value = parseFloat(document.getElementById('textbox-2-quadratic-function-1').value),
            c_value = parseFloat(document.getElementById('textbox-3-quadratic-function-1').value);


    var equation = algebra.parse("(" + a_value + ')x^2 + (' + b_value + ')x + (' + c_value + ")"),
            y_intercept = equation.toString(),
            y_intercept = y_intercept.replace(/x/g, "(0)"),
            y_intercept_eval = algebra.parse(y_intercept),
            x_intercept_left_hand = algebra.parse("0"),
            x_intercept = new algebra.Equation(x_intercept_left_hand, equation),
            x_intercept_solved = x_intercept.solveFor("x"),
            axis = (-b_value / (2 * a_value)),
            tp_x = ((-b_value) / (2 * a_value)),
            tp_y = ((a_value * Math.pow(((-b_value) / (2 * a_value)), 2)) + (b_value * ((-b_value) / (2 * a_value))) + (c_value)),
            tp = equation,
            tp = tp.toString(),
            tp = tp.replace(/x/g, "(" + tp_x + ")");
    
            var display1 = katex.renderToString("f(x) = " + algebra.toTex(equation));
            var display2 = katex.renderToString("y = " + algebra.toTex(y_intercept));
            var display3 = katex.renderToString("y = " + algebra.toTex(y_intercept_eval));
            var display4 = katex.renderToString(algebra.toTex(y_intercept_eval));
            var display5 = katex.renderToString(algebra.toTex(x_intercept));
            var display6 = katex.renderToString(algebra.toTex(x_intercept_solved[0]));
            var display7 = katex.renderToString(algebra.toTex(x_intercept_solved[1]));
            var display8 = katex.renderToString(algebra.toTex(x_intercept_solved[0]));
            var display9 = katex.renderToString(algebra.toTex(x_intercept_solved[1]));
            var display10 = katex.renderToString("x = \\frac{-b}{2a}");
            var display11 = katex.renderToString("x = \\frac{" + algebra.toTex((-b_value)) + "}{2(" + algebra.toTex(a_value) + ")}");
            var display12 = katex.renderToString("x = " + algebra.toTex(axis));
            var display13 = katex.renderToString(" (" + algebra.toTex(tp_x) + "; " + algebra.toTex(tp_y) + ")");
            var display14 = katex.renderToString("f(x) = " + algebra.toTex(equation));
            var display15 = katex.renderToString("f(" + algebra.toTex(tp_x) + ") = " + algebra.toTex(tp));
            var display16 = katex.renderToString("f(" + algebra.toTex(tp_x) + ") = " + algebra.toTex(tp_y));

    var final_answer = '' +
            '<section>Quadratic Function: <br><span class="Katex">'+display1+'</span></section>' +
            '<section><span class="badge">Step 1</span><br><b>Determine the value if y intercept</b><br>Let x = 0<br><span class="Katex">'+display2+'</span><br>&Therefore; <span class="Katex">'+display3+'</span></section>'+
            '<section><b>Therefore the co-ordinates of the y-intercept are </b><br>(0; <span class="Katex">'+display4+'</span>)' + '</section>' +
            '<section><span class="badge">Step 2</span><br><b>Determine the value of x-intercept</b><br>Let y = 0<br><span class="Katex">'+display5+'</span><br>Values of x<br>x = <span class="Katex">'+display6+'</span> or x = <span class="Katex">'+display7+'</span><br>&Therefore; The co-ordinates of the x-intercept are <br>(<span class="Katex">'+display8+'</span>; 0) and (<span class="Katex">'+display9+'</span>; 0)' + '</section>' +
            '<section><span class="badge">Step 3</span><br><b>Find axis of symmetry</b><br><span class="Katex">'+display10+'</span><br><span class="Katex">'+display11+'</span><br><span class="Katex">'+display12+'</span></section>' +
            '<section><span class="badge">Step 4</span><br><b>Now determine the coordinates of Turning Point (TP)</b><br><span class="Katex">'+display14+'</span><br><b>From the general formula substitute value of axis of symmetry</b><br><span class="Katex">'+display15+'</span><br><span class="Katex">'+display16+'</span><br>&Therefore; TP <span class="Katex">'+display13+'</span></section>' +
            '<section><span class="badge">Step 5</span><br><b>Draw Quadratic Function Graph</b></section>' +
            '<section><canvas id="myChart" style="height: 400px; width: 100%;"></canvas></section>';

            sessionStorage.setItem("final_answer-cookie",final_answer);
            //X Values
            plot_xvalue_1 = x_intercept_solved[1];
            plot_xvalue_2 = 0;
            plot_xvalue_3 = tp_x;
            plot_xvalue_4 = x_intercept_solved[0];
            //Web storage
            sessionStorage.setItem("quadratic_function_xvalue_1",plot_xvalue_1);
            sessionStorage.setItem("quadratic_function_xvalue_2",plot_xvalue_2);
            sessionStorage.setItem("quadratic_function_xvalue_3",plot_xvalue_3);
            sessionStorage.setItem("quadratic_function_xvalue_4",plot_xvalue_4);
            //Y Values
            plot_yvalue_1 = 0;
            plot_yvalue_2 = y_intercept_eval;
            plot_yvalue_3 = tp_y;
            plot_yvalue_4 = 0;
            //Web storage
            sessionStorage.setItem("quadratic_function_yvalue_1",plot_yvalue_1);
            sessionStorage.setItem("quadratic_function_yvalue_2",plot_yvalue_2);
            sessionStorage.setItem("quadratic_function_yvalue_3",plot_yvalue_3);
            sessionStorage.setItem("quadratic_function_yvalue_4",plot_yvalue_4);
            location.href = "workspace-slide.php";
}

function algorithm_functions_topic_quadratic_function_2(){

    var x1 = parseFloat(document.getElementById('textbox-1-quadratic-function-2').value),
            y1 = parseFloat(document.getElementById('textbox-2-quadratic-function-2').value),
            x2 = parseFloat(document.getElementById('textbox-3-quadratic-function-2').value),
    y2 = parseFloat(document.getElementById('textbox-4-quadratic-function-2').value),
    x3 = parseFloat(document.getElementById('textbox-5-quadratic-function-2').value),
            y3 = parseFloat(document.getElementById('textbox-6-quadratic-function-2').value);


    var intercept_first = x1 + '; ' + y1,
            intercept_second = x2 + '; ' + y2,
            intercept_third = x3 + '; ' + y3,
            formula = "y = a(x - x_1)(x - x_2)",
            formula_sub_step_1 = formula.replace(/x_1/g, "(" + x1 + ")"),
            formula_sub_step_1_2v = formula_sub_step_1 .replace(/x_2/g, "(" + x2 + ")"),
            formula_2 = algebra.parse(formula_sub_step_1_2v),
            formula_3 = formula_sub_step_1_2v.replace(/x/g, x3),
            formula_3 = formula_3.replace(/y/g, y3),
            formula_3 = algebra.parse(formula_3),
            equation_one = formula_3.solveFor("a"),
            formula_4 = formula_2.toString(),
            formula_4 = formula_4.replace(/a/g, "("+ equation_one+")"),
            formula_5 = algebra.parse(formula_4);
            /*left = p_y.toString(),
            left = algebra.parse(left),
            right = algebra.parse(p_tp_formula),
            left_right = new algebra.Equation(left, right),
            a_answer = left_right.solveFor("a"),
            final = a_answer + "( x - (x + (" + tp_x + "))^2 + (" + tp_y + ")",
            final2 = algebra.parse(final);*/
    
    var display1 = katex.renderToString(algebra.toTex(formula));
    var display2 = katex.renderToString(algebra.toTex(formula_sub_step_1_2v));
    var display3 = katex.renderToString(algebra.toTex(formula_2));
    var display4 = katex.renderToString(algebra.toTex(formula_3));
    var display5 = katex.renderToString("a = " + algebra.toTex(equation_one));
    var display6 = katex.renderToString(algebra.toTex(formula_4));
    var display7 = katex.renderToString(algebra.toTex(formula_5));/*
    var display8 = katex.renderToString("y = (x - x_1)(x - x_2)");
    var display9 = katex.renderToString("f(x) = " + algebra.toTex(final));
    var display10 = katex.renderToString("f(x) = " + algebra.toTex(final2));*/
    
    var final_answer = '<section><b>x-intercepts:</b><br>('+intercept_first+') and ('+intercept_second+')<br><b>y-intercept</b><br>('+intercept_third+')</section>' +
            '<section><span class="badge">Step 1</span><br><b>Use the following formula:</b><br><span class="Katex">'+display1+'</span></section>' +
            '<section><b>From the above formula substitute as follows</b><br><span class="Katex">'+display2+'</span><br><span class="Katexa">'+display3+'</span></section>' +
            '<section><span class="badge">Step 2</span><br><b>Now substitute y-intercept values and solve for a</b><br><span class="Katexa">'+display4+'</span><br><span class="Katex">'+display5+'</span></section>' +
            '<section><span class="badge">Step 3</span><br><b>Determining quadratic formula:</b><br><span class="Katex">'+display3+'</span></section>'+
            '<section><b>Substitute the value of a then calculate</b><br><span class="Katex">'+display6+'</span><br><span class="Katex">'+display7+'</span></section>';
    
    sessionStorage.setItem("final_answer-cookie",final_answer);
    location.href = "workspace-slide.php";
}
/*
 
    End Quadratic Function
 
 */
/*
 
   Start Hyperbolic Function
 
 */


function Algorithm_Hyperbolic_Function_Graph_Sketch() {

    document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-center">Hyperbolic Function Graph</p>' +
            '<div id="plot"></div>' +
            '</div>';

    try {
        functionPlot({
            target: '#plot',
            data: [{
                    fn: document.getElementById('TextBox-1-of-1').value,
                    sampler: 'builtIn', // this will make function-plot use the evaluator of math.js
                    graphType: 'polyline'
                }]
        });
    } catch (err) {
        console.log(err);
        alert(err);
    }
    draw();
}

/*
 Hyperbolic Functions End
 
 /*
 
 Exponencial Functions Start
 
 */
function Algorithm_Exponential_Function_Graph_Sketch() {

    try {

        var Expression_1 = document.getElementById('TextBox-1-of-1').value,
                y = algebra.parse("y");

        //x = - 3
        var x_3 = Expression_1,
                x_3 = x_3.replace(/x/g, "(-3)"),
                x_3 = algebra.parse(x_3),
                eq = new algebra.Equation(y, x_3),
                exe_neg_3 = eq.solveFor("y"),
                //x = - 2
                x2 = Expression_1,
                x2 = x2.replace(/x/g, "(-2)"),
                x2 = algebra.parse(x2),
                eq = new algebra.Equation(y, x2),
                exe_neg_2 = eq.solveFor("y"),
                //x = - 1
                x2 = Expression_1,
                x2 = x2.replace(/x/g, "(-1)"),
                x2 = algebra.parse(x2),
                eq = new algebra.Equation(y, x2),
                exe_neg_1 = eq.solveFor("y"),
                //x = 0
                x2 = Expression_1,
                x2 = x2.replace(/x/g, "(0)"),
                x2 = algebra.parse(x2),
                eq = new algebra.Equation(y, x2),
                exe_0 = eq.solveFor("y"),
                //x = 1
                x2 = Expression_1,
                x2 = x2.replace(/x/g, "(1)"),
                x2 = algebra.parse(x2),
                eq = new algebra.Equation(y, x2),
                exe_pos_1 = eq.solveFor("y"),
                //x = 2
                x2 = Expression_1,
                x2 = x2.replace(/x/g, "(2)"),
                x2 = algebra.parse(x2),
                eq = new algebra.Equation(y, x2),
                exe_pos_2 = eq.solveFor("y"),
                //x = 1
                x2 = Expression_1,
                x2 = x2.replace(/x/g, "(3)"),
                x2 = algebra.parse(x2),
                eq = new algebra.Equation(y, x2),
                exe_pos_3 = eq.solveFor("y");

        document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
                '<p class="text-center">Solution</p>' +
                '<p class="text-left"><span class="badge">Step 1</span><br><b>Your formula is</b><br><span class="katex" id="display1"></span></p>' +
                '<p class="text-right"><span class="badge">Step 2</span><br><b>Draw table</b></p>' +
                '<div class="table-responsible">' +
                '<table class="table table-bordered">' +
                '<tr><td><b>x</b></td><td>' + (-3) + '</td><td>' + (-2) + '</td><td>' + (-1) + '</td><td>' + (0) + '</td><td>' + (1) + '</td><td>' + (2) + '</td><td>' + (3) + '</td></tr>' +
                '<tr><td><b>y</b></td><td>' + (exe_neg_3) + '</td><td>' + (exe_neg_2) + '</td><td>' + (exe_neg_1) + '</td><td>' + (exe_0) + '</td><td>' + (exe_pos_1) + '</td><td>' + (exe_pos_2) + '</td><td>' + (exe_pos_3) + '</td></tr>' +
                '</table>' +
                '</div>' +
                '<div id="exponential-graph" style="height: 400px; width: 100%;"></div>' +
                '</div>';

        katex.render("f(x) = " + algebra.toTex(Expression_1), display1);

        //Exponential Function graph drawing
        var chart = new CanvasJS.Chart("exponential-graph", {
            title: {
                text: "Exponential Function Graph"
            },
            data: [{
                    type: "spline",
                    dataPoints: [
                        {x: -3, y: Number(exe_neg_3)},
                        {x: -2, y: Number(exe_neg_2)},
                        {x: -1, y: Number(exe_neg_1)},
                        {x: 0, y: Number(exe_0)},
                        {x: 1, y: Number(exe_pos_1)},
                        {x: 2, y: Number(exe_pos_2)},
                        {x: 3, y: Number(exe_pos_3)}
                    ]
                }]
        });
        chart.render();

    } catch (err) {

        document.getElementById('display-1').innerHTML = '<div class="alert alert-danger">' +
                '<p class="text-center text-danger">Values you entered are not of maths type please make sure your variable is x and is lowercase, and your expressions are of real maths.<br>If error persist report it at connect@elabvine.co.za with this capture bellow<br>Error Type : ' + err.message + '</p>' +
                '</div>';

    }

}
function Algorithm_Exponential_Function_Find_Equation() {

    try {

        var x = document.getElementById('TextBox-1-of-2').value,
                y = document.getElementById('TextBox-2-of-2').value;


        var points = x + "; " + y,
                y = algebra.parse(y),
                x = algebra.parse(x),
                left = y,
                right = algebra.parse("a^(" + x + ")"),
                eq = new algebra.Equation(left, right);
        answer = eq.solveFor("a");

        document.getElementById('display-2').innerHTML = '<div class="alert alert-success">' +
                '<p class="text-center">Solution</p>' +
                '<p class="text-left"><span class="badge">Step 1</span><br><b>Data Collected</b><br>Coordinates of turning point are (<span class="Katex" id="display1"></span>)</p>' +
                '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute the value of y first</b><br><span class="Katex" id="display2"></span></p>' +
                '<p class="text-left"><span class="badge">Step 3</span><br><b>Substitute the value of x</b><br><span class="Katex" id="display3"></span></p>' +
                '<p class="text-right"><span class="badge">Step 4</span><br><b>Now solve for a</b><br><span class="katex" id="display4"></span><br><span class="katex" id="display5"></span></p>' +
                '<p class="text-left"><span class="badge">Step 5</span><br><b>Now write values in a standard exponentialformula</b><br>&Therefore; <span class="katex" id="display6"></span></p>' +
                '</div>';

        katex.render(algebra.toTex(points), display1);
        katex.render(algebra.toTex(y) + " = a^{x}", display2);
        katex.render(algebra.toTex(y) + " = a^{" + algebra.toTex(x) + "}", display3);
        katex.render(algebra.toTex(left) + " = " + algebra.toTex(right), display4);
        katex.render("a = " + algebra.toTex(answer), display5);
        katex.render("f(x) = " + algebra.toTex(answer) + "^{x}", display6);

    } catch (err) {

        document.getElementById('display-2').innerHTML = '<div class="alert alert-danger">' +
                '<p class="text-center text-danger">Values you entered are not of maths type please make sure your variable is x and is lowercase, and your expressions are of real maths.<br>If error persist report it at connect@elabvine.co.za with this capture bellow<br>Error Type : ' + err.message + '</p>' +
                '</div>';

    }

}
/*
 
 Exponencial Functions End
 
 Inverse Functions Start
 
 */
function Algorithm_Inverse_Functions() {

    try {

        var num = document.getElementById('textBox').value;

        var num = algebra.parse(num)
        stringNum = num.toString()
        num_swapped = stringNum.replace(/x/g, "y")
        num_swapped = algebra.parse(num_swapped)
        left = algebra.parse("x")
        eq = new algebra.Equation(left, num_swapped)
        answer = eq.solveFor("y")
        //answer = eq.solveFor("y")


        document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
                '<p class="text-center">Solution</p>' +
                '<p class="text-left"><span class="badge">Step 1</span><br><b>From</b><br><span class="katex" id="display1"></span><br><b>Swap x and y</b><br><span class="katex" id="display2"></span></p>' +
                '<p class="text-right"><span class="badge">Step 2</span><br><b>Make y the subject of the formula</b><br><span class="katex" id="display3"></span><br><span class="katex" id="display4"></span><br>&Therefore; The inverse is <span class="katex" id="display5"></span></p>' +
                '<p class="text-left"><span class="badge">Step 3</span><br><b>Sketch graph of <span class="katex" id="display6"></span></b><br><div id="inverse-graph" style="height: 400px; width: 100%;"></div></p>' +
                '</div>';

        katex.render("y = " + algebra.toTex(num), display1);
        katex.render("x = " + algebra.toTex(num_swapped), display2);
        katex.render("x = " + algebra.toTex(num_swapped), display3);
        katex.render("y = " + algebra.toTex(answer), display4);
        katex.render("f^{-1}(x) = " + algebra.toTex(answer), display5);
        katex.render("f^{-1}(x) = " + algebra.toTex(answer), display6);

        var formula = "y = " + answer,
                formula = formula.toString();

        try {
            functionPlot({
                target: '#inverse-graph',
                data: [{
                        fn: formula,
                        sampler: 'builtIn', // this will make function-plot use the evaluator of math.js
                        graphType: 'polyline'
                    }]
            });
        } catch (err) {
            console.log(err);
            alert(err);
        }


    } catch (err) {

        document.getElementById('display-1').innerHTML = '<div class="alert alert-danger">' +
                '<p class="text-center text-danger">Values you entered are not of maths type please make sure your variable is x and is lowercase, and your expressions are of real maths.<br>If error persist report it at connect@elabvine.co.za with this capture bellow<br>Error Type : ' + err.message + '</p>' +
                '</div>';

    }
    draw();

}
/*
 
 Inverse Functions End
 
 Functions Chapter code End
 
 */
/*
 
 Financial Chapter Start
 
 */

/*
 
 Simple Interest Start
 
 */
function Algorithm_Finance_Simple_Interest_final() {
    var num1 = parseFloat(document.getElementById('text-1-of-1').value),
            num2 = parseFloat(document.getElementById('text-2-of-1').value),
            num3 = parseFloat(document.getElementById('text-3-of-1').value);

    document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 + <i>i</i> &times; n)</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>A = ' + num1 + '(1 + <sup>' + num2 + '</sup> &frasl; <sub>100</sub> &times; ' + num3 + ')</p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for A</b><br>A = ' + num1 + '(1 + ' + ((num2 / 100) * num3) + ')<br>A = ' + num1 + '(' + (1 + ((num2 / 100) * num3)) + ')<br>A = R ' + (num1 * (1 + ((num2 / 100) * num3))).toFixed(2) + '</p>' +
            '</div>';
}

function Algorithm_Finance_Simple_Interest_principal() {
    var num1 = parseFloat(document.getElementById('text-1-of-2').value),
            num2 = parseFloat(document.getElementById('text-2-of-2').value),
            num3 = parseFloat(document.getElementById('text-3-of-2').value);

    document.getElementById('display-2').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 + <i>i</i> &times; n)</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = P(1 + <sup>' + num2 + '</sup> &frasl; <sub>100</sub> &times; ' + num3 + ')</p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for P</b><br>' + num1 + ' = P(1 + ' + ((num2 / 100) * num3) + ')<br>' + num1 + '= P(' + (1 + ((num2 / 100) * num3)) + ')<br><sup>' + num1 + '</sup> &frasl; <sub>' + (1 + ((num2 / 100) * num3)) + '</sub> = P<br>&Therefore; P = R ' + (num1 / (1 + ((num2 / 100) * num3))).toFixed(2) + '</p>' +
            '</div>';
}

function Algorithm_Finance_Simple_Interest_interest() {
    var num1 = parseFloat(document.getElementById('text-1-of-3').value),
            num2 = parseFloat(document.getElementById('text-2-of-3').value),
            num3 = parseFloat(document.getElementById('text-3-of-3').value);

    document.getElementById('display-3').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 + <i>i</i> &times; n)</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = ' + num2 + '(1 + <i>i</i> &times; ' + num3 + ')</p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for <i>i</i></b><br><sup>' + num1 + '</sup> &frasl; <sub>' + num2 + '</sub> = (1 + <i>i</i> &times; ' + num3 + ')<br>' + (num1 / num2) + '= 1 + <i>i</i> &times; ' + num3 + '<br>' + (num1 / num2) + ' - 1 = <i>i</i> &times; ' + num3 + '<br>' + ((num1 / num2) - 1) + ' = <i>i</i> &times; ' + num3 + '<br><sup>' + ((num1 / num2) - 1) + '</sup> &frasl; <sub>' + num3 + '</sub> = <i>i</i><br><i>i</i> = ' + (((num1 / num2) - 1) / num3).toFixed(3) + '</p>' +
            '<p class="text-center">Converted to percentages<br>&Therefore; <i>i</i> = ' + (((((num1 / num2) - 1) / num3).toFixed(3)) * 100).toFixed(2) + '% </p>' +
            '</div>';
}

function Algorithm_Finance_Simple_Interest_period() {
    var num1 = parseFloat(document.getElementById('text-1-of-4').value),
            num2 = parseFloat(document.getElementById('text-2-of-4').value),
            num3 = parseFloat(document.getElementById('text-3-of-4').value);

    document.getElementById('display-4').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 + <i>i</i> &times; n)</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = ' + num2 + '(1 + <sup>' + num3 + '</sup> &frasl; <sub>100</sub> &times; n)</p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for n</b><br><sup>' + num1 + '</sup> &frasl; <sub>' + num2 + '</sub> = (1 + ' + (num3 / 100) + ' &times; n)<br>' + (num1 / num2) + '= 1 + ' + (num3 / 100) + ' &times; n<br>' + (num1 / num2) + ' - 1 = ' + (num3 / 100) + ' &times; n<br>' + ((num1 / num2) - 1) + ' = ' + (num3 / 100) + ' &times; n<br><sup>' + ((num1 / num2) - 1) + '</sup> &frasl; <sub>' + (num3 / 100) + '</sub> = n<br>&therefore; n = ' + (((num1 / num2) - 1) / (num3 / 100)).toFixed(2) + ' years</p>' +
            '</div>';
}
/*
 
 Simple Interest End
 
 */
/*
 
 Compound Interest Start
 
 */

function Algorithm_Finance_Compound_Interest_final() {
    var num1 = parseFloat(document.getElementById('text-1-of-1').value),
            num2 = parseFloat(document.getElementById('text-2-of-1').value),
            num3 = parseFloat(document.getElementById('text-3-of-1').value),
            num4 = parseFloat(document.getElementById('text-4-of-1').value);

    if (isNaN(num4)) {
        num4 = 1;
    }

    document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 + <i>i</i>)<sup>n</sup></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>A = ' + num1 + '(1 + <sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times;100</sub>)<sup>' + num3 + ' &times; ' + num4 + '</sup></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for A</b><br>A = ' + num1 + '(' + (1 + (num2 / (num4 * 100))) + ')<sup>' + (num3 * num4) + '</sup><br>A = ' + num1 + '(' + Math.pow((1 + (num2 / (num4 * 100))), (num3 * num4)) + ')<br>A = R ' + (num1 * Math.pow((1 + (num2 / (num4 * 100))), (num3 * num4))).toFixed(2) + '</p>' +
            '</div>';

}

function Algorithm_Finance_Compound_Interest_principal() {
    var num1 = parseFloat(document.getElementById('text-1-of-2').value),
            num2 = parseFloat(document.getElementById('text-2-of-2').value),
            num3 = parseFloat(document.getElementById('text-3-of-2').value),
            num4 = parseFloat(document.getElementById('text-4-of-2').value);

    if (isNaN(num4)) {
        num4 = 1;
    }

    document.getElementById('display-2').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 + <i>i</i>)<sup>n</sup></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = P(1 + <sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times;100</sub>)<sup>' + num3 + ' &times; ' + num4 + '</sup></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for P</b><br>' + num1 + ' = P(' + (1 + (num2 / (num4 * 100))) + ')<sup>' + (num3 * num4) + '</sup><br>' + num1 + ' = P(' + Math.pow((1 + (num2 / (num4 * 100))), (num3 * num4)) + ')<br><sup>' + num1 + '</sup> &frasl; <sub>' + Math.pow((1 + (num2 / (num4 * 100))), (num3 * num4)) + '</sub> = P<br>&Therefore; P = R ' + (num1 / Math.pow((1 + (num2 / (num4 * 100))), (num3 * num4))).toFixed(2) + '</p>' +
            '</div>';

}

function Algorithm_Finance_Compound_Interest_interest() {
    var num1 = parseFloat(document.getElementById('text-1-of-3').value),
            num2 = parseFloat(document.getElementById('text-2-of-3').value),
            num3 = parseFloat(document.getElementById('text-3-of-3').value);

    document.getElementById('display-3').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 + <i>i</i>)<sup>n</sup></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = ' + num2 + '(1 + <i>i</i>)<sup>' + num3 + '</sup></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for <i>i</i></b><br><sup>' + num1 + '</sup> &frasl; <sub>' + num2 + '</sub> = (1 + <i>i</i>)<sup>' + num3 + '</sup><br>' + (num1 / num2) + ' = (1 + <i>i</i>)<sup>' + num3 + '</sup><br><sup>' + num3 + '</sup>&radic;<span style="text-decoration:overline">' + (num1 / num2) + '</span> = <sup>' + num3 + '</sup>&radic;<span style="text-decoration:overline">(1 + <i>i</i>)<sup>' + num3 + '</sup></span><br>' + Math.pow((num1 / num2), (1 / num3)) + ' = 1 + <i>i</i><br>' + Math.pow((num1 / num2), (1 / num3)) + ' - 1 = <i>i</i><br>' + (Math.pow((num1 / num2), (1 / num3)) - 1).toFixed(4) + ' = <i>i</i><br>&therefore; <i>i</i> = ' + (Math.pow((num1 / num2), (1 / num3)) - 1).toFixed(4) + '</p>' +
            '<p class="text-center">Converted to percentages<br>&Therefore; <i>i</i> = ' + ((Math.pow((num1 / num2), (1 / num3)) - 1) * 100).toFixed(2) + '% </p>' +
            '</div>';
}

function Algorithm_Finance_Compound_Interest_period() {
    var num1 = parseFloat(document.getElementById('text-1-of-4').value),
            num2 = parseFloat(document.getElementById('text-2-of-4').value),
            num3 = parseFloat(document.getElementById('text-3-of-4').value);

    document.getElementById('display-4').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 + <i>i</i>)<sup>n</sup></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = ' + num2 + '(1 + <sup>' + num3 + '</sup> &frasl; <sub>100</sub>)<sup>n</sup></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for n</b><br><sup>' + num1 + '</sup> &frasl; <sub>' + num2 + '</sub> = (1 + ' + (num3 / 100) + ')<sup>n</sup><br>' + (num1 / num2) + ' = (1 + ' + (num3 / 100) + ')<sup>n</sup><br>log(' + (num1 / num2) + ') = n &times; log(' + (1 + (num3 / 100)) + ')<br>' + Math.log(num1 / num2) + ' = n &times; ' + Math.log(1 + (num3 / 100)) + '<br><sup>' + Math.log(num1 / num2) + '</sup> &frasl; <sub>' + Math.log(1 + (num3 / 100)) + '</sub> = n<br>n = ' + (Math.log(num1 / num2) / Math.log(1 + (num3 / 100))).toFixed(2) + ' years</p>' +
            '</div>';
}

/*
 
 Compound Interest End
 
 */

/*
 
 Simple Decay Start
 
 */
function Algorithm_Finance_Depreciation_Simple_final() {
    var num1 = parseFloat(document.getElementById('tab-1-text-1-of-1').value),
            num2 = parseFloat(document.getElementById('tab-1-text-2-of-1').value),
            num3 = parseFloat(document.getElementById('tab-1-text-3-of-1').value);

    document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 - <i>i</i> &times; n)</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>A = ' + num1 + '(1 - <sup>' + num2 + '</sup> &frasl; <sub>100</sub> &times; ' + num3 + ')</p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for A</b><br>A = ' + num1 + '(1 - ' + ((num2 / 100) * num3) + ')<br>A = ' + num1 + '(' + (1 - ((num2 / 100) * num3)) + ')<br>A = R ' + (num1 * (1 - ((num2 / 100) * num3))).toFixed(2) + '</p>' +
            '</div>';
}

function Algorithm_Finance_Depreciation_Simple_principal() {
    var num1 = parseFloat(document.getElementById('tab-1-text-1-of-2').value),
            num2 = parseFloat(document.getElementById('tab-1-text-2-of-2').value),
            num3 = parseFloat(document.getElementById('tab-1-text-3-of-2').value);

    document.getElementById('display-2').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 - <i>i</i> &times; n)</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = P(1 - <sup>' + num2 + '</sup> &frasl; <sub>100</sub> &times; ' + num3 + ')</p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for P</b><br>' + num1 + ' = P(1 - ' + ((num2 / 100) * num3) + ')<br>' + num1 + '= P(' + (1 - ((num2 / 100) * num3)) + ')<br><sup>' + num1 + '</sup> &frasl; <sub>' + (1 - ((num2 / 100) * num3)) + '</sub> = P<br>&Therefore; P = R ' + (num1 / (1 - ((num2 / 100) * num3))).toFixed(2) + '</p>' +
            '</div>';
}

function Algorithm_Finance_Depreciation_Simple_interest() {
    var num1 = parseFloat(document.getElementById('tab-1-text-1-of-3').value),
            num2 = parseFloat(document.getElementById('tab-1-text-2-of-3').value),
            num3 = parseFloat(document.getElementById('tab-1-text-3-of-3').value);

    document.getElementById('display-3').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 - <i>i</i> &times; n)</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = ' + num2 + '(1 - <i>i</i> &times; ' + num3 + ')</p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for <i>i</i></b><br><sup>' + num1 + '</sup> &frasl; <sub>' + num2 + '</sub> = (1 - <i>i</i> &times; ' + num3 + ')<br>' + (num1 / num2) + '= 1 - <i>i</i> &times; ' + num3 + '<br>' + (num1 / num2) + ' - 1 = <i>i</i> &times; ' + num3 + '<br>' + ((num1 / num2) - 1) + ' = -<i>i</i> &times; ' + num3 + '<br><sup>' + ((num1 / num2) - 1) + '</sup> &frasl; <sub>' + (-num3) + '</sub> = <i>i</i><br><i>i</i> = ' + (((num1 / num2) - 1) / (-num3)).toFixed(3) + '</p>' +
            '<p class="text-center">Converted to percentages<br>&Therefore; <i>i</i> = ' + ((((num1 / num2) - 1) / (-num3)) * 100).toFixed(2) + '% </p>' +
            '</div>';
}

function Algorithm_Finance_Depreciation_Simple_period() {
    var num1 = parseFloat(document.getElementById('tab-1-text-1-of-4').value),
            num2 = parseFloat(document.getElementById('tab-1-text-2-of-4').value),
            num3 = parseFloat(document.getElementById('tab-1-text-3-of-4').value);

    document.getElementById('display-4').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 - <i>i</i> &times; n)</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = ' + num2 + '(1 - <sup>' + num3 + '</sup> &frasl; <sub>100</sub> &times; n)</p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for n</b><br><sup>' + num1 + '</sup> &frasl; <sub>' + num2 + '</sub> = (1 - ' + (num3 / 100) + ' &times; n)<br>' + (num1 / num2) + '= 1 - ' + (num3 / 100) + ' &times; n<br>' + (num1 / num2) + ' - 1 = ' + (-num3 / 100) + ' &times; n<br>' + ((num1 / num2) - 1) + ' = ' + (-num3 / 100) + ' &times; n<br><sup>' + ((num1 / num2) - 1) + '</sup> &frasl; <sub>' + (-num3 / 100) + '</sub> = n<br>&therefore; n = ' + (((num1 / num2) - 1) / (-num3 / 100)).toFixed(2) + ' years</p>' +
            '</div>';
}
/*
 
 Simple Decay End
 
 */

/*
 
 Compound Decay Start
 
 */

function Algorithm_Finance_Depreciation_Compound_final() {
    var num1 = parseFloat(document.getElementById('tab-2-text-1-of-1').value),
            num2 = parseFloat(document.getElementById('tab-2-text-2-of-1').value),
            num3 = parseFloat(document.getElementById('tab-2-text-3-of-1').value);

    document.getElementById('display-5').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 - <i>i</i>)<sup>n</sup></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>A = ' + num1 + '(1 - <sup>' + num2 + '</sup> &frasl; <sub>100</sub>)<sup>' + num3 + '</sup></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for A</b><br>A = ' + num1 + '(' + (1 - (num2 / (100))) + ')<sup>' + (num3) + '</sup><br>A = ' + num1 + '(' + Math.pow((1 - (num2 / (100))), (num3)) + ')<br>A = R ' + (num1 * Math.pow((1 - (num2 / (100))), (num3))).toFixed(2) + '</p>' +
            '</div>';

}

function Algorithm_Finance_Depreciation_Compound_principal() {
    var num1 = parseFloat(document.getElementById('tab-2-text-1-of-2').value),
            num2 = parseFloat(document.getElementById('tab-2-text-2-of-2').value),
            num3 = parseFloat(document.getElementById('tab-2-text-3-of-2').value);

    document.getElementById('display-6').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 - <i>i</i>)<sup>n</sup></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = P(1 - <sup>' + num2 + '</sup> &frasl; <sub>100</sub>)<sup>' + num3 + '</sup></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for P</b><br>' + num1 + ' = P(' + (1 - (num2 / (100))) + ')<sup>' + (num3) + '</sup><br>' + num1 + ' = P(' + Math.pow((1 - (num2 / (100))), (num3)) + ')<br><sup>' + num1 + '</sup> &frasl; <sub>' + Math.pow((1 - (num2 / (100))), (num3)) + '</sub> = P<br>&Therefore; P = R ' + (num1 / Math.pow((1 - (num2 / (100))), (num3))).toFixed(2) + '</p>' +
            '</div>';

}

function Algorithm_Finance_Depreciation_Compound_interest() {
    var num1 = parseFloat(document.getElementById('tab-2-text-1-of-3').value),
            num2 = parseFloat(document.getElementById('tab-2-text-2-of-3').value),
            num3 = parseFloat(document.getElementById('tab-2-text-3-of-3').value);

    document.getElementById('display-7').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 - <i>i</i>)<sup>n</sup></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = ' + num2 + '(1 - <i>i</i>)<sup>' + num3 + '</sup></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for <i>i</i></b><br><sup>' + num1 + '</sup> &frasl; <sub>' + num2 + '</sub> = (1 - <i>i</i>)<sup>' + num3 + '</sup><br>' + (num1 / num2) + ' = (1 - <i>i</i>)<sup>' + num3 + '</sup><br><sup>' + num3 + '</sup>&radic;<span style="text-decoration:overline">' + (num1 / num2) + '</span> = <sup>' + num3 + '</sup>&radic;<span style="text-decoration:overline">(1 - <i>i</i>)<sup>' + num3 + '</sup></span><br>' + Math.pow((num1 / num2), (1 / num3)) + ' = 1 - <i>i</i><br>' + Math.pow((num1 / num2), (1 / num3)) + ' - 1 = -<i>i</i><br>' + (-(Math.pow((num1 / num2), (1 / num3)) - 1)).toFixed(4) + ' = <i>i</i><br>&therefore; <i>i</i> = ' + (-(Math.pow((num1 / num2), (1 / num3)) - 1)).toFixed(4) + '</p>' +
            '<p class="text-center">Converted to percentages<br>&Therefore; <i>i</i> = ' + (-(Math.pow((num1 / num2), (1 / num3)) - 1) * 100).toFixed(2) + '% </p>' +
            '</div>';
}

function Algorithm_Finance_Depreciation_Compound_period() {
    var num1 = parseFloat(document.getElementById('tab-2-text-1-of-4').value),
            num2 = parseFloat(document.getElementById('tab-2-text-2-of-4').value),
            num3 = parseFloat(document.getElementById('tab-2-text-3-of-4').value);

    document.getElementById('display-8').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>A = P(1 - <i>i</i>)<sup>n</sup></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = ' + num2 + '(1 - <sup>' + num3 + '</sup> &frasl; <sub>100</sub>)<sup>n</sup></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for n</b><br><sup>' + num1 + '</sup> &frasl; <sub>' + num2 + '</sub> = (1 - ' + (num3 / 100) + ')<sup>n</sup><br>' + (num1 / num2) + ' = (1 - ' + (num3 / 100) + ')<sup>n</sup><br>log(' + (num1 / num2) + ') = n &times; log(' + (1 - (num3 / 100)) + ')<br>' + Math.log(num1 / num2) + ' = n &times; ' + Math.log(1 - (num3 / 100)) + '<br><sup>' + Math.log(num1 / num2) + '</sup> &frasl; <sub>' + Math.log(1 - (num3 / 100)) + '</sub> = n<br>n = ' + (Math.log(num1 / num2) / Math.log(1 - (num3 / 100))).toFixed(2) + ' years</p>' +
            '</div>';
}

/*
 
 Compound Decay End
 
 */
/*
 
 Interests Start
 
 */

function Algorithm_Finance_Effective_Interest() {
    var num1 = parseFloat(document.getElementById('text-1-of-1').value),
            num2 = parseFloat(document.getElementById('text-2-of-1').value);

    document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>1 + <i>i</i><sup>effective</sup> = (1 + <sup><i>i</i><sup>nominal</sup></sup> &frasl; <sub>k</sub>)<sup>k</sup></sup></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>1 + <i>i</i><sup>effective</sup> = (1 + <sup>' + (num1 / 100) + '</sup> &frasl; <sub>' + num2 + '</sub>)<sup>' + num2 + '</sup></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for <i>i</i><sup>effective</sup></b><br>1 + <i>i</i><sup>effective</sup> = (' + (1 + ((num1 / 100) / num2)) + ')<sup>' + num2 + '</sup><br><i>i</i><sup>effective</sup> = ' + Math.pow((1 + ((num1 / 100) / num2)), num2) + ' - 1<br><i>i</i><sup>effective</sup> = ' + (Math.pow((1 + ((num1 / 100) / num2)), num2) - 1).toFixed(4) + ' </p>' +
            '<p class="text-center">Converted to percentages<br>&Therefore; <i>i</i> = ' + ((Math.pow((1 + ((num1 / 100) / num2)), num2) - 1) * 100).toFixed(2) + '% </p>' +
            '</div>';
}

/*
 
 Interests End
 
 */
/*
 
 Annuities F Start
 
 */


function Algorithm_Anunities_F_Total_accumulated() {

    var num1 = parseFloat(document.getElementById('tab-1-text-1').value),
            num2 = parseFloat(document.getElementById('tab-1-text-2-of-1').value),
            num3 = parseFloat(document.getElementById('tab-1-text-3-of-1').value),
            num4 = parseFloat(document.getElementById('tab-1-text-4-of-1').value);

    if (isNaN(num4)) {
        num4 = 1;
    }

    document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>F = <sup>x[(1 + <i>i</i>)<sup>n</sup> - 1]</sup> &frasl; <sub><i>i</i></sub></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>F = <sup>' + num1 + '[(1 + <sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)<sup>' + num3 + ' &times; ' + num2 + '</sup> - 1]</sup> &frasl; <sub><sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub></sub></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for F</b><br>F = <sup>' + num1 + '[(1 + ' + (num2 / (num4 * 100)) + ')<sup>' + (num3 * num4) + '</sup> - 1]</sup> &frasl; <sub>' + (num2 / (num4 * 100)) + '</sub><br>F = <sup>' + num1 + '[' + Math.pow((1 + (num2 / (num4 * 100))), (num3 * num4)) + ' - 1]</sup> &frasl; <sub>' + (num2 / (num4 * 100)) + '</sub><br>F = <sup>' + num1 + '[' + (Math.pow((1 + (num2 / (num4 * 100))), (num3 * num4)) - 1) + ']</sup> &frasl; <sub>' + (num2 / (num4 * 100)) + '</sub><br>F = <sup>' + (num1 * (Math.pow((1 + (num2 / (num4 * 100))), (num3 * num4)) - 1)) + '</sup> &frasl; <sub>' + (num2 / (num4 * 100)) + '</sub><br>F = R ' + ((num1 * (Math.pow((1 + (num2 / (num4 * 100))), (num3 * num4)) - 1)) / (num2 / (num4 * 100))).toFixed(2) + '</p>' +
            '</div>';

}

function Algorithm_Annuities_F_Monthly_installment() {

    var num1 = parseFloat(document.getElementById('tab-1-text-1-of-2').value),
            num2 = parseFloat(document.getElementById('tab-1-text-2-of-2').value),
            num3 = parseFloat(document.getElementById('tab-1-text-3-of-2').value),
            num4 = parseFloat(document.getElementById('tab-1-text-4-of-2').value);

    if (isNaN(num4)) {
        num4 = 1;
    }

    document.getElementById('display-2').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>F = <sup>x[(1 + <i>i</i>)<sup>n</sup> - 1]</sup> &frasl; <sub><i>i</i></sub></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = <sup>x[(1 + <sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)<sup>' + num3 + ' &times; ' + num4 + '</sup> - 1]</sup> &frasl; <sub><sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub></sub></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for x</b><br>' + num1 + ' = <sup>x[(1 + <sup>' +
            num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)<sup>' + num3 + ' &times; ' + num4 + '</sup> - 1]</sup> &frasl; <sub>(<sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)</sub><br>' + num1 + ' &times; (<sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>) = x[(1 + <sup>' +
            num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)<sup>' + num3 + ' &times; ' + num4 + '</sup> - 1]<br><sup>(' + num1 + ' &times; <sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)</sup> &frasl; <sub>[(1 + <sup>' +
            num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)<sup>' + num3 + ' &times; ' + num4 + '</sup> - 1]</sub> = x<br>&Therefore; x = R ' + ((num1 * (num2 / (num4 * 100))) / (Math.pow((1 + (num2 / (num4 * 100))), (num3 * num4)) - 1)).toFixed(2) + '</p>' +
            '</div>';
}

function Algorithm_Annuities_F_Payments() {

    var num1 = parseFloat(document.getElementById('tab-1-text-1-of-3').value),
            num2 = parseFloat(document.getElementById('tab-1-text-2-of-3').value),
            num3 = parseFloat(document.getElementById('tab-1-text-3-of-3').value),
            num4 = parseFloat(document.getElementById('tab-1-text-4-of-3').value);

    if (isNaN(num4)) {
        num4 = 1;
    }

    document.getElementById('display-3').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>F = <sup>x[(1 + <i>i</i>)<sup>n</sup> - 1]</sup> &frasl; <sub><i>i</i></sub></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = <sup>' + num2 + '[(1 + <sup>' + num3 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)<sup>n</sup> - 1]</sup> &frasl; <sub>(<sup>' + num3 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)</sub></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for n</b><br>' + num1 + ' &times; ' + (num3 / (num4 * 100)) + ' = ' + num2 + '[' + (1 + (num3 / (num4 * 100))) + '<sup>n</sup> - 1]<br>(<sup>' + (num1 * (num3 / (num4 * 100))) + '</sup> &frasl; <sub>' + num2 + '</sub>) + 1 = ' + (1 + (num3 / (num4 * 100))) + '<sup>n</sup><br>' + (((num1 * (num3 / (num4 * 100))) / num2) + 1) + ' = ' + (1 + (num3 / (num4 * 100))) + '<sup>n</sup><br>n = <sup>log(' + (((num1 * (num3 / (num4 * 100))) / num2) + 1) + ')</sup> &frasl; <sub>log(' + (1 + (num3 / (num4 * 100))) + ')</sub><br>n = ' + (Math.log((((num1 * (num3 / (num4 * 100))) / num2) + 1)) / Math.log((1 + (num3 / (num4 * 100))))) + '<br>&therefore; number of payments = ' + (Math.log((((num1 * (num3 / (num4 * 100))) / num2) + 1)) / Math.log((1 + (num3 / (num4 * 100))))).toFixed(0) + ' in ' + ((Math.log((((num1 * (num3 / (num4 * 100))) / num2) + 1)) / Math.log((1 + (num3 / (num4 * 100))))).toFixed(0) / 12) + ' years</p>' +
            '</div>';
}

/*
 
 Annuities F End
 
 */

/*
 
 Annuities P Start
 
 */


function Algorithm_Annuities_P_Present_Amount() {

    var num1 = parseFloat(document.getElementById('tab-2-text-1-of-1').value),
            num2 = parseFloat(document.getElementById('tab-2-text-2-of-1').value),
            num3 = parseFloat(document.getElementById('tab-2-text-3-of-1').value),
            num4 = parseFloat(document.getElementById('tab-2-text-4-of-1').value);

    if (isNaN(num4)) {
        num4 = 1;
    }

    document.getElementById('display-4').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>F = <sup>x[1 - (1 + <i>i</i>)<sup>-n</sup>]</sup> &frasl; <sub><i>i</i></sub></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>F = <sup>' + num1 + '[1 - (1 + <sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)<sup>-(' + num3 + ' &times; ' + num2 + ')</sup>]</sup> &frasl; <sub><sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub></sub></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for F</b><br>F = <sup>' + num1 + '[1 - (1 + ' + (num2 / (num4 * 100)) + ')<sup>' + (-(num3 * num4)) + '</sup>]</sup> &frasl; <sub>' + (num2 / (num4 * 100)) + '</sub><br>F = <sup>' + num1 + '[1 - ' + Math.pow((1 + (num2 / (num4 * 100))), (-(num3 * num4))) + ']</sup> &frasl; <sub>' + (num2 / (num4 * 100)) + '</sub><br>F = <sup>' + num1 + '[' + (1 - Math.pow((1 + (num2 / (num4 * 100))), (-(num3 * num4)))) + ']</sup> &frasl; <sub>' + (num2 / (num4 * 100)) + '</sub><br>F = <sup>' + (num1 * (1 - Math.pow((1 + (num2 / (num4 * 100))), (-(num3 * num4))))) + '</sup> &frasl; <sub>' + (num2 / (num4 * 100)) + '</sub><br>F = R ' + ((num1 * (1 - Math.pow((1 + (num2 / (num4 * 100))), (-(num3 * num4))))) / (num2 / (num4 * 100))).toFixed(2) + '</p>' +
            '</div>';

}

function Algorithm_Annuities_P_Monthly_installment() {

    var num1 = parseFloat(document.getElementById('tab-2-text-1-of-2').value),
            num2 = parseFloat(document.getElementById('tab-2-text-2-of-2').value),
            num3 = parseFloat(document.getElementById('tab-2-text-3-of-2').value),
            num4 = parseFloat(document.getElementById('tab-2-text-4-of-2').value);

    if (isNaN(num4)) {
        num4 = 1;
    }

    document.getElementById('display-5').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>F = <sup>x[1 - (1 + <i>i</i>)<sup>-n</sup>]</sup> &frasl; <sub><i>i</i></sub></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = <sup>x[1 - (1 + <sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)<sup>-(' + num3 + ' &times; ' + num4 + ')</sup>]</sup> &frasl; <sub><sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub></sub></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for x</b><br>' + num1 + ' = <sup>x[1 - (1 + <sup>' +
            num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)<sup>-(' + num3 + ' &times; ' + num4 + ')</sup>]</sup> &frasl; <sub>(<sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)</sub><br>' + num1 + ' &times; (<sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>) = x[1 - (1 + <sup>' +
            num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)<sup>-(' + num3 + ' &times; ' + num4 + ')</sup>]<br><sup>(' + num1 + ' &times; <sup>' + num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)</sup> &frasl; <sub>[1 - (1 + <sup>' +
            num2 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)<sup>-(' + num3 + ' &times; ' + num4 + ')</sup>]</sub> = x<br>&Therefore; x = R ' + ((num1 * (num2 / (num4 * 100))) / (1 - Math.pow((1 + (num2 / (num4 * 100))), (-(num3 * num4))))).toFixed(2) + '</p>' +
            '</div>';
}

function Algorithm_Annuities_P_Payment() {

    var num1 = parseFloat(document.getElementById('tab-2-text-1-of-3').value),
            num2 = parseFloat(document.getElementById('tab-2-text-2-of-3').value),
            num3 = parseFloat(document.getElementById('tab-2-text-3-of-3').value),
            num4 = parseFloat(document.getElementById('tab-2-text-4-of-3').value);

    if (isNaN(num4)) {
        num4 = 1;
    }

    document.getElementById('display-6').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Start by writing a formula</b><br>F = <sup>x[1 - (1 + <i>i</i>)<sup>-n</sup>]</sup> &frasl; <sub><i>i</i></sub></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute given values</b><br>' + num1 + ' = <sup>' + num2 + '[1 - (1 + <sup>' + num3 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)<sup>-n</sup>]</sup> &frasl; <sub>(<sup>' + num3 + '</sup> &frasl; <sub>' + num4 + ' &times; 100</sub>)</sub></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for n</b><br>' + num1 + ' &times; ' + (num3 / (num4 * 100)) + ' = ' + num2 + '[1 - ' + (1 + (num3 / (num4 * 100))) + '<sup>-n</sup>]<br>(<sup>' + (num1 * (num3 / (num4 * 100))) + '</sup> &frasl; <sub>' + num2 + '</sub>) - 1 = ' + (1 + (num3 / (num4 * 100))) + '<sup>-n</sup><br>' + (((num1 * (num3 / (num4 * 100))) / num2) - 1) + ' = ' + (1 + (num3 / (num4 * 100))) + '<sup>-n</sup><br>-n = <sup>log(' + ((1 - ((num1 * (num3 / (num4 * 100))) / num2))) + ')</sup> &frasl; <sub>log(' + ((1 + (num3 / (num4 * 100)))) + ')</sub><br>n = ' + ((Math.log(((1 - ((num1 * (num3 / (num4 * 100))) / num2))) / Math.log(((1 + (num3 / (num4 * 100)))))))) + '<br>&therefore; number of payments = ' + ((Math.log(((1 - ((num1 * (num3 / (num4 * 100))) / num2))) / Math.log(((1 + (num3 / (num4 * 100)))))))).toFixed(0) + ' in ' + (((Math.log(((1 - ((num1 * (num3 / (num4 * 100))) / num2))) / Math.log(((1 + (num3 / (num4 * 100)))))))).toFixed(0) / 12) + ' years</p>' +
            '</div>';
}

/*
 
 Annuities P End
 
 */

/*
 
 Financila Chapter End
 
 */

/*
 
 Analytical Geometry Start
 
 */
/*
 
 Gradient Start
 
 */

function Algorithm_Analytical_Gradient() {
    var num1 = parseFloat(document.getElementById('text-1').value),
            num2 = parseFloat(document.getElementById('text-2').value),
            num3 = parseFloat(document.getElementById('text-3').value),
            num4 = parseFloat(document.getElementById('text-4').value);

    document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Define your data</b><br>Y<sub>2</sub> = ' + num1 + ', Y<sub>1</sub> = ' + num2 + ', X<sub>2</sub> = ' + num3 + ', X<sub>1</sub> = ' + num4 + ';</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Sustitute your value to gradient formula</b><br>m = <sup>Y<sub>2</sub> - Y<sub>1</sub></sup> &frasl; <sub>X<sub>2</sub> - X<sub>1</sub></sub><br>m = <sup>' + num1 + '<sub>2</sub> - ' + num2 + '<sub>1</sub></sup> &frasl; <sub>' + num3 + '<sub>2</sub> - ' + num4 + '<sub>1</sub></sub><br>m = <sup>' + (num1 - num2) + '</sup> &frasl; <sub>' + (num3 - num4) + '</sub><br>&Therefore; Gradinet of a straight line : m = ' + ((num1 - num2) / (num3 - num4)) + '</p>' +
            '</div>';

}
/*
 
 Gradient End
 
 */
/*
 
 Straight line equation Start
 
 */

function Algorithm_Ananlytic_Equation_First() {
    var num1 = parseFloat(document.getElementById('text-1-of-1').value),
            num2 = parseFloat(document.getElementById('text-2-of-1').value),
            num3 = parseFloat(document.getElementById('text-3-of-1').value);

    document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Define your data</b><br>m = ' + num1 + ', x-value = ' + num2 + ', y-value = ' + num3 + ';</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Substitute the value of gradient you are given</b><br>y - y<sub>1</sub> = m(x - x<sub>1</sub>)<br>y - y<sub>1</sub> = ' + num1 + '(x - x<sub>1</sub>)</p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Substitute x and y values you are given to the equation</b><br>y - ' + num3 + ' = ' + num1 + '(x - ' + num2 + ')<br>y - ' + num3 + ' = ' + num1 + 'x - ' + (num1 * num2) + '<br>y = ' + num1 + 'x - ' + (num1 * num2) + ' + ' + num3 + '<br>y = ' + num1 + 'x - ' + ((num1 * num2) - num3) + '<br>&Therefore; The equation of the straight line is y = ' + num1 + 'x - ' + ((num1 * num2) - num3) + '</p>' +
            '</div>';

}


function Algorithm_Ananlytic_Equation_Second() {
    var num1 = parseFloat(document.getElementById('text-1-of-2').value),
            num2 = parseFloat(document.getElementById('text-2-of-2').value),
            num3 = parseFloat(document.getElementById('text-3-of-2').value),
            num4 = parseFloat(document.getElementById('text-4-of-2').value);

    document.getElementById('display-2').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Define your data</b><br>Y<sub>2</sub> = ' + num1 + ', Y<sub>1</sub> = ' + num2 + ', X<sub>2</sub> = ' + num3 + ', X<sub>1</sub> = ' + num4 + ';</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Sustitute your value to gradient formula</b><br>m = <sup>Y<sub>2</sub> - Y<sub>1</sub></sup> &frasl; <sub>X<sub>2</sub> - X<sub>1</sub></sub><br>m = <sup>' + num1 + '<sub>2</sub> - ' + num2 + '<sub>1</sub></sup> &frasl; <sub>' + num3 + '<sub>2</sub> - ' + num4 + '<sub>1</sub></sub><br>m = <sup>' + (num1 - num2) + '</sup> &frasl; <sub>' + (num3 - num4) + '</sub><br>m = ' + ((num1 - num2) / (num3 - num4)) + '</p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Since you have gradient use straight line equation<br>to find the equation of the line</b><br>y - y<sub>1</sub> = m(x - x<sub>1</sub>)<br>y - y<sub>1</sub> = ' + ((num1 - num2) / (num3 - num4)) + '(x - x<sub>1</sub>)</p>' +
            '<p class="text-right"><span class="badge">Step 4</span><br><b>Substitute any x and y values you are given to the equation</b><br>y - ' + num2 + ' = ' + ((num1 - num2) / (num3 - num4)) + '(x - ' + num4 + ')<br>y - ' + num2 + ' = ' + ((num1 - num2) / (num3 - num4)) + 'x - ' + (((num1 - num2) / (num3 - num4)) * num4) + '<br>y = ' + ((num1 - num2) / (num3 - num4)) + 'x - ' + (((num1 - num2) / (num3 - num4)) * num4) + ' + ' + num2 + '<br>y = ' + ((num1 - num2) / (num3 - num4)) + 'x - ' + ((((num1 - num2) / (num3 - num4)) * num4) - num2) + '<br>&Therefore; The equation of the straight line is y = ' + ((num1 - num2) / (num3 - num4)) + 'x - ' + ((((num1 - num2) / (num3 - num4)) * num4) - num2) + '</p>' +
            '</div>';

}
/*
 
 Straight line equation End
 
 */
/*
 
 Midpoint Start
 
 */
function Algorithm_Midpoint_Coordinates() {
    var num1 = parseFloat(document.getElementById('text-1').value),
            num2 = parseFloat(document.getElementById('text-2').value),
            num3 = parseFloat(document.getElementById('text-3').value),
            num4 = parseFloat(document.getElementById('text-4').value);

    document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Define your data</b><br>X<sub>1</sub> = ' + num1 + ', X<sub>2</sub> = ' + num2 + ', Y<sub>1</sub> = ' + num3 + ', Y<sub>2</sub> = ' + num4 + ';</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Write your formula then substitute</b><br>Midpoint = (<sup>x<sub>1</sub> + x<sub>2</sub></sup> &frasl; <sub>2</sub> ; <sup>y<sub>1</sub> + y<sub>2</sub></sup> &frasl; <sub>2</sub>)<br>Midpoint = (<sup>' + num1 + ' + ' + num2 + '</sup> &frasl; <sub>2</sub> ; <sup>' + num3 + ' + ' + num4 + '</sup> &frasl; <sub>2</sub>)</p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve to find the coordinates of Midpoint</b><br>Midpoint = (<sup>' + (num1 + num2) + '</sup> &frasl; <sub>2</sub> ; <sup>' + (num3 + num4) + '</sup> &frasl; <sub>2</sub>)<br>&Therefore; There coordinates of Midpoint are = (' + ((num1 + num2) / 2) + ' ; ' + ((num3 + num4) / 2) + ')</p>' +
            '</div>';

}

function Algorithm_Midpoint_First_tab() {
    var num1 = parseFloat(document.getElementById('tab-1-text-1').value),
            num2 = parseFloat(document.getElementById('tab-1-text-2').value),
            num3 = parseFloat(document.getElementById('tab-1-text-3').value),
            num4 = parseFloat(document.getElementById('tab-1-text-4').value);

    document.getElementById('display-2').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Define your data</b><br>Midpoint Coordinates<br>X = ' + num1 + ', Y = ' + num2 + ';<br>One endpoint coordinates<br> X = ' + num3 + ', Y = ' + num4 + ';</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Write your formula then substitute</b><br>Midpoint = (<sup>x<sub>1</sub> + x<sub>2</sub></sup> &frasl; <sub>2</sub> ; <sup>y<sub>1</sub> + y<sub>2</sub></sup> &frasl; <sub>2</sub>)<br>(' + num1 + '; ' + num2 + ') = (<sup>' + num3 + ' + x</sup> &frasl; <sub>2</sub> ; <sup>' + num4 + ' + y</sup> &frasl; <sub>2</sub>)</p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for x and y</b><br>' + num1 + ' = <sup>' + num3 + ' + x</sup> &frasl; <sub>2</sub> and ' + num2 + ' = <sup>' + num4 + ' + y</sup> &frasl; <sub>2</sub><br>' + (num1 * 2) + ' = ' + num3 + ' + x and ' + (num2 * 2) + ' = ' + num4 + ' + y<br>' + (num1 * 2) + ' - ' + num3 + ' = x and ' + (num2 * 2) + ' - ' + num4 + ' = y<br>' + ((num1 * 2) - num3) + ' = x and ' + ((num2 * 2) - num4) + ' = y<br>&Therefore; The coordinates of endpoint are (' + ((num1 * 2) - num3) + '; ' + ((num2 * 2) - num4) + ')</p>' +
            '</div>';

}
/*
 
 Midpoint End
 
 */
/*
 
 Distance Start 
 
 */
function Algorithm_Distance_Unit() {
    var num1 = parseFloat(document.getElementById('text-1').value),
            num2 = parseFloat(document.getElementById('text-2').value),
            num3 = parseFloat(document.getElementById('text-3').value),
            num4 = parseFloat(document.getElementById('text-4').value);

    document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>Define your data</b><br>X<sub>1</sub> = ' + num1 + ', X<sub>2</sub> = ' + num2 + ', Y<sub>1</sub> = ' + num3 + ', Y<sub>2</sub> = ' + num4 + ';</p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>Write the formula then substitute given values</b><br>Length = <b>&radic;</b><span style="border-top:solid 1px;">(X<sub>2</sub> - X<sub>1</sub>)<sup>2</sup> &#43; (Y<sub>2</sub> - Y<sub>1</sub>)<sup>2</sup></span><br>Length = <b>&radic;</b><span style="border-top:solid 1px;">(' + num2 + ' - ' + num1 + ')<sup>2</sup> &#43; (' + num4 + ' - ' + num3 + ')<sup>2</sup></span></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Calculate to find value of length</b><br>Length = <b>&radic;</b><span style="border-top:solid 1px;">(' + (num2 - num1) + ')<sup>2</sup> &#43; (' + (num4 - num3) + ')<sup>2</sup></span><br>Length = <b>&radic;</b><span style="border-top:solid 1px;">' + Math.pow((num2 - num1), 2) + ' &#43; ' + Math.pow((num4 - num3), 2) + '</span><br>Length = <b>&radic;</b><span style="text-decoration:overline;">' + (Math.pow((num2 - num1), 2) + Math.pow((num4 - num3), 2)) + '</span><br>Length = ' + Math.sqrt((Math.pow((num2 - num1), 2) + Math.pow((num4 - num3), 2))) + '<br>&Therefore; The length is ' + Math.sqrt((Math.pow((num2 - num1), 2) + Math.pow((num4 - num3), 2))) + ' units</p>' +
            '</div>';

}


/*
 
 Distance End 
 
 */
/*
 
 Inclination Start 
 
 */
function Algorithm_Analytical_Inclination() {
    var num1 = parseFloat(document.getElementById('text-1').value),
            num2 = parseFloat(document.getElementById('text-2').value),
            num3 = parseFloat(document.getElementById('text-3').value),
            num4 = parseFloat(document.getElementById('text-4').value);

    if (Math.tan((((num1 - num2) / (num3 - num4)) * Math.PI) / 180) < 0) {

        document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
                '<p class="text-center">Solution</p>' +
                '<p class="text-left"><span class="badge">Step 1</span><br><b>Define your data</b><br>Y<sub>2</sub> = ' + num1 + ', Y<sub>1</sub> = ' + num2 + ', X<sub>2</sub> = ' + num3 + ', X<sub>1</sub> = ' + num4 + ';</p>' +
                '<p class="text-right"><span class="badge">Step 2</span><br><b>Write a formula then substitute</b><br>tan &Theta; = <sup>Y<sub>2</sub> - Y<sub>1</sub></sup> &frasl; <sub>X<sub>2</sub> - X<sub>1</sub></sub><br>tan &Theta; = <sup>' + num1 + ' - ' + num2 + '</sup> &frasl; <sub>' + num3 + ' - ' + num4 + '</sub></p>' +
                '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for &Theta;</b><br>tan &Theta; = <sup>' + (num1 - num2) + '</sup> &frasl; <sub>' + (num3 - num4) + '</sub><br>tan &Theta; = ' + ((num1 - num2) / (num3 - num4)) + '<br>&Theta; = tan<sup>-</sup>(' + ((num1 - num2) / (num3 - num4)) + ')<br>&Theta; = ' + Math.tan((((num1 - num2) / (num3 - num4)) * Math.PI) / 180) + ' + 180<br>&Therefore; &Theta; = ' + (Math.tan((((num1 - num2) / (num3 - num4)) * Math.PI) / 180) + 180).toFixed(2) + '</p>' +
                '</div>';

    } else {

        document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
                '<p class="text-center">Solution</p>' +
                '<p class="text-left"><span class="badge">Step 1</span><br><b>Define your data</b><br>Y<sub>2</sub> = ' + num1 + ', Y<sub>1</sub> = ' + num2 + ', X<sub>2</sub> = ' + num3 + ', X<sub>1</sub> = ' + num4 + ';</p>' +
                '<p class="text-right"><span class="badge">Step 2</span><br><b>Write a formula then substitute</b><br>tan &Theta; = <sup>Y<sub>2</sub> - Y<sub>1</sub></sup> &frasl; <sub>X<sub>2</sub> - X<sub>1</sub></sub><br>tan &Theta; = <sup>' + num1 + ' - ' + num2 + '</sup> &frasl; <sub>' + num3 + ' - ' + num4 + '</sub></p>' +
                '<p class="text-left"><span class="badge">Step 3</span><br><b>Solve for &Theta;</b><br>tan &Theta; = <sup>' + (num1 - num2) + '</sup> &frasl; <sub>' + (num3 - num4) + '</sub><br>tan &Theta; = ' + ((num1 - num2) / (num3 - num4)) + '<br>&Theta; = tan<sup>-</sup>(' + ((num1 - num2) / (num3 - num4)) + ')<br>&Therefore; &Theta; = ' + Math.tan((((num1 - num2) / (num3 - num4)) * Math.PI) / 180).toFixed(2) + '</p>' +
                '</div>';

    }

}


/*
 
 Inclination End 
 
 */
/*
 
 Analytical Geometry End
 
 */

/*
 
 Calculus Start
 
 */

/*
 
 Average Gradient Start
 
 */


function Algorithm_Calculus_Average_Gradient() {

    var num1 = document.getElementById('text-1').value,
            num2 = parseFloat(document.getElementById('text-2').value),
            num3 = parseFloat(document.getElementById('text-3').value),
            Right_side = num1,
            num1_substitute_x_1 = num1,
            str1 = "(" + num2 + ")",
            num1_substitute_x_1 = num1.replace(/x/g, str1),
            num1_substitute_x_1_parse = algebra.parse(num1_substitute_x_1),
            num1_substitute_x_2 = num1,
            str2 = "(" + num3 + ")",
            num1_substitute_x_2 = num1.replace(/x/g, str2),
            num1_substitute_x_2_parse = algebra.parse(num1_substitute_x_2),
            y_2 = num1_substitute_x_1_parse,
            y_1 = num1_substitute_x_2_parse,
            x_2 = num2,
            x_1 = num3,
            str3 = ((y_2 - y_1) / (x_2 - x_1));

    document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>At x = ' + num2 + '</b><br><span class="katex" id="display1"></span><br><span class="katex" id="display2"></span><br><span class="katex" id="display3"></span></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>At x = ' + num3 + '</b><br><span class="katex" id="display4"></span><br><span class="katex" id="display5"></span><br><span class="katex" id="display6"></span></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Find the gradients using the coordinates given and found</b><br>m = <sup>y<sub>2</sub> - y<sub>1</sub></sup> &frasl; <sub>x<sub>2</sub> - x1<sub></sub></sub><br>m = <sup>(' + y_2 + ') - (' + y_1 + ')</sup> &frasl; <sub>(' + x_2 + ') - (' + x_1 + ')</sub><br><span class="katex" id="display7"></span></p>' +
            '</div>';

    katex.render("f(x) = " + algebra.toTex(Right_side), display1);
    katex.render("y = " + algebra.toTex(num1_substitute_x_1), display2);
    katex.render("y = " + algebra.toTex(num1_substitute_x_1_parse), display3);
    katex.render("f(x) = " + algebra.toTex(Right_side), display4);
    katex.render("y = " + algebra.toTex(num1_substitute_x_2), display5);
    katex.render("y = " + algebra.toTex(num1_substitute_x_2_parse), display6);
    katex.render("m = " + algebra.toTex(str3), display7);

}

/*
 
 Average Gradient End
 
 */
/*
 
 Derivative Start
 
 */
function Algorithm_Calculus_Derivative() {

    var num1 = document.getElementById('text-1').value,
            step1 = num1,
            step1 = num1.replace(/x/g, "(x + h)"),
            step2 = algebra.parse(step1),
            step3 = "(f(x+h) - f(x))",
            step3 = step3.replace("f(x+h)", step2),
            step3 = step3.replace("f(x)", "(" + num1 + ")"),
            step4 = algebra.parse(step3);

    document.getElementById('display-1').innerHTML = '<div class="alert alert-success">' +
            '<p class="text-center">Solution</p>' +
            '<p class="text-left"><span class="badge">Step 1</span><br><b>substitute with (x + h) where there is x</b><br><span class="katex" id="display1"></span><br><span class="katex" id="display2"></span><br><span class="katex" id="display3"></span></p>' +
            '<p class="text-right"><span class="badge">Step 2</span><br><b>substitute with with the answer you got on the equation of <spam class="katex" id="formula"></span></b><br><span class="katex" id="display4"></span></p>' +
            '<p class="text-left"><span class="badge">Step 3</span><br><b>Now simplify</b><br><span class="katex" id="display5"></span></p>' +
            '</div>';

    katex.render("f(x) = " + algebra.toTex(num1), display1);
    katex.render("f(x + h) = " + algebra.toTex(step1), display2);
    katex.render("f(x + h) = " + algebra.toTex(step2), display3);
    katex.render("f'(x) = \\frac{" + step3 + "}{h}", display4);
    katex.render("f'(x) = \\frac{(" + algebra.toTex(step4) + ")}{h}", display5);
    katex.render("f'(x) = \\frac{f(x + h) - f(x)}{h}", formula);

}
/*
 
 Derivative End
 
 */
/*
 
 Calculus End
 
 */










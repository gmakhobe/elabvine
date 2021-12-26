$(window).on('load', function () {
    $('#Mathematics-Chapters').hide();
    $('#PhysicalScience-Chapters').hide();
    /*
     * Mathematics Grade 12
     */
    //Algebra Topic
    $('#algebra-topic-linear-equation').hide();
    $('#algebra-topic-quadratic-equation').hide();
    $('#algebra-topic-simultaneous-equation').hide();
    $('#algebra-back').hide();
    //End Algebra Topic
    //Sequences and series Topic
    $('#sequence-topic-arithmetic-sequence').hide();
    $('#sequence-topic-arithmetic-series').hide();
    $('#sequence-topic-quadratic-sequence').hide();
    $('#sequence-topic-geometric-sequence').hide();
    $('#sequence-topic-geometric-series').hide();
    $('#sequence-back').hide();
    //End Sequences and series Topic
    //Functions Topic
    $('#functions-topic-linear-function').hide();
    $('#functions-topic-quadratic-function').hide();
    $('#functions-topic-exponential-function').hide();
    $('#functions-topic-hyperbolic-function').hide();
    $('#functions-topic-inverse-function').hide();
    $('#functions-back').hide();
    //End Functions Topic
    //Finance Topic
    $('#financial-topic-simple-interest').hide();
    $('#financial-topic-compound-interest').hide();
    $('#financial-topic-depreciation').hide();
    $('#financial-topic-annuities').hide();
    $('#financial-topic-nominal').hide();
    $('#financial-back').hide();
    //End Finance Topic
    //Calculus Topic
    $('#calculus-topic-derivative').hide();
    $('#calculus-topic-average-gradient').hide();
    $('#calculus-back').hide();
    //End Calculus Topic
    //Analytical Topic
    $('#analytical-topic-gradient').hide();
    $('#analytical-topic-midpoint').hide();
    $('#analytical-topic-distance').hide();
    $('#analytical-topic-straight-line').hide();
    $('#analytical-topic-inclination').hide();
    $('#analytical-back').hide();
    //End Analytical Topic
    /*
     * End Mathematics Grade 12
     */
    /*
     * Physical Sciences Grade 12
     */
    //Mechanics
    $('#mechanics-topic-applied-force-accordion').hide();
    $('#mechanics-topic-friction-accordion').hide();
    $('#mechanics-topic-weight-accordion').hide();
    $('#mechanics-topic-universal-accordion').hide();
    $('#mechanics-topic-acceleration-accordion').hide();
    $('#mechanics-back').hide();
    //Momentum
    $('#momentum-topic-momentum').hide();
    $('#momentum-topic-change').hide();
    $('#momentum-topic-impulse').hide();
    $('#momentum-topic-linear').hide();
    $('#momentum-back').hide();
    //Projectile
    $('#projectile-topic-projectile-section-1').hide();
    $('#projectile-topic-projectile-section-2').hide();
    $('#projectile-topic-projectile-section-3').hide();
    $('#projectile-topic-projectile-section-4').hide();
    $('#projectile-back').hide();
    //Work
    $('#work-topic-work-section-1').hide();
    $('#work-topic-work-section-2').hide();
    $('#work-topic-work-section-3').hide();
    $('#work-topic-work-section-4').hide();
    $('#work-back').hide();
    //Doppler
    $('#doppler-topic-doppler-section-1').hide();
    $('#doppler-topic-doppler-section-2').hide();
    $('#doppler-back').hide();
    //Electrostatics
    $('#electrostatics-topic-electrostatics-section-1').hide();
    $('#electrostatics-topic-electrostatics-section-2').hide();
    $('#electrostatics-topic-electrostatics-section-3').hide();
    $('#electrostatics-topic-electrostatics-section-4').hide();
    $('#electrostatics-back').hide();
    /*
     * End Physical Sciences Grade 12
     */
});
//Hiding Jumbotron content

        /*
         * Mathematics Grade 12
         */
        //Algebra Topic
        //Hide Algebra Topic and show linear equation problem solver
        $("#btn-algebra-topic-linear-equation").on('click', function (event) {
$('#algebra-topic-chapters').hide();
        $("#algebra-topic-linear-equation").show();
        $("#algebra-back").show();
});
        //Hide Algebra Topic and show quadratic equation problem solver
        $("#btn-algebra-topic-quadratic-equation").on('click', function (event) {
$('#algebra-topic-chapters').hide();
        $("#algebra-topic-quadratic-equation").show();
        $("#algebra-back").show();
});
        //Hide Algebra Topic and show simultaneous equation problem solver
        $("#btn-algebra-topic-simultaneous-equation").on('click', function (event) {
$('#algebra-topic-chapters').hide();
        $("#algebra-topic-simultaneous-equation").show();
        $("#algebra-back").show();
});
        //Hide problem solvers and show algebra topic
        $("#algebra-back").on('click', function (event) {
$('#algebra-topic-chapters').show();
        $('#algebra-topic-linear-equation').hide();
        $('#algebra-topic-quadratic-equation').hide();
        $('#algebra-topic-simultaneous-equation').hide();
        $("#algebra-back").hide();
});
        //End Algebra Topic
        //Sequence Topic
        //Hide Sequence Topic and show arithmetic sequence
        $("#btn-sequence-topic-arithmetic-sequence").on('click', function (event) {
$('#sequence-topic-chapters').hide();
        $("#sequence-topic-arithmetic-sequence").show();
        $("#sequence-back").show();
});
        //Hide Sequence Topic and show arithmetic series
        $("#btn-sequence-topic-arithmetic-series").on('click', function (event) {
$('#sequence-topic-chapters').hide();
        $("#sequence-topic-arithmetic-series").show();
        $("#sequence-back").show();
});
        //Hide Sequence Topic and show quadratic sequrence
        $("#btn-sequence-topic-quadratic-sequence").on('click', function (event) {
$('#sequence-topic-chapters').hide();
        $("#sequence-topic-quadratic-sequence").show();
        $("#sequence-back").show();
});
        //Hide Sequence Topic and show geometric series
        $("#btn-sequence-topic-geometric-sequence").on('click', function (event) {
$('#sequence-topic-chapters').hide();
        $("#sequence-topic-geometric-sequence").show();
        $("#sequence-back").show();
});
        //Hide Sequence Topic and show geometric series
        $("#btn-sequence-topic-geometric-series").on('click', function (event) {
$('#sequence-topic-chapters').hide();
        $("#sequence-topic-geometric-series").show();
        $("#sequence-back").show();
});
        //Hide problem solvers and show sequence topic
        $("#sequence-back").on('click', function (event) {
$('#sequence-topic-chapters').show();
        $('#sequence-topic-geometric-series').hide();
        $('#sequence-topic-geometric-sequence').hide();
        $('#sequence-topic-quadratic-sequence').hide();
        $('#sequence-topic-arithmetic-series').hide();
        $('#sequence-topic-arithmetic-sequence').hide();
        $("#sequence-back").hide();
});
        //End Sequence Topic
        //Functions Topic
        //Hide Functions Topic and show linear function
        $("#btn-functions-topic-linear-function").on('click', function (event) {
$('#functions-topic-chapters').hide();
        $("#functions-topic-linear-function").show();
        $("#functions-back").show();
});
        //Hide Functions Topic and show quadratic function
        $("#btn-functions-topic-quadratic-function").on('click', function (event) {
$('#functions-topic-chapters').hide();
        $("#functions-topic-quadratic-function").show();
        $("#functions-back").show();
});
        //Hide Functions Topic and show exponencial function
        $("#btn-functions-topic-exponential-function").on('click', function (event) {
$('#functions-topic-chapters').hide();
        $("#functions-topic-exponential-function").show();
        $("#functions-back").show();
});
        //Hide Functions Topic and show hyperbolic function
        $("#btn-functions-topic-hyperbolic-function").on('click', function (event) {
$('#functions-topic-chapters').hide();
        $("#functions-topic-hyperbolic-function").show();
        $("#functions-back").show();
});
        //Hide Functions Topic and show inverse function
        $("#btn-functions-topic-inverse-function").on('click', function (event) {
$('#functions-topic-chapters').hide();
        $("#functions-topic-inverse-function").show();
        $("#functions-back").show();
});
        //Hide problem solvers and show functions topic
        $("#functions-back").on('click', function (event) {
$('#functions-topic-chapters').show();
        $('#functions-topic-inverse-function').hide();
        $('#functions-topic-hyperbolic-function').hide();
        $('#functions-topic-exponential-function').hide();
        $('#functions-topic-quadratic-function').hide();
        $('#functions-topic-linear-function').hide();
        $("#functions-back").hide();
});
        //End Functions Topic
        //Finance Topic
        //Hide Finance Topic and show simple interest
        $("#btn-financial-topic-simple-interest").on('click', function (event) {
$('#financial-topic-chapters').hide();
        $("#financial-topic-simple-interest").show();
        $("#financial-back").show();
});
        //Hide Finance Topic and show compound interest
        $("#btn-financial-topic-compound-interest").on('click', function (event) {
$('#financial-topic-chapters').hide();
        $("#financial-topic-compound-interest").show();
        $("#financial-back").show();
});
        //Hide Finance Topic and show depreciation
        $("#btn-financial-topic-depreciation").on('click', function (event) {
$('#financial-topic-chapters').hide();
        $("#financial-topic-depreciation").show();
        $("#financial-back").show();
});
        //Hide Finance Topic and show nominal
        $("#btn-financial-topic-nominal").on('click', function (event) {
$('#financial-topic-chapters').hide();
        $("#financial-topic-nominal").show();
        $("#financial-back").show();
});
        //Hide Finance Topic and show annuities
        $("#btn-financial-topic-annuities").on('click', function (event) {
$('#financial-topic-chapters').hide();
        $("#financial-topic-annuities").show();
        $("#financial-back").show();
});
        //Hide problem solvers and show financial topic
        $("#financial-back").on('click', function (event) {
$('#financial-topic-chapters').show();
        $('#financial-topic-simple-interest').hide();
        $('#financial-topic-compound-interest').hide();
        $('#financial-topic-depreciation').hide();
        $('#financial-topic-nominal').hide();
        $('#financial-topic-annuities').hide();
        $("#financial-back").hide();
});
        //End Finance Topic
        //Calculus Topic
        //Hide Calculus Topic and show derivative
        $("#btn-calculus-topic-derivative").on('click', function (event) {
$('#calculus-topic-chapters').hide();
        $("#calculus-topic-derivative").show();
        $("#calculus-back").show();
});
        //Hide Calculus Topic and show derivative
        $("#btn-calculus-topic-average-gradient").on('click', function (event) {
$('#calculus-topic-chapters').hide();
        $("#calculus-topic-average-gradient").show();
        $("#calculus-back").show();
});
        //Hide problem solvers and show financial topic
        $("#calculus-back").on('click', function (event) {
$('#calculus-topic-chapters').show();
        $('#calculus-topic-derivative').hide();
        $('#calculus-topic-average-gradient').hide();
        $("#calculus-back").hide();
});
        //End Calculus
        //Calculus Topic
        //Hide Analytical Topic and show gradient
        $("#btn-analytical-topic-gradient").on('click', function (event) {
$('#analytical-topic-chapters').hide();
        $("#analytical-topic-gradient").show();
        $("#analytical-back").show();
});
        //Hide Analytical Topic and show midpoint
        $("#btn-analytical-topic-midpoint").on('click', function (event) {
$('#analytical-topic-chapters').hide();
        $("#analytical-topic-midpoint").show();
        $("#analytical-back").show();
});
        //Hide Analytical Topic and show straight line
        $("#btn-analytical-topic-straight-line").on('click', function (event) {
$('#analytical-topic-chapters').hide();
        $("#analytical-topic-straight-line").show();
        $("#analytical-back").show();
});
        //Hide Analytical Topic and show distance
        $("#btn-analytical-topic-distance").on('click', function (event) {
$('#analytical-topic-chapters').hide();
        $("#analytical-topic-distance").show();
        $("#analytical-back").show();
});
        //Hide Analytical Topic and show inclination
        $("#btn-analytical-topic-inclination").on('click', function (event) {
$("#analytical-topic-chapters").hide();
        $("#analytical-topic-inclination").show();
        $("#analytical-back").show();
});
        //Hide problem solvers and show financial topic
        $("#analytical-back").on('click', function (event) {
$('#analytical-topic-chapters').show();
        $('#analytical-topic-distance').hide();
        $('#analytical-topic-gradient').hide();
        $('#analytical-topic-straight-line').hide();
        $('#analytical-topic-midpoint').hide();
        $('#analytical-topic-inclination').hide();
        $("#analytical-back").hide();
});
        /*
         *End Mathematics Grade 12
         */
        /*
         *Physical Sciences Grade 12
         */
        //Mechanics Topic
        //Hide problem solvers and show applied force topic
        $("#btn-mechanics-topic-applied-force").on('click', function (event) {
$('#mechanics-topic-chapters').hide();
        $("#mechanics-topic-applied-force-accordion").show();
        $("#mechanics-back").show();
});
        //Hide problem solvers and show friction topic
        $("#btn-mechanics-topic-friction").on('click', function (event) {
$('#mechanics-topic-chapters').hide();
        $("#mechanics-topic-friction-accordion").show();
        $("#mechanics-back").show();
});
        //Hide problem solvers and show weight topic
        $("#btn-mechanics-topic-weight").on('click', function (event) {
$('#mechanics-topic-chapters').hide();
        $("#mechanics-topic-weight-accordion").show();
        $("#mechanics-back").show();
});
        //Hide problem solvers and show universal topic
        $("#btn-mechanics-topic-universal").on('click', function (event) {
$('#mechanics-topic-chapters').hide();
        $("#mechanics-topic-universal-accordion").show();
        $("#mechanics-back").show();
});
        //Hide problem solvers and show acceleration topic
        $("#btn-mechanics-topic-acceleration").on('click', function (event) {
$('#mechanics-topic-chapters').hide();
        $("#mechanics-topic-acceleration-accordion").show();
        $("#mechanics-back").show();
});
        //Hide problem solvers and show mechanics topic
        $("#mechanics-back").on('click', function (event) {
$('#mechanics-topic-chapters').show();
        $('#mechanics-topic-applied-force-accordion').hide();
        $('#mechanics-topic-friction-accordion').hide();
        $('#mechanics-topic-weight-accordion').hide();
        $('#mechanics-topic-universal-accordion').hide();
        $('#mechanics-topic-acceleration-accordion').hide();
        $("#mechanics-back").hide();
});
        //Momentum Topic
        //Hide problem solvers and show momentum topic
        $("#btn-momentum-topic-momentum").on('click', function (event) {
$('#momentum-topic-chapters').hide();
        $("#momentum-topic-momentum").show();
        $("#momentum-back").show();
});
        //Hide problem solvers and show change topic
        $("#btn-momentum-topic-change").on('click', function (event) {
$('#momentum-topic-chapters').hide();
        $("#momentum-topic-change").show();
        $("#momentum-back").show();
});
        //Hide problem solvers and show impulse topic
        $("#btn-momentum-topic-impulse").on('click', function (event) {
$('#momentum-topic-chapters').hide();
        $("#momentum-topic-impulse").show();
        $("#momentum-back").show();
});
        //Hide problem solvers and show linear topic
        $("#btn-momentum-topic-linear").on('click', function (event) {
$('#momentum-topic-chapters').hide();
        $("#momentum-topic-linear").show();
        $("#momentum-back").show();
});
        //Hide problem solvers and show mechanics topic
        $("#momentum-back").on('click', function (event) {
$('#momentum-topic-chapters').show();
        $('#momentum-topic-momentum').hide();
        $('#momentum-topic-change').hide();
        $('#momentum-topic-linear').hide();
        $('#momentum-topic-impulse').hide();
        $("#momentum-back").hide();
});
        //Projectile Topic
        //Hide problem solvers and show projectile section topic
        $("#btn-projectile-topic-projectile-section-1").on('click', function (event) {
$('#projectile-topic-chapters').hide();
        $("#projectile-topic-projectile-section-1").show();
        $("#projectile-back").show();
});
        //Hide problem solvers and show projectile section topic
        $("#btn-projectile-topic-projectile-section-2").on('click', function (event) {
$('#projectile-topic-chapters').hide();
        $("#projectile-topic-projectile-section-2").show();
        $("#projectile-back").show();
});
        //Hide problem solvers and show projectile section topic
        $("#btn-projectile-topic-projectile-section-3").on('click', function (event) {
$('#projectile-topic-chapters').hide();
        $("#projectile-topic-projectile-section-3").show();
        $("#projectile-back").show();
});
        //Hide problem solvers and show projectile section topic
        $("#btn-projectile-topic-projectile-section-4").on('click', function (event) {
$('#projectile-topic-chapters').hide();
        $("#projectile-topic-projectile-section-4").show();
        $("#projectile-back").show();
});
        //Hide problem solvers and show projectile topic
        $("#projectile-back").on('click', function (event) {
$('#projectile-topic-chapters').show();
        $('#projectile-topic-projectile-section-1').hide();
        $('#projectile-topic-projectile-section-2').hide();
        $('#projectile-topic-projectile-section-3').hide();
        $('#projectile-topic-projectile-section-4').hide();
        $("#projectile-back").hide();
});
        //Work Topic
        //Hide problem solvers and show work section topic
        $("#btn-work-topic-work-section-1").on('click', function (event) {
$('#work-topic-chapters').hide();
        $("#work-topic-work-section-1").show();
        $("#work-back").show();
});
        //Hide problem solvers and show work section topic
        $("#btn-work-topic-work-section-2").on('click', function (event) {
$('#work-topic-chapters').hide();
        $("#work-topic-work-section-2").show();
        $("#work-back").show();
});
        //Hide problem solvers and show work section topic
        $("#btn-work-topic-work-section-3").on('click', function (event) {
$('#work-topic-chapters').hide();
        $("#work-topic-work-section-3").show();
        $("#work-back").show();
});
        //Hide problem solvers and show work section topic
        $("#btn-work-topic-work-section-4").on('click', function (event) {
$('#work-topic-chapters').hide();
        $("#work-topic-work-section-4").show();
        $("#work-back").show();
});
        //Hide problem solvers and show projectile topic
        $("#work-back").on('click', function (event) {
$('#work-topic-chapters').show();
        $('#work-topic-work-section-1').hide();
        $('#work-topic-work-section-2').hide();
        $('#work-topic-work-section-3').hide();
        $('#work-topic-work-section-4').hide();
        $("#work-back").hide();
});
        //Doppler Topic
        //Hide problem solvers and show doppler section topic
        $("#btn-doppler-topic-doppler-section-1").on('click', function (event) {
$('#doppler-topic-chapters').hide();
        $("#doppler-topic-doppler-section-1").show();
        $("#doppler-back").show();
});
        //Hide problem solvers and show doppler section topic
        $("#btn-doppler-topic-doppler-section-2").on('click', function (event) {
$('#doppler-topic-chapters').hide();
        $("#doppler-topic-doppler-section-2").show();
        $("#doppler-back").show();
});
        //Hide problem solvers and show projectile topic
        $("#doppler-back").on('click', function (event) {
$('#doppler-topic-chapters').show();
        $('#doppler-topic-doppler-section-1').hide();
        $('#doppler-topic-doppler-section-2').hide();
        $("#doppler-back").hide();
});
        //Electrostatics Topic
        //Hide problem solvers and show electrostatics section topic
        $("#btn-electrostatics-topic-electrostatics-section-1").on('click', function (event) {
$('#electrostatics-topic-chapters').hide();
        $("#electrostatics-topic-electrostatics-section-1").show();
        $("#electrostatics-back").show();
});
        //Hide problem solvers and show electrostatics section topic
        $("#btn-electrostatics-topic-electrostatics-section-2").on('click', function (event) {
$('#electrostatics-topic-chapters').hide();
        $("#electrostatics-topic-electrostatics-section-2").show();
        $("#electrostatics-back").show();
});
        //Hide problem solvers and show electrostatics section topic
        $("#btn-electrostatics-topic-electrostatics-section-3").on('click', function (event) {
$('#electrostatics-topic-chapters').hide();
        $("#electrostatics-topic-electrostatics-section-3").show();
        $("#electrostatics-back").show();
});
        //Hide problem solvers and show electrostatics section topic
        $("#btn-electrostatics-topic-electrostatics-section-4").on('click', function (event) {
$('#electrostatics-topic-chapters').hide();
        $("#electrostatics-topic-electrostatics-section-4").show();
        $("#electrostatics-back").show();
});
        //Hide problem solvers and show projectile topic
        $("#electrostatics-back").on('click', function (event) {
$('#electrostatics-topic-chapters').show();
        $('#electrostatics-topic-electrostatics-section-1').hide();
        $('#electrostatics-topic-electrostatics-section-2').hide();
        $('#electrostatics-topic-electrostatics-section-3').hide();
        $('#electrostatics-topic-electrostatics-section-4').hide();
        $("#electrostatics-back").hide();
});
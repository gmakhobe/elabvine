<!--Mathematics Problem Solver-->
<!--Algebra Topic-->
<div class="modal fade" id="modal-mathematics-grade-12-algebra" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title text-center" ><strong><i class="glyphicon glyphicon-th-large"></i></strong> Algebra</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body pre-scrollable">
                <!--Algebra Topic Chapters-->
                <div id="algebra-topic-chapters">
                    <ul class="list-group">
                        <li class="list-group-item" id="btn-algebra-topic-linear-equation">Linear Equation</li>
                        <li class="list-group-item" id="btn-algebra-topic-quadratic-equation">Quadratic Equation</li>
                        <li class="list-group-item" id="btn-algebra-topic-simultaneous-equation">Simultaneous Equation</li>
                    </ul>
                </div>
                <!--End Algebra Topic Chapters-->
                <!--Algebra Problem Solvers-->
                <div id="algebra-topic-problem-solvers">
                    <div id="algebra-topic-linear-equation">
                        <h4 class="text-center">Find A Solution For Linear Equation</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="algebra-topic-linear-text-1" placeholder="2x + 4" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Left Side</span>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="algebra-topic-linear-text-2" placeholder="x + 5" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Right Side</span>
                                        </div>
                                    </div>
                                    <br>
                                    <div id="algebra-topic-linear-display">
                                        
                                    </div>
                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_algebra_topic_linear_equation();">Solution</button></center>
                            </div>
                        </div>
                    </div>
                    <div id="algebra-topic-quadratic-equation">
                        <h4 class="text-center">Find A Solution For Quadratic Equation</h4>
                        <form id="myForm">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="algebra-topic-quadratic-text-1" placeholder="2x^2 - 4x" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">Left Side</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="algebra-topic-quadratic-text-2" placeholder="2" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">Right Side</span>
                                </div>
                            </div>
                            <br>
                            <div id="algebra-topic-quadratic-display">
                                <div class="alert alert-info text-center">
                                    Use <b>^</b> symbol to carry exponent : e.g. x^2
                                </div>
                            </div>
                            <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_algebra_topic_quadratic();">Solution</button></center>
                        </form>
                    </div>
                    <div id="algebra-topic-simultaneous-equation">
                        <h4 class="text-center">Find A Solution For Simultaneous Equation</h4>
                        <form id="myForm">
                            <p class="text-info text-center">Equation 1</p>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="algebra-topic-simultaneous-text-1" placeholder="2x + y" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">Left Side</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="algebra-topic-simultaneous-text-2" placeholder="7" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">Right Side</span>
                                </div>
                            </div>
                            <p class="text-info text-center">Equation 2</p>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="algebra-topic-simultaneous-text-3" placeholder="3x - y" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">Left Side</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="algebra-topic-simultaneous-text-4" placeholder="8" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">Right Side</span>
                                </div>
                            </div>
                            <br>
                            <div id="algebra-topic-simultaneous-display">
                                <div class="alert alert-info text-center">
                                    <p class="text-center">Make use of x and y as variables, use <b>^</b> symbol to carry exponent : e.g. x^2</p>
                                </div>
                            </div>
                            <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_algebra_topic_simultaneous();">Calculate</button></center>
                        </form>
                    </div>
                    <!--End Algebra Problem Solvers-->
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-danger pull-left" id="algebra-back">Back</button></div>
            <!--End Algebra-->
        </div>
    </div>
</div>
<!--End Algebra Topic-->
<!--Sequences and Series-->
<div class="modal fade" id="modal-mathematics-grade-12-sequences-and-series" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title text-center" ><strong><i class="glyphicon glyphicon-th-large"></i></strong> Sequences and Series</h4> <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body pre-scrollable">
                <!--Sequence Topic Chapters-->
                <div id="sequence-topic-chapters">
                    <h3 class="text-center">Arithmetic Series</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <button id="btn-sequence-topic-arithmetic-sequence" class="btn btn-primary btn-block">Arithmetic Sequence</button>
                            <br>
                        </div>
                        <div class="col-sm-6">
                            <button id="btn-sequence-topic-arithmetic-series" class="btn btn-primary btn-block">Arithmetic Series</button>
                            <br>
                        </div>
                    </div>
                    <h3 class="text-center">Quadratic Sequence</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <button id="btn-sequence-topic-quadratic-sequence" class="btn btn-primary btn-block">Quadratic Sequence</button>
                            <br>
                        </div>
                    </div>
                    <h3 class="text-center">Geometric Sequence</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <button id="btn-sequence-topic-geometric-sequence" class="btn btn-primary btn-block">Geometric Sequence</button>
                            <br>
                        </div>
                        <div class="col-sm-6">
                            <button id="btn-sequence-topic-geometric-series" class="btn btn-primary btn-block">Geometric Series</button>
                            <br>
                        </div>
                    </div>
                </div>
                <!--End Sequence Topic Chapters-->
                <!--Sequence Problem Solvers-->
                <div id="sequence-topic-problem-solvers">
                    <!--Sequence topic arithmetic sequence-->


                    <div id="sequence-topic-arithmetic-sequence">

                        <div class="card">
                            <div class="card-header card-link" data-toggle="collapse" data-target="#collapse-sequence-topic-arithmetic-sequence-1">
                                <a class="" >
                                    Find A Solution of The Formula of The n<sup>th</sup>
                                </a>
                            </div>
                            <div id="collapse-sequence-topic-arithmetic-sequence-1" class="collapse show" data-parent="#sequence-topic-arithmetic-sequence">
                                <div class="card-body">
                                    <form id="myForm">
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" id="textbox-1-arithmetic-sequence-1" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">First Term (T<sub>1</sub>)</span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" id="textbox-2-arithmetic-sequence-1" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Second Term (T<sub>2</sub>)</span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" id="textbox-3-arithmetic-sequence-1" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Third Term (T<sub>3</sub>)</span>
                                            </div>
                                        </div>
                                        <div id="display-arithmetic-sequence-1">
                                            <div class="alert alert-info text-center">
                                                Scenario
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_sequence_topic_arithmetic_sequence_1();">Calculate</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#sequence-topic-arithmetic-sequence" href="#collapse-sequence-topic-arithmetic-sequence-2">
                                <h4 class="panel-title">
                                    Find A Solution For The value of T<sub>n</sub>
                                </h4>
                            </div>
                            <div id="collapse-sequence-topic-arithmetic-sequence-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel-body">
                                        <form id="myForm">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label>Value of a / (T<sub>1</sub>):</label>
                                                    <input type="number" class="form-control" id="textbox-1-arithmetic-sequence-2" required>
                                                    <br>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Value of d (common difference):</label>
                                                    <input type="number" class="form-control" id="textbox-2-arithmetic-sequence-2" required>
                                                    <br>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Value of n (Term number):</label>
                                                    <input type="number" class="form-control" id="textbox-3-arithmetic-sequence-2" required>
                                                    <br>
                                                </div>
                                            </div>
                                            <div id="display-arithmetic-sequence-2">
                                                <div class="alert alert-info text-center">
                                                    <p class="text-center">Scenario</p>
                                                </div>
                                            </div>
                                            <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_sequence_topic_arithmetic_sequence_2();">Calculate</button></center>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#sequence-topic-arithmetic-sequence" href="#collapse-sequence-topic-arithmetic-sequence-3">
                                <h4 class="panel-title">
                                    Find A Solution For The value of n
                                </h4>
                            </div>
                            <div id="collapse-sequence-topic-arithmetic-sequence-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form id="myForm">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>Value of a / (T<sub>1</sub>):</label>
                                                <input type="number" class="form-control" id="textbox-1-arithmetic-sequence-3" required>
                                                <br>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Value of d (common difference):</label>
                                                <input type="number" class="form-control" id="textbox-2-arithmetic-sequence-3" required>
                                                <br>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Value of T<sub>n</sub> (Term value):</label>
                                                <input type="number" class="form-control" id="textbox-3-arithmetic-sequence-3" required>
                                                <br>
                                            </div>
                                        </div>
                                        <div id="display-arithmetic-sequence-3">
                                            <div class="alert alert-info text-center">
                                                <p class="text-center">Scenario</p>
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_sequence_topic_arithmetic_sequence_3();">Calculate</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Sequence topic arithmetic sequence-->
                    <!--Sequence topic arithmetic series-->
                    <div id="sequence-topic-arithmetic-series">
                        <div class="well">
                            <h4 class="text-center">Solve By Finding Sum of A Series</h4>
                        </div>
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#sequence-topic-arithmetic-series-tab-1" data-toggle="tab">S<sub>n</sub> = <sup>n</sup> &frasl; <sub>2</sub> [2a + (n − 1) &times; d]</a></li>
                            <li><a href="#sequence-topic-arithmetic-series-tab-2" data-toggle="tab">S<sub>n</sub> = <sup>n</sup> &frasl; <sub>2</sub> (a + l)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active fade in" id="sequence-topic-arithmetic-series-tab-1">
                                <form class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>First Term (T<sub>1</sub>):</label>
                                            <input type="number" class="form-control" id="textbox-1-arithmetic-series-1" required>
                                            <br>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Second Term (T<sub>2</sub>):</label>
                                            <input type="number" class="form-control" id="textbox-2-arithmetic-series-1" required>
                                            <br>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Value of n (Term number):</label>
                                            <input type="number" class="form-control" id="textbox-3-arithmetic-series-1" required>
                                        </div>
                                    </div>
                                    <div id="display-arithmetic-series-1">
                                        <div class="alert alert-info text-center">
                                            <p class="text-center">Scenario</p>
                                        </div>
                                    </div>
                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_sequence_topic_arithmetic_series_1()">Calculate</button></center>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="sequence-topic-arithmetic-series-tab-2">
                                <form class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Value of a (First term):</label>
                                            <input type="number" class="form-control" id="textbox-1-arithmetic-series-2" required>
                                            <br>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Value of n (Term number):</label>
                                            <input type="number" class="form-control" id="textbox-2-arithmetic-series-2" required>
                                            <br>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Last Term:</label>
                                            <input type="number" class="form-control" id="textbox-3-arithmetic-series-2" required>
                                            <br>
                                        </div>
                                    </div>
                                    <div id="display-arithmetic-series-2">
                                        <div class="alert alert-info text-center">
                                            <p class="text-center">Scenario</p>
                                        </div>
                                    </div>
                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_sequence_topic_arithmetic_series_2();">Calculate</button></center>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End sequence-topic-arithmetic-series-->
                    <!--Sequence topic quadratic sequence-->
                    <div id="sequence-topic-quadratic-sequence" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#sequence-topic-quadratic-sequence" href="#collapse-sequence-topic-quadratic-sequence-1">
                                <h4 class="panel-title">
                                    Find A Solution of The Formula of The n<sup>th</sup>
                                </h4>
                            </div>
                            <div id="collapse-sequence-topic-quadratic-sequence-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form class="form-group">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label>First Term:</label>
                                                <input type="number" class="form-control" id="textbox-1-quadratic-sequence-1" required>
                                                <br>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Second Term:</label>
                                                <input type="number" class="form-control" id="textbox-2-quadratic-sequence-1" required>
                                                <br>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Third Term:</label>
                                                <input type="number" class="form-control" id="textbox-3-quadratic-sequence-1" required>
                                                <br>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Forth Term:</label>
                                                <input type="number" class="form-control" id="textbox-4-quadratic-sequence-1" required>
                                                <br>
                                            </div>
                                        </div>
                                        <div id="display-quadratic-sequence-1">
                                            <div class="alert alert-info text-center">
                                                <p class="text-center">Scenario</p>
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_sequence_topic_quadratic_sequence_1();">Calculate</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#sequence-topic-quadratic-sequence" href="#collapse-sequence-topic-quadratic-sequence-2">
                                <h4 class="panel-title">
                                    Find A Solution For The value of T<sub>n</sub>
                                </h4>
                            </div>
                            <div id="collapse-sequence-topic-quadratic-sequence-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel-body">
                                        <form id="myForm">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label>Value of a:</label>
                                                    <input type="number" class="form-control" id="textbox-1-quadratic-sequence-2" required>
                                                    <br>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Value of b:</label>
                                                    <input type="number" class="form-control" id="textbox-2-quadratic-sequence-2" required>
                                                    <br>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Value of c:</label>
                                                    <input type="number" class="form-control" id="textbox-3-quadratic-sequence-2" required>
                                                    <br>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Value of n (Number of terms):</label>
                                                    <input type="number" class="form-control" id="textbox-4-quadratic-sequence-2" required>
                                                    <br>
                                                </div>
                                            </div>
                                            <div id="display-quadratic-sequence-2">
                                                <div class="alert alert-info text-center">
                                                    <p class="text-center">Scenario</p>
                                                </div>
                                            </div>
                                            <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_sequence_topic_quadratic_sequence_2();">Calculate</button></center>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Sequence topic quadratic sequence-->
                    <!--Sequence topic geometric sequence-->
                    <div id="sequence-topic-geometric-sequence" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#sequence-topic-geometric-sequence" href="#collapse-sequence-topic-geometric-sequence-1">
                                <h4 class="panel-title">
                                    Find A Solution of The Formula of The n<sup>th</sup>
                                </h4>
                            </div>
                            <div id="collapse-sequence-topic-geometric-sequence-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form id="myForm">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>First Term (T<sub>1</sub>):</label>
                                                <input type="number" class="form-control" id="textbox-1-geometric-sequence-1" required>
                                                <br>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Second Term (T<sub>2</sub>):</label>
                                                <input type="number" class="form-control" id="textbox-2-geometric-sequence-1" required>
                                                <br>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Third Term (T<sub>3</sub>):</label>
                                                <input type="number" class="form-control" id="textbox-3-geometric-sequence-1" required>
                                                <br>
                                            </div>
                                        </div>
                                        <div id="display-geometric-sequence-1">
                                            <div class="alert alert-info text-center">
                                                <p class="text-center">Scenario</p>
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_sequence_topic_geometric_sequence_1();">Calculate</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#sequence-topic-geometric-sequence" href="#collapse-sequence-topic-geometric-sequence-2">
                                <h4 class="panel-title">
                                    Find A Solution For The value of  T<sub>n</sub>
                                </h4>
                            </div>
                            <div id="collapse-sequence-topic-geometric-sequence-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel-body">
                                        <form id="myForm">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label>Value of a (First term):</label>
                                                    <input type="number" class="form-control" id="textbox-1-geometric-sequence-2" required>
                                                    <br>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Value of r (Constant ratio):</label>
                                                    <input type="number" class="form-control" id="textbox-2-geometric-sequence-2" required>
                                                    <br>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Value of n (Term number):</label>
                                                    <input type="number" class="form-control" id="textbox-3-geometric-sequence-2" required>
                                                    <br>
                                                </div>
                                            </div>
                                            <div id="display-geometric-sequence-2">
                                                <div class="alert alert-info text-center">
                                                    <p class="text-center">Scenario</p>
                                                </div>
                                            </div>
                                            <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_sequence_topic_geometric_sequence_2();">Calculate</button></center>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#sequence-topic-geometric-sequence" href="#collapse-sequence-topic-geometric-sequence-3">
                                <h4 class="panel-title">
                                    Find A Solution For The value of n
                                </h4>
                            </div>
                            <div id="collapse-sequence-topic-geometric-sequence-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form id="myForm">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>Value of a (First term):</label>
                                                <input type="number" class="form-control" id="textbox-1-geometric-sequence-3" required>
                                                <br>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Value of r (Constant ratio):</label>
                                                <input type="number" class="form-control" id="textbox-2-geometric-sequence-3" required>
                                                <br>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Value of T<sub>n</sub> (Term value):</label>
                                                <input type="number" class="form-control" id="textbox-3-geometric-sequence-3" required>
                                                <br>
                                            </div>
                                        </div>
                                        <div id="display-geometric-sequence-3">
                                            <div class="alert alert-info text-center">
                                                <p class="text-center">Scenario</p>
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_sequence_topic_geometric_sequence_3();">Calculate</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Sequence topic geometric sequence-->
                    <!--Sequence topic geometric series-->
                    <div id="sequence-topic-geometric-series">
                        <h4 class="text-center">Solve By Finding Sum of A Series</h4>
                        <form class="form-group">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>First Term (T<sub>1</sub>):</label>
                                    <input type="number" class="form-control" id="textbox-1-geometric-series-1" required>
                                    <br>
                                </div>
                                <div class="col-sm-4">
                                    <label>Second Term (T<sub>2</sub>):</label>
                                    <input type="number" class="form-control" id="textbox-2-geometric-series-1" required>
                                    <br>
                                </div>
                                <div class="col-sm-4">
                                    <label>Value of n (Term number):</label>
                                    <input type="number" class="form-control" id="textbox-3-geometric-series-1" required>
                                </div>
                            </div>
                            <div id="display-geometric-series-1">
                                <div class="alert alert-info text-center">
                                    <p class="text-center">Scenario</p>
                                </div>
                            </div>
                            <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_sequence_topic_geometric_series_1()">Calculate</button></center>
                        </form>
                    </div>
                    <!--End Sequence topic geometric series-->
                </div>
                <!--End Sequence Problem Solvers-->
            </div>
            <div class="modal-footer"><button class="btn btn-danger pull-left" id="sequence-back">Back</button></div>
        </div>
    </div>
</div>
<!--Functions-->
<div class="modal fade" id="modal-mathematics-grade-12-functions" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title text-center" ><strong><i class="glyphicon glyphicon-th-large"></i></strong> Functions</h4>
            </div>
            <div class="modal-body pre-scrollable">
                <!--Functions Topic Chapters-->
                <div id="functions-topic-chapters">
                    <div class="row">
                        <div class="col-sm-6">
                            <button id="btn-functions-topic-linear-function" class="btn btn-primary btn-block">Linear Function</button>
                            <br>
                        </div>
                        <div class="col-sm-6">
                            <button id="btn-functions-topic-quadratic-function" class="btn btn-primary btn-block">Quadratic Function</button>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button id="btn-functions-topic-hyperbolic-function" class="btn btn-primary btn-block">Hyperbolic Function</button>
                            <br>
                        </div>
                        <div class="col-sm-6">
                            <button id="btn-functions-topic-exponential-function" class="btn btn-primary btn-block">Exponential Function</button>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button id="btn-functions-topic-inverse-function" class="btn btn-primary btn-block">Inverse Function</button>
                            <br>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </div>
                <!--End Functions Topic Chapters-->
                <!--Functions Problem Solvers-->
                <div id="functions-topic-problem-solvers">
                    <!--Functions Topic Linear Function-->
                    <div id="functions-topic-linear-function">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#functions-topic-linear-function-tab-1" data-toggle="tab">Draw Linear Function Graph</a></li>
                            <li><a href="#functions-topic-linear-function-tab-2" data-toggle="tab">Find The Equation of Linear Function Graph</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active fade in" id="functions-topic-linear-function-tab-1">
                                <form class="form-group">
                                    <label>Linear Function Equation:</label>
                                    <input type="text" class="form-control" id="textbox-1-linear-function-1" placeholder="mx + c" required><br>
                                    <div id="display-linear-function-1">
                                        <div class="alert alert-info text-center">
                                            <p class="text-center">Scenario</p>
                                        </div>
                                    </div>
                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_functions_topic_linear_function_1();">Calculate</button></center>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="functions-topic-linear-function-tab-2">
                                <form class="form-group">
                                    <p class="text-info"><b>Enter x and y intercepts</b></p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Value of x:</label>
                                            <input type="number" class="form-control" id="textbox-1-linear-function-2" required><br>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Value of y:</label>
                                            <input type="number" class="form-control" id="textbox-2-linear-function-2" required><br>
                                        </div>
                                    </div>
                                    <p class="text-info"><b>Enter given x and y coordinates</b></p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Value of x:</label>
                                            <input type="number" class="form-control" id="textbox-3-linear-function-2" required><br>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Value of y:</label>
                                            <input type="number" class="form-control" id="textbox-4-linear-function-2" required><br>
                                        </div>
                                    </div>
                                    <div id="display-linear-function-2">
                                        <div class="alert alert-info text-center">
                                            <p class="text-center">Scenario</p>
                                        </div>
                                    </div>
                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_functions_topic_linear_function_2();">Calculate</button></center>
                                </form>               
                            </div>
                        </div>
                    </div>
                    <!--End Functions Topic Linear Functions-->
                    <!--Functions Topic Quadratic Function-->
                    <div id="functions-topic-quadratic-function">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#functions-topic-quadratic-function-tab-1" data-toggle="tab">Draw Quadratic Function Graph</a></li>
                            <li><a href="#functions-topic-quadratic-function-tab-2" data-toggle="tab">Find The Equation of Quadratic Function</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active fade in" id="functions-topic-quadratic-function-tab-1">
                                <form class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Value of a:</label>
                                            <input type="number" class="form-control" id="textbox-1-quadratic-function-1" required><br>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Value of b:</label>
                                            <input type="number" class="form-control" id="textbox-2-quadratic-function-1" required><br>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Value of c:</label>
                                            <input type="number" class="form-control" id="textbox-3-quadratic-function-1" required><br>
                                        </div>
                                    </div>
                                    <div id="display-quadratic-function-1">
                                        <div class="alert alert-info text-center">
                                            <p class="text-center">Scenario</p>
                                        </div>
                                    </div>
                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_functions_topic_quadratic_function_1();">Calculate</button></center>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="functions-topic-quadratic-function-tab-2">
                                <form class="form-group">
                                    <p class="text-info"><b>Enter x-intercepts</b></p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Value of x:</label>
                                            <input type="number" class="form-control" id="textbox-1-quadratic-function-2" required><br>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Value of y:</label>
                                            <input type="number" class="form-control" id="textbox-2-quadratic-function-2" required><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Value of x:</label>
                                            <input type="number" class="form-control" id="textbox-3-quadratic-function-2" required><br>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Value of y:</label>
                                            <input type="number" class="form-control" id="textbox-4-quadratic-function-2" required><br>
                                        </div>
                                    </div>
                                    <p class="text-info"><b>Enter y-intercepts</b></p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Value of x:</label>
                                            <input type="number" class="form-control" id="textbox-5-quadratic-function-2" required><br>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Value of y:</label>
                                            <input type="number" class="form-control" id="textbox-6-quadratic-function-2" required><br>
                                        </div>
                                    </div>
                                    <div id="display-quadratic-function-2">
                                        <div class="alert alert-info text-center">
                                            <p class="text-center">Scenario</p>
                                        </div>
                                    </div>
                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="algorithm_functions_topic_quadratic_function_2()">Calculate</button></center>
                                </form>               
                            </div>
                        </div>
                    </div>
                    <!--End Functions Topic Quadratic Function-->
                    <!--Functions Topic Exponential Function-->
                    <div id="functions-topic-exponential-function">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#functions-topic-exponential-function-tab-1" data-toggle="tab">Draw Exponential Function Graph and Find Exceptional</a></li>
                            <li><a href="#functions-topic-exponential-function-tab-2" data-toggle="tab">Find The Equation of Exponential Function Graph</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active fade in" id="functions-topic-exponential-function-tab-1">
                                <form class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Enter Exponential Functions Equation:</label>
                                            <input type="text" class="form-control" id="TextBox-1-of-1" placeholder="in a form ab^(x + p)" required>
                                        </div>
                                    </div>
                                    <div id="display-1">
                                        <div class="alert alert-info text-center">
                                            <p class="text-center">Scenario</p>
                                        </div>
                                    </div>
                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Exponential_Function_Graph_Sketch();">Calculate</button></center>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="functions-topic-exponential-function-tab-2">
                                <form class="form-group">
                                    <p class="text-info"><b>Given x and y values</b></p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="TextBox-3-of-2">Value of x:</label>
                                            <input type="text" class="form-control" id="TextBox-1-of-2" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="TextBox-4-of-2">Value of y:</label>
                                            <input type="text" class="form-control" id="TextBox-2-of-2" required>
                                        </div>
                                    </div>
                                    <div id="display-2">
                                        <div class="alert alert-info text-center">
                                            <p class="text-center">Scenario</p>
                                        </div>
                                    </div>
                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Exponential_Function_Find_Equation();">Calculate</button></center>
                                </form>               
                            </div>
                        </div>
                    </div>
                    <!--End Functions Topic Exponential Function-->
                    <!--Functions Topic Inverse Function-->
                    <div id="functions-topic-inverse-function">
                        <h3 class="text-center">Inverse Functions</h3>
                        <form class="form-group">
                            <label for="TextBox-1-of-1">Determine the inverse of function and graph sketch</label>
                            <input type="text" class="form-control" id="textBox" placeholder="Function equation" required>
                            <div id="display-1">
                                <div class="alert alert-info text-center">
                                    <p class="text-center">Scenario</p>
                                </div>
                            </div>
                            <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Inverse_Functions();">Calculate</button></center>
                        </form>
                    </div>
                    <!--End Functions Topic Inverse Functions-->
                    <!--Functions Topic Hyperbolic Functions-->
                    <div id="functions-topic-hyperbolic-function">
                        <form class="form-group">
                            <label for="TextBox-1-of-1">Enter Hyperbolic Functions Equation:</label>
                            <input type="text" class="form-control" id="TextBox-1-of-1" placeholder="Hyperbolic standard" required>
                            <div id="display-1">
                                <div class="alert alert-info text-center">
                                    <p class="text-center">Scenario</p>
                                </div>
                            </div>
                            <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Hyperbolic_Function_Graph_Sketch();">Calculate</button></center>
                        </form>
                    </div>
                    <!--End Functions Topic Hyperbolic Functions-->
                </div>
                <!--End Functions Problem Solvers-->
            </div>
            <div class="modal-footer"><button class="btn btn-danger pull-left" id="functions-back">Back</button><button type="button" class="close" data-dismiss="modal">&times;</button></div>
        </div>
    </div>
</div>
<!--Financial Mathematics-->
<div class="modal fade" id="modal-mathematics-grade-12-financial-mathematics" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title text-center" ><strong><i class="glyphicon glyphicon-th-large"></i></strong> Financial Mathematics</h4>
            </div>
            <div class="modal-body pre-scrollable">
                <!--Financial Topic Chapters-->
                <div id="financial-topic-chapters">
                    <div class="row">
                        <div class="col-sm-6">
                            <button id="btn-financial-topic-simple-interest" class="btn btn-primary btn-block">Simple Interest</button>
                            <br>
                        </div>
                        <div class="col-sm-6">
                            <button id="btn-financial-topic-compound-interest" class="btn btn-primary btn-block">Compound Interest</button>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button id="btn-financial-topic-depreciation" class="btn btn-primary btn-block">Depreciation</button>
                            <br>
                        </div>
                        <div class="col-sm-6">
                            <button id="btn-financial-topic-nominal" class="btn btn-primary btn-block">Nominal and effective interest rates</button>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button id="btn-financial-topic-annuities" class="btn btn-primary btn-block">Annuities</button>
                            <br>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </div>
                <!--End Financial Topic Chapters-->
                <!--Financial Problem Solver-->
                <div id="financial-topic-problem-solvers">
                    <!--Financial Topic Simple Interest-->
                    <div class="panel-group" id="financial-topic-simple-interest">
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-simple-interest" href="#collapse-financial-topic-simple-interest-1">
                                <h4 class="panel-title">
                                    Find the value of A (Final amount)
                                </h4>
                            </div>
                            <div id="collapse-financial-topic-simple-interest-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="text-1-of-1">P (Principal amount):</label>
                                                <input type="number" class="form-control" id="text-1-of-1" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="text-2-of-1">i (Interest):</label>
                                                <input type="number" class="form-control" id="text-2-of-1" placeholder="in percentage" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="text-3-of-1">n (Period):</label>
                                                <input type="number" class="form-control" id="text-3-of-1" required>
                                            </div>
                                        </div>
                                        <div id="display-1">
                                            <div class="alert alert-info text-center">
                                                <p class="text-center">Scenario</p>
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Simple_Interest_final();">Calculate</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-simple-interest" href="#collapse-financial-topic-simple-interest-2">
                                <h4 class="panel-title">
                                    Find the value of P (Principal amount)
                                </h4>
                            </div>
                            <div id="collapse-financial-topic-simple-interest-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="text-1-of-2">A (Final amount):</label>
                                                <input type="number" class="form-control" id="text-1-of-2" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="text-2-of-2">i (Interest):</label>
                                                <input type="number" class="form-control" id="text-2-of-2" placeholder="in percentage" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="text-3-of-2">n (Period):</label>
                                                <input type="number" class="form-control" id="text-3-of-2" required>
                                            </div>
                                        </div>
                                        <div id="display-2">
                                            <div class="alert alert-info text-center">
                                                <p class="text-center">Scenario</p>
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Simple_Interest_principal();">Calculate</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-simple-interest" href="#collapse-financial-topic-simple-interest-3">
                                <h4 class="panel-title">
                                    Find the value of i (Interest)
                                </h4>
                            </div>
                            <div id="collapse-financial-topic-simple-interest-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="text-1-of-3">A (final amount):</label>
                                                <input type="number" class="form-control" id="text-1-of-3" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="text-2-of-3">P (principal):</label>
                                                <input type="number" class="form-control" id="text-2-of-3" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="text-3-of-3">n (period):</label>
                                                <input type="number" class="form-control" id="text-3-of-3" required>
                                            </div>
                                        </div>
                                        <div id="display-3">
                                            <div class="alert alert-info text-center">
                                                <p class="text-center">Scenario</p>
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Simple_Interest_interest();">Calculate</button></center>		
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-simple-interest" href="#collapse-financial-topic-simple-interest-4">
                                <h4 class="panel-title">
                                    Find the value of n (period)
                                </h4>
                            </div>
                            <div id="collapse-financial-topic-simple-interest-4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="text-1-of-4">A (Final amount):</label>
                                                <input type="number" class="form-control" id="text-1-of-4" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="text-2-of-4">P (Principal amount):</label>
                                                <input type="number" class="form-control" id="text-2-of-4" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="text-3-of-4">i (Interest):</label>
                                                <input type="number" class="form-control" id="text-3-of-4" required>
                                            </div>
                                        </div>
                                        <div id="display-4">
                                            <div class="alert alert-info text-center">
                                                <p class="text-center">Scenario</p>
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Simple_Interest_interest();">Calculate</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                            
                    <!--End Financial Topic Simple Interest-->
                    <!--Financial Topic Compound Interest-->
                    <div class="panel-group" id="financial-topic-compound-interest">
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-compound-interest" href="#collapse-financial-topic-compound-interest-1">
                                <h4 class="panel-title">
                                    Find the value of A (Final amount)
                                </h4>
                            </div>
                            <div id="collapse-financial-topic-compound-interest-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form class="form-group">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label for="text-1-of-1">P (Principal):</label>
                                                <input type="number" class="form-control" id="text-1-of-1" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="text-2-of-1">i (Interest):</label>
                                                <input type="number" class="form-control" id="text-2-of-1" placeholder="in percentage" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="text-3-of-1">n (Period):</label>
                                                <input type="number" class="form-control" id="text-3-of-1" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="text-4-of-1">Compounded (mind if given):</label>
                                                <input type="number" class="form-control" placeholder="Default is 1 for 12 months" id="text-4-of-1" required>
                                            </div>
                                        </div>
                                        <div id="display-1">
                                            <div class="alert alert-info text-center">
                                                <p class="text-center">Scenario</p>
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Compound_Interest_final();">Calculate</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-compound-interest" href="#collapse-financial-topic-compound-interest-2">
                                <h4 class="panel-title">
                                    Find the value of P (Principal)
                                </h4>
                            </div>
                            <div id="collapse-financial-topic-compound-interest-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form class="form-group">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label for="text-1-of-2">A (final amount):</label>
                                                <input type="number" class="form-control" id="text-1-of-2" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="text-2-of-2">i (Interest):</label>
                                                <input type="number" class="form-control" id="text-2-of-2" placeholder="in percentage" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="text-3-of-2">n (Period):</label>
                                                <input type="number" class="form-control" id="text-3-of-2" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="text-4-of-2">Compounded (mind if given):</label>
                                                <input type="number" class="form-control" placeholder="Default is 1 for 12 months" id="text-4-of-2" required>
                                            </div>
                                        </div>
                                        <div id="display-2">
                                            <div class="alert alert-info text-center">
                                                <p class="text-center">Scenario</p>
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Compound_Interest_principal();">Calculate</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-compound-interest" href="#collapse-financial-topic-compound-interest-3">
                                <h4 class="panel-title">
                                    Find the value of i (interest)
                                </h4>
                            </div>
                            <div id="collapse-financial-topic-compound-interest-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="text-1-of-3">A (Final amount):</label>
                                                <input type="number" class="form-control" id="text-1-of-3" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="text-2-of-3">P (principal):</label>
                                                <input type="number" class="form-control" id="text-2-of-3" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="text-3-of-3">n (period):</label>
                                                <input type="number" class="form-control" id="text-3-of-3" required>
                                            </div>
                                        </div>
                                        <div id="display-3">
                                            <div class="alert alert-info text-center">
                                                <p class="text-center">Scenario</p>
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Compound_Interest_interest();">Calculate</button></center>		
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-compound-interest" href="#collapse-financial-topic-compound-interest-4">
                                <h4 class="panel-title">
                                    Find the value of n (period)
                                </h4>
                            </div>
                            <div id="collapse-financial-topic-compound-interest-4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="text-1-of-4">A (final amount):</label>
                                                <input type="number" class="form-control" id="text-1-of-4" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="text-2-of-4">P (principal):</label>
                                                <input type="number" class="form-control" id="text-2-of-4" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="text-3-of-4">i (interest):</label>
                                                <input type="number" class="form-control" id="text-3-of-4" placeholder="in percentage" required>
                                            </div>
                                        </div>
                                        <div id="display-4">
                                            <div class="alert alert-info text-center">
                                                <p class="text-center">Scenario</p>
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Compound_Interest_period();">Calculate</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                            
                    <!--End Financial Topic Compound Interest-->
                    <!--Financial Topic Depreciation-->
                    <div id="financial-topic-depreciation">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#financial-topic-depreciation-tab-1">Simple Decay</a></li>
                            <li><a data-toggle="tab" href="#financial-topic-depreciation-tab-2">Compound Decay</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="financial-topic-depreciation-tab-1" class="tab-pane fade in active">

                                <div class="panel-group" id="financial-topic-depreciation-tab-1-accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-depreciation-tab-1-accordion" href="#collapse-financial-topic-depreciation-tab-1-accordion-1">
                                            <h4 class="panel-title">
                                                Find the value of A (Final amount)
                                            </h4>
                                        </div>
                                        <div id="collapse-financial-topic-depreciation-tab-1-accordion-1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <form class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label for="text-1-of-1">P (Principal):</label>
                                                            <input type="number" class="form-control" id="text-1-of-1" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="text-2-of-1">i (Interest):</label>
                                                            <input type="number" class="form-control" id="text-2-of-1" placeholder="in percentage" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="text-3-of-1">n (Period):</label>
                                                            <input type="number" class="form-control" id="text-3-of-1" required>
                                                        </div>
                                                    </div>
                                                    <div id="display-1">
                                                        <div class="alert alert-info text-center">
                                                            <p class="text-center">Scenario</p>
                                                        </div>
                                                    </div>
                                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Depreciation_Simple_final();">Calculate</button></center>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-depreciation-tab-1-accordion" href="#collapse-financial-topic-depreciation-tab-1-accordion-2">
                                            <h4 class="panel-title">
                                                Find the value of P (Principal)
                                            </h4>
                                        </div>
                                        <div id="collapse-financial-topic-depreciation-tab-1-accordion-2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <form class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="text-1-of-2">A (final amount):</label>
                                                            <input type="number" class="form-control" id="text-1-of-2" required>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label for="text-2-of-2">i (Interest):</label>
                                                            <input type="number" class="form-control" id="text-2-of-2" placeholder="in percentage" required>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label for="text-3-of-2">n (Period):</label>
                                                            <input type="number" class="form-control" id="text-3-of-2" required>
                                                        </div>
                                                    </div>
                                                    <div id="display-2">
                                                        <div class="alert alert-info text-center">
                                                            <p class="text-center">Scenario</p>
                                                        </div>
                                                    </div>
                                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Depreciation_Simple_principal();">Calculate</button></center>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-depreciation-tab-1-accordion" href="#collapse-financial-topic-depreciation-tab-1-accordion-3">
                                            <h4 class="panel-title">
                                                Find the value of i (interest)
                                            </h4>
                                        </div>
                                        <div id="collapse-financial-topic-depreciation-tab-1-accordion-3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <form class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label for="text-1-of-3">A (Final amount):</label>
                                                            <input type="number" class="form-control" id="text-1-of-3" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="text-2-of-3">P (principal):</label>
                                                            <input type="number" class="form-control" id="text-2-of-3" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="text-3-of-3">n (period):</label>
                                                            <input type="number" class="form-control" id="text-3-of-3" required>
                                                        </div>
                                                    </div>
                                                    <div id="display-3">
                                                        <div class="alert alert-info text-center">
                                                            <p class="text-center">Scenario</p>
                                                        </div>
                                                    </div>
                                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Depreciation_Simple_interest();">Calculate</button></center>		
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-depreciation-tab-1-accordion" href="#collapse-financial-topic-depreciation-tab-1-accordion-4">
                                            <h4 class="panel-title">
                                                Find the value of n (period)
                                            </h4>
                                        </div>
                                        <div id="collapse-financial-topic-depreciation-tab-1-accordion-4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <form class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label for="text-1-of-4">A (final amount):</label>
                                                            <input type="number" class="form-control" id="text-1-of-4" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="text-2-of-4">P (principal):</label>
                                                            <input type="number" class="form-control" id="text-2-of-4" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="text-3-of-4">i (interest):</label>
                                                            <input type="number" class="form-control" id="text-3-of-4" placeholder="in percentage" required>
                                                        </div>
                                                    </div>
                                                    <div id="display-4">
                                                        <div class="alert alert-info text-center">
                                                            <p class="text-center">Scenario</p>
                                                        </div>
                                                    </div>
                                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Depreciation_Simple_period();">Calculate</button></center>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            

                            </div>
                            <div id="financial-topic-depreciation-tab-2" class="tab-pane fade">

                                <div class="panel-group" id="financial-topic-depreciation-tab-2-accordion-accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-depreciation-tab-2-accordion-accordion" href="#collapse-financial-topic-depreciation-tab-2-accordion-accordion-1">
                                            <h4 class="panel-title">
                                                Find the value of A (Final amount)
                                            </h4>
                                        </div>
                                        <div id="collapse-financial-topic-depreciation-tab-2-accordion-accordion-1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <form class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label for="text-1-of-1">P (Principal):</label>
                                                            <input type="number" class="form-control" id="text-1-of-1" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="text-2-of-1">i (Interest):</label>
                                                            <input type="number" class="form-control" id="text-2-of-1" placeholder="in percentage" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="text-3-of-1">n (Period):</label>
                                                            <input type="number" class="form-control" id="text-3-of-1" required>
                                                        </div>
                                                    </div>
                                                    <div id="display-1">
                                                        <div class="alert alert-info text-center">
                                                            <p class="text-center">Scenario</p>
                                                        </div>
                                                    </div>
                                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Depreciation_Simple_final();">Calculate</button></center>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-depreciation-tab-2-accordion-accordion" href="#collapse-financial-topic-depreciation-tab-2-accordion-accordion-2">
                                            <h4 class="panel-title">
                                                Find the value of P (Principal)
                                            </h4>
                                        </div>
                                        <div id="collapse-financial-topic-depreciation-tab-2-accordion-accordion-2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <form class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="text-1-of-2">A (final amount):</label>
                                                            <input type="number" class="form-control" id="text-1-of-2" required>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label for="text-2-of-2">i (Interest):</label>
                                                            <input type="number" class="form-control" id="text-2-of-2" placeholder="in percentage" required>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label for="text-3-of-2">n (Period):</label>
                                                            <input type="number" class="form-control" id="text-3-of-2" required>
                                                        </div>
                                                    </div>
                                                    <div id="display-2">
                                                        <div class="alert alert-info text-center">
                                                            <p class="text-center">Scenario</p>
                                                        </div>
                                                    </div>
                                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Depreciation_Compound_principal();">Calculate</button></center>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-depreciation-tab-2-accordion-accordion" href="#collapse-financial-topic-depreciation-tab-2-accordion-accordion-3">
                                            <h4 class="panel-title">
                                                Find the value of i (interest)
                                            </h4>
                                        </div>
                                        <div id="collapse-financial-topic-depreciation-tab-2-accordion-accordion-3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <form class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label for="text-1-of-3">A (Final amount):</label>
                                                            <input type="number" class="form-control" id="text-1-of-3" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="text-2-of-3">P (principal):</label>
                                                            <input type="number" class="form-control" id="text-2-of-3" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="text-3-of-3">n (period):</label>
                                                            <input type="number" class="form-control" id="text-3-of-3" required>
                                                        </div>
                                                    </div>
                                                    <div id="display-3">
                                                        <div class="alert alert-info text-center">
                                                            <p class="text-center">Scenario</p>
                                                        </div>
                                                    </div>
                                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Depreciation_Compound_interest();">Calculate</button></center>		
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-depreciation-tab-2-accordion-accordion" href="#collapse-financial-topic-depreciation-tab-2-accordion-accordion-4">
                                            <h4 class="panel-title">
                                                Find the value of n (period)
                                            </h4>
                                        </div>
                                        <div id="collapse-financial-topic-depreciation-tab-2-accordion-accordion-4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <form class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label for="text-1-of-4">A (final amount):</label>
                                                            <input type="number" class="form-control" id="text-1-of-4" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="text-2-of-4">P (principal):</label>
                                                            <input type="number" class="form-control" id="text-2-of-4" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="text-3-of-4">i (interest):</label>
                                                            <input type="number" class="form-control" id="text-3-of-4" placeholder="in percentage" required>
                                                        </div>
                                                    </div>
                                                    <div id="display-4">
                                                        <div class="alert alert-info text-center">
                                                            <p class="text-center">Scenario</p>
                                                        </div>
                                                    </div>
                                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Depreciation_Compound_period();">Calculate</button></center>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End financial Topic Depreciation-->
                    <!--financial Topic nominal-->
                    <div id="financial-topic-nominal">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="text-1-of-1">i (nominal interest):</label>
                                <input type="number" class="form-control" id="text-1-of-1" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="text-2-of-1">k (number of times):</label>
                                <input type="number" class="form-control" id="text-2-of-1" required>
                            </div>
                        </div>
                        <div id="display-1">
                            <div class="alert alert-info text-center">
                                <p class="text-center">Scenario</p>
                            </div>
                        </div>
                        <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_financial_Effective_Interest();">Calculate</button></center>
                    </div>
                    <!--End financial nominal-->
                    <!--financial Topic Annuities-->
                    <div id="financial-topic-annuities">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#financial-topic-annuities-tab-1">Future Value</a></li>
                            <li><a data-toggle="tab" href="#financial-topic-annuities-tab-2">Present Value</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="financial-topic-annuities-tab-1" class="tab-pane fade in active">

                                <div class="panel-group" id="financial-topic-annuities-tab-1-accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-annuities-tab-1-accordion" href="#collapse-financial-topic-annuities-tab-1-accordion-1">
                                            <h4 class="panel-title">
                                                Find the value of F (total accumulated at the end of the time period)
                                            </h4>
                                        </div>
                                        <div id="financial-topic-annuities-tab-1-accordion" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <form class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="tab-1-text-1-of-1">x (monthly installment):</label>
                                                            <input type="number" class="form-control" id="tab-1-text-1" required>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label for="tab-1-text-2-of-1">i (interest):</label>
                                                            <input type="number" class="form-control" id="tab-1-text-2-of-1" placeholder="in percentage" required>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label for="tab-1-text-3-of-1">n (number of payments):</label>
                                                            <input type="number" class="form-control" id="tab-1-text-3-of-1" required>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label for="tab-1-text-4-of-1">Compounded (mind if given):</label>
                                                            <input type="number" class="form-control" placeholder="Default is 1 for 12 months" id="tab-1-text-4-of-1" required>
                                                        </div>
                                                    </div>
                                                    <div id="display-1">
                                                        <div class="alert alert-info text-center">
                                                            <p class="text-center">Scenario</p>
                                                        </div>
                                                    </div>
                                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Anunities_F_Total_accumulated();">Calculate</button></center>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-annuities-tab-1-accordion" href="#collapse-financial-topic-annuities-tab-1-accordion-2">
                                            <h4 class="panel-title">
                                                Find the value of x (monthly installment)
                                            </h4>
                                        </div>
                                        <div id="collapse-financial-topic-annuities-tab-1-accordion-2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <form class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="tab-1-text-1-of-2">F (total accumulated at the end of the time period):</label>
                                                            <input type="number" class="form-control" id="tab-1-text-1-of-2" required>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label for="tab-1-text-2-of-1">i (interest):</label>
                                                            <input type="number" class="form-control" id="tab-1-text-2-of-1" placeholder="in percentage" required>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label for="tab-1-text-3-of-1">n (number of payments):</label>
                                                            <input type="number" class="form-control" id="tab-1-text-3-of-1" required>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label for="tab-1-text-4-of-1">Compounded (mind if given):</label>
                                                            <input type="number" class="form-control" placeholder="Default is 1 for 12 months" id="tab-1-text-4-of-1" required>
                                                        </div>
                                                    </div>
                                                    <div id="display-1">
                                                        <div class="alert alert-info text-center">
                                                            <p class="text-center">Scenario</p>
                                                        </div>
                                                    </div>
                                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Annuities_F_Monthly_installment();">Calculate</button></center>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-annuities-tab-1-accordion" href="#collapse-financial-topic-annuities-tab-1-accordion-3">
                                            <h4 class="panel-title">
                                                Find the value of n (number of payments)
                                            </h4>
                                        </div>
                                        <div id="collapse-financial-topic-annuities-tab-1-accordion-3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <form class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="tab-1-text-1-of-2">F (total accumulated at the end of the time period):</label>
                                                            <input type="number" class="form-control" id="tab-1-text-1-of-2" required>
                                                        </div
                                                        <div class="col-sm-3">
                                                            <label for="tab-1-text-2-of-3">x (monthly installment):</label>
                                                            <input type="number" class="form-control" id="tab-1-text-2-of-3" required>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label for="tab-1-text-2-of-1">i (interest):</label>
                                                            <input type="number" class="form-control" id="tab-1-text-2-of-1" placeholder="in percentage" required>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label for="tab-1-text-4-of-1">Compounded (mind if given):</label>
                                                            <input type="number" class="form-control" placeholder="Default is 1 for 12 months" id="tab-1-text-4-of-1" required>
                                                        </div>
                                                    </div>
                                                    <div id="display-1">
                                                        <div class="alert alert-info text-center">
                                                            <p class="text-center">Scenario</p>
                                                        </div>
                                                    </div>
                                                    <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Annuities_F_Payments();">Calculate</button></center>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            

                                <div id="financial-topic-annuities-tab-2" class="tab-pane fade">

                                    <div class="panel-group" id="financial-topic-annuities-tab-2-accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-annuities-tab-2-accordion" href="#collapse-financial-topic-annuities-tab-2-accordion-1">
                                                <h4 class="panel-title">
                                                    Find the value of P (present amount)
                                                </h4>
                                            </div>
                                            <div id="collapse-financial-topic-annuities-tab-2-accordion-1" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <form class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <label for="tab-1-text-1-of-1">x (monthly installment):</label>
                                                                <input type="number" class="form-control" id="tab-1-text-1" required>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label for="tab-1-text-2-of-1">i (interest):</label>
                                                                <input type="number" class="form-control" id="tab-1-text-2-of-1" placeholder="in percentage" required>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label for="tab-1-text-3-of-1">n (number of payments):</label>
                                                                <input type="number" class="form-control" id="tab-1-text-3-of-1" required>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label for="tab-1-text-4-of-1">Compounded (mind if given):</label>
                                                                <input type="number" class="form-control" placeholder="Default is 1 for 12 months" id="tab-1-text-4-of-1" required>
                                                            </div>
                                                        </div>
                                                        <div id="display-1">
                                                            <div class="alert alert-info text-center">
                                                                <p class="text-center">Scenario</p>
                                                            </div>
                                                        </div>
                                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Annuities_P_Present_Amount();">Calculate</button></center>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" data-toggle="collapse" data-parent="#financial-topic-annuities-tab-2-accordion" href="#collapse-financial-topic-annuities-tab-2-accordion-2">
                                                <h4 class="panel-title">
                                                    Find the value of x (monthly installment)
                                                </h4>
                                            </div>
                                            <div id="collapse-financial-topic-annuities-tab-2-accordion-2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <form class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <label for="tab-1-text-1-of-2">P (present value):</label>
                                                                <input type="number" class="form-control" id="tab-1-text-1-of-2" required>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label for="tab-1-text-2-of-1">i (interest):</label>
                                                                <input type="number" class="form-control" id="tab-1-text-2-of-1" placeholder="in percentage" required>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label for="tab-1-text-3-of-1">n (number of payments):</label>
                                                                <input type="number" class="form-control" id="tab-1-text-3-of-1" required>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label for="tab-1-text-4-of-1">Compounded (mind if given):</label>
                                                                <input type="number" class="form-control" placeholder="Default is 1 for 12 months" id="tab-1-text-4-of-1" required>
                                                            </div>
                                                        </div>
                                                        <div id="display-1">
                                                            <div class="alert alert-info text-center">
                                                                <p class="text-center">Scenario</p>
                                                            </div>
                                                        </div>
                                                        <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Annuities_P_Monthly_installment();">Calculate</button></center>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End financial Topic Annuities-->
                    </div>
                    <!--End financial Topic Problem Solvers-->
                </div>
                <div class="modal-footer"><button class="btn btn-danger pull-left" id="financial-back">Back</button><button type="button" class="close" data-dismiss="modal">&times;</button></div>
            </div>
        </div>
    </div>
    <!--Calculus-->
    <div class="modal fade" id="modal-mathematics-grade-12-calculus" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title text-center" ><strong><i class="glyphicon glyphicon-th-large"></i></strong> Calculus</h4>
                </div>
                <div class="modal-body pre-scrollable">
                    <!--Calculus Topic Chapters-->
                    <div id="calculus-topic-chapters">
                        <div class="row">
                            <div class="col-sm-6">
                                <button id="btn-calculus-topic-average-gradient" class="btn btn-primary btn-block">Average Gradient</button>
                                <br>
                            </div>
                            <div class="col-sm-6">
                                <button id="btn-calculus-topic-derivative" class="btn btn-primary btn-block">The derivative from first principles</button>
                                <br>
                            </div>
                        </div>
                    </div>
                    <!--End Calculus Topic Chapters-->
                    <!--Calculus Problem Solvers-->
                    <div id="calculus-problem-solvers">
                        <!--Calculus Topic Derivative-->
                        <div id="calculus-topic-derivative">
                            <form class="form-group">
                                <label for="numeric1">Equation:</label>
                                <input type="text" class="form-control" placeholder="Enter Equation" id="text-1" required>
                                <br>
                                <div id="display-1">
                                    <div class="alert alert-info text-center">
                                        <p class="text-center">Scenario</p>
                                    </div>
                                </div>
                                <br>
                                <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Calculus_Derivative();">Calculate</button></center>
                            </form>
                        </div>
                        <!--End Calculus Topic Derivative-->
                        <!--Calculus Topic Average Gradient-->
                        <div id="calculus-topic-average-gradient">
                            <form class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="text-1">Equation of Graph:</label>
                                        <input type="text" class="form-control" id="text-1" placeholder="Enter equation" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="text-2">First x-value:</label>
                                        <input type="text" class="form-control" id="text-2" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="text-3">Second x-value:</label>
                                        <input type="text" class="form-control" id="text-3" required>
                                    </div>
                                </div>
                                <div id="display-1">
                                    <div class="alert alert-info text-center">
                                        <p class="text-center">Scenario</p>
                                    </div>
                                </div>
                                <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Calculus_Average_Gradient();">Calculate</button></center>
                            </form>
                        </div>
                        <!--End Calculus Topic Average Gradient-->
                    </div>
                    <!--End Calculus Problem Solvers-->
                </div>
                <div class="modal-footer"><button class="btn btn-danger pull-left" id="calculus-back">Back</button><button type="button" class="close" data-dismiss="modal">&times;</button></div>
            </div>
        </div>
    </div>
    <!--Analytical Geometry-->
    <div class="modal fade" id="modal-mathematics-grade-12-analytical-geometry" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title text-center" ><strong><i class="glyphicon glyphicon-th-large"></i></strong> Analytical Geometry</h4>
                </div>
                <div class="modal-body pre-scrollable">
                    <!--Analytical Topic Chapters-->
                    <div id="analytical-topic-chapters">
                        <div class="row">
                            <div class="col-sm-6">
                                <button id="btn-analytical-topic-gradient" class="btn btn-primary btn-block">Gradient</button>
                                <br>
                            </div>
                            <div class="col-sm-6">
                                <button id="btn-analytical-topic-midpoint" class="btn btn-primary btn-block">Midpoint</button>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button id="btn-analytical-topic-distance" class="btn btn-primary btn-block">Distance</button>
                                <br>
                            </div>
                            <div class="col-sm-6">
                                <button id="btn-analytical-topic-straight-line" class="btn btn-primary btn-block">Straight line equation</button>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button  id="btn-analytical-topic-inclination" class="btn btn-primary btn-block">Inclination</button>
                                <br>
                            </div>
                            <div class="col-sm-6"></div>
                        </div>
                    </div>
                    <!--End Analytical Topic Chapters-->
                    <!---Analytical Problem Solvers-->
                    <div id="analytical-problem-solvers">
                        <!--Analytical Topic Gradient-->
                        <div id="analytical-topic-gradient">
                            <form class="form-group">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="text-1">Y<sub>2</sub>:</label>
                                        <input type="number" class="form-control" id="text-1" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="text-2">Y<sub>1</sub>:</label>
                                        <input type="number" class="form-control" id="text-2" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="text-3">X<sub>2</sub>:</label>
                                        <input type="number" class="form-control" id="text-3" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="text-4">X<sub>1</sub>:</label>
                                        <input type="number" class="form-control" id="text-4" required>
                                    </div>
                                </div>
                                <div id="display-1">
                                    <div class="alert alert-info text-center">
                                        <p class="text-center">Scenario</p>
                                    </div>
                                </div>
                                <center>
                                    <button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Analytical_Gradient();">Calculate</button>
                                </center>
                            </form>
                        </div>
                        <!--End Analytical Topic Gradient-->
                        <!--Analytical Topic Distance-->
                        <div id="analytical-topic-distance">
                            <form class="form-group">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="text-1">Y<sub>2</sub>:</label>
                                        <input type="number" class="form-control" id="text-1" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="text-2">Y<sub>1</sub>:</label>
                                        <input type="number" class="form-control" id="text-2" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="text-3">X<sub>2</sub>:</label>
                                        <input type="number" class="form-control" id="text-3" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="text-4">X<sub>1</sub>:</label>
                                        <input type="number" class="form-control" id="text-4" required>
                                    </div>
                                </div>
                                <div id="display-1">
                                    <div class="alert alert-info text-center">
                                        <p class="text-center">Scenario</p>
                                    </div>
                                </div>
                                <center>
                                    <button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Distance_Unit();">Calculate</button>
                                </center>
                            </form>
                        </div>
                        <!--End Analytical Topic Gradient-->
                        <!--Inclination-->
                        <div id="analytical-topic-inclination">
                            <form class="form-group">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="text-1">Y<sub>2</sub>:</label>
                                        <input type="number" class="form-control" id="text-1" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="text-2">Y<sub>1</sub>:</label>
                                        <input type="number" class="form-control" id="text-2" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="text-3">X<sub>2</sub>:</label>
                                        <input type="number" class="form-control" id="text-3" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="text-4">X<sub>1</sub>:</label>
                                        <input type="number" class="form-control" id="text-4" required>
                                    </div>
                                </div>
                                <div id="display-1">
                                    <div class="alert alert-info text-center">
                                        <p class="text-center">Scenario</p>
                                    </div>
                                </div>
                                <center>
                                    <button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Analytical_Inclination();">Calculate</button>
                                </center>
                            </form>
                        </div>
                        <!--End Analytical Topic Inclination-->
                        <!--Analytical Topic Straight-->
                        <div id="analytical-topic-straight-line">
                            <div class="panel-group" id="analytical-topic-straight-line-accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading"  data-toggle="collapse" data-parent="#analytical-topic-straight-line-accordion" href="#collapse-analytical-topic-straight-line-accordion-1">
                                        <h4 class="panel-title">
                                            Find equation of a straight line given a gradient and a point
                                        </h4>
                                    </div>
                                    <div id="collapse-analytical-topic-straight-line-accordion-1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label for="text-1-of-1">Gradient value:</label>
                                                        <input type="number" class="form-control" id="text-1-of-1" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="text-2-of-1">X value:</label>
                                                        <input type="number" class="form-control" id="text-2-of-1" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="text-3-of-1">Y value:</label>
                                                        <input type="number" class="form-control" id="text-3-of-1" required>
                                                    </div>
                                                </div>
                                                <div id="display-1">
                                                    <div class="alert alert-info text-center">
                                                        <p class="text-center">Scenario</p>
                                                    </div>
                                                </div>
                                                <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Ananlytic_Equation_First();">Calculate</button></center>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#analytical-topic-straight-line-accordion" href="#collapse-analytical-topic-straight-line-accordion-2">
                                        <h4 class="panel-title">
                                            Find equation of a straight line given two points coordinates
                                        </h4>
                                    </div>
                                    <div id="collapse-analytical-topic-straight-line-accordion-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label for="text-1-of-2">Y<sub>2</sub>:</label>
                                                        <input type="number" class="form-control" id="text-1-of-2" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="text-2-of-2">Y<sub>1</sub>:</label>
                                                        <input type="number" class="form-control" id="text-2-of-2" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="text-3-of-2">X<sub>2</sub>:</label>
                                                        <input type="number" class="form-control" id="text-3-of-2" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="text-4-of-2">X<sub>1</sub>:</label>
                                                        <input type="number" class="form-control" id="text-4-of-2" required>
                                                    </div>
                                                </div>
                                                <div id="display-1">
                                                    <div class="alert alert-info text-center">
                                                        <p class="text-center">Scenario</p>
                                                    </div>
                                                </div>
                                                <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Ananlytic_Equation_Second();">Calculate</button></center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!--End Analytical Topic Straight Line Equation-->
                        <!--Analytical Topic Midpoint-->
                        <div id="analytical-topic-midpoint">
                            <div class="panel-group" id="analaytical-topic-midpoint-accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading"  data-toggle="collapse" data-parent="#analaytical-topic-midpoint-accordion-accordion" href="#collapse-analaytical-topic-midpoint-accordion-1">
                                        <h4 class="panel-title">
                                            Find the coordinates of midpoint
                                        </h4>
                                    </div>
                                    <div id="collapse-analaytical-topic-midpoint-accordion-1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label for="text-1">X<sub>1</sub>:</label>
                                                        <input type="number" class="form-control" id="text-1" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="text-2">X<sub>2</sub>:</label>
                                                        <input type="number" class="form-control" id="text-2" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="text-3">Y<sub>1</sub>:</label>
                                                        <input type="number" class="form-control" id="text-3" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="text-4">Y<sub>2</sub>:</label>
                                                        <input type="number" class="form-control" id="text-4" required>
                                                    </div>
                                                </div>
                                                <div id="display-1">
                                                    <div class="alert alert-info text-center">
                                                        <p class="text-center">Scenario</p>
                                                    </div>
                                                </div>
                                                <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Midpoint_Coordinates();">Calculate</button></center>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#analaytical-topic-midpoint-accordion" href="#collapse-analaytical-topic-midpoint-accordion-2">
                                        <h4 class="panel-title">
                                            Find the coordinates of one endpoint
                                        </h4>
                                    </div>
                                    <div id="collapse-analaytical-topic-midpoint-accordion-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label for="tab-1-text-1">X value:</label>
                                                        <input type="number" class="form-control" id="tab-1-text-1" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="tab-1-text-2">Y value:</label>
                                                        <input type="number" class="form-control" id="tab-1-text-2" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="tab-1-text-3">X value:</label>
                                                        <input type="number" class="form-control" id="tab-1-text-3" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="tab-1-text-4">Y value:</label>
                                                        <input type="number" class="form-control" id="tab-1-text-4" required>
                                                    </div>
                                                </div>
                                                <div id="display-1">
                                                    <div class="alert alert-info text-center">
                                                        <p class="text-center">Scenario</p>
                                                    </div>
                                                </div>
                                                <center><button type="button" class="btn btn-lg btn-primary" onclick="Algorithm_Midpoint_First_tab();">Calculate</button></center>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!--End Analytical Topic Midpoint-->
                    </div>
                    <!---End Analytical Problem Solvers-->

                </div>
                <div class="modal-footer"><button class="btn btn-danger pull-left" id="analytical-back">Back</button><button type="button" class="close" data-dismiss="modal">&times;</button></div>
            </div>
        </div>
    </div>
    <!--End Mathematics Problem Solver-->
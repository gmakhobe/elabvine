<?php
include("../php/session.php");
include("includes/configs.php");
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Rating</title>
        <!-- Meta Description -->
        <meta name="description" content="<?php echo $companyuri; ?> Lesson">      
        <!-- Header -->
        <!-- meta character set -->
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="../bootstrap old/css/bootstrap.min.css">
        <style>
            #colorstar { color: #ee8b2d;}
            .badForm {color: #FF0000;}
            .goodForm {color: #00FF00;}
            .evaluation { margin-left:30px;} 

        </style>

        <script src="../js/vendor/jquery-2.2.4.min.js"></script>
        <script src="../bootstrap old/js/bootstrap.min.js"></script>
        <script src="../bootstrap old/js/w3.js"></script>
        <script src="../js/alertify.min.js"></script>
        <script type="text/javascript">
            //override defaults
            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-primary";
            alertify.defaults.theme.cancel = "btn btn-danger";
            alertify.defaults.theme.input = "form-control";
        </script>
        <link rel="stylesheet" href="../css/alertify.css">

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">

                    <div class="well text-center">
                        <div class="row lead evaluation">
                            <p class="text-center">Rate you tutor to continue!</p>
                            <div id="colorstar" class="starrr ratable" ></div>
                            <span id="count">0</span> star(s) - <span id="meaning"> </span>
                            <div class='indicators' style="display:none"> 
                                <div id='textwr'>What went wrong?</div>
                                <input id="rate[]" name="rate[]" type="text" placeholder="" class="form-control input-md" style="display:none;">
                                <input id="rating[]" name="rating[]" type="text" placeholder="" class="form-control input-md rateval"  style="display:none;">

                                <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="info">Punctuality</button>
                                    <input name="challenge[]" value="Punctuality" type="checkbox" class="hidden"  />
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="info">Assistance</button>
                                    <input name="challenge[]" value="Assistance" type="checkbox" class="hidden"  />
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="info">Knowledge</button>
                                    <input name="challenge[]" value="Knowledge" type="checkbox" class="hidden"  />
                                </span>
                                <label><small>Tell other what you think about the tutor, would you recommend to others and why?</small></label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                                <button class="btn btn-success btn-block" id="rateTutor" onclick="rateTutor()"> Submit</button>
                            </div>
                        </div>
                    </div> 


                </div>
                <div class="col-md-2"></div>
            </div>
        </div>



        <script>



            // Starrr plugin (https://github.com/dobtco/starrr)
            var __slice = [].slice;

            (function ($, window) {
                var Starrr;

                Starrr = (function () {
                    Starrr.prototype.defaults = {
                        rating: void 0,
                        numStars: 5,
                        change: function (e, value) {}
                    };

                    function Starrr($el, options) {
                        var i, _, _ref,
                                _this = this;

                        this.options = $.extend({}, this.defaults, options);
                        this.$el = $el;
                        _ref = this.defaults;
                        for (i in _ref) {
                            _ = _ref[i];
                            if (this.$el.data(i) != null) {
                                this.options[i] = this.$el.data(i);
                            }
                        }
                        this.createStars();
                        this.syncRating();
                        this.$el.on('mouseover.starrr', 'span', function (e) {
                            return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
                        });
                        this.$el.on('mouseout.starrr', function () {
                            return _this.syncRating();
                        });
                        this.$el.on('click.starrr', 'span', function (e) {
                            return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
                        });
                        this.$el.on('starrr:change', this.options.change);
                    }

                    Starrr.prototype.createStars = function () {
                        var _i, _ref, _results;

                        _results = [];
                        for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                            _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
                        }
                        return _results;
                    };

                    Starrr.prototype.setRating = function (rating) {
                        if (this.options.rating === rating) {
                            rating = void 0;
                        }
                        this.options.rating = rating;
                        this.syncRating();
                        return this.$el.trigger('starrr:change', rating);
                    };

                    Starrr.prototype.syncRating = function (rating) {
                        var i, _i, _j, _ref;

                        rating || (rating = this.options.rating);
                        if (rating) {
                            for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                                this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
                            }
                        }
                        if (rating && rating < 5) {
                            for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                                this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                            }
                        }
                        if (!rating) {
                            return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                        }
                    };

                    return Starrr;

                })();
                return $.fn.extend({
                    starrr: function () {
                        var args, option;

                        option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
                        return this.each(function () {
                            var data;

                            data = $(this).data('star-rating');
                            if (!data) {
                                $(this).data('star-rating', (data = new Starrr($(this), option)));
                            }
                            if (typeof option === 'string') {
                                return data[option].apply(data, args);
                            }
                        });
                    }
                });
            })(window.jQuery, window);

            $(function () {
                return $(".starrr").starrr();
            });

            $(document).ready(function () {

                var correspondence = ["", "Really Bad", "Bad", "Fair", "Good", "Excelent"];

                $('.ratable').on('starrr:change', function (e, value) {

                    $(this).closest('.evaluation').children('#count').html(value);
                    $(this).closest('.evaluation').children('#meaning').html(correspondence[value]);

                    var currentval = $(this).closest('.evaluation').children('#count').html();

                    var target = $(this).closest('.evaluation').children('.indicators');
                    target.css("color", "black");
                    target.children('.rateval').val(currentval);
                    target.children('#textwr').html(' ');


                    if (value < 3) {
                        target.css("color", "red").show();
                        target.children('#textwr').text('What can be improved?');
                    } else {
                        if (value > 3) {
                            target.css("color", "green").show();
                            target.children('#textwr').html('What was done correctly?');
                        } else {
                            target.hide();
                        }
                    }

                });





                $('#hearts-existing').on('starrr:change', function (e, value) {
                    $('#count-existing').html(value);
                });
            });





            $(function () {
                $('.button-checkbox').each(function () {

                    // Settings
                    var $widget = $(this),
                            $button = $widget.find('button'),
                            $checkbox = $widget.find('input:checkbox'),
                            color = $button.data('color'),
                            settings = {
                                on: {
                                    icon: 'glyphicon glyphicon-check'
                                },
                                off: {
                                    icon: 'fa fa-square-o'
                                }
                            };

                    // Event Handlers
                    $button.on('click', function () {
                        $checkbox.prop('checked', !$checkbox.is(':checked'));
                        $checkbox.triggerHandler('change');
                        updateDisplay();
                    });
                    $checkbox.on('change', function () {
                        updateDisplay();
                    });

                    // Actions
                    function updateDisplay() {
                        var isChecked = $checkbox.is(':checked');

                        // Set the button's state
                        $button.data('state', (isChecked) ? "on" : "off");

                        // Set the button's icon
                        $button.find('.state-icon')
                                .removeClass()
                                .addClass('state-icon ' + settings[$button.data('state')].icon);

                        // Update the button's color
                        if (isChecked) {
                            $button
                                    .removeClass('btn-default')
                                    .addClass('btn-' + color + ' active');
                        } else {
                            $button
                                    .removeClass('btn-' + color + ' active')
                                    .addClass('btn-default');
                        }
                    }

                    // Initialization
                    function init() {

                        updateDisplay();

                        // Inject the icon if applicable
                        if ($button.find('.state-icon').length == 0) {
                            $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
                        }
                    }
                    init();
                });
            });




            function rateTutor() {
                $("#rateTutor").hide();
                var review_rating = document.getElementById('count');
                var review_rating_text = review_rating.innerText || review_rating.textContent;
                var review_challenge_text = null;
                var review_challenge = document.getElementById('meaning');
                var review_challenge_text = review_challenge.innerText || review_challenge.textContent;
                var review_comment = document.getElementById('comment').value;
                var review__solution = document.getElementById('textwr');
                var review__solution_text = review__solution.innerText || review__solution.textContent;
                var review_ = document.getElementsByName("challenge[]");
                var review__length = review_.length;
                var selchbox = [];// array that will store the value of selected checkboxes

                for (var i = 0; i < review__length; i++) {
                    if (review_[i].type == 'checkbox' && review_[i].checked == true)
                        selchbox.push(review_[i].value);
                }

                var fd = new FormData();

                if (review_challenge_text == null && review_rating_text == "") {
                    alertify.alert('Rating', "Rate the tutor before ending your project.", function () {
                        alertify.error('Error!');
                    }).bringToFront();
                    
                    $("#rateTutor").show();

                } else {
                    /*fd.append("review_rating", review_rating);
                     fd.append("review_challenge_text", review_challenge_text);
                     fd.append("review_comment", review_comment);*/
                    if (review_comment == "") {
                        review_comment = "We had a fair session";
                    }

                    fd.append("reqId", "rateTutor");
                    fd.append("stars", review_rating_text);
                    fd.append("title", review_challenge_text + " lesson.");
                    fd.append("comment", review_comment);
                    fd.append("notes", review__solution_text + ': ' + selchbox);

                    console.log("Rating: " + review_rating_text + "\n Review_Title: " + review_challenge_text + " lesson.\n Review_Comment: " + review_comment + "\n Notes", review__solution_text + ': ' + selchbox);

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "success") {

                                alertify.alert('Alert', "Lesson successfully completed  with " + review_rating_text + " ratings.");
                                setTimeout(function () {
                                    window.location.href = "lesson.php"
                                }, 2500)

                            } else if (this.responseText == "error") {

                                alertify.alert('Alert', "An error occured please try again.", function () {
                                    alertify.error('Error!');
                                }).bringToFront();
                                $("#rateTutor").show();

                            }

                        }
                    };
                    xmlhttp.open("POST", "../php/index.php", true);
                    xmlhttp.send(fd);



                }
            }

        </script>


    </body>

</html>
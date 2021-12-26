<?php include("../php/customization-post.php"); ?>
<style>
    .btn {background: <?php echo $dashboard_banner2; ?>;}
</style>
<div style="height: 600px !important;overflow-y: auto;">
    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">

                </div>
                <div class="col-lg-8 posts-list">

                    <div class="q-9 questions">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text1" onkeyup="saveContent(this.value, 'text1')"><?php echo $text1; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text2" onkeyup="saveContent(this.value, 'text2')"><?php echo $text2; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </p>
                            </div>

                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Edit profile</p>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.next();"><i class="fa fa-address-card-o text-white" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-1" style="display: none;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text3" onkeyup="saveContent(this.value, 'text3')"><?php echo $text3; ?></span>
                                    <small><span class="fa fa-code"></span></small>
                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text4" onkeyup="saveContent(this.value, 'text4')"><?php echo $text4; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </p>
                                <ul class="unordered-list" id="requirement">

                                </ul>
                                <label>Edit requirements:</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <button class="btn btn-success" onclick="addOptions('option1', 'addrequirements')">Add</button>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Add requirement" id="addrequirements">
                                </div>

                            </div>

                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Start</p>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.next();"><i class="fa fa-child text-white" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-2" style="display: none;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text6" onkeyup="saveContent(this.value, 'text6')"><?php echo $text6; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text7" onkeyup="saveContent(this.value, 'text7')"><?php echo $text7; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    <div class="alert alert-warning">
                                        <a href="#" class="alert-link">Alert!</a> The grades/levels below are synchronized with does at <a href="get-a-tutor.php">get a tutor</a>.
                                    </div>
                                    <select id="Level" class="form-control">
                                        <?php echo $text_3; ?>
                                    </select>								
                                </div>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.previous()"><i class="fa text-white fa-arrow-circle-left" style="font-size:60px !important;"></i></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Next</p>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.next();"><i class="fa text-white fa-arrow-circle-right" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-3" style="display: none;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text9" onkeyup="saveContent(this.value, 'text9')"><?php echo $text9; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text10" onkeyup="saveContent(this.value, 'text10')"><?php echo $text10; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="alert alert-warning">
                                    <a href="#" class="alert-link">Alert!</a> The skills below are synchronized with does at <a href="get-a-tutor.php">get a tutor</a>.
                                </div>
                                <select id="Skill" class="form-control">
                                    <?php echo $text_8; ?>
                                </select>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.previous()"><i class="fa text-white fa-arrow-circle-left" style="font-size:60px !important;"></i></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Next</p>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.next();"><i class="fa text-white fa-arrow-circle-right" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-4" style="display: none;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text11" onkeyup="saveContent(this.value, 'text11')"><?php echo $text11; ?></span>
                                    <small><span class="fa fa-code"></span></small>
                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text12" onkeyup="saveContent(this.value, 'text12')"><?php echo $text12; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    <input class="form-control" value="" id="Syllabus" type="text">									
                                </div>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.previous()"><i class="fa text-white fa-arrow-circle-left" style="font-size:60px !important;"></i></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Next</p>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.next();"><i class="fa text-white fa-arrow-circle-right" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-5" style="display: none;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text13" onkeyup="saveContent(this.value, 'text13')"><?php echo $text13; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text14" onkeyup="saveContent(this.value, 'text14')"><?php echo $text14; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    <textarea class="form-control" max="3" id="Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.previous()"><i class="fa text-white fa-arrow-circle-left" style="font-size:60px !important;"></i></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Next</p>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.next();"><i class="fa text-white fa-arrow-circle-right" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-6" style="display: none;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text15" onkeyup="saveContent(this.value, 'text15')"><?php echo $text15; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text16" onkeyup="saveContent(this.value, 'text16')"><?php echo $text16; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    <textarea class="form-control" max="3" id="Journey"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.previous()"><i class="fa text-white fa-arrow-circle-left" style="font-size:60px !important;"></i></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Next</p>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.next();"><i class="fa text-white fa-arrow-circle-right" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-7" style="display: block;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text17" onkeyup="saveContent(this.value, 'text17')"><?php echo $text17; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text18" onkeyup="saveContent(this.value, 'text18')"><?php echo $text18; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    <label>
                                        <span class="edit-text" id="text19" onkeyup="saveContent(this.value, 'text19')"><?php echo $text19; ?></span>
                                        <small><span class="fa fa-code"></span></small>
                                    </label>
                                    <p>
                                        <small>
                                            <span class="edit-text" id="text20" onkeyup="saveContent(this.value, 'text20')"><?php echo $text20; ?></span>
                                        </small>
                                        <small><span class="fa fa-code"></span></small>
                                    </p>
                                    <div id="at1">
                                        <input id="Idcopy" class="form-control" type="file">   
                                    </div>    
                                    <br>
                                    <label>
                                        <span class="edit-text" id="text21" onkeyup="saveContent(this.value, 'text21')"><?php echo $text21; ?></span>
                                        <small><span class="fa fa-code"></span></small>

                                    </label>
                                    <p>
                                        <small>
                                            <span class="edit-text" id="text22" onkeyup="saveContent(this.value, 'text22')"><?php echo $text22; ?></span>
                                        </small>
                                        <small><span class="fa fa-code"></span></small>
                                    </p>
                                    <div id="at2">
                                        <input id="Achievementcopy" class="form-control" type="file">                                        </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.previous()"><i class="fa text-white fa-arrow-circle-left" style="font-size:60px !important;"></i></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Post</p>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.next();"><i class="fa text-white fa-arrow-circle-right" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-8" style="display: none;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text23" onkeyup="saveContent(this.value, 'text23')"><?php echo $text23; ?></span>
                                    <small><span class="fa fa-code"></span></small>

                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text24" onkeyup="saveContent(this.value, 'text24')"><?php echo $text24; ?></span>
                                    <small><span class="fa fa-code"></span></small>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    <button type="button" onclick="publish()" class="btn btn-success btn-lg btn-block">Publish Profile</button>
                                </div>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#" onclick="questionSlide.previous()"><i class="fa text-white fa-arrow-circle-left" style="font-size:60px !important;"></i></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>
                <div class="col-lg-2">

                </div>
            </div>
        </div>	
    </section>
</div>
<?php include("../php/customization-get.php"); ?>
<div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <a href="#" class="alert-link">Alert!</a> Click any text with <small><span class="fa fa-code"></span></small> to edit, Updates are automatically saved.
</div>
<div style="height: 600px !important;overflow-y: auto;">
    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">

                </div>

                <div class="col-lg-8 posts-list ">
                    <div class="questions q-1" style="display: block;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text1"><?php echo $text1; ?></span>
                                     <button class="btn btn-primary" onclick="saveContent('1', 'text1')"><span class="fa fa-code"></span>Save</button>

                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text2"><?php echo $text2; ?></span>
                                    <button class="btn btn-primary" onclick="saveContent('2', 'text2')"><span class="fa fa-code"></span>Save</button>
                                </p>
                                <label>Add required skills/subjects/modules:</label>
                                <div class="alert alert-info" id="showskills">
                                    <a href="#" class="alert-link">Alert!</a>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <button class="btn btn-success" onclick="addOptions('option1', 'addskills')">Add</button>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Add skill" id="addskills">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    <select id="skill" class="form-control">
                                        
                                    </select>										
                                </div>
                            </div>
                        </div>

                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">

                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="detials">

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
                                        <a href="#" onclick="questionSlide.next()"><i class="fa text-white fa-arrow-circle-right" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-2" style="display: none;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text4" ><?php echo $text4; ?></span>
                                   <button class="btn btn-primary" onclick="saveContent('4', 'text4')"><span class="fa fa-code"></span>Save</button>

                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text5" ><?php echo $text5; ?></span>
                                    <button class="btn btn-primary" onclick="saveContent('5', 'text5')"><span class="fa fa-code"></span>Save</button>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">

                                    <input id="GigName" class="form-control" placeholder="" required="" type="text">										
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
                                        <a href="#" onclick="questionSlide.next()"><i class="fa text-white fa-arrow-circle-right" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-3" style="display: none;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text6"><?php echo $text6; ?></span>
                                    <button class="btn btn-primary" onclick="saveContent('6', 'text6)"><span class="fa fa-code"></span>Save</button>

                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text7"><?php echo $text7; ?></span>
                                    <button class="btn btn-primary" onclick="saveContent('7', 'text7')"><span class="fa fa-code"></span>Save</button>

                                </p>
                                <label>Edit required grades/levels:</label>
                                <div class="alert alert-info" id="showgrades">
                                    <a href="#" class="alert-link">Alert!</a>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <button class="btn btn-success" onclick="addOptions('option2', 'addgrades')">Add</button>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Add grade" id="addgrades">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    <select id="grade" class="form-control">
                                        
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
                                        <a href="#" onclick="questionSlide.next()"><i class="fa text-white fa-arrow-circle-right" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-4" style="display: none;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text9" ><?php echo $text9; ?></span>
                                    <button class="btn btn-primary" onclick="saveContent('9', 'text9')"><span class="fa fa-code"></span>Save</button>

                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text10" ><?php echo $text10; ?></span>
                                    <button class="btn btn-primary" onclick="saveContent('10', 'text10')"><span class="fa fa-code"></span>Save</button>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    <textarea id="GigDescription" class="form-control" rows="2" placeholder="" required=""></textarea>										
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
                                        <a href="#" onclick="questionSlide.next()"><i class="fa text-white fa-arrow-circle-right" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-5" style="display: none;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text11"><?php echo $text11; ?></span>
                                    <button class="btn btn-primary" onclick="saveContent('11', 'text11')"><span class="fa fa-code"></span>Save</button>

                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text12"><?php echo $text12; ?></span>
                                    <button class="btn btn-primary" onclick="saveContent('12', 'text12')"><span class="fa fa-code"></span>Save</button>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    <input name="attach" id="GigAttach" class="form-control" type="file">									
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
                                        <a href="#" onclick="questionSlide.next()"><i class="fa text-white fa-arrow-circle-right" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-6" style="display: none;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text13"><?php echo $text13; ?></span>
                                    <button class="btn btn-primary" onclick="saveContent('13', 'text13')"><span class="fa fa-code"></span>Save</button>

                                </h3>
                                <p class="excert">
                                    <span class="badge">Select number of hours you prefer</span>
                                </p>
                                <label>Edit estimated budget:</label>
                                <div class="alert alert-info" id="showbudget">
                                    <a href="#" class="alert-link">Alert!</a>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <button class="btn btn-success" onclick="addOptions('option3', 'addbudget')">Add</button>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Add Budget" id="addbudget">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    <select class="form-control" id="budget">
                                        
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
                                        <a href="#" onclick="questionSlide.next()"><i class="fa text-white fa-arrow-circle-right" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>

                    <div class="questions q-7" style="display: none;">

                        <div class="single-post row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mt-20 mb-20">
                                    <span class="edit-text" id="text15"><?php echo $text15; ?></span>
                                   <button class="btn btn-primary" onclick="saveContent('15', 'text15')"><span class="fa fa-code"></span>Save</button>

                                </h3>
                                <p class="excert">
                                    <span class="edit-text" id="text16"><?php echo $text16; ?></span>
                                   <button class="btn btn-primary" onclick="saveContent('16', 'text16')"><span class="fa fa-code"></span>Save</button>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    <input id="GigEstTime" class="form-control" min="2010-12-31" type="datetime">								
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
                                        <p>Post my project</p>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#"><i class="text-white fa fa-paper-plane" style="font-size:60px !important;"></i></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>

                    </div>


                </div>
                <br>
                <div class="alert alert-info">
                    <a href="#" class="alert-link">Alert!</a> When a user post a project, before they could post the second project they are going to see the alert below unless the first project is marked complete it is then they could post a new project</h2>
                </div>
                <div class="col-lg-2">

                </div>
                <div class="col-lg-8 posts-list">
                    <div class="col-lg-12">
                        <div class="quotes">
                            <h4 class="text-center"><strong>
                                    <span class="edit-text" id="text17"><?php echo $text17; ?></span>
                                    <button class="btn btn-primary" onclick="saveContent('17', 'text17')"><span class="fa fa-code"></span>Save</button>
                                </strong></h4>
                            <p class="">
                                <span class="edit-text" id="text18" ><?php echo $text18; ?></span>
                                <button class="btn btn-primary" onclick="saveContent('18', 'text18')"><span class="fa fa-code"></span>Save</button>
                            </p>            						
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        </div>	
    </section>
</div>
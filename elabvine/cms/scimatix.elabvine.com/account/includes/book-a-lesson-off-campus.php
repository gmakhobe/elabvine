<div class="container">
    <h4 class="text-center">Off Campus Tutoring</h4>
    <div class="off-campus-questions" id="book-a-lesson-step-1">
        <div class="progress">
            <div class="progress-bar" style="width:20%"></div>
        </div> 
        <h4 class="text-center">Step 1</h4>
        <hr>
        <h4>Physical Address:</h4>
        <div class="row">
            <div class="col-sm-12"><label>Address:</label></div>
            <div class="col-sm-6">
                <label>Street Address:</label>
                <input value="<?php echo $address_street; ?>" type="text" id="off-campus-address-1" placeholder="Street Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Street Address'" required="" class="single-input">

            </div>
            <div class="col-sm-6">
                <label>Suburb:</label>
                <input value="<?php echo $address_suburb; ?>" type="text" id="off-campus-address-2" placeholder="Suburb" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Suburb'" required="" class="single-input">
            </div>
            <div class="col-sm-6">
                <label>City:</label>
                <input value="<?php echo $address_city; ?>" type="text" id="off-campus-address-3" placeholder="City" onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'" required="" class="single-input">
            </div>
            <div class="col-sm-6">
                <label>Zip Code:</label>
                <input value="<?php echo $address_zip; ?>" type="text" id="off-campus-address-4" placeholder="Zip Code" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zip Code'" required="" class="single-input">
            </div>
        </div>
        <button style="float: right" onclick="offCampusQuestionsSlide.next()" class="genric-btn info circle arrow">Next <span class="lnr lnr-arrow-right"></span></button>
    </div>
    <div class="off-campus-questions" id="book-a-lesson-step-2">
        <div class="progress">
            <div class="progress-bar" style="width:40%"></div>
        </div> 
        <h4 class="text-center">Step 2</h4>
        <hr>
        <label>Residence:</label>
        <p>Is the place mentioned in Step 1 your home, friends house, public place e.g library or a coffee shop please type in below.</p>
        <input type="text" id="off-campus-residence" placeholder="Residence" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Residence'" required="" class="single-input"><br>
         <button style="float: left" onclick="offCampusQuestionsSlide.previous()" class="genric-btn danger circle arrow"><span class="lnr lnr-arrow-left"></span> Previous</button>
        <button style="float: right" onclick="offCampusQuestionsSlide.next()" class="genric-btn info circle arrow">Next <span class="lnr lnr-arrow-right"></span></button>
    </div>
    <div class="off-campus-questions" id="book-a-lesson-step-3">
        <div class="progress">
            <div class="progress-bar" style="width:60%"></div>
        </div> 
        <h4 class="text-center">Step 3</h4>
        <hr>
        <div class="mt-10">
            <label>Subject(s)</label>
            <p>Type in subjects you need help with.</p>
            <input type="text" id="off-campus-subject" placeholder="Subject(s)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject(s)'" required="" class="single-input">
        </div>
        <div class="mt-10">
            <label>Grade</label>
            <p>Choose grade.</p>
            <select id="off-campus-grade" class="form-control">
                <option value="Grade 1">Grade 1</option>
                <option value="Grade 2">Grade 2</option>
                <option value="Grade 3">Grade 3</option>
                <option value="Grade 4">Grade 4</option>
                <option value="Grade 5">Grade 5</option>
                <option value="Grade 6">Grade 6</option>
                <option value="Grade 7">Grade 7</option>
                <option value="Grade 8">Grade 8</option>
                <option value="Grade 9">Grade 9</option>
                <option value="Grade 10">Grade 10</option>
                <option value="Grade 11">Grade 11</option>
                <option value="Grade 12">Grade 12</option>
            </select>
        </div> <br>
         <button style="float: left" onclick="offCampusQuestionsSlide.previous()" class="genric-btn danger circle arrow"><span class="lnr lnr-arrow-left"></span> Previous</button>
        <button style="float: right" onclick="offCampusQuestionsSlide.next()" class="genric-btn info circle arrow">Next <span class="lnr lnr-arrow-right"></span></button>
    </div>
    <div class="off-campus-questions" id="book-a-lesson-step-4">
        <div class="progress">
            <div class="progress-bar" style="width:80%"></div>
        </div> 
        <h4 class="text-center">Step 4</h4>
        <hr>
        <div class="mt-10">
            <label>Tell us more</label>
            <p>Tell us what chapter(s) you need help with subtopics, assignments or anything you feel mentioning.</p>
            <textarea class="common-textarea form-control" id="off-campus-explaination" placeholder="Tell us more" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tell us more'" required=""></textarea>
        </div>
        <div class="mt-10">
            <label>Attachment</label>
            <p>If you have any attachment please attach it.<strong>Not compulsory</strong></p>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="off-campus-attachment">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div> <br>
        <button style="float: left" onclick="offCampusQuestionsSlide.previous()" class="genric-btn danger circle arrow"><span class="lnr lnr-arrow-left"></span> Previous</button>
        <button style="float: right" onclick="offCampusQuestionsSlide.next()" class="genric-btn info circle arrow">Next <span class="lnr lnr-arrow-right"></span></button>
    </div>
    <div class="off-campus-questions" id="book-a-lesson-step-5">
        <div class="progress">
            <div class="progress-bar" style="width:100%"></div>
        </div> 
        <h4 class="text-center">Step 5</h4>
        <hr>
        <div class="mt-10">
            <label>Choose Length</label>
            <p>Select length of your lesson in hours.</p>
            <select id="off-campus-lesson-length" class="form-control">
                <?php echo $hoursWidget; ?>
            </select>
        </div>
        <div class="mt-10">
            <label>Date</label>
            <p>When do you want the lesson to take place.</p>
            <div class="input-group mb-3">
                <input type="date" id="off-campus-date" class="form-control">
                <select id="off-campus-hours" class="form-control">
                    <?php echo $hoursRequired; ?>
                </select>
                <select id="off-campus-minutes" class="form-control">
                    <?php echo $minutesRequired; ?>
                </select>
            </div>
        </div> <br>
        <button style="float: left" onclick="offCampusQuestionsSlide.previous()" class="genric-btn danger circle arrow"><span class="lnr lnr-arrow-left"></span> Previous</button>
        <button id="offCampusTutoring" onclick="offCampusTutoring();" style="float: right" class="genric-btn primary circle arrow">Book Lesson <span class="lnr lnr-arrow-right"></span></button>
    </div>
</div>
<script>
    var offCampusQuestionsSlide = w3.slideshow(".off-campus-questions", 0);
</script>
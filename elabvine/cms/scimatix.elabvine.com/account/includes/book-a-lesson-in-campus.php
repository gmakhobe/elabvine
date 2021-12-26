<div class="container">
    <h4 class="text-center">On Campus Tutoring</h4>
    <div class="in-campus-questions" id="book-a-lesson-step-1">
        <div class="progress">
            <div class="progress-bar" style="width:33%"></div>
        </div> 
        <h4 class="text-center">Step 1</h4>
        <hr>
        <div class="mt-10">
            <label>Subject(s)</label>
            <p>Type in subjects you need help with.</p>
            <input type="text" id="subject" placeholder="Subject(s)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject(s)'" required="" class="single-input">
        </div>
        <div class="mt-10">
            <label>Grade</label>
            <p>Choose grade.</p>
            <select id="grade" class="form-control">
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
        <button style="float: right" onclick="inCampusQuestionsSlide.next()" class="genric-btn info circle arrow">Next <span class="lnr lnr-arrow-right"></span></button>
    </div>
    <div class="in-campus-questions" id="book-a-lesson-step-2">
        <div class="progress">
            <div class="progress-bar" style="width:66%"></div>
        </div> 
        <h4 class="text-center">Step 2</h4>
        <hr>
        <div class="mt-10">
            <label>Tell us more</label>
            <p>Tell us what chapter(s) you need help with subtopics, assignment or anything you feel mentioning.</p>
            <textarea class="common-textarea form-control" id="explaination" placeholder="Tell us more" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tell us more'" required=""></textarea>
        </div>
        <div class="mt-10">
            <label>Attachment</label>
            <p>If you have any attachment please attach it.<strong>Not compulsory</strong></p>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="attachment">
                <label class="custom-file-label" for="attachment">Choose file</label>
            </div>
        </div> <br>
        <button style="float: left" onclick="inCampusQuestionsSlide.previous()" class="genric-btn danger circle arrow"><span class="lnr lnr-arrow-left"></span> Previous</button>
        <button style="float: right" onclick="inCampusQuestionsSlide.next()" class="genric-btn info circle arrow">Next <span class="lnr lnr-arrow-right"></span></button>
    </div>
    <div class="in-campus-questions" id="book-a-lesson-step-3">
        <div class="progress">
            <div class="progress-bar" style="width:100%"></div>
        </div> 
        <h4 class="text-center">Step 3</h4>
        <hr>
        <div class="mt-10">
            <label>Choose Length</label>
            <p>Select length of your lesson in hours.</p>
            <select id="lesson-length" class="form-control">
                <?php echo $hoursWidget; ?>
            </select>
        </div>
        <div class="mt-10">
            <label>Date</label>
            <p>When do you want the lesson to take place.</p>
            <div class="input-group mb-3">
                <input type="date" id="date" class="form-control">
                <select id="hours" class="form-control">
                    <?php echo $hoursRequired; ?>
                </select>
                <select id="minutes" class="form-control">
                    <?php echo $minutesRequired; ?>
                </select>
            </div>
        </div> <br>
        <button style="float: left" onclick="inCampusQuestionsSlide.previous()" class="genric-btn danger circle arrow"><span class="lnr lnr-arrow-left"></span> Previous</button>
        <button id="inCampusTutoring" onclick="inCampusTutoring();" style="float: right" class="genric-btn primary circle arrow">Book Lesson <span class="lnr lnr-arrow-right"></span></button>
    </div>
</div>
<script>
    var inCampusQuestionsSlide = w3.slideshow(".in-campus-questions", 0);
</script>
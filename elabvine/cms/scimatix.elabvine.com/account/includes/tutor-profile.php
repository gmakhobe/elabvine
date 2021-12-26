<div class="container">

    <h4 class="text-center">Tutoring Profile</h4>
    <div class="tutor-profile" id="book-a-lesson-step-1">
        <div class="progress">
            <div class="progress-bar" style="width:20%"></div>
        </div> 
        <h4 class="text-center">Step 1</h4>
        <hr>
        <div class="mt-10">
            <label>Language Competency</label>
            <p>Select 2 languages</p>
            <p>First Language*</p>
            <select id="language-1" class="form-control">
                <option value=""></option>
                <option value="Zulu">Zulu</option>
                <option value="Xhosa">Xhosa</option>
                <option value="Afrikaans">Afrikaans</option>
                <option value="English">English</option>
                <option value="Northern Sotho">Northern Sotho</option>
                <option value="Tswana">Tswana</option>
                <option value="Sotho">Sotho</option>
                <option value="Tsonga">Tsonga</option>
                <option value="Swati">Swati</option>
                <option value="Venda">Venda</option>
                <option value="Ndebele">Ndebele</option>
            </select>
            <p>Second Language*</p>
            <select id="language-2" class="form-control">
                <option value=""></option>
                <option value="Zulu">Zulu</option>
                <option value="Xhosa">Xhosa</option>
                <option value="Afrikaans">Afrikaans</option>
                <option value="English">English</option>
                <option value="Northern Sotho">Northern Sotho</option>
                <option value="Tswana">Tswana</option>
                <option value="Sotho">Sotho</option>
                <option value="Tsonga">Tsonga</option>
                <option value="Swati">Swati</option>
                <option value="Venda">Venda</option>
                <option value="Ndebele">Ndebele</option>
            </select>
        </div>
        <br>
        <button style="float: right" onclick="tutorProfileQuestionsSlide.next()" class="genric-btn info circle arrow">Next <span class="lnr lnr-arrow-right"></span></button>
    </div>
    <div class="tutor-profile" id="book-a-lesson-step-2">
        <div class="progress">
            <div class="progress-bar" style="width:40%"></div>
        </div> 
        <h4 class="text-center">Step 2</h4>
        <hr>
        <div class="mt-10">
            <label>Academic Information:</label>
            <p>If you are currently a student or was a student before at a college or university fill in below</p>
            <label>Student Number:</label>
            <input type="text" id="student-number" placeholder="Student Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Student Number'" required="" class="single-input">  
            <label>Degree Enrolled For:</label>
            <p>Either presently or before.</p>
            <input type="text" id="degree" placeholder="Degree" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Degree'" required="" class="single-input">  
            <label>State Any Short Courses Completed:</label>
            <textarea class="common-textarea form-control" id="short-course" placeholder="Short Courses" onfocus="this.placeholder = 'Short Courses'" onblur="this.placeholder = 'Short Courses'" required=""></textarea>
        </div>
        <br>
        <button style="float: left" onclick="tutorProfileQuestionsSlide.previous()" class="genric-btn danger circle arrow"><span class="lnr lnr-arrow-left"></span> Previous</button>
        <button style="float: right" onclick="tutorProfileQuestionsSlide.next()" class="genric-btn info circle arrow">Next <span class="lnr lnr-arrow-right"></span></button>
    </div>
    <div class="tutor-profile" id="book-a-lesson-step-3">
        <div class="progress">
            <div class="progress-bar" style="width:60%"></div>
        </div> 
        <h4 class="text-center">Step 3</h4>
        <hr>
        <div class="mt-10">
            <label>Employment Information:</label>
            <p>If you are currently employed or have been employed before fill in below</p>
            <label>Employer:</label>
            <input type="text" id="employer" placeholder="Employer" onfocus="this.placeholder = 'Employer'" onblur="this.placeholder = 'Employer'" required="" class="single-input">  
            <label>Position:</label>
            <input type="text" id="position" placeholder="Position" onfocus="this.placeholder = 'Position'" onblur="this.placeholder = 'Position'" required="" class="single-input">  
            <label>Period Employed:</label>
            <select id="period-employed" class="form-control">
                <option value="Less Than 1 Year">Less Than 1 Year</option>
                <option value="1 Year">1 Year</option>
                <option value="2 Years">2 Years</option>
                <option value="3 Years">3 Years</option>
                <option value="4 Years">4 Years</option>
                <option value="5 Years">5 Years</option>
                <option value="More Than 5 Years">More Than 5 Years</option>
            </select>
        </div>
        <br>
        <button style="float: left" onclick="tutorProfileQuestionsSlide.previous()" class="genric-btn danger circle arrow"><span class="lnr lnr-arrow-left"></span> Previous</button>
        <button style="float: right" onclick="tutorProfileQuestionsSlide.next()" class="genric-btn info circle arrow">Next <span class="lnr lnr-arrow-right"></span></button>
    </div>
    <div class="tutor-profile" id="book-a-lesson-step-4">
        <div class="progress">
            <div class="progress-bar" style="width:80%"></div>
        </div> 
        <h4 class="text-center">Step 4</h4>
        <hr>
        <div class="mt-10">
            <label>Subjects you are good at*:</label>
            <p>List all and separate by comma e.g Mathematics, English</p>
            <input type="text" id="subjects" placeholder="Subjects" onfocus="this.placeholder = 'Subjects'" onblur="this.placeholder = 'Subjects'" required="" class="single-input">  
            <label>Grade associated with the subjects*:</label>
            <p>List all and separate by comma e.g Grade 1, Grade 2</p>
            <input type="text" id="grades" placeholder="Grades" onfocus="this.placeholder = 'Grades'" onblur="this.placeholder = 'Grades'" required="" class="single-input">  

        </div>
        <br>
        <button style="float: left" onclick="tutorProfileQuestionsSlide.previous()" class="genric-btn danger circle arrow"><span class="lnr lnr-arrow-left"></span> Previous</button>
        <button style="float: right" onclick="tutorProfileQuestionsSlide.next()" class="genric-btn info circle arrow">Next <span class="lnr lnr-arrow-right"></span></button>
    </div>
    <div class="tutor-profile" id="book-a-lesson-step-5">
        <div class="progress">
            <div class="progress-bar" style="width:100%"></div>
        </div> 
        <h4 class="text-center">Step 5</h4>
        <hr>
        <div class="mt-10">
            <label>Id Copy*</label>
            <p>Attach Identification Document</p>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="id-copy">
                <label class="custom-file-label" for="attachment">Choose file</label>
            </div>
        </div>
        <div class="mt-10">
            <label>CV Copy*</label>
            <p>Attach Curriculum Vitae</p>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="cv-copy">
                <label class="custom-file-label" for="attachment">Choose file</label>
            </div>
        </div> <br>
        <button style="float: left" onclick="tutorProfileQuestionsSlide.previous()" class="genric-btn danger circle arrow"><span class="lnr lnr-arrow-left"></span> Previous</button>
        <button id="tutor-profile" style="float: right" class="genric-btn primary circle arrow">Publish Profile <span class="lnr lnr-arrow-right"></span></button>
    </div>

</div>
<script>
    var tutorProfileQuestionsSlide = w3.slideshow(".tutor-profile", 0);
    
</script>
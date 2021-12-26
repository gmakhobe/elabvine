<?php include("../php/session.php");
//if complete return student to dashboard
if($account_status == "Step 4" && $account_type == "Student"){
    header("Location: ./");
}else if($account_status == "Step 3" && $account_type == "Tutor"){
    header("Location: ./");
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Account Config</title>
        <!-- Meta Description -->
        <meta name="description" content="Set up your user account.">      
        <!-- Header -->
        <?php include("headers.php"); ?>
    </head>
    <body>	

        <!-- Navigation -->
        <?php include("navigation-initial.php"); ?>
        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Account Config				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Dashboard </a>  <span class="lnr lnr-arrow-right"></span>  <a href="account-config.php"> Account Config</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->	
        <!-- Start contact-page Area -->
        <section class="contact-page-area section-gap">
            <div class="container">
                <div class="menu-content col-lg-12">
                    <div class="title text-center">
                        <h3>Set up your account, <?php echo $name; ?>.</h3>
                    </div>
                </div>
                <div class="row pt-25">
                    <div class="col-lg-2 d-flex flex-column address-wrap">

                    </div>
                    <div class="col-lg-8 accordion-left">

                        <!--Nav Tabs-->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu1">Student</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu2">Tutor</a>
                            </li>
                        </ul>
                        <!--End Nav Tabs-->
                        <!--Tab Content-->
                        <div class="tab-content">
                            <div class="tab-pane container active">
                                Select Account Type
                            </div>
                            <div class="tab-pane container fade" id="menu1">
                                <div id="student-step-1">
                                    <h4>Student Information:</h4>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Name:</label>
                                            <input value="<?php echo $name; ?>" type="text" id="s-name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required="" class="single-input">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Surname:</label>
                                            <input type="text" id="s-surname" placeholder="Surname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Surname'" required="" class="single-input">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Gender:</label>
                                            <div class="default-select" id="default-select">
                                                <select id="s-gender" style="display: none;">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Date of Birth:</label>
                                            <input type="date" id="s-datebirth" placeholder="Date of Birth" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date of Birth'" required="" class="single-input">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Grade:</label>
                                            <div class="default-select" id="default-select">
                                                <select id="s-grade" style="display: none;">
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
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>School:</label>
                                            <input type="text" id="s-school" placeholder="School Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'School Name'" required="" class="single-input">
                                        </div>
                                    </div>
                                    <br>
                                    <button id="button-go-to-step-2" class="genric-btn primary">Next</button> | Next > Physical Address Information
                                    <br>
                                </div>
                                <br>
                                <div id="student-step-2">
                                    <h4>Physical Address:</h4>
                                    <div class="row">
                                        <div class="col-sm-12"><label>Address:</label></div>
                                        <div class="col-sm-6">
                                            <label>Street Address:</label>
                                            <input type="text" id="s-address-1" placeholder="Street Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Street Address'" required="" class="single-input">

                                        </div>
                                        <div class="col-sm-6">
                                            <label>Suburb:</label>
                                            <input type="text" id="s-address-2" placeholder="Suburb" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Suburb'" required="" class="single-input">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>City:</label>
                                            <input type="text" id="s-address-3" placeholder="City" onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'" required="" class="single-input">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Zip Code:</label>
                                            <input type="text" id="s-address-4" placeholder="Zip Code" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zip Code'" required="" class="single-input">
                                        </div>
                                    </div>
                                    <br>
                                    <button id="button-go-to-step-3" class="genric-btn primary">Next</button> | Next > Parent/Guardian Information
                                    <br>
                                </div>
                                <br>
                                <div id="student-step-3">
                                    <h4>Parent/Guardian:</h4>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Guardian Name:</label>
                                            <input type="text" id="g-name" placeholder="Guardian Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Guardian Name'" required="" class="single-input">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Guardian Phone:</label>
                                            <input type="tel" id="g-phone" placeholder="Guardian Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Guardian Phone'" required="" class="single-input">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Guardian Email:</label>
                                            <input type="email" id="g-email" placeholder="Guardian Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Guardian Email'" required="" class="single-input">
                                        </div>
                                    </div>
                                    <br>
                                    <button id="button-Finished" class="genric-btn primary">Finished</button> | Dashboard
                                    <br>
                                </div>
                            </div>
                            <div class="tab-pane container fade" id="menu2">
                                <div id="tutor-step-1">
                                    <h4>Personal Information:</h4>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Name:</label>
                                            <input type="text" id="t-name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required="" class="single-input">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Surname:</label>
                                            <input type="text" id="t-surname" placeholder="Surname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Surname'" required="" class="single-input">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Gender:</label>
                                            <div class="default-select" id="default-select">
                                                <select id="t-gender" style="display: none;">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Id Number:</label>
                                            <input type="text" id="t-identification" placeholder="Id Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Id Number'" required="" class="single-input">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>occupation:</label>
                                            <div class="default-select" id="default-select">
                                                <select id="t-occupation" style="display: none;">
                                                    <option value="Student">Student</option>
                                                    <option value="Not Employed">Not Employed</option>
                                                    <option value="Employed">Employed</option>
                                                    <option value="Self Employed">Self Employed</option>
                                                    <option value="Part-Time Employed">Part-Time Employed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button id="button-tutor-go-to-step-1" class="genric-btn primary">Next</button> | Next > Physical Address Information
                                    <br>
                                </div>
                                <div id="tutor-step-2">
                                    <h4>Physical Address:</h4>
                                    <div class="row">
                                        <div class="col-sm-12"><label>Address:</label></div>
                                        <div class="col-sm-6">
                                            <label>Street Address:</label>
                                            <input type="text" id="t-address-1" placeholder="Street Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Street Address'" required="" class="single-input">

                                        </div>
                                        <div class="col-sm-6">
                                            <label>Suburb:</label>
                                            <input type="text" id="t-address-2" placeholder="Suburb" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Suburb'" required="" class="single-input">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>City:</label>
                                            <input type="text" id="t-address-3" placeholder="City" onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'" required="" class="single-input">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Zip Code:</label>
                                            <input type="text" id="t-address-4" placeholder="Zip Code" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zip Code'" required="" class="single-input">
                                        </div>
                                    </div>
                                    <br>
                                    <button id="button-tutor-finished" class="genric-btn primary">Finish</button> | Dashboard
                                    <br>
                                </div>
                            </div>
                        </div>
                        <!--End Tab Content-->

                    </div>	
                </div>
                <div class="col-lg-2 d-flex flex-column address-wrap">

                </div>
            </div>
        </div>	
    </section>
    <!-- End contact-page Area -->
    <!-- Footer -->
    <?php include("footer.php"); ?>
    
</body>
</html>
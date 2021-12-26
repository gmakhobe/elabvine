<h3>Edit Profile information</h3>
<h4>Personal Information:</h4>
<div class="row">
    <div class="col-sm-6">
        <label>Name:</label>
        <input value="<?php echo $name; ?>" type="text" id="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required="" class="single-input">
    </div>
    <div class="col-sm-6">
        <label>Surname:</label>
        <input value="<?php echo $surname; ?>" type="text" id="surname" placeholder="Surname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Surname'" required="" class="single-input">
    </div>
    <div class="col-sm-6">
        <label>Gender:</label><br>
        <p><?php echo $gender; ?></p>
    </div>
    <div class="col-sm-6">
        <label>Date of Birth:</label><br>
        <p><?php echo $date_birth; ?></p>
    </div>
    <div class="col-sm-6">
        <label>Grade:</label>
        <div class="default-select" id="default-select">
            <select id="grade" style="display: none;">
                <option value="<?php echo $grade; ?>"><?php echo $grade; ?></option>
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
        <input value="<?php echo $school; ?>" type="text" id="school" placeholder="School Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'School Name'" required="" class="single-input">
    </div>
</div>
<hr>

<h4>Physical Address:</h4>
<div class="row">
    <div class="col-sm-12"><label>Address:</label></div>
    <div class="col-sm-6">
        <label>Street Address:</label>
        <input value="<?php echo $address_street; ?>" type="text" id="address-1" placeholder="Street Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Street Address'" required="" class="single-input">

    </div>
    <div class="col-sm-6">
        <label>Suburb:</label>
        <input value="<?php echo $address_suburb; ?>" type="text" id="address-2" placeholder="Suburb" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Suburb'" required="" class="single-input">
    </div>
    <div class="col-sm-6">
        <label>City:</label>
        <input value="<?php echo $address_city; ?>" type="text" id="address-3" placeholder="City" onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'" required="" class="single-input">
    </div>
    <div class="col-sm-6">
        <label>Zip Code:</label>
        <input value="<?php echo $address_zip; ?>" type="text" id="address-4" placeholder="Zip Code" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zip Code'" required="" class="single-input">
    </div>
</div>
<hr>
<h4>Parent/Guardian:</h4>
<div class="row">
    <div class="col-sm-6">
        <label>Guardian Name:</label>
        <input value="<?php echo $guardian_name; ?>" type="text" id="g-name" placeholder="Guardian Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Guardian Name'" required="" class="single-input">
    </div>
    <div class="col-sm-6">
        <label>Guardian Phone:</label>
        <input value="<?php echo $guardian_phone; ?>" type="tel" id="g-phone" placeholder="Guardian Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Guardian Phone'" required="" class="single-input">
    </div>
    <div class="col-sm-6">
        <label>Guardian Email:</label>
        <input value="<?php echo $guardian_email; ?>" type="email" id="g-email" placeholder="Guardian Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Guardian Email'" required="" class="single-input">
    </div>
</div>
<hr>
<h4>Other Information:</h4>
<div class="row">
    <div class="col-sm-6">
        <label>Email Address:</label><br>
        <p><?php echo $email; ?></p>
    </div>
    <div class="col-sm-6">
        <label>Password:</label>
        <input value="<?php echo $password; ?>" type="text" id="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required="" class="single-input">
    </div>
</div>
<button id="button-save-profile" class="genric-btn primary radius">Save Profile</button>
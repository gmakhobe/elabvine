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
        <label>Id Number:</label><br>
        <p><?php echo $identification;?></p>
    </div>
    <div class="col-sm-6">
        <label>occupation:</label>
        <div class="default-select" id="default-select">
            <select id="occupation" style="display: none;">
                <option value="<?php echo $occupation;?>"><?php echo $occupation;?></option>
                <option value="Student">Student</option>
                <option value="Not Employed">Not Employed</option>
                <option value="Employed">Employed</option>
                <option value="Self Employed">Self Employed</option>
                <option value="Part-Time Employed">Part-Time Employed</option>
            </select>
        </div>
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
<br>
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
<br>
<button id="button-save-profile-tutor" class="genric-btn primary radius">Save Profile</button>
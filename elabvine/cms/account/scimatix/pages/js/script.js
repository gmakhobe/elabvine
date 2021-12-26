$(document).ready(function () {
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});

function load_unseen_notification() {
    var xmlhttp = new XMLHttpRequest();

    var fd = new FormData();
    fd.append("a1", 1);

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            data = JSON.parse(this.responseText);
            var x = document.getElementsByClassName("notifications");
            document.getElementById("notifi").innerHTML = data.notification;
            //if(data.unseen_notification > 0){
            var y = document.getElementsByClassName("count");
            //}

            for (i = 0; i < x.length; i++) {
                x[i].innerHTML = data.notification;
            }
            for (i = 0; i < y.length; i++) {
                y[i].innerHTML = data.unseen_notification;
            }
        }
    };
    xmlhttp.open("POST", "php/notifications.php", true);
    //xmlhttp.setRequestHeader("Content-Type", "text/plain");
    xmlhttp.send(fd);
}

load_unseen_notification();

function seen_notifications() {
    var xhttp = new XMLHttpRequest();

    var fd = new FormData();
    fd.append("a2", 1);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var res = this.responseText;
            if (res != "") {
                load_unseen_notification();
            }
        }
    };
    xhttp.open("POST", "php/notifications.php", true);
    xhttp.send(fd);
}
$(document).ready(function () {
    $(".search").hide();
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
})
$(".search").hide();
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("gigs").innerHTML = "Type something...";
        $("#gigs").hide();
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("gigs").innerHTML = this.responseText;
            $("#gigs").show();
        }
    };
    xhttp.open("GET", "php/fetch-gigs.php?action6="+str, true);
    xhttp.send();
}

function uploadProfilePicture() {
    var profile = document.getElementById('profile-picture');


    if (profile == "" || profile == "undefined") {

        alertify.alert('Upload Profile', "No file was selected.", function () {
            alertify.error('Error!');
        }).bringToFront();

    } else {
        profile = profile.files[0];

        var fd = new FormData();
        fd.append("profile", profile);
        fd.append("a2", 2);

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

                if (this.responseText == "Fatal error") {
                    
                    alertify.alert('Upload Profile', "There was an error while trying to upload your profile picture please try again.", function () {
                        alertify.error('Error!');
                    }).bringToFront();
                    
                } else if (this.responseText == "No Img") {
                    
                    alertify.alert('Upload Profile', "Sorry, only JPG, JPEG, PNG & GIF files are allowed.", function () {
                        alertify.error('Error!');
                    }).bringToFront();
                    
                } else if (this.responseText == "success") {
                     
                    alertify.alert('Upload Profile', "Profile Picture was uploaded successful.", function () {
                        alertify.success('Success!');
                    }).bringToFront();
                    
                      setTimeout(function () {
                        window.location.href = "dashboard.php";
                    }, 2500);
                    
                } else if (this.responseText == "error") {
                    
                    alertify.alert('Upload Profile', "There was an error while trying to upload your profile picture please try again.", function () {
                        alertify.error('Error!');
                    }).bringToFront();
                    
                }

                $(".change-profile-menu-change-profile").hide();
                $(".change-profile-menu-save").hide();
                $(".change-profile").show();


            }
        };
        xmlhttp.open("POST", "php/post.php", true);
        xmlhttp.send(fd);

    }
}
function saveProfile() {

    var namesurname = document.getElementById("pro-namesurname").value;
    var grade = document.getElementById("pro-grade");
    grade = grade.options[grade.selectedIndex].text;
    var dateofbirth = document.getElementById("pro-dateofbirth").value;
    var accounttype = document.getElementById("pro-accounttype");
    accounttype = accounttype.options[accounttype.selectedIndex].text;
    var countries = document.getElementById("pro-country");
    countries = countries.options[countries.selectedIndex].text;
    var shortbio = document.getElementById("pro-shortbio").value;
    var cellnumber = document.getElementById("pro-cellnumber").value;
    var password = document.getElementById("pro-password").value;


    if (namesurname == "" || dateofbirth == "" || accounttype == "" || countries == "" || cellnumber == "" || password == "" || grade == "") {

        alertify.alert('Profile', "Please fill in all the required fields.", function () {
            alertify.error('Error!');
        }).bringToFront();

    } else {

        var fd = new FormData();
        fd.append("a3", 1);
        fd.append("namsur", namesurname);
        fd.append("gra", grade);
        fd.append("datbir", dateofbirth);
        fd.append("acc", accounttype);
        fd.append("cou", countries);
        fd.append("shobio", shortbio);
        fd.append("cel", cellnumber);
        fd.append("pas", password);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                if (this.responseText == "success") {

                    alertify.alert('Profile', "Your profile was successfully updated.", function () {
                        alertify.success('Success!');
                    }).bringToFront();

                    setTimeout(function () {
                        window.location.href = "dashboard.php"
                    }, 2500);

                } else {

                    alertify.alert('Profile', "An error occured please try again.", function () {
                        alertify.error('Error!');
                    }).bringToFront();

                }

            }
        };
        xmlhttp.open("POST", "php/post.php", true);
        xmlhttp.send(fd);

    }
}
function load_unseen_gigs() {
    var xmlhttp = new XMLHttpRequest();

    var fd = new FormData();
    fd.append("a1", 1);

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("gig-feed").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("POST", "php/fetch-gigs.php", true);
    xmlhttp.send(fd);
}

load_unseen_gigs();
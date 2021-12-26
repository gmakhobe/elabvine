<?php

include('../../php/config.php');


if (!isset($_COOKIE['query_company_cookie'])) {
    $our_companyid = "";
} else {
    $our_companyid = mysqli_real_escape_string($DATABASE_CONNECTION, $_COOKIE['query_company_cookie']);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company WHERE Id = '$our_companyid';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $our_emailaddress = $row['Email_Address'];
    $our_subscription = $row['Account_Type'];
}

if (isset($_REQUEST['a1'])) {

    $companyname = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['cn']);
    $companyuri = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['cu']);
    $businesstype = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['bt']);

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company WHERE email_address = '$our_emailaddress';");
    if (mysqli_num_rows($sql) > 0) {

        if (mysqli_query($DATABASE_CONNECTION, "INSERT INTO `company_template` (`company_id`, `company_uri`, `favicon`, `header_icon`, `facebook`, `twitter`, `tell`, `email`, `header_bg`, `header_color`, `index_text1`, `index_text2`, `index_text3`, `index_text4`, `index_text5`, `index_text6`, `index_text7`, `index_text8`, `index_text9`, `index_text10`, `index_text11`, `index_text12`, `index_text13`, `index_text14`, `index_text15`, `index_text16`, `index_text17`, `index_text18`, `index_text19`, `index_text20`, `index_text21`, `index_text22`, `index_text23`, `index_text24`, `index_text25`, `index_text26`, `index_text27`, `index_banner1`, `index_banner2`, `index_banner3`, `index_section_2_image1`, `index_section_2_image2`, `index_section_2_image3`, `index_section_2_image4`, `index_section_2_image5`, `sign_text1`, `sign_text2`, `sign_text3`, `sign_text4`, `sign_image1`, `sign_image2`, `sign_banner1`, `sign_banner2`, `sign_banner3`, `dashboard_text1`, `dashboard_text2`, `dashboard_image1`, `dashboard_image2`, `dashboard_image3`, `dashboard_image4`, `dashboard_image5`, `dashboard_banner1`, `dashboard_banner2`, `dashboard_banner3`, `get_text1`, `get_text2`, `get_text3`, `get_text4`, `get_text5`, `get_text6`, `get_text7`, `get_text8`, `get_text9`, `get_text10`, `get_text11`, `get_text12`, `get_text13`, `get_text14`, `get_text15`, `get_text16`, `get_text17`, `get_text18`, `post_text1`, `post_text2`, `post_text3`, `post_text4`, `post_text5`, `post_text6`, `post_text7`, `post_text8`, `post_text9`, `post_text10`, `post_text11`, `post_text12`, `post_text13`, `post_text14`, `post_text15`, `post_text16`, `post_text17`, `post_text18`, `post_text19`, `post_text20`, `post_text21`, `post_text22`, `post_text23`, `post_text24`, `post_text25`, `footer_bg`, `footer_color1`, `footer_color2`) VALUES
('$our_companyid','$companyuri', 'cdn.elabvine.com/media/images/89904748764a3ce6531c61bb004d480f.png', 'cdn.elabvine.com/media/images/3a3a18f06f9e9d0d4a1adc60e660634b.png', 'elabvine', 'elabvine', '0763401996', 'givenmakhobela@elabvine.com<br>', '#0080c0', '#ffffff', 'Get expert tutors for any subject or module, online.', 'Thousands of students use elabvine as their problem solver.', 'Get Started', 'Need A Tutor?', 'It\'s easy. Simply post a project \"Get A Tutor\" and receive help request from tutors within minutes.', 'Start', 'Want To Tutor?', 'Simple process. Easily publish an eye catching profile and start receiving projects from students instantly.\r\n', 'Join', 'Popular Projects', 'These projects are mostly posted by students.', '\r\n                                \r\n                                \r\n                                Pure Mathematics Tutoring                                                                                   ', 'Post A Project Like This', '\r\n                                Mathematics Literacy Tutoring                            ', '\r\n                            \r\n                                Accounting Tutoring                                                    ', 'Physical Sciences Tutoring', 'Chemistry Tutoring', '<h2 class=\"text-white\">Whatâ€™s great about it?\r\n                        </h2>', '\r\n                        What ever help you need with your academics we have a community of experts to help you just sign up for an account and post any project you need help with.<br>', 'Qualified', '\r\n                                We look for qualifications when tutors join our platform.                            ', 'Verified', '\r\n                                Our tutors are verified and screened.', 'Sign Up Now<br>', 'How our platform works!', 'Watch A Video', 'How it works?', 'cdn.elabvine.com/media/images/483d793bf10a2f4a1090068a8e235abe.jpg', 'cdn.elabvine.com/media/images/b2ca5f120fb4d6df2f76183e9f760596.jpg', '#0080c0', 'cdn.elabvine.com/media/images/c5fbdac10b250ee82fc48cb983159b10.jpg', 'cdn.elabvine.com/media/images/47b9403d0ed97eacd77e072386599b63.jpg', 'cdn.elabvine.com/media/images/64b2a9032cde0b0c2dfb4e3cc6714547.jpg', 'cdn.elabvine.com/media/images/f24ec34daa49cf8046ad58c39d881430.jpg', 'cdn.elabvine.com/media/images/0c887e0b2aeefdb24db177297bc97b7e.jpg', 'Sign Up', 'Register for a new account', 'Sign in', 'Visit your account.', 'cdn.elabvine.com/media/images/a6bf82234b092a762e9a530bb8a293db.jpg', 'cdn.elabvine.com/media/images/739838df873e8a9287d780e068dd9102.jpg', 'cdn.elabvine.com/media/images/483d793bf10a2f4a1090068a8e235abe.jpg', 'cdn.elabvine.com/media/images/483d793bf10a2f4a1090068a8e235abe.jpg', '#ffff00', 'Get A Tutor?', 'Get A Tutor by posting a Tutoring gig and receive free quotes from \r\nexpert tutors within minutes, view profiles, ratings, profiles and chat \r\nwith them. Pay tutors only when you are 100% satisfied with their work. \r\nTutors can help you with Home Works, Assignments, Assessment Tasks, \r\nProjects, Test Revisions, Exam Revisions, Studying and Understand any \r\nSubject, Module or Course you want, online and instantly.\r\n                                ', 'cdn.elabvine.com/media/images/f4964dcee25043e0bd53159ffba6fa53.jpg', 'cdn.elabvine.com/media/images/f4964dcee25043e0bd53159ffba6fa53.jpg', 'cdn.elabvine.com/media/images/99cbbea8f74e0d128440eab5268a65f0.jpg', 'cdn.elabvine.com/media/images/ce17e73dfdacdab20252e8e6cad3b176.jpg', 'cdn.elabvine.com/media/images/3bfd032029376d7ae6da1ec10aed26fd.jpg', 'cdn.elabvine.com/media/images/483d793bf10a2f4a1090068a8e235abe.jpg', '#0080c0', 'cdn.elabvine.com/media/images/483d793bf10a2f4a1090068a8e235abe.jpg', 'Tell uwhat skill is required for your project.', 'Choosw from the options below.', 'Physics, Maths, , ', 'Name your project.', 'Give us a name', 'Choose a grade for your project', 'If you are in university you can simply choose \"University level\" option', 'Primary School, , , Secondary School', 'Tell us more', 'Tell us more', 'Upload any document. <small>(This field is not compulsory)</small>', 'Upload any document that might be helpful in explaining brief about your project. <small>(This field is not compulsory)</small>', 'What is your budget <small>(How much you want to pay)</small>?', ', , R200 - R350', 'When end date?', 'The longer the time the more you might be charged.', 'There is an active project.', 'Hi, there is currently an active project. To start a new project you need to end the current project first. Make sure that you are 100% okay with the results of the current project before you end it.', 'Profile Published!', 'Your profile is now published you will receive tutoring projects.', '<h3 class=\"mt-20 mb-20\">Publish your profile.                                    </h3>', 'Post an attractive tutoring profile and start receiving tutoring requests. First make sure you are proficient in the subjects you intend to tutor<br>For example:', ' You received +65% for high school subjects,                                     Or you received +65% for varsity subjects,                                     Or you have the relevant skills required, , , , , , , And you are you willing to tutor online via our platform', '<h3 class=\"mt-20 mb-20\">Highest grade you can teach\r\n                                    </h3>', 'If you are in grade 6 you can choose Primary School and if you are in College you can choose College.', '', 'Skill you are good at', 'Select skill you are good at.', 'Syllabus', '<p class=\"excert\">\r\n                                        Write the syllabus you are comortable with e.g CAPS, IEB or Cambridge.\r\n\r\n                                    </p>\r\n                                \r\n                                \r\n                                    \r\n                                        ', '<h3 class=\"mt-20 mb-20\">Who you are you?</h3>', 'Write a description of yourself.', 'School Experience', 'Write about where you were schooling up to now and study experience.\r\n                                    ', '<h3 class=\"mt-20 mb-20\">Upload your ID and Relevant Achievement\r\n                                    </h3>', 'Any achievement is ok provided that it proves you are good with the subject you can teach.\r\n                                    ', 'ID Copy:ID:', '<small>We need scanned ID Copy of your bar-coded South African ID. If you are non-SA citizen you can upload ID Copy of your passport.</small>', 'Relevant Achievements:', 'P<small>Please upload a copy of your relevant achievement.</small>', 'Publish Your Profile', 'Final Last Step.', '', '#004080', '#bcbcbc', '#ffffff');") && mysqli_query($DATABASE_CONNECTION, "UPDATE company SET company_name = '$companyname', company_uri = '$companyuri', business_type = '$businesstype', status = 'step 2' WHERE company_id = '$our_companyid';")) {

            #Insert and update company tables

            include("tables-template.php");

            if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {
                ###Create Subdmonain
                $cpanel_user = 'tircox9jxqhe';
                $cpanel_pass = '!QAZxsw2';
                $cpanel_skin = 'gl_paper_lantern';
                $cpanel_host = 'https://www.elabvine.com:2083';
                $dir = "public_html/$companyuri.elabvine.com";

                $sock = fsockopen("localhost", 2082);

                if (!$sock) {
                    print('Socket error');
                    exit();
                }

                $pass = base64_encode("$cpanel_user:$cpanel_pass");
                $in = "GET /frontend/$cpanel_skin/subdomain/doadddomain.html?rootdomain=elabvine&domain=$companyuri&dir=$dir\r\n";
                $in .= "HTTP/1.0\r\n";
                $in .= "Host:$cpanel_host\r\n";
                $in .= "Authorization: Basic $pass\r\n";
                $in .= "\r\n";

                fputs($sock, $in);

                while (!feof($sock)) {
                    $result .= fgets($sock, 128);
                }
                ###Create Subdmonain
                #Create tables for new company

                include("create-url.php");

                if (recurse_copy("../template", "../$companyuri.elabvine.com")) {
                    #Create new uri
                    echo "success";
                } else {
                    #Create new uri Error


                    $file_curi = fopen("../$companyuri.elabvine.com/php/companyuri.txt", "w");
                    $txt = "$companyuri";
                    fwrite($file_curi, $txt);
                    fclose($file_curi);

                    $file_config = 'config-template.txt';
                    $newfile_config = '../' . $companyuri . '.elabvine.com/php/config.php';

                    copy($file_config, $newfile_config);

                    echo "success";
                }
            } else {
                #Create tables for new company Error
                echo "error3";
            }
        } else {
            #Insert and update company tables Error
            echo "error2";
        }
    } else {

        echo "error1";
    }
} else if (isset($_REQUEST['a2'])) {

    $search = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['val']);

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT company_uri FROM company_template WHERE company_uri = '$search';");

    if (mysqli_num_rows($sql) > 0) {
        echo "exists";
    } else {
        echo "available";
    }
} else if (isset($_REQUEST['a3'])) {

    $nt = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['nt']);
    $nc = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['nc']);
    $now = date("Y-m-d H:i:s");

    if (mysqli_query($DATABASE_CONNECTION, "INSERT INTO company_notes(Company_Id, Title, Content, Posted) VALUES('$our_companyid', '$nt', '$nc', '$now');")) {
        echo "success";
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a4'])) {

    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['id']);

    if (mysqli_query($DATABASE_CONNECTION, "DELETE FROM company_notes WHERE Id = '$id';")) {
        echo "success";
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a5'])) {

    $an = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['an']);
    $cn = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['cn']);

    if (mysqli_query($DATABASE_CONNECTION, "UPDATE company SET company_name = '$cn', admin_name = '$an'  WHERE company_id = '$our_companyid';")) {
        echo "success";
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a6'])) {

    if (!isset($_FILES['pp']['name'])) {

        $an = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['an']);
        $se = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['se']);
        $cn = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['cn']);
        $sb = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['sb']);
        $pc = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['pc']);
        $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['id']);

        $sql = "UPDATE `company` SET Name = '$an', Secondary_Email = '$se', Phone = '$cn', Biography = '$sb', password = '$pc' WHERE `Id` = '$id';";


        if (mysqli_query($DATABASE_CONNECTION, $sql)) {
            echo "success";
        } else {
            echo "error";
        }
    } else {

        $an = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['an']);
        $se = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['se']);
        $cn = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['cn']);
        $sb = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['sb']);
        $pc = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['pc']);

        $directory = "media/display/";
        $unique = rand(1000000, 100000000);
        $profile_picture = $directory . basename($_FILES['pp']['name']);
        $profile_picture_size = $_FILES["pp"]["size"];
        $profile_picture_tmpname = $_FILES["pp"]["tmp_name"];

        $extension = pathinfo($profile_picture, PATHINFO_EXTENSION);
        $new_profile_picture = $directory . md5($profile_picture) . '-' . $unique . '.' . $extension;
        $imageFileType = strtolower(pathinfo($profile_picture, PATHINFO_EXTENSION));


        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "No Img";
        } else {
            $sql = "UPDATE `company` SET `display` = '$new_profile_picture', admin_name = '$an', secondary_email_address = '$se', mobile_number = '$cn', short_bio = '$sb', password = '$pc' WHERE `company_id` = '$our_companyid';";


            if (move_uploaded_file($profile_picture_tmpname, "../" . $new_profile_picture) && mysqli_query($DATABASE_CONNECTION, $sql)) {
                echo "success";
            } else {
                echo "error";
            }
        }
    }
} else if (isset($_REQUEST['a7'])) {

    $namesurname = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['ns']);
    $grade = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['g']);
    $dateofbirth = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['db']);
    $accounttype = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['at']);
    $country = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['c']);
    $cellnumber = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['cn']);
    $emailaddress = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['ea']);
    $password = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['p']);
    $accountstatus = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['as']);
    $shortbio = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['sh']);

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $companyuri = $row["company_uri"];

    $sql = "UPDATE `all_members_" . $companyuri . "` SET Name_and_Surname = '$namesurname', Short_Bio = '$shortbio', Grade = '$grade', Date_Of_Birth = '$dateofbirth', Account_Type = '$accounttype', Country = '$country', Cell_Number = '$cellnumber', Email_Address = '$emailaddress', Password = '$password', Account_Status = '$accounttype' WHERE `Member_Id` = '" . $_REQUEST['a7'] . "';";


    if (mysqli_query($DATABASE_CONNECTION, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a8'])) {

    $title = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['t']);
    $content = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['c']);
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['a8']);

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $companyuri = $row["company_uri"];

    $sql = "INSERT INTO notifications_" . $companyuri . "(Member_Id, Notification_Subject, Notification_Summary, Notification_Text, Notification_Status, Notifier) VALUES('" . $id . "', '$title', '$content', '$content', '0', 'Admin');";


    if (mysqli_query($DATABASE_CONNECTION, $sql)) {
        echo "success";
    } else {
        echo "error" . $title . "|" . $content . "|" . $id;
    }
} else if (isset($_REQUEST['a9'])) {

    $title = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['t']);
    $content = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['c']);

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $companyuri = $row["company_uri"];

    $sql = "INSERT INTO `notifications_" . $companyuri . "`(Member_Id, Notification_Subject, Notification_Summary, Notification_Text, Notification_Status, Notifier) VALUES('" . $_REQUEST['a9'] . "', '$title', '$content', '$content', '0', 'Admin');";


    if (mysqli_query($DATABASE_CONNECTION, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a10'])) {

    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['a10']);

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $companyuri = $row["company_uri"];
    $now = date("Y-m-d H:i:s");

    $sql = "UPDATE `gigs_" . $companyuri . "` SET Status = 'Finished', Gig_End_Date = '" . $now . "' WHERE Gig_Reference_Id = '" . $id . "';";


    if (mysqli_query($DATABASE_CONNECTION, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a11'])) {

    $bn = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['bankname']);
    $brn = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['branchname']);
    $brc = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['branchcode']);
    $an = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['accountnumber']);
    $ah = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['accountholder']);

    $sql = "UPDATE `company` SET bank_name = '$bn', branch_name = '$brn' , branch_code = '$brc', account_number = '$an', account_holder = '$ah' WHERE company_id = '" . $our_companyid . "';";


    if (mysqli_query($DATABASE_CONNECTION, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a12'])) {

    $commission = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['commission']);

    $sql = "UPDATE `company` SET commission = '$commission' WHERE company_id = '" . $our_companyid . "';";


    if (mysqli_query($DATABASE_CONNECTION, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a13'])) {

    $sql_uri = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';");
    $row_uri = mysqli_fetch_array($sql_uri, MYSQLI_ASSOC);
    $companyuri = $row_uri["company_uri"];


    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `milestone_payments_" . $companyuri . "` WHERE Withdrawal_Status = 'In';");
    if (mysqli_num_rows($sql) > 0) {
        $milestone = 0;
        while ($row = mysqli_fetch_array($sql)) {

            $milestone += $row["Milestone"];
        }

        $sql_pg = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `company_payment_getaway` WHERE payfast = 1;");
        $row = mysqli_fetch_array($sql_pg, MYSQLI_ASSOC);
        $pg_eft = $row['eft'];
        $pg_payoutfee = $row['payout_fee'];
        $pg_elabvinefee = $row['elabvine'];

        $amountrequested = ($milestone * ($our_commission / 100));
        $external_fees = (($amountrequested * ($pg_eft / 100)));
        if ($external_fees < 2) {
            $external_fees = 2;
        }
        if ($our_subscription = "Start-Up") {
            $amounttoreceive = $amountrequested - ($external_fees + $pg_payoutfee);
            $elabvine_commission = ($amounttoreceive * ($pg_elabvinefee / 100));
            $amounttoreceive = $amounttoreceive - $elabvine_commission;
        } else {
            $amounttoreceive = $amountrequested - ($external_fees + $pg_payoutfee);
            $elabvine_commission = 0;
        }
        $paygate_commission = $external_fees + $pg_payoutfee;

        $expecteddate = date('Y-m-d 23:59:59', strtotime("+4 days"));

        if (mysqli_query($DATABASE_CONNECTION, "INSERT INTO company_payouts(company_id, expected_date, amount_requested, amount_to_receive, elabvine_commission, paygate_commission, withdrawal_status, status) VALUES('$our_companyid', '$expecteddate', '$amountrequested', '$amounttoreceive', '$elabvine_commission', '$paygate_commission', 'In', 'No');")) {

            if (mysqli_query($DATABASE_CONNECTION, "UPDATE `milestone_payments_" . $companyuri . "` SET Withdrawal_Status = 'Claimed' WHERE Withdrawal_Status = 'In'")) {

                echo "success";
            } else {
                echo "error";
            }
        } else {
            echo "error";
        }
    } else {

        echo "error";
    }
} else if (isset($_REQUEST['a14'])) {

    $amount = $_REQUEST["av"];
    $companyuri = $_REQUEST["cn"];
    $emailaddress = $_REQUEST["em"];

    $cookie_name1 = "amount";
    $cookie_value1 = $amount;
    setcookie($cookie_name1, $cookie_value1, time() + (1800), "/");
    $cookie_name2 = "companyuri";
    $cookie_value2 = $companyuri;
    setcookie($cookie_name2, $cookie_value2, time() + (1800), "/");
    $cookie_name3 = "emailaddress";
    $cookie_value3 = $emailaddress;
    setcookie($cookie_name3, $cookie_value3, time() + (1800), "/");
} else if (isset($_REQUEST['a15'])) {

    $amount = $_REQUEST["am"];
    $package = $_REQUEST["pa"];
    $emailaddress = $_REQUEST["em"];

    $to = $emailaddress;
    $now = date("Ymd");
    $subject = 'See your quote - elabvine';
    $message = '<html><head><link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script><style>.invoice-title h2,.invoice-title h3 {
  display: inline-block;}.table>tbody>tr>.no-line{border-top: none;}.table>thead>tr>.no-line{border-bottom: none;}.table>tbody>tr>.thick-line{border-top: 2px solid;}</style></head><body>
';
    $message .= '
<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Quote</h2>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Requested By:</strong><br>
    					' . $emailaddress . '
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Sent To:</strong><br>
    					' . $emailaddress . '
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Bank Account Details:</strong><br>
    					Bank: Capitec<br>
    					Account Number: 1466040953<br>
                                        Branch Code: 470010<br>
                                        Reference: CMS0' . $our_companyid . 'A
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Requested Date:</strong><br>
    					' . date("F d, Y") . '<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Quote summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<tr>
    								<td>' . $package . '</td>
    								<td class="text-center">R' . $amount . '</td>
    								<td class="text-center">1</td>
    								<td class="text-right">R' . $amount . '</td>
    							</tr>
                                			<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">R' . $amount . '</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>VAT(%15)</strong></td>
    								<td class="no-line text-right">R' . ($amount * 0.15) . '</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">R' . ($amount + ($amount * 0.15)) . '</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>        


<p><strong>Note: </strong>
After making a bank transfer please send your proof of payment to our Customer Billing Support: <a href="mailto:billing@elabvine.com?Subject=Proof%20Of%20Payment">billing@elabvine.com</a> </p>
    

';
    $message .= "<p class='text-center'><small>We are always open in negotiations to give reasonable discount because we know and understand a journey of being an entrepreneur call us +27 76 340 1996 From 9am to 5pm CAT.</small></p><hr>";
    $message .= "</body></html>";
    $headers = "From: billing@elabvine.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a16'])) {

    $amount = $_REQUEST["id"];
    $package = $_REQUEST["uri"];

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_invoices WHERE company_uri = (SELECT company_uri FROM company WHERE company_id = $our_companyid) ORDER BY invoices_id DESC;");

    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $paiddate = date_create($row["date"]);
    $paiddate = date_format($paiddate, "Y-m-d");
    $timespan = $row["timespan"];

    function time_diff($dt1, $dt2) {
        $y1 = substr($dt1, 0, 4);
        $m1 = substr($dt1, 5, 2);
        $d1 = substr($dt1, 8, 2);
        $h1 = substr($dt1, 11, 2);
        $i1 = substr($dt1, 14, 2);
        $s1 = substr($dt1, 17, 2);

        $y2 = substr($dt2, 0, 4);
        $m2 = substr($dt2, 5, 2);
        $d2 = substr($dt2, 8, 2);
        $h2 = substr($dt2, 11, 2);
        $i2 = substr($dt2, 14, 2);
        $s2 = substr($dt2, 17, 2);

        $r1 = date('U', mktime($h1, $i1, $s1, $m1, $d1, $y1));
        $r2 = date('U', mktime($h2, $i2, $s2, $m2, $d2, $y2));
        return ($r1 - $r2);
    }

    $today = date("Y-m-d");

    $res = time_diff($paiddate, $today) / 86400;
    $res = $timespan - (-$res);

    if ($res < 0) {
        echo "success";
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a17'])) {
    //Include functions.php
    include("../../php/functions.php");

    $title = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["title"]);
    $message = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["message"]);
    $userId = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["userid"]);
    $now = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `scimatix_notification`(Member_Id, Title, Message, Notifier, Status, Datetime) VALUE('$userId', '$title', '$message', 'Admin', 'Waiting', '$now');";

    if (mysqli_query($DATABASE_CONNECTION, $sql)) {

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_information` WHERE Id = '$userId';");
        if (mysqli_num_rows($sql) > 0) {
            $to = $row["Email_Address"];
            $message = "<i>This message is from Scimatix Admin (scimatix.co.za) regarding tutoring services.</i><hr><strong>$title</strong><br>$message";
            $results = sendMailMessageToUser($to, "info@scimatix.co.za", "Message From Scimatix Admin", $message);
        } else {
            $results = "error";
        }
    } else {
        $results = "error";
    }

    echo $results;
} else if (isset($_REQUEST['a18'])) {
    //Get values
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["id"]);

    $sql = "DELETE FROM `scimatix_notification` WHERE Id = '$id';";

    if (mysqli_query($DATABASE_CONNECTION, $sql)) {

        $results = "success";
    } else {
        $results = "error";
    }

    echo $results;
} else if (isset($_REQUEST['a19'])) {
    //Get values
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["id"]);

    $sql = "DELETE FROM `members_personal_information` WHERE Member_Id = '$id';DELETE FROM  `scimatix_members_information` WHERE Id = '$id';";

    if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {

        $results = "success";
    } else {
        $results = "error";
    }

    echo $results;
} else if (isset($_REQUEST['a20'])) {
    //Get values
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["id"]);

    $sql = "UPDATE `scimatix_tutor_profiles` SET Status = 'Accepted' WHERE Member_Id = '" . $id . "';";

    if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {

        $results = "success";
    } else {
        $results = "error";
    }

    echo $results;
} else if (isset($_REQUEST['a21'])) {
    //Get values
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["id"]);
    $value = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["value"]);

    $sql = "UPDATE `scimatix_tutor_profiles` SET Status = 'Not Published', Message = '$value' WHERE Member_Id = '" . $id . "';";

    if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {

        $results = "success";
    } else {
        $results = "error";
    }

    echo $results;
} else if (isset($_REQUEST['a22'])) {
    //Get values
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["id"]);

    $sql = "UPDATE `scimatix_tutor_profiles` SET Status = 'Blocked' WHERE Member_Id = '" . $id . "';";

    if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {

        $results = "success";
    } else {
        $results = "error";
    }

    echo $results;
} else if (isset($_REQUEST['a23'])) {
    //Get values
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["id"]);

    $sql = "UPDATE `scimatix_tutor_profiles` SET Status = 'Blocked' WHERE Member_Id = '" . $id . "';";

    if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {

        $results = "success";
    } else {
        $results = "error";
    }

    echo $results;
} else if (isset($_REQUEST['a24'])) {
    //Get values
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["id"]);

    $sql = "DELETE FROM `members_personal_information` WHERE Member_Id = '$id';DELETE FROM  `scimatix_members_information` WHERE Id = '$id';";

    if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {

        $results = "success";
    } else {
        $results = "error";
    }

    echo $results;
} else if (isset($_REQUEST['a25'])) {
    //Get values
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["id"]);
    $hours = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["hours"]);

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$id';");

    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $hours = $hours + ($row["Hours"]);
        if($hours < 0){
            $hours = 0;
        }
        
        $sql = "UPDATE `members_personal_information` SET Hours = '$hours' WHERE Member_Id = '$id';";
        if(mysqli_query($DATABASE_CONNECTION, $sql)){
            $results = "success";
        }else{
            $results = "error";
        }
        
    } else {
        $results = "error";
    }

    echo $results;
}else if (isset($_REQUEST['a26'])) {
    //Get values
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["id"]);
    $wallet = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["wallet"]);

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$id';");

    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $wallet = $wallet + ($row["Wallet"]);
        if($wallet < 0){
            $wallet = 0;
        }

        $sql = "UPDATE `members_personal_information` SET Wallet = '$wallet' WHERE Member_Id = '$id';";
        if(mysqli_query($DATABASE_CONNECTION, $sql)){
            $results = "success";
        }else{
            $results = "error";
        }
        
    } else {
        $results = "error";
    }

    echo $results;
}else if (isset($_REQUEST['a27'])) {
    //Get values
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["id"]);
    $code = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["code"]);

        $sql = "UPDATE `scimatix_members_lessons` SET Tutor_Id = '$id' WHERE Lesson_Id = '$code';";
        if(mysqli_query($DATABASE_CONNECTION, $sql)){
            $results = "success";
        }else{
            $results = "error";
        }
        echo $results;
    
}else if (isset($_REQUEST['a28'])) {
    //Get values
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["id"]);
    
        $sql = "UPDATE `scimatix_members_lessons` SET Lesson_Status = 'Blocked' WHERE Id = '$id';";
        if(mysqli_query($DATABASE_CONNECTION, $sql)){
            $results = "success";
        }else{
            $results = "error";
        }
        echo $results;
    
}else if (isset($_REQUEST['a29'])) {
    //Get values
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["id"]);
    
        $sql = "UPDATE `scimatix_members_lessons` SET Lesson_Status = 'Finished' WHERE Id = '$id';";
        if(mysqli_query($DATABASE_CONNECTION, $sql)){
            $results = "success";
        }else{
            $results = "error";
        }
        echo $results;
    
}else if (isset($_REQUEST['a30'])) {
    //Get values
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["id"]);
    
        $sql = "UPDATE `scimatix_members_lessons` SET Lesson_Status = 'Accepted' WHERE Id = '$id';";
        if(mysqli_query($DATABASE_CONNECTION, $sql)){
            $results = "success";
        }else{
            $results = "error";
        }
        echo $results;
    
}

?>
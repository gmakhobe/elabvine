<?php

include('../../php/config.php');
include('timeago.php');
include('recycling.php');

if (!isset($_COOKIE['query_company_cookie'])) {
    $our_companyid = "";
} else {
    $our_companyid = mysqli_real_escape_string($DATABASE_CONNECTION, $_COOKIE['query_company_cookie']);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company WHERE Id = '$our_companyid';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $our_emailaddress = $row['Email_Address'];
}

if (isset($_REQUEST['a1'])) {

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_notes WHERE Company_Id = '$our_companyid' ORDER BY Id DESC;");

    $display = '<table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Posted On</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>';

    if (mysqli_num_rows($sql)) {

        while ($row = mysqli_fetch_array($sql)) {

            $display .= "<tr>
                           <th scope='row'>" . $row['Title'] . "</th>
                           <td>" . $row['Content'] . "</td>
                           <td>" . facebook_time_ago($row['Posted']) . "<br>" . nice_date($row['Posted']) . "</td>
                           <td><button onclick='deleteNote(" . $row['Id'] . ")' class='btn btn-link'>Delete</button></td>
                        </tr>";
        }
    } else {
        $display .= "<tr>
                       <td>Empty! To add notes press add note.</td> 
                     </tr>";
    }

    $display .= "</tbody>
                </table>";

    echo $display;
} else if (isset($_REQUEST['a2'])) {

    echo showAllTutors($DATABASE_CONNECTION);
    
} else if (isset($_REQUEST['a3'])) {

    echo showAllStudents($DATABASE_CONNECTION);
    
} else if (isset($_REQUEST['a4'])) {

    echo projects_datatable('In Progress');
} else if (isset($_REQUEST['a5'])) {

    echo projects_datatable('Finished');
} else if (isset($_REQUEST['a6'])) {

    echo projects_datatable('Reported');
} else if (isset($_REQUEST['a7'])) {

    echo finance('In');
} else if (isset($_REQUEST['a8'])) {

    $sql_uri = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';");
    $row_uri = mysqli_fetch_array($sql_uri, MYSQLI_ASSOC);
    $companyuri = $row_uri["company_uri"];

    if ($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM milestone_payments_" . $companyuri . " WHERE Withdrawal_Status = 'In';")) {

        if ($count = mysqli_num_rows($sql)) {

            $count = 0;

            while ($row = mysqli_fetch_array($sql)) {

                $count += $row["Milestone"];
            }

            $count = ($count * ($our_commission / 100));
        } else {
            $count = "0";
        }
    } else {
        $count = "0";
    }

    if ($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM milestone_payments_" . $companyuri . " WHERE Withdrawal_Status = 'In';")) {

        if ($count2 = mysqli_num_rows($sql)) {

            $count2 = 0;

            while ($row = mysqli_fetch_array($sql)) {

                $count2 += $row["Milestone"];
            }
        } else {
            $count2 = "0";
        }
    } else {
        $count2 = "0";
    }



    $data["balance"] = $count;
    $data["totalbalance"] = $count2;

    echo json_encode($data);
} else if (isset($_REQUEST['a9'])) {

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';");


    if (mysqli_num_rows($sql)) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $banner1 = $row['index_banner1'];
        if ($banner1 != "img/banner-bg.jpg") {
            $banner1 = "http://$banner1";
        }
        $banner2 = $row['index_banner2'];
        if ($banner2 != "img/s-bg.jpg") {
            $banner2 = "http://$banner2";
        }
        $banner3 = $row['sign_banner1'];
        if ($banner3 != "img/top-banner.jpg") {
            $banner3 = "http://$banner3";
        }
        $banner4 = $row['sign_banner2'];
        if ($banner4 != "img/top-banner.jpg") {
            $banner4 = "http://$banner4";
        }
        $banner5 = $row['index_banner3'];
        if ($banner5 == "") {
            $banner5 = "#5eb1bf";
        }


        $row = 1;

        $display = "";
        $page_title = array("#", "Home", "Home", "Sign Up", "Sign In", "Home, Sign In, Sign Up",);
        $element_des = array("#", "Jumbotron Background Banner", "Section 2 Background Banner", 'Jumbotron Background Banner', 'Jumbotron Background Banner', "Elements Color");
        $links = array("#", "<a href='$banner1'><img src='$banner1' style='height:35px;'/></a>", "<a href='$banner2'><img src='$banner2' style='height:35px;'/></a>", "<a href='$banner3'><img src='$banner3' style='height:35px;'/></a>", "<a href='$banner4'><img src='$banner4' style='height:35px;'/></a>", "<div style='height:35px;background-color:$banner5;'></div>");
        $recommendation_info = array("#", "Recommended 1920×860", "Recommended 1920×620", 'Recommended 1920×390', 'Recommended 1920×390', "Color");
        $options = array("#", 'data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem(\'image\', 1))"', 'data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem(\'image\', 2))"', 'data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem(\'image\', 4))"', 'data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem(\'image\', 5))"', ' data-toggle="modal" data-target="#colorEditor" onclick="imageUpload(sessionStorage.setItem(\'image\', 3))"');

        while ($row <= 5) {

            $display .= '<tr>
                            <th scope="row">' . $row . '</th>
                            <td>' . $links[$row] . '</td>
                            <td>' . $page_title[$row] . '</td>
                            <td>' . $element_des[$row] . '</td>
                            <td>' . $recommendation_info[$row] . '</td>
                            <td><a href="#" ' . $options[$row] . ' >Change</a></td>
                        </tr>';

            $row++;
        }

        echo $display;
    } else {
        $display = "error";
    }
} else if (isset($_REQUEST['a10'])) {

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';");


    if (mysqli_num_rows($sql)) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $banner1 = $row['dashboard_banner1'];
        if ($banner1 != "img/banner-bg.jpg") {
            $banner1 = "http://$banner1";
        }
        $banner2 = $row['dashboard_banner2'];
        if ($banner2 == "") {
            $banner2 = "#5eb1bf";
        }
        $banner3 = $row['dashboard_banner3'];
        if ($banner3 != "img/banner-bg.jpg") {
            $banner3 = "http://$banner3";
        }


        $row = 1;

        $display = "";
        $page_title = array("#", "Dashboard", "Dashboard, Project, Project Feed, Search and Project Search", "Dashboard, Project, Project Feed, Search and Project Search");
        $element_des = array("#", "Jumbotron Background Banner", "Jumbotron Background Banner for all other pages", "Elements Color");
        $links = array("#", "<a href='$banner1'><img src='$banner1' style='height:35px;'/></a>", "<a href='$banner3'><img src='$banner3' style='height:35px;'/></a>", "<div style='height:35px;background-color:$banner2;'></div>");
        $recommendation_info = array("#", "Recommended 1920×390", "Recommended 1920×390", "Color");
        $options = array("#", 'data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem(\'image\', 7))""', 'data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem(\'image\', 16))""', 'data-toggle="modal" data-target="#colorEditor" onclick="imageUpload(sessionStorage.setItem(\'image\', 8))"');

        while ($row <= 3) {

            $display .= '<tr>
                            <th scope="row">' . $row . '</th>
                            <td>' . $links[$row] . '</td>
                            <td>' . $page_title[$row] . '</td>
                            <td>' . $element_des[$row] . '</td>
                            <td>' . $recommendation_info[$row] . '</td>
                            <td><a href="#" ' . $options[$row] . ' >Change</a></td>
                        </tr>';

            $row++;
        }

        echo $display;
    } else {
        $display = "error";
    }
} else if (isset($_REQUEST['a11'])) {

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';");


    if (mysqli_num_rows($sql)) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $banner1 = $row['favicon'];
        if ($banner1 != "img/favicon.png") {
            $banner1 = "http://$banner1";
        }
        $banner2 = $row['header_icon'];
        if ($banner2 != "img/logo.png") {
            $banner2 = "http://$banner2";
        }
        $banner3 = $row['header_bg'];
        if ($banner3 == "") {
            $banner3 = "rgba(4,9,30,0.9)";
        }
        $banner4 = $row['header_color'];
        if ($banner4 == "") {
            $banner4 = "#fff";
        }


        $row = 1;

        $display = "";
        $page_title = array("#", "Favicon", "Logo", "Header Area", "Header Text");
        $element_des = array("#", "PNG, GIF AND JPG", "PNG, GIF AND JPG", "Element Color", "Element Color");
        $links = array("#", "<a href='$banner1'><img src='$banner1' style='height:35px;'/></a>", "<a href='$banner2'><img src='$banner2' style='height:35px;'/></a>", "<div style='height:35px;background-color:$banner3;'></div>", "<div style='height:35px;background-color:$banner4;'></div>");
        $recommendation_info = array("#", "Recommended 250×250", "Recommended 147×30", "Color", "Color");
        $options = array("#", 'data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem(\'image\', 9))"', 'data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem(\'image\', 10))"', 'data-toggle="modal" data-target="#colorEditor" onclick="imageUpload(sessionStorage.setItem(\'image\', 14))"', 'data-toggle="modal" data-target="#colorEditor" onclick="imageUpload(sessionStorage.setItem(\'image\', 15))"');

        while ($row <= 4) {

            $display .= '<tr>
                            <th scope="row">' . $row . '</th>
                            <td>' . $links[$row] . '</td>
                            <td>' . $page_title[$row] . '</td>
                            <td>' . $element_des[$row] . '</td>
                            <td>' . $recommendation_info[$row] . '</td>
                            <td><a href="#" ' . $options[$row] . ' >Change</a></td>
                        </tr>';

            $row++;
        }

        echo $display;
    } else {
        $display = "error";
    }
} else if (isset($_REQUEST['a12'])) {

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';");


    if (mysqli_num_rows($sql)) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $banner1 = $row['footer_bg'];
        if ($banner1 == "") {
            $banner1 = "#04091e";
        }
        $banner2 = $row['footer_color1'];
        if ($banner2 == "") {
            $banner2 = "#fff";
        }
        $banner3 = $row['footer_color2'];
        if ($banner3 == "") {
            $banner3 = "#777";
        }


        $row = 1;

        $display = "";
        $page_title = array("#", "Footer Area", "Footer Headings", "Footer Text");
        $element_des = array("#", "Element Color", "Element Color", "Element Color");
        $links = array("#", "<div style='height:35px;background-color:$banner1;'></div>", "<div style='height:35px;background-color:$banner2;'></div>", "<div style='height:35px;background-color:$banner3;'></div>");
        $recommendation_info = array("#", "Color", "Color", "Color");
        $options = array("#", 'data-toggle="modal" data-target="#colorEditor" onclick="imageUpload(sessionStorage.setItem(\'image\', 11))"', 'data-toggle="modal" data-target="#colorEditor" onclick="imageUpload(sessionStorage.setItem(\'image\', 12))"', 'data-toggle="modal" data-target="#colorEditor" onclick="imageUpload(sessionStorage.setItem(\'image\', 13))"');

        while ($row <= 3) {

            $display .= '<tr>
                            <th scope="row">' . $row . '</th>
                            <td>' . $links[$row] . '</td>
                            <td>' . $page_title[$row] . '</td>
                            <td>' . $element_des[$row] . '</td>
                            <td>' . $recommendation_info[$row] . '</td>
                            <td><a href="#" ' . $options[$row] . ' >Change</a></td>
                        </tr>';

            $row++;
        }

        echo $display;
    } else {
        $display = "error";
    }
} else if (isset($_REQUEST['a13'])) {

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';");


    if (mysqli_num_rows($sql)) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $social1 = $row['facebook'];
        if ($social1 == "") {
            $social1 = "[empty]";
        }
        $social2 = $row['twitter'];
        if ($social2 == "") {
            $social2 = "[empty]";
        }
        $social3 = $row['tell'];
        if ($social3 == "") {
            $social3 = "[empty]";
        }
        $social4 = $row['email'];
        if ($social4 == "") {
            $social4 = "[empty]";
        }


        $row = 1;

        $display = "";
        $media = array("#", "Facebook", "Twitter", "Tell / Cell", "Email Address");
        $info = array("#", "To exclude it leave empty", "To exclude it leave empty", "To exclude it leave empty", "To exclude it leave empty");
        $preview = array("#", "www.facebook.com/$social1", "www.twitter.com/$social2", "Tell/Cell: $social3", "Tell/Cell: $social4");
        $edit = array("#", "<p class='edit-text' id='text1' onkeyup='saveContent(this.value, \"text1\")'>$social1</p>", "<p class='edit-text' id='text2' onkeyup='saveContent(this.value, \"text2\")'>$social2</p>", "<p class='edit-text' id='text3' onkeyup='saveContent(this.value, \"text3\")'>$social3</p>", "<p class='edit-text' id='text4' onkeyup='saveContent(this.value, \"text4\")'>$social4</p>");
        
        while ($row <= 4) {

            $display .= '
                        <tr>
                            <th scope="row">' . $row . '</th>
                            <th>' . $media[$row] . '</th>
                            <th>' . $info[$row] . '</th>
                            <th>' . $preview[$row] . '</th>
                            <th>' . $edit[$row] . '</th>
                        </tr>';

            $row++;
        }

        echo $display;
    } else {
        $display = "error";
    }
} else if (isset($_REQUEST['a14'])) {

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_invoices WHERE company_uri = (SELECT company_uri FROM company WHERE company_id = $our_companyid);");


    if (mysqli_num_rows($sql) > 0) {

        $row = 1;
        $display = "";
        while ($rows = mysqli_fetch_array($sql)) {

            $date = date_create($rows['date']);
            
            $display .= '
                        <tr>
                            <th scope="row">' . $row . '</th>
                            <th>' . date_format($date, "F d, Y") . '</th>
                            <th>R' . $rows['amount'] . '</th>
                            <th>' . $rows['package'] . '</th>
                            <th><button type="button" onclick="invoiceView('.$rows['invoices_id'].')" class="btn btn-light">View</button></th>
                        </tr>';

            $row++;
        }

        echo $display;
    } else {
        $display = "No data recorded yet.";
    }
} else if (isset($_REQUEST['a15'])) {

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_notification` WHERE Notifier = 'Admin' ORDER BY Id DESC;");


    if (mysqli_num_rows($sql) > 0) {

        $row = 1;
        $display = "<table class='table table-dark table-striped'><thead><tr><td>Name</td><td>Message</td><td>Status</td><td>Date</td><td>Action</td></tr></head><body>";
        while ($rows = mysqli_fetch_array($sql)) {
            //Get Id
            $userId = $rows["Member_Id"];
            //Get Info
            $sql_user = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_information` WHERE Id = '$userId' ORDER BY Id DESC;");
            $row = mysqli_fetch_array($sql_user);
            $name = $row["Name"]." ".$row["Surname"];
            $message = $rows["Title"].", ".$rows["Message"];
            $date = $rows["Datetime"];
            $status = $rows["Status"];
            if($status == "Waiting"){
                $status = "Not Seen";
            }else{
                $status = "Seen";
            }
            //End Get Info
            
            $display .= '
                        <tr>
                            <th>' . $name . '</th>
                            <th>' . $message . '</th>
                            <th>' . $status . '</th>
                            <th>' . nice_date($date) . '</th>
                            <th><button type="button" onclick="deleteNotification('.$rows['Id'].')" class="btn btn-light">Delete</button></th>
                        </tr>';

        }

        $display .= "</body></table>";
    } else {
        $display = "No notification/message sent yet.";
    }
    
    echo $display;
} else if (isset($_REQUEST['a16'])) {

    echo showUnapprovedTutors($DATABASE_CONNECTION);
    
} else if (isset($_REQUEST['a17'])) {

    echo showTutorApplication($DATABASE_CONNECTION);
    
} else if (isset($_REQUEST['a18'])) {

    echo showUnassignedLessons($DATABASE_CONNECTION);
    
} else if (isset($_REQUEST['a19'])) {

    echo showPotentialTutorsAssignment($DATABASE_CONNECTION);
    
} else if (isset($_REQUEST['a20'])) {

    echo showAssignedLessons($DATABASE_CONNECTION);
    
} else if (isset($_REQUEST['a21'])) {

    echo showAllFinishedLessons($DATABASE_CONNECTION);
    
} else if (isset($_REQUEST['a22'])) {

    echo showAllBlockedLessons($DATABASE_CONNECTION);
    
}
?>
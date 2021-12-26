<?php

function showAllBlockedLessons($DATABASE_CONNECTION) {

    //Get users table
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_lessons` WHERE Lesson_Status = 'Blocked' ORDER BY Id DESC;");
    //Select tutor profiles
    if (mysqli_num_rows($sql) > 0) {
        $table = "<table class='table table-dark table-striped'><thead class='thead-dark'><tr><td>Subject</td><td>Grade</td><td>Lesson Type</td><td>Lesson Length</td><td>Reported Date</td><td>Action</td></tr></thead><tbody>";
        while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            //Table
            $table .= "<tr><td>" . $row["Subject"] . "</td><td> " . $row["Grade"] . "</td><td>" . $row["Type"] . "</td><td>" . $row["Lesson_Hours"] . "</td><td>" . nice_date($row["Report_Date"]) . "</td><td><a href='completed-lessons.php?reqId=lessonBlocked&lessonId=" . $row["Id"] . "' class='btn btn-success'>More</a></td></tr></thead>";
        }
        $table .= "</tbody></table>";
    } else {
        $table = "No Lesson Ever Completed";
    }
    return $table;
}
function showAllFinishedLessons($DATABASE_CONNECTION) {

    //Get users table
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_lessons` WHERE Lesson_Status = 'Finished' ORDER BY Id DESC;");
    //Select tutor profiles
    if (mysqli_num_rows($sql) > 0) {
        $table = "<table class='table table-dark table-striped'><thead class='thead-dark'><tr><td>Subject</td><td>Grade</td><td>Lesson Type</td><td>Lesson Length</td><td>Completed Date</td><td>Action</td></tr></thead><tbody>";
        while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            //Table
            $table .= "<tr><td>" . $row["Subject"] . "</td><td> " . $row["Grade"] . "</td><td>" . $row["Type"] . "</td><td>" . $row["Lesson_Hours"] . "</td><td>" . nice_date($row["Report_Date"]) . "</td><td><a href='completed-lessons.php?reqId=lessonFullDetails&lessonId=" . $row["Id"] . "' class='btn btn-success'>More</a></td></tr></thead>";
        }
        $table .= "</tbody></table>";
    } else {
        $table = "No Lesson Ever Completed";
    }
    return $table;
}
function showAssignedLessons($DATABASE_CONNECTION) {

    //Get users table
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_lessons` WHERE Lesson_Status = 'Accepted' ORDER BY Id DESC;");
    //Select tutor profiles
    if (mysqli_num_rows($sql) > 0) {
        $table = "<table class='table table-dark table-striped'><thead class='thead-dark'><tr><td>Subject</td><td>Grade</td><td>Lesson Type</td><td>Lesson Length</td><td>Lesson Date</td><td>Action</td></tr></thead><tbody>";
        while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            //Table
            $table .= "<tr><td>" . $row["Subject"] . "</td><td> " . $row["Grade"] . "</td><td>" . $row["Type"] . "</td><td>" . $row["Lesson_Hours"] . "</td><td>" . $row["Date"] . "</td><td><a href='lessons-in-progress.php?reqId=lessonAcceptedDetails&lessonId=" . $row["Id"] . "' class='btn btn-success'>More</a></td></tr></thead>";
        }
        $table .= "</tbody></table>";
    } else {
        $table = "No Lesson booked";
    }
    return $table;
}

function showPotentialTutorsAssignment($DATABASE_CONNECTION) {

    //Get users table
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_tutor_profiles` WHERE Status = 'Accepted' ORDER BY Id DESC;");
    //Select tutor profiles
    if (mysqli_num_rows($sql) > 0) {
        $list = "";
        while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            //Get User Information
            $tutorId = $row["Member_Id"];
            #SQL
            $sql_get = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_information` WHERE Id = '$tutorId';");
            $rows = mysqli_fetch_array($sql_get, MYSQLI_ASSOC);
            $name = $rows["Name"]." ".$rows["Surname"];
            $registrationDate = nice_date($rows["Registration_Date"]);
            #End SQL
            ##SQL
            $sql_get = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$tutorId';");
            $rows = mysqli_fetch_array($sql_get, MYSQLI_ASSOC);
            $profile = $rows["Profile_Picture"];
            if($profile == ""){
               $profile = "images/profile.png"; 
            }
            #End SQL
            //End Get User Information
            //Table
            $list .= '<div class="media border p-3">
                    <img src="'.$profile.'" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                        <h4>'.$name.'</h4>
                        <p><small><i>Registered on '.$registrationDate.'</i></small></p>
                        <div class="btn-group pull-right">
                            <button onclick="assignTutorToLesson('.$tutorId.')" class="btn btn-success">Assign</button>
                            <a href="users-one.php?reqId=profile&userId='.$tutorId.'" class="btn btn-primary">Profile</a>
                        </div> 
                    </div>
                </div>';
        }
    } else {
        $list = "No Approved Tutors Yet";
    }
    return $list;
}
function showUnassignedLessons($DATABASE_CONNECTION) {

    //Get users table
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_lessons` WHERE Lesson_Status = 'Waiting' AND Tutor_Id = '0' ORDER BY Id DESC;");
    //Select tutor profiles
    if (mysqli_num_rows($sql) > 0) {
        $table = "<table class='table table-dark table-striped'><thead class='thead-dark'><tr><td>Subject</td><td>Grade</td><td>Lesson Type</td><td>Lesson Length</td><td>Lesson Date</td><td>Action</td></tr></thead><tbody>";
        while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            //Table
            $table .= "<tr><td>" . $row["Subject"] . "</td><td> " . $row["Grade"] . "</td><td>" . $row["Type"] . "</td><td>" . $row["Lesson_Hours"] . "</td><td>" . $row["Date"] . "</td><td><a href='lessons-in-progress.php?reqId=lessonDetails&lessonId=" . $row["Id"] . "' class='btn btn-success'>More</a></td></tr></thead>";
        }
        $table .= "</tbody></table>";
    } else {
        $table = "No Lesson booked";
    }
    return $table;
}
function showAllStudents($DATABASE_CONNECTION) {

    //Get users table
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_information` WHERE Account_Type = 'Student';");
    //Select tutor profiles
    if (mysqli_num_rows($sql) > 0) {
        $table = "<table class='table table-dark table-striped'><thead class='thead-dark'><tr><td>Name and Surname</td><td>Email Address</td><td>Cell Phone #</td><td>Registration Date</td><td>Action</td></tr></thead><tbody>";
        while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            //Table
            $table .= "<tr><td>" . $row["Name"] . " " . $row["Surname"] . "</td><td>" . $row["Email_Address"] . "</td><td>" . $row["Phone"] . "</td><td>" . nice_date($row["Registration_Date"]) . "</td><td><a href='users-one.php?reqId=notify&userId=" . $row["Id"] . "' class='btn btn-success'>Notify</a> | <a href='users-two.php?reqId=profile&userId=" . $row["Id"] . "' class='btn btn-danger'>Profile</a></td></tr></thead>";
        }
        $table .= "</tbody></table>";
    } else {
        $table = "No Students";
    }
    return $table;
}

function showTutorApplication($DATABASE_CONNECTION) {

    //Get users table
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_tutor_profiles` WHERE Status = 'Published';");
    if (mysqli_num_rows($sql) > 0) {
        //Table
        $table = "<table class='table table-dark table-striped'><thead class='thead-dark'><tr><td>Name and Surname</td><td>Email Address</td><td>Cell Phone #</td><td>Registration Date</td><td>Action</td></tr></thead><tbody>";
        //While
        while ($row1 = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            //Get user Id
            $sql_get = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_information` WHERE Id = '" . $row1["Member_Id"] . "';");

            $row = mysqli_fetch_array($sql_get, MYSQLI_ASSOC);

            //Table
            $table .= "<tr><td>" . $row["Name"] . " " . $row["Surname"] . "</td><td>" . $row["Email_Address"] . "</td><td>" . $row["Phone"] . "</td><td>" . nice_date($row["Registration_Date"]) . "</td><td><a href='users-one.php?reqId=notify&userId=" . $row["Id"] . "' class='btn btn-success'>Notify</a> | <a href='users-one.php?reqId=profileTutor&userId=" . $row["Id"] . "' class='btn btn-primary'>More</a></td></tr></thead>";
        }

        $table .= "</tbody></table>";
    } else {
        $table = "No Applications";
    }
    return $table;
}

function showUnapprovedTutors($DATABASE_CONNECTION) {

    //Get users table
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_information` WHERE Account_Type = 'Tutor';");
    if (mysqli_num_rows($sql) > 0) {
        //Table
        $table = "<table class='table table-dark table-striped'><thead class='thead-dark'><tr><td>Name and Surname</td><td>Email Address</td><td>Cell Phone #</td><td>Registration Date</td><td>Action</td></tr></thead><tbody>";
        //While
        while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            //Get user Id
            $sql_get = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_tutor_profiles` WHERE Member_id = '" . $row["Id"] . "' AND Status = 'Accepted';");
            if (mysqli_num_rows($sql_get) > 0) {
                $table .= "";
            } else {
                //Table
                $table .= "<tr><td>" . $row["Name"] . " " . $row["Surname"] . "</td><td>" . $row["Email_Address"] . "</td><td>" . $row["Phone"] . "</td><td>" . nice_date($row["Registration_Date"]) . "</td><td><a href='users-one.php?reqId=notify&userId=" . $row["Id"] . "' class='btn btn-success'>Notify</a> | <button onclick='deleteUser(" . $row["Id"] . ")' class='btn btn-warning'>Delete</button></td></tr></thead>";
            }
        }

        $table .= "</tbody></table>";
    } else {
        $table = "No Unapproved Tutors";
    }
    return $table;
}

function showAllTutors($DATABASE_CONNECTION) {

    //Get users table
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_information` WHERE Account_Type = 'Tutor';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $user_id = $row["Id"];
    //Select tutor profiles
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_tutor_profiles` WHERE Status = 'Accepted';");
    if (mysqli_num_rows($sql) > 0) {
        $table = "<table class='table table-dark table-striped'><thead class='thead-dark'><tr><td>Name and Surname</td><td>Email Address</td><td>Cell Phone #</td><td>Registration Date</td><td>Action</td></tr></thead><tbody>";
        while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            //Get Approved tutors
            $sql_rows = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_information` WHERE Id = '" . $row["Member_Id"] . "';");
            $tutors = mysqli_fetch_array($sql_rows, MYSQLI_ASSOC);
            //Table
            $table .= "<tr><td>" . $tutors["Name"] . " " . $tutors["Surname"] . "</td><td>" . $tutors["Email_Address"] . "</td><td>" . $tutors["Phone"] . "</td><td>" . nice_date($tutors["Registration_Date"]) . "</td><td><a href='users-one.php?reqId=notify&userId=" . $tutors["Id"] . "' class='btn btn-success'>Notify</a> | <a href='users-one.php?reqId=profile&userId=" . $tutors["Id"] . "' class='btn btn-danger'>Profile</a></td></tr></thead>";
        }
        $table .= "</tbody></table>";
    } else {
        $table = "No Approved Tutors Yet";
    }
    return $table;
}

function projects_datatable($projectstatus) {

    include('config.php');

    $requestData = $_REQUEST;

    $our_companyid = mysqli_real_escape_string($DATABASE_CONNECTION, $_COOKIE['our_company_id']);

    $sql_uri = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';");
    $row_uri = mysqli_fetch_array($sql_uri, MYSQLI_ASSOC);
    $companyuri = $row_uri["company_uri"];


    $columns = array(
// datatable column index  => database column name
        0 => 'Gig_Name',
        1 => 'Gig_Estimated_Price',
        2 => 'Gig_Estimated_Time'
    );

    $sql = "SELECT * FROM gigs_" . $companyuri . " WHERE Status = '" . $projectstatus . "';";
    $query = mysqli_query($DATABASE_CONNECTION, $sql);
    $totalData = mysqli_num_rows($query);
    $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

    $sql = "SELECT * FROM gigs_" . $companyuri . " WHERE Status = '" . $projectstatus . "'";
    if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
        $sql .= " AND ( Gig_Name LIKE '" . $requestData['search']['value'] . "%' ";
        $sql .= " OR Gig_Level LIKE '" . $requestData['search']['value'] . "%' ";
        $sql .= " OR Gig_Description LIKE '" . $requestData['search']['value'] . "%' ";
        $sql .= " OR Gig_Skill LIKE '" . $requestData['search']['value'] . "%' ";
        $sql .= " OR Gig_Estimated_Price LIKE '" . $requestData['search']['value'] . "%' )";
    }
    $query = mysqli_query($DATABASE_CONNECTION, $sql);
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
    $sql .= " ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "  LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";
    /* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */
    $query = mysqli_query($DATABASE_CONNECTION, $sql);

    $data = array();
    $options = "";
    while ($row = mysqli_fetch_array($query)) {  // preparing an array
        $nestedData = array();

        $nestedData[] = $row["Gig_Name"];
        $nestedData[] = $row["Gig_Estimated_Price"];
        if ($projectstatus == "In Progress") {
            $nestedData[] = $row["Gig_Estimated_Time"];
        } else if ($projectstatus == "Finished") {
            $nestedData[] = facebook_time_ago($row["Gig_End_Date"]) . " | " . nice_date($row["Gig_End_Date"]);
        } else {
            $nestedData[] = $row["Gig_Estimated_Time"];
            $options = ' | <a href="#" onclick="resolveProject(\'' . $row['Gig_Reference_Id'] . '\')">Resolve</a>';
        }

        $student_member_id = $row["Member_Id"];
        $tutor_member_id = $row["Tutor_Id"];

        if ($student_member_id != 0) {

            $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM all_members_" . $companyuri . " WHERE Member_Id = '$student_member_id';");
            $row_person = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            $student_name = $row_person['Name_and_Surname'];
            $student_email = $row_person['Email_Address'];
            $student_cell = $row_person['Cell_Number'];
        }

        if ($tutor_member_id == 0) {
            $tutor_card = '<div class="card col-lg-6 col-md-6">
                    <div class="card-body">
                        <div class="corner-ribon blue-ribon">
                            <i class="fa fa-user"></i>
                        </div>
                        <h2>Not yet chosen</h2>
                        <p>Not available</a></p>
                    </div>
                </div>';
        } else {

            $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM all_members_" . $companyuri . " WHERE Member_Id = '$tutor_member_id';");
            $row_person = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            $tutor_name = $row_person['Name_and_Surname'];
            $tutor_email = $row_person['Email_Address'];
            $tutor_cell = $row_person['Cell_Number'];

            $tutor_card = '<div class="card col-lg-6 col-md-6">
                    <div class="card-body">
                        <div class="corner-ribon blue-ribon">
                            <i class="fa fa-user"></i>
                        </div>
                        <h2>' . $tutor_name . '</h2>
                        <p>' . $tutor_email . ' | ' . $tutor_cell . '</a></p>
                    </div>
                </div>';
        }

        $nestedData[] = '<a href="#" data-toggle="modal" data-target="#view' . $row["Gig_Reference_Id"] . '">View</a> | <a href="#" data-toggle="modal" data-target="#notify' . $row["Member_Id"] . '">Notify</a> ' . $options . '
                <div class="modal fade" id="view' . $row["Gig_Reference_Id"] . '" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">User Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pre-scrollable">
                <div class="card col-lg-6 col-md-6">
                    <div class="card-body">
                        <div class="corner-ribon blue-ribon">
                            <i class="fa fa-user"></i>
                        </div>
                        <h2>' . $student_name . '</h2>
                        <p>' . $student_email . ' | ' . $student_cell . '</a></p>
                    </div>
                </div>
                ' . $tutor_card . '
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">' . $row["Gig_Name"] . '</h4>
                        <p class="card-text"><strong>Project budget &amp; Due date:</strong><br>' . $row["Gig_Estimated_Price"] . ' &amp; ' . $row["Gig_Estimated_Time"] . '</p>
                        <p class="card-text"><strong>Project description:</strong><br>' . $row["Gig_Description"] . '</p>
                        <p class="card-text"><strong>Skill:</strong><br>' . $row["Gig_Skill"] . '</p>
                        <p class="card-text"><strong>Skill:</strong><br>' . $row["Gig_Level"] . '</p>
                        <hr>
                        <center><a href="#" class="card-link">Reference Code: ' . $row["Gig_Reference_Id"] . '</a></center>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
</div>'
                . ''
                . '
                <div class="modal fade" id="notify' . $row["Member_Id"] . '" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Notify User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="title' . $row["Member_Id"] . '" class="form-control-label">Notification Title</label></div>
                    <div class="col-12 col-md-9"><input id="title' . $row["Member_Id"] . '" placeholder="Title" class="form-control" type="text"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="content' . $row["Member_Id"] . '" class="form-control-label">Notification Content</label></div>
                    <div class="col-12 col-md-9"><textarea id="content' . $row["Member_Id"] . '" id="textarea-input" rows="2" placeholder="Content..." class="form-control"></textarea></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                <button onclick="submitNotification(' . $row["Member_Id"] . ')" data-dismiss="modal" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Notify</button>
            </div>
        </div>
    </div>
</div>'
                . '';
        $data[] = $nestedData;
    }


    $json_data = array(
        "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
        "recordsTotal" => intval($totalData), // total number of records
        "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
        "data" => $data   // total data array
    );

    return json_encode($json_data);  // send data as json format
}

function finance($status) {

    include('config.php');

    $requestData = $_REQUEST;

    $our_companyid = mysqli_real_escape_string($DATABASE_CONNECTION, $_COOKIE['our_company_id']);

    $sql_uri = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';");
    $row_uri = mysqli_fetch_array($sql_uri, MYSQLI_ASSOC);
    $companyuri = $row_uri["company_uri"];


    $columns = array(
// datatable column index  => database column name
        0 => 'Member_Id',
        1 => 'Tutor_Id',
        2 => 'Milestone',
        3 => 'Gig_Code_Id',
        4 => 'Withdrawal_Status'
    );

    $sql = "SELECT * FROM `milestone_payments_" . $companyuri . "` WHERE Withdrawal_Status = '$status';";
    $query = mysqli_query($DATABASE_CONNECTION, $sql);
    $totalData = mysqli_num_rows($query);
    $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

    $sql = "SELECT * FROM milestone_payments_" . $companyuri . " WHERE Withdrawal_Status = '$status'";
    if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
        $sql .= " AND ( Milestone LIKE '" . $requestData['search']['value'] . "%')";
    }
    $query = mysqli_query($DATABASE_CONNECTION, $sql);
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
    $sql .= " ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "  LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";
    /* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */
    $query = mysqli_query($DATABASE_CONNECTION, $sql);

    $data = array();

    while ($row = mysqli_fetch_array($query)) {  // preparing an array
        $nestedData = array();

        $student_id = $row["Member_Id"];
        $tutor_id = $row["Tutor_Id"];

        if ($student_id != 0) {

            $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM all_members_" . $companyuri . " WHERE Member_Id = '$student_id';");
            $row_person = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            $student_name = $row_person['Name_and_Surname'];
        }

        if ($tutor_id != 0) {

            $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM all_members_" . $companyuri . " WHERE Member_Id = '$tutor_id';");
            $row_person = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            $tutor_name = $row_person['Name_and_Surname'];
        }

        $nestedData[] = $student_name;
        $nestedData[] = $tutor_name;
        $nestedData[] = $row["Gig_Code_Id"];
        $nestedData[] = $row["Milestone"];
        $data[] = $nestedData;
    }


    $json_data = array(
        "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
        "recordsTotal" => intval($totalData), // total number of records
        "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
        "data" => $data   // total data array
    );

    return json_encode($json_data);  // send data as json format
}

?>
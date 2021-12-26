<?php

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_REQUEST["req_log"])) {
    #include config
    include("../../php/config.php");

    #data
    $id = clean_input($_POST["id"]);
    $password = clean_input($_POST["password"]);

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_admin` WHERE Admin_Id = '$id' AND Password = '$password';");

    if (mysqli_num_rows($sql) > 0) {
        //Session
        session_start();
        $_SESSION['session_learnx_admin'] = $id;

        $res = "success";
    } else {
        $res = "error";
    }

    echo $res;
} else if (isset($_REQUEST["req_users"])) {
    #include config
    include("../../php/config.php");
    //Req Id
    $reqId = $_REQUEST["reqIdDisplay"];

    if ($reqId == "req_all_users") {

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users LIMIT 50;");
        $numOfRows = mysqli_num_rows($sql);
        if (mysqli_num_rows($sql) > 0) {
            $data = "";
            while ($row = mysqli_fetch_assoc($sql)) {
                $data .= "
                        <tr>
                            <td>" . $row["Registration_Date"] . "</td>
                            <td>" . $row["Name"] . " " . $row["Surname"] . "</td>
                            <td>" . $row["School"] . "</td>
                            <td>" . $row["Grade"] . "</td>
                            <td>" . $row["Phone"] . "</td>
                            <td>" . $row["Email"] . "</td>
                        </tr>
                            ";
            }
        } else {
            $data = "<tr>
                         <td>No Data</td>       
                     </tr>";
        }
    } else if ($reqId == "req_unpaid_users") {

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Account_Status = 'Step 1' LIMIT 50;");
        $numOfRows = mysqli_num_rows($sql);
        if (mysqli_num_rows($sql) > 0) {
            $data = "";
            while ($row = mysqli_fetch_assoc($sql)) {
                $data .= "
                        <tr>
                            <td>" . $row["Registration_Date"] . "</td>
                            <td>" . $row["Name"] . " " . $row["Surname"] . "</td>
                            <td>" . $row["School"] . "</td>
                            <td>" . $row["Grade"] . "</td>
                            <td>" . $row["Phone"] . "</td>
                            <td>" . $row["Email"] . "</td>
                        </tr>
                            ";
            }
        } else {
            $data = "<tr>
                         <td>No Data</td>       
                     </tr>";
        }
    } else if ($reqId == "req_paid_users") {

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Account_Status = 'Step 3' LIMIT 50;");
        $numOfRows = mysqli_num_rows($sql);
        if (mysqli_num_rows($sql) > 0) {
            $data = "";
            while ($row = mysqli_fetch_assoc($sql)) {
                $data .= "
                        <tr>
                            <td>" . $row["Registration_Date"] . "</td>
                            <td>" . $row["Name"] . " " . $row["Surname"] . "</td>
                            <td>" . $row["School"] . "</td>
                            <td>" . $row["Grade"] . "</td>
                            <td>" . $row["Phone"] . "</td>
                            <td>" . $row["Email"] . "</td>
                        </tr>
                            ";
            }
        } else {
            $data = "<tr>
                         <td>No Data</td>       
                     </tr>";
        }
    } else if ($reqId == "req_app_users") {

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users_app;");
        $numOfRows = mysqli_num_rows($sql);
        if (mysqli_num_rows($sql) > 0) {
            $data = "";
            while ($row = mysqli_fetch_assoc($sql)) {
                $user_id = $row["User_Id"];
                $sql_users = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Id = '$user_id';");
                $row_users = mysqli_fetch_assoc($sql_users);
                $data .= "
                        <tr>
                            <td>" . $row_users["Registration_Date"] . "</td>
                            <td>" . $row_users["Name"] . " " . $row_users["Surname"] . "</td>
                            <td>" . $row_users["School"] . "</td>
                            <td>" . $row_users["Grade"] . "</td>
                            <td>" . $row_users["Phone"] . "</td>
                            <td>" . $row_users["Email"] . "</td>
                            <td>" . $row["UUID"] . "</td>
                            <td>" . $row["Log_Date"] . "</td>
                        </tr>
                            ";
            }
        } else {
            $data = "<tr>
                         <td>No Data</td>       
                     </tr>";
        }
    } else if ($reqId == "req_search") {

        $val = $_REQUEST["search_val"];

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Email = '$val' OR Phone = '$val';");
        $numOfRows = mysqli_num_rows($sql);
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            $sql_app = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users_app WHERE User_Id = '".$row["Id"]."';");
            if(mysqli_num_rows($sql_app) > 0){
                $row_app = mysqli_fetch_assoc($sql_app);
                $display_app_table = "
                        <h3>App Login Information</h3>
                        <div class='table-responsive'>
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>Device UUID</th>
                                    <th>Log Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>" . $row_app["UUID"] . "</td>
                                    <td>" . $row_app["Log_Date"] . " </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                                        ";
            }else{
                $display_app_table = "
                    <h3>App Login Information</h3>
                        <div class='table-responsive'>
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>Device UUID</th>
                                    <th>Log Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>No Data</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                                        ";
            }
            
            $account_stat = $row["Account_Status"];
            if($account_stat == "Step 1"){$account_stat = "Not Paid";}else if($account_stat == "Step 3"){$account_stat = "Paid";}
            
            $data = "
                    <h3>User Information</h3>
                    <div class='table-responsive'>
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>Reg Date</th>
                                    <th>Account Status</th>
                                    <th>Name & Surname</th>
                                    <th>School</th>
                                    <th>Grade</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>" . $row["Registration_Date"] . "</td>
                                    <td>$account_stat</td>
                                    <td>" . $row["Name"] . " " . $row["Surname"] . "</td>
                                    <td>" . $row["School"] . "</td>
                                    <td>" . $row["Grade"] . "</td>
                                    <td>" . $row["Phone"] . "</td>
                                    <td>" . $row["Email"] . "</td>
                                    <td>" . $row["Password"] . "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>".$display_app_table;
        } else {
            $data = '
                    <div class="alert alert-warning text-center">
                            Email Address or Phone Number it is not associated with any user(s) in the database.
                        </div>
                    ';
        }
    }

    echo $data;
} else if (isset($_REQUEST["req_codes"])) {
    #include config
    include("../../php/config.php");
    //Req Id
    $reqId = $_REQUEST["reqIdDisplay"];

    if ($reqId == "req_redeemed_codes") {

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_unlock_codes` WHERE  Status = 'Not Active' LIMIT 50;");
        $numOfRows = mysqli_num_rows($sql);
        if (mysqli_num_rows($sql) > 0) {
            $data = "";
            while ($row = mysqli_fetch_assoc($sql)) {
                $user_id = $row["User_Id"];
                $sql_users = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Id = '$user_id';");
                $row_users = mysqli_fetch_assoc($sql_users);
                
                $data .= "
                        <tr>
                            <td>" . $row["Code"] . "</td>
                            <td>" . $row["Redeemed_Date"] . "</td>
                            <td>" . $row_users["Name"] . " " . $row_users["Surname"] . "</td>
                            <td>" . $row_users["Email"] . "</td>
                            <td>" . $row_users["Phone"] . "</td>
                        </tr>
                            ";
            }
        } else {
            $data = "<tr>
                         <td>No Data</td>       
                     </tr>";
        }
    } else if ($reqId == "req_active_codes") {

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_unlock_codes` WHERE Status = 'Active' LIMIT 50;");
        $numOfRows = mysqli_num_rows($sql);
        if (mysqli_num_rows($sql) > 0) {
            $data = "";
            while ($row = mysqli_fetch_assoc($sql)) {
                $data .= "
                        <tr>
                            <td>" . $row["Code"] . "</td>
                            <td>" . $row["Status"] . "</td>
                        </tr>
                            ";
            }
        } else {
            $data = "<tr>
                         <td>No Data</td>       
                     </tr>";
        }
    } else if ($reqId == "req_paid_users") {

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Account_Status = 'Step 3' LIMIT 50;");
        $numOfRows = mysqli_num_rows($sql);
        if (mysqli_num_rows($sql) > 0) {
            $data = "";
            while ($row = mysqli_fetch_assoc($sql)) {
                $data .= "
                        <tr>
                            <td>" . $row["Registration_Date"] . "</td>
                            <td>" . $row["Name"] . " " . $row["Surname"] . "</td>
                            <td>" . $row["School"] . "</td>
                            <td>" . $row["Grade"] . "</td>
                            <td>" . $row["Phone"] . "</td>
                            <td>" . $row["Email"] . "</td>
                        </tr>
                            ";
            }
        } else {
            $data = "<tr>
                         <td>No Data</td>       
                     </tr>";
        }
    } else if ($reqId == "req_app_users") {

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users_app;");
        $numOfRows = mysqli_num_rows($sql);
        if (mysqli_num_rows($sql) > 0) {
            $data = "";
            while ($row = mysqli_fetch_assoc($sql)) {
                $user_id = $row["User_Id"];
                $sql_users = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Id = '$user_id';");
                $row_users = mysqli_fetch_assoc($sql_users);
                $data .= "
                        <tr>
                            <td>" . $row_users["Registration_Date"] . "</td>
                            <td>" . $row_users["Name"] . " " . $row_users["Surname"] . "</td>
                            <td>" . $row_users["School"] . "</td>
                            <td>" . $row_users["Grade"] . "</td>
                            <td>" . $row_users["Phone"] . "</td>
                            <td>" . $row_users["Email"] . "</td>
                            <td>" . $row["UUID"] . "</td>
                            <td>" . $row["Log_Date"] . "</td>
                        </tr>
                            ";
            }
        } else {
            $data = "<tr>
                         <td>No Data</td>       
                     </tr>";
        }
    } else if ($reqId == "req_search") {

        $val = $_REQUEST["search_val"];

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Email = '$val' OR Phone = '$val';");
        $numOfRows = mysqli_num_rows($sql);
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            $sql_app = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users_app WHERE User_Id = '".$row["Id"]."';");
            if(mysqli_num_rows($sql_app) > 0){
                $row_app = mysqli_fetch_assoc($sql_app);
                $display_app_table = "
                        <h3>App Login Information</h3>
                        <div class='table-responsive'>
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>Device UUID</th>
                                    <th>Log Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>" . $row_app["UUID"] . "</td>
                                    <td>" . $row_app["Log_Date"] . " </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                                        ";
            }else{
                $display_app_table = "
                    <h3>App Login Information</h3>
                        <div class='table-responsive'>
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>Device UUID</th>
                                    <th>Log Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>No Data</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                                        ";
            }
            
            $account_stat = $row["Account_Status"];
            if($account_stat == "Step 1"){$account_stat = "Not Paid";}else if($account_stat == "Step 3"){$account_stat = "Paid";}
            
            $data = "
                    <h3>User Information</h3>
                    <div class='table-responsive'>
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>Reg Date</th>
                                    <th>Account Status</th>
                                    <th>Name & Surname</th>
                                    <th>School</th>
                                    <th>Grade</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>" . $row["Registration_Date"] . "</td>
                                    <td>$account_stat</td>
                                    <td>" . $row["Name"] . " " . $row["Surname"] . "</td>
                                    <td>" . $row["School"] . "</td>
                                    <td>" . $row["Grade"] . "</td>
                                    <td>" . $row["Phone"] . "</td>
                                    <td>" . $row["Email"] . "</td>
                                    <td>" . $row["Password"] . "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>".$display_app_table;
        } else {
            $data = '
                    <div class="alert alert-warning text-center">
                            Email Address or Phone Number it is not associated with any user(s) in the database.
                        </div>
                    ';
        }
    }

    echo $data;
}
?>

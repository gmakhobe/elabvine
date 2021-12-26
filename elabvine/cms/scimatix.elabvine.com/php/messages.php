<?php

include("config.php");
//request id
switch ($_REQUEST['reqId']) {
    case "loadPeople":
        //Inlcude functions
        include("functions.php");
        //Query Int
        $query_cookie = $_COOKIE['query_cookie'];
        //Sql
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM chats WHERE Main_User = '$query_cookie' OR Sub_User = '$query_cookie';");
        if (mysqli_num_rows($sql) > 0) {
            $results = "";
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                if ($query_cookie == $row["Sub_User"]) {
                    //Get Main User Id
                    $user_id = $row["Main_User"];
                    //Get Time and see if user still new
                    $date = $row["Datetime"];
                    if ($date == "0000-00-00 00:00:00") {
                        $date = standardDate(date("Y-m-d H:i:s"));
                    } else {
                        $date = standardDate($date);
                    }
                    //End Get Time and see if user still new
                    //execute two statements 1 to get user name and surname and the other to get profile
                    $sql2 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_information` WHERE Id = '$user_id';");
                    $sql3 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$user_id';");
                    //Get columns
                    $row2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);
                    $row3 = mysqli_fetch_array($sql3, MYSQLI_ASSOC);
                    $name = $row2["Name"] . " " . $row2["Surname"];
                    //Get Profile Picture
                    $profile = $row3["Profile_Picture"];
                    if ($profile == "") {
                        $profile = "img/profile.png";
                    }
                    $results = '
                        <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="../' . $profile . '" style="width: 80px;height: 80px;" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">' . $name . '</a></h5>
                                            <p class="date">' . $date . '</p>
                                            <p class="comment">
                                                Send a message...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="chats.php?chatsId=' . $user_id . '" class="btn-reply text-uppercase">Message</a> 
                                    </div>
                                </div>
                            </div>
                            ';
                } else if ($query_cookie == $row["Main_User"]) {
                     //Get Main User Id
                    $user_id = $row["Sub_User"];
                    //Get Time and see if user still new
                    $date = $row["Datetime"];
                    if ($date == "0000-00-00 00:00:00") {
                        $date = standardDate(date("Y-m-d H:i:s"));
                    } else {
                        $date = standardDate($date);
                    }
                    //End Get Time and see if user still new
                    //execute two statements 1 to get user name and surname and the other to get profile
                    $sql2 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_information` WHERE Id = '$user_id';");
                    $sql3 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$user_id';");
                    //Get columns
                    $row2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);
                    $row3 = mysqli_fetch_array($sql3, MYSQLI_ASSOC);
                    $name = $row2["Name"] . " " . $row2["Surname"];
                    //Get Profile Picture
                    $profile = $row3["Profile_Picture"];
                    if ($profile == "") {
                        $profile = "img/profile.png";
                    }
                    $results = '
                        <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="../' . $profile . '" style="width: 80px;height: 80px;" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">' . $name . '</a></h5>
                                            <p class="date">' . $date . '</p>
                                            <p class="comment">
                                                Send a message...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="chats.php?chatsId=' . $user_id . '" class="btn-reply text-uppercase">Message</a> 
                                    </div>
                                </div>
                            </div>
                            ';
                }
            }
        } else {
            $results = '';
        }
        //Print
        echo $results;
        break;
    case "loadChat":
        //Inlcude functions
        include("functions.php");
        include("timeago.php");
        //Query Int
        $receiverId = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['receiver']);
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_information` WHERE Id = '$query_cookie';");
        $row = mysqli_fetch_assoc($sql);
        $account_type = $row["Account_Type"];
        if ($account_type == "Student") {
            $sql2 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `chats` WHERE Main_User = '$query_cookie' AND Sub_User = '$receiverId';");
        } else if ($account_type == "Tutor") {
            $sql2 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `chats` WHERE Main_User = '$receiverId' AND Sub_User = '$query_cookie';");
        }

        if (mysqli_num_rows($sql2) > 0) {
            $row2 = mysqli_fetch_assoc($sql2);
            $chatsId = $row2["Id"];
        } else {
            echo 'error';
            return;
        }

        $sql3 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_messages` WHERE Chats_Id = '$chatsId' ORDER BY Datetime ASC;");

        if (mysqli_num_rows($sql3) > 0) {

            $display = '';

            while ($row = mysqli_fetch_assoc($sql3)) {

                $from = $row['Sender_Id'];
                $to = $row['Receiver_Id'];
                $message = $row['Message'];
                $time_raw = $row['Datetime'];
                $clean_time = facebook_time_ago($time_raw);

                $sql_second = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM " . $companyuri . "_members_information WHERE Id = '" . $from . "';");
                $row_second = mysqli_fetch_array($sql_second, MYSQLI_ASSOC);
                $name = $row_second['Name'] . " " . $row_second['Surname'];

                if ($from == $query_cookie) {

                    $display .= '
                                <li class="right clearfix"><span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff&text=Out" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted"><span class="fa fa-clock-o"></span> ' . $clean_time . '</small>
                                            <strong class="pull-right primary-font">' . $name . '</strong>
                                        </div>
                                        <p>
                                            ' . html_entity_decode($message) . '
                                        </p>
                                    </div>
                                </li>         
                    ';
                } else if ($to == $query_cookie) {

                    $display .= '
                            <li class="left clearfix"><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff&text=In" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">' . $name . '</strong> <small class="pull-right text-muted">
                                                <span class="fa fa-clock-o"></span> ' . $clean_time . '</small>
                                        </div>
                                        <p>
                                            ' . html_entity_decode($message) . '
                                        </p>
                                    </div>
                                </li>
                    ';
                }
            }
            $display .= '';
        } else {

            $sql_second = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM " . $companyuri . "_members_information WHERE Id = '" . $receiverId . "';");

            $row_second = mysqli_fetch_array($sql_second, MYSQLI_ASSOC);

            $name = $row_second['Name'] . " " . $row_second['Surname'];
            $accounttype = $row_second['Account_Type'];

            $display = '<div class="incoming_msg well text-center">No new messages...</div>
                    <div class="incoming_msg alert alert-info text-center">Be the first to say hi to  <strong>' . $name . ' </strong></div> ';
        }

        echo $display;

        break;
    case "sendmessage":
        //Inlcude functions
        include("functions.php");
        include("timeago.php");
        //Query Int
        $receiverId = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['receiver']);
        $message = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['message']);
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_information` WHERE Id = '$query_cookie';");
        $row = mysqli_fetch_assoc($sql);
        $account_type = $row["Account_Type"];
        if ($account_type == "Student") {
            $sql2 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `chats` WHERE Main_User = '$query_cookie' AND Sub_User = '$receiverId';");
        } else if ($account_type == "Tutor") {
            $sql2 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `chats` WHERE Main_User = '$receiverId' AND Sub_User = '$query_cookie';");
        }

        if (mysqli_num_rows($sql2) > 0) {
            $row2 = mysqli_fetch_assoc($sql2);
            $chatsId = $row2["Id"];
        } else {
            echo 'error';
            return;
        }
        $now = date("Y-m-d H:i:s");

        $sql = "UPDATE `chats` SET Datetime = '" . $now . "' WHERE Id = '" . $chatsId . "';";
        $sql .= "INSERT INTO `" . $companyuri . "_messages`(Chats_Id, Message, Sender_Id, Receiver_Id, Datetime) VALUES('" . $chatsId . "', '" . $message . "', '" . $query_cookie . "', '" . $receiverId . "', '" . $now . "');";

        if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {

            echo "success";
        } else {

            echo "error";
        }


        break;
}
?>
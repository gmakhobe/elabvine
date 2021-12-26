<?php

session_start();

if (!isset($_SESSION['elabvine_api_session']) && !isset($_COOKIE['elavine_remember_user_session'])) {

    header("Location: ../index.php");
} else {

    include('config.php');
    //Get Email Address
    
    if(isset($_SESSION['elabvine_api_session']) && !isset($_COOKIE['elavine_api_remember_user_session'])){
        $my_emailaddress = $_SESSION['mysession'];
    }else if(!isset($_SESSION['elabvine_api_session']) && isset($_COOKIE['elavine_api_remember_user_session'])){
       $_SESSION['elabvine_api_session'] = $_COOKIE['elavine_api_remember_user_session'];
       $my_emailaddress = $_SESSION['elabvine_api_session'];
    }else if(isset($_SESSION['elabvine_api_session']) && isset($_COOKIE['elavine_api_remember_user_session'])){
       $my_emailaddress = $_SESSION['elabvine_api_session'];
    }
    
    
    //Get Current User Details
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company where email_address = '$my_emailaddress';");
    if (mysqli_num_rows($sql) > 0) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $our_companyid = $row['company_id'];
        $our_companyuri = $row['company_uri'];
        $our_emailaddress = $row['email_address'];
        $our_adminname = $row['admin_name'];
        $our_display = $row['display'];
        $our_accountstatus = $row['account_status'];
        $our_status = $row['status'];
        $our_companyname = $row['company_name'];
        $our_businesstype = $row['business_type'];
        $our_secondaryemail = $row['secondary_email_address'];
        $our_mobilenumber = $row['mobile_number'];
        $our_bio = $row['short_bio'];
        $our_password = $row['password'];
        $our_subscription = $row['subscription_plan'];
        $our_commission = $row['commission'];
        
        $sql_pg = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `company_payment_getaway` WHERE payfast = 1;");
        $row = mysqli_fetch_array($sql_pg, MYSQLI_ASSOC);
        $pg_eft = $row['eft'];
        $pg_payoutfee = $row['payout_fee'];
        
        if($our_subscription == "Start-Up"){
            $our_subscription_sub = "Free Forever";
            $our_subscription1 = '
                            <div class="card-header text-center bg-warning">
                                <strong class="card-title pl-2">Current Plan</strong>
                            </div>';
            $our_subscription2 = "";
            $our_subscription3 = "";
            $plan_btn1 = "";
            $plan_btn2 = '<strong class="card-title mb-3"><a href="subscription-plan-payment.php" onclick="localStorage.setItem(\'plan\', \'Growing Business\')" class="btn btn-primary">Choose This Plan</a></strong>';
            $plan_btn3 = '<strong class="card-title mb-3"><a href="subscription-plan-payment.php" onclick="localStorage.setItem(\'plan\', \'Premium\')" class="btn btn-primary">Choose This Plan</a></strong>';
        }else if($our_subscription == "Growing Business"){
            $our_subscription_sub = "No Restrictions";
            $our_subscription1 = "";
            $our_subscription2 = '
                            <div class="card-header text-center bg-warning">
                                <strong class="card-title pl-2">Current Plan</strong>
                            </div>';
            $our_subscription3 = "";
            $plan_btn1 = '<strong class="card-title mb-3"><a href="#" onclick="startPlan(\''.$our_companyid.'\', \''.$our_companyuri.'\')" class="btn btn-primary">Choose Free Plan</a></strong>';
            $plan_btn2 = "";
            $plan_btn3 = '<strong class="card-title mb-3"><a href="subscription-plan-payment.php" onclick="localStorage.setItem(\'plan\', \'Premium\')" class="btn btn-primary">Choose This Plan</a></strong>';
        }else if($our_subscription == "Premium"){
            $our_subscription_sub = "Full Potential";
             $our_subscription1 = "";
            $our_subscription2 = "";
            $our_subscription3 = '
                            <div class="card-header text-center bg-warning">
                                <strong class="card-title pl-2">Current Plan</strong>
                            </div>';
            $plan_btn1 = '<strong class="card-title mb-3"><a href="#" onclick="startPlan(\''.$our_companyid.'\', \''.$our_companyuri.'\')" class="btn btn-primary">Choose Free Plan</a></strong>';
            $plan_btn2 = '<strong class="card-title mb-3"><a href="subscription-plan-payment.php" onclick="localStorage.setItem(\'plan\', \'Growing Business\')" class="btn btn-primary">Choose This Plan</a></strong>';
            $plan_btn3 = "";
        }
        
        if($our_bio == ""){
            $our_bio = "";
        }
        
        if($our_mobilenumber == ""){
            $our_mobilenumber = "";
        }
        
        if($our_secondaryemail == ""){
            $our_secondaryemail = "";
        }
        
        if($our_display == ""){
           $our_display ="images/profile.png";
        } else {
            $our_display ="../$our_display";
        }
        //Set Cookie
        $cookie_name = "our_company_id";
        $cookie_value = $our_companyid;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        
        
        $sql_plan = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_invoices WHERE company_uri = (SELECT company_uri FROM company WHERE company_id = $our_companyid) ORDER BY invoices_id DESC;");

        $rows = mysqli_fetch_array($sql_plan, MYSQLI_ASSOC);
        $paiddate = date_create($rows["date"]);
        $paiddate = date_format($paiddate, "Y-m-d");
        $timespan = $rows["timespan"];

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
            $sql_change = mysqli_query($DATABASE_CONNECTION, "UPDATE company SET subscription_plan = 'Start-Up' WHERE company_id = '$our_companyid';");
        }
        
    } else {

        $our_companyid = "";
        $our_adminname = "";
        $our_display = "";
    }
    

    
}
?>
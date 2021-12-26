<?php

include('../php/timeago.php');

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company WHERE company_id = '$our_companyid';");
    
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $bankname = $row['bank_name'];
        $branchname = $row['branch_name'];
        $branchcode = $row['branch_code'];
        $accnumber = $row['account_number'];
        $accholder = $row['account_holder'];
        $subplan = $row['subscription_plan'];
        
        if($subplan == "Start-Up"){
            $subplan = ''
                    . '<div class="col-lg-12 col-md-12">'
                    . '<p>We use PayFast to proccess payments from users who would be using your platform and we use EFT as preferred means of paymnet see <a href="https://www.payfast.co.za/fees/" target="_blank">PayFast EFT and Withdrawal costs</a></p>'
                    .'<div class="alert alert-info">This is a free account and from each and every withdrawal you make we charge a commission 20%<br>Change your subscription plan, on other subscription plans we charge 0% commission.</div>'
                    . '</div>';
        }else{
            
            $subplan = ''
                    . '<div class="col-lg-12 col-md-12">'
                    . '<p>We use PayFast to proccess payments from users who would be using your platform and we use EFT as preferred means of paymnet see <a href="https://www.payfast.co.za/fees/" target="_blank">PayFast EFT and Withdrawal costs</a>.</p>'
                    . '</div>';
            
        }
        
        
        if($bankname == "" || $branchname == "" ||$branchcode == "" || $accnumber == "" || $accholder == ""){
            
            $account_section = "d-none";
            
        }else{
            
            $account_section = "col-lg-12 col-md-12";
            
        }
           
        
    }
    
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_payouts WHERE company_id = '$our_companyid';");
    if(mysqli_num_rows($sql) > 0){
        
        $payout_section = "";
        
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `company_payouts` WHERE company_payouts_id=(SELECT MAX(company_payouts_id) FROM `company_payouts`);");
        
        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $daterequested = facebook_time_ago($row["requested_date"]);
        $dateexpected = $row["expected_date"];
        $amountrequested = $row["amount_requested"];
        $amounttoreceive = $row["amount_to_receive"];
        $elabvinefee = $row["elabvine_commission"];
        $paygate_commission = $row["paygate_commission"];
        
        if($elabvinefee == 0){
            $elabvinefee_th = "";
            $elabvinefee_td = "";
        }else{
            $elabvinefee_th = "<th>Elabvine Commission</th>";
            $elabvinefee_td = "<td>R$elabvinefee</td>";
        }
        $payoutstatus = $row["status"];
        if($payoutstatus == "No"){
            $payoutstatus = "Not yet paid";
        }else{
            $payoutstatus = "Paid";
        }
        
        
    }else{
        
        $payout_section = "d-none";
        
    }

?>
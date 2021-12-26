<?php include("../php/session.php"); ?>
<?php
if (isset($_REQUEST['id'])) {
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['id']);
    if ($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_invoices WHERE invoices_id = '$id' AND company_uri = '$our_companyuri';")) {
        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $package = $row['package'];
        if ($package == "Premium") {
            $item = "$package Standard Plan";
        } else if ($package == "Growing Business") {
            $item = "$package Standard Plan";
        }
        $amount = $row['amount'];
        $invoice = $row['invoices_id'];
        $date = date_create($row['date']);
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Invoice</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="../img/fav.png">
        <link rel="shortcut icon" href="../img/fav.png">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

        <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
        <style>
            .invoice-title h2, .invoice-title h3 {
                display: inline-block;
            }

            .table > tbody > tr > .no-line {
                border-top: none;
            }

            .table > thead > tr > .no-line {
                border-bottom: none;
            }

            .table > tbody > tr > .thick-line {
                border-top: 2px solid;
            }
        </style>

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="invoice-title">
                        <h2>Invoice</h2><h3 class="pull-right">Order # CMS0<?php echo $our_companyid; ?>A<?php echo $invoice; ?></h3>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-6">
                            <address>
                                <strong>Billed To:</strong><br>
                                <?php echo $our_companyname; ?>
                            </address>
                        </div>
                        <div class="col-xs-6 text-right">
                            <address>
                                <strong>Sent To:</strong><br>
                                <?php echo $our_adminname; ?><br>
                                <?php echo $our_emailaddress; ?>
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <strong>Bank Account Details:</strong><br>
                            Bank: Capitec<br>
                            Account Number: 1466040953<br>
                            Branch Code: 470010<br>
                            Reference: CMS0<?php echo $our_companyid; ?>A
                        </div>
                        <div class="col-xs-6 text-right">
                            <address>
                                Date: <?php
                                echo date_format($date, "F d, Y");
                                ?> <br><br>
                            </address>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Order summary</strong></h3>
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
                                        <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                        <tr>
                                            <td><?php echo $item; ?></td>
                                            <td class="text-center">R<?php echo $amount; ?></td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">R<?php echo $amount; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="no-line"></td>
                                            <td class="no-line"></td>
                                            <td class="no-line text-center"><strong>VAT(%15)</strong></td>
                                            <td class="no-line text-right">R<?php echo ($amount * 0.15); ?></td>
                                        </tr>
                                        <tr>
                                            <td class="no-line"></td>
                                            <td class="no-line"></td>
                                            <td class="no-line text-center"><strong>Total</strong></td>
                                            <td class="no-line text-right">R<?php echo (($amount * 0.15) + $amount); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button type="button" id="print" onclick="convertToPdf()" class="btn btn-primary btn-block">Print/Download</button> 
                        </div>
                    </div>
                    <p><a href="https://elabvine.com">elabvine</a> &copy; all rights reserved <?php echo date("Y"); ?>. Call: +27 76 340 1996 From 9am to 5pm Mon-Sun</p>
                </div>
            </div>
        </div>

        <script>

            function convertToPdf() {
                var doc = new jsPDF();

// We'll make our own renderer to skip this editor
                var specialElementHandlers = {
                    '#print': function (element, renderer) {
                        return true;
                    }
                };

// All units are in the set measurement for the document
// This can be changed to "pt" (points), "mm" (Default), "cm", "in"
                doc.fromHTML($('body').get(0), 15, 15, {
                    'width': 170,
                    'elementHandlers': specialElementHandlers
                });

                doc.output("dataurlnewwindow");
            }

        </script>
    </body>
</html>

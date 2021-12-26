<?php

include('config.php');
include('timeago.php');
include('recycling.php');

if (!isset($_COOKIE['our_company_id'])) {
    $our_companyid = "";
} else {
    $our_companyid = mysqli_real_escape_string($DATABASE_CONNECTION, $_COOKIE['our_company_id']);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company WHERE company_id = '$our_companyid';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
}

if (isset($_REQUEST['a1'])) {


    $header = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['colname']);
    $detail = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['coldetail']);

    if ($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';")) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $options = $row["$header"];

        if ($options == "") {
            $detailed = $detail;
        } else {
            $detailed = $options . ", " . $detail;
        }

        if (mysqli_query($DATABASE_CONNECTION, "UPDATE `company_template` SET $header = '$detailed' WHERE company_id = '$our_companyid'")) {

            echo "success";
        } else {
            echo "error";
        }
    }
} else if (isset($_REQUEST['a2'])) {

    if ($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';")) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $options = $row['get_text3'];

        if ($options == "") {
            echo "Nothing Added Yet";
        } else {
            $skills = explode(", ", $options);

            foreach ($skills as $arrays) {

                if ($arrays == "") {
                    
                } else {
                    echo $arrays . " <button class='btn btn-default' onclick='removeOptions(\"" . $arrays . "\", \"get_text3\")'>&times;</button>, ";
                }
            }
        }
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a3'])) {

    $header = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['colname']);
    $detail = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['coldetail']);

    if ($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';")) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $options = $row["$header"];
        $options = explode(", ", $options);

        function my_remove_array_item($options, $item) {
            $index = array_search($item, $options);
            if ($index !== false) {
                unset($options[$index]);
            }

            return $options;
        }

        $options = my_remove_array_item($options, "$detail");

        $addoptions = "";

        foreach ($options as $arrays) {
            $addoptions .= $arrays . ", ";
        }

        if (mysqli_query($DATABASE_CONNECTION, "UPDATE `company_template` SET $header = '$addoptions' WHERE company_id = '$our_companyid'")) {

            echo "success";
        } else {
            echo "error";
        }
    }
} else if (isset($_REQUEST['a4'])) {

    if ($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';")) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $options = $row['get_text3'];
        if ($options == "") {
            echo "<option>select</option>";
        } else {
            $options = explode(", ", $options);

            $display = "<option>Select</option>";

            foreach ($options as $arrays) {

                if ($arrays == "") {
                    
                } else {
                    $display .= " <option value='$arrays'>" . $arrays . "</option>";
                }
            }
            
            echo $display;
        }

    }
} else if (isset($_REQUEST['a5'])) {

    if ($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';")) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $options = $row['get_text8'];

        if ($options == "") {
            echo "Nothing Added Yet";
        } else {
            $skills = explode(", ", $options);

            foreach ($skills as $arrays) {

                if ($arrays == "") {
                    
                } else {
                    echo $arrays . " <button class='btn btn-default' onclick='removeOptions(\"" . $arrays . "\", \"get_text8\")'>&times;</button>, ";
                }
            }
        }
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a6'])) {

    if ($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';")) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $options = $row['get_text8'];
        if ($options == "") {
            echo "<option>select</option>";
        } else {
            $options = explode(", ", $options);

            $display = "<option>Select</option>";

            foreach ($options as $arrays) {

                if ($arrays == "") {
                    
                } else {
                    $display .= " <option value='$arrays'>" . $arrays . "</option>";
                }
            }
            
            echo $display;
        }

    }
} else if (isset($_REQUEST['a7'])) {

    if ($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';")) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $options = $row['get_text14'];

        if ($options == "") {
            echo "Nothing Added Yet";
        } else {
            $skills = explode(", ", $options);

            foreach ($skills as $arrays) {

                if ($arrays == "") {
                    
                } else {
                    echo $arrays . " <button class='btn btn-default' onclick='removeOptions(\"" . $arrays . "\", \"get_text14\")'>&times;</button>, ";
                }
            }
        }
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a8'])) {

    if ($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';")) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $options = $row['get_text14'];
        if ($options == "") {
            echo "<option>select</option>";
        } else {
            $options = explode(", ", $options);

            $display = "<option>Select</option>";

            foreach ($options as $arrays) {

                if ($arrays == "") {
                    
                } else {
                    $display .= " <option value='$arrays'>" . $arrays . "</option>";
                }
            }
            
            echo $display;
        }

    }
} else if (isset($_REQUEST['a9'])) {

    if ($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company_template WHERE company_id = '$our_companyid';")) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $options = $row['post_text5'];

        if ($options == "") {
            echo "<li>No requrements.</li>";
        } else {
            $skills = explode(", ", $options);

            foreach ($skills as $arrays) {

                if ($arrays == "") {
                    
                } else {
                    echo "<li>$arrays <button class='btn btn-default' onclick='removeOptions(\"" . $arrays . "\", \"post_text5\")'>&times;</button></li>";
                }
            }
        }
    } else {
        echo "error";
    }
}
?>
<?php

$sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_information` WHERE Id = '$user_id';");
if (mysqli_num_rows($sql) > 0) {
    //Table scimatix_...
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    //Values
    $name = $row["Name"];
    $surname = $row["Surname"];
    $phone = $row["Phone"];
    $email = $row["Email_Address"];
    $password = $row["Password"];
    //Get info from members_info
    $sql2 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$user_id';");
    //Table scimatix_...
    $row2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);
    $gender = $row2["Gender"];
    $date_birth = $row2["Date_Birth"];
    $grade = $row2["Grade"];
    $school = $row2["School"];
    $address_street = $row2["Address_Street"];
    $address_suburb = $row2["Address_Suburb"];
    $address_city = $row2["Address_City"];
    $address_zip = $row2["Address_Zip"];
    $guardian_name = $row2["Guardian_Name"];
    $guardian_phone = $row2["Guardian_Phone"];
    $guardian_email = $row2["Guardian_Email"];
    $identification = $row2["Id_Number"];
    $occupation = $row2["Occupation"];
}
?>
<?php
    $DATABASE_ADDRESS = $DATABASE_USERNAME = $DATABASE_PASSWORD = $DATABASE_NAME = $DATABASE_CONNECTION = "";
    
    $DATABASE_ADDRESS = 'localhost';
    $DATABASE_USERNAME = 'nzilanegiven';
    $DATABASE_PASSWORD = '!QAZXSW@#EDC';
    $DATABASE_NAME = 'site_elabvine';

    $DATABASE_CONNECTION = mysqli_connect($DATABASE_ADDRESS, $DATABASE_USERNAME, $DATABASE_PASSWORD, $DATABASE_NAME);

    if(!$DATABASE_CONNECTION) {
        #internal error
        echo "<div class='alert alert-danger'>
            <p class='text-danger'>
                Our servers are down contact us at webmaster@elabvine.co.za with subject of |reg_error| to get assistance.
            </p>
        </div>";
    }
	date_default_timezone_set("Africa/Johannesburg");
?>
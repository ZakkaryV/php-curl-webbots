
<?php

# Opening a new PHP/CURL session
$s = curl_init();

# Configuration of the PHP/CURL command
curl_setopt($s, CURLOPT_URL, "http://google.com/");    // Define target site 
curl_setopt($s, CURLOP_RETURNTRANSFER, TRUE);          // Return data in string format

# Execute the CURL command
$page_data = curl_exec($s);

# Close CURL session
curl_close($s);

?>
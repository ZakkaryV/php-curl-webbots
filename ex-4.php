
<?php

# Opening a new PHP/CURL session
$s = curl_init();

# Configuration of the PHP/CURL command
// curl_setopt($s, CURLOPT_URL, "http://google.com/");    // Define target site 
// curl_setopt($s, CURLOP_RETURNTRANSFER, TRUE);          // Return data in string format
// curl_setopt($s, CURLOPT_FOLLOWLOCATION, TRUE);         // Follows HTTP page redirects; no JS or meta tags
// curl_setops($s, CURLOPT_MAXREDIRS, 4);                 // Sets maxixum number of redirects
// curl_setops($s, CURLOPT_HEADER, TRUE);                 // Include the HTTP header
// curl_setops($s, CURLOPT_NOBODY, TRUE);                 // Exclude HTTP body

# A better way of configuration
$config = array(
    CURLOPT_URL            => "http://google.com/",
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_FOLLOWLOCATION => TRUE,
    CURLOPT_MAXREDIRS      => 4,
    CURLOPT_HEADER         => TRUE,
    CURLOPT_NOBODY         => TRUE
);

# Other options include: 
    // CURLOP_COOKIEFILE
    // CURLOP_COOKIEJAR
    // CURLOP_HTTPHEADER
    // CURLOP_TIMEOUT

curl_setopt_array($s, $config);

# Execute the CURL command
$page_data = curl_exec($s);

echo $page_data;

# Close CURL session
curl_close($s);

?>
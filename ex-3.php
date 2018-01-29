
<?php

    include("lib_http/LIB_http.php");

    # define a url & referrer 
    $target = "https://soundcloud.com/ZakkaryV";
    $ref    = "https://google.com/";

    # store downloaded page data in a 3d array
    $returnarray = http_get_withheader($target, $ref);

    # var_dump echos all information about a particular variable
    echo 'FILE CONTENTS \n';
    var_dump($returnarray['FILE']);

    echo 'ERRORS \n';
    var_dump($returnarray['ERROR']);

    echo 'STATUS \n';
    var_dump($returnarray['STATUS']);

?>
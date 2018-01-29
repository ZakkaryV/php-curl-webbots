
<?php
    # Instead of using fget to print the file in byte-sized chunks, we can use file() to
    # store the downloaded file as an array where each index is a line
    $target = "http://www.WebbotsSpidersScreenScrapers.com/hello_world.html";
    $file_array = file($target);

    # print the file line by line
    for ($xx = 0; $xx < count($file_array); $xx++)
        echo $file_array[$xx];

    # We no longer need to fclose the network connection we opened with fopen

?>
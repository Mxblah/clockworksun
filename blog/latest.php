<?php
//Finds latest year
$years = glob("posts/*");
rsort($years);
$year = $years[0];
//Gets last modified file, which should be the latest post
$files = glob("$year/*/*.html");
$files = array_combine($files, array_map("filemtime", $files));
arsort($files);
$latest_file = key($files);
//Redirects browser to the latest post we found.
header( "Location: https://blog.clockworksun.com/$latest_file" );
?>
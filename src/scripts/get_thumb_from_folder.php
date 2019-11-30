<?php
    //Function takes a folder as input and returns the last modified photo in the folder (to be used as a thumbnail)
    function get_thumb_from_folder($folder) {
        //Finds all files in the photo and sorts by modified time
        //We're assuming all files in the folder are photos
        $files = glob("$folder/*");
        usort($files, function($a, $b) {
            return filemtime($a) < filemtime($b);
        });

        //Takes the first photo off the list and returns it
        return $files[0];
    }
?>
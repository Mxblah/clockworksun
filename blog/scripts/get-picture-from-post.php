<?php
    function get_picture_from_post($file) {
        //Sets variables for file stream and regex pattern
        $stream = fopen($file,'r');
        if(!$stream) {
            echo "$file does not exist or cannot be opened.";
            return false;
        } else {
            $pattern = 'background: (url\("(.*)"\))';
            $url = "";
            $found = false;
            //Iterates through the file line by line until a regex match is found
            while(!$found) {
                $line = fgets($stream);
                if(!$line) {
                    echo "Unexpected end of file.";
                    return false;
                } else {
                    preg_match($pattern, $line, $matches);
                    //If a match is found, terminate the loop and set the URL to the matched string
                    if(!empty($matches)) {
                        $url = $matches[2];
                        $found = true;
                    }
                }
            }
            fclose($stream);
            return $url;
        }
    }
?>
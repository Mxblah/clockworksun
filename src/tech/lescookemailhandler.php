<?php
    //Converts the POST request to its component variables.
    $date = htmlspecialchars($_POST['date']);
    $subject = htmlspecialchars($_POST['subject']);

    //Sets and opens the file containing the last email time.
    $file = "lescookemailtime.txt";
    $stream = fopen($file,'w');
    if(!$stream) {
        echo "$file cannot be opened or cannot be created.";
        return false;
    } else {
        if(flock($stream, LOCK_EX)) {
            //Writes date and subject of the latest email to the file.
            fwrite($stream, $date);
            fwrite($stream, $subject);
            flock($stream, LOCK_UN);
        } else {
            echo "$file could not be locked for writing.";
            return false;
        }
    }
    fclose($stream);

?>
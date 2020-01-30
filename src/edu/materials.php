<!DOCTYPE html>
<html lang="en">
    <!-- Page template version 1.2.0 -->
    <head>
        <meta name="google-site-verification" content="PDzzQqxy5RWNOb9YftS2WGk9Z1zhKdUG3Dm0TqyRqGA" />
        <title>Clockwork Sun | Education Materials</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hammersmith+One">
        <link rel="stylesheet" href="https://clockworksun.com/stylesheets/globalStyles.css">
    </head>
    <body id="MainPage" class="site">

        <!-- Navbar -->
        <?php include ($_SERVER['DOCUMENT_ROOT']."/navbar.html"); ?>

        <!-- Page Content -->

        <!-- Header -->
        <header id="mainHeader" class="w3-container w3-center w3-orange w3-padding-32">
            <h1 class="w3-xxxlarge tx-hammer"><br><b>CLOCKWORK SUN</b></h1>
            <h4 class="tx-hammer"><b>EDUCATION MATERIALS</b></h4>
        </header>

        <!-- Main page content -->
        <main id="mainContent" class="site-content">
            
            <!-- Disclaimer section -->
            <section class="w3-container w3-content w3-row-padding cs-padding-top-32">
                <h3 class="tx-hammer">The following results matched your query:</h3>
            </section>

            <!-- Link section -->
            <section class="w3-container w3-content w3-row-padding cs-padding-bottom-64 w3-light-grey">
                <?php
                    //Declares a sanitized GET input as the directory to search.
                    $path=htmlspecialchars($_GET["path"]);
                    //Absoluteifies path to ensure it's contained to the web server directory
                    $path=realpath(($_SERVER['DOCUMENT_ROOT']).$path);

                    //Aborts if path still ends up outside of the expected directory
                    if (strpos($path, ($_SERVER['DOCUMENT_ROOT'])) !== 0) {
                        http_response_code(500);
                        echo "Invalid path specified";
                        exit(1);
                    }
                ?>
                <div class="w3-container">
                    <h3 class="tx-hammer"><b><?php echo basename($path) ?></b></h4>
                    <?php
                        //Finds all files in the directory and sorts alphabetically.
                        $files = glob("$path/*");
                        sort($files);
                    ?>
                    <!-- Returns all files in the year sorted by last modified. -->
                    <?php foreach ($files as $file) { 
                        $tfile = str_replace(($_SERVER['DOCUMENT_ROOT']), "", $file);
                        ?>
                        <p>
                            <span class="w3-text-grey"><?php echo date("F jS, Y", filemtime($file)) ?></span> | <a href="<?php echo $tfile ?>"><?php echo basename($file) ?></a>
                        </p>
                    <?php } ?>
                </div>
            </section>

        </main>

        <!-- End Page Content -->

        <!-- Footer -->
        <?php include ($_SERVER['DOCUMENT_ROOT']."/footer.html"); ?>

    </body>
</html>
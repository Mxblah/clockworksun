<!DOCTYPE html>
<html lang="en">
    <!-- Page template version 1.2.0 -->
    <head>
        <title>Clockwork Sun | Photography</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hammersmith+One">
        <link rel="stylesheet" href="https://clockworksun.com/stylesheets/globalStyles.css">
    </head>
    <style>
        .thumb {
            object-fit: cover;
            width: 200px;
            height: 200px;
        }
    </style>
    <body id="MainPage" class="site">

        <!-- Navbar -->
        <?php include ($_SERVER['DOCUMENT_ROOT']."/navbar.html"); ?>

        <!-- Page Content -->

        <!-- Header -->
        <header id="mainHeader" class="w3-container w3-center w3-orange w3-padding-32">
            <h1 class="w3-xxxlarge tx-hammer"><br><b>PHOTOGRAPHY</b></h1>
            <h4 class="tx-hammer"><b>STILL IN BETA. BETTER PAGE COMING EVENTUALLY</b></h4>
        </header>

        <!-- PHP inclusion section -->
        <?php include($_SERVER['DOCUMENT_ROOT']."/scripts/get_thumb_from_folder.php") ?>

        <!-- Main page content -->
        <main id="mainContent" class="site-content">

            <!-- First Section -->
            <section class="w3-cell-row w3-center w3-padding-64">

            <?php
                //Grabs all categories in the photos directory and treats them separately
                $tags = glob("photos/*");
                foreach ($tags as $tag) {
                    //Gets the latest image as the thumbnail and displays it ?>
                    <img class="w3-image thumb" src="<?php echo get_thumb_from_folder($tag) ?>">

                <?php } ?>

            </section>

        </main>

        <!-- End Page Content -->

        <!-- Footer -->
        <?php include ($_SERVER['DOCUMENT_ROOT']."/footer.html"); ?>

    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <!-- Page template version 1.2.0 -->
    <head>
        <meta name="google-site-verification" content="PDzzQqxy5RWNOb9YftS2WGk9Z1zhKdUG3Dm0TqyRqGA" />
        <title>Clockwork Sun Blog | Archive</title>
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
            <h1 class="w3-xxxlarge tx-hammer"><br><b>CLOCKWORK SUN BLOG</b></h1>
            <h4 class="tx-hammer"><b>BASIC ARCHIVES</b></h4>
        </header>

        <!-- Main page content -->
        <main id="mainContent" class="site-content">
            
            <!-- Disclaimer section -->
            <section class="w3-container w3-content w3-row-padding cs-padding-top-32">
                <h3 class="tx-hammer">Welcome to the basic archives</h3>
                <p>All posts will be displayed on this page.<br>Newest post on top, oldest on bottom.<br><span class="w3-text-grey">Link to the <a href="/archive">regular archives</a> for those who like pretty pictures.</span></p>
            </section>

            <!-- Link section -->
            <section class="w3-container w3-content w3-row-padding cs-padding-bottom-64 w3-light-grey">
                <?php
                    //Declares HTML as the suffix to strip from names
                    $suffix = '.html';
                    //Grabs all years in the posts directory and separates them.
                    $years = glob("posts/*");
                    rsort($years);
                    foreach ($years as $year) {
                ?>
                <div class="w3-container">
                    <h3 class="tx-hammer"><b><?php echo basename($year) ?></b></h4>
                    <?php
                        //Finds all posts in the year and sorts by modified time.
                        $posts = glob("$year/*/*.html");
                        usort($posts, function($a, $b) {
                            return filemtime($a) < filemtime($b);
                        });
                    ?>
                    <!-- Returns all posts in the year sorted by last modified. -->
                    <?php foreach ($posts as $post) { ?>
                        <p>
                            <span class="w3-text-grey"><?php echo date("F jS, Y", filemtime($post)) ?></span> | <a href="<?php echo $post ?>"><?php echo basename($post, $suffix) ?></a>
                        </p>
                    <?php } ?>
                </div>
                <?php } ?>
            </section>

        </main>

        <!-- End Page Content -->

        <!-- Footer -->
        <?php include ($_SERVER['DOCUMENT_ROOT']."/footer.html"); ?>

    </body>
</html>
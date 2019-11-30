<!DOCTYPE html>
<html lang="en">
    <!-- Page template version 1.2.0 -->
    <head>
        <title>Clockwork Sun - How long until I can escape Houghton</title>
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
            <h1 class="w3-xxxlarge tx-hammer"><br><b>GRADUATION TIMER</b></h1>
            <h4 class="tx-hammer"><b>HOW LONG UNTIL I CAN ESCAPE HOUGHTON</b></h4>
        </header>

        <!-- Main page content -->
        <main id="mainContent" class="site-content">

            <!-- PHP inclusion section -->
            <?php include($_SERVER['DOCUMENT_ROOT']."/scripts/time_elapsed_string.php") ?>

            <!-- First Section -->
            <div class="w3-light-grey">
            <section class="w3-container w3-content w3-row-padding w3-padding-64">
                <div>
                    <h2 class="tx-hammer w3-center w3-jumbo"><?php
                        $time = "Sat, 19 Dec 2020 10:30:00 -0500 (EST)";
                        echo time_elapsed_string($time, true);
                    ?></h2>
                </div>
                <h3 class="cs-padding-top-32 w3-center">remain before I graduate from college and can escape Houghton, MI.</h3>
            </section>
            </div>

        </main>

        <!-- End Page Content -->

        <!-- Footer -->
        <?php include ($_SERVER['DOCUMENT_ROOT']."/footer.html"); ?>

    </body>
</html>
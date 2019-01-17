<!DOCTYPE html>
<html lang="en">
    <!-- Page template version 1.2.0 -->
    <head>
        <title>Clockwork Sun</title>
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
            <h1 class="w3-xxxlarge tx-hammer"><br><b>DAYS SINCE LES COOK EMAILED</b></h1>
            <h4 class="tx-hammer"><b>THE STUDENTS OF MICHIGAN TECH</b></h4>
        </header>

        <!-- Main page content -->
        <main id="mainContent" class="site-content">

            <!-- PHP inclusion section -->
            <?php include($_SERVER['DOCUMENT_ROOT']."/scripts/time_elapsed_string.php") ?>

            <!-- First Section -->
            <section class="w3-container w3-content w3-row-padding w3-padding-64">
                <div class="w3-twothird">
                    <h5 class="w3-padding-32 w3-margin-right"><span class="tx-hammer">It has been </span><h4 class="tx-hammer"><?php echo time_elapsed_string(filemtime('lescookemailtime.txt')) ?></h4> since Les Cook last emailed the students of Michigan Tech.</h5>
                </div>

                <div class="w3-third w3-center">
                    <a href="#"><img src="https://clockworksun.com/media/MTU_gold_400.jpg" alt="MTU" class="w3-round-xlarge w3-image w3-card-4 cs-hover-opacity-light"></a>
                </div>
            </section>

        </main>

        <!-- End Page Content -->

        <!-- Footer -->
        <?php include ($_SERVER['DOCUMENT_ROOT']."/footer.html"); ?>

    </body>
</html>
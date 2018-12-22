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
        <?php include "/navbar.html"; ?>

        <!-- Page Content -->

        <!-- Header -->
        <header id="mainHeader" class="w3-container w3-center w3-green w3-padding-32">
            <h1 class="w3-xxxlarge tx-hammer"><br><b>CLOCKWORK SUN BLOG</b></h1>
            <h4 class="tx-hammer"><b>CURRENTLY IN BETA</b></h4>
        </header>

        <!-- Main page content -->
        <main id="mainContent" class="site-content">
            
            <!-- Link section -->
            <section class="w3-container w3-content w3-row-padding w3-padding-64">
                <?php
                    //Finds all posts and sorts by modified time.
                    $posts = array_merge(glob("posts/*.html"));
                    $posts = array_combine($posts, array_map("filemtime", $posts));
                    arsort($posts);
                    foreach($posts as $post) {
                        echo "<a href=$post>".basename($post)."</a>";
                    }
                ?>
            </section>

        </main>

        <!-- End Page Content -->

        <!-- Footer -->
        <?php include "/footer.html"; ?>

    </body>
</html>
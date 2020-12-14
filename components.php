<?php
/**
 * Template name: Components
 * @package WordPress
 * @subpackage Dell
 * @version 1.0
*/
?>
<!doctype html>
<html lang="en-US">
    <head>
        <title>Dell</title>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/home.min.css">
    </head>
    <body>
        <?php include('includes/header.php'); ?>
        <section class="mt-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="pb-4 text-center">Tabbar</h2>
                    </div>
                </div>
            </div>
        </section>
        <?php include('includes/components/tabbar.php'); ?>
        <section class="mb-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="py-5 text-center">Player</h2>
                    </div>
                    <div class="col-lg-6">
                        <?php include('includes/components/player.php'); ?>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-12">
                        <h2 class="py-5 text-center">Cards</h2>
                    </div>
                    <div class="col-lg-4">
                        <?php include('includes/components/card.php'); ?>
                    </div>
                    <div class="col-lg-4">
                        <?php include('includes/components/card-player.php'); ?>
                    </div>
                    <div class="col-lg-4">
                        <?php include('includes/components/card-small.php'); ?>
                    </div>
                    <div class="col-12">
                        <h2 class="py-5 text-center">Lists</h2>
                    </div>
                    <div class="col-12 mb-5">
                        <?php include('includes/components/accordion.php'); ?>
                    </div>
                    <div class="col-12 mb-5">
                        <?php include('includes/components/list-img.php'); ?>
                    </div>
                    <div class="col-12 mb-5">
                        <?php include('includes/components/list.php'); ?>
                    </div>
                    <div class="col-12 mb-5">
                        <?php include('includes/components/list-reply.php'); ?>
                    </div>
                    <div class="col-12 mb-5">
                        <?php include('includes/components/list-post.php'); ?>
                    </div>
                    <div class="col-12 mb-5">
                        <?php include('includes/components/list-answer.php'); ?>
                    </div>
                    <div class="col-12 mb-5">
                        <?php include('includes/components/list-player.php'); ?>
                    </div>
                    <div class="col-12">
                        <h2 class="py-5 text-center">Tabs</h2>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <?php include('includes/components/tabs-icon.php'); ?>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <?php include('includes/components/tabs.php'); ?>
                    </div>
                    <div class="col-12">
                        <h2 class="py-5 text-center">Special components</h2>
                    </div>
                    <div class="col-lg-5 mb-5">
                        <?php include('includes/components/request.php'); ?>
                    </div>
                    <div class="col-12">
                        <?php include('includes/components/review-data.php'); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>
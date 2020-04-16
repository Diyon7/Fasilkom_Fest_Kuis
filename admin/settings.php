<?php
include "config.php";
if (!isset($_SESSION['admin'])) {
    echo "<script>window.location='" . base_url() . "';</script>";
} else { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Fathur">
        <title>Dashboard</title>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
        <script src="https://kit.fontawesome.com/659604d02a.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="<?= base_url() ?>/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <?php include "_include/sidebar.php" ?>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <?php include "_include/navbar.php" ?>
                    <?php include "_include/content_settings.php" ?>
                </div>
                <!-- Footer -->
                <?php include "_include/footer.php" ?>
            </div>
        </div>

        <?php include "_include/addon.php" ?>
        <?php include "js/addjs.php" ?>
    </body>

    </html>
<?php } ?>
<?php require_once "presentation/platform/layouts/head.php" ?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php require_once "presentation/platform/layouts/sidebar.php" ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php require_once "presentation/platform/layouts/topbar.php" ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $context;?></h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus-circle fa-sm text-white-50"></i> Crear nuevo</a>
                </div>

                <div class="row justify-content-center">
                    <?php require_once $action ?>
                </div>

                <!-- End of Content Wrapper -->

                <!-- Footer -->
                <?php require_once "presentation/platform/layouts/footer.php" ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Logout Modal-->
            <?php require_once "presentation/platform/layouts/modal.php" ?>
        </div>
    </div>
</div>

<!-- Logout Modal-->
<?php require_once "presentation/platform/layouts/scripts.php" ?>
<?php
session_start();
include('koneksi/koneksi.php');
if (isset($_GET["include"])) {
    $include = $_GET["include"];
    if ($include=="konfirmasi-login") {
        include('include/konfirmasilogin.php');
    }elseif ($include=="logout") {
        include("include/logout.php");
    }elseif ($include=="konfirmasi-post") {
      include("include/konfirmasipost.php");
    }elseif ($include=="konfirmasi-comment") {
      include("include/konfirmasicomment.php");
    }elseif ($include=="konfirmasi-register") {
      include("include/konfirmasiregister.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head.php") ?>
</head>
<?php
if (isset($_GET["include"])) {
    $include = $_GET["include"];
    if (isset($_SESSION['id_user'])) {
?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- <?php include("includes/navbar.php") ?> -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include("includes/navbar.php") ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php
                    if ($include=="posting") {
                        include("include/posting.php");
                    }elseif ($include=="detail-post") {
                      include("include/detailpost.php");
                    }else {
                        include("include/home.php");
                    }
                    ?>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php include("includes/footer.php") ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include("includes/script.php") ?>
</body>
<?php
    }elseif(isset($_GET["include"])){
      $include = $_GET["include"];
      if ($include=="register") {
        include("include/register.php");
      }
    }else{
        include("include/login.php");
    }
}else{
    if (isset($_SESSION['id_user'])) {
    ?>
    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- <?php include("includes/sidebar.php") ?> -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include("includes/navbar.php") ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php
                        include("include/home.php");
                    ?>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php include("includes/footer.php") ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php?include=logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/script.php") ?>
    </body>
    <?php
    }else{
        include("include/login.php");
    }
}
?>
</html>
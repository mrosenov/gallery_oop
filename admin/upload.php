<?php include ("includes/header.php"); ?>
<?php include ("includes/navigation.php"); ?>
<div id="layoutSidenav">
            <?php include ("includes/sidebar.php"); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Upload</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Upload list</li>
                        </ol>
                        <div class="row">
                            <?php include ("includes/content.php"); ?>
                        </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
</div>
<?php include ("includes/footer.php"); ?>

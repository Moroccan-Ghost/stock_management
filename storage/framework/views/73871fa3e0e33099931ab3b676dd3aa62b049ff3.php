<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <title>Laravel</title>

    </head>
    <body  id="page-top">
        <div id="app">
             <div id="wrapper">
                 <!-- Side Bar -->
                  <side-bar></side-bar>
                  <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">
                        <!-- Main Content -->
                        <div id="content">
                            <!-- Top Bar -->
                            <nav-bar></nav-bar>
                            <!-- Begin Page Content -->
                                <div class="container-fluid">
                                    <!-- Contenue de la page ici  -->
                                        <div class="container">
                                            <router-view> </router-view>
                                        </div>
                                </div>
                        </div>
                        <!-- Footer -->
                        <foot></foot>
                    </div>
              </div>
              <div class="scroll-button">
                  <!-- Scroll to Top Button-->
                  <a class="scroll-to-top rounded" href="#page-top">
                      <i class="fas fa-angle-up"></i>
                  </a>
              </div>
        </div>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <script src="/storage/vendor/jquery/jquery.min.js"></script>
        <script src="/storage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/storage/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="/storage/js/sb-admin-2.min.js"></script>
        <script src="/storage/vendor/chart.js/Chart.min.js"></script>
        <script src="/storage/js/demo/chart-area-demo.js"></script>
        <script src="/storage/js/demo/chart-pie-demo.js"></script>



    </body>
</html>
<?php /**PATH C:\xampp\htdocs\gestion_stock_2\resources\views/welcome.blade.php ENDPATH**/ ?>
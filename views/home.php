<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PHP POS</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="views/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="views/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="views/assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  
  <!-- inject:css -->
  <link rel="stylesheet" href="views/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="views/assets/images/favicon.png" />

  <!-- plugins:js -->
  <script src="views/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="views/assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="views/assets/js/off-canvas.js"></script>
  <script src="views/assets/js/hoverable-collapse.js"></script>
  <script src="views/assets/js/misc.js"></script>
  <script src="views/assets/js/settings.js"></script>
  <script src="views/assets/js/todolist.js"></script>
  <!-- endinject -->
</head>
<body class="sidebar-mini">
  <?php
      if(isset($_SESSION["login"]) && $_SESSION["login"]=='ok')
      {
        echo '<div class="container-scroller">';
          /*============================= 
          Header
          =============================*/

          include "views/layouts/header.php";

          echo '<div class="container-fluid page-body-wrapper">';
            /*=============================
            Sidebar
            ================================*/

            include "views/layouts/sidebar.php";

            /*=============================
            Main
            ================================*/
            
            echo '<div class="main-panel">';
              echo '<div class="content-wrapper">';
                if(isset($_GET['control']))
                {
                  $control = $_GET['control'];
                  if($control == 'products' || 
                    $control == 'categories' || 
                    $control == 'users' || 
                    $control == 'logout')
                    {
                      include "views/pages/".$control."/index.php";
                    }
                  else {
                      include "views/pages/errors/404.php";
                  }
                }
                else
                {
                  include "views/layouts/content.php";
                }
              echo '</div>';
            echo '</div>';
            /*=============================
              /Main
            ================================*/
          echo '</div>';
        echo '</div>';
      }
      else
      {
        include "views/pages/auth/login.php";
      }
  ?>

  
  <!-- Custom js for this page-->
  <script src="views/assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->

  <script src="ajax/script.js"></script>
</body>
</html>

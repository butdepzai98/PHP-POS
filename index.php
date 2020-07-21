<?php
    //Controller
    require_once "controllers/HomeController.php";
    require_once "controllers/UserController.php";

    //Models
    require_once "models/User.php";

    $template = new HomeController();
    $template->index();
?>
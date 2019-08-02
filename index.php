<?php
    session_start();
    //Include config file
    require('config.php');
    require('classes/Message.php');
    require('classes/Bootstrap.php');
    require('classes/Controller.php');
    require('classes/Model.php');
    //Add controller 
    require('controllers/home.php');
    require('controllers/shares.php');
    require('controllers/users.php');
    //Include model file
    require('models/home.php');
    require('models/share.php');
    require('models/user.php');

    $Bootstrap = new Bootstrap($_GET);
    $controller = $Bootstrap->createController();

    if($controller){
        $controller->executeAction();
    }

?>